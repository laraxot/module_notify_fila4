<?php

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
=======
<<<<<<< HEAD
=======
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
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
=======
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)

class RecordNotification extends Notification
{
    protected Model $record;

    protected string $slug;
<<<<<<< HEAD

<<<<<<< HEAD
    /**
     * @var array<string, mixed>
     */
    protected array $data = [];

    /**
     * @var array<int, array<string, string>>
     */
    protected array $attachments = [];
=======
    /** @var array<string, mixed> */
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
    public array $data = [];

    /** @var array<int, array<string, string>> */
    public array $attachments = [];
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $data = [];
    public array $attachments = [];
=======
    public array $data=[];
    public array $attachments=[];
>>>>>>> a12f125f4a (.)
=======
    public array $data = [];
    public array $attachments = [];
>>>>>>> b93ef594b4 (.)
=======
    public array $data=[];
    public array $attachments=[];
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
<<<<<<< HEAD
        $this->slug = $slug;
    }

    /**
=======
        $this->slug = Str::slug($slug);
<<<<<<< HEAD
    }

    /**
<<<<<<< HEAD
     * @param  object  $notifiable
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
        

    }
    /** 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    }

    /**
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @param object $notifiable
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
     * @return array<string|class-string>
     */
    public function via(object $notifiable): array
    {
        $channels = [];
<<<<<<< HEAD
        if (! method_exists($notifiable, 'routeNotificationFor')) {
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        if (!method_exists($notifiable, 'routeNotificationFor')) {
>>>>>>> f813254 (.)
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
<<<<<<< HEAD
=======
=======
        if (!method_exists($notifiable, 'routeNotificationFor')){
=======
        if (!method_exists($notifiable, 'routeNotificationFor')) {
>>>>>>> b93ef594b4 (.)
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
<<<<<<< HEAD
        if($notifiable->routeNotificationFor('sms')) {
>>>>>>> a12f125f4a (.)
=======
        if ($notifiable->routeNotificationFor('sms')) {
>>>>>>> b93ef594b4 (.)
=======
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    /**
     * @param  object  $notifiable
     */
    public function toMail($notifiable): SpatieEmail
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
                $email->setRecipient($recipient);
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
=======
            $to = $notifiable->routeNotificationFor('mail');
<<<<<<< HEAD
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
=======
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
            }
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $email;
    }

    /**
     * Get the SMS representation of the notification.
     */
<<<<<<< HEAD
    public function toSms(object $notifiable): ?SmsData
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public function toSms(object $notifiable): null|SmsData
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
        if ($recipient === null) {
=======
        if ($to === null) {
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            return null;
        }

        $smsData = SmsData::from([
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            'from' => 'Xot',
            'to' => $recipient,
            'body' => $email->buildSms(),
        ]);

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $smsData;
    }

    /**
     * Merge additional data for email template.
     *
     * @param  array<string, mixed>  $data
     */
    public function mergeData(array $data): self
    {
<<<<<<< HEAD
        $this->data = array_merge($this->data, $data);
<<<<<<< HEAD

=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->data = array_merge($this->data, $data);
=======
        $this->data=array_merge($this->data,$data);
>>>>>>> a12f125f4a (.)
=======
        $this->data = array_merge($this->data, $data);
>>>>>>> b93ef594b4 (.)
=======
        $this->data=array_merge($this->data,$data);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        return $this;
    }

    /**
     * Add attachments to the notification.
     *
     * @param  array<int, array<string, string>>  $attachments
     */
    public function addAttachments(array $attachments): self
    {
<<<<<<< HEAD
        $this->attachments = array_merge($this->attachments, $attachments);
<<<<<<< HEAD

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
        return $this;
    }
}
