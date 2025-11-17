<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;

/**
 * Notifica che utilizza i template Mail/SMS configurati nel modulo Notify.
 */
class RecordNotification extends Notification
{
    /**
     * @param  array<string, mixed>  $data
     * @param  array<int, array<string, string>>  $attachments
     */
    public function __construct(
        protected readonly Model $record,
        protected readonly string $slug,
        protected array $data = [],
        protected array $attachments = [],
    ) {}

    /**
     * @return array<int, string|class-string>
     */
    public function via(object $notifiable): array
    {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
            return [];
        }

        $channels = [];
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    public function toMail(object $notifiable): SpatieEmail
    {
        $email = (new SpatieEmail($this->record, $this->slug))
            ->mergeData($this->data)
            ->addAttachments($this->attachments);

        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('mail');
            if (is_string($recipient) && $recipient !== '') {
                $email->to($recipient);
            }
        }

        return $email;
    }

    public function toSms(object $notifiable): ?SmsData
    {
        $recipient = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('sms');
        }

        if ($recipient === null) {
            $fallbackRecipient = config('sms.fallback_to');
            if (is_string($fallbackRecipient) && $fallbackRecipient !== '') {
                $recipient = $fallbackRecipient;
            }
        }

        if (! is_string($recipient) || $recipient === '') {
            return null;
        }

        $email = (new SpatieEmail($this->record, $this->slug))->mergeData($this->data);

        return SmsData::from([
            'from' => config('sms.from', 'Xot'),
            'to' => $recipient,
            'body' => $email->buildSms(),
        ]);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);

        return $this;
    }

    /**
     * @param  array<int, array<string, string>>  $attachments
     */
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);

        return $this;
    }
}
