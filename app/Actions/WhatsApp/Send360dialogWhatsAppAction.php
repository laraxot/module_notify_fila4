<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 75179b85 (.)
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 3f537838 (.)
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 75179b85 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\WhatsAppData;
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
use Illuminate\Support\Str;
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 75179b85 (.)
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
=======

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
use Illuminate\Support\Str;
<<<<<<< HEAD
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======

use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
use function Safe\json_decode;

final class Send360dialogWhatsAppAction
{
    use QueueableAction;

    private string $apiKey;
    private string $baseUrl = 'https://waba.360dialog.io/v1';
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var array<string, mixed> */
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
=======
            throw new Exception('put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception(
                'put [360DIALOG_API_KEY] variable to your .env and config [services.360dialog.api_key]',
            );
>>>>>>> 9777d1b3 (.)
        }
        $this->apiKey = $apiKey;

        // Parametri a livello di root
        $this->debug = (bool) config('whatsapp.debug', false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
=======
        $this->timeout = app(SafeIntCastAction::class)->execute(config('whatsapp.timeout'), 30);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('whatsapp.timeout'), 30);
>>>>>>> 9777d1b3 (.)
    }

    /**
     * Execute the action.
     *
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, mixed> Risultato dell'operazione
=======
     * @return array Risultato dell'operazione
>>>>>>> 75179b85 (.)
=======
     * @return array Risultato dell'operazione
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
                'D360-API-KEY' => $this->apiKey,
                'Content-Type' => 'application/json',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            ],
        ]);

        $endpoint = $this->baseUrl . '/messages';

        $payload = [
            'to' => $whatsAppData->to,
        ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            ]
        ]);
        
        $endpoint = $this->baseUrl . '/messages';
        
        $payload = [
            'to' => $whatsAppData->to,
        ];
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var string $mediaUrl */
            $mediaUrl = is_string($whatsAppData->media[0]) ? $whatsAppData->media[0] : (string) $whatsAppData->media[0];
=======
            $mediaUrl = $whatsAppData->media[0];
>>>>>>> 75179b85 (.)
            $mediaType = $this->determineMediaType($mediaUrl);

<<<<<<< HEAD
=======
            
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            $payload['type'] = $mediaType;
            $payload[$mediaType] = [
                'link' => $mediaUrl,
                'caption' => $whatsAppData->body,
            ];
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        
        try {
            $response = $client->post($endpoint, [
                'json' => $payload
            ]);
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
<<<<<<< HEAD
            /** @var array<string, mixed> $responseData */
            $responseData = json_decode($responseContent, true) ?: [];
=======
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

<<<<<<< HEAD
=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            Log::info('WhatsApp 360dialog inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
            /** @var array<string, mixed>|null $messages */
            $messages = $responseData['messages'] ?? null;
            /** @var array<string, mixed>|null $firstMessage */
            $firstMessage = (is_array($messages) && isset($messages[0]) && is_array($messages[0])) ? $messages[0] : null;
            /** @var string|null $messageId */
            $messageId = (is_array($firstMessage) && isset($firstMessage['id']) && is_string($firstMessage['id']))
                ? $firstMessage['id']
                : null;

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $messageId,
=======
            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
=======
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
>>>>>>> b19cd40 (.)
                'message_id' => $responseData['messages'][0]['id'] ?? null,
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $responseData['messages'][0]['id'] ?? null,
>>>>>>> 75179b85 (.)
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array<string, mixed> $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true) ?: [];
=======
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
=======
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
=======

>>>>>>> 9777d1b3 (.)
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;

<<<<<<< HEAD
=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            Log::warning('Errore invio WhatsApp 360dialog', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array<int, array<string, mixed>>|null $errors */
            $errors = $responseBody['errors'] ?? null;
            /** @var array<string, mixed>|null $firstError */
            $firstError = (is_array($errors) && isset($errors[0]) && is_array($errors[0])) ? $errors[0] : null;
            /** @var string $errorMessage */
            $errorMessage = (is_array($firstError) && isset($firstError['message']) && is_string($firstError['message']))
                ? $firstError['message']
                : 'Errore sconosciuto';

            return [
                'success' => false,
                'error' => $errorMessage,
=======
=======
=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
            return [
                'success' => false,
                'error' => $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto',
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

            return [
                'success' => false,
                'error' => $responseBody['errors'][0]['message'] ?? 'Errore sconosciuto',
>>>>>>> 75179b85 (.)
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
    /**
     * Determina il tipo di media basato sull'URL o sull'estensione del file.
     *
     * @param string $url URL del media
     * @return string Tipo di media (image, video, audio, document)
     */
    private function determineMediaType(string $url): string
    {
        $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

        return match ($extension) {
=======
        
        return match($extension) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

        return match ($extension) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

        return match ($extension) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

        return match ($extension) {
>>>>>>> 9777d1b3 (.)
            'jpg', 'jpeg', 'png', 'gif', 'webp' => 'image',
            'mp4', 'mov', 'avi', 'webm' => 'video',
            'mp3', 'wav', 'ogg' => 'audio',
            default => 'document',
        };
    }
}
