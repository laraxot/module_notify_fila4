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

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string, mixed>  $notificationData
     */
    public function __construct(
        private readonly array $notificationData,
    ) {
    }

    public function envelope(): Envelope
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');
        $subject = match ($type) {
            'confirmed' => 'Conferma Appuntamento',
            'reminder' => 'Promemoria Appuntamento',
            'cancelled' => 'Cancellazione Appuntamento',
            'rescheduled' => 'Modifica Appuntamento',
            default => 'Notifica Appuntamento',
        };

        $appointment = $this->notificationData['appointment'] ?? null;
        $appointmentId = is_object($appointment) && isset($appointment->id) ? $appointment->id : null;

        return new Envelope(
            subject: $subject,
            tags: ['appointment', $type],
            metadata: [
                'appointment_id' => $appointmentId,
                'type' => $type,
            ],
        );
    }

    public function content(): Content
    {
        $type = (string) ($this->notificationData['type'] ?? 'generic');

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
                'appointment' => $this->notificationData['appointment'] ?? null,
                'patient' => $this->notificationData['patient'] ?? null,
                'type' => $type,
                'additionalData' => $this->notificationData['additionalData'] ?? [],
            ],
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
