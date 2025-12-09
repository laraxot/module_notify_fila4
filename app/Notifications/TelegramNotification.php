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
    /**
     * @var string
     */
    protected string $message;

    /**
     * @var array
     */
=======
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
>>>>>>> f1c9518b (.)
    protected array $options;

    /**
     * Create a new notification instance.
     *
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 9777d1b3 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
>>>>>>> d09cb759 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
>>>>>>> d09cb759 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 3f537838 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 3f537838 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
     * @param  string  $message  Il messaggio da inviare tramite Telegram
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per la notifica
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
=======
     * @param string $message
     * @param array $options
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
     * @param string $message Il messaggio da inviare tramite Telegram
     * @param array<string, mixed> $options Opzioni aggiuntive per la notifica
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @return array<int, class-string>
     */
    public function via($_notifiable): array
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
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the array representation of the notification.
     *
<<<<<<< HEAD
     * @param object|null $notifiable The entity to be notified
=======
<<<<<<< HEAD
     * @param  object|null  $notifiable  The entity to be notified
>>>>>>> f1c9518b (.)
     * @return array<string, mixed>
     */
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
    public function toArray(null|object $notifiable): array
=======
    public function toArray(?object $notifiable): array
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 9777d1b3 (.)
=======
    public function toArray(null|object $notifiable): array
=======
=======
    public function toArray(null|object $notifiable): array
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 3f537838 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 3f537838 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 2941b0bd (.)
=======
=======
     * @param object|null $notifiable The entity to be notified
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
    public function toArray(?object $notifiable): array
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    public function toArray(null|object $notifiable): array
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
    {
        // return $this->data->toArray();
        return [];
    }

    /**
     * Get the Telegram representation of the notification.
     *
<<<<<<< HEAD
     * @param mixed $notifiable
     * @return string
=======
<<<<<<< HEAD
     * @param  mixed  $notifiable
=======
     * @param mixed $notifiable
     * @return string
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function toTelegram($notifiable): string
    {
        return $this->message;
    }
}
