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
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Spatie\QueueableAction\QueueableAction;
use Override;
use Spatie\QueueableAction\QueueableAction;
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    private TwilioData $twilioData;
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
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Override;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    use QueueableAction;

    /** @var TwilioData */
    /** @var TwilioData */
use Override;
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    private TwilioData $twilioData;
    private ?string $defaultSender = null;
    
    /** @var array<string, mixed> */
    private array $vars = [];

final class SendTwilioSMSAction implements SmsActionContract
{
    private TwilioData $twilioData;
    /** @var TwilioData */
    private TwilioData $twilioData;
    /** @var TwilioData */
    private TwilioData $twilioData;
    /** @var TwilioData */
    private TwilioData $twilioData;

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
        $this->twilioData = TwilioData::make();











        

















        if (! $this->twilioData->account_sid) {
        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (! $this->twilioData->auth_token) {
        



        



        



        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (!$this->twilioData->auth_token) {

        if (! $this->twilioData->account_sid) {
        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (! $this->twilioData->auth_token) {



        


        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (!$this->twilioData->auth_token) {
            throw new Exception('Auth Token Twilio non configurato in sms.php');
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
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
            $to = '+39' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
            $to = '+39'.mb_substr($to, 2);
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
            $to = '+39' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Twilio richiede l'autenticazione Basic
        $client = new Client([
            'timeout' => $this->twilioData->getTimeout(),
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token],
        ]);

        $endpoint =
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
            $this->twilioData->getBaseUrl().
            '/2010-04-01/Accounts/'.
            $this->twilioData->account_sid.
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
            '/Messages.json';
            '/Messages.json';
            '/Messages.json';
            '/Messages.json';
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token],
        ]);

        $endpoint =
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
            '/Messages.json';
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token],
        ]);

        $endpoint =
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
            '/Messages.json';

        try {
            $response = $client->post($endpoint, [
                'form_params' => [
                    'To' => $to,
                    'From' => $from,
                    'Body' => $smsData->body,
                ],
                ]
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ]
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
                ],
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
