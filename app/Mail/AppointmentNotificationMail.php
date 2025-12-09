<?php

declare(strict_types=1);

namespace Modules\Notify\Mail;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
=======
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
>>>>>>> f813254 (.)
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
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
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
>>>>>>> 99ff506 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
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
=======
=======
=======
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
=======
>>>>>>> 1fd232c (.)
// use Modules\SaluteOra\Models\Appointment;

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
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

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
<<<<<<< HEAD
     * @param  array<string, mixed>  $notificationData
     */
    public function __construct(
        private readonly array $notificationData,
    ) {}

    public function envelope(): Envelope
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');
=======
=======
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
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
     * @param array<string, mixed> $notificationData
>>>>>>> 518c702 (.)
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
<<<<<<< HEAD
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> a29a4728 (.)
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> e39a6f9 (.)
>>>>>>> 909e45af (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
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
>>>>>>> 909e45af (.)
=======
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

>>>>>>> 82ae73b (.)
        $subject = match ($type) {
=======
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
        
        $subject = match($type) {
>>>>>>> 518c702 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
        $appointment = $this->notificationData['appointment'] ?? null;
        $appointmentId = is_object($appointment) && isset($appointment->id) ? $appointment->id : null;
=======
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
>>>>>>> 82ae73b (.)

=======
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
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
<<<<<<< HEAD
            $subject .= ' #'.$appointment->id;
=======
        if (is_object($appointment) && property_exists($appointment, 'id') && is_scalar($appointment->id)) {
            $subject .= ' #'.(string) $appointment->id;
>>>>>>> 05bc3ad (.)
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

        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }

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
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }
        
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
        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
<<<<<<< HEAD
<<<<<<< HEAD
                'appointment_id' => $appointmentId,
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73b (.)
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73be (.)
                'type' => $type,
            ],
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function content(): Content
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');

=======
=======
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
>>>>>>> 82ae73b (.)
        $view = match ($type) {
=======
=======
>>>>>>> 1fd232c (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
=======
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
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

        return new Content(
            view: $view,
            with: [
                'appointment' => $this->notificationData['appointment'],
                'patient' => $this->notificationData['patient'],
>>>>>>> 82ae73be (.)
                'type' => $type,
                'additionalData' => $this->notificationData['additionalData'] ?? [],
            ],
        );
    }

    /**
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
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
