<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts\SMS;

use Modules\Notify\Datas\SmsData;

/**
 * Interfaccia comune per tutte le azioni di invio SMS.
 * Ogni provider SMS deve implementare questa interfaccia.
 */
interface SmsActionContract
{
    /**
     * Invia un SMS utilizzando il provider specifico.
     *
<<<<<<< HEAD
     * @param SmsData $smsData I dati del messaggio SMS
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b85 (.)
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b855 (.)
=======
     * @param  SmsData  $smsData  I dati del messaggio SMS
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return array Risultato dell'operazione
     */
    public function execute(SmsData $smsData): array;
}
=======
>>>>>>> 301ad8b44 (.)
