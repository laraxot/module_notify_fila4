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
namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
use Modules\Notify\Datas\SmsData;

class NetfunChannel
{
    protected SendNetfunSMSAction $sendSMSAction;
<<<<<<< HEAD

=======
    
>>>>>>> b19cd40 (.)
    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
<<<<<<< HEAD

=======
    
>>>>>>> b19cd40 (.)
    /**
     * Invia la notifica tramite Netfun SMS
<<<<<<< HEAD
     */
    public function send(mixed $notifiable, Notification $notification): ?array
    {
        // Ottieni il numero di telefono dal Notifiable
        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForNetfun')) {
=======
     *
     * @param mixed $notifiable
     * @param Notification $notification
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
>>>>>>> 75179b8 (.)
            return null;
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        $to = $notifiable->routeNotificationForNetfun($notification);
<<<<<<< HEAD
        if (! $to) {
=======
        if (!$to) {
>>>>>>> 75179b8 (.)
            return null;
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
        if (! method_exists($notification, 'toNetfun')) {
=======
        if (!method_exists($notification, 'toNetfun')) {
>>>>>>> 75179b8 (.)
            throw new Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
<<<<<<< HEAD

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
=======
        
        $message = $notification->toNetfun($notifiable);
        
        // Crea i dati SMS
        $smsData = SmsData::from([
            'to'=>  $to,
            'body'=> is_string($message) ? $message : (is_object($message) && method_exists($message, 'getContent') ? $message->getContent() : ''),
            'from'=> null
        ]);
        
        // Esegui l'invio tramite la Queueable Action
        // L'esecuzione avverrà in modo asincrono (in background)
        return $this->sendSMSAction
            ->onQueue('sms') // Esegui sulla coda 'sms'
            ->execute($smsData);
>>>>>>> b19cd40 (.)
    }
}
