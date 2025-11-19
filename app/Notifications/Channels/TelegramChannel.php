<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
namespace Modules\Notify\Notifications\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class TelegramChannel
{
    /**
     * Invia la notifica tramite Telegram.
<<<<<<< HEAD
     */
    public function send(mixed $notifiable, Notification $notification): void
    {
        if (! method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForTelegram')) {
=======
     *
     * @param mixed $notifiable
     * @param Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        if (!method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForTelegram')) {
>>>>>>> 75179b8 (.)
            throw new Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
        }

        // TODO: Implementare il metodo toTelegram nella notifica
        $message = 'Messaggio Telegram placeholder';
        $chatId = $notifiable->routeNotificationForTelegram();

        if (empty($chatId)) {
            throw new Exception('Chat ID Telegram non trovato per il notifiable.');
        }

        // TODO: Implementare BotTelegramAction e TelegramMessageData
        // Per ora, logghiamo solo l'intento di invio
        Log::info('Telegram notification would be sent', [
            'chat_id' => $chatId,
<<<<<<< HEAD
            'message' => $message,
=======
            'message' => $message
>>>>>>> b19cd40 (.)
        ]);
    }
}
