<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Actions;

use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SendRecordNotificationAction;
use Modules\Notify\Enums\ChannelEnum;
use Modules\Notify\Filament\Forms\Components\ChannelCheckboxList;
use Modules\Notify\Filament\Forms\Components\MailTemplateSelect;
use Modules\Xot\Filament\Tables\Actions\XotBaseBulkAction;
use Throwable;

class SendRecordsNotificationBulkAction extends XotBaseBulkAction
{
    /**
     * Set up the bulk action.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->label(__('notify::actions.send_notification_bulk.label'))
            ->icon('heroicon-o-envelope')
            ->color('primary')
            ->action(function (Collection $records, array $data): void {
                /** @var Collection<int, Model> $records */
                /** @var array<string, mixed> $data */
                $this->processNotifications($records, $data);
            })
            ->schema([
                'mail_template_slug' => MailTemplateSelect::make('mail_template_slug'),
                'channels' => ChannelCheckboxList::make('channels'),
            ])
            ->deselectRecordsAfterCompletion();
    }

    /**
     * Process notifications for selected records.
     *
     * @param Collection<int, Model> $records Selected records (e.g., Clients).
     * @param array<string, mixed> $data Form data from the modal (mail_template_slug, channels).
     */
    private function processNotifications(Collection $records, array $data): void
    {
        // Changed for PHPStan: mail_template_slug is required, so it's always a string.
        $mailTemplateSlug = (string) $data['mail_template_slug'];
        /** @var array<string> $selectedChannels */ // Explicitly hint array of strings
        $selectedChannels = (array) $data['channels']; // Explicitly cast to array

        // Removed is_string($mailTemplateSlug) || $mailTemplateSlug === '' check
        // because it's required by form, and type-casted.
        if (empty($selectedChannels)) { // Check if no channels selected
            $this->sendNoChannelsNotification();

            return;
        }

        /** @var array<int, ChannelEnum> $channelsEnum */
        $channelsEnum = $this->getChannelsFromValues($selectedChannels);

        $totalSent = 0;
        $totalFailed = 0;

        foreach ($records as $record) {
            try {
                app(SendRecordNotificationAction::class)->execute($record, $mailTemplateSlug, $channelsEnum);
                $totalSent++;
            } catch (Throwable $e) {
                $totalFailed++;
                // Log the error for this specific record
                report($e);
            }
        }

        $this->notifyResults($totalSent, $totalFailed);
    }

    /**
     * Convert channel values to ChannelEnum.
     *
     * @param array<string> $values
     * @return array<int, ChannelEnum>
     */
    private function getChannelsFromValues(array $values): array
    {
        $channelsEnum = [];
        foreach ($values as $value) {
            $enum = ChannelEnum::tryFrom($value);
            if ($enum !== null) {
                $channelsEnum[] = $enum;
            }
        }

        return $channelsEnum;
    }

    /**
     * Notify the final results.
     */
    private function notifyResults(int $sent, int $failed): void
    {
        if ($sent > 0) {
            Notification::make()
                ->success()
                ->title(__('notify::actions.send_notification_bulk.notifications.success.title'))
                ->body(__('notify::actions.send_notification_bulk.notifications.success.body', ['count' => $sent]))
                ->send();
        }

        if ($failed > 0) {
            Notification::make()
                ->warning()
                ->title(__('notify::actions.send_notification_bulk.notifications.partial_success.title'))
                ->body(__('notify::actions.send_notification_bulk.notifications.partial_success.body', ['failed_count' => $failed]))
                ->send();
        }
    }

    /**
     * Send warning when no channels are selected.
     */
    private function sendNoChannelsNotification(): void
    {
        Notification::make()
            ->danger()
            ->title(__('notify::actions.send_notification_bulk.notifications.warning.title'))
            ->body(__('notify::actions.send_notification_bulk.notifications.warning.no_channels_selected'))
            ->send();
    }
}
