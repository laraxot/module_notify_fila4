<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Fixcity\Models\Ticket;
use Modules\User\Models\User;

class TicketAssignedNotification extends Notification
{
    use Queueable;

    public function __construct(
        public Ticket $ticket,
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
        return (new MailMessage)
            ->subject('New Ticket Assigned')
            ->line("A new ticket #{$this->ticket->id} has been assigned to you by {$this->assignedBy->name}")
            ->action('View Ticket', url("/tickets/{$this->ticket->id}"));
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(mixed $notifiable): array
    {
        return [
            'ticket_id' => $this->ticket->id,
            'assigned_by' => $this->assignedBy->id,
        ];
    }
}
