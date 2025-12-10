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
     *
     * @var EmailData
     *
     * @var EmailData
     *
     * @var EmailData
     *
     * @var EmailData
     *
     * @var EmailData
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @var EmailData
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
     *
     * @var EmailData
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
     *
     * @var EmailData
>>>>>>> 75179b85 (.)
=======
     *
     * @var EmailData
>>>>>>> 5fd545e4 (.)
=======
     *
     * @var EmailData
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
     *
     * @var EmailData
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
     */
    protected EmailData $emailData;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
     * @param EmailData $emailData I dati dell'email da inviare
     * @param  EmailData  $emailData  I dati dell'email da inviare
     * @param EmailData $emailData I dati dell'email da inviare
     * @param EmailData $emailData I dati dell'email da inviare
     * @param EmailData $emailData I dati dell'email da inviare
     * @param EmailData $emailData I dati dell'email da inviare
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param EmailData $emailData I dati dell'email da inviare
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  EmailData  $emailData  I dati dell'email da inviare
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 75179b85 (.)
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 5fd545e4 (.)
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
     * @param EmailData $emailData I dati dell'email da inviare
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
     */
    public function __construct(EmailData $emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @param  object  $_notifiable  The entity to be notified (not used in this method)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @param  object  $_notifiable  The entity to be notified (not used in this method)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @return array<string>
     */
    public function via(object $_notifiable): array
=======
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
     * @param object $_notifiable The entity to be notified (not used in this method)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
=======
     * @param object $_notifiable The entity to be notified (not used in this method)
>>>>>>> 5fd545e4 (.)
=======
     * @param object $_notifiable The entity to be notified (not used in this method)
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
     * @return array<string>
     */
    public function via(object $_notifiable): array
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 2fc60436 (.)
>>>>>>> 7624f916 (.)
     * @param object $notifiable The entity to be notified
     * @return array<string>
     */
    public function via(object $notifiable): array
<<<<<<< HEAD
=======
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 1b6ddbbc (.)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @return array<string>
     */
    public function via(object $_notifiable): array
<<<<<<< HEAD
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 1b6ddbbc (.)
     * @param object $notifiable The entity to be notified
     * @return array<string>
     */
    public function via(object $notifiable): array
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7624f916 (.)
     * @param object $_notifiable The entity to be notified (not used in this method)
     * @return array<string>
     */
    public function via(object $_notifiable): array
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> 6e2169a3 (.)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
<<<<<<< HEAD
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     * @param  object  $notifiable  The entity to be notified
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mailMessage = (new MailMessage())
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param object $notifiable The entity to be notified
     * @return MailMessage
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  object  $notifiable  The entity to be notified
>>>>>>> c8b1c8bf (.)
     */
    public function toMail(object $notifiable): MailMessage
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
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 677a6ab7 (.)
        $mailMessage = (new MailMessage())
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 82c6772 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
<<<<<<< HEAD

        if (!empty($this->emailData->body_html)) {
=======
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)

        if (!empty($this->emailData->body_html)) {
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
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 1fd232c7 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 31bdf6b (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 1b6ddbbc (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
        $mailMessage = new MailMessage()
        $mailMessage = (new MailMessage())
        $mailMessage = (new MailMessage())
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
            $mailMessage = $mailMessage->view('notify::emails.template', [
=======
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 1fd232c7 (.)
        $mailMessage = new MailMessage()
=======
        $mailMessage = (new MailMessage())
>>>>>>> 5e14ac3 (.)
=======
        $mailMessage = (new MailMessage())
=======
<<<<<<< HEAD
        $mailMessage = new MailMessage()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
=======
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
>>>>>>> 0db165c (.)

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 1fd232c7 (.)
=======
            $mailMessage = $mailMessage->view('notify::emails.template', [
=======
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
<<<<<<< HEAD
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
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
>>>>>>> c8b1c8bf (.)
=======
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
=======
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
>>>>>>> bf479cc (.)

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> ce89c8bb (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> 6e2169a3 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5a0a4b2 (.)
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
=======
>>>>>>> 92ecc28 (.)
>>>>>>> 985c7bda (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
<<<<<<< HEAD
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> fd497554 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 1fd232c7 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5fd545e4 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 1b6ddbbc (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> fd497554 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 7624f916 (.)
     * @param object $notifiable The entity to be notified
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
<<<<<<< HEAD
        $mailMessage = (new MailMessage())
        $mailMessage = new MailMessage()
=======
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
>>>>>>> 7624f916 (.)
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
<<<<<<< HEAD

        if (!empty($this->emailData->body_html)) {
=======
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
>>>>>>> 54220b28 (rebase 210)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 7624f916 (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage()
        $mailMessage = (new MailMessage())
        $mailMessage = (new MailMessage())
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
            $mailMessage->view('notify::emails.template', [
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 31bdf6b (.)
=======
>>>>>>> 23161eb (.)
        $mailMessage = new MailMessage()
=======
        $mailMessage = (new MailMessage())
>>>>>>> 5e14ac3 (.)
=======
        $mailMessage = (new MailMessage())
=======
<<<<<<< HEAD
        $mailMessage = new MailMessage()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);
=======
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
>>>>>>> 0db165c (.)

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            $mailMessage->view('notify::emails.template', [
=======
=======
=======
>>>>>>> 7624f916 (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> 2fc60436 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> 0f81dc21 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 7624f916 (.)
        $mailMessage = (new MailMessage())
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (! empty($this->emailData->body_html)) {
<<<<<<< HEAD
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
        $mailMessage = new MailMessage();
        $mailMessage = $mailMessage->subject($this->emailData->subject);
        $mailMessage = $mailMessage->line($this->emailData->body);
=======
=======
>>>>>>> d298dd9c2 (.)
>>>>>>> 7624f916 (.)
        $mailMessage = new MailMessage()
            ->subject($this->emailData->subject)
            ->line($this->emailData->body);

        if (!empty($this->emailData->body_html)) {
<<<<<<< HEAD
            $mailMessage->view('notify::emails.template', [
            $mailMessage->view('notify::emails.template', [
            $mailMessage->view('notify::emails.template', [
=======
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
            $mailMessage->view('notify::emails.template', [
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
            $mailMessage->view('notify::emails.template', [
>>>>>>> 75179b85 (.)
=======
            $mailMessage->view('notify::emails.template', [
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
            $mailMessage->view('notify::emails.template', [
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
                'content' => $this->emailData->body_html,
            ]);
        }

<<<<<<< HEAD
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
            $mailMessage = $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
            $mailMessage = $mailMessage->from($this->emailData->from_email, $this->emailData->from);
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
=======
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
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
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 9777d1b3 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
>>>>>>> d09cb759 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
>>>>>>> d09cb759 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
>>>>>>> 4689a827 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
>>>>>>> f2e64178 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
>>>>>>> a12f125f4a (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> b93ef594b4 (.)
=======
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 3f537838 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 3f537838 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 2941b0bd (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 98d837b9 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 985c7bda (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 5fd545e4 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 54220b28 (rebase 210)
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
            $mailMessage = $mailMessage->from($this->emailData->from_email, $this->emailData->from);
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
=======
        if (! empty($this->emailData->from_email) && ! empty($this->emailData->from)) {
>>>>>>> b19cd40 (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
>>>>>>> 4e2ebfb (.)
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        if (!empty($this->emailData->from_email) && !empty($this->emailData->from)) {
            $mailMessage->from($this->emailData->from_email, $this->emailData->from);
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        }

        return $mailMessage;
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
     * @param object $notifiable The entity to be notified
     * @param  object  $notifiable  The entity to be notified
     * @param object $notifiable The entity to be notified
     * @param object $notifiable The entity to be notified
     * @param object $notifiable The entity to be notified
     * @param object $notifiable The entity to be notified
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param object $notifiable The entity to be notified
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  object  $notifiable  The entity to be notified
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 75179b85 (.)
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 5fd545e4 (.)
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
     * @param object $notifiable The entity to be notified
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
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
