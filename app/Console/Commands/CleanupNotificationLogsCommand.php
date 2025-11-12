<?php

declare(strict_types=1);

namespace Modules\Notify\Console\Commands;

use Illuminate\Console\Command;
<<<<<<< HEAD
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Notify\Models\NotificationLog;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 99ff506 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 12f2f7e (.)
=======
>>>>>>> 0dd51a0 (.)
=======
use Modules\Notify\Enums\NotificationLogStatusEnum;
>>>>>>> 1c9a755 (.)
=======
>>>>>>> 2a17243 (.)

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

        $days = (int) ($this->option('days') ?? config('notify.cleanup.older_than_days', 30));
        $batchSize = (int) ($this->option('batch') ?? config('notify.cleanup.batch_size', 1000));
        $keepFailed = config('notify.cleanup.keep_failed', true);

        $this->info("Inizio pulizia dei log delle notifiche più vecchi di {$days} giorni...");

        $query = NotificationLog::where('created_at', '<', now()->subDays($days));

        // Se configurato, mantiene i log delle notifiche fallite
        if ($keepFailed) {
            $query->where('status', '!=', NotificationLogStatusEnum::FAILED);
        }

        $totalDeleted = 0;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
<<<<<<< HEAD
<<<<<<< HEAD
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted): void {
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
>>>>>>> 05bc3ad (.)
=======
        $query->chunkById($batchSize, function ($logs) use (&$totalDeleted) {
<<<<<<< HEAD
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
=======
            $count = $logs->count();
>>>>>>> 0dd51a0 (.)
=======
            $count = $logs->count(); /** @phpstan-ignore method.nonObject */
>>>>>>> 2a17243 (.)
=======
            $count = $logs->count(); /* @phpstan-ignore method.nonObject */
>>>>>>> ea313f3 (.)
            $logs->each->delete();
            $totalDeleted += $count;
            $this->info("Eliminati {$count} log...");
        });

        $this->info("Pulizia completata. Eliminati {$totalDeleted} log.");

        return Command::SUCCESS;
    }
}
