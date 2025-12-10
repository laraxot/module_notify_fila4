<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Sistema Migrazione Email 

## Panoramica

Sistema di migrazione per gestire le versioni e gli aggiornamenti dei template email.

## Migrazione Template

### 1. Template Migration

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailTemplate;

class MailTemplateMigration
{
    protected const MIGRATION_PATH = 'migrations/templates';
    protected const MIGRATION_EXTENSION = 'json';

    public function createMigration(MailTemplate $template): string
    {
        $data = [
            'id' => $template->id,
            'name' => $template->name,
            'version' => $template->version,
            'content' => $template->content,
            'created_at' => $template->created_at,
            'updated_at' => $template->updated_at,
        ];

        $filename = $this->generateMigrationFilename($template);
        $path = self::MIGRATION_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function runMigration(string $path): ?MailTemplate
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

    public function rollbackMigration(string $path): bool
    {
        if (!Storage::exists($path)) {
            return false;
        }

        $data = json_decode(Storage::get($path), true);
        $template = MailTemplate::find($data['id']);

        if (!$template) {
            return false;
        }

        return $template->delete();
    }

    public function listMigrations(): array
    {
        $files = Storage::files(self::MIGRATION_PATH);
        $migrations = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::MIGRATION_EXTENSION) {
                $migrations[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $migrations;
    }

    protected function generateMigrationFilename(MailTemplate $template): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $template->id,
            $template->name,
            now()->format('Y_m_d_His'),
            self::MIGRATION_EXTENSION
        );
    }
}
```

### 2. Template Command

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Services\MailTemplateMigration;

class MailTemplateMigrationCommand extends Command
{
    protected $signature = 'mail:migrate-templates {--rollback}';
    protected $description = 'Migrazione dei template email';

    protected $migration;

    public function __construct(MailTemplateMigration $migration)
    {
        parent::__construct();
        $this->migration = $migration;
    }

    public function handle(): void
    {
        if ($this->option('rollback')) {
            $this->rollback();
            return;
        }

        $templates = MailTemplate::all();
        $bar = $this->output->createProgressBar(count($templates));

        $this->info('Inizio migrazione template...');
        $bar->start();

        foreach ($templates as $template) {
            $this->migration->createMigration($template);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Migrazione template completata!');
    }

    protected function rollback(): void
    {
        $migrations = $this->migration->listMigrations();
        $bar = $this->output->createProgressBar(count($migrations));

        $this->info('Inizio rollback template...');
        $bar->start();

        foreach ($migrations as $migration) {
            $this->migration->rollbackMigration($migration['path']);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Rollback template completato!');
    }
}
```

## Migrazione Notifiche

### 1. Notifiche Migration

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailNotification;

class MailNotificationMigration
{
    protected const MIGRATION_PATH = 'migrations/notifications';
    protected const MIGRATION_EXTENSION = 'json';

    public function createMigration(MailNotification $notification): string
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

        $filename = $this->generateMigrationFilename($notification);
        $path = self::MIGRATION_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function runMigration(string $path): ?MailNotification
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

    public function rollbackMigration(string $path): bool
    {
        if (!Storage::exists($path)) {
            return false;
        }

        $data = json_decode(Storage::get($path), true);
        $notification = MailNotification::find($data['id']);

        if (!$notification) {
            return false;
        }

        return $notification->delete();
    }

