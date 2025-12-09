<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 207ac35e (.)
    /**
     * Invia la notifica tramite Netfun SMS
     *
     * @param mixed $notifiable
     * @param Notification $notification
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
        if (!is_object($notifiable) || !method_exists($notifiable, 'routeNotificationForNetfun')) {
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        $to = $notifiable->routeNotificationForNetfun($notification);
        if (!$to) {
            return null;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        // Ottieni il messaggio dalla notifica
        if (!method_exists($notification, 'toNetfun')) {
            throw new Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }
}
