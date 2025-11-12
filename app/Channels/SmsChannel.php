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
     * @throws Exception Se la notifica non ha il metodo toSms o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
<<<<<<< HEAD
        if (! method_exists($notification, 'toSms')) {
=======
<<<<<<< HEAD
        if (!method_exists($notification, 'toSms')) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
        if (!method_exists($notification, 'toSms')) {
=======
        if (! method_exists($notification, 'toSms')) {
>>>>>>> a12f125f4a (.)
=======
        if (!method_exists($notification, 'toSms')) {
>>>>>>> b93ef594b4 (.)
=======
     * @param \Illuminate\Notifications\Notification $notification Notifica da inviare
     * @return array|null Risultato dell'operazione o null in caso di errore
     * @throws \Exception Se la notifica non ha il metodo toSms o il driver non è supportato
     */
    public function send($notifiable, Notification $notification)
    {
        if (! method_exists($notification, 'toSms')) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            throw new Exception('Notification does not have toSms method');
        }

        $smsData = $notification->toSms($notifiable);

<<<<<<< HEAD
        if (! ($smsData instanceof SmsData)) {
=======
<<<<<<< HEAD
        if (!($smsData instanceof SmsData)) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($smsData instanceof SmsData)) {
=======

        if (! $smsData instanceof SmsData) {
>>>>>>> a12f125f4a (.)
=======
        if (!($smsData instanceof SmsData)) {
>>>>>>> b93ef594b4 (.)
=======

        if (! $smsData instanceof SmsData) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            throw new Exception('toSms method must return an instance of SmsData');
        }

        $action = $this->factory->create();
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

        return $action->execute($smsData);
    }
}
