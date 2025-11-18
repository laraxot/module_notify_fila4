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
=======
     *
     * @var EmailData
>>>>>>> 8bc2fc9f (first)
     */
    protected EmailData $emailData;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
     * @param  EmailData  $emailData  I dati dell'email da inviare
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 8bc2fc9f (first)
     */
    public function __construct(EmailData $emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
     * @param  object  $_notifiable  The entity to be notified (not used in this method)
=======
     * @param object $_notifiable The entity to be notified (not used in this method)
>>>>>>> 8bc2fc9f (first)
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
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
            $mailMessage->view('notify::emails.template', [
>>>>>>> 8bc2fc9f (first)
                'content' => $this->emailData->body_html,
            ]);
        }

<<<<<<< HEAD
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
            $mailMessage = $mailMessage->from($this->emailData->from_email, $this->emailData->from);
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 8bc2fc9f (first)
        }

        return $mailMessage;
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
     * @param  object  $notifiable  The entity to be notified
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 8bc2fc9f (first)
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
