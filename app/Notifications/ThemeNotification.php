<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\BuildMailMessageAction;
use Modules\Notify\Contracts\CanThemeNotificationContract;
use Modules\Notify\Datas\SmsData;

class ThemeNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public array $attachments;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
    public function __construct(
        public string $name,
        public array $view_params,
    ) {}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    public function __construct(public string $name, public array $view_params)
    {
    }
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public string $name, public array $view_params)
    {
    }
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    /**
     * Get the notification's delivery channels.
     */
    public function via(CanThemeNotificationContract $notifiable): array
    {
<<<<<<< HEAD
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->channels;
>>>>>>> a12f125f4a (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> b93ef594b4 (.)
=======
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->channels;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(CanThemeNotificationContract $notifiable): MailMessage
    {
<<<<<<< HEAD
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
        $attachments = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->attachments;
>>>>>>> a12f125f4a (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> b93ef594b4 (.)
=======
        $attachments = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->attachments;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

        $mail_message = app(BuildMailMessageAction::class)
            ->execute($this->name, $notifiable->getModel(), $this->view_params, $attachments);

        $notifiable->sendEmailCallback();

        return $mail_message;
    }

    // public function toEssendex($notifiable)
    // {
    //    dddx($notifiable);
    // }
    /**
     * Undocumented function.
     */
    public function toSms(CanThemeNotificationContract $notifiable): SmsData
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        return $notifiable->getNotificationData($this->name, $this->view_params)->getSmsData();

        /*
         * return SmsData::from([
         * 'from' => $this->from,
         * 'to' => $notifiable->routeNotificationFor('mobile'),
         * 'body' => $this->html,
         * ]);
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->getSmsData();
        /*
        return SmsData::from([
            'from' => $this->from,
            'to' => $notifiable->routeNotificationFor('mobile'),
            'body' => $this->html,
        ]);
        */

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->getSmsData();

        /*
         * return SmsData::from([
         * 'from' => $this->from,
         * 'to' => $notifiable->routeNotificationFor('mobile'),
         * 'body' => $this->html,
         * ]);
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // $notifiable->sendSmsCallback()
    }

    /**
     * Get the array representation of the notification.
     */
    public function toArray(CanThemeNotificationContract $notifiable): array
    {
        $res = $this->view_params;
        $res['_name'] = $this->name;

        return $res;
    }
}
