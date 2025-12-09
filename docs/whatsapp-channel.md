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
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
# Implementazione Canale WhatsApp

## 1. Struttura Base

### 1.1 Data Transfer Objects
```php
<?php

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class WhatsAppMessageData extends Data
{
    public function __construct(
        public string $to,
        public string $message,
        public ?string $template = null,
        public ?array $parameters = null,
        public ?string $mediaUrl = null,
        public ?string $mediaType = null
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            to: $data['to'],
            message: $data['message'],
            template: $data['template'] ?? null,
            parameters: $data['parameters'] ?? null,
            mediaUrl: $data['media_url'] ?? null,
            mediaType: $data['media_type'] ?? null
        );
    }
}
```

### 1.2 Interfaccia
```php
<?php

namespace Modules\Notify\Contracts\WhatsApp;

use Modules\Notify\Datas\WhatsAppMessageData;

interface WhatsAppActionInterface
{
    /**
     * Esegue l'invio del messaggio WhatsApp
     *
     * @param WhatsAppMessageData $messageData I dati del messaggio
     * @return array Risultato dell'operazione
     * @throws \Exception In caso di errore durante l'invio
     */
    public function execute(WhatsAppMessageData $messageData): array;
}
```

## 2. Configurazione

### 2.1 Config File
```php
<?php
// config/notify.php

return [
    'drivers' => [
        'whatsapp' => [
            'twilio' => [
                'account_sid' => env('TWILIO_ACCOUNT_SID'),
                'auth_token' => env('TWILIO_AUTH_TOKEN'),
                'from' => env('TWILIO_WHATSAPP_FROM'),
                'endpoint' => env('TWILIO_WHATSAPP_ENDPOINT', 'https://api.twilio.com/2010-04-01/Accounts/{AccountSid}/Messages.json'),
            ],
            'vonage' => [
                'api_key' => env('VONAGE_API_KEY'),
                'api_secret' => env('VONAGE_API_SECRET'),
                'from' => env('VONAGE_WHATSAPP_FROM'),
                'endpoint' => env('VONAGE_WHATSAPP_ENDPOINT', 'https://api.nexmo.com/v1/messages'),
            ],
            'meta' => [
                'access_token' => env('META_WHATSAPP_ACCESS_TOKEN'),
                'phone_number_id' => env('META_WHATSAPP_PHONE_NUMBER_ID'),
                'business_account_id' => env('META_WHATSAPP_BUSINESS_ACCOUNT_ID'),
                'endpoint' => env('META_WHATSAPP_ENDPOINT', 'https://graph.facebook.com/v17.0/{Phone-Number-ID}/messages'),
            ],
        ],
    ],

    'default' => env('WHATSAPP_DRIVER', 'twilio'),

    'debug' => env('WHATSAPP_DEBUG', false),

    'retry' => [
        'attempts' => env('WHATSAPP_RETRY_ATTEMPTS', 3),
        'delay' => env('WHATSAPP_RETRY_DELAY', 60),
    ],

    'rate_limit' => [
        'enabled' => env('WHATSAPP_RATE_LIMIT_ENABLED', true),
        'max_attempts' => env('WHATSAPP_RATE_LIMIT_MAX_ATTEMPTS', 60),
        'decay_minutes' => env('WHATSAPP_RATE_LIMIT_DECAY_MINUTES', 1),
    ],
];
```

### 2.2 Environment Variables
```env

# Twilio WhatsApp
TWILIO_ACCOUNT_SID=your_account_sid
TWILIO_AUTH_TOKEN=your_auth_token
TWILIO_WHATSAPP_FROM=whatsapp:+14155238886

# Vonage WhatsApp
VONAGE_API_KEY=your_api_key
VONAGE_API_SECRET=your_api_secret
VONAGE_WHATSAPP_FROM=whatsapp:+14155238886

# Meta WhatsApp
META_WHATSAPP_ACCESS_TOKEN=your_access_token
META_WHATSAPP_PHONE_NUMBER_ID=your_phone_number_id
META_WHATSAPP_BUSINESS_ACCOUNT_ID=your_business_account_id

# Global WhatsApp configuration
WHATSAPP_DRIVER=twilio
WHATSAPP_DEBUG=false
WHATSAPP_RETRY_ATTEMPTS=3
WHATSAPP_RETRY_DELAY=60
WHATSAPP_RATE_LIMIT_ENABLED=true
WHATSAPP_RATE_LIMIT_MAX_ATTEMPTS=60
WHATSAPP_RATE_LIMIT_DECAY_MINUTES=1
```

