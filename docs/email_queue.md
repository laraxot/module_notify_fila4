<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
# Sistema Code Email - il progetto

## Panoramica

Sistema di gestione code per l'invio di email in il progetto.

## Struttura Code

### 1. Job

```php
namespace Modules\Notify\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $timeout = 60;
    public $maxExceptions = 3;

    protected $template;
    protected $recipient;
    protected $data;

    public function __construct(MailTemplate $template, string $recipient, array $data = [])
    {
        $this->template = $template;
        $this->recipient = $recipient;
        $this->data = $data;
    }

    public function handle(): void
    {
        try {
            // Crea stat
            $stat = MailStat::create([
                'mail_template_id' => $this->template->id,
                'recipient_email' => $this->recipient,
                'status' => 'pending',
            ]);

            // Invia email
            Mail::to($this->recipient)
                ->send(new TemplatedMail($this->template, $this->data));

            // Aggiorna stat
            $stat->update([
                'status' => 'sent',
                'sent_at' => now(),
            ]);

        } catch (\Exception $e) {
            // Log errore
            Log::error('Mail send failed', [
                'template' => $this->template->id,
                'recipient' => $this->recipient,
                'error' => $e->getMessage(),
            ]);

            // Aggiorna stat
            $stat->update([
                'status' => 'failed',
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function failed(\Throwable $exception): void
    {
        // Notifica amministratore
        Notification::route('mail', config('notify.admin_email'))
            ->notify(new MailFailedNotification(
                $this->template,
                $this->recipient,
                $exception
            ));
    }
}
```

### 2. Queue Manager

```php
namespace Modules\Notify\Services;

class MailQueueManager
{
    public function dispatch(MailTemplate $template, string $recipient, array $data = []): void
    {
        // Verifica limiti
        $this->checkLimits($template);

        // Crea job
        $job = new SendMailJob($template, $recipient, $data);

        // Imposta priorità
        $job->onQueue($this->getQueueName($template));

        // Dispatch
        dispatch($job);
    }

    protected function checkLimits(MailTemplate $template): void
    {
        $count = MailStat::where('mail_template_id', $template->id)
            ->where('created_at', '>=', now()->subHour())
            ->count();

        if ($count >= $template->hourly_limit) {
            throw new \Exception('Hourly limit exceeded');
        }
    }

    protected function getQueueName(MailTemplate $template): string
    {
        return $template->priority === 'high' ? 'mail-high' : 'mail-default';
    }
}
```

## Configurazione

### 1. Queue Config

```php
// config/queue.php
return [
    'connections' => [
        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => null,
        ],
    ],

    'failed' => [
        'driver' => 'database',
        'database' => 'mysql',
        'table' => 'failed_jobs',
    ],
];

// config/notify.php
return [
    'queue' => [
        'high_priority' => 'mail-high',
        'default_priority' => 'mail-default',
        'hourly_limit' => 1000,
        'retry_after' => 60,
        'tries' => 3,
    ],
];
```

### 2. Supervisor Config

```ini
[program:laravel-mail-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/base_<nome progetto>/laravel/artisan queue:work redis --queue=mail-high,mail-default --tries=3 --timeout=60
autostart=true
autorestart=true
user=www-data
numprocs=2
redirect_stderr=true
stdout_logfile=/var/log/supervisor/mail-worker.log
```

## Monitoraggio

### 1. Queue Monitor

```php
namespace Modules\Notify\Services;

class MailQueueMonitor
{
    public function getStats(): array
    {
        return [
            'pending' => $this->getPendingCount(),
            'processing' => $this->getProcessingCount(),
            'failed' => $this->getFailedCount(),
            'processed' => $this->getProcessedCount(),
            'retry' => $this->getRetryCount(),
        ];
    }

    protected function getPendingCount(): int
    {
        return Redis::connection()->llen('queues:mail-high') +
               Redis::connection()->llen('queues:mail-default');
    }

    protected function getFailedCount(): int
    {
        return DB::table('failed_jobs')
            ->where('queue', 'like', 'mail%')
            ->count();
    }
}
```

### 2. Queue Dashboard

