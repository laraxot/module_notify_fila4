<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\WhatsApp;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
use function Safe\json_decode;

final class SendVonageWhatsAppAction
{
    use QueueableAction;

    private string $apiKey;
    private string $apiSecret;
    private string $baseUrl = 'https://api.nexmo.com/v1/messages';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $defaultSender;
=======
    protected ?string $defaultSender;
>>>>>>> b19cd40 (.)
=======
    protected null|string $defaultSender;
>>>>>>> 4e2ebfb (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $apiKey = config('services.vonage.api_key');
        if (!is_string($apiKey)) {
            throw new Exception('put [VONAGE_KEY] variable to your .env and config [services.vonage.api_key]');
        }
        $this->apiKey = $apiKey;

        $apiSecret = config('services.vonage.api_secret');
        if (!is_string($apiSecret)) {
            throw new Exception('put [VONAGE_SECRET] variable to your .env and config [services.vonage.api_secret]');
        }
        $this->apiSecret = $apiSecret;

        // Parametri a livello di root
        /** @var string|null $defaultSender */
        $defaultSender = config('whatsapp.from');
        $this->defaultSender = $defaultSender;
        $this->debug = (bool) config('whatsapp.debug', false);
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
>>>>>>> b19cd40 (.)
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Execute the action.
     *
     * @param WhatsAppData $whatsAppData I dati del messaggio WhatsApp
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(WhatsAppData $whatsAppData): array
    {
        $from = $whatsAppData->from ?? $this->defaultSender;
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp Vonage', [
                'to' => $whatsAppData->to,
                'from' => $from,
                'message_length' => strlen($whatsAppData->body),
            ]);
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
<<<<<<< HEAD
<<<<<<< HEAD
            ],
        ]);

=======
            ]
        ]);
        
>>>>>>> b19cd40 (.)
=======
            ],
        ]);

>>>>>>> 4e2ebfb (.)
        $payload = [
            'from' => [
                'type' => 'whatsapp',
                'number' => $from,
            ],
            'to' => [
                'type' => 'whatsapp',
                'number' => $whatsAppData->to,
            ],
            'message' => [
                'content' => [
                    'type' => 'text',
                    'text' => $whatsAppData->body,
                ],
            ],
        ];
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Gestione diversi tipi di messaggi
        if ($whatsAppData->type === 'media' && !empty($whatsAppData->media)) {
            $mediaUrl = $whatsAppData->media[0];
            $mediaType = $this->determineMediaType($mediaUrl);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            $payload['message']['content'] = [
                'type' => $mediaType,
                $mediaType => [
                    'url' => $mediaUrl,
                    'caption' => $whatsAppData->body,
                ],
            ];
        } elseif ($whatsAppData->type === 'template' && !empty($whatsAppData->template)) {
            $payload['message']['content'] = [
                'type' => 'template',
                'template' => $whatsAppData->template,
            ];
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        try {
            $response = $client->post($this->baseUrl, [
                'json' => $payload,
                'auth' => [$this->apiKey, $this->apiSecret],
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            Log::info('WhatsApp Vonage inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
=======
            
            return [
                'success' => ($statusCode >= 200 && $statusCode < 300),
>>>>>>> b19cd40 (.)
=======

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
>>>>>>> 4e2ebfb (.)
                'message_id' => $responseData['message_uuid'] ?? null,
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            Log::warning('Errore invio WhatsApp Vonage', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            return [
                'success' => false,
                'error' => $responseBody['title'] ?? 'Errore sconosciuto',
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
    /**
     * Determina il tipo di media basato sull'URL o sull'estensione del file.
     *
     * @param string $url URL del media
     * @return string Tipo di media (image, video, audio, file)
     */
    private function determineMediaType(string $url): string
    {
        $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));
<<<<<<< HEAD
<<<<<<< HEAD

        return match ($extension) {
=======
        
        return match($extension) {
>>>>>>> b19cd40 (.)
=======

        return match ($extension) {
>>>>>>> 4e2ebfb (.)
            'jpg', 'jpeg', 'png', 'gif', 'webp' => 'image',
            'mp4', 'mov', 'avi', 'webm' => 'video',
            'mp3', 'wav', 'ogg' => 'audio',
            default => 'file',
        };
    }
}
