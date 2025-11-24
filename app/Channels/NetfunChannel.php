<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======

>>>>>>> 7148d73 (.)
namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
use Modules\Notify\Datas\SmsData;

class NetfunChannel
{
    protected SendNetfunSMSAction $sendSMSAction;

    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }

    /**
     * Invia la notifica tramite Netfun SMS
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function send(mixed $notifiable, Notification $notification): ?array
    {
        // Ottieni il numero di telefono dal Notifiable
        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForNetfun')) {
=======
=======
>>>>>>> 7148d73 (.)
     *
     * @param mixed $notifiable
     * @param Notification $notification
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            return null;
        }

        $to = $notifiable->routeNotificationForNetfun($notification);
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $to) {
=======
        if (!$to) {
>>>>>>> 75179b8 (.)
=======
        if (!$to) {
>>>>>>> 7148d73 (.)
            return null;
        }

        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
<<<<<<< HEAD
        if (! method_exists($notification, 'toNetfun')) {
=======
        if (!method_exists($notification, 'toNetfun')) {
>>>>>>> 75179b8 (.)
=======
        if (!method_exists($notification, 'toNetfun')) {
>>>>>>> 7148d73 (.)
            throw new Exception('Il metodo toNetfun() non è implementato nella notifica');
        }

        $message = $notification->toNetfun($notifiable);

        // Crea i dati SMS
        $smsData = SmsData::from([
            'to' => $to,
            'body' => is_string($message)
                ? $message
                : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from' => null,
        ]);

        // Esegui l'invio tramite la Queueable Action
        // L'esecuzione avverrà in modo asincrono (in background)
        return $this->sendSMSAction->onQueue('sms')->execute($smsData); // Esegui sulla coda 'sms'
    }
}
