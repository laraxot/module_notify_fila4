<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Contracts\SmsActionContract;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Modules\Notify\Datas\SmsData;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 */
class SendAgiletelecomSMSAction implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(SmsData $data): array
    {
        return app(SendAgiletelecomSMSv2Action::class)->execute($data);
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    #[Override]
    public function execute(SmsData $data): array
    {
        $res = app(SendAgiletelecomSMSv2Action::class)->execute($data);

        return $res;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    }
}
