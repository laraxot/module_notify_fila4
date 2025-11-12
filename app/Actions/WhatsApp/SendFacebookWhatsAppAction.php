<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
=======
use Illuminate\Support\Str;
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
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

=======

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

>>>>>>> b93ef594b4 (.)
=======

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use function Safe\json_decode;

final class SendFacebookWhatsAppAction
{
    use QueueableAction;

    private string $accessToken;
<<<<<<< HEAD

    private string $phoneNumberId;

    private string $baseUrl = 'https://graph.facebook.com/v17.0';

    private array $vars = [];

    protected bool $debug;

=======
    private string $phoneNumberId;
    private string $baseUrl = 'https://graph.facebook.com/v17.0';
    private array $vars = [];
    protected bool $debug;
>>>>>>> 99ff506 (.)
    protected int $timeout;

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $accessToken = config('services.facebook.access_token');
<<<<<<< HEAD
        if (! is_string($accessToken)) {
=======
        if (!is_string($accessToken)) {
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
                'put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]',
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception(
                'put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]',
            );
=======
            throw new Exception('put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception(
                'put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]',
            );
>>>>>>> b93ef594b4 (.)
=======
            throw new Exception('put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }
        $this->accessToken = $accessToken;

        $phoneNumberId = config('services.facebook.phone_number_id');
<<<<<<< HEAD
        if (! is_string($phoneNumberId)) {
=======
        if (!is_string($phoneNumberId)) {
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
                'put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]',
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception(
                'put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]',
            );
=======
            throw new Exception('put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]');
>>>>>>> a12f125f4a (.)
=======
            throw new Exception(
                'put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]',
            );
>>>>>>> b93ef594b4 (.)
=======
            throw new Exception('put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }
        $this->phoneNumberId = $phoneNumberId;

        // Parametri a livello di root
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
    public function execute(WhatsAppData $whatsAppData): array
    {
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp Facebook', [
                'to' => $whatsAppData->to,
                'message_length' => strlen($whatsAppData->body),
                'type' => $whatsAppData->type,
            ]);
        }
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
        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
<<<<<<< HEAD
                'Authorization' => 'Bearer '.$this->accessToken,
=======
                'Authorization' => 'Bearer ' . $this->accessToken,
>>>>>>> 99ff506 (.)
                'Content-Type' => 'application/json',
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            ],
        ]);

<<<<<<< HEAD
        $endpoint = $this->baseUrl.'/'.$this->phoneNumberId.'/messages';
=======
        $endpoint = $this->baseUrl . '/' . $this->phoneNumberId . '/messages';
>>>>>>> 99ff506 (.)

<<<<<<< HEAD
=======
=======
            ]
=======
            ],
>>>>>>> b93ef594b4 (.)
        ]);

        $endpoint = $this->baseUrl . '/' . $this->phoneNumberId . '/messages';
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            ]
        ]);
        
        $endpoint = $this->baseUrl . '/' . $this->phoneNumberId . '/messages';
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $payload = [
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $whatsAppData->to,
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
        // Gestione diversi tipi di messaggi
        if ($whatsAppData->type === 'text') {
            $payload['type'] = 'text';
            $payload['text'] = [
                'preview_url' => false,
                'body' => $whatsAppData->body,
            ];
<<<<<<< HEAD
        } elseif ($whatsAppData->type === 'template' && ! empty($whatsAppData->template)) {
            $payload['type'] = 'template';
            $payload['template'] = $whatsAppData->template;
        } elseif ($whatsAppData->type === 'media' && ! empty($whatsAppData->media)) {
=======
        } elseif ($whatsAppData->type === 'template' && !empty($whatsAppData->template)) {
            $payload['type'] = 'template';
            $payload['template'] = $whatsAppData->template;
        } elseif ($whatsAppData->type === 'media' && !empty($whatsAppData->media)) {
>>>>>>> 99ff506 (.)
            $payload['type'] = 'image'; // o video, document, audio
            $payload['image'] = [
                'link' => $whatsAppData->media[0],
            ];
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        try {
            $response = $client->post($endpoint, [
                'json' => $payload
            ]);
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);
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
            Log::info('WhatsApp Facebook inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
=======
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
>>>>>>> a12f125f4a (.)
=======

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
>>>>>>> b93ef594b4 (.)
=======
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                'message_id' => $responseData['messages'][0]['id'] ?? null,
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);
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
            Log::warning('Errore invio WhatsApp Facebook', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);
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
            return [
                'success' => false,
                'error' => $responseBody['error']['message'] ?? 'Errore sconosciuto',
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