```php
namespace Modules\Notify\Filament\Resources;

class MailQueueResource extends XotBaseResource
{
<<<<<<< HEAD
    public static function form(Form $form): Form
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b855 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
    {
        return $form->schema([
            Card::make()->schema([
                // Statistiche
                StatsOverview::make([
                    Stat::make('In Coda', fn () => $this->getPendingCount())
                        ->description('Job in attesa')
                        ->descriptionIcon('heroicon-m-clock'),
                        
                    Stat::make('In Elaborazione', fn () => $this->getProcessingCount())
                        ->description('Job in corso')
                        ->descriptionIcon('heroicon-m-arrow-path'),
                        
                    Stat::make('Falliti', fn () => $this->getFailedCount())
                        ->description('Job falliti')
                        ->descriptionIcon('heroicon-m-x-circle'),
                ]),
                
                // Grafici
                Chart::make('Job per Ora')
                    ->type('line')
                    ->data($this->getJobsByHour()),
                    
                Chart::make('Tempo di Elaborazione')
                    ->type('bar')
                    ->data($this->getProcessingTime()),
                    
                Chart::make('Fallimenti per Causa')
                    ->type('pie')
                    ->data($this->getFailureReasons()),
            ])
        ]);
    }
}
```

## Best Practices

### 1. Rate Limiting

```php
class MailQueueManager
{
    public function dispatch(MailTemplate $template, string $recipient, array $data = []): void
    {
        // Rate limiting per template
        $this->rateLimitTemplate($template);

        // Rate limiting per destinatario
        $this->rateLimitRecipient($recipient);

        // Dispatch
        $this->dispatchJob($template, $recipient, $data);
    }

    protected function rateLimitTemplate(MailTemplate $template): void
    {
        $key = "mail:template:{$template->id}";
        
        if (RateLimiter::tooManyAttempts($key, $template->hourly_limit)) {
            throw new \Exception('Template rate limit exceeded');
        }
        
        RateLimiter::hit($key);
    }

    protected function rateLimitRecipient(string $recipient): void
    {
        $key = "mail:recipient:{$recipient}";
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw new \Exception('Recipient rate limit exceeded');
        }
        
        RateLimiter::hit($key);
    }
}
```

### 2. Error Handling

```php
class SendMailJob
{
    public function handle(): void
    {
        try {
            // Verifica template
            if (!$this->template->isValid()) {
                throw new \Exception('Invalid template');
            }

            // Verifica destinatario
            if (!filter_var($this->recipient, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('Invalid recipient');
            }

            // Invia email
            $this->sendMail();

        } catch (\Exception $e) {
            // Log errore
            $this->logError($e);

            // Notifica fallimento
            $this->notifyFailure($e);

            // Riprova se possibile
            if ($this->attempts() < $this->tries) {
                $this->release(30);
            }

            throw $e;
        }
    }

    protected function logError(\Exception $e): void
    {
        Log::error('Mail send failed', [
            'template' => $this->template->id,
            'recipient' => $this->recipient,
            'attempt' => $this->attempts(),
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Code bloccate**
   - Verifica worker
   - Controlla timeout
   - Debug job

2. **Job falliti**
   - Verifica errori
   - Controlla retry
   - Debug log

3. **Performance lenta**
   - Ottimizza query
   - Aumenta worker
   - Monitora risorse

### 2. Debug

```php
class MailQueueManager
{
    public function debug(): array
    {
        return [
            'redis' => [
                'pending' => $this->getRedisPending(),
                'processing' => $this->getRedisProcessing(),
                'failed' => $this->getRedisFailed(),
            ],
            'supervisor' => [
                'status' => $this->getSupervisorStatus(),
                'workers' => $this->getSupervisorWorkers(),
            ],
            'database' => [
                'failed_jobs' => $this->getFailedJobs(),
                'mail_stats' => $this->getMailStats(),
            ],
        ];
    }
}
```

## Collegamenti
- [Editor WYSIWYG](email-wysiwyg-editor.md)
- [Database Mail System](database-mail-system.md)
- [Email Plugins Analysis](email-plugins-analysis.md)

## Vedi Anche
<<<<<<< HEAD
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
>>>>>>> 75179b85 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> cccb594f (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> cccb594f (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Supervisor](https://laravel.com/project_docs/queues#supervisor-configuration) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Supervisor](https://laravel.com/docs/queues#supervisor-configuration) 
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
