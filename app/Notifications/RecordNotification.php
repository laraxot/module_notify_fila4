<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Str;
use Modules\Notify\Channels\SmsChannel;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Emails\SpatieEmail;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 92ecc28 (.)
=======
=======
>>>>>>> 23161eb (.)
=======
use Modules\Notify\Models\MailTemplate;
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
=======
use Modules\Notify\Models\MailTemplate;
>>>>>>> 5e14ac3 (.)

class RecordNotification extends Notification
{
    protected Model $record;

    protected string $slug;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e14ac3 (.)
    /**
     * @var array<string, mixed>
     */
    protected array $data = [];

    /**
     * @var array<int, array<string, string>>
     */
    protected array $attachments = [];
<<<<<<< HEAD
=======
    /** @var array<string, mixed> */
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
    public array $data = [];

    /** @var array<int, array<string, string>> */
    public array $attachments = [];
<<<<<<< HEAD
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
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 5e14ac3 (.)

    public function __construct(Model $record, string $slug)
    {
        $this->record = $record;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e14ac3 (.)
        $this->slug = $slug;
    }

    /**
<<<<<<< HEAD
=======
        $this->slug = Str::slug($slug);
    }

    /**
<<<<<<< HEAD
     * @param  object  $notifiable
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 92ecc28 (.)
=======
=======
     * @param object $notifiable
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
=======
>>>>>>> 23161eb (.)
=======
>>>>>>> 5e14ac3 (.)
     * @return array<string|class-string>
     */
    public function via(object $notifiable): array
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
                $email->setRecipient($recipient);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 92ecc28 (.)
=======
=======
            $to = $notifiable->routeNotificationFor('mail');
            $email->to($to);
            if ($to) {
                $email->setRecipient($to);
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
=======
>>>>>>> 23161eb (.)
=======
>>>>>>> 5e14ac3 (.)
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
