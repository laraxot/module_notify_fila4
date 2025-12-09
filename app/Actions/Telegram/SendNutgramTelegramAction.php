<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\Telegram;

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeIntCastAction;
=======
>>>>>>> 75179b85 (.)
=======
use Modules\Notify\Datas\TelegramData;
>>>>>>> 75179b85 (.)
use Spatie\QueueableAction\QueueableAction;

use function Safe\json_decode;
use function Safe\json_encode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======

use Modules\Notify\Datas\TelegramData;
use Spatie\QueueableAction\QueueableAction;
use function Safe\json_encode;
use function Safe\json_decode;
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

final class SendNutgramTelegramAction
{
    use QueueableAction;

    private string $token;
    private string $apiUrl;
<<<<<<< HEAD
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
<<<<<<< HEAD
    protected null|string $parseMode;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    protected null|string $parseMode;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
    protected ?string $parseMode;
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
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
=======
=======
    protected null|string $parseMode;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

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
>>>>>>> 75179b85 (.)
=======
        if (!is_string($token)) {
>>>>>>> 75179b85 (.)
            throw new Exception('put [TELEGRAM_BOT_TOKEN] variable to your .env and config [services.telegram.token]');
        }
        $this->token = $token;
        /** @var string $apiUrl */
        $apiUrl = config('services.telegram.api_url', 'https://api.telegram.org');
        $this->apiUrl = $apiUrl;
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
        // Parametri a livello di root
        /** @var string|null $parseMode */
        $parseMode = config('telegram.parse_mode');
        $this->parseMode = $parseMode;
        $this->debug = (bool) config('telegram.debug', false);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
=======
        $this->timeout = app(SafeIntCastAction::class)->execute(config('telegram.timeout'), 30);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->timeout = app(SafeIntCastAction::class)
            ->execute(config('telegram.timeout'), 30);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }

    /**
     * Execute the action.
     *
     * @param TelegramData $telegramData I dati del messaggio Telegram
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
    public function execute(TelegramData $telegramData): array
    {
        // Log di debug se abilitato
        if ($this->debug) {
            Log::debug('Invio Telegram Nutgram', [
                'chat_id' => $telegramData->chatId,
                'message_length' => strlen($telegramData->text),
                'type' => $telegramData->type,
            ]);
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $client = new Client([
            'timeout' => $this->timeout,
            'base_uri' => $this->apiUrl,
        ]);
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

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
>>>>>>> 207ac35e (.)
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
        // Prepara il payload in base al tipo di messaggio
        $payload = [
            'chat_id' => $telegramData->chatId,
            'disable_notification' => $telegramData->disableNotification,
        ];
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

        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }

        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        
        if ($telegramData->replyToMessageId !== null) {
            $payload['reply_to_message_id'] = $telegramData->replyToMessageId;
        }
        
        if ($telegramData->replyMarkup !== null) {
            $payload['reply_markup'] = json_encode($telegramData->replyMarkup);
        }
        
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
        // Aggiungi parametri specifici per il tipo di messaggio
        if ($telegramData->type === 'text') {
            $payload['text'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
            $payload['disable_web_page_preview'] = $telegramData->disableWebPagePreview;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
<<<<<<< HEAD
            ! empty($telegramData->media)
=======
                !empty($telegramData->media)
>>>>>>> 75179b85 (.)
        ) {
<<<<<<< HEAD
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        } elseif (
            in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation'], strict: true) &&
                !empty($telegramData->media)
        ) {
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
        } elseif (in_array($telegramData->type, ['photo', 'video', 'document', 'audio', 'animation']) && !empty($telegramData->media)) {
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            $mediaType = $telegramData->type;
            $payload[$mediaType] = $telegramData->media[0];
            $payload['caption'] = $telegramData->text;
            $payload['parse_mode'] = $telegramData->parseMode ?? $this->parseMode;
        }
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
        try {
            $response = $client->post($endpoint, [
                'json' => $payload,
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
            $statusCode = $response->getStatusCode();
            $responseContent = $response->getBody()->getContents();
<<<<<<< HEAD
            /** @var array<string, mixed> $responseData */
=======
            /** @var array $responseData */
>>>>>>> 75179b85 (.)
            $responseData = json_decode($responseContent, true);
<<<<<<< HEAD

=======
            
>>>>>>> b19cd40 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

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

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            // Salva i dati della risposta nelle variabili dell'azione
            $this->vars['status_code'] = $statusCode;
            $this->vars['status_txt'] = $responseContent;
            $this->vars['response_data'] = $responseData;
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
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
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
=======

>>>>>>> 75179b85 (.)
=======

=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
            Log::info('Telegram Nutgram inviato con successo', [
                'chat_id' => $telegramData->chatId,
                'response_code' => $statusCode,
            ]);
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            
>>>>>>> b19cd40 (.)
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
                'success' => $responseData['ok'] ?? false,
                'message_id' => $responseData['result']['message_id'] ?? null,
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)

=======
            
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
            Log::info('Telegram Nutgram inviato con successo', [
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
=======
            /** @var array $responseBody */
>>>>>>> 75179b85 (.)
            $responseBody = json_decode($response->getBody()->getContents(), true);
<<<<<<< HEAD
<<<<<<< HEAD

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
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

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
>>>>>>> 207ac35e (.)
            Log::warning('Errore invio Telegram Nutgram', [
                'chat_id' => $telegramData->chatId,
                'status' => $statusCode,
                'response' => $responseBody,
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
