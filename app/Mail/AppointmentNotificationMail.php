<?php

declare(strict_types=1);

namespace Modules\Notify\Mail;

<<<<<<< HEAD
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
>>>>>>> 82ae73b (.)
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
class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
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
     * Dati della notifica dell'appuntamento.
     *
     * @var array<string, mixed>
     */
    public array $notificationData;

    /**
     * Crea una nuova istanza del messaggio.
     *
     * @param array<string, mixed> $notificationData
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

>>>>>>> 82ae73b (.)
        $subject = match ($type) {
=======
=======
>>>>>>> 1fd232c (.)
        
        $subject = match($type) {
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };
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
        
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $subject .= ' #' . $appointment->id;
        }
        
        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
<<<<<<< HEAD
                'appointment_id' => $appointmentId,
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 82ae73b (.)
                'type' => $type,
            ],
        );
    }

<<<<<<< HEAD
    public function content(): Content
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');

=======
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $type = $this->notificationData['type'];
<<<<<<< HEAD
<<<<<<< HEAD

        // Determina il template da utilizzare in base al tipo di notifica
>>>>>>> 82ae73b (.)
        $view = match ($type) {
=======
=======
>>>>>>> 1fd232c (.)
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
            'confirmed' => 'notify::emails.appointments.confirmed',
            'reminder' => 'notify::emails.appointments.reminder',
            'cancelled' => 'notify::emails.appointments.cancelled',
            'rescheduled' => 'notify::emails.appointments.rescheduled',
            default => 'notify::emails.appointments.generic',
        };
        
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
                'type' => $type,
                'additionalData' => $this->notificationData['additionalData'] ?? [],
            ],
        );
    }

    /**
<<<<<<< HEAD
=======
     * Get the attachments for the message.
     *
>>>>>>> 82ae73b (.)
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
