<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Override;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======

use GuzzleHttp\Client;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 * @see https://account.agiletelecom.com/public/resources/HTTP_POST_IT.pdf
 */
class SendAgiletelecomSMSv1Action implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    #[Override]
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    public function execute(SmsData $data): array{
        
        $base_uri='https://secure.agiletelecom.com/';
        $relative_path='securesend_v1.aspx';

        $agile=AgiletelecomData::make();
        $phone=app(NormalizePhoneNumberAction::class)->execute($data->to);
        
        
        $data = [
            "smsTEXT" => $data->body,
            "smsNUMBER" => $phone,
            "smsSENDER" => $agile->sender,
            "smsGATEWAY" => "H", // M = Qualità standard, H = Qualità Alta
            "smsUSER" =>$agile->username,
            "smsPASSWORD" => $agile->password
        ];

        $headers = [
            "Accept-Encoding" => "gzip, deflate",
            "Cache-Control" => "no-cache",
            "Connection" => "keep-alive",
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        ];

        $client = new Client([
            'base_uri' => $base_uri,
            'timeout' => 2.0,
            'form_params' => $data,
            'headers' => $headers,
        ]);

        $connection = $client->request('POST', $relative_path);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

        return [];
    }
=======
        
        return [];

    }
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

        return [];
    }
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
}
