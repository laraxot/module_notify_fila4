<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\Telegram;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
>>>>>>> 99ff506 (.)
=======
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> 99ff506 (.)
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

use function Safe\json_decode;
use function Safe\json_encode;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

use function Safe\json_decode;
use function Safe\json_encode;
=======
use function Safe\json_encode;
use function Safe\json_decode;
>>>>>>> a12f125f4a (.)
=======

use function Safe\json_decode;
use function Safe\json_encode;
>>>>>>> b93ef594b4 (.)
=======
use function Safe\json_encode;
use function Safe\json_decode;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

final class SendBotmanTelegramAction
{
    use QueueableAction;

    private string $token;
<<<<<<< HEAD

    private string $apiUrl;

    private array $vars = [];

    protected bool $debug;

    protected int $timeout;

    protected ?string $parseMode;
=======
    private string $apiUrl;
    private array $vars = [];
    protected bool $debug;
    protected int $timeout;
<<<<<<< HEAD
    protected null|string $parseMode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    protected null|string $parseMode;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected null|string $parseMode;
=======
    protected ?string $parseMode;
>>>>>>> a12f125f4a (.)
=======
    protected null|string $parseMode;
>>>>>>> b93ef594b4 (.)
=======
    protected ?string $parseMode;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    /**
     * Create a new action instance.
     */
    public function __construct()
    {
        $token = config('services.telegram.token');
<<<<<<< HEAD
        if (! is_string($token)) {
=======
        if (!is_string($token)) {
>>>>>>> 99ff506 (.)
            throw new Exception('put [TELEGRAM_BOT_TOKEN] variable to your .env and config [services.telegram.token]');
        }
        $this->token = $token;
        /** @var string $apiUrl */
        $apiUrl = config('services.telegram.api_url', 'https://api.telegram.org');
        $this->apiUrl = $apiUrl;
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
        // Parametri a livello di root
        /** @var string|null $parseMode */
        $parseMode = config('telegram.parse_mode');
        $this->parseMode = $parseMode;
        $this->debug = (bool) config('telegram.debug', false);
<<<<<<< HEAD
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
=======
        $this->timeout = app(SafeIntCastAction::class)->execute(config('telegram.timeout'), 30);
>>>>>>> a12f125f4a (.)
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
>>>>>>> b93ef594b4 (.)
=======
        $this->timeout = app(\Modules\Xot\Actions\Cast\SafeIntCastAction::class)->execute(config('telegram.timeout'), 30);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Execute the action.
     *
<<<<<<< HEAD
     * @param  TelegramData  $telegramData  I dati del messaggio Telegram
     * @return array Risultato dell'operazione
     *
=======
     * @param TelegramData $telegramData I dati del messaggio Telegram
     * @return array Risultato dell'operazione
>>>>>>> 99ff506 (.)
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
            'base_uri' => $this->apiUrl,
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
        // Prepara il payload in base al tipo di messaggio
        $payload = [
            'chat_id' => $telegramData->chatId,
            'disable_notification' => $telegramData->disableNotification,
        ];
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }
        
        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Aggiungi parametri specifici per il tipo di messaggio
        if ($telegramData->type === 'text') {
            $payload['text'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
            $payload['disable_web_page_preview'] = $telegramData->disableWebPagePreview;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
<<<<<<< HEAD
                ! empty($telegramData->media)
=======
                !empty($telegramData->media)
>>>>>>> 99ff506 (.)
        ) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $mediaType = $telegramData->type;
            $payload[$mediaType] = $telegramData->media[0];
            $payload['caption'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
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
        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
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
            Log::info('Telegram BotMan inviato con successo', [
                'chat_id' => $telegramData->chatId,
                'response_code' => $statusCode,
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
            Log::warning('Errore invio Telegram BotMan', [
                'chat_id' => $telegramData->chatId,
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
                'error' => $responseBody['description'] ?? 'Errore sconosciuto',
                'error_code' => $responseBody['error_code'] ?? null,
                'status_code' => $statusCode,
                'vars' => $this->vars,
            ];
        }
    }
}
