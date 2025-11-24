<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Http;
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
 * @see https://agiletelecom.com/docs/protocollo-http-post-e-get/
 */
class SendAgiletelecomSMSv2Action implements SmsActionContract
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
        $agile = AgiletelecomData::make();

        $url = 'https://secure.agiletelecom.com/services/sms/send';
        $phone = app(NormalizePhoneNumberAction::class)->execute($data->to);

        $payload = [
<<<<<<< HEAD
<<<<<<< HEAD
            // 'globalId' => $data->reference ?? uniqid('sms_', true),
            // 'maxIdLen' => 64,
            // 'enableConcatenated' => true,
            // 'enableUnicode' => true,
            // 'enableDelivery' => $config['enable_delivery'] ?? true,
            // 'simulation' => app()->environment('local', 'testing'),
            'messages' => [
                [
                    'destinations' => [$phone],
                    // 'ids' => [$data->reference ?? uniqid('msg_', true)],
                    // 'sender' => $config['sender'],
                    'sender' => $agile->sender,
                    'body' => $data->body,
                    // 'hexBody' => false,
=======
=======
>>>>>>> 7148d73 (.)
            //'globalId' => $data->reference ?? uniqid('sms_', true),
            //'maxIdLen' => 64,
            //'enableConcatenated' => true,
            //'enableUnicode' => true,
            //'enableDelivery' => $config['enable_delivery'] ?? true,
            //'simulation' => app()->environment('local', 'testing'),
            'messages' => [
                [
                    'destinations' => [$phone],
                    //'ids' => [$data->reference ?? uniqid('msg_', true)],
                    //'sender' => $config['sender'],
                    'sender' => $agile->sender,
                    'body' => $data->body,
                    //'hexBody' => false,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
                ],
            ],
        ];

        // "{"globalId":"5a56f05b-a48c-41db-8fc2-063b53368e89","processedMessages":1,"processedSmsParts":1,"credit":9530.73}

        $response = Http::withHeaders($agile->getAuthHeaders())->timeout($agile->timeout)->post($url, $payload);

<<<<<<< HEAD
<<<<<<< HEAD
        // dddx($response->body());
=======
        //dddx($response->body());
>>>>>>> 75179b8 (.)
=======
        //dddx($response->body());
>>>>>>> 7148d73 (.)

        return [];
    }
}
