<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
=======
use Exception;
use GuzzleHttp\Client;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> 8bc2fc9f (first)
=======
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SmsData;
>>>>>>> 20a3d3b (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class SendAgiletelecomSMSAction implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(SmsData $data): array
    {
        return app(SendAgiletelecomSMSv2Action::class)->execute($data);
=======
    #[\Override]
    public function execute(SmsData $data): array
    {
        $res = app(SendAgiletelecomSMSv2Action::class)->execute($data);

        return $res;
>>>>>>> 8bc2fc9f (first)
=======
    public function execute(SmsData $data): array
    {
        return app(SendAgiletelecomSMSv2Action::class)->execute($data);
>>>>>>> 20a3d3b (.)
    }
}
