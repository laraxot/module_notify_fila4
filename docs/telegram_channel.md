<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
# Implementazione Canale Telegram

## 1. Struttura Base

### 1.1 Data Transfer Objects
```php
<?php

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class TelegramMessageData extends Data
{
    public function __construct(
        public string $chat_id,
        public string $text,
        public ?string $parse_mode = null,
        public ?bool $disable_web_page_preview = null,
        public ?bool $disable_notification = null,
        public ?int $reply_to_message_id = null,
        public ?array $reply_markup = null,
        public ?string $media_url = null,
        public ?string $media_type = null,
        public ?string $caption = null
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            chat_id: $data['chat_id'],
            text: $data['text'],
            parse_mode: $data['parse_mode'] ?? null,
            disable_web_page_preview: $data['disable_web_page_preview'] ?? null,
            disable_notification: $data['disable_notification'] ?? null,
            reply_to_message_id: $data['reply_to_message_id'] ?? null,
            reply_markup: $data['reply_markup'] ?? null,
            media_url: $data['media_url'] ?? null,
            media_type: $data['media_type'] ?? null,
            caption: $data['caption'] ?? null
        );
    }
}
```

### 1.2 Interfaccia
```php
<?php

namespace Modules\Notify\Contracts\Telegram;

use Modules\Notify\Datas\TelegramMessageData;

interface TelegramActionInterface
{
    /**
     * Esegue l'invio del messaggio Telegram
     *
     * @param TelegramMessageData $messageData I dati del messaggio
     * @return array Risultato dell'operazione
     * @throws \Exception In caso di errore durante l'invio
     */
    public function execute(TelegramMessageData $messageData): array;
}
```

## 2. Configurazione

### 2.1 Config File
```php
<?php
// config/notify.php

return [
    'drivers' => [
        'telegram' => [
            'bot' => [
                'token' => env('TELEGRAM_BOT_TOKEN'),
                'username' => env('TELEGRAM_BOT_USERNAME'),
                'endpoint' => env('TELEGRAM_API_ENDPOINT', 'https://api.telegram.org/bot{token}'),
            ],
            'webhook' => [
                'enabled' => env('TELEGRAM_WEBHOOK_ENABLED', false),
                'url' => env('TELEGRAM_WEBHOOK_URL'),
                'secret_token' => env('TELEGRAM_WEBHOOK_SECRET'),
            ],
        ],
    ],

    'default' => env('TELEGRAM_DRIVER', 'bot'),

    'debug' => env('TELEGRAM_DEBUG', false),

    'retry' => [
        'attempts' => env('TELEGRAM_RETRY_ATTEMPTS', 3),
        'delay' => env('TELEGRAM_RETRY_DELAY', 60),
    ],

    'rate_limit' => [
        'enabled' => env('TELEGRAM_RATE_LIMIT_ENABLED', true),
        'max_attempts' => env('TELEGRAM_RATE_LIMIT_MAX_ATTEMPTS', 30),
        'decay_minutes' => env('TELEGRAM_RATE_LIMIT_DECAY_MINUTES', 1),
    ],
];
```

### 2.2 Environment Variables
```env

# Telegram Bot
TELEGRAM_BOT_TOKEN=your_bot_token
TELEGRAM_BOT_USERNAME=your_bot_username
TELEGRAM_API_ENDPOINT=https://api.telegram.org/bot{token}

# Telegram Webhook
TELEGRAM_WEBHOOK_ENABLED=false
TELEGRAM_WEBHOOK_URL=https://your-domain.com/api/telegram/webhook
TELEGRAM_WEBHOOK_SECRET=your_webhook_secret

# Global Telegram configuration
TELEGRAM_DRIVER=bot
TELEGRAM_DEBUG=false
TELEGRAM_RETRY_ATTEMPTS=3
TELEGRAM_RETRY_DELAY=60
TELEGRAM_RATE_LIMIT_ENABLED=true
TELEGRAM_RATE_LIMIT_MAX_ATTEMPTS=30
TELEGRAM_RATE_LIMIT_DECAY_MINUTES=1
```

## 3. Implementazione

### 3.1 Action Base
```php
<?php

namespace Modules\Notify\Actions\Telegram;

use Modules\Notify\Contracts\Telegram\TelegramActionInterface;
use Modules\Notify\Datas\TelegramMessageData;
use Spatie\QueueableAction\QueueableAction;

abstract class BaseTelegramAction implements TelegramActionInterface
{
    use QueueableAction;

    protected string $driver;
    protected array $config;
    protected bool $debug;
    protected int $timeout;

    public function __construct(string $driver = null)
    {
        $this->driver = $driver ?? config('notify.default');
        $this->config = config("notify.drivers.telegram.{$this->driver}");
        $this->debug = (bool) config('notify.debug', false);
        $this->timeout = (int) config('notify.timeout', 30);
    }

    abstract public function execute(TelegramMessageData $messageData): array;
}
```

### 3.2 Provider Specifici
```php
<?php

namespace Modules\Notify\Actions\Telegram;

use Modules\Notify\Datas\TelegramMessageData;

class BotTelegramAction extends BaseTelegramAction
{
    public function execute(TelegramMessageData $messageData): array
    {
        // Implementazione specifica per Bot API
    }
}

class WebhookTelegramAction extends BaseTelegramAction
{
    public function execute(TelegramMessageData $messageData): array
    {
        // Implementazione specifica per Webhook
    }
}
```

