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
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 602b8a0a9 (.)
# Sistema Monitoraggio Email 

## Panoramica

Sistema di monitoraggio per analizzare e ottimizzare le performance delle email.

## Monitoraggio Template

### 1. Template Monitor

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailTemplate;

class MailTemplateMonitor
{
    protected const CACHE_PREFIX = 'mail_template_stats_';
    protected const CACHE_TTL = 3600;

    public function getStats(int $templateId): array
    {
        $key = self::CACHE_PREFIX . $templateId;
        return Cache::remember($key, self::CACHE_TTL, function () use ($templateId) {
            $template = MailTemplate::find($templateId);
            if (!$template) {
                return [];
            }

            return [
                'total_sent' => $template->notifications()->count(),
                'total_opened' => $template->notifications()->whereNotNull('opened_at')->count(),
                'total_clicked' => $template->notifications()->whereNotNull('clicked_at')->count(),
                'avg_send_time' => $this->calculateAvgSendTime($template),
                'avg_open_time' => $this->calculateAvgOpenTime($template),
                'avg_click_time' => $this->calculateAvgClickTime($template),
            ];
        });
    }

    public function incrementStats(int $templateId, string $type): void
    {
        $key = self::CACHE_PREFIX . $templateId;
        $stats = $this->getStats($templateId);

        switch ($type) {
            case 'sent':
                $stats['total_sent']++;
                break;
            case 'opened':
                $stats['total_opened']++;
                break;
            case 'clicked':
                $stats['total_clicked']++;
                break;
        }

        Cache::put($key, $stats, self::CACHE_TTL);
    }

    protected function calculateAvgSendTime(MailTemplate $template): float
    {
        $notifications = $template->notifications()
            ->whereNotNull('sent_at')
            ->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->sent_at->diffInSeconds($notification->created_at);
        });

        return $totalTime / $notifications->count();
    }

    protected function calculateAvgOpenTime(MailTemplate $template): float
    {
        $notifications = $template->notifications()
            ->whereNotNull('opened_at')
            ->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->opened_at->diffInSeconds($notification->sent_at);
        });

        return $totalTime / $notifications->count();
    }

    protected function calculateAvgClickTime(MailTemplate $template): float
    {
        $notifications = $template->notifications()
            ->whereNotNull('clicked_at')
            ->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->clicked_at->diffInSeconds($notification->opened_at);
        });

        return $totalTime / $notifications->count();
    }
}
```

### 2. Template Dashboard

```php
namespace Modules\Notify\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Notify\Services\MailTemplateMonitor;

class MailTemplateStatsWidget extends BaseWidget
{
    protected $templateId;
    protected $monitor;

    public function __construct(MailTemplateMonitor $monitor)
    {
        parent::__construct();
        $this->monitor = $monitor;
    }

    public function setTemplateId(int $templateId): self
    {
        $this->templateId = $templateId;
        return $this;
    }

