<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Models\NotificationLog;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Enums\NotificationLogStatusEnum;
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
>>>>>>> f1c9518b (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 12f2f7e (.)
<<<<<<< HEAD
>>>>>>> 4e4a7796 (.)
=======
=======
>>>>>>> 0dd51a0 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 1c9a755 (.)
<<<<<<< HEAD
>>>>>>> 7ffa94fc (rebase 210)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> 7d765981 (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> 2fc60436 (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> 82ae73be (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 12f2f7e (.)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> 7d765981 (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> 2fc60436 (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> 82ae73be (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> 82ae73be (.)
=======
use Modules\Notify\Models\NotificationLog;
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)

class CleanupNotificationLogsCommand extends Command
{
    /**
     * Il nome e la firma del comando console.
     *
     * @var string
     */
    protected $signature = 'notify:cleanup-logs {--days=30 : Elimina i log più vecchi di X giorni} {--batch=1000 : Dimensione del batch per l\'eliminazione}';

    /**
     * La descrizione del comando console.
     *
     * @var string
     */
    protected $description = 'Elimina i log delle notifiche più vecchi del periodo specificato';

    /**
     * Esegue il comando console.
     */
    public function handle(): int
    {
        if (! config('notify.cleanup.enabled')) {
            $this->warn('La pulizia automatica dei log è disabilitata nella configurazione.');

            return Command::FAILURE;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 2fc60436 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 2fc60436 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> 82ae73be (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
        $keepFailed = config('notify.cleanup.keep_failed', true);

        $this->info("Inizio pulizia dei log delle notifiche più vecchi di {$days} giorni...");

        $query = NotificationLog::where('created_at', '<', now()->subDays($days));

        // Se configurato, mantiene i log delle notifiche fallite
        if ($keepFailed) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 82ae73be (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 82ae73be (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 82ae73be (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
        }

        $totalDeleted = 0;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
=======
=======
>>>>>>> c42c734 (.)
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted): void {
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
>>>>>>> 05bc3ad (.)
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
>>>>>>> ab15d0e (.)
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted): void {
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
>>>>>>> e6ac118 (.)
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
>>>>>>> e6c7fb3 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 2fc60436 (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 82ae73be (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> 82ae73be (.)
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
        }

        $totalDeleted = 0;
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            $logs->each->delete();
            $totalDeleted += $count;
            $this->info("Eliminati {$count} log...");
        });

        $this->info("Pulizia completata. Eliminati {$totalDeleted} log.");

        return Command::SUCCESS;
    }
}
