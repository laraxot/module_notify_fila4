<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;

class RecordNotification extends Notification
{
    protected Model $record;

    protected string $slug;

    /** @var array<string, mixed> */
    public array $data = [];

    /** @var array<int, array<string, string>> */
    public array $attachments = [];

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
    }

    /**
     * @param  object  $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (! method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    /**
     * @param  object  $notifiable
     */
    public function toMail($notifiable): SpatieEmail
    {
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $recipient = $notifiable->routeNotificationFor('mail');

            // Valida che sia una stringa valida
            if (is_string($recipient) && ! empty($recipient)) {
                $email->to($recipient);
                $email->setRecipient($recipient);
            }
        }

        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     */
    public function toSms(object $notifiable): ?SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        // dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $recipient = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('sms');
        }
        $fallbackRecipient = config('sms.fallback_to');
        if (is_string($fallbackRecipient)) {
            $recipient = $fallbackRecipient;
        }
        if ($recipient === null) {
            return null;
        }

        $smsData = SmsData::from([
            'from' => 'Xot',
            'to' => $recipient,
            'body' => $email->buildSms(),
        ]);

        return $smsData;
    }

    /**
     * Merge additional data for email template.
     *
     * @param  array<string, mixed>  $data
     */
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);

        return $this;
    }

    /**
     * Add attachments to the notification.
     *
     * @param  array<int, array<string, string>>  $attachments
     */
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);

        return $this;
    }
}