    protected function getStats(): array
    {
        $stats = $this->monitor->getStats($this->templateId);

        return [
            Stat::make('Inviate', $stats['total_sent'])
                ->description('Totale email inviate')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),

            Stat::make('Aperte', $stats['total_opened'])
                ->description('Totale email aperte')
                ->descriptionIcon('heroicon-m-envelope-open')
                ->color('warning'),

            Stat::make('Cliccate', $stats['total_clicked'])
                ->description('Totale email cliccate')
                ->descriptionIcon('heroicon-m-cursor-arrow-rays')
                ->color('danger'),

            Stat::make('Tempo Medio Invio', round($stats['avg_send_time'], 2) . 's')
                ->description('Tempo medio di invio')
                ->descriptionIcon('heroicon-m-clock')
                ->color('success'),

            Stat::make('Tempo Medio Apertura', round($stats['avg_open_time'], 2) . 's')
                ->description('Tempo medio di apertura')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Tempo Medio Click', round($stats['avg_click_time'], 2) . 's')
                ->description('Tempo medio di click')
                ->descriptionIcon('heroicon-m-clock')
                ->color('danger'),
        ];
    }
}
```

## Monitoraggio Notifiche

### 1. Notifiche Monitor

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailNotification;

class MailNotificationMonitor
{
    protected const CACHE_PREFIX = 'mail_notification_stats_';
    protected const CACHE_TTL = 3600;

    public function getStats(): array
    {
        $key = self::CACHE_PREFIX . 'all';
        return Cache::remember($key, self::CACHE_TTL, function () {
            return [
                'total' => MailNotification::count(),
                'pending' => MailNotification::whereNull('sent_at')->count(),
                'sent' => MailNotification::whereNotNull('sent_at')->count(),
                'opened' => MailNotification::whereNotNull('opened_at')->count(),
                'clicked' => MailNotification::whereNotNull('clicked_at')->count(),
                'failed' => MailNotification::whereNotNull('error')->count(),
                'avg_send_time' => $this->calculateAvgSendTime(),
                'avg_open_time' => $this->calculateAvgOpenTime(),
                'avg_click_time' => $this->calculateAvgClickTime(),
            ];
        });
    }

    public function updateStatus(int $notificationId, string $status): void
    {
        $notification = MailNotification::find($notificationId);
        if (!$notification) {
            return;
        }

        switch ($status) {
            case 'sent':
                $notification->update(['sent_at' => now()]);
                break;
            case 'opened':
                $notification->update(['opened_at' => now()]);
                break;
            case 'clicked':
                $notification->update(['clicked_at' => now()]);
                break;
            case 'failed':
                $notification->update(['error' => 'Failed to send']);
                break;
        }

        Cache::forget(self::CACHE_PREFIX . 'all');
    }

    protected function calculateAvgSendTime(): float
    {
        $notifications = MailNotification::whereNotNull('sent_at')->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->sent_at->diffInSeconds($notification->created_at);
        });

        return $totalTime / $notifications->count();
    }

    protected function calculateAvgOpenTime(): float
    {
        $notifications = MailNotification::whereNotNull('opened_at')->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->opened_at->diffInSeconds($notification->sent_at);
        });

        return $totalTime / $notifications->count();
    }

    protected function calculateAvgClickTime(): float
    {
        $notifications = MailNotification::whereNotNull('clicked_at')->get();

        if ($notifications->isEmpty()) {
            return 0;
        }

        $totalTime = $notifications->sum(function ($notification) {
            return $notification->clicked_at->diffInSeconds($notification->opened_at);
        });

        return $totalTime / $notifications->count();
    }
}
```

### 2. Notifiche Dashboard

```php
namespace Modules\Notify\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Notify\Services\MailNotificationMonitor;

class MailNotificationStatsWidget extends BaseWidget
{
    protected $monitor;

    public function __construct(MailNotificationMonitor $monitor)
    {
        parent::__construct();
        $this->monitor = $monitor;
    }

    protected function getStats(): array
    {
        $stats = $this->monitor->getStats();

        return [
            Stat::make('Totale', $stats['total'])
                ->description('Totale notifiche')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('success'),

            Stat::make('In Attesa', $stats['pending'])
                ->description('Notifiche in attesa')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Inviate', $stats['sent'])
                ->description('Notifiche inviate')
                ->descriptionIcon('heroicon-m-envelope-open')
                ->color('success'),

            Stat::make('Aperte', $stats['opened'])
                ->description('Notifiche aperte')
                ->descriptionIcon('heroicon-m-envelope-open')
                ->color('warning'),

            Stat::make('Cliccate', $stats['clicked'])
                ->description('Notifiche cliccate')
                ->descriptionIcon('heroicon-m-cursor-arrow-rays')
                ->color('danger'),

            Stat::make('Fallite', $stats['failed'])
                ->description('Notifiche fallite')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),

            Stat::make('Tempo Medio Invio', round($stats['avg_send_time'], 2) . 's')
                ->description('Tempo medio di invio')
                ->descriptionIcon('heroicon-m-clock')
                ->color('success'),

            Stat::make('Tempo Medio Apertura', round($stats['avg_open_time'], 2) . 's')
                ->description('Tempo medio di apertura')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('Tempo Medio Click', round($stats['avg_click_time'], 2) . 's')
                ->description('Tempo medio di click')
                ->descriptionIcon('heroicon-m-clock')
                ->color('danger'),
        ];
    }
}
```

