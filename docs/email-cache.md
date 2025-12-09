<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Sistema Cache Email 

## Panoramica

Sistema di cache per ottimizzare le performance delle email.

## Cache Template

### 1. Template Cache

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailTemplate;

class MailTemplateCache
{
    protected const CACHE_TAG = 'mail-templates';
    protected const CACHE_TTL = 3600; // 1 ora

    public function getTemplate(int $id): ?MailTemplate
    {
        return Cache::tags(self::CACHE_TAG)->get($this->getCacheKey($id));
    }

    public function putTemplate(MailTemplate $template): void
    {
        Cache::tags(self::CACHE_TAG)->put(
            $this->getCacheKey($template->id),
            $template,
            self::CACHE_TTL
        );
    }

    public function forgetTemplate(int $id): void
    {
        Cache::tags(self::CACHE_TAG)->forget($this->getCacheKey($id));
    }

    public function getTemplateStats(int $id): array
    {
        return Cache::tags(self::CACHE_TAG)->get($this->getStatsKey($id)) ?? [];
    }

    public function incrementTemplateStats(int $id, string $stat): void
    {
        $stats = $this->getTemplateStats($id);
        $stats[$stat] = ($stats[$stat] ?? 0) + 1;
        Cache::tags(self::CACHE_TAG)->put(
            $this->getStatsKey($id),
            $stats,
            self::CACHE_TTL
        );
    }

    protected function getCacheKey(int $id): string
    {
        return "template:{$id}";
    }

    protected function getStatsKey(int $id): string
    {
        return "template:{$id}:stats";
    }
}
```

### 2. Template Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Services\MailTemplateCache;

class MailTemplateObserver
{
    protected $cache;

    public function __construct(MailTemplateCache $cache)
    {
        $this->cache = $cache;
    }

    public function saved(MailTemplate $template): void
    {
        $this->cache->putTemplate($template);
    }

    public function deleted(MailTemplate $template): void
    {
        $this->cache->forgetTemplate($template->id);
    }
}
```

## Cache Notifiche

### 1. Notifiche Cache

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailNotification;

class MailNotificationCache
{
    protected const CACHE_TAG = 'mail-notifications';
    protected const CACHE_TTL = 3600; // 1 ora

    public function getNotification(int $id): ?MailNotification
    {
        return Cache::tags(self::CACHE_TAG)->get($this->getCacheKey($id));
    }

    public function putNotification(MailNotification $notification): void
    {
        Cache::tags(self::CACHE_TAG)->put(
            $this->getCacheKey($notification->id),
            $notification,
            self::CACHE_TTL
        );
    }

    public function forgetNotification(int $id): void
    {
        Cache::tags(self::CACHE_TAG)->forget($this->getCacheKey($id));
    }

    public function getNotificationStats(int $id): array
    {
        return Cache::tags(self::CACHE_TAG)->get($this->getStatsKey($id)) ?? [];
    }

    public function incrementNotificationStats(int $id, string $stat): void
    {
        $stats = $this->getNotificationStats($id);
        $stats[$stat] = ($stats[$stat] ?? 0) + 1;
        Cache::tags(self::CACHE_TAG)->put(
            $this->getStatsKey($id),
            $stats,
            self::CACHE_TTL
        );
    }

    protected function getCacheKey(int $id): string
    {
        return "notification:{$id}";
    }

    protected function getStatsKey(int $id): string
    {
        return "notification:{$id}:stats";
    }
}
```

### 2. Notifiche Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailNotification;
use Modules\Notify\Services\MailNotificationCache;

class MailNotificationObserver
{
    protected $cache;

    public function __construct(MailNotificationCache $cache)
    {
        $this->cache = $cache;
    }

    public function saved(MailNotification $notification): void
    {
        $this->cache->putNotification($notification);
    }

    public function deleted(MailNotification $notification): void
    {
        $this->cache->forgetNotification($notification->id);
    }
}
```

## Cache Queue

### 1. Queue Cache

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailQueue;

class MailQueueCache
{
    protected const CACHE_TAG = 'mail-queue';
    protected const CACHE_TTL = 3600; // 1 ora

    public function getQueueStats(): array
    {
        return Cache::tags(self::CACHE_TAG)->get('queue:stats') ?? [];
    }

    public function incrementQueueStats(string $stat): void
    {
        $stats = $this->getQueueStats();
        $stats[$stat] = ($stats[$stat] ?? 0) + 1;
        Cache::tags(self::CACHE_TAG)->put(
            'queue:stats',
            $stats,
            self::CACHE_TTL
        );
    }

    public function getQueueJob(int $id): ?MailQueue
    {
        return Cache::tags(self::CACHE_TAG)->get($this->getCacheKey($id));
    }

