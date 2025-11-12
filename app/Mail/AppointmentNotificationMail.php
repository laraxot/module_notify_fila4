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
=======
>>>>>>> 2fdda20 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
=======
<<<<<<< HEAD
=======
>>>>>>> f813254 (.)
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
>>>>>>> 99ff506 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> 1c89777 (.)
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
>>>>>>> 1b51780 (.)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> 65a883d (.)
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD

=======
>>>>>>> e39a6f9 (.)
// use Modules\SaluteOra\Models\Appointment;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    use Queueable, SerializesModels;
=======
<<<<<<< HEAD
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 1c89777 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> 1b51780 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $notificationData
=======
     * @param array<string, mixed> $notificationData
>>>>>>> e39a6f9 (.)
=======
     * @param array<string, mixed> $notificationData
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> bf479cc (.)
>>>>>>> 2fdda20 (.)
=======
     * @param  array<string, mixed>  $notificationData
>>>>>>> 8d298d6 (.)
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

        $subject = match ($type) {
=======
        
        $subject = match($type) {
>>>>>>> e39a6f9 (.)
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };
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
        }

=======
        
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
        
>>>>>>> e39a6f9 (.)
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
        $view = match ($type) {
=======
        
        // Determina il template da utilizzare in base al tipo di notifica
        $view = match($type) {
>>>>>>> e39a6f9 (.)
            'confirmed' => 'notify::emails.appointments.confirmed',
            'reminder' => 'notify::emails.appointments.reminder',
            'cancelled' => 'notify::emails.appointments.cancelled',
            'rescheduled' => 'notify::emails.appointments.rescheduled',
            default => 'notify::emails.appointments.generic',
        };
<<<<<<< HEAD

=======
        
>>>>>>> e39a6f9 (.)
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
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
