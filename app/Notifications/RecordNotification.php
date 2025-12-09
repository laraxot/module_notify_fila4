<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
declare(strict_types=1);


namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
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
=======
>>>>>>> 4e2ebfb (.)

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string, mixed> */
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    public array $data = [];
    /** @var array<int, array<string, string>> */
=======
    public array $data = [];
>>>>>>> 75179b85 (.)
    public array $attachments = [];
=======
    public array $data=[];
    public array $attachments=[];
>>>>>>> b19cd40 (.)
=======
    public array $data = [];
    public array $attachments = [];
>>>>>>> 4e2ebfb (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
<<<<<<< HEAD
<<<<<<< HEAD
    }

    /**
=======
        

    }
    /** 
>>>>>>> b19cd40 (.)
=======
    }

    /**
>>>>>>> 4e2ebfb (.)
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
<<<<<<< HEAD
=======
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
            if (is_string($to)) {
                $email->to($to);
=======
=======
=======
>>>>>>> 207ac35e (.)
=======
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            $email->to($to);
            if ($to) {
>>>>>>> 75179b85 (.)
                $email->setRecipient($to);
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     *
     * @param object $notifiable
     * @return SmsData
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 4e2ebfb (.)
            return null;
        }

        $smsData = SmsData::from([
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

<<<<<<< HEAD
=======
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->data = array_merge($this->data, $data);
=======
        $this->data=array_merge($this->data,$data);
>>>>>>> b19cd40 (.)
=======
        $this->data = array_merge($this->data, $data);
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->attachments = array_merge($this->attachments, $attachments);
=======
        $this->attachments=array_merge($this->attachments,$attachments);
>>>>>>> b19cd40 (.)
=======
        $this->attachments = array_merge($this->attachments, $attachments);
>>>>>>> 4e2ebfb (.)
        return $this;
    }
}
