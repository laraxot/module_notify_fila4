<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
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
=======
>>>>>>> e11621f (.)
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
=======
     * @param mixed $notifiable
     * @param Notification $notification
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
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
<<<<<<< HEAD
        if (! $to) {
=======
        if (!$to) {
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
        if (! method_exists($notification, 'toNetfun')) {
=======
        if (!method_exists($notification, 'toNetfun')) {
>>>>>>> 99ff506 (.)
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
