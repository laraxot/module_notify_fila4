<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Client;
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
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
 * @see https://account.agiletelecom.com/public/resources/HTTP_POST_IT.pdf
 */
class SendAgiletelecomSMSv1Action implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
    public function execute(SmsData $data): array
    {
        $base_uri = 'https://secure.agiletelecom.com/';
        $relative_path = 'securesend_v1.aspx';

        $agile = AgiletelecomData::make();
        $phone = app(NormalizePhoneNumberAction::class)->execute($data->to);

        $data = [
            'smsTEXT' => $data->body,
            'smsNUMBER' => $phone,
            'smsSENDER' => $agile->sender,
            'smsGATEWAY' => 'H', // M = Qualità standard, H = Qualità Alta
            'smsUSER' => $agile->username,
            'smsPASSWORD' => $agile->password,
        ];

        $headers = [
            'Accept-Encoding' => 'gzip, deflate',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
        ];

        $client = new Client([
            'base_uri' => $base_uri,
            'timeout' => 2.0,
            'form_params' => $data,
            'headers' => $headers,
        ]);

        $connection = $client->request('POST', $relative_path);

        return [];
    }
}
