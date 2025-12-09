<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Factories\TelegramActionFactory;

/**
 * Canale di notifica per l'invio di messaggi Telegram.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
 * Questo canale utilizza il driver Telegram configurato in config/telegram.php
 * per inviare messaggi Telegram attraverso il provider selezionato.
 */
class TelegramChannel
{
    /**
     * Factory per la creazione di azioni Telegram.
     */
    private TelegramActionFactory $factory;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(TelegramActionFactory $factory)
    {
        $this->factory = $factory;
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    /**
     * Invia la notifica attraverso il canale Telegram.
     *
     * @param mixed $notifiable Entità che riceve la notifica
     * @param Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws Exception Se la notifica non ha il metodo toTelegram o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        if (!method_exists($notification, 'toTelegram')) {
=======
        if (! method_exists($notification, 'toTelegram')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        if (!method_exists($notification, 'toTelegram')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            throw new Exception('Notification does not have toTelegram method');
        }

        $telegramData = $notification->toTelegram($notifiable);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

        if (!($telegramData instanceof TelegramData)) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }

        $action = $this->factory->create();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        
        if (! $telegramData instanceof TelegramData) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }
        
        $action = $this->factory->create();
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        return $action->execute($telegramData);
    }
}