    public function listMigrations(): array
    {
        $files = Storage::files(self::MIGRATION_PATH);
        $migrations = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::MIGRATION_EXTENSION) {
                $migrations[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $migrations;
    }

    protected function generateMigrationFilename(MailNotification $notification): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $notification->id,
            $notification->template_id,
            now()->format('Y_m_d_His'),
            self::MIGRATION_EXTENSION
        );
    }
}
```

### 2. Notifiche Command

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Services\MailNotificationMigration;

class MailNotificationMigrationCommand extends Command
{
    protected $signature = 'mail:migrate-notifications {--rollback}';
    protected $description = 'Migrazione delle notifiche email';

    protected $migration;

    public function __construct(MailNotificationMigration $migration)
    {
        parent::__construct();
        $this->migration = $migration;
    }

    public function handle(): void
    {
        if ($this->option('rollback')) {
            $this->rollback();
            return;
        }

        $notifications = MailNotification::all();
        $bar = $this->output->createProgressBar(count($notifications));

        $this->info('Inizio migrazione notifiche...');
        $bar->start();

        foreach ($notifications as $notification) {
            $this->migration->createMigration($notification);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Migrazione notifiche completata!');
    }

    protected function rollback(): void
    {
        $migrations = $this->migration->listMigrations();
        $bar = $this->output->createProgressBar(count($migrations));

        $this->info('Inizio rollback notifiche...');
        $bar->start();

        foreach ($migrations as $migration) {
            $this->migration->rollbackMigration($migration['path']);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Rollback notifiche completato!');
    }
}
```

## Migrazione Queue

### 1. Queue Migration

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailQueue;

class MailQueueMigration
{
    protected const MIGRATION_PATH = 'migrations/queue';
    protected const MIGRATION_EXTENSION = 'json';

    public function createMigration(MailQueue $job): string
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

        $filename = $this->generateMigrationFilename($job);
        $path = self::MIGRATION_PATH . '/' . $filename;

        Storage::put($path, json_encode($data, JSON_PRETTY_PRINT));

        return $path;
    }

    public function runMigration(string $path): ?MailQueue
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

    public function rollbackMigration(string $path): bool
    {
        if (!Storage::exists($path)) {
            return false;
        }

        $data = json_decode(Storage::get($path), true);
        $job = MailQueue::find($data['id']);

        if (!$job) {
            return false;
        }

        return $job->delete();
    }

    public function listMigrations(): array
    {
        $files = Storage::files(self::MIGRATION_PATH);
        $migrations = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === self::MIGRATION_EXTENSION) {
                $migrations[] = [
                    'path' => $file,
                    'size' => Storage::size($file),
                    'last_modified' => Storage::lastModified($file),
                ];
            }
        }

        return $migrations;
    }

    protected function generateMigrationFilename(MailQueue $job): string
    {
        return sprintf(
            '%s_%s_%s.%s',
            $job->id,
            $job->template_id,
            now()->format('Y_m_d_His'),
            self::MIGRATION_EXTENSION
        );
    }
}
```

### 2. Queue Command

```php
namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
use Modules\Notify\Models\MailQueue;
use Modules\Notify\Services\MailQueueMigration;

class MailQueueMigrationCommand extends Command
{
    protected $signature = 'mail:migrate-queue {--rollback}';
    protected $description = 'Migrazione della coda email';

    protected $migration;

    public function __construct(MailQueueMigration $migration)
    {
        parent::__construct();
        $this->migration = $migration;
    }

