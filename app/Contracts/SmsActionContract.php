<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

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
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b8 (.)
=======
     * @param SmsData $smsData I dati del messaggio SMS
>>>>>>> 75179b85 (.)
     * @return array Risultato dell'operazione
     */
    public function execute(SmsData $smsData): array;
}
