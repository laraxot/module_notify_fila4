<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\Telegram;

<<<<<<< HEAD
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 75179b85 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> 75179b85 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

use function Safe\json_decode;
use function Safe\json_encode;
=======
use function Safe\json_encode;
use function Safe\json_decode;
>>>>>>> b19cd40 (.)

final class SendBotmanTelegramAction
{
    use QueueableAction;

    private string $token;
    private string $apiUrl;
<<<<<<< HEAD
    /** @var array<string, mixed> */
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    protected ?string $parseMode;
=======
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
<<<<<<< HEAD
    protected null|string $parseMode;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $token = config('services.telegram.token');
        if (!is_string($token)) {
            throw new Exception('put [TELEGRAM_BOT_TOKEN] variable to your .env and config [services.telegram.token]');
        }
        $this->token = $token;
        /** @var string $apiUrl */
        $apiUrl = config('services.telegram.api_url', 'https://api.telegram.org');
        $this->apiUrl = $apiUrl;
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        // Parametri a livello di root
        /** @var string|null $parseMode */
        $parseMode = config('telegram.parse_mode');
        $this->parseMode = $parseMode;
        $this->debug = (bool) config('telegram.debug', false);
<<<<<<< HEAD
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
=======
        $this->timeout = app(SafeIntCastAction::class)->execute(config('telegram.timeout'), 30);
>>>>>>> b19cd40 (.)
    }

    /**
     * Execute the action.
     *
     * @param TelegramData $telegramData I dati del messaggio Telegram
<<<<<<< HEAD
     * @return array<string, mixed> Risultato dell'operazione
=======
     * @return array Risultato dell'operazione
>>>>>>> 75179b85 (.)
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(TelegramData $telegramData): array
    {
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio Telegram BotMan', [
                'chat_id' => $telegramData->chatId,
                'message_length' => strlen($telegramData->text),
                'type' => $telegramData->type,
            ]);
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        $client = new Client([
            'timeout' => $this->timeout,
            'base_uri' => $this->apiUrl,
        ]);
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        // Determina l'endpoint in base al tipo di messaggio
        $endpoint = match ($telegramData->type) {
            'photo' => "/bot{$this->token}/sendPhoto",
            'video' => "/bot{$this->token}/sendVideo",
            'document' => "/bot{$this->token}/sendDocument",
            'audio' => "/bot{$this->token}/sendAudio",
            'animation' => "/bot{$this->token}/sendAnimation",
            default => "/bot{$this->token}/sendMessage",
        };
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        // Prepara il payload in base al tipo di messaggio
        $payload = [
            'chat_id' => $telegramData->chatId,
            'disable_notification' => $telegramData->disableNotification,
        ];
<<<<<<< HEAD

        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }

=======
        
        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }
        
        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }
        
>>>>>>> b19cd40 (.)
        // Aggiungi parametri specifici per il tipo di messaggio
        if ($telegramData->type === 'text') {
            $payload['text'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
            $payload['disable_web_page_preview'] = $telegramData->disableWebPagePreview;
<<<<<<< HEAD
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
<<<<<<< HEAD
            !empty($telegramData->media)
=======
                !empty($telegramData->media)
>>>>>>> 75179b85 (.)
        ) {
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> b19cd40 (.)
            $mediaType = $telegramData->type;
            $payload[$mediaType] = $telegramData->media[0];
            $payload['caption'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
<<<<<<< HEAD
            /** @var array<string, mixed> $responseData */
            $responseData = json_decode($responseContent, true) ?: [];
=======
            /** @var array $responseData */
            $responseData = json_decode($responseContent, true);
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
            Log::info('Telegram BotMan inviato con successo', [
                'chat_id' => $telegramData->chatId,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array<string, mixed> $result */
            $result = $responseData['result'] ?? [];
            /** @var int|null $messageId */
            $messageId = isset($result['message_id']) && is_int($result['message_id']) ? $result['message_id'] : null;

            return [
                'success' => ($responseData['ok'] ?? false) === true,
                'message_id' => $messageId,
=======
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            return [
                'success' => $responseData['ok'] ?? false,
                'message_id' => $responseData['result']['message_id'] ?? null,
>>>>>>> 75179b85 (.)
                'response' => $responseData,
                'vars' => $this->vars,
            ];
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $statusCode = $response->getStatusCode();
<<<<<<< HEAD
            /** @var array<string, mixed> $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true) ?: [];
=======
            /** @var array $responseBody */
            $responseBody = json_decode($response->getBody()->getContents(), true);
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
            // Salva i dati dell'errore nelle variabili dell'azione
            $this->vars['error_code'] = $statusCode;
            $this->vars['error_message'] = $e->getMessage();
            $this->vars['error_response'] = $responseBody;
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
            Log::warning('Errore invio Telegram BotMan', [
                'chat_id' => $telegramData->chatId,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
            return [
                'success' => false,
<<<<<<< HEAD
                'error' => isset($responseBody['description']) && is_string($responseBody['description'])
                    ? $responseBody['description']
                    : 'Errore sconosciuto',
                'error_code' => isset($responseBody['error_code']) && is_int($responseBody['error_code'])
                    ? $responseBody['error_code']
                    : null,
=======
                'error' => $responseBody['description'] ?? 'Errore sconosciuto',
                'error_code' => $responseBody['error_code'] ?? null,
>>>>>>> 75179b85 (.)
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
