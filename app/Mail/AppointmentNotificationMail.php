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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\<nome progetto>\Models\Appointment;
=======
=======
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 9ed014c (.)
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
=======
>>>>>>> 92ecc28 (.)
// use Modules\SaluteOra\Models\Appointment;
>>>>>>> 6ba141fc (.)

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
<<<<<<< HEAD
    use Queueable, SerializesModels;
=======
<<<<<<< HEAD
=======
    use Queueable, SerializesModels;
>>>>>>> bf479cc (.)
=======

>>>>>>> 23161eb (.)
>>>>>>> 2fdda20 (.)
=======
// use Modules\<nome progetto>\Models\Appointment;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
>>>>>>> 5e14ac3 (.)

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
     * @param  array<string, mixed>  $notificationData
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23161eb (.)
     * @param  array<string, mixed>  $notificationData
<<<<<<< HEAD
>>>>>>> 2fdda20 (.)
>>>>>>> 31bdf6b (.)
=======
>>>>>>> 5e14ac3 (.)
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

        $subject = match ($type) {
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
=======
        // PHPStan Level 10: isset() invece di property_exists() per Eloquent magic property
>>>>>>> 6ba141fc (.)
=======
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 23161eb (.)

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
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
        
>>>>>>> 9ed014c (.)
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
            $subject .= ' #' . $appointment->id;
=======
            $subject .= ' #'.$appointment->id;
>>>>>>> bf479cc (.)
=======
>>>>>>> 23161eb (.)
        }
        
<<<<<<< HEAD
>>>>>>> 518c702 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> 92ecc28 (.)
=======
>>>>>>> 5e14ac3 (.)
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

        // Determina il template da utilizzare in base al tipo di notifica
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
