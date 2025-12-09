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
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
>>>>>>> 2b494dc (.)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> 75c16f6 (.)
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
>>>>>>> 5aa07c7 (.)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> 998cc0d (.)
=======
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
>>>>>>> 74cd917 (.)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
>>>>>>> ccb1541 (.)
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e39a6f9 (.)
=======
>>>>>>> ab15d0e (.)
// use Modules\SaluteOra\Models\Appointment;
=======
// use Modules\<main module>\Models\Appointment;
>>>>>>> e6ac118 (.)
=======
// use Modules\SaluteOra\Models\Appointment;
>>>>>>> e6c7fb3 (.)
=======
// use Modules\<nome progetto>\Models\Appointment;
>>>>>>> 6a92a74 (.)

class AppointmentNotificationMail extends Mailable implements ShouldQueue
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
=======
>>>>>>> 242f019 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> 2b494dc (.)
=======
>>>>>>> b1c46e7 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> 5aa07c7 (.)
=======
>>>>>>> 563e062 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> 74cd917 (.)
=======
>>>>>>> dee8cf1 (.)
=======
    use Queueable, SerializesModels;
>>>>>>> b1cb887 (.)

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
<<<<<<< HEAD
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
=======
        if (is_object($appointment) && isset($appointment->id) && $appointment->id) {
<<<<<<< HEAD
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
=======
            $appointmentId = is_int($appointment->id) || is_string($appointment->id) ? $appointment->id : (string) $appointment->id;
            $subject .= ' #'.$appointmentId;
>>>>>>> 6a92a74 (.)
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
