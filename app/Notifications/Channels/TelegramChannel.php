<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
declare(strict_types=1);

<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)
namespace Modules\Notify\Notifications\Channels;

use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 161887a2 (.)
=======
<<<<<<< HEAD
=======

>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
namespace Modules\Notify\Notifications\Channels;

use Exception;
=======
namespace Modules\Notify\Notifications\Channels;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class TelegramChannel
{
    /**
     * Invia la notifica tramite Telegram.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $notifiable
=======
=======
>>>>>>> cf20697a6 (.)
     * @param mixed $notifiable
<<<<<<< HEAD
     * @param Notification $notification
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Notification $notification
=======
     * @param \Illuminate\Notifications\Notification $notification
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)
=======
     * @param  mixed  $notifiable
=======
     * @param mixed $notifiable
     * @param Notification $notification
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($notification, 'toTelegram')) {
=======
=======
>>>>>>> cf20697a6 (.)
        if (!method_exists($notification, 'toTelegram')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

<<<<<<< HEAD
        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForTelegram')) {
=======
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
=======
<<<<<<< HEAD
        if (! method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForTelegram')) {
=======
        if (!method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
            throw new Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
<<<<<<< HEAD
=======
=======
            throw new \Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
            throw new \Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        // TODO: Implementare il metodo toTelegram nella notifica
        $message = 'Messaggio Telegram placeholder';
        $chatId = $notifiable->routeNotificationForTelegram();

        if (empty($chatId)) {
<<<<<<< HEAD
            throw new Exception('Chat ID Telegram non trovato per il notifiable.');
=======
<<<<<<< HEAD
            throw new Exception('Chat ID Telegram non trovato per il notifiable.');
=======
            throw new \Exception('Chat ID Telegram non trovato per il notifiable.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        // TODO: Implementare BotTelegramAction e TelegramMessageData
        // Per ora, logghiamo solo l'intento di invio
        Log::info('Telegram notification would be sent', [
            'chat_id' => $chatId,
<<<<<<< HEAD
            'message' => $message,
=======
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
>>>>>>> de02998b (.)
            'message' => $message,
=======
            'message' => $message
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'message' => $message,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            'message' => $message,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'message' => $message,
>>>>>>> 9777d1b3 (.)
=======
            'message' => $message,
=======
=======
            'message' => $message,
=======
>>>>>>> d09cb759 (.)
=======
            'message' => $message,
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'message' => $message,
=======
            'message' => $message
>>>>>>> a12f125f4a (.)
=======
            'message' => $message,
>>>>>>> b93ef594b4 (.)
=======
            'message' => $message
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            'message' => $message,
>>>>>>> 3f537838 (.)
=======
            'message' => $message,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            'message' => $message,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            'message' => $message,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            'message' => $message,
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
            'message' => $message,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            'message' => $message,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        ]);
    }
}
