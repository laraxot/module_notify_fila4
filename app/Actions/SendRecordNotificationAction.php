<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification as LaravelNotification;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Enums\ChannelEnum;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;
use Spatie\QueueableAction\QueueableAction;
use Throwable;

class SendRecordNotificationAction
{
    use QueueableAction;

    /**
     * Send notifications to a single record for specified channels.
     *
     * @param Model $record The model (e.g., Client) to notify.
     * @param string $mailTemplateSlug The slug identifier of the mail template to use for content.
     * @param array<int, ChannelEnum> $channels An array of ChannelEnum cases for delivery.
     */
    public function execute(
        Model $record,
        string $mailTemplateSlug,
        array $channels
    ): void {
        // Prepare the Laravel Notification instance
        $notification = new RecordNotification($record, $mailTemplateSlug);

        foreach ($channels as $channelEnum) {
            if (! $channelEnum instanceof ChannelEnum) {
                // Log warning or throw exception if an invalid channel is passed
                continue;
            }

            try {
                $laravelChannel = $channelEnum->getNotificationChannel();
                
                // Determine recipient based on channel and record
                $to = $this->getRecipientForChannel($record, $channelEnum);
                if ($to === null || $to === '') {
                    // Log: Recipient not found for channel
                    continue;
                }

                // Use Notification::route() for both standard and custom channels
                // This is the Laravel-recommended way to send notifications to specific addresses/numbers
                Notification::route($laravelChannel, $to)->notify($notification);

            } catch (Throwable $e) {
                // Log or report error for this specific notification attempt
                report($e);
            }
        }
    }

    /**
     * Get the recipient for a given channel and record.
     *
     * @param Model $record
     * @param ChannelEnum $channelEnum
     * @return string|null
     */
    private function getRecipientForChannel(Model $record, ChannelEnum $channelEnum): ?string
    {
        return match ($channelEnum) {
            ChannelEnum::Mail => $this->getRecordEmail($record),
            ChannelEnum::Sms => $this->getRecordPhone($record),
            ChannelEnum::WhatsApp => $this->getRecordWhatsApp($record),
        };
    }

    /**
     * Get email from record.
     */
    private function getRecordEmail(Model $record): ?string
    {
        $email = app(SafeEloquentCastAction::class)->getStringAttribute($record, 'email', '');
        if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
            return $email;
        }

        return null;
    }

    /**
     * Get phone number from record and normalize it.
     *
     * @param Model $record
     * @return string|null
     */
    private function getRecordPhone(Model $record): ?string
    {
        $phoneNumber = null;

        $phoneAttributes = ['phone', 'mobile', 'telephone', 'contact_phone'];
        foreach ($phoneAttributes as $attr) {
            $value = app(SafeEloquentCastAction::class)->getStringAttribute($record, $attr, '');
            if ($value !== '') {
                $phoneNumber = $value;
                break;
            }
        }

        // Try routeNotificationForSms method if model implements Notifiable trait and phone not found
        if ($phoneNumber === null && method_exists($record, 'routeNotificationForSms')) {
            // Create temporary notification with slug to resolve recipient
            /** @var \Modules\Notify\Notifications\RecordNotification $tempNotification */
            $tempNotification = new RecordNotification($record, 'temp-sms-resolve');
            $phoneNumber = $record->routeNotificationForSms($tempNotification);
        }

        if ($phoneNumber === null || !is_string($phoneNumber) || $phoneNumber === '') {
            return null;
        }

        // Normalize phone number using NormalizePhoneNumberAction
        return app(NormalizePhoneNumberAction::class)->execute($phoneNumber);
    }

    /**
     * Get WhatsApp number from record and normalize it.
     *
     * @param Model $record
     * @return string|null
     */
    private function getRecordWhatsApp(Model $record): ?string
    {
        $whatsappNumber = null;

        // Try whatsapp attribute first
        $value = app(SafeEloquentCastAction::class)->getStringAttribute($record, 'whatsapp', '');
        if ($value !== '') {
            $whatsappNumber = $value;
        }

        // Fallback to phone if whatsapp not available
        if ($whatsappNumber === null) {
            $whatsappNumber = $this->getRecordPhone($record);
        }

        // Try routeNotificationForWhatsApp method if model implements Notifiable trait and whatsapp not found
        if ($whatsappNumber === null && method_exists($record, 'routeNotificationForWhatsApp')) {
            // Create temporary notification with slug to resolve recipient
            /** @var \Modules\Notify\Notifications\RecordNotification $tempNotification */
            $tempNotification = new RecordNotification($record, 'temp-whatsapp-resolve');
            $whatsappNumber = $record->routeNotificationForWhatsApp($tempNotification);
        }

        if ($whatsappNumber === null || !is_string($whatsappNumber) || $whatsappNumber === '') {
            return null;
        }

        // Normalize phone number using NormalizePhoneNumberAction
        return app(NormalizePhoneNumberAction::class)->execute($whatsappNumber);
    }
}