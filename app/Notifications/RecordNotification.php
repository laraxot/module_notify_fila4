<?php

declare(strict_types=1);


namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string, mixed> */
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
    public array $data = [];
    /** @var array<int, array<string, string>> */
=======
    public array $data = [];
>>>>>>> 75179b85 (.)
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
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (is_string($to)) {
                $email->to($to);
=======
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
        
=======
>>>>>>> b93ef594b4 (.)
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
<<<<<<< HEAD
            $to=$notifiable->routeNotificationFor('mail');
>>>>>>> a12f125f4a (.)
=======
            $to = $notifiable->routeNotificationFor('mail');
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
            $email->to($to);
            if ($to) {
>>>>>>> 75179b85 (.)
                $email->setRecipient($to);
            }
        }

        return $email;
    }

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
    /**
     * @param array<string, mixed> $data
     * @return self
     */
=======
>>>>>>> 75179b85 (.)
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

<<<<<<< HEAD
    /**
     * @param array<int, array<string, string>> $attachments
     * @return self
     */
=======
>>>>>>> 75179b85 (.)
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
        return $this;
    }
}
