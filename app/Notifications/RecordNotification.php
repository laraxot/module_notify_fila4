<?php

<<<<<<< HEAD
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
=======
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)

class RecordNotification extends Notification
{
    protected Model $record;
<<<<<<< HEAD

    protected string $slug;

    /** @var array<string, mixed> */
    public array $data = [];

    /** @var array<int, array<string, string>> */
=======
    protected string $slug;
<<<<<<< HEAD
    public array $data = [];
>>>>>>> 99ff506 (.)
    public array $attachments = [];
=======
    public array $data=[];
    public array $attachments=[];
>>>>>>> b19cd40 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
<<<<<<< HEAD
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $notifiable
=======
=======
=======
        

    }
    /** 
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
     * @param object $notifiable
>>>>>>> 99ff506 (.)
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($notifiable, 'routeNotificationFor')) {
=======
=======
>>>>>>> 95531e1 (.)
        if (!method_exists($notifiable, 'routeNotificationFor')) {
>>>>>>> 99ff506 (.)
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
=======
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
<<<<<<< HEAD
            $recipient = $notifiable->routeNotificationFor('mail');

            // Valida che sia una stringa valida
            if (is_string($recipient) && ! empty($recipient)) {
                $email->to($recipient);
                $email->setRecipient($recipient);
=======
            $to = $notifiable->routeNotificationFor('mail');
=======
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
>>>>>>> b19cd40 (.)
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
>>>>>>> 99ff506 (.)
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
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
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to = config('sms.fallback_to');
        if (is_string($fallback_to)) {
            $to = $fallback_to;
        }
        if ($to === null) {
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
            return null;
        }

        $smsData = SmsData::from([
<<<<<<< HEAD
            'from' => 'Xot',
<<<<<<< HEAD
            'to' => $recipient,
=======
            'to' => $to,
>>>>>>> 99ff506 (.)
            'body' => $email->buildSms(),
        ]);

=======
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


>>>>>>> b19cd40 (.)
        return $smsData;
    }

<<<<<<< HEAD
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
<<<<<<< HEAD
        $this->data = array_merge($this->data, $data);
=======
        $this->data=array_merge($this->data,$data);
>>>>>>> b19cd40 (.)
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
<<<<<<< HEAD
        $this->attachments = array_merge($this->attachments, $attachments);
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
        return $this;
    }
}
