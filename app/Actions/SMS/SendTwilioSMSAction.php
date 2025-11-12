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
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
>>>>>>> 99ff506 (.)
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 99ff506 (.)
=======
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Datas\SMS\TwilioData;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Spatie\QueueableAction\QueueableAction;

final class SendTwilioSMSAction implements SmsActionContract
{
    use QueueableAction;

<<<<<<< HEAD
=======
    /** @var TwilioData */
>>>>>>> 99ff506 (.)
    private TwilioData $twilioData;

    /** @var array<string, mixed> */
    private array $vars = [];

<<<<<<< HEAD
    protected bool $debug;

    protected ?string $defaultSender = null;
=======
    /** @var bool */
    protected bool $debug;

    /** @var string|null */
<<<<<<< HEAD
    protected null|string $defaultSender = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $defaultSender = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $this->twilioData = TwilioData::make();
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (! $this->twilioData->auth_token) {
=======
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        if (!$this->twilioData->account_sid) {
            throw new Exception('Account SID Twilio non configurato in sms.php');
        }

        if (!$this->twilioData->auth_token) {
>>>>>>> 99ff506 (.)
            throw new Exception('Auth Token Twilio non configurato in sms.php');
        }

        // Parametri a livello di root
        $sender = config('sms.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('sms.debug', false);
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param  SmsData  $smsData  I dati del messaggio SMS
     * @return array Risultato dell'operazione
     *
=======
     * @param SmsData $smsData I dati del messaggio SMS
     * @return array Risultato dell'operazione
>>>>>>> 99ff506 (.)
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    public function execute(SmsData $smsData): array
    {
        // Normalizza il numero di telefono
        $to = (string) $smsData->to;
        if (Str::startsWith($to, '00')) {
<<<<<<< HEAD
            $to = '+39'.mb_substr($to, 2);
        }

        if (! Str::startsWith($to, '+')) {
            $to = '+39'.$to;
=======
            $to = '+39' . mb_substr($to, 2);
        }

        if (!Str::startsWith($to, '+')) {
            $to = '+39' . $to;
>>>>>>> 99ff506 (.)
        }

        $from = $smsData->from ?? $this->defaultSender;

        // Twilio richiede l'autenticazione Basic
        $client = new Client([
            'timeout' => $this->twilioData->getTimeout(),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token],
        ]);

        $endpoint =
<<<<<<< HEAD
            $this->twilioData->getBaseUrl().
            '/2010-04-01/Accounts/'.
            $this->twilioData->account_sid.
=======
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
>>>>>>> 99ff506 (.)
            '/Messages.json';
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token],
        ]);

        $endpoint =
            $this->twilioData->getBaseUrl() .
            '/2010-04-01/Accounts/' .
            $this->twilioData->account_sid .
            '/Messages.json';
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

        try {
            $response = $client->post($endpoint, [
                'form_params' => [
                    'To' => $to,
                    'From' => $from,
                    'Body' => $smsData->body,
<<<<<<< HEAD
                ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ],
=======
                ]
>>>>>>> a12f125f4a (.)
=======
                ],
>>>>>>> b93ef594b4 (.)
=======
                ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> 99ff506 (.)
                $clientException->getCode(),
<<<<<<< HEAD
                $clientException,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $clientException,
=======
                $clientException
>>>>>>> a12f125f4a (.)
=======
                $clientException,
>>>>>>> b93ef594b4 (.)
=======
                $clientException
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            );
        }
    }
}
