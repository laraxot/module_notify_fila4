<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Mail;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Attachment;
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
=======
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
>>>>>>> laraxot/develop
=======
>>>>>>> e2f1a4045 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Attachment;
=======
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
use Illuminate\Mail\Mailables\Attachment;
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
use Illuminate\Mail\Mailables\Attachment;
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
use Illuminate\Mail\Mailables\Attachment;
=======
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Attachment;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\SaluteOra\Models\Appointment;
// use Modules\SaluteOra\Models\Appointment;

=======
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
// use Modules\SaluteOra\Models\Appointment;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
<<<<<<< HEAD
<<<<<<< HEAD
    use Queueable, SerializesModels;
    use Queueable, SerializesModels;
    use Queueable, SerializesModels;
    use Queueable, SerializesModels;
    use Queueable, SerializesModels;
// use Modules\<nome progetto>\Models\Appointment;
=======
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)

=======
>>>>>>> 518c702 (.)
=======
>>>>>>> 6d2af2b31 (.)
// use Modules\SaluteOra\Models\Appointment;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
=======
<<<<<<< HEAD
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> c4282a934 (.)

    /**
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
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
>>>>>>> 99ff506 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
=======
>>>>>>> 1fd232c (.)
// use Modules\SaluteOra\Models\Appointment;
<<<<<<< HEAD
=======
=======
// use Modules\<main module>\Models\Appointment;
>>>>>>> e6ac118 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
>>>>>>> e6c7fb3 (.)
>>>>>>> 54220b28 (rebase 210)

>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
<<<<<<< HEAD
// use Modules\<nome progetto>\Models\Appointment;
=======
=======
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
>>>>>>> 985c7bda (.)
// use Modules\SaluteOra\Models\Appointment;

>>>>>>> 82ae73be (.)
class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 69fa7d37 (.)
    use Queueable, SerializesModels;
=======
<<<<<<< HEAD
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
    use Queueable, SerializesModels;
>>>>>>> a404ea71 (.)
=======
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
    use Queueable, SerializesModels;
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
=======
// use Modules\<nome progetto>\Models\Appointment;

=======
=======
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c2 (.)
// use Modules\SaluteOra\Models\Appointment;

>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)

    /**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
>>>>>>> laraxot/develop
     * @param  array<string, mixed>  $notificationData
     */
    public function __construct(
        private readonly array $notificationData,
    ) {}

    public function envelope(): Envelope
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// use Modules\SaluteOra\Models\Appointment;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
<<<<<<< HEAD
    use Queueable, SerializesModels;

    /**
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
    use Queueable, SerializesModels;
=======
<<<<<<< HEAD
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
    use Queueable, SerializesModels;
>>>>>>> a404ea71 (.)
=======
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
    use Queueable, SerializesModels;
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)

    /**
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
>>>>>>> laraxot/develop
     * Dati della notifica dell'appuntamento.
     *
     * @var array<string, mixed>
     */
    public array $notificationData;

    /**
     * Crea una nuova istanza del messaggio.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $notificationData
<<<<<<< HEAD
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param  array<string, mixed>  $notificationData
     * @param array<string, mixed> $notificationData
     * @param array<string, mixed> $notificationData
     * @param  array<string, mixed>  $notificationData
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
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 82ae73be (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
=======
>>>>>>> 2effe245 (.)
     * @param array<string, mixed> $notificationData
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 1fd232c7 (.)
=======
     * @param array<string, mixed> $notificationData
=======
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> 4689a827 (.)
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> d09cb759 (.)
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> d09cb759 (.)
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> 4689a827 (.)
=======
     * @param array<string, mixed> $notificationData
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
     * @param array<string, mixed> $notificationData
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
     * @param array<string, mixed> $notificationData
=======
<<<<<<< HEAD
>>>>>>> 8dc1f2ed6 (.)
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> origin/develop
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
     * @param  array<string, mixed>  $notificationData
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> a29a4728 (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
     * @param  array<string, mixed>  $notificationData
<<<<<<< HEAD
=======
     * @param array<string, mixed> $notificationData
>>>>>>> e39a6f9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 909e45af (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> a404ea71 (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 2941b0bd (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> ca10d6ad (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 31bdf6b (.)
>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
>>>>>>> 2fdda20 (.)
>>>>>>> 31bdf6b (.)
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 2fc60436 (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> d298dd9c2 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 82ae73be (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 3f537838 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 82ae73be (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 3f537838 (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> a404ea71 (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 2941b0bd (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> ca10d6ad (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
>>>>>>> laraxot/develop
=======
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 12a7e2462 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> 510809c6f (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 11b43e822 (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> c4282a934 (.)
=======
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
>>>>>>> 4bec160e6 (.)
=======
     * @param array<string, mixed> $notificationData
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
     */
    public function __construct(array $notificationData)
    {
        $this->notificationData = $notificationData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $appointment = $this->notificationData['appointment'];
        $type = $this->notificationData['type'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        $subject = match ($type) {
<<<<<<< HEAD
        
        $subject = match($type) {

        $subject = match ($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {

        $subject = match ($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {

        $subject = match ($type) {

        $subject = match ($type) {

        $subject = match ($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {

        $subject = match ($type) {
        
        $subject = match($type) {

        $subject = match ($type) {

        $subject = match ($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {

        $subject = match ($type) {
        
        $subject = match($type) {
        
        $subject = match($type) {

        $subject = match ($type) {
        
        $subject = match($type) {

        $subject = match ($type) {
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)

>>>>>>> 82ae73b (.)
        $subject = match ($type) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1fd232c (.)
        
        $subject = match($type) {
=======

        $subject = match ($type) {
>>>>>>> 82ae73be (.)
=======
=======
        
        $subject = match($type) {
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        
        $subject = match($type) {
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
        
        $subject = match($type) {
=======
<<<<<<< HEAD
>>>>>>> f2e64178 (.)

        $subject = match ($type) {
=======
        
        $subject = match($type) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
        
        $subject = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======

        $subject = match ($type) {
>>>>>>> 3f537838 (.)
=======

        $subject = match ($type) {
=======

        $subject = match ($type) {
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> 2effe245 (.)
        
        $subject = match($type) {
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
        
        $subject = match($type) {
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======

        $subject = match ($type) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
        
        $subject = match($type) {
>>>>>>> fd497554 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======

        $subject = match ($type) {
>>>>>>> 98d837b9 (.)
=======

        $subject = match ($type) {
>>>>>>> f963d2c0 (.)
=======

        $subject = match ($type) {
>>>>>>> f963d2c0 (.)
=======

        $subject = match ($type) {
>>>>>>> ee18dd92 (.)
=======

        $subject = match ($type) {
>>>>>>> 2a97406c (.)
=======
>>>>>>> 12a7e2462 (.)
=======

        $subject = match ($type) {
>>>>>>> 4bec160e6 (.)
=======
        
        $subject = match($type) {
>>>>>>> 518c702 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
=======
=======
        
        $subject = match($type) {
=======
>>>>>>> d09cb759 (.)
=======
        
        $subject = match($type) {
=======
>>>>>>> d09cb759 (.)
=======
        
        $subject = match($type) {
=======
>>>>>>> 4689a827 (.)
=======
        
        $subject = match($type) {
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
        
        $subject = match($type) {
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
        
        $subject = match($type) {
=======
<<<<<<< HEAD
>>>>>>> 8dc1f2ed6 (.)

        $subject = match ($type) {
=======
        
        $subject = match($type) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

        $subject = match ($type) {
>>>>>>> 985c7bda (.)
=======
        
        $subject = match($type) {
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 1fd232c (.)
        
        $subject = match($type) {
>>>>>>> d298dd9c2 (.)
=======

        $subject = match ($type) {
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
        $subject = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

        $subject = match ($type) {
>>>>>>> 3f537838 (.)
=======

        $subject = match ($type) {
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
        $subject = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

        $subject = match ($type) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
        
        $subject = match($type) {
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======

        $subject = match ($type) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
        
        $subject = match($type) {
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======

        $subject = match ($type) {
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
        
        $subject = match($type) {
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> 510809c6f (.)
=======

        $subject = match ($type) {
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
        
        $subject = match($type) {
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
=======
>>>>>>> 11b43e822 (.)

        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
<<<<<<< HEAD
            $subject .= ' #'.$appointment->id;
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        if (is_object($appointment) && property_exists($appointment, 'id') && is_scalar($appointment->id)) {
            $subject .= ' #'.(string) $appointment->id;
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }

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
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)

<<<<<<< HEAD
        $appointment = $this->notificationData['appointment'] ?? null;
        $appointmentId = is_object($appointment) && isset($appointment->id) ? $appointment->id : null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
>>>>>>> 82ae73b (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1fd232c (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)

<<<<<<< HEAD
<<<<<<< HEAD
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
<<<<<<< HEAD
            $subject .= ' #'.$appointment->id;
=======
        if (is_object($appointment) && property_exists($appointment, 'id') && is_scalar($appointment->id)) {
            $subject .= ' #'.(string) $appointment->id;
>>>>>>> 05bc3ad (.)
<<<<<<< HEAD
=======
=======
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
>>>>>>> ab15d0e (.)
=======
        if (is_object($appointment) && property_exists($appointment, 'id') && is_scalar($appointment->id)) {
            $subject .= ' #'.(string) $appointment->id;
>>>>>>> e6ac118 (.)
=======
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
>>>>>>> e6c7fb3 (.)
>>>>>>> 54220b28 (rebase 210)
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)

        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
<<<<<<< HEAD
            $subject .= ' #'.$appointment->id;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> laraxot/develop
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 8dc1f2ed6 (.)

        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #' . $appointment->id;
            $subject .= ' #'.$appointment->id;
        }
        
        // PHPStan Level 10: isset() invece di property_exists() per Eloquent magic property

        }

        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
        }
        
=======
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
=======
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
            $subject .= ' #' . $appointment->id;
=======
            $subject .= ' #'.$appointment->id;
>>>>>>> bf479cc (.)
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
=======
<<<<<<< HEAD
>>>>>>> 2fdda20 (.)
            $subject .= ' #' . $appointment->id;
=======
=======
>>>>>>> 8d298d6 (.)
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
        // PHPStan Level 10: isset() invece di property_exists() per Eloquent magic property
>>>>>>> 6ba141fc (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 92ecc28 (.)

<<<<<<< HEAD
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $appointmentId = is_int($appointment->id) || is_string($appointment->id) ? $appointment->id : (string) $appointment->id;
            $subject .= ' #'.$appointmentId;
=======
        if (is_object($appointment) && property_exists($appointment, 'id') && is_scalar($appointment->id)) {
            $subject .= ' #'.(string) $appointment->id;
>>>>>>> ec9288a (.)
        }

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
        
>>>>>>> 9ed014c (.)
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
=======
=======
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c2 (.)
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
            $subject .= ' #' . $appointment->id;
=======
=======
>>>>>>> c4282a934 (.)
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
=======
<<<<<<< HEAD
>>>>>>> 2fdda20 (.)
            $subject .= ' #' . $appointment->id;
=======
=======
>>>>>>> 8d298d6 (.)
            $subject .= ' #'.$appointment->id;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 518c702 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
=======
>>>>>>> ce64082e3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #' . $appointment->id;
        }
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
<<<<<<< HEAD
                'appointment_id' => $appointmentId,
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
                'appointment_id' => $appointmentId,
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2fc60436 (.)
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73be (.)
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73be (.)
>>>>>>> laraxot/develop
                'type' => $type,
            ],
        );
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
>>>>>>> laraxot/develop
    public function content(): Content
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
>>>>>>> laraxot/develop
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $type = $this->notificationData['type'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
<<<<<<< HEAD
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)

        // Determina il template da utilizzare in base al tipo di notifica
>>>>>>> 82ae73b (.)
        $view = match ($type) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1fd232c (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 510809c6f (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 8dc1f2ed6 (.)
=======
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> fd497554 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> 2effe245 (.)
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
=======
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 985c7bda (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> f963d2c0 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> f963d2c0 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> ee18dd92 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 2a97406c (.)
=======
>>>>>>> 12a7e2462 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 4bec160e6 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 518c702 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 1fd232c (.)
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> d298dd9c2 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 3f537838 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> 510809c6f (.)
=======

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
            'confirmed' => 'notify::emails.appointments.confirmed',
            'reminder' => 'notify::emails.appointments.reminder',
            'cancelled' => 'notify::emails.appointments.cancelled',
            'rescheduled' => 'notify::emails.appointments.rescheduled',
            default => 'notify::emails.appointments.generic',
        };
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        
        
        return new Content(
            view: $view,
            with: [

        

        

        

        
        


        

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
        
=======
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)

=======
        
>>>>>>> 518c702 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
        
>>>>>>> d298dd9c2 (.)
        return new Content(
            view: $view,
            with: [
<<<<<<< HEAD
                'appointment' => $this->notificationData['appointment'] ?? null,
                'patient' => $this->notificationData['patient'] ?? null,
=======
                'appointment' => $this->notificationData['appointment'],
                'patient' => $this->notificationData['patient'],
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> f963d2c0 (.)

=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
        
=======
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)

=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
        
=======
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)

=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
        
=======
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)

=======
=======
>>>>>>> 2effe245 (.)
        
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
=======
=======
        
=======
>>>>>>> d09cb759 (.)
=======
        
=======
>>>>>>> d09cb759 (.)
=======
        
=======
>>>>>>> 4689a827 (.)
=======
        
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
        
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
        
=======
<<<<<<< HEAD
>>>>>>> 8dc1f2ed6 (.)

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======

>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
=======
        
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
        
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======

>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2a97406c (.)
=======
        
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======

>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
=======
        
>>>>>>> 518c702 (.)
>>>>>>> 12a7e2462 (.)
=======
        
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> 510809c6f (.)
=======

>>>>>>> 11b43e822 (.)
=======

=======
        
>>>>>>> 518c702 (.)
>>>>>>> 4bec160e6 (.)
=======
        
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
        return new Content(
            view: $view,
            with: [
                'appointment' => $this->notificationData['appointment'],
                'patient' => $this->notificationData['patient'],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
>>>>>>> laraxot/develop
                'type' => $type,
                'additionalData' => $this->notificationData['additionalData'] ?? [],
            ],
        );
    }

    /**
<<<<<<< HEAD
     * Get the attachments for the message.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * Get the attachments for the message.
     *
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Get the attachments for the message.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
     * Get the attachments for the message.
     *
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
     * Get the attachments for the message.
     *
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
     * Get the attachments for the message.
     *
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
     * Get the attachments for the message.
     *
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
     * @return array<int, Attachment>
=======
<<<<<<< HEAD
     * @return array<int, Attachment>
=======
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function attachments(): array
    {
        return [];
    }
}
=======
>>>>>>> 301ad8b44 (.)
