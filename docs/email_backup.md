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
<<<<<<< HEAD
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
# Sistema Backup Email 

## Panoramica

Sistema di backup per preservare e ripristinare i template email.

## Backup Template

### 1. Template Backup

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailTemplate;

class MailTemplateBackup
{
    protected const BACKUP_PATH = 'backups/templates';
    protected const BACKUP_EXTENSION = 'json';

    public function createBackup(MailTemplate $template): string
    {
        $data = [
            'id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'content' => $template->content,
            'created_at' => $template->created_at,
            'updated_at' => $template->updated_at,
        ];

        $filename = $this->generateBackupFilename($template);
        $path = self::BACKUP_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function restoreBackup(string $path): ?MailTemplate
    {
        if (!Storage::exists($path)) {
            return null;
        }

        $data = json_decode(Storage::get($path), true);
        
        return MailTemplate::updateOrCreate(
            ['id' => $data['id']],
            [
                'name' => $data['name'],
                'version' => $data['version'],
                'content' => $data['content'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],
            ]
        );
    }

    public function listBackups(): array
    {
        $files = Storage::files(self::BACKUP_PATH);
        $backups = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::BACKUP_EXTENSION) {
                $backups[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $backups;
    }

    protected function generateBackupFilename(MailTemplate $template): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $template->id,
            $template->name,
            now()->format('Y_m_d_His'),
            self::BACKUP_EXTENSION
        );
    }
}
```

### 2. Template Scheduler

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Services\MailTemplateBackup;

class MailTemplateBackupCommand extends Command
{
    protected $signature = 'mail:backup-templates';
    protected $description = 'Backup di tutti i template email';

    protected $backup;

    public function __construct(MailTemplateBackup $backup)
    {
        parent::__construct();
        $this->backup = $backup;
    }

    public function handle(): void
    {
        $templates = MailTemplate::all();
        $bar = $this->output->createProgressBar(count($templates));

        $this->info('Inizio backup template...');
        $bar->start();

        foreach ($templates as $template) {
            $this->backup->createBackup($template);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Backup template completato!');
    }
}
```

## Backup Notifiche

### 1. Notifiche Backup

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailNotification;

class MailNotificationBackup
{
    protected const BACKUP_PATH = 'backups/notifications';
    protected const BACKUP_EXTENSION = 'json';

    public function createBackup(MailNotification $notification): string
    {
        $data = [
            'id' => $notification->id,
            'template_id' => $notification->template_id,
            'status' => $notification->status,
            'sent_at' => $notification->sent_at,
            'opened_at' => $notification->opened_at,
            'clicked_at' => $notification->clicked_at,
            'created_at' => $notification->created_at,
            'updated_at' => $notification->updated_at,
        ];

        $filename = $this->generateBackupFilename($notification);
        $path = self::BACKUP_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function restoreBackup(string $path): ?MailNotification
    {
        if (!Storage::exists($path)) {
            return null;
        }

        $data = json_decode(Storage::get($path), true);
        
        return MailNotification::updateOrCreate(
            ['id' => $data['id']],
            [
                'template_id' => $data['template_id'],
                'status' => $data['status'],
                'sent_at' => $data['sent_at'],
                'opened_at' => $data['opened_at'],
                'clicked_at' => $data['clicked_at'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],
            ]
        );
    }

    public function listBackups(): array
    {
        $files = Storage::files(self::BACKUP_PATH);
        $backups = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::BACKUP_EXTENSION) {
                $backups[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $backups;
    }

    protected function generateBackupFilename(MailNotification $notification): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $notification->id,
            $notification->template_id,
            now()->format('Y_m_d_His'),
            self::BACKUP_EXTENSION
        );
    }
}
```

### 2. Notifiche Scheduler

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Services\MailNotificationBackup;

class MailNotificationBackupCommand extends Command
{
    protected $signature = 'mail:backup-notifications';
    protected $description = 'Backup di tutte le notifiche email';

    protected $backup;

    public function __construct(MailNotificationBackup $backup)
    {
        parent::__construct();
        $this->backup = $backup;
    }

    public function handle(): void
    {
        $notifications = MailNotification::all();
        $bar = $this->output->createProgressBar(count($notifications));

        $this->info('Inizio backup notifiche...');
        $bar->start();

        foreach ($notifications as $notification) {
            $this->backup->createBackup($notification);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Backup notifiche completato!');
    }
}
```

## Backup Queue

### 1. Queue Backup

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailQueue;

class MailQueueBackup
{
    protected const BACKUP_PATH = 'backups/queue';
    protected const BACKUP_EXTENSION = 'json';