## Monitoraggio Queue

### 1. Queue Monitor

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailQueue;

class MailQueueMonitor
{
    protected const CACHE_PREFIX = 'mail_queue_stats_';
    protected const CACHE_TTL = 3600;

    public function getStats(): array
    {
        $key = self::CACHE_PREFIX . 'all';
        return Cache::remember($key, self::CACHE_TTL, function () {
            return [
                'total' => MailQueue::count(),
                'pending' => MailQueue::where('status', 'pending')->count(),
                'processing' => MailQueue::where('status', 'processing')->count(),
                'completed' => MailQueue::where('status', 'completed')->count(),
                'failed' => MailQueue::where('status', 'failed')->count(),
                'avg_processing_time' => $this->calculateAvgProcessingTime(),
                'avg_retry_time' => $this->calculateAvgRetryTime(),
            ];
        });
    }

    public function updateStatus(int $jobId, string $status): void
    {
        $job = MailQueue::find($jobId);
        if (!$job) {
            return;
        }

        $job->update(['status' => $status]);
        Cache::forget(self::CACHE_PREFIX . 'all');
    }

    protected function calculateAvgProcessingTime(): float
    {
        $jobs = MailQueue::where('status', 'completed')->get();

        if ($jobs->isEmpty()) {
            return 0;
        }

        $totalTime = $jobs->sum(function ($job) {
            return $job->updated_at->diffInSeconds($job->created_at);
        });

        return $totalTime / $jobs->count();
    }

    protected function calculateAvgRetryTime(): float
    {
        $jobs = MailQueue::where('attempts', '>', 1)->get();

        if ($jobs->isEmpty()) {
            return 0;
        }

        $totalTime = $jobs->sum(function ($job) {
            return $job->updated_at->diffInSeconds($job->created_at);
        });

        return $totalTime / $jobs->count();
    }
}
```

### 2. Queue Dashboard

```php
namespace Modules\Notify\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Modules\Notify\Services\MailQueueMonitor;

class MailQueueStatsWidget extends BaseWidget
{
    protected $monitor;

    public function __construct(MailQueueMonitor $monitor)
    {
        parent::__construct();
        $this->monitor = $monitor;
    }

