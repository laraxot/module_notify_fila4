<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
=======
use Modules\Fixcity\Models\Ticket;
>>>>>>> 0c46ff7 (.)

class TicketStatusChangedNotification extends Notification
{
    use Queueable;

    public function __construct(
<<<<<<< HEAD
        public mixed $ticket, // Using mixed type since Ticket model doesn't exist
=======
        public Ticket $ticket,
>>>>>>> 0c46ff7 (.)
        public string $oldStatus,
        public string $newStatus
    ) {}

<<<<<<< HEAD
=======
    /**
     * @return array<int, string>
     */
>>>>>>> 0c46ff7 (.)
    public function via(mixed $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Ticket Status Changed')
<<<<<<< HEAD
            ->line("Ticket status has changed from {$this->oldStatus} to {$this->newStatus}")
            ->action('View Ticket', url('/'));
=======
            ->line("Ticket #{$this->ticket->id} status has changed from {$this->oldStatus} to {$this->newStatus}")
            ->action('View Ticket', url("/tickets/{$this->ticket->id}"));
>>>>>>> 0c46ff7 (.)
    }

    /**
     * @return array<int, string>
     */
    public function toArray(mixed $notifiable): array
    {
        return [
<<<<<<< HEAD
=======
            'ticket_id' => $this->ticket->id,
>>>>>>> 0c46ff7 (.)
            'old_status' => $this->oldStatus,
            'new_status' => $this->newStatus,
        ];
    }
}
