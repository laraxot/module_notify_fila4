<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Modules\Notify\Datas\SmsData;

/**
 * Interfaccia comune per tutte le azioni di invio SMS.
 * Ogni provider SMS deve implementare questa interfaccia.
 */
interface SmsProviderContract
{
    /**
     * Invia un SMS utilizzando il provider specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  SmsData  $smsData  I dati del messaggio SMS
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b85 (.)
=======
     * @param  SmsData  $smsData  I dati del messaggio SMS
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
     * @return array Risultato dell'operazione
     */
    public function execute(SmsData $smsData): array;
}
