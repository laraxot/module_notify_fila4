<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Sistema Log Email 

## Panoramica

Sistema di log per tracciare e monitorare le attività del sistema email.

## Log Template

### 1. Template Log

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Log;
use Modules\Notify\Models\MailTemplate;

class MailTemplateLog
{
    protected const LOG_CHANNEL = 'mail-templates';

    public function logCreate(MailTemplate $template): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Template creato', [
            'template_id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'created_at' => now(),
        ]);
    }

    public function logUpdate(MailTemplate $template): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Template aggiornato', [
            'template_id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'updated_at' => now(),
        ]);
    }

    public function logDelete(MailTemplate $template): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Template eliminato', [
            'template_id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'deleted_at' => now(),
        ]);
    }

    public function logError(MailTemplate $template, \Throwable $e): void
    {
        Log::channel(self::LOG_CHANNEL)->error('Errore template', [
            'template_id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'occurred_at' => now(),
        ]);
    }
}
```

### 2. Template Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Services\MailTemplateLog;

class MailTemplateObserver
{
    protected $log;

    public function __construct(MailTemplateLog $log)
    {
        $this->log = $log;
    }

    public function created(MailTemplate $template): void
    {
        $this->log->logCreate($template);
    }

    public function updated(MailTemplate $template): void
    {
        $this->log->logUpdate($template);
    }

    public function deleted(MailTemplate $template): void
    {
        $this->log->logDelete($template);
    }
}
```

## Log Notifiche

### 1. Notifiche Log

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Log;
use Modules\Notify\Models\MailNotification;

class MailNotificationLog
{
    protected const LOG_CHANNEL = 'mail-notifications';

    public function logSend(MailNotification $notification): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Notifica inviata', [
            'notification_id' => $notification->id,
            'template_id' => $notification->template_id,
            'recipients' => $notification->recipients,
            'sent_at' => now(),
        ]);
    }

    public function logOpen(MailNotification $notification): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Notifica aperta', [
            'notification_id' => $notification->id,
            'template_id' => $notification->template_id,
            'opened_at' => now(),
        ]);
    }

    public function logClick(MailNotification $notification): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Notifica cliccata', [
            'notification_id' => $notification->id,
            'template_id' => $notification->template_id,
            'clicked_at' => now(),
        ]);
    }

    public function logError(MailNotification $notification, \Throwable $e): void
    {
        Log::channel(self::LOG_CHANNEL)->error('Errore notifica', [
            'notification_id' => $notification->id,
            'template_id' => $notification->template_id,
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
            'occurred_at' => now(),
        ]);
    }
}
```

### 2. Notifiche Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailNotification;
use Modules\Notify\Services\MailNotificationLog;

class MailNotificationObserver
{
    protected $log;

    public function __construct(MailNotificationLog $log)
    {
        $this->log = $log;
    }

    public function saved(MailNotification $notification): void
    {
        if ($notification->wasRecentlyCreated) {
            $this->log->logSend($notification);
        }
    }

    public function updated(MailNotification $notification): void
    {
        if ($notification->isDirty('opened_at')) {
            $this->log->logOpen($notification);
        }

        if ($notification->isDirty('clicked_at')) {
            $this->log->logClick($notification);
        }
    }
}
```

## Log Queue

### 1. Queue Log

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Log;
use Modules\Notify\Models\MailQueue;

class MailQueueLog
{
    protected const LOG_CHANNEL = 'mail-queue';

    public function logAdd(MailQueue $job): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Job aggiunto', [
            'job_id' => $job->id,
            'template_id' => $job->template_id,
            'status' => $job->status,
            'added_at' => now(),
        ]);
    }

    public function logProcess(MailQueue $job): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Job processato', [
            'job_id' => $job->id,
            'template_id' => $job->template_id,
            'status' => $job->status,
            'processed_at' => now(),
        ]);
    }

    public function logFail(MailQueue $job): void
    {
        Log::channel(self::LOG_CHANNEL)->error('Job fallito', [
            'job_id' => $job->id,
            'template_id' => $job->template_id,
            'status' => $job->status,
            'error' => $job->error,
            'failed_at' => now(),
        ]);
    }

    public function logRetry(MailQueue $job): void
    {
        Log::channel(self::LOG_CHANNEL)->info('Job riprovato', [
            'job_id' => $job->id,
            'template_id' => $job->template_id,
            'status' => $job->status,
            'attempts' => $job->attempts,
            'retried_at' => now(),
        ]);
    }
}
```

### 2. Queue Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailQueue;
use Modules\Notify\Services\MailQueueLog;

class MailQueueObserver
{
    protected $log;

    public function __construct(MailQueueLog $log)
    {
        $this->log = $log;
    }

    public function created(MailQueue $job): void
    {
        $this->log->logAdd($job);
    }

    public function updated(MailQueue $job): void
    {
        if ($job->isDirty('status')) {
            switch ($job->status) {
                case 'processing':
                    $this->log->logProcess($job);
                    break;
                case 'failed':
                    $this->log->logFail($job);
                    break;
                case 'retrying':
                    $this->log->logRetry($job);
                    break;
            }
        }
    }
}
```