## 3. Implementazione

### 3.1 Action Base
```php
<?php

namespace Modules\Notify\Actions\WhatsApp;

use Modules\Notify\Contracts\WhatsApp\WhatsAppActionInterface;
use Modules\Notify\Datas\WhatsAppMessageData;
use Spatie\QueueableAction\QueueableAction;

abstract class BaseWhatsAppAction implements WhatsAppActionInterface
{
    use QueueableAction;

    protected string $driver;
    protected array $config;
    protected bool $debug;
    protected int $timeout;

    public function __construct(string $driver = null)
    {
        $this->driver = $driver ?? config('notify.default');
        $this->config = config("notify.drivers.whatsapp.{$this->driver}");
        $this->debug = (bool) config('notify.debug', false);
        $this->timeout = (int) config('notify.timeout', 30);
    }

    abstract public function execute(WhatsAppMessageData $messageData): array;
}
```

### 3.2 Provider Specifici
```php
<?php

namespace Modules\Notify\Actions\WhatsApp;

use Modules\Notify\Datas\WhatsAppMessageData;

class TwilioWhatsAppAction extends BaseWhatsAppAction
{
    public function execute(WhatsAppMessageData $messageData): array
    {
        // Implementazione specifica per Twilio
    }
}

class VonageWhatsAppAction extends BaseWhatsAppAction
{
    public function execute(WhatsAppMessageData $messageData): array
    {
        // Implementazione specifica per Vonage
    }
}

class MetaWhatsAppAction extends BaseWhatsAppAction
{
    public function execute(WhatsAppMessageData $messageData): array
    {
        // Implementazione specifica per Meta
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
     * Route notifications for the WhatsApp channel.
     *
     * @return string
     */
    public function routeNotificationForWhatsApp(): string
    {
        return $this->whatsapp_number;
    }

    /**
     * Verifica se l'utente può ricevere WhatsApp
     *
     * @return bool
     */
    public function canReceiveWhatsApp(): bool
    {
        return !empty($this->whatsapp_number) && $this->consent_whatsapp;
    }
}
```

### 4.2 Invio Notifica
```php
// Direttamente
$user->notify(new WhatsAppNotification('Il tuo codice OTP è: 123456'));

// Con Action
$action = new TwilioWhatsAppAction();
$result = $action->execute(new WhatsAppMessageData(
    to: $user->whatsapp_number,
    message: 'Il tuo codice OTP è: 123456'
));

// Con validazione
if ($user->canReceiveWhatsApp()) {
    $user->notify(new WhatsAppNotification('Il tuo codice OTP è: 123456'));
}
```

## 5. Best Practices

### 5.1 Validazione
- Validare sempre il numero WhatsApp
- Verificare la lunghezza del messaggio
- Controllare il formato dei template
- Validare i parametri dei template
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
- Proteggere le chiavi API
- Implementare logging sicuro
- Gestire i timeout
- Implementare rate limiting per IP

## 6. Testing

### 6.1 Unit Test
```php
<?php

namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Actions\WhatsApp\TwilioWhatsAppAction;
use Modules\Notify\Datas\WhatsAppMessageData;
use Illuminate\Support\Facades\Http;

class WhatsAppTest extends TestCase
{
    public function test_whatsapp_sent_successfully()
    {
        Http::fake([
            'api.twilio.com/*' => Http::response([
                'status' => 'sent',
                'sid' => 'SM123456'
            ], 200)
        ]);

        $action = new TwilioWhatsAppAction();
        $result = $action->execute(new WhatsAppMessageData(
            to: '+393331234567',
            message: 'Test message'
        ));

        $this->assertTrue($result['success']);
        $this->assertEquals('SM123456', $result['message_id']);
    }
}
```

## 7. Collegamenti Utili

- [Twilio WhatsApp API](https://www.twilio.com/whatsapp)
- [Vonage WhatsApp API](https://developer.vonage.com/messaging/whatsapp/overview)
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
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> 909e45af (.)
- [Meta WhatsApp Business API](https://developers.facebook.com/project_docs/whatsapp/cloud-api)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
- [Meta WhatsApp Business API](https://developers.facebook.com/docs/whatsapp/cloud-api)
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
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> fbed41ac (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- [Laravel Cache](https://laravel.com/docs/cache) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
