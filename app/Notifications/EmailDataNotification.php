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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var EmailData
>>>>>>> 75179b8 (.)
=======
     *
     * @var EmailData
>>>>>>> 7148d73 (.)
     */
    protected EmailData $emailData;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  EmailData  $emailData  I dati dell'email da inviare
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 75179b8 (.)
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 7148d73 (.)
     */
    public function __construct(EmailData $emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $_notifiable  The entity to be notified (not used in this method)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @param object $_notifiable The entity to be notified (not used in this method)
>>>>>>> 75179b8 (.)
=======
     * @param object $_notifiable The entity to be notified (not used in this method)
>>>>>>> 7148d73 (.)
     * @return array<string>
     */
    public function via(object $_notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $notifiable  The entity to be notified
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mailMessage = new MailMessage;
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
            $mailMessage = $mailMessage->view('notify::emails.template', [
=======
=======
>>>>>>> 7148d73 (.)
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
            $mailMessage->view('notify::emails.template', [
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                'content' => $this->emailData->body_html,
            ]);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
            $mailMessage = $mailMessage->from($this->emailData->from_email, $this->emailData->from);
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 75179b8 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 7148d73 (.)
        }

        return $mailMessage;
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object  $notifiable  The entity to be notified
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 75179b8 (.)
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 7148d73 (.)
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