    public function createBackup(MailQueue $job): string
    {
        $data = [
            'id' => $job->id,
            'template_id' => $job->template_id,
            'status' => $job->status,
            'attempts' => $job->attempts,
            'error' => $job->error,
            'created_at' => $job->created_at,
            'updated_at' => $job->updated_at,
        ];

        $filename = $this->generateBackupFilename($job);
        $path = self::BACKUP_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function restoreBackup(string $path): ?MailQueue
    {
        if (!Storage::exists($path)) {
            return null;
        }

        $data = json_decode(Storage::get($path), true);
        
        return MailQueue::updateOrCreate(
            ['id' => $data['id']],
            [
                'template_id' => $data['template_id'],
                'status' => $data['status'],
                'attempts' => $data['attempts'],
                'error' => $data['error'],
                'created_at' => $data['created_at'],
                'updated_at' => $data['updated_at'],
            ]
        );
    }

    public function listBackups(): array
    {
        $files = Storage::files(self::BACKUP_PATH);
        $backups = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::BACKUP_EXTENSION) {
                $backups[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $backups;
    }

    protected function generateBackupFilename(MailQueue $job): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $job->id,
            $job->template_id,
            now()->format('Y_m_d_His'),
            self::BACKUP_EXTENSION
        );
    }
}
```

### 2. Queue Scheduler

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailQueue;
use Modules\Notify\Services\MailQueueBackup;

class MailQueueBackupCommand extends Command
{
    protected $signature = 'mail:backup-queue';
    protected $description = 'Backup della coda email';

    protected $backup;

    public function __construct(MailQueueBackup $backup)
    {
        parent::__construct();
        $this->backup = $backup;
    }

    public function handle(): void
    {
        $jobs = MailQueue::all();
        $bar = $this->output->createProgressBar(count($jobs));

        $this->info('Inizio backup coda...');
        $bar->start();

        foreach ($jobs as $job) {
            $this->backup->createBackup($job);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Backup coda completato!');
    }
}
```

## Best Practices

### 1. Backup Retention

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class MailBackupRetention
{
    protected const RETENTION_DAYS = 30;

    public function cleanup(): void
    {
        $this->cleanupTemplates();
        $this->cleanupNotifications();
        $this->cleanupQueue();
    }

    protected function cleanupTemplates(): void
    {
        $files = Storage::files('backups/templates');
        $this->deleteExpiredFiles($files);
    }

    protected function cleanupNotifications(): void
    {
        $files = Storage::files('backups/notifications');
        $this->deleteExpiredFiles($files);
    }

    protected function cleanupQueue(): void
    {
        $files = Storage::files('backups/queue');
        $this->deleteExpiredFiles($files);
    }

    protected function deleteExpiredFiles(array $files): void
    {
        $expiryDate = Carbon::now()->subDays(self::RETENTION_DAYS);

        foreach ($files as $file) {
            if (Storage::lastModified($file) < $expiryDate->timestamp) {
                Storage::delete($file);
            }
        }
    }
}
```

### 2. Backup Encryption

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class MailBackupEncryption
{
    public function encrypt(string $path): void
    {
        if (!Storage::exists($path)) {
            return;
        }

        $content = Storage::get($path);
        $encrypted = Crypt::encryptString($content);

        Storage::put($path, $encrypted);
    }

    public function decrypt(string $path): ?string
    {
        if (!Storage::exists($path)) {
            return null;
        }

        $encrypted = Storage::get($path);

        try {
            return Crypt::decryptString($encrypted);
        } catch (\Exception $e) {
            return null;
        }
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Backup Falliti**
   - Verifica spazio
   - Controlla permessi
   - Debug errori

2. **Ripristino Fallito**
   - Verifica integrità
   - Controlla versioni
   - Debug errori

3. **Performance**
   - Ottimizza spazio
   - Gestisci retention
   - Monitora backup

### 2. Debug

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailBackupDebugger
{
    protected $templateBackup;
    protected $notificationBackup;
    protected $queueBackup;
    protected $retention;
    protected $encryption;

    public function __construct(
        MailTemplateBackup $templateBackup,
        MailNotificationBackup $notificationBackup,
        MailQueueBackup $queueBackup,
        MailBackupRetention $retention,
        MailBackupEncryption $encryption
    ) {
        $this->templateBackup = $templateBackup;
        $this->notificationBackup = $notificationBackup;
        $this->queueBackup = $queueBackup;
        $this->retention = $retention;
        $this->encryption = $encryption;
    }

    public function debug(): array
    {
        return [
            'templates' => $this->debugTemplates(),
            'notifications' => $this->debugNotifications(),
            'queue' => $this->debugQueue(),
            'storage' => $this->debugStorage(),
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
                'backups' => $this->templateBackup->listBackups(),
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
                'status' => $notification->status,
                'backups' => $this->notificationBackup->listBackups(),
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
                'backups' => $this->queueBackup->listBackups(),
            ];
        }

        return $debug;
    }

    protected function debugStorage(): array
    {
        return [
            'templates' => [
                'path' => 'backups/templates',
                'size' => $this->getDirectorySize('backups/templates'),
                'count' => count(Storage::files('backups/templates')),
            ],
            'notifications' => [
                'path' => 'backups/notifications',
                'size' => $this->getDirectorySize('backups/notifications'),
                'count' => count(Storage::files('backups/notifications')),
            ],
            'queue' => [
                'path' => 'backups/queue',
                'size' => $this->getDirectorySize('backups/queue'),
                'count' => count(Storage::files('backups/queue')),
            ],
        ];
    }

    protected function getDirectorySize(string $path): int
    {
        $size = 0;
        $files = Storage::files($path);

        foreach ($files as $file) {
            $size += Storage::size($file);
        }

        return $size;
    }
}
```

## Collegamenti
- [Editor WYSIWYG](email-wysiwyg-editor.md)
- [Database Mail System](database-mail-system.md)
- [Email Plugins Analysis](email-plugins-analysis.md)

## Vedi Anche
<<<<<<< HEAD
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ec4cda261 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a75783374 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cccb594f (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b215d516b (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cccb594f (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
- [Laravel Storage](https://laravel.com/project_docs/storage)
- [Laravel Encryption](https://laravel.com/project_docs/encryption)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Storage](https://laravel.com/docs/storage)
- [Laravel Encryption](https://laravel.com/docs/encryption)
- [Laravel Commands](https://laravel.com/docs/artisan) 
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
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
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
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
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
