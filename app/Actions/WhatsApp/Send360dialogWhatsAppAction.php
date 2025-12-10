<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Illuminate\Support\Str;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Illuminate\Support\Str;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;


use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Str;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;


use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;


use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;

final class Send360dialogWhatsAppAction
{
    use QueueableAction;

    private string $apiKey;

    private string $baseUrl = 'https://waba.360dialog.io/v1';

    private array $vars = [];

    protected bool $debug;

    private string $baseUrl = 'https://waba.360dialog.io/v1';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;

    private string $apiKey;

    private string $baseUrl = 'https://waba.360dialog.io/v1';
    /** @var array<string, mixed> */
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    private string $apiKey;
    private string $baseUrl = 'https://waba.360dialog.io/v1';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $apiKey = config('services.360dialog.api_key');
        if (!is_string($apiKey)) {
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
        if (!is_string($apiKey)) {
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
        if (! is_string($apiKey)) {
        if (!is_string($apiKey)) {
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
        }
        $this->apiKey = $apiKey;

        // Parametri a livello di root
        $this->debug = (bool) config('whatsapp.debug', false);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(\Modules\Xot\Actions\Cast\SafeIntCastAction::class)->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
    }

    /**
     * Execute the action.
     *
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
     * @return array<string, mixed> Risultato dell'operazione
     * @return array Risultato dell'operazione
     * @return array Risultato dell'operazione
     * @return array Risultato dell'operazione
     * @param  WhatsAppData  $whatsAppData  I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     *
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(WhatsAppData $whatsAppData): array
    {
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp 360dialog', [
                'to' => $whatsAppData->to,
                'message_length' => strlen($whatsAppData->body),
                'type' => $whatsAppData->type,
            ]);
        }

        














        































        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
                'D360-API-KEY' => $this->apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);

        $endpoint = $this->baseUrl . '/messages';
        $endpoint = $this->baseUrl.'/messages';
        $endpoint = $this->baseUrl . '/messages';
        $endpoint = $this->baseUrl.'/messages';
        $endpoint = $this->baseUrl . '/messages';
        $endpoint = $this->baseUrl.'/messages';
        $endpoint = $this->baseUrl . '/messages';

        $payload = [
            'to' => $whatsAppData->to,
        ];

            ]
            ],
        ]);

        $endpoint = $this->baseUrl . '/messages';

        $payload = [
            'to' => $whatsAppData->to,
        ];
        

            ]
        ]);
        
        $endpoint = $this->baseUrl . '/messages';
        
        $payload = [
            'to' => $whatsAppData->to,
        ];
        

        // Gestione diversi tipi di messaggi
        if ($whatsAppData->type === 'text') {
            $payload['type'] = 'text';
            $payload['text'] = [
                'body' => $whatsAppData->body,
            ];
        } elseif ($whatsAppData->type === 'template' && !empty($whatsAppData->template)) {
            $payload['type'] = 'template';
            $payload['template'] = $whatsAppData->template;
        } elseif ($whatsAppData->type === 'media' && !empty($whatsAppData->media)) {
            /** @var string $mediaUrl */
            $mediaUrl = is_string($whatsAppData->media[0]) ? $whatsAppData->media[0] : (string) $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

        } elseif ($whatsAppData->type === 'template' && ! empty($whatsAppData->template)) {
            $payload['type'] = 'template';
            $payload['template'] = $whatsAppData->template;
        } elseif ($whatsAppData->type === 'media' && ! empty($whatsAppData->media)) {
        } elseif ($whatsAppData->type === 'template' && !empty($whatsAppData->template)) {
            $payload['type'] = 'template';
            $payload['template'] = $whatsAppData->template;
        } elseif ($whatsAppData->type === 'media' && !empty($whatsAppData->media)) {
            $mediaUrl = $whatsAppData->media[0];
            $mediaUrl = $whatsAppData->media[0];
            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

            



            
            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

            

            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

            

            

            

            

            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

            



            
            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);

            




            
            


            

            $payload['type'] = $mediaType;
            $payload[$mediaType] = [
                'link' => $mediaUrl,
                'caption' => $whatsAppData->body,
            ];
        }

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);

        

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);
            

        
        try {
            $response = $client->post($endpoint, [
                'json' => $payload
            ]);
            
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array<string, mixed> $responseData */
            $responseData = json_decode($responseContent, true) ?: [];

            
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            /** @var array{messages?: array<int, array{id?: string}>, errors?: array<int, array{message?: string}>} $responseData */
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);

            


            
            
            
            
            
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);

            


            
            
            
            
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

            
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;












            
            










            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;









            



            
            





















            Log::info('WhatsApp 360dialog inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);

            /** @var array<string, mixed>|null $messages */
            $messages = $responseData['messages'] ?? null;
            /** @var array<string, mixed>|null $firstMessage */
            $firstMessage = (is_array($messages) && isset($messages[0]) && is_array($messages[0])) ? $messages[0] : null;
            /** @var string|null $messageId */
            $messageId = (is_array($firstMessage) && isset($firstMessage['id']) && is_string($firstMessage['id']))
                ? $firstMessage['id']
                : null;
            // Extract message_id safely
            $messageId = null;
            if (isset($responseData['messages']) && is_array($responseData['messages']) && isset($responseData['messages'][0]['id'])) {
                $messageId = is_string($responseData['messages'][0]['id']) ? $responseData['messages'][0]['id'] : (string) ($responseData['messages'][0]['id'] ?? '');
            }

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $messageId,

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
                'message_id' => $responseData['messages'][0]['id'] ?? null,

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $responseData['messages'][0]['id'] ?? null,

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
                'message_id' => $responseData['messages'][0]['id'] ?? null,
                'message_id' => $responseData['messages'][0]['id'] ?? null,
            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $responseData['messages'][0]['id'] ?? null,
                'message_id' => $responseData['messages'][0]['id'] ?? null,
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array<string, mixed> $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true) ?: [];

            

            










            

            
            
            
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);

            
            
            
            
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;

            
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;














            
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);

            
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);

















            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;









            



            
            





















            Log::warning('Errore invio WhatsApp 360dialog', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);

            /** @var array<int, array<string, mixed>>|null $errors */
            $errors = $responseBody['errors'] ?? null;
            /** @var array<string, mixed>|null $firstError */
            $firstError = (is_array($errors) && isset($errors[0]) && is_array($errors[0])) ? $errors[0] : null;
            /** @var string $errorMessage */
            $errorMessage = (is_array($firstError) && isset($firstError['message']) && is_string($firstError['message']))
                ? $firstError['message']
                : 'Errore sconosciuto';



            // Extract error message safely
            /** @phpstan-ignore-next-line - WhatsApp API response structure */
            $errorMessage = $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto';

            return [
                'success' => false,
                'error' => $errorMessage,
            



            
            
            return [
                'success' => false,
                'error' => $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto',

            return [
                'success' => false,
                'error' => $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto',

            return [
                'success' => false,
                'error' => $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto',
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }

    











    





















    /**
     * Determina il tipo di media basato sull'URL o sull'estensione del file.
     *
     * @param string $url URL del media
     * @param  string  $url  URL del media
     * @param  string  $url  URL del media
     * @param string $url URL del media

    /**
     * Determina il tipo di media basato sull'URL o sull'estensione del file.
     *
     * @param string $url URL del media
     * @param  string  $url  URL del media
     * @param  string  $url  URL del media
     * @param string $url URL del media
     * @return string Tipo di media (image, video, audio, document)
     */
    private function determineMediaType(string $url): string
    {
        $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));

        return match ($extension) {
        
        return match($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {
        
        return match($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {

        return match ($extension) {
            'jpg', 'jpeg', 'png', 'gif', 'webp' => 'image',
            'mp4', 'mov', 'avi', 'webm' => 'video',
            'mp3', 'wav', 'ogg' => 'audio',
            default => 'document',
        };
    }
}
