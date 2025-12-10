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
declare(strict_types=1);


declare(strict_types=1);



namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
declare(strict_types=1);


namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailTemplate;
declare(strict_types=1);


namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
namespace Modules\Notify\Notifications;

use Illuminate\Support\Str;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Notifications\Notification;
use Modules\Notify\Models\MailTemplate;
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
    /** @var array<string, mixed> */
    public array $data = [];

    protected string $slug;
    /** @var array<string, mixed> */
    public array $data = [];
    /** @var array<int, array<string, string>> */
    public array $data = [];
    protected string $slug;
    public array $data = [];
    public array $attachments = [];
    public array $data=[];
    public array $attachments=[];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data=[];
    public array $attachments=[];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data=[];
    public array $attachments=[];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data=[];
    public array $attachments=[];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];
    public array $data = [];
    public array $attachments = [];

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
        $this->slug = $slug;
    }

    /**
    }

    /**
     * @param  object  $notifiable
    }

    /**
        

    }
    /** 
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
    }

    /**
     * @param object $notifiable
        $this->slug = $slug;
    }

    /**
    }

    /**
     * @param  object  $notifiable
    }

    /**
        

    }
    /** 
    }

    /**
     * @param object $notifiable
     * @param object $notifiable
     * @param object $notifiable
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailTemplate;

class RecordNotification extends Notification
{
    protected Model $record;
    protected string $slug;
    public array $data = [];
    public array $attachments = [];

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
        $this->slug = Str::slug($slug);
    }

    /**
    }

    /**
     * @param object $notifiable
     * @param  object  $notifiable
    }

    /**
        

    }
    /** 
    }

    /**
     * @param object $notifiable
     * @param object $notifiable
     * @return array<string|class-string>
     */
    public function via($notifiable): array
    {
        $channels = [];
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if ($notifiable->routeNotificationFor('sms')) {
        if (!method_exists($notifiable, 'routeNotificationFor')){
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
        if (! method_exists($notifiable, 'routeNotificationFor')) {
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
        if ($notifiable->routeNotificationFor('sms')) {
        if (!method_exists($notifiable, 'routeNotificationFor')){
        if (!method_exists($notifiable, 'routeNotificationFor')) {
            return $channels;
        }
        if ($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
        if ($notifiable->routeNotificationFor('sms')) {
        if (!method_exists($notifiable, 'routeNotificationFor')){
            return $channels;
        }
        if($notifiable->routeNotificationFor('mail')) {
            $channels[] = 'mail';
        }
        if($notifiable->routeNotificationFor('sms')) {
            $channels[] = SmsChannel::class;
        }

        return $channels;
    }

    /**
     * @param object $notifiable
     * @return SpatieEmail
     * @param  object  $notifiable
     * @param object $notifiable
     * @return SpatieEmail
     */
    public function toMail($notifiable): SpatieEmail
    public function toMail(object $notifiable): SpatieEmail
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
            $to = $notifiable->routeNotificationFor('mail');
            if (is_string($to)) {
                $email->to($to);
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email = $email->mergeData($this->data);

        $email = $email->addAttachments($this->attachments);

        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $to = $notifiable->routeNotificationFor('mail');
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            $recipient = $notifiable->routeNotificationFor('mail');

            // Valida che sia una stringa valida
            if (is_string($recipient) && ! empty($recipient)) {
                $email->to($recipient);
                $email->setRecipient($recipient);
            $to = $notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            $to = $notifiable->routeNotificationFor('mail');
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
            $to=$notifiable->routeNotificationFor('mail');
            $to = $notifiable->routeNotificationFor('mail');
        
        $email = new SpatieEmail($this->record, $this->slug);
        $email=$email->mergeData($this->data);
        
        $email=$email->addAttachments($this->attachments);
        
        // Importante: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            // Ottieni l'email dal notifiable
            $to=$notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            $to = $notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
            }
        }

            $to = $notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
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
     */
    public function toSms(object $notifiable): ?SmsData
     *
     * @param object $notifiable
     * @return SmsData
     */
    public function toSms(object $notifiable): null|SmsData
    public function toSms(object $notifiable): ?SmsData
    public function toSms(object $notifiable): null|SmsData
    public function toSms(object $notifiable): null|SmsData
    public function toSms(object $notifiable): null|SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to = null;
        // dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $recipient = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to = config('sms.fallback_to');
        if (is_string($fallback_to)) {
            $to = $fallback_to;
        }
        if ($to === null) {
    public function toSms(object $notifiable): ?SmsData
    public function toSms(object $notifiable): null|SmsData
    {
        $email = new SpatieEmail($this->record, $this->slug);

        $email = $email->mergeData($this->data);

        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        if ($recipient === null) {
        //dddx($notifiable);//Illuminate\Notifications\AnonymousNotifiable
        $to = null;
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $to = $notifiable->routeNotificationFor('sms');
        }
        $fallback_to = config('sms.fallback_to');
        if (is_string($fallback_to)) {
            $to = $fallback_to;
        }
        if($to==null){
        if ($to === null) {
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
        if ($to === null) {
        if ($recipient === null) {
        if ($to === null) {
        if ($recipient === null) {
        if ($to === null) {
    public function toSms(object $notifiable): ?SmsData
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
        if($to==null){
        if ($to === null) {
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
        if ($recipient === null) {
        if ($recipient === null) {
        if ($to === null) {
        if ($to === null) {
    public function toSms(object $notifiable): ?SmsData
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
        if($to==null){
        if ($to === null) {
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
        if ($recipient === null) {
        if ($recipient === null) {
        if ($to === null) {
            return null;
        }

        $smsData = SmsData::from([
            'from' => 'Xot',
            'to' => $to,
            'to' => $recipient,
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

            'from'=>'Xot',
            'to'=>$to,
            'body'=>$email->buildSms(),
        ]);


            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

        return $smsData;
    }

    /**
     * @param array<string, mixed> $data
     * @return self
     */
    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    /**
     * @param array<int, array<string, string>> $attachments
     * @return self
     */
    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
            'from' => 'Xot',
            'to' => $to,
            'body' => $email->buildSms(),
        ]);

        return $smsData;
    }

    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);

        $this->data = array_merge($this->data, $data);
        $this->data = array_merge($this->data, $data);
        $this->data=array_merge($this->data,$data);


        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);

    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);

        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);




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

    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
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

    public function mergeData(array $data): self
    {
        $this->data = array_merge($this->data, $data);
        return $this;
    }

    public function addAttachments(array $attachments): self
    {
        $this->attachments = array_merge($this->attachments, $attachments);
        $this->attachments=array_merge($this->attachments,$attachments);
        $this->attachments = array_merge($this->attachments, $attachments);
        return $this;
    }
}
