<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

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
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
>>>>>>> 99ff506 (.)
use Illuminate\Support\Str;
use Modules\Notify\Contracts\SMS\SmsActionContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SMS\TwilioData;
use Modules\Notify\Datas\SmsData;
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
<<<<<<< HEAD
    protected null|string $defaultSender = null;
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
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
            'auth' => [$this->twilioData->account_sid, $this->twilioData->auth_token]
        ]);

        $endpoint = $this->twilioData->getBaseUrl() . '/2010-04-01/Accounts/' . $this->twilioData->account_sid . '/Messages.json';
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

        try {
            $response = $client->post($endpoint, [
                'form_params' => [
                    'To' => $to,
                    'From' => $from,
                    'Body' => $smsData->body,
<<<<<<< HEAD
<<<<<<< HEAD
                ],
=======
                ]
>>>>>>> b19cd40 (.)
=======
                ],
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
                $clientException,
=======
                $clientException
>>>>>>> b19cd40 (.)
=======
                $clientException,
>>>>>>> 4e2ebfb (.)
            );
        }
    }
}
