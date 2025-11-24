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
<<<<<<< HEAD
    protected string $message;

=======
=======
>>>>>>> 7148d73 (.)
    /**
     * @var string
     */
    protected string $message;

    /**
     * @var array
     */
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    protected array $options;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $message  Il messaggio da inviare tramite Telegram
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per la notifica
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 9777d1b (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
     * @return array<int, class-string>
     */
    public function via(mixed $_notifiable): array
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
     * @return array<int, class-string>
     */
    public function via($_notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  object|null  $notifiable  The entity to be notified
     * @return array<string, mixed>
     */
    public function toArray(?object $notifiable): array
=======
=======
>>>>>>> 7148d73 (.)
     * @param object|null $notifiable The entity to be notified
     * @return array<string, mixed>
     */
    public function toArray(null|object $notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
    public function toArray(?object $notifiable): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Get the Telegram representation of the notification.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function toTelegram(mixed $notifiable): string
=======
=======
>>>>>>> 7148d73 (.)
     *
     * @param mixed $notifiable
     * @return string
     */
    public function toTelegram($notifiable): string
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    {
        return $this->message;
    }
}
