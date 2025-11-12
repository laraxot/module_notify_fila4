<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
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


>>>>>>> b93ef594b4 (.)
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
     * @param  mixed  $notifiable
=======
     * @param mixed $notifiable
<<<<<<< HEAD
     * @param Notification $notification
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
<<<<<<< HEAD
     * @param Notification $notification
=======
     * @param \Illuminate\Notifications\Notification $notification
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
        if (! method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForTelegram')) {
=======
        if (!method_exists($notification, 'toTelegram')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
>>>>>>> 99ff506 (.)
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
        ]);
    }
}