### 3.3 Canale di Notifica
```php
<?php

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\Telegram\BotTelegramAction;
use Modules\Notify\Datas\TelegramMessageData;

class TelegramChannel
{
    /**
     * Invia la notifica tramite Telegram.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        if (!method_exists($notification, 'toTelegram')) {
            throw new \Exception('Il metodo toTelegram() non è definito nella notifica.');
        }

        if (!method_exists($notifiable, 'routeNotificationForTelegram')) {
            throw new \Exception('Il metodo routeNotificationForTelegram() non è definito nel notifiable.');
        }

        $message = $notification->toTelegram($notifiable);
        $chatId = $notifiable->routeNotificationForTelegram();

        if (empty($chatId)) {
            throw new \Exception('Chat ID Telegram non trovato per il notifiable.');
        }

        $action = new BotTelegramAction();
        $result = $action->execute(new TelegramMessageData(
            chat_id: $chatId,
            text: $message
        ));

        if (!$result['success']) {
            throw new \Exception('Errore nell\'invio del messaggio Telegram: ' . ($result['error'] ?? 'Errore sconosciuto'));
        }
    }
}
```

### 3.4 Notifica Base
```php
<?php

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Notifications\Channels\TelegramChannel;

class TelegramNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var array
     */
    protected array $options;

    /**
     * Create a new notification instance.
     *
     * @param string $message
     * @param array $options
     */
    public function __construct(string $message, array $options = [])
    {
        $this->message = $message;
        $this->options = $options;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the Telegram representation of the notification.
     *
     * @param mixed $notifiable
     * @return string
     */
    public function toTelegram($notifiable): string
    {
        return $this->message;
    }
}
```

## 4. Utilizzo

### 4.1 Nel Model
```php
<?php

namespace Modules\Patient\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    /**
     * Route notifications for the Telegram channel.
     *
     * @return string
     */
    public function routeNotificationForTelegram(): string
    {
        return $this->telegram_chat_id;
    }

    /**
     * Verifica se l'utente può ricevere Telegram
     *
     * @return bool
     */
    public function canReceiveTelegram(): bool
    {
        return !empty($this->telegram_chat_id) && $this->consent_telegram;
    }
}
```

### 4.2 Invio Notifica
```php
// Direttamente
$user->notify(new TelegramNotification('Il tuo codice OTP è: 123456'));

// Con Action
$action = new BotTelegramAction();
$result = $action->execute(new TelegramMessageData(
    chat_id: $user->telegram_chat_id,
    text: 'Il tuo codice OTP è: 123456'
));

// Con validazione
if ($user->canReceiveTelegram()) {
    $user->notify(new TelegramNotification('Il tuo codice OTP è: 123456'));
}
```

## 5. Best Practices

### 5.1 Validazione
- Validare sempre il chat_id
- Verificare la lunghezza del messaggio
- Controllare il formato del markup
- Validare i parametri dei comandi
- Verificare il consenso dell'utente
- Controllare i limiti di rate

### 5.2 Gestione Errori
- Usare try/catch per gestire le eccezioni
- Loggare gli errori con dettagli
- Implementare retry per fallimenti temporanei
- Gestire i codici di errore specifici
- Implementare circuit breaker
- Monitorare il tasso di errore

### 5.3 Performance
- Utilizzare le code per l'invio
- Implementare rate limiting
- Monitorare l'uso dell'API
- Gestire il batch di invii
- Implementare caching
- Ottimizzare le query

### 5.4 Sicurezza
- Validare l'input degli utenti
- Sanitizzare i messaggi
- Proteggere i token del bot
- Implementare logging sicuro
- Gestire i timeout
- Implementare rate limiting per IP

## 6. Testing

### 6.1 Unit Test
```php
<?php

namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Actions\Telegram\BotTelegramAction;
use Modules\Notify\Datas\TelegramMessageData;
use Illuminate\Support\Facades\Http;

class TelegramTest extends TestCase
{
    public function test_telegram_sent_successfully()
    {
        Http::fake([
            'api.telegram.org/*' => Http::response([
                'ok' => true,
                'result' => [
                    'message_id' => 123,
                    'chat' => ['id' => 456]
                ]
            ], 200)
        ]);

        $action = new BotTelegramAction();
        $result = $action->execute(new TelegramMessageData(
            chat_id: '123456',
            text: 'Test message'
        ));

        $this->assertTrue($result['success']);
        $this->assertEquals(123, $result['message_id']);
    }
}
```

## 7. Collegamenti Utili

- [Telegram Bot API](https://core.telegram.org/bots/api)
- [Telegram Webhook API](https://core.telegram.org/bots/api#setwebhook)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> fdb24863 (rebase 210)
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Queues](https://laravel.com/project_docs/queues)
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [Laravel Logging](https://laravel.com/project_docs/logging)
- [Laravel Cache](https://laravel.com/project_docs/cache) 
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
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queues](https://laravel.com/docs/queues)
- [Laravel Testing](https://laravel.com/docs/testing)
- [Laravel Logging](https://laravel.com/docs/logging)
- [Laravel Cache](https://laravel.com/docs/cache) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Cache](https://laravel.com/docs/cache) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> ee18dd92 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 66453ace (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 2a97406c (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 4f042b88 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 36321fcb (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 712617d3 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> fdb24863 (rebase 210)
