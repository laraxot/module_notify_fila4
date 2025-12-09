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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    public function __construct(
        public string $name,
        public array $view_params,
    ) {}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    public function __construct(public string $name, public array $view_params)
    {
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function __construct(public string $name, public array $view_params)
    {
    }
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)

    /**
     * Get the notification's delivery channels.
     */
    public function via(CanThemeNotificationContract $notifiable): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
        return $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->channels;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 9777d1b3 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
>>>>>>> d09cb759 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
>>>>>>> d09cb759 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
>>>>>>> 4689a827 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
=======
>>>>>>> 7325acf3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 3f537838 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 3f537838 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $notifiable->getNotificationData($this->name, $this->view_params)->channels;
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(CanThemeNotificationContract $notifiable): MailMessage
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
        $attachments = $notifiable
            ->getNotificationData($this->name, $this->view_params)
            ->attachments;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 9777d1b3 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
>>>>>>> d09cb759 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
>>>>>>> d09cb759 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
>>>>>>> 4689a827 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
=======
>>>>>>> 7325acf3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 3f537838 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 3f537838 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $attachments = $notifiable->getNotificationData($this->name, $this->view_params)->attachments;
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
        return $notifiable->getNotificationData($this->name, $this->view_params)->getSmsData();

        /*
         * return SmsData::from([
         * 'from' => $this->from,
         * 'to' => $notifiable->routeNotificationFor('mobile'),
         * 'body' => $this->html,
         * ]);
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
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
