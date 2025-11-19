<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
=======
use Override;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> 75179b8 (.)
use Modules\Notify\Datas\SmsData;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class SendAgiletelecomSMSAction implements SmsActionContract
{
<<<<<<< HEAD
    public function execute(SmsData $data): array
    {
        return app(SendAgiletelecomSMSv2Action::class)->execute($data);
=======
    #[Override]
    public function execute(SmsData $data): array
    {
        $res = app(SendAgiletelecomSMSv2Action::class)->execute($data);

        return $res;
>>>>>>> 75179b8 (.)
    }
}
