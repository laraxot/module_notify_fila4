<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
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
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
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
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
=======
>>>>>>> fbed41ac (.)
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
=======
>>>>>>> fbed41ac (.)
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> e2f1a4045 (.)
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36321fcb (.)
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
