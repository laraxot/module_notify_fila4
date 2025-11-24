<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b8 (.)
=======

>>>>>>> 7148d73 (.)
namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
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
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
<<<<<<< HEAD
    public array $data = [];
=======
    /** @var array<string, mixed> */
    public array $data = [];
    /** @var array<int, array<string, string>> */
>>>>>>> 7148d73 (.)
    public array $attachments = [];

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
    }

    /**
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function toMail(object $notifiable): SpatieEmail
    {
        $email = (new SpatieEmail($this->record, $this->slug))
            ->mergeData($this->data)
            ->addAttachments($this->attachments);

        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('mail');
            if (is_string($recipient) && $recipient !== '') {
                $email->to($recipient);
=======
=======
>>>>>>> 7148d73 (.)
    /**
     * @param object $notifiable
     * @return SpatieEmail
     */
    public function toMail($notifiable): SpatieEmail
    {
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to = $notifiable->routeNotificationFor('mail');
<<<<<<< HEAD
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
>>>>>>> 75179b8 (.)
=======
            if (is_string($to)) {
                $email->to($to);
                $email->setRecipient($to);
>>>>>>> 7148d73 (.)
            }
        }

        return $email;
    }

<<<<<<< HEAD
<<<<<<< HEAD
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

=======
=======
>>>>>>> 7148d73 (.)
    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
    public function toSms(object $notifiable): null|SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to = config('sms.fallback_to');
        if (is_string($fallback_to)) {
            $to = $fallback_to;
        }
        if ($to === null) {
            return null;
        }

        $smsData = SmsData::from([
            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

        return $smsData;
    }

<<<<<<< HEAD
=======
    /**
     * @param array<string, mixed> $data
     * @return self
     */
>>>>>>> 7148d73 (.)
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

<<<<<<< HEAD
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        $this->attachments = array_merge($this->attachments, $attachments);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
    /**
     * @param array<int, array<string, string>> $attachments
     * @return self
     */
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
>>>>>>> 7148d73 (.)
        return $this;
    }
}
