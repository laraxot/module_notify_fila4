<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

use Modules\Xot\Traits\EnumTrait;
use Filament\Support\Contracts\HasIcon;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Notifications\Notifiable;
use Modules\Notify\Channels\WhatsAppChannel;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Actions\Cast\SafeEloquentCastAction;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;

enum ChannelEnum: string implements HasColor, HasIcon, HasLabel
{
    use EnumTrait;

    case Mail = 'mail';
    case Sms = 'sms';
    case WhatsApp = 'whatsapp';

    public function getNotificationChannel(): string
    {
        return match ($this) {
            self::Mail => 'mail',
            self::Sms => \Modules\Notify\Channels\SmsChannel::class,
            self::WhatsApp => \Modules\Notify\Channels\WhatsAppChannel::class,
        };
    }

    /**
     * Get the recipient for a given channel.
     *
     * @param Model $record
     * @return string|null
     */
    public function getRecipient(Model $record): ?string
    {
        return match ($this) {
            self::Mail => $this->getRecordEmail($record),
            self::Sms => $this->getRecordPhone($record),
            self::WhatsApp => $this->getRecordWhatsApp($record),
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
