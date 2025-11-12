<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 99ff506 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
use Override;
>>>>>>> e11621f (.)
=======
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
>>>>>>> f813254 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;
use Modules\Notify\Datas\WhatsAppData;
use Override;
=======
use Illuminate\Support\Str;
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 99ff506 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

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
use function Safe\json_decode;

final class SendTwilioWhatsAppAction implements WhatsAppProviderActionInterface
{
    use QueueableAction;

    private string $accountSid;
<<<<<<< HEAD

    private string $authToken;

    private string $baseUrl = 'https://api.twilio.com/2010-04-01';

    /** @var array<string, mixed> */
    private array $vars = [];

    protected bool $debug;

    protected int $timeout;

    protected ?string $defaultSender = null;
=======
    private string $authToken;
    private string $baseUrl = 'https://api.twilio.com/2010-04-01';
    /** @var array<string, mixed> */
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
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
        $accountSid = config('services.twilio.account_sid');
<<<<<<< HEAD
        if (! is_string($accountSid)) {
=======
        if (!is_string($accountSid)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
<<<<<<< HEAD
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
            throw new Exception(
                'put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]',
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception(
                'put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]',
            );
=======
            throw new Exception('put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception(
                'put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]',
            );
>>>>>>> b93ef594b4 (.)
=======
            throw new Exception('put [TWILIO_ACCOUNT_SID] variable to your .env and config [services.twilio.account_sid]');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }
        $this->accountSid = $accountSid;

        $authToken = config('services.twilio.auth_token');
<<<<<<< HEAD
        if (! is_string($authToken)) {
=======
        if (!is_string($authToken)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
<<<<<<< HEAD
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
            throw new Exception(
                'put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]',
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception(
                'put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]',
            );
=======
            throw new Exception('put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception(
                'put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]',
            );
>>>>>>> b93ef594b4 (.)
=======
            throw new Exception('put [TWILIO_AUTH_TOKEN] variable to your .env and config [services.twilio.auth_token]');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }
        $this->authToken = $authToken;

        // Parametri a livello di root
        $sender = config('whatsapp.from');
        $this->defaultSender = is_string($sender) ? $sender : null;
        $this->debug = (bool) config('whatsapp.debug', false);
<<<<<<< HEAD
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
>>>>>>> a12f125f4a (.)
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> b93ef594b4 (.)
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param  WhatsAppData  $whatsAppData  I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     *
=======
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
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
    public function execute(WhatsAppData $whatsAppData): array
    {
<<<<<<< HEAD
        $from = 'whatsapp:'.($whatsAppData->from ?? $this->defaultSender);
        $to = 'whatsapp:'.$whatsAppData->to;
=======
        $from = 'whatsapp:' . ($whatsAppData->from ?? $this->defaultSender);
        $to = 'whatsapp:' . $whatsAppData->to;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
<<<<<<< HEAD
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)

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
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp Twilio', [
                'to' => $to,
                'from' => $from,
                'message_length' => strlen($whatsAppData->body),
            ]);
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        $client = new Client([
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken],
        ]);

<<<<<<< HEAD
        $endpoint = $this->baseUrl.'/Accounts/'.$this->accountSid.'/Messages.json';
=======
        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';
>>>>>>> 99ff506 (.)

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        $client = new Client([
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken],
        ]);

        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        $client = new Client([
            'timeout' => $this->timeout,
            'auth' => [$this->accountSid, $this->authToken]
        ]);
        
        $endpoint = $this->baseUrl . '/Accounts/' . $this->accountSid . '/Messages.json';
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $payload = [
            'To' => $to,
            'From' => $from,
            'Body' => $whatsAppData->body,
        ];
<<<<<<< HEAD

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
        // Aggiungi media se presente
<<<<<<< HEAD
        if (! empty($whatsAppData->media)) {
=======
        if (!empty($whatsAppData->media)) {
>>>>>>> 99ff506 (.)
            $payload['MediaUrl'] = $whatsAppData->media[0];
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        try {
            $response = $client->post($endpoint, [
                'form_params' => $payload,
            ]);

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        try {
            $response = $client->post($endpoint, [
                'form_params' => $payload,
            ]);
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        try {
            $response = $client->post($endpoint, [
                'form_params' => $payload
            ]);
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array<string, mixed>|null $responseData */
            $responseData = json_decode($responseContent, true) ?: [];
<<<<<<< HEAD

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
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
<<<<<<< HEAD

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
            Log::info('WhatsApp Twilio inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => isset($responseData['sid']) && is_string($responseData['sid'])
                    ? $responseData['sid']
                    : null,
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
                'message_id' => isset($responseData['sid']) && is_string($responseData['sid']) ? $responseData['sid'] : null,
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => isset($responseData['sid']) && is_string($responseData['sid'])
                    ? $responseData['sid']
                    : null,
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array<string, mixed>|null $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true) ?: [];
<<<<<<< HEAD

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
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;
<<<<<<< HEAD

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
            Log::warning('Errore invio WhatsApp Twilio', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            return [
                'success' => false,
                'error' => isset($responseBody['message']) && is_string($responseBody['message'])
                    ? $responseBody['message']
                    : 'Errore sconosciuto',
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            return [
                'success' => false,
                'error' => isset($responseBody['message']) && is_string($responseBody['message']) ? $responseBody['message'] : 'Errore sconosciuto',
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            return [
                'success' => false,
                'error' => isset($responseBody['message']) && is_string($responseBody['message'])
                    ? $responseBody['message']
                    : 'Errore sconosciuto',
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
