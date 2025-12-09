<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
>>>>>>> 9777d1b3 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
>>>>>>> 75179b85 (.)
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;

final class SendTwilioWhatsAppAction implements WhatsAppProviderActionInterface
{
    use QueueableAction;

    private string $accountSid;
    private string $authToken;
    private string $baseUrl = 'https://api.twilio.com/2010-04-01';
    /** @var array<string, mixed> */
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected ?string $defaultSender = null;
=======
    protected null|string $defaultSender = null;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
    protected null|string $defaultSender = null;
=======
    protected ?string $defaultSender = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    protected null|string $defaultSender = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected null|string $defaultSender = null;
>>>>>>> 9777d1b3 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $accountSid = config('services.twilio.account_sid');
        if (!is_string($accountSid)) {
            throw new Exception(
                'put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]',
            );
        }
        $this->accountSid = $accountSid;

        $authToken = config('services.twilio.auth_token');
        if (!is_string($authToken)) {
            throw new Exception(
                'put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]',
            );
        }
        $this->authToken = $authToken;

        // Parametri a livello di root
        $sender = config('whatsapp.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('whatsapp.debug', false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 9777d1b3 (.)
    }

    /**
     * Execute the action.
     *
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
    public function execute(WhatsAppData $whatsAppData): array
    {
        $from = 'whatsapp:' . ($whatsAppData->from ?? $this->defaultSender);
        $to = 'whatsapp:' . $whatsAppData->to;

        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp Twilio', [
                'to' => $to,
                'from' => $from,
                'message_length' => strlen($whatsAppData->body),
            ]);
        }

        $client = new Client([
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken],
        ]);

        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';

        $payload = [
            'To' => $to,
            'From' => $from,
            'Body' => $whatsAppData->body,
        ];

        // Aggiungi media se presente
        if (!empty($whatsAppData->media)) {
            $payload['MediaUrl'] = $whatsAppData->media[0];
        }

        try {
            $response = $client->post($endpoint, [
                'form_params' => $payload,
            ]);

            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array<string, mixed>|null $responseData */
            $responseData = json_decode($responseContent, true) ?: [];

            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

            Log::info('WhatsApp Twilio inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => isset($responseData['sid']) && is_string($responseData['sid'])
                    ? $responseData['sid']
                    : null,
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array<string, mixed>|null $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true) ?: [];

            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;

            Log::warning('Errore invio WhatsApp Twilio', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);

            return [
                'success' => false,
                'error' => isset($responseBody['message']) && is_string($responseBody['message'])
                    ? $responseBody['message']
                    : 'Errore sconosciuto',
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
