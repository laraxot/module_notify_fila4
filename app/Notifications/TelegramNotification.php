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

    protected string $message;

    protected array $options;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
     * @param  string  $message  Il messaggio da inviare tramite Telegram
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per la notifica
=======
<<<<<<< HEAD
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
>>>>>>> a12f125f4a (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> b93ef594b4 (.)
=======
     * @param string $message
     * @param array $options
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> f813254 (.)
     * @return array<int, class-string>
     */
    public function via($_notifiable): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
     * @return array<int, class-string>
     */
    public function via($_notifiable): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  object|null  $notifiable  The entity to be notified
     * @return array<string, mixed>
     */
<<<<<<< HEAD
    public function toArray(?object $notifiable): array
=======
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array
=======
    public function toArray(?object $notifiable): array
>>>>>>> a12f125f4a (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> b93ef594b4 (.)
=======
    public function toArray(?object $notifiable): array
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Get the Telegram representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toTelegram($notifiable): string
    {
        return $this->message;
    }
}
