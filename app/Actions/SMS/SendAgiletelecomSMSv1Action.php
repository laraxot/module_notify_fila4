<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Client;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;
use Override;

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 *
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
use Override;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
=======

use GuzzleHttp\Client;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
>>>>>>> 99ff506 (.)
 * @see https://account.agiletelecom.com/public/resources/HTTP_POST_IT.pdf
 */
class SendAgiletelecomSMSv1Action implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
=======
>>>>>>> 4e2ebfb (.)
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

        return [];
    }
=======
        
        return [];

    }
    
>>>>>>> b19cd40 (.)
=======

        return [];
    }
>>>>>>> 4e2ebfb (.)
}
