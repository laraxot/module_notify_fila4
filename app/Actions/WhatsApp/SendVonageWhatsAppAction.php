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
>>>>>>> 75179b8 (.)
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;

final class SendVonageWhatsAppAction
{
    use QueueableAction;

<<<<<<< HEAD
    protected bool $debug;

    protected int $timeout;

    protected ?string $defaultSender;

    private string $apiKey;

    private string $apiSecret;

    private string $baseUrl = 'https://api.nexmo.com/v1/messages';

    private array $vars = [];
=======
    private string $apiKey;
    private string $apiSecret;
    private string $baseUrl = 'https://api.nexmo.com/v1/messages';
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    protected null|string $defaultSender;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
    protected ?string $defaultSender;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected null|string $defaultSender;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $apiKey = config('services.vonage.api_key');
<<<<<<< HEAD
        if (! is_string($apiKey)) {
=======
        if (!is_string($apiKey)) {
>>>>>>> 75179b8 (.)
            throw new Exception('put [VONAGE_KEY] variable to your .env and config [services.vonage.api_key]');
        }
        $this->apiKey = $apiKey;

        $apiSecret = config('services.vonage.api_secret');
<<<<<<< HEAD
        if (! is_string($apiSecret)) {
=======
        if (!is_string($apiSecret)) {
>>>>>>> 75179b8 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? (int) config('whatsapp.timeout', 30) : 30;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
>>>>>>> 9777d1b (.)
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
>>>>>>> 75179b8 (.)
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(WhatsAppData $whatsAppData): array
    {
        $from = $whatsAppData->from ?? $this->defaultSender;

        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio WhatsApp Vonage', [
                'to' => $whatsAppData->to,
                'from' => $from,
                'message_length' => strlen($whatsAppData->body),
            ]);
        }

        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
        ]);

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

        // Gestione diversi tipi di messaggi
<<<<<<< HEAD
        if ($whatsAppData->type === 'media' && ! empty($whatsAppData->media)) {
            $mediaUrl = is_string($whatsAppData->media[0] ?? null) ? $whatsAppData->media[0] : '';
=======
        if ($whatsAppData->type === 'media' && !empty($whatsAppData->media)) {
            $mediaUrl = $whatsAppData->media[0];
>>>>>>> 75179b8 (.)
            $mediaType = $this->determineMediaType($mediaUrl);

            $payload['message']['content'] = [
                'type' => $mediaType,
                $mediaType => [
                    'url' => $mediaUrl,
                    'caption' => $whatsAppData->body,
                ],
            ];
<<<<<<< HEAD
        } elseif ($whatsAppData->type === 'template' && ! empty($whatsAppData->template)) {
=======
        } elseif ($whatsAppData->type === 'template' && !empty($whatsAppData->template)) {
>>>>>>> 75179b8 (.)
            $payload['message']['content'] = [
                'type' => 'template',
                'template' => $whatsAppData->template,
            ];
        }

        try {
            $response = $client->post($this->baseUrl, [
                'json' => $payload,
                'auth' => [$this->apiKey, $this->apiSecret],
            ]);

            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);

            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

            Log::info('WhatsApp Vonage inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $responseData['message_uuid'] ?? null,
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);

            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;

            Log::warning('Errore invio WhatsApp Vonage', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);

            return [
                'success' => false,
                'error' => $responseBody['title'] ?? 'Errore sconosciuto',
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }

    /**
     * Determina il tipo di media basato sull'URL o sull'estensione del file.
     *
<<<<<<< HEAD
     * @param  string  $url  URL del media
=======
     * @param string $url URL del media
>>>>>>> 75179b8 (.)
     * @return string Tipo di media (image, video, audio, file)
     */
    private function determineMediaType(string $url): string
    {
        $extension = strtolower(pathinfo($url, PATHINFO_EXTENSION));

        return match ($extension) {
            'jpg', 'jpeg', 'png', 'gif', 'webp' => 'image',
            'mp4', 'mov', 'avi', 'webm' => 'video',
            'mp3', 'wav', 'ogg' => 'audio',
            default => 'file',
        };
    }
}