## Best Practices

### 1. Log Channels

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Log;

class MailLogChannels
{
    public const TEMPLATES = 'mail-templates';
    public const NOTIFICATIONS = 'mail-notifications';
    public const QUEUE = 'mail-queue';

    public static function all(): array
    {
        return [
            self::TEMPLATES,
            self::NOTIFICATIONS,
            self::QUEUE,
        ];
    }

    public static function clear(): void
    {
        foreach (self::all() as $channel) {
            Log::channel($channel)->info('Log cleared', [
                'cleared_at' => now(),
            ]);
        }
    }
}
```

### 2. Log Events

```php
namespace Modules\Notify\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailTemplateLogged
{
    use SerializesModels;

    public $template;
    public $action;

    public function __construct(MailTemplate $template, string $action)
    {
        $this->template = $template;
        $this->action = $action;
    }
}

class MailNotificationLogged
{
    use SerializesModels;

    public $notification;
    public $action;

    public function __construct(MailNotification $notification, string $action)
    {
        $this->notification = $notification;
        $this->action = $action;
    }
}

class MailQueueLogged
{
    use SerializesModels;

    public $job;
    public $action;

    public function __construct(MailQueue $job, string $action)
    {
        $this->job = $job;
        $this->action = $action;
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Log non scritti**
   - Verifica permessi
   - Controlla canali
   - Debug log

2. **Performance**
   - Monitora spazio
   - Ottimizza rotazione
   - Usa canali

3. **Debug**
   - Verifica livelli
   - Controlla formati
   - Monitora errori

### 2. Debug

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Log;

class MailLogDebugger
{
    protected $templateLog;
    protected $notificationLog;
    protected $queueLog;

    public function __construct(
        MailTemplateLog $templateLog,
        MailNotificationLog $notificationLog,
        MailQueueLog $queueLog
    ) {
        $this->templateLog = $templateLog;
        $this->notificationLog = $notificationLog;
        $this->queueLog = $queueLog;
    }

    public function debug(): array
    {
        return [
            'templates' => $this->debugTemplates(),
            'notifications' => $this->debugNotifications(),
            'queue' => $this->debugQueue(),
            'channels' => $this->debugChannels(),
        ];
    }

    protected function debugTemplates(): array
    {
        $debug = [];
        $templates = MailTemplate::all();

        foreach ($templates as $template) {
            $debug[$template->id] = [
                'name' => $template->name,
                'version' => $template->version,
                'created_at' => $template->created_at,
                'updated_at' => $template->updated_at,
                'deleted_at' => $template->deleted_at,
            ];
        }

        return $debug;
    }

    protected function debugNotifications(): array
    {
        $debug = [];
        $notifications = MailNotification::all();

        foreach ($notifications as $notification) {
            $debug[$notification->id] = [
                'template_id' => $notification->template_id,
                'recipients' => $notification->recipients,
                'sent_at' => $notification->sent_at,
                'opened_at' => $notification->opened_at,
                'clicked_at' => $notification->clicked_at,
            ];
        }

        return $debug;
    }

    protected function debugQueue(): array
    {
        $debug = [];
        $jobs = MailQueue::all();

        foreach ($jobs as $job) {
            $debug[$job->id] = [
                'template_id' => $job->template_id,
                'status' => $job->status,
                'attempts' => $job->attempts,
                'error' => $job->error,
                'created_at' => $job->created_at,
                'updated_at' => $job->updated_at,
            ];
        }

        return $debug;
    }

    protected function debugChannels(): array
    {
        return [
            'templates' => [
                'enabled' => Log::channel(MailLogChannels::TEMPLATES)->isEnabled(),
                'level' => Log::channel(MailLogChannels::TEMPLATES)->getLevel(),
            ],
            'notifications' => [
                'enabled' => Log::channel(MailLogChannels::NOTIFICATIONS)->isEnabled(),
                'level' => Log::channel(MailLogChannels::NOTIFICATIONS)->getLevel(),
            ],
            'queue' => [
                'enabled' => Log::channel(MailLogChannels::QUEUE)->isEnabled(),
                'level' => Log::channel(MailLogChannels::QUEUE)->getLevel(),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> cccb594f (.)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
