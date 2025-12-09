<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Factories\WhatsAppActionFactory;

/**
 * Canale di notifica per l'invio di messaggi WhatsApp.
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
 * Questo canale utilizza il driver WhatsApp configurato in config/whatsapp.php
 * per inviare messaggi WhatsApp attraverso il provider selezionato.
 */
class WhatsAppChannel
{
    /**
     * Factory per la creazione di azioni WhatsApp.
     */
    private WhatsAppActionFactory $factory;
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
    public function __construct(WhatsAppActionFactory $factory)
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
     * Invia la notifica attraverso il canale WhatsApp.
     *
     * @param mixed $notifiable Entità che riceve la notifica
     * @param Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws Exception Se la notifica non ha il metodo toWhatsApp o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        if (!method_exists($notification, 'toWhatsApp')) {
=======
        if (! method_exists($notification, 'toWhatsApp')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        if (!method_exists($notification, 'toWhatsApp')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            throw new Exception('Notification does not have toWhatsApp method');
        }

        $whatsAppData = $notification->toWhatsApp($notifiable);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

        if (!($whatsAppData instanceof WhatsAppData)) {
            throw new Exception('toWhatsApp method must return an instance of WhatsAppData');
        }

        $action = $this->factory->create();

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        
        if (! $whatsAppData instanceof WhatsAppData) {
            throw new Exception('toWhatsApp method must return an instance of WhatsAppData');
        }
        
        $action = $this->factory->create();
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        return $action->execute($whatsAppData);
    }
}
