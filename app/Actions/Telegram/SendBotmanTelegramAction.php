<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\Telegram;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 75179b8 (.)
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 7148d73 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;
use function Safe\json_encode;

final class SendBotmanTelegramAction
{
    use QueueableAction;

<<<<<<< HEAD
<<<<<<< HEAD
    protected bool $debug;

    protected int $timeout;

    protected ?string $parseMode;

    private string $token;

    private string $apiUrl;

    private array $vars = [];
=======
=======
>>>>>>> 7148d73 (.)
    private string $token;
    private string $apiUrl;
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
    protected null|string $parseMode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected null|string $parseMode;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $token = config('services.telegram.token');
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (!is_string($token)) {
>>>>>>> 75179b8 (.)
=======
        if (!is_string($token)) {
>>>>>>> 7148d73 (.)
            throw new Exception('put [TELEGRAM_BOT_TOKEN] variable to your .env and config [services.telegram.token]');
        }
        $this->token = $token;
        /** @var string $apiUrl */
        $apiUrl = config('services.telegram.api_url', 'https://api.telegram.org');
        $this->apiUrl = $apiUrl;

        // Parametri a livello di root
        /** @var string|null $parseMode */
        $parseMode = config('telegram.parse_mode');
        $this->parseMode = $parseMode;
        $this->debug = (bool) config('telegram.debug', false);
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  TelegramData  $telegramData  I dati del messaggio Telegram
     * @return array Risultato dell'operazione
     *
=======
     * @param TelegramData $telegramData I dati del messaggio Telegram
     * @return array Risultato dell'operazione
>>>>>>> 75179b8 (.)
=======
     * @param TelegramData $telegramData I dati del messaggio Telegram
     * @return array Risultato dell'operazione
>>>>>>> 7148d73 (.)
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

        $client = new Client([
            'timeout' => $this->timeout,
            'base_uri' => $this->apiUrl,
        ]);

        // Determina l'endpoint in base al tipo di messaggio
        $endpoint = match ($telegramData->type) {
            'photo' => "/bot{$this->token}/sendPhoto",
            'video' => "/bot{$this->token}/sendVideo",
            'document' => "/bot{$this->token}/sendDocument",
            'audio' => "/bot{$this->token}/sendAudio",
            'animation' => "/bot{$this->token}/sendAnimation",
            default => "/bot{$this->token}/sendMessage",
        };

        // Prepara il payload in base al tipo di messaggio
        $payload = [
            'chat_id' => $telegramData->chatId,
            'disable_notification' => $telegramData->disableNotification,
        ];

        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }

        // Aggiungi parametri specifici per il tipo di messaggio
        if ($telegramData->type === 'text') {
            $payload['text'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
            $payload['disable_web_page_preview'] = $telegramData->disableWebPagePreview;
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
<<<<<<< HEAD
<<<<<<< HEAD
                ! empty($telegramData->media)
=======
                !empty($telegramData->media)
>>>>>>> 75179b8 (.)
=======
                !empty($telegramData->media)
>>>>>>> 7148d73 (.)
        ) {
            $mediaType = $telegramData->type;
            $payload[$mediaType] = $telegramData->media[0];
            $payload['caption'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
        }

        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);

            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var array{ok?: bool, result?: array{message_id?: int}} $responseData */
=======
            /** @var array $responseData */
>>>>>>> 75179b8 (.)
=======
            /** @var array $responseData */
>>>>>>> 7148d73 (.)
            $responseData = json_decode($responseContent, true);

            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            // Extract message_id safely
            $messageId = null;
            if (isset($responseData['result']) && is_array($responseData['result']) && isset($responseData['result']['message_id'])) {
                $messageId = is_int($responseData['result']['message_id']) ? $responseData['result']['message_id'] : (int) $responseData['result']['message_id'];
            }

            return [
                'success' => $responseData['ok'] ?? false,
                'message_id' => $messageId,
=======
=======
=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
            Log::info('Telegram BotMan inviato con successo', [
                'chat_id' => $telegramData->chatId,
                'response_code' => $statusCode,
            ]);

<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            return [
                'success' => $responseData['ok'] ?? false,
                'message_id' => $responseData['result']['message_id'] ?? null,
>>>>>>> 75179b8 (.)
=======
            /** @var array<string, mixed> $result */
            $result = $responseData['result'] ?? [];
            /** @var int|null $messageId */
            $messageId = isset($result['message_id']) && is_int($result['message_id']) ? $result['message_id'] : null;

            return [
                'success' => ($responseData['ok'] ?? false) === true,
                'message_id' => $messageId,
>>>>>>> 7148d73 (.)
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

            Log::warning('Errore invio Telegram BotMan', [
                'chat_id' => $telegramData->chatId,
                'status' => $statusCode,
                'response' => $responseBody,
            ]);

            return [
                'success' => false,
                'error' => $responseBody['description'] ?? 'Errore sconosciuto',
                'error_code' => $responseBody['error_code'] ?? null,
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
