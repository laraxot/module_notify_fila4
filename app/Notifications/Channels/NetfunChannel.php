<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications\Channels;

use Modules\Notify\Actions\NetfunSendAction;
use Modules\Notify\Contracts\CanThemeNotificationContract;
use Modules\Notify\Notifications\ThemeNotification;
use Webmozart\Assert\Assert;

// use Modules\Xot\Contracts\ModelContactContract;

class NetfunChannel
{
    /**
     * Send the given notification.
     */
    public function send(CanThemeNotificationContract $notifiable, ThemeNotification $themeNotification): void
    {
        $smsData = $themeNotification->toSms($notifiable);

        // Otteniamo l'istanza dell'action e verifichiamo che sia del tipo corretto
        $netfunSendAction = app(NetfunSendAction::class);
        Assert::isInstanceOf($netfunSendAction, NetfunSendAction::class);

<<<<<<< HEAD
<<<<<<< HEAD
        // Eseguiamo l'action - restituisce sempre un array
        /** @var array<string, mixed> $data */
        $data = $netfunSendAction->execute($smsData);
=======
        // Eseguiamo l'action e verifichiamo che il risultato sia un array
        $data = $netfunSendAction->execute($smsData);
        Assert::isArray($data, 'Il risultato di NetfunSendAction deve essere un array');
>>>>>>> 75179b85 (.)

        // Incrementiamo il contatore SMS
        $notifiable->increase('sms', $data);
<<<<<<< HEAD
=======
        // Eseguiamo l'action e verifichiamo che il risultato sia un array
        $data = $netfunSendAction->execute($smsData);
        Assert::isArray($data, 'Il risultato di NetfunSendAction deve essere un array');

        // Incrementiamo il contatore SMS
        $notifiable->increase('sms', $data);
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

        /*
         * $data['sms_sent_at'] = now();
         * $data['sms_count'] = (int) $notifiable->sms_count + 1;
         * $notifiable->update($data);
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        /*
        $data['sms_sent_at'] = now();
        $data['sms_count'] = (int) $notifiable->sms_count + 1;
        $notifiable->update($data);
        */
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
