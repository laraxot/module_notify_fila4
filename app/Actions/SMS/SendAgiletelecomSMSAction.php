<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Exception;
use GuzzleHttp\Client;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class SendAgiletelecomSMSAction implements SmsActionContract
{
<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
    public function execute(SmsData $data): array
    {
        $res = app(SendAgiletelecomSMSv2Action::class)->execute($data);

        return $res;
    }
}
