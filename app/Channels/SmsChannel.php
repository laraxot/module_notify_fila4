<?php

declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Factories\SmsActionFactory;

/**
 * Canale di notifica per l'invio di messaggi SMS.
 *
 * Questo canale utilizza il driver SMS configurato in config/sms.php
 * per inviare messaggi SMS attraverso il provider selezionato.
 */
class SmsChannel
{
    /**
     * Factory per la creazione di azioni SMS.
     */
    private SmsActionFactory $factory;

    /**
     * Crea una nuova istanza del canale.
     */
    public function __construct(SmsActionFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Invia la notifica attraverso il canale SMS.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $notifiable  Entità che riceve la notifica
     * @param  Notification  $notification  Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     *
     * @throws Exception Se la notifica non ha il metodo toSms o il driver non è supportato
     */
    public function send(mixed $notifiable, Notification $notification): ?array
    {
        if (! method_exists($notification, 'toSms')) {
=======
=======
>>>>>>> 7148d73 (.)
     * @param mixed $notifiable Entità che riceve la notifica
     * @param Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws Exception Se la notifica non ha il metodo toSms o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
        if (!method_exists($notification, 'toSms')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        if (! method_exists($notification, 'toSms')) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        if (!method_exists($notification, 'toSms')) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Notification does not have toSms method');
        }

        $smsData = $notification->toSms($notifiable);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($smsData instanceof SmsData)) {
=======
        if (!($smsData instanceof SmsData)) {
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        if (!($smsData instanceof SmsData)) {
=======

        if (! $smsData instanceof SmsData) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        if (!($smsData instanceof SmsData)) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        if (!($smsData instanceof SmsData)) {
>>>>>>> 9777d1b (.)
=======
        if (!($smsData instanceof SmsData)) {
>>>>>>> 7148d73 (.)
            throw new Exception('toSms method must return an instance of SmsData');
        }

        $action = $this->factory->create();

        return $action->execute($smsData);
    }
}
