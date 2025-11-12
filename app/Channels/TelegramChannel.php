<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Factories\TelegramActionFactory;

/**
 * Canale di notifica per l'invio di messaggi Telegram.
 *
 * Questo canale utilizza il driver Telegram configurato in config/telegram.php
 * per inviare messaggi Telegram attraverso il provider selezionato.
 */
class TelegramChannel
{
    /**
     * Factory per la creazione di azioni Telegram.
     */
    private TelegramActionFactory $factory;

    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(TelegramActionFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Invia la notifica attraverso il canale Telegram.
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable  Entità che riceve la notifica
     * @param  Notification  $notification  Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     *
=======
     * @param mixed $notifiable Entità che riceve la notifica
     * @param Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
>>>>>>> 99ff506 (.)
     * @throws Exception Se la notifica non ha il metodo toTelegram o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($notification, 'toTelegram')) {
=======
        if (!method_exists($notification, 'toTelegram')) {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        if (!method_exists($notification, 'toTelegram')) {
=======
        if (! method_exists($notification, 'toTelegram')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        if (!method_exists($notification, 'toTelegram')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        if (!method_exists($notification, 'toTelegram')) {
>>>>>>> e11621f (.)
            throw new Exception('Notification does not have toTelegram method');
        }

        $telegramData = $notification->toTelegram($notifiable);

<<<<<<< HEAD
        if (! ($telegramData instanceof TelegramData)) {
=======
        if (!($telegramData instanceof TelegramData)) {
>>>>>>> 99ff506 (.)
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }

        $action = $this->factory->create();

        return $action->execute($telegramData);
    }
}
