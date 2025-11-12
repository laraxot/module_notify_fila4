<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> 99ff506 (.)
namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
use Illuminate\Notifications\Notification;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
use Modules\Notify\Models\MailTemplate;
>>>>>>> 6a92a74 (.)

class RecordNotification extends Notification
{
    protected Model $record;
<<<<<<< HEAD

    protected string $slug;

    /**
     * @var array<string, mixed>
     */
    protected array $data = [];

<<<<<<< HEAD
    /** @var array<int, array<string, string>> */
<<<<<<< HEAD
=======
    protected string $slug;
    public array $data = [];
>>>>>>> 99ff506 (.)
=======
>>>>>>> a187384 (.)
    public array $attachments = [];
=======
    /**
     * @var array<int, array<string, string>>
     */
    protected array $attachments = [];
>>>>>>> 6a92a74 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = $slug;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $notifiable
=======
=======
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
        

    }
    /** 
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
    }

    /**
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param object $notifiable
>>>>>>> 99ff506 (.)
=======
>>>>>>> 6a92a74 (.)
     * @return array<string|class-string>
     */
    public function via(object $notifiable): array
    {
        $channels = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($notifiable, 'routeNotificationFor')) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        if (!method_exists($notifiable, 'routeNotificationFor')) {
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
     * @param  object  $notifiable
=======
     * @param object $notifiable
     * @return SpatieEmail
>>>>>>> 99ff506 (.)
     */
    public function toMail($notifiable): SpatieEmail
    {
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a187384 (.)
            $recipient = $notifiable->routeNotificationFor('mail');

            // Valida che sia una stringa valida
            if (is_string($recipient) && ! empty($recipient)) {
                $email->to($recipient);
<<<<<<< HEAD
                $email->setRecipient($recipient);
<<<<<<< HEAD
=======
            $to = $notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
>>>>>>> 99ff506 (.)
=======
>>>>>>> a187384 (.)
=======
>>>>>>> 6a92a74 (.)
            }
        }

        return $email;
    }

    /**
     * Get the SMS representation of the notification.
<<<<<<< HEAD
     */
    public function toSms(object $notifiable): ?SmsData
=======
     *
     * @param object $notifiable
     * @return SmsData
     */
    public function toSms(object $notifiable): null|SmsData
>>>>>>> 99ff506 (.)
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
<<<<<<< HEAD
        // dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $recipient = null;
<<<<<<< HEAD
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('sms');
        }
        $fallbackRecipient = config('sms.fallback_to');
        if (is_string($fallbackRecipient)) {
            $recipient = $fallbackRecipient;
        }
        if ($recipient === null) {
=======
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to = null;
=======
>>>>>>> a187384 (.)
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $recipient = $notifiable->routeNotificationFor('sms');
        }
        $fallbackRecipient = config('sms.fallback_to');
        if (is_string($fallbackRecipient)) {
            $recipient = $fallbackRecipient;
        }
<<<<<<< HEAD
        if ($to === null) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
    public function toSms(object $notifiable): ?SmsData
=======
    public function toSms(object $notifiable): null|SmsData
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
        if($to==null){
>>>>>>> a12f125f4a (.)
=======
        if ($to === null) {
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
    public function toSms(object $notifiable): ?SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);
        
        $email=$email->mergeData($this->data);
       
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to=null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to=config('sms.fallback_to');
        if(is_string($fallback_to)){
            $to=$fallback_to;
        }
        if($to==null){
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
        if ($recipient === null) {
>>>>>>> a187384 (.)
            return null;
        }

        $smsData = SmsData::from([
            'from' => 'Xot',
<<<<<<< HEAD
<<<<<<< HEAD
            'to' => $recipient,
=======
            'to' => $to,
>>>>>>> 99ff506 (.)
=======
            'to' => $recipient,
>>>>>>> a187384 (.)
            'body' => $email->buildSms(),
        ]);

        return $smsData;
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a187384 (.)
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

=======
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $this->attachments = array_merge($this->attachments, $attachments);
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->attachments = array_merge($this->attachments, $attachments);
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> a12f125f4a (.)
=======
        $this->attachments = array_merge($this->attachments, $attachments);
>>>>>>> b93ef594b4 (.)
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        return $this;
    }
}
