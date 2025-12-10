<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Override;
use Override;
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Spatie\QueueableAction\QueueableAction;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Spatie\QueueableAction\QueueableAction;
use Modules\Notify\Contracts\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    private NexmoData $nexmoData;
    private ?string $defaultSender = null;
    
    /** @var array<string, mixed> */
    private array $vars = [];

final class SendNexmoSMSAction implements SmsActionContract
{
    private NexmoData $nexmoData;
    private ?string $defaultSender = null;
    
    /** @var array<string, mixed> */
    private array $vars = [];
use Override;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SMS\NexmoData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendNexmoSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var NexmoData */
    /** @var NexmoData */
    private NexmoData $nexmoData;
    /** @var NexmoData */
    private NexmoData $nexmoData;
    /** @var NexmoData */
    private NexmoData $nexmoData;
    /** @var NexmoData */
    private NexmoData $nexmoData;

    /** @var array<string, mixed> */
    private array $vars = [];

    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    /** @var bool */
    protected bool $debug;
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;

    /** @var string|null */
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected bool $debug;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;

    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;

    /** @var string|null */
    protected null|string $defaultSender = null;

    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;
    protected ?string $defaultSender = null;
    protected null|string $defaultSender = null;




    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->nexmoData = NexmoData::make();











        

















        if (! $this->nexmoData->key) {
        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (! $this->nexmoData->secret) {
        



        



        



        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (!$this->nexmoData->secret) {

        if (! $this->nexmoData->key) {
        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (! $this->nexmoData->secret) {



        


        if (!$this->nexmoData->key) {
            throw new Exception('Key Nexmo non configurata in sms.php');
        }

        if (!$this->nexmoData->secret) {
            throw new Exception('Secret Nexmo non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
        $this->debug = (bool) config('sms.debug', false);
        $this->debug = (bool) config('sms.debug', false);
    }

    /**
     * Execute the action.
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    #[Override]
    #[Override]
    public function execute(SmsData $smsData): array
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
            $to = $to !== '' ? ('+'.substr($to, 2)) : $to;
            $to = $to !== '' ? '+'.substr($to, 2) : $to;
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
            $to = $to !== '' ? ('+' . substr($to, 2)) : $to;
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        $client = new Client([
            'timeout' => $this->nexmoData->getTimeout(),
            'headers' => $headers,
            'headers' => $headers
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
            'headers' => $headers,
        ]);

        try {
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
            'headers' => $headers,
        ]);

        try {
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl().'/sms/json', [
            $response = $client->post($this->nexmoData->getBaseUrl() . '/sms/json', [
                'form_params' => [
                    'api_key' => $this->nexmoData->key,
                    'api_secret' => $this->nexmoData->secret,
                    'to' => $to,
                    'from' => $from,
                    'text' => $smsData->body,
                    'type' => 'unicode',
                ],
                    'type' => 'unicode'
                ]
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode'
                ]
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
                    'type' => 'unicode',
                ],
            ]);

            $this->vars['status_code'] = $response->getStatusCode();
            $this->vars['status_txt'] = $response->getBody()->getContents();

            return $this->vars;
        } catch (ClientException $clientException) {
            throw new Exception(
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getMessage().'['.__LINE__.']['.class_basename($this).']',
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
                $clientException,
                $clientException
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException->getMessage() . '[' . __LINE__ . '][' . class_basename($this) . ']',
                $clientException->getCode(),
                $clientException,
                $clientException
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException
                $clientException
                $clientException,
                $clientException,
                $clientException
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
                $clientException,
            );
        }
    }
}
