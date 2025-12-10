<<<<<<< HEAD
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
use Modules\User\Models\User;

class TicketAssignedNotification extends Notification
{
    use Queueable;

    public function __construct(
<<<<<<< HEAD
        public mixed $ticket, // Using mixed type since Ticket model doesn't exist
=======
        public Ticket $ticket,
>>>>>>> 0c46ff7 (.)
        public User $assignedBy
    ) {}

    /**
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(mixed $notifiable): MailMessage
    {
<<<<<<< HEAD
        return (new MailMessage)
=======
        return (new MailMessage())
>>>>>>> laraxot/develop
            ->subject('New Ticket Assigned')
<<<<<<< HEAD
            ->line("A new ticket has been assigned to you by {$this->assignedBy->name}")
            ->action('View Ticket', url('/'));
=======
            ->line("A new ticket #{$this->ticket->id} has been assigned to you by {$this->assignedBy->name}")
            ->action('View Ticket', url("/tickets/{$this->ticket->id}"));
>>>>>>> 0c46ff7 (.)
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(mixed $notifiable): array
    {
        return [
<<<<<<< HEAD
=======
            'ticket_id' => $this->ticket->id,
>>>>>>> 0c46ff7 (.)
            'assigned_by' => $this->assignedBy->id,
        ];
    }
}
=======
>>>>>>> 301ad8b44 (.)
