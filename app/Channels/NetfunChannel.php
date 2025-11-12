<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
namespace Modules\Notify\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
use Modules\Notify\Datas\SmsData;

class NetfunChannel
{
    protected SendNetfunSMSAction $sendSMSAction;
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
    /**
     * Invia la notifica tramite Netfun SMS
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable
=======
     * @param mixed $notifiable
     * @param Notification $notification
>>>>>>> 99ff506 (.)
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
<<<<<<< HEAD
        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForNetfun')) {
=======
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
>>>>>>> 99ff506 (.)
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        $to = $notifiable->routeNotificationForNetfun($notification);
<<<<<<< HEAD
        if (! $to) {
=======
        if (!$to) {
>>>>>>> 99ff506 (.)
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Ottieni il messaggio dalla notifica
<<<<<<< HEAD
        if (! method_exists($notification, 'toNetfun')) {
=======
        if (!method_exists($notification, 'toNetfun')) {
>>>>>>> 99ff506 (.)
            throw new Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

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
<<<<<<< HEAD
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
=======
>>>>>>> 4e2ebfb (.)
    }
}
