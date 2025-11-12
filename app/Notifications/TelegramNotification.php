<?php

declare(strict_types=1);

/**
 * @see https://iftikhar-ahmed.medium.com/send-push-notifications-in-laravel-using-firebase-on-your-android-device-f585621db900
 * @see https://github.com/laravel-notification-channels/telegram
 */

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Notifications\Channels\TelegramChannel;

/**
 * Classe per inviare notifiche tramite Telegram.
 */
class TelegramNotification extends Notification implements ShouldQueue
{
    use Queueable;

<<<<<<< HEAD
    protected string $message;

=======
    /**
     * @var string
     */
    protected string $message;

    /**
     * @var array
     */
>>>>>>> 99ff506 (.)
    protected array $options;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $message  Il messaggio da inviare tramite Telegram
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per la notifica
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 99ff506 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
     */
    public function __construct(string $message, array $options = [])
    {
        $this->message = $message;
        $this->options = $options;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 95531e1 (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 99ff506 (.)
     * @return array<int, class-string>
     */
    public function via($_notifiable): array
=======
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
>>>>>>> b19cd40 (.)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
     * @param  object|null  $notifiable  The entity to be notified
     * @return array<string, mixed>
     */
    public function toArray(?object $notifiable): array
=======
     * @param object|null $notifiable The entity to be notified
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    public function toArray(?object $notifiable): array
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Get the Telegram representation of the notification.
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable
=======
     * @param mixed $notifiable
     * @return string
>>>>>>> 99ff506 (.)
     */
    public function toTelegram($notifiable): string
    {
        return $this->message;
    }
}
