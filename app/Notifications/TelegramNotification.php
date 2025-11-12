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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $message  Il messaggio da inviare tramite Telegram
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per la notifica
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> e11621f (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    public function toArray(?object $notifiable): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
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
