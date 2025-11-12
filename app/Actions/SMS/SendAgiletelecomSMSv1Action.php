<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Override;
>>>>>>> f813254 (.)
use GuzzleHttp\Client;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
=======
=======

=======
use Override;
>>>>>>> b93ef594b4 (.)
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Datas\SmsData;
>>>>>>> b93ef594b4 (.)
=======

use GuzzleHttp\Client;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Http;
use Modules\Notify\Datas\SMS\AgiletelecomData;
use Modules\Notify\Contracts\SMS\SmsActionContract;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)

/**
 * Azione per l'invio di SMS tramite Agile Telecom.
 *
 * @see https://account.agiletelecom.com/public/resources/HTTP_POST_IT.pdf
 */
class SendAgiletelecomSMSv1Action implements SmsActionContract
{
<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
    #[Override]
>>>>>>> 6ba141fc (.)
    public function execute(SmsData $data): array
    {
        $base_uri = 'https://secure.agiletelecom.com/';
        $relative_path = 'securesend_v1.aspx';

        $agile = AgiletelecomData::make();
        $phone = app(NormalizePhoneNumberAction::class)->execute($data->to);
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

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
=======
=======
>>>>>>> origin/develop
    public function execute(SmsData $data): array{
        
        $base_uri='https://secure.agiletelecom.com/';
        $relative_path='securesend_v1.aspx';
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

        $data = [
            'smsTEXT' => $data->body,
            'smsNUMBER' => $phone,
            'smsSENDER' => $agile->sender,
            'smsGATEWAY' => 'H', // M = Qualità standard, H = Qualità Alta
            'smsUSER' => $agile->username,
            'smsPASSWORD' => $agile->password,
        ];

        $headers = [
<<<<<<< HEAD
            "Accept-Encoding" => "gzip, deflate",
            "Cache-Control" => "no-cache",
            "Connection" => "keep-alive",
>>>>>>> a12f125f4a (.)
=======
            'Accept-Encoding' => 'gzip, deflate',
            'Cache-Control' => 'no-cache',
            'Connection' => 'keep-alive',
>>>>>>> b93ef594b4 (.)
=======

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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];

        $client = new Client([
            'base_uri' => $base_uri,
            'timeout' => 2.0,
            'form_params' => $data,
            'headers' => $headers,
        ]);

        $connection = $client->request('POST', $relative_path);
<<<<<<< HEAD

        return [];
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

        return [];
    }
=======
        
        return [];
=======
>>>>>>> b93ef594b4 (.)

        return [];
    }
<<<<<<< HEAD
    
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        
        return [];

    }
    
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