    protected function getStats(): array
    {
        $stats = $this->monitor->getStats();

        return [
            Stat::make('Totale', $stats['total'])
                ->description('Totale job')
                ->descriptionIcon('heroicon-m-queue-list')
                ->color('success'),

            Stat::make('In Attesa', $stats['pending'])
                ->description('Job in attesa')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),

            Stat::make('In Elaborazione', $stats['processing'])
                ->description('Job in elaborazione')
                ->descriptionIcon('heroicon-m-arrow-path')
                ->color('warning'),

            Stat::make('Completati', $stats['completed'])
                ->description('Job completati')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('Falliti', $stats['failed'])
                ->description('Job falliti')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger'),

            Stat::make('Tempo Medio Elaborazione', round($stats['avg_processing_time'], 2) . 's')
                ->description('Tempo medio di elaborazione')
                ->descriptionIcon('heroicon-m-clock')
                ->color('success'),

            Stat::make('Tempo Medio Retry', round($stats['avg_retry_time'], 2) . 's')
                ->description('Tempo medio di retry')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
        ];
    }
}
```

## Best Practices

### 1. Monitoraggio Alert

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailMonitoringAlert
{
    protected const CACHE_PREFIX = 'mail_alert_';
    protected const CACHE_TTL = 3600;

    public function checkAlerts(): array
    {
        return [
            'templates' => $this->checkTemplateAlerts(),
            'notifications' => $this->checkNotificationAlerts(),
            'queue' => $this->checkQueueAlerts(),
        ];
    }

    protected function checkTemplateAlerts(): array
    {
        $alerts = [];
        $templates = MailTemplate::all();

        foreach ($templates as $template) {
            $stats = app(MailTemplateMonitor::class)->getStats($template->id);

            if ($stats['total_sent'] > 0) {
                $openRate = ($stats['total_opened'] / $stats['total_sent']) * 100;
                $clickRate = ($stats['total_clicked'] / $stats['total_sent']) * 100;

                if ($openRate < 20) {
                    $alerts[] = [
                        'type' => 'low_open_rate',
                        'template_id' => $template->id,
                        'template_name' => $template->name,
                        'rate' => $openRate,
                        'threshold' => 20,
                    ];
                }

                if ($clickRate < 5) {
                    $alerts[] = [
                        'type' => 'low_click_rate',
                        'template_id' => $template->id,
                        'template_name' => $template->name,
                        'rate' => $clickRate,
                        'threshold' => 5,
                    ];
                }
            }
        }

        return $alerts;
    }

    protected function checkNotificationAlerts(): array
    {
        $alerts = [];
        $stats = app(MailNotificationMonitor::class)->getStats();

        if ($stats['total'] > 0) {
            $failureRate = ($stats['failed'] / $stats['total']) * 100;

            if ($failureRate > 5) {
                $alerts[] = [
                    'type' => 'high_failure_rate',
                    'rate' => $failureRate,
                    'threshold' => 5,
                ];
            }
        }

        return $alerts;
    }

    protected function checkQueueAlerts(): array
    {
        $alerts = [];
        $stats = app(MailQueueMonitor::class)->getStats();

        if ($stats['total'] > 0) {
            $failureRate = ($stats['failed'] / $stats['total']) * 100;
            $pendingRate = ($stats['pending'] / $stats['total']) * 100;

            if ($failureRate > 5) {
                $alerts[] = [
                    'type' => 'high_queue_failure_rate',
                    'rate' => $failureRate,
                    'threshold' => 5,
                ];
            }

            if ($pendingRate > 20) {
                $alerts[] = [
                    'type' => 'high_pending_rate',
                    'rate' => $pendingRate,
                    'threshold' => 20,
                ];
            }
        }

        return $alerts;
    }
}
```

