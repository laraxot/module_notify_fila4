<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class TelegramChannel
{
    /**
     * Invia la notifica tramite Telegram.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function send(mixed $notifiable, Notification $notification): void
=======
     *
     * @param  mixed  $notifiable
     * @return void
     */
    public function send($notifiable, Notification $notification)
>>>>>>> 8bc2fc9f (first)
=======
     */
    public function send(mixed $notifiable, Notification $notification): void
>>>>>>> 20a3d3b (.)
    {
        if (! method_exists($notification, 'toTelegram')) {
            throw new Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForTelegram')) {
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
            'message' => $message,
        ]);
    }
}
