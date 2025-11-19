<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;

final class SendNexmoSMSAction implements SmsActionContract
{
    private NexmoData $nexmoData;

    private ?string $defaultSender = null;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var NexmoData */
    private NexmoData $nexmoData;
>>>>>>> 75179b8 (.)

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
=======
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected null|string $defaultSender = null;

>>>>>>> 75179b8 (.)
    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->nexmoData = NexmoData::make();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (! $this->nexmoData->secret) {
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
        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (!$this->nexmoData->secret) {
>>>>>>> 75179b8 (.)
            throw new Exception('Secret Nexmo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
<<<<<<< HEAD
=======
        $this->debug = (bool) config('sms.debug', false);
>>>>>>> 75179b8 (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @throws Exception In caso di errore durante l'invio
     */
=======
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
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
    public function execute(SmsData $smsData): array
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 75179b8 (.)
        }

        $from = $smsData->from ?? $this->defaultSender;

        $client = new Client([
            'timeout' => $this->nexmoData->getTimeout(),
            'headers' => $headers,
        ]);

        try {
<<<<<<< HEAD
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
=======
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
>>>>>>> 75179b8 (.)
                'form_params' => [
                    'api_key' => $this->nexmoData->key,
                    'api_secret' => $this->nexmoData->secret,
                    'to' => $to,
                    'from' => $from,
                    'text' => $smsData->body,
                    'type' => 'unicode',
                ],
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
<<<<<<< HEAD
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
=======
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
>>>>>>> 75179b8 (.)
                $clientException->getCode(),
                $clientException,
            );
        }
    }
}
