<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Actions;

use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SendRecordsNotificationBulkAction;
use Modules\Notify\Datas\SendNotificationBulkResultData;
use Modules\Notify\Filament\Forms\Components\ChannelCheckboxList;
use Modules\Notify\Filament\Forms\Components\MailTemplateSelect;
use Modules\Xot\Filament\Tables\Actions\XotBaseBulkAction;

/**
 * Filament bulk action per inviare notifiche multi-canale basate sui MailTemplate.
 */
class SendNotificationBulkAction extends XotBaseBulkAction
{
    /**
     * Nome di default dell'action.
     *
     * Questo nome viene utilizzato come chiave nell'array delle actions
     * e per la generazione automatica delle traduzioni tramite LangServiceProvider.
     *
     * @return string|null
     */
    public static function getDefaultName(): ?string
    {
        return 'send_notification_bulk';
    }

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('notify::actions.send_notification_bulk.label'))
            ->icon('heroicon-o-paper-airplane')
            ->schema([
                'template_slug' => MailTemplateSelect::make('template_slug')
                    ->searchable()
                    ->preload(),
                'channels' => ChannelCheckboxList::make('channels')
                    ->minItems(1),
            ])
            ->deselectRecordsAfterCompletion()
            ->action(function (Collection $records, array $data): void {
                /** @var Collection<int, Model> $records */
                /** @var array<string, mixed> $data */
                $this->processBulkNotification($records, $data);
            });
    }

    /**
     * Process bulk notification request.
     *
     * @param Collection<int, Model> $records Selected records
     * @param array<string, mixed> $data Form data (template_slug, channels)
     */
    private function processBulkNotification(Collection $records, array $data): void
    {
        // Both fields are required by components, so they're always strings/arrays
        /** @var string $templateSlug */
        $templateSlug = (string) $data['template_slug'];
        /** @var array<string> $channels */
        $channels = (array) $data['channels'];

        if (empty($channels)) {
            $this->sendEmptyChannelsWarning();

            return;
        }

        /** @var SendRecordsNotificationBulkAction $bulkAction */
        $bulkAction = app(SendRecordsNotificationBulkAction::class);
        $result = $bulkAction->execute($records, $templateSlug, array_values($channels));

        $this->sendNotifications($result);
    }

    /**
     * Send warning when no channels are selected.
     */
    private function sendEmptyChannelsWarning(): void
    {
        FilamentNotification::make()
            ->warning()
            ->title(__('notify::actions.send_notification_bulk.notifications.warning.title'))
            ->body(__('notify::actions.send_notification_bulk.notifications.warning.invalid_data'))
            ->send();
    }

    /**
     * Invia le notifiche di risultato all'utente.
     *
     * @param SendNotificationBulkResultData $result
     */
    private function sendNotifications(SendNotificationBulkResultData $result): void
    {
        $successCount = $result->successCount;
        $errorCount = $result->errorCount;
        $errors = $result->errors;
        $totalProcessed = $result->totalProcessed;

        // Notifica successo se ci sono invii riusciti
        if ($successCount > 0) {
            FilamentNotification::make()
                ->success()
                ->title(__('notify::actions.send_notification_bulk.notifications.success.title'))
                ->body(__('notify::actions.send_notification_bulk.notifications.success.body', [
                    'count' => $successCount,
                    'total' => $totalProcessed,
                ]))
                ->send();
        }

        // Notifica errori se presenti
        if ($errorCount > 0) {
            $errorBody = $this->buildErrorMessages($errors);
            $this->sendErrorNotification($errorBody);
        }
    }

    /**
     * Build error messages from errors collection.
     *
     * @param \Illuminate\Support\Collection<int, array{record: string, channel: string, error: string}> $errors
     * @return string
     */
    private function buildErrorMessages(\Illuminate\Support\Collection $errors): string
    {
        /** @var \Illuminate\Support\Collection<int, string> $errorMessages */
        $errorMessages = $errors->take(10)->map(function (array $error): string {
            /** @var array{record: string, channel: string, error: string} $error */
            /** @var string $record */
            $record = $error['record'];
            /** @var string $channel */
            $channel = $error['channel'];
            /** @var string $errorMsg */
            $errorMsg = $error['error'];

            return __('notify::actions.send_notification_bulk.notifications.error.item', [
                'record' => $record,
                'channel' => $channel,
                'error' => $errorMsg,
            ]);
        });

        /** @var string $errorBody */
        $errorBody = $errorMessages->join("\n");

        $errorsCount = $errors->count();
        if ($errorsCount > 10) {
            $remainingCount = $errorsCount - 10;
            $errorBody .= "\n" . __('notify::actions.send_notification_bulk.notifications.error.more_errors', [
                'count' => $remainingCount,
            ]);
        }

        return $errorBody;
    }

    /**
     * Send error notification to user.
     *
     * @param string $errorBody
     */
    private function sendErrorNotification(string $errorBody): void
    {
        FilamentNotification::make()
            ->warning()
            ->title(__('notify::actions.send_notification_bulk.notifications.error.title'))
            ->body($errorBody)
            ->persistent()
            ->send();
    }
}
