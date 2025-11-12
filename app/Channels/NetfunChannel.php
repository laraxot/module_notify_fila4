<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Notify\Channels;

use Exception;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Notify\Channels;

use Exception;
=======
namespace Modules\Notify\Channels;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSMSAction;
use Modules\Notify\Datas\SmsData;

class NetfunChannel
{
    protected SendNetfunSMSAction $sendSMSAction;
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
    public function __construct(SendNetfunSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
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
>>>>>>> d284d65 (.)
    /**
     * Invia la notifica tramite Netfun SMS
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable
<<<<<<< HEAD
     * @param  mixed  $notifiable
=======
=======
     * @param mixed $notifiable
     * @param Notification $notification
<<<<<<< HEAD
=======
=======
    
    /**
     * Invia la notifica tramite Netfun SMS
     * 
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
     * @return array|null
     */
    public function send($notifiable, Notification $notification)
    {
        // Ottieni il numero di telefono dal Notifiable
        if (! is_object($notifiable) || ! method_exists($notifiable, 'routeNotificationForNetfun')) {
            return null;
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
        $to = $notifiable->routeNotificationForNetfun($notification);
        if (! $to) {
            return null;
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
>>>>>>> d284d65 (.)
        // Ottieni il messaggio dalla notifica
        if (! method_exists($notification, 'toNetfun')) {
            throw new Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

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
=======
        
=======

>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
        return $this->sendSMSAction
            ->onQueue('sms') // Esegui sulla coda 'sms'
            ->execute($smsData);
>>>>>>> a12f125f4a (.)
=======
        return $this->sendSMSAction->onQueue('sms')->execute($smsData); // Esegui sulla coda 'sms'
>>>>>>> b93ef594b4 (.)
=======
        
        // Ottieni il messaggio dalla notifica
        if (!method_exists($notification, 'toNetfun')) {
            throw new \Exception('Il metodo toNetfun() non è implementato nella notifica');
        }
        
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
