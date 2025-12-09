<?php

declare(strict_types=1);

namespace Modules\Notify\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

<<<<<<< HEAD
<<<<<<< HEAD
=======
// use Modules\<nome progetto>\Models\Appointment;

>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

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
     * Dati della notifica dell'appuntamento.
     *
     * @var array<string, mixed>
     */
    public array $notificationData;

    /**
     * Crea una nuova istanza del messaggio.
     *
=======
>>>>>>> 20a3d3b (.)
     * @param  array<string, mixed>  $notificationData
     */
    public function __construct(
        private readonly array $notificationData,
    ) {}

    public function envelope(): Envelope
    {
<<<<<<< HEAD
        $appointment = $this->notificationData['appointment'];
        $type = $this->notificationData['type'];

>>>>>>> 8bc2fc9f (first)
=======
        $type = (string) ($this->notificationData['type'] ?? 'generic');
>>>>>>> 20a3d3b (.)
        $subject = match ($type) {
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };

<<<<<<< HEAD
<<<<<<< HEAD
        $appointment = $this->notificationData['appointment'] ?? null;
        $appointmentId = is_object($appointment) && isset($appointment->id) ? $appointment->id : null;
=======
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
            $appointmentId = is_int($appointment->id) || is_string($appointment->id) ? $appointment->id : (string) $appointment->id;
            $subject .= ' #'.$appointmentId;
        }
>>>>>>> 8bc2fc9f (first)
=======
        $appointment = $this->notificationData['appointment'] ?? null;
        $appointmentId = is_object($appointment) && isset($appointment->id) ? $appointment->id : null;
>>>>>>> 20a3d3b (.)

        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
<<<<<<< HEAD
<<<<<<< HEAD
                'appointment_id' => $appointmentId,
=======
                'appointment_id' => is_object($appointment) && isset($appointment->id) ? $appointment->id : null,
>>>>>>> 8bc2fc9f (first)
=======
                'appointment_id' => $appointmentId,
>>>>>>> 20a3d3b (.)
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
    /**
     * Get the message content definition.
     */
=======
>>>>>>> 20a3d3b (.)
    public function content(): Content
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');

<<<<<<< HEAD
        // Determina il template da utilizzare in base al tipo di notifica
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
        $view = match ($type) {
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
<<<<<<< HEAD
                'appointment' => $this->notificationData['appointment'] ?? null,
                'patient' => $this->notificationData['patient'] ?? null,
=======
                'appointment' => $this->notificationData['appointment'],
                'patient' => $this->notificationData['patient'],
>>>>>>> 8bc2fc9f (first)
=======
                'appointment' => $this->notificationData['appointment'] ?? null,
                'patient' => $this->notificationData['patient'] ?? null,
>>>>>>> 20a3d3b (.)
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
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
