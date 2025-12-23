<?php

declare(strict_types=1);

namespace Modules\Notify\Mail;

<<<<<<< HEAD
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
    use Queueable, SerializesModels;

    /**
     * Dati della notifica dell'appuntamento.
     *
     * @var array<string, mixed>
     */
    public array $notificationData;

    /**
     * Crea una nuova istanza del messaggio.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $notificationData
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
        
        $subject = match($type) {
=======
<<<<<<< HEAD

        $subject = match ($type) {
=======
        
        $subject = match($type) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };
<<<<<<< HEAD
=======
<<<<<<< HEAD

        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #'.$appointment->id;
        }

=======
>>>>>>> d284d65 (.)
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #' . $appointment->id;
        }
        
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
                'type' => $type,
            ],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $type = $this->notificationData['type'];
<<<<<<< HEAD
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
=======
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
        $view = match ($type) {
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            'confirmed' => 'notify::emails.appointments.confirmed',
            'reminder' => 'notify::emails.appointments.reminder',
            'cancelled' => 'notify::emails.appointments.cancelled',
            'rescheduled' => 'notify::emails.appointments.rescheduled',
            default => 'notify::emails.appointments.generic',
        };
<<<<<<< HEAD
        
=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return new Content(
            view: $view,
            with: [
                'appointment' => $this->notificationData['appointment'],
                'patient' => $this->notificationData['patient'],
                'type' => $type,
                'additionalData' => $this->notificationData['additionalData'] ?? [],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
<<<<<<< HEAD
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
