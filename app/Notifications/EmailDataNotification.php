<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\EmailData;

/**
 * Classe per inviare notifiche email utilizzando EmailData.
 */
class EmailDataNotification extends Notification
{
    use Queueable;

    /**
     * I dati dell'email da inviare.
     *
     * @var EmailData
     */
    protected EmailData $emailData;

    /**
     * Create a new notification instance.
     *
     * @param EmailData $emailData I dati dell'email da inviare
     */
    public function __construct(EmailData $emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @return array<string>
     */
    public function via(object $_notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailMessage = (new MailMessage())
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
        $mailMessage = new MailMessage()
>>>>>>> 6ba141fc (.)
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 31bdf6b (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
=======
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
>>>>>>> bf479cc (.)

        if (!empty($this->emailData->body_html)) {
            $mailMessage->view('notify::emails.template', [
                'content' => $this->emailData->body_html,
            ]);
        }

        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        }

        return $mailMessage;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param object $notifiable The entity to be notified
     * @return array<string, string|null>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'to' => $this->emailData->to,
            'from' => $this->emailData->from,
            'from_email' => $this->emailData->from_email,
            'subject' => $this->emailData->subject,
            'body' => $this->emailData->body,
        ];
    }
}
