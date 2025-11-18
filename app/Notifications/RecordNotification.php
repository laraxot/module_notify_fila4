<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
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
=======
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;

class RecordNotification extends Notification
{
    protected Model $record;

    protected string $slug;

    /**
     * @var array<string, mixed>
     */
    protected array $data = [];

    /**
     * @var array<int, array<string, string>>
     */
    protected array $attachments = [];

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = $slug;
    }

    /**
     * @return array<string|class-string>
     */
    public function via(object $notifiable): array
    {
        $channels = [];
        if (! method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
>>>>>>> 8bc2fc9f (first)
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

<<<<<<< HEAD
    public function toMail(object $notifiable): SpatieEmail
    {
        $email = (new SpatieEmail($this->record, $this->slug))
            ->mergeData($this->data)
            ->addAttachments($this->attachments);

        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('mail');
            if (is_string($recipient) && $recipient !== '') {
=======
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
>>>>>>> 8bc2fc9f (first)
                $email->to($recipient);
            }
        }

        return $email;
    }

<<<<<<< HEAD
    public function toSms(object $notifiable): ?SmsData
    {
=======
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
>>>>>>> 8bc2fc9f (first)
        $recipient = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('sms');
        }
<<<<<<< HEAD

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
=======
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
>>>>>>> 8bc2fc9f (first)
     * @param  array<string, mixed>  $data
     */
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);

        return $this;
    }

    /**
<<<<<<< HEAD
=======
     * Add attachments to the notification.
     *
>>>>>>> 8bc2fc9f (first)
     * @param  array<int, array<string, string>>  $attachments
     */
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);

        return $this;
    }
}
