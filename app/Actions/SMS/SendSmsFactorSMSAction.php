<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\SmsFactorData;
use Modules\Notify\Datas\SmsData;

final class SendSmsFactorSMSAction implements SmsActionContract
{
    private SmsFactorData $smsFactorData;

    private ?string $defaultSender = null;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\SmsFactorData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendSmsFactorSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var SmsFactorData */
    private SmsFactorData $smsFactorData;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected null|string $defaultSender = null;

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->smsFactorData = SmsFactorData::make();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->smsFactorData->token) {
=======
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!$this->smsFactorData->token) {
>>>>>>> 75179b8 (.)
=======
        if (!$this->smsFactorData->token) {
>>>>>>> 7148d73 (.)
            throw new Exception('Token SMSFactor non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->debug = (bool) config('sms.debug', false);
>>>>>>> 75179b8 (.)
=======
        $this->debug = (bool) config('sms.debug', false);
>>>>>>> 7148d73 (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @throws Exception In caso di errore durante l'invio
     */
=======
=======
>>>>>>> 7148d73 (.)
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
    public function execute(SmsData $smsData): array
    {
        $headers = $this->smsFactorData->getAuthHeaders();

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
<<<<<<< HEAD
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
=======
>>>>>>> 7148d73 (.)
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        }

        $body = [
            'text' => $smsData->body,
            'sender' => $smsData->from ?? $this->defaultSender,
            'recipients' => [
                [
                    'phone' => $to,
                ],
            ],
            'type' => 'sms',
        ];

        $client = new Client([
            'timeout' => $this->smsFactorData->getTimeout(),
            'headers' => $headers,
        ]);

        try {
<<<<<<< HEAD
<<<<<<< HEAD
            $response = $client->post($this->smsFactorData->getBaseUrl().'/messages', ['json' => $body]);
=======
            $response = $client->post($this->smsFactorData->getBaseUrl() . '/messages', ['json' => $body]);
>>>>>>> 75179b8 (.)
=======
            $response = $client->post($this->smsFactorData->getBaseUrl() . '/messages', ['json' => $body]);
>>>>>>> 7148d73 (.)
            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
<<<<<<< HEAD
<<<<<<< HEAD
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 7148d73 (.)
                $clientException->getCode(),
                $clientException,
            );
        }
    }
}
