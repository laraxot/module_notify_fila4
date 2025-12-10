<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
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
=======
>>>>>>> e53a56570 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
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
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
>>>>>>> f1c9518b (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> 09f5337a8 (.)
=======
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 09f5337a8 (.)
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 12f2f7e (.)
<<<<<<< HEAD
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
=======
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 12f2f7e (.)
>>>>>>> 4e4a7796 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
=======
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)

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
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
        $days = $this->option('days') ?? config('notify.cleanup.older_than_days', 30);
        $batchSize = $this->option('batch') ?? config('notify.cleanup.batch_size', 1000);
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 11b43e822 (.)
=======
        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
        $keepFailed = config('notify.cleanup.keep_failed', true);

        $this->info("Inizio pulizia dei log delle notifiche più vecchi di {$days} giorni...");

        $query = NotificationLog::where('created_at', '<', now()->subDays($days));

        // Se configurato, mantiene i log delle notifiche fallite
        if ($keepFailed) {
<<<<<<< HEAD
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
=======
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
        }

        $totalDeleted = 0;
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
=======
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
        }

        $totalDeleted = 0;
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
<<<<<<< HEAD
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted): void {
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted): void {
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLog::STATUS_FAILED);
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
        }

        $totalDeleted = 0;
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
=======
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
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
>>>>>>> 5fd545e4 (.)
>>>>>>> laraxot/develop
            $logs->each->delete();
            $totalDeleted += $count;
            $this->info("Eliminati {$count} log...");
        });

        $this->info("Pulizia completata. Eliminati {$totalDeleted} log.");

        return Command::SUCCESS;
    }
}
