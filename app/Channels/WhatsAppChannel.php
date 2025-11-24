<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Factories\WhatsAppActionFactory;

/**
 * Canale di notifica per l'invio di messaggi WhatsApp.
 *
 * Questo canale utilizza il driver WhatsApp configurato in config/whatsapp.php
 * per inviare messaggi WhatsApp attraverso il provider selezionato.
 */
class WhatsAppChannel
{
    /**
     * Factory per la creazione di azioni WhatsApp.
     */
    private WhatsAppActionFactory $factory;

    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(WhatsAppActionFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Invia la notifica attraverso il canale WhatsApp.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $notifiable  Entità che riceve la notifica
     * @param  Notification  $notification  Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     *
     * @throws Exception Se la notifica non ha il metodo toWhatsApp o il driver non è supportato
     */
    public function send(mixed $notifiable, Notification $notification): ?array
    {
        if (! method_exists($notification, 'toWhatsApp')) {
=======
=======
>>>>>>> 7148d73 (.)
     * @param mixed $notifiable Entità che riceve la notifica
     * @param Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws Exception Se la notifica non ha il metodo toWhatsApp o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
        if (!method_exists($notification, 'toWhatsApp')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        if (! method_exists($notification, 'toWhatsApp')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        if (!method_exists($notification, 'toWhatsApp')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Notification does not have toWhatsApp method');
        }

        $whatsAppData = $notification->toWhatsApp($notifiable);

<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($whatsAppData instanceof WhatsAppData)) {
=======
        if (!($whatsAppData instanceof WhatsAppData)) {
>>>>>>> 75179b8 (.)
=======
        if (!($whatsAppData instanceof WhatsAppData)) {
>>>>>>> 7148d73 (.)
            throw new Exception('toWhatsApp method must return an instance of WhatsAppData');
        }

        $action = $this->factory->create();

        return $action->execute($whatsAppData);
    }
}