    public function handle(): void
    {
        if ($this->option('rollback')) {
            $this->rollback();
            return;
        }

        $jobs = MailQueue::all();
        $bar = $this->output->createProgressBar(count($jobs));

        $this->info('Inizio migrazione coda...');
        $bar->start();

        foreach ($jobs as $job) {
            $this->migration->createMigration($job);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Migrazione coda completata!');
    }

    protected function rollback(): void
    {
        $migrations = $this->migration->listMigrations();
        $bar = $this->output->createProgressBar(count($migrations));

        $this->info('Inizio rollback coda...');
        $bar->start();

        foreach ($migrations as $migration) {
            $this->migration->rollbackMigration($migration['path']);
            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Rollback coda completato!');
    }
}
```

## Best Practices

### 1. Migration Versioning

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class MailMigrationVersioning
{
    protected const VERSION_TABLE = 'mail_migration_versions';

    public function createVersionTable(): void
    {
        if (!Schema::hasTable(self::VERSION_TABLE)) {
            Schema::create(self::VERSION_TABLE, function (Blueprint $table) {
                $table->id();
                $table->string('version');
                $table->string('description');
                $table->timestamp('migrated_at');
                $table->timestamps();
            });
        }
    }

    public function addVersion(string $version, string $description): void
    {
        DB::table(self::VERSION_TABLE)->insert([
            'version' => $version,
            'description' => $description,
            'migrated_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function removeVersion(string $version): void
    {
        DB::table(self::VERSION_TABLE)
            ->where('version', $version)
            ->delete();
    }

    public function getVersions(): array
    {
        return DB::table(self::VERSION_TABLE)
            ->orderBy('migrated_at', 'desc')
            ->get()
            ->toArray();
    }

    public function getCurrentVersion(): ?string
    {
        $version = DB::table(self::VERSION_TABLE)
            ->orderBy('migrated_at', 'desc')
            ->first();

        return $version ? $version->version : null;
    }
}
```

### 2. Migration Validation

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Validator;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailMigrationValidation
{
    public function validateTemplate(array $data): bool
    {
        $validator = Validator::make($data, [
            'id' => 'required|integer',
            'name' => 'required|string',
            'version' => 'required|string',
            'content' => 'required|string',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
        ]);

        return !$validator->fails();
    }

    public function validateNotification(array $data): bool
    {
        $validator = Validator::make($data, [
            'id' => 'required|integer',
            'template_id' => 'required|integer',
            'status' => 'required|string',
            'sent_at' => 'nullable|date',
            'opened_at' => 'nullable|date',
            'clicked_at' => 'nullable|date',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
        ]);

        return !$validator->fails();
    }

    public function validateQueue(array $data): bool
    {
        $validator = Validator::make($data, [
            'id' => 'required|integer',
            'template_id' => 'required|integer',
            'status' => 'required|string',
            'attempts' => 'required|integer',
            'error' => 'nullable|string',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
        ]);

        return !$validator->fails();
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Migrazione Fallita**
   - Verifica dati
   - Controlla versioni
   - Debug errori

2. **Rollback Fallito**
   - Verifica integrità
   - Controlla dipendenze
   - Debug errori

3. **Performance**
   - Ottimizza query
   - Gestisci versioni
   - Monitora migrazione

### 2. Debug

```php
namespace Modules\Notify\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailNotification;
use Modules\Notify\Models\MailQueue;

class MailMigrationDebugger
{
    protected $templateMigration;
    protected $notificationMigration;
    protected $queueMigration;
    protected $versioning;
    protected $validation;

    public function __construct(
        MailTemplateMigration $templateMigration,
        MailNotificationMigration $notificationMigration,
        MailQueueMigration $queueMigration,
        MailMigrationVersioning $versioning,
        MailMigrationValidation $validation
    ) {
        $this->templateMigration = $templateMigration;
        $this->notificationMigration = $notificationMigration;
        $this->queueMigration = $queueMigration;
        $this->versioning = $versioning;
        $this->validation = $validation;
    }

    public function debug(): array
    {
        return [
            'templates' => $this->debugTemplates(),
            'notifications' => $this->debugNotifications(),
            'queue' => $this->debugQueue(),
            'versions' => $this->debugVersions(),
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
                'migrations' => $this->templateMigration->listMigrations(),
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
                'migrations' => $this->notificationMigration->listMigrations(),
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
                'migrations' => $this->queueMigration->listMigrations(),
            ];
        }

        return $debug;
    }

    protected function debugVersions(): array
    {
        return [
            'current' => $this->versioning->getCurrentVersion(),
            'all' => $this->versioning->getVersions(),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
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
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cccb594f (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> cccb594f (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
- [Laravel Migrations](https://laravel.com/project_docs/migrations)
- [Laravel Schema](https://laravel.com/project_docs/schema)
- [Laravel Commands](https://laravel.com/project_docs/artisan) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Schema](https://laravel.com/docs/schema)
- [Laravel Commands](https://laravel.com/docs/artisan) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