    public function putQueueJob(MailQueue $job): void
    {
        Cache::tags(self::CACHE_TAG)->put(
            $this->getCacheKey($job->id),
            $job,
            self::CACHE_TTL
        );
    }

    public function forgetQueueJob(int $id): void
    {
        Cache::tags(self::CACHE_TAG)->forget($this->getCacheKey($id));
    }

    protected function getCacheKey(int $id): string
    {
        return "queue:job:{$id}";
    }
}
```

### 2. Queue Observer

```php
namespace Modules\Notify\Observers;

use Modules\Notify\Models\MailQueue;
use Modules\Notify\Services\MailQueueCache;

class MailQueueObserver
{
    protected $cache;

    public function __construct(MailQueueCache $cache)
    {
        $this->cache = $cache;
    }

    public function saved(MailQueue $job): void
    {
        $this->cache->putQueueJob($job);
    }

    public function deleted(MailQueue $job): void
    {
        $this->cache->forgetQueueJob($job->id);
    }
}
```

## Best Practices

### 1. Cache Tags

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;

class MailCacheTags
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
        foreach (self::all() as $tag) {
            Cache::tags($tag)->flush();
        }
    }
}
```

### 2. Cache Events

```php
namespace Modules\Notify\Events;

use Illuminate\Queue\SerializesModels;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailTemplateCached
{
    use SerializesModels;

    public $template;

    public function __construct(MailTemplate $template)
    {
        $this->template = $template;
    }
}

class MailNotificationCached
{
    use SerializesModels;

    public $notification;

    public function __construct(MailNotification $notification)
    {
        $this->notification = $notification;
    }
}

class MailQueueCached
{
    use SerializesModels;

    public $job;

    public function __construct(MailQueue $job)
    {
        $this->job = $job;
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Cache non aggiornata**
   - Verifica TTL
   - Controlla tags
   - Debug cache

2. **Performance**
   - Monitora memoria
   - Ottimizza TTL
   - Usa tags

3. **Debug**
   - Verifica chiavi
   - Controlla valori
   - Monitora hit/miss

### 2. Debug

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;

class MailCacheDebugger
{
    protected $templateCache;
    protected $notificationCache;
    protected $queueCache;

    public function __construct(
        MailTemplateCache $templateCache,
        MailNotificationCache $notificationCache,
        MailQueueCache $queueCache
    ) {
        $this->templateCache = $templateCache;
        $this->notificationCache = $notificationCache;
        $this->queueCache = $queueCache;
    }

    public function debug(): array
    {
        return [
            'templates' => $this->debugTemplates(),
            'notifications' => $this->debugNotifications(),
            'queue' => $this->debugQueue(),
            'stats' => $this->debugStats(),
        ];
    }

    protected function debugTemplates(): array
    {
        $debug = [];
        $templates = MailTemplate::all();

        foreach ($templates as $template) {
            $debug[$template->id] = [
                'cached' => Cache::tags(MailCacheTags::TEMPLATES)->has($this->templateCache->getCacheKey($template->id)),
                'stats' => $this->templateCache->getTemplateStats($template->id),
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
                'cached' => Cache::tags(MailCacheTags::NOTIFICATIONS)->has($this->notificationCache->getCacheKey($notification->id)),
                'stats' => $this->notificationCache->getNotificationStats($notification->id),
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
                'cached' => Cache::tags(MailCacheTags::QUEUE)->has($this->queueCache->getCacheKey($job->id)),
            ];
        }

        return $debug;
    }

    protected function debugStats(): array
    {
        return [
            'templates' => [
                'hit' => Cache::tags(MailCacheTags::TEMPLATES)->get('hit') ?? 0,
                'miss' => Cache::tags(MailCacheTags::TEMPLATES)->get('miss') ?? 0,
            ],
            'notifications' => [
                'hit' => Cache::tags(MailCacheTags::NOTIFICATIONS)->get('hit') ?? 0,
                'miss' => Cache::tags(MailCacheTags::NOTIFICATIONS)->get('miss') ?? 0,
            ],
            'queue' => [
                'hit' => Cache::tags(MailCacheTags::QUEUE)->get('hit') ?? 0,
                'miss' => Cache::tags(MailCacheTags::QUEUE)->get('miss') ?? 0,
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
- [Laravel Cache](https://laravel.com/docs/cache)
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
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
=======
>>>>>>> fbed41ac (.)
- [Laravel Cache](https://laravel.com/docs/cache)
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
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
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
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
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
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Observers](https://laravel.com/project_docs/eloquent#observers) 
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Observers](https://laravel.com/docs/eloquent#observers) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
