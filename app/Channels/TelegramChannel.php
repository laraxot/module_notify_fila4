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
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(TelegramActionFactory $factory)
    {
        $this->factory = $factory;
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    /**
     * Invia la notifica attraverso il canale Telegram.
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable  Entità che riceve la notifica
     * @param  Notification  $notification  Notifica da inviare
=======
     * @param mixed $notifiable Entità che riceve la notifica
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param Notification $notification Notifica da inviare
>>>>>>> f813254 (.)
     * @return array|null Risultato dell'operazione o null in caso di errore
     *
     * @throws Exception Se la notifica non ha il metodo toTelegram o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
        if (! method_exists($notification, 'toTelegram')) {
=======
<<<<<<< HEAD
        if (!method_exists($notification, 'toTelegram')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($notification, 'toTelegram')) {
=======
        if (! method_exists($notification, 'toTelegram')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($notification, 'toTelegram')) {
>>>>>>> b93ef594b4 (.)
=======
     * @param \Illuminate\Notifications\Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws \Exception Se la notifica non ha il metodo toTelegram o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
        if (! method_exists($notification, 'toTelegram')) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            throw new Exception('Notification does not have toTelegram method');
        }

        $telegramData = $notification->toTelegram($notifiable);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if (! ($telegramData instanceof TelegramData)) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }

        $action = $this->factory->create();

<<<<<<< HEAD
=======
=======
        
        if (! $telegramData instanceof TelegramData) {
=======

        if (!($telegramData instanceof TelegramData)) {
>>>>>>> b93ef594b4 (.)
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }

        $action = $this->factory->create();
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        if (! $telegramData instanceof TelegramData) {
            throw new Exception('toTelegram method must return an instance of TelegramData');
        }
        
        $action = $this->factory->create();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return $action->execute($telegramData);
    }
}
