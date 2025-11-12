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
>>>>>>> f5f1cb1 (.)
use Modules\Notify\Datas\WhatsAppData;
use Spatie\QueueableAction\QueueableAction;

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
>>>>>>> f5f1cb1 (.)
            throw new Exception(
                'put [FACEBOOK_ACCESS_TOKEN] variable to your .env and config [services.facebook.access_token]',
            );
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
>>>>>>> f5f1cb1 (.)
            throw new Exception(
                'put [FACEBOOK_PHONE_NUMBER_ID] variable to your .env and config [services.facebook.phone_number_id]',
            );
        }
        $this->phoneNumberId = $phoneNumberId;

        // Parametri a livello di root
        $this->debug = (bool) config('whatsapp.debug', false);
        $this->timeout = is_numeric(config('whatsapp.timeout', 30)) ? ((int) config('whatsapp.timeout', 30)) : 30;
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

        $client = new Client([
            'timeout' => $this->timeout,
            'headers' => [
<<<<<<< HEAD
                'Authorization' => 'Bearer '.$this->accessToken,
=======
                'Authorization' => 'Bearer ' . $this->accessToken,
>>>>>>> 99ff506 (.)
                'Content-Type' => 'application/json',
            ],
        ]);

<<<<<<< HEAD
        $endpoint = $this->baseUrl.'/'.$this->phoneNumberId.'/messages';
=======
        $endpoint = $this->baseUrl . '/' . $this->phoneNumberId . '/messages';
>>>>>>> 99ff506 (.)

        $payload = [
            'messaging_product' => 'whatsapp',
            'recipient_type' => 'individual',
            'to' => $whatsAppData->to,
        ];

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

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);

            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);

            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

            Log::info('WhatsApp Facebook inviato con successo', [
                'to' => $whatsAppData->to,
                'response_code' => $statusCode,
            ]);

            $messageId = null;
            if (is_array($responseData) && isset($responseData['messages']) && is_array($responseData['messages']) && isset($responseData['messages'][0]) && is_array($responseData['messages'][0]) && isset($responseData['messages'][0]['id'])) {
                $messageId = $responseData['messages'][0]['id'];
            }

            return [
                'success' => $statusCode >= 200 && $statusCode < 300,
                'message_id' => $messageId,
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

            Log::warning('Errore invio WhatsApp Facebook', [
                'to' => $whatsAppData->to,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);

            $errorMessage = 'Errore sconosciuto';
            if (is_array($responseBody) && isset($responseBody['error']) && is_array($responseBody['error']) && isset($responseBody['error']['message'])) {
                $errorMessage = $responseBody['error']['message'];
            }

            return [
                'success' => false,
                'error' => $errorMessage,
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