### 2. Monitoraggio Report

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailMonitoringReport
{
    protected const CACHE_PREFIX = 'mail_report_';
    protected const CACHE_TTL = 3600;

    public function generateReport(): array
    {
        return [
            'templates' => $this->generateTemplateReport(),
            'notifications' => $this->generateNotificationReport(),
            'queue' => $this->generateQueueReport(),
            'alerts' => app(MailMonitoringAlert::class)->checkAlerts(),
        ];
    }

    protected function generateTemplateReport(): array
    {
        $report = [];
        $templates = MailTemplate::all();

        foreach ($templates as $template) {
            $stats = app(MailTemplateMonitor::class)->getStats($template->id);
            $report[$template->id] = [
                'name' => $template->name,
                'version' => $template->version,
                'stats' => $stats,
                'performance' => [
                    'open_rate' => $stats['total_sent'] > 0 ? ($stats['total_opened'] / $stats['total_sent']) * 100 : 0,
                    'click_rate' => $stats['total_sent'] > 0 ? ($stats['total_clicked'] / $stats['total_sent']) * 100 : 0,
                ],
            ];
        }

        return $report;
    }

    protected function generateNotificationReport(): array
    {
        $stats = app(MailNotificationMonitor::class)->getStats();

        return [
            'stats' => $stats,
            'performance' => [
                'success_rate' => $stats['total'] > 0 ? (($stats['total'] - $stats['failed']) / $stats['total']) * 100 : 0,
                'open_rate' => $stats['sent'] > 0 ? ($stats['opened'] / $stats['sent']) * 100 : 0,
                'click_rate' => $stats['opened'] > 0 ? ($stats['clicked'] / $stats['opened']) * 100 : 0,
            ],
        ];
    }

    protected function generateQueueReport(): array
    {
        $stats = app(MailQueueMonitor::class)->getStats();

        return [
            'stats' => $stats,
            'performance' => [
                'success_rate' => $stats['total'] > 0 ? (($stats['total'] - $stats['failed']) / $stats['total']) * 100 : 0,
                'processing_rate' => $stats['total'] > 0 ? ($stats['completed'] / $stats['total']) * 100 : 0,
            ],
        ];
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Performance Basse**
   - Verifica cache
   - Controlla query
   - Debug stats

2. **Alert Falsi**
   - Verifica soglie
   - Controlla dati
   - Debug alert

3. **Report Errati**
   - Verifica calcoli
   - Controlla fonti
   - Debug report

### 2. Debug

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Cache;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailMonitoringDebugger
{
    protected $templateMonitor;
    protected $notificationMonitor;
    protected $queueMonitor;
    protected $alert;
    protected $report;

    public function __construct(
        MailTemplateMonitor $templateMonitor,
        MailNotificationMonitor $notificationMonitor,
        MailQueueMonitor $queueMonitor,
        MailMonitoringAlert $alert,
        MailMonitoringReport $report
    ) {
        $this->templateMonitor = $templateMonitor;
        $this->notificationMonitor = $notificationMonitor;
        $this->queueMonitor = $queueMonitor;
        $this->alert = $alert;
        $this->report = $report;
    }

    public function debug(): array
    {
        return [
            'templates' => $this->debugTemplates(),
            'notifications' => $this->debugNotifications(),
            'queue' => $this->debugQueue(),
            'alerts' => $this->debugAlerts(),
            'reports' => $this->debugReports(),
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
                'stats' => $this->templateMonitor->getStats($template->id),
                'cache' => [
                    'key' => 'mail_template_stats_' . $template->id,
                    'exists' => Cache::has('mail_template_stats_' . $template->id),
                ],
            ];
        }

        return $debug;
    }

    protected function debugNotifications(): array
    {
        $stats = $this->notificationMonitor->getStats();

        return [
            'stats' => $stats,
            'cache' => [
                'key' => 'mail_notification_stats_all',
                'exists' => Cache::has('mail_notification_stats_all'),
            ],
        ];
    }

    protected function debugQueue(): array
    {
        $stats = $this->queueMonitor->getStats();

        return [
            'stats' => $stats,
            'cache' => [
                'key' => 'mail_queue_stats_all',
                'exists' => Cache::has('mail_queue_stats_all'),
            ],
        ];
    }

    protected function debugAlerts(): array
    {
        return [
            'templates' => $this->alert->checkTemplateAlerts(),
            'notifications' => $this->alert->checkNotificationAlerts(),
            'queue' => $this->alert->checkQueueAlerts(),
        ];
    }

    protected function debugReports(): array
    {
        return [
            'templates' => $this->report->generateTemplateReport(),
            'notifications' => $this->report->generateNotificationReport(),
            'queue' => $this->report->generateQueueReport(),
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
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
<<<<<<< HEAD
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
=======
>>>>>>> 4c323e61 (.)
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
>>>>>>> 82e5ee2d (rebase 210)
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
=======
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
=======
>>>>>>> 3ee54c5d (.)
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 763771402 (.)
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 763771402 (.)
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d9e649ac3 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
- [Laravel Cache](https://laravel.com/project_docs/cache)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
- [Laravel Events](https://laravel.com/project_docs/events) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Commands](https://laravel.com/docs/artisan) 
- [Laravel Events](https://laravel.com/docs/events) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
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
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
>>>>>>> 116df547 (.)
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
=======
>>>>>>> cb5f23b0 (.)
>>>>>>> 8db6adf75 (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
>>>>>>> f9ec4f86 (.)
>>>>>>> 8134673e1 (.)
=======
>>>>>>> 602b8a0a9 (.)
=======
>>>>>>> 763771402 (.)
=======
=======
>>>>>>> 4b544042 (.)
>>>>>>> a85ebf6cc (.)
