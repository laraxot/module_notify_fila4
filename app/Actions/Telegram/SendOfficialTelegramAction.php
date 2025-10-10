<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\Telegram;

use Modules\Xot\Actions\Cast\SafeIntCastAction;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
use Modules\Notify\Datas\TelegramData;
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;
use function Safe\json_encode;
<<<<<<< HEAD
=======

use Modules\Notify\Datas\TelegramData;
use Spatie\QueueableAction\QueueableAction;
use function Safe\json_encode;
use function Safe\json_decode;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

final class SendOfficialTelegramAction
{
    use QueueableAction;

    private string $token;
    private string $apiUrl;
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $parseMode;
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
=======
    protected null|string $parseMode;
>>>>>>> 4e2ebfb (.)

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

        // Parametri a livello di root
        /** @var string|null $parseMode */
        $parseMode = config('telegram.parse_mode');
        $this->parseMode = $parseMode;
        $this->debug = (bool) config('telegram.debug', false);
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
=======
        $this->timeout = app(SafeIntCastAction::class)->execute(config('telegram.timeout'), 30);
>>>>>>> b19cd40 (.)
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Execute the action.
     *
     * @param TelegramData $telegramData I dati del messaggio Telegram
     * @return array Risultato dell'operazione
     * @throws Exception In caso di errore durante l'invio
     */
    public function execute(TelegramData $telegramData): array
    {
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio Telegram Ufficiale', [
                'chat_id' => $telegramData->chatId,
                'message_length' => strlen($telegramData->text),
                'type' => $telegramData->type,
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
            'base_uri' => $this->apiUrl,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Prepara il payload in base al tipo di messaggio
        $payload = [
            'chat_id' => $telegramData->chatId,
            'disable_notification' => $telegramData->disableNotification,
        ];
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)

        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }

<<<<<<< HEAD
=======
        
        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }
        
        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }
        
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        // Aggiungi parametri specifici per il tipo di messaggio
        if ($telegramData->type === 'text') {
            $payload['text'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
            $payload['disable_web_page_preview'] = $telegramData->disableWebPagePreview;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
                !empty($telegramData->media)
        ) {
<<<<<<< HEAD
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            $mediaType = $telegramData->type;
            $payload[$mediaType] = $telegramData->media[0];
            $payload['caption'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
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
            Log::info('Telegram inviato con successo', [
                'chat_id' => $telegramData->chatId,
                'response_code' => $statusCode,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            return [
                'success' => $responseData['ok'] ?? false,
                'message_id' => $responseData['result']['message_id'] ?? null,
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
            Log::warning('Errore invio Telegram', [
                'chat_id' => $telegramData->chatId,
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
                'error' => $responseBody['description'] ?? 'Errore sconosciuto',
                'error_code' => $responseBody['error_code'] ?? null,
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
