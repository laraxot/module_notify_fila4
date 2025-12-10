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
# Implementazione Canale Netfun

## 1. Struttura Base

### 1.1 Data Transfer Objects
```php
<?php

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
    public function __construct(
        public string $to,
        public string $text,
        public string $from
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            to: $data['to'],
            text: $data['text'],
            from: $data['from']
        );
    }
}

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
        public ?string $message_id = null,
        public ?string $error = null
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            status: $data['status'],
            message_id: $data['message_id'] ?? null,
            error: $data['error'] ?? null
        );
    }
}

class NetfunSMSMessage extends Data
{
    public function __construct(
        public string $to,
        public string $text,
        public string $from,
        public ?string $reference = null,
        public ?string $scheduled_date = null
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            to: $data['to'],
            text: $data['text'],
            from: $data['from'],
            reference: $data['reference'] ?? null,
            scheduled_date: $data['scheduled_date'] ?? null
        );
    }
}
```

### 1.2 Canale Netfun
```php
<?php

namespace Modules\Notify\Notifications\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SendNetfunSmsAction;
use Illuminate\Support\Facades\Log;

class NetfunChannel
{
    /**
     * Invia la notifica tramite Netfun
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     * @throws \Exception
     */
    public function send($notifiable, Notification $notification)
    {
        try {
            $message = $notification->toNetfun($notifiable);
            
            // Validazione base
            if (empty($notifiable->phone_number)) {
                throw new \Exception('Numero di telefono mancante per il destinatario');
            }

            if (empty($message->content)) {
                throw new \Exception('Contenuto del messaggio mancante');
            }

            // Verifica formato numero
            if (!$this->isValidPhoneNumber($notifiable->phone_number)) {
                throw new \Exception('Formato numero di telefono non valido');
            }

            // Verifica lunghezza messaggio
            if (strlen($message->content) > 160) {
                throw new \Exception('Messaggio troppo lungo (max 160 caratteri)');
            }

            // Verifica sender
            $sender = $message->sender ?? config('notify.from.number');
            if (strlen($sender) > 11) {
                throw new \Exception('Sender troppo lungo (max 11 caratteri)');
            }

            SendNetfunSmsAction::make(
                to: $notifiable->phone_number,
                message: $message->content,
                sender: $sender
            )->onQueue('sms')->execute();

        } catch (\Exception $e) {
            Log::error('Errore invio SMS Netfun', [
                'error' => $e->getMessage(),
                'notifiable' => get_class($notifiable),
                'notification' => get_class($notification)
            ]);
            throw $e;
        }
    }

    /**
     * Verifica se il numero di telefono è valido
     *
     * @param string $phoneNumber
     * @return bool
     */
    protected function isValidPhoneNumber(string $phoneNumber): bool
    {
        // Formato italiano: +39XXXXXXXXXX
        return preg_match('/^\+39\d{10}$/', $phoneNumber) === 1;
    }
}
```

### 1.3 Action Queueable
```php
<?php

namespace Modules\Notify\Actions;

use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Modules\Notify\Datas\NetfunSmsRequestData;
use Modules\Notify\Datas\NetfunSmsResponseData;

class SendNetfunSmsAction
{
    use QueueableAction;

    /**
     * @var string
     */
    protected string $to;

    /**
     * @var string
     */
    protected string $message;

    /**
     * @var string
     */
    protected string $sender;

    public function __construct(
        string $to,
        string $message,
        string $sender
    ) {
        $this->to = $to;
        $this->message = $message;
        $this->sender = $sender;
    }

    /**
     * Esegue l'azione di invio SMS
     *
     * @return NetfunSmsResponseData
     * @throws \Exception
     */
    public function execute(): NetfunSmsResponseData
    {
        // Verifica rate limiting
        $this->checkRateLimit();

        try {
            $requestData = new NetfunSmsRequestData(
                to: $this->to,
                text: $this->message,
                from: $this->sender
            );

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . config('notify.drivers.netfun.token'),
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ])->timeout(config('notify.timeout'))->post(config('notify.drivers.netfun.endpoint'), [
                'messages' => [$requestData->toArray()]
            ]);

            if (!$response->successful()) {
                $this->handleError($response);
            }

            $result = $response->json();
            
            // Verifica lo stato della risposta
            if ($result['status'] !== 'success') {
                $this->handleError($response, $result);
            }

            // Registra il successo
            $this->logSuccess($result);

            return NetfunSmsResponseData::fromArray($result);

        } catch (\Exception $e) {
            $this->handleException($e);
        }
    }

    /**
     * Verifica il rate limiting
     *
     * @throws \Exception
     */
    protected function checkRateLimit(): void
    {
        if (!config('notify.rate_limit.enabled')) {
            return;
        }

        $key = 'netfun_rate_limit_' . date('YmdHis');
        $count = Cache::get($key, 0);

        if ($count >= config('notify.rate_limit.limit')) {
            throw new \Exception('Rate limit exceeded');
        }

        Cache::put($key, $count + 1, config('notify.rate_limit.window'));
    }

    /**
     * Gestisce gli errori della risposta
     *
     * @param \Illuminate\Http\Client\Response $response
     * @param array|null $result
     * @throws \Exception
     */
    protected function handleError($response, ?array $result = null): void
    {
        $error = $result['error'] ?? $response->body();
        $status = $result['status'] ?? 'error';

        Log::error('Errore invio SMS Netfun', [
            'status' => $status,
            'error' => $error,
            'to' => $this->to,
            'response' => $response->json()
        ]);

        throw new \Exception("Errore invio SMS: {$error}");
    }

    /**
     * Gestisce le eccezioni
     *
     * @param \Exception $e
     * @throws \Exception
     */
    protected function handleException(\Exception $e): void
    {
        Log::error('Eccezione invio SMS Netfun', [
            'error' => $e->getMessage(),
            'to' => $this->to,
            'message' => $this->message,
            'trace' => $e->getTraceAsString()
        ]);

        throw $e;
    }

    /**
     * Registra il successo dell'invio
     *
     * @param array $result
     */
    protected function logSuccess(array $result): void
    {
        Log::info('SMS inviato con successo', [
            'to' => $this->to,
            'message' => $this->message,
            'sender' => $this->sender,
            'message_id' => $result['message_id'] ?? null,
            'status' => $result['status'] ?? null
        ]);
    }
}
```

## 2. Configurazione

### 2.1 Config File
```php
<?php
// config/notify.php

return [
    'drivers' => [
        'netfun' => [
            'token' => env('NETFUN_TOKEN'),
            'endpoint' => env('NETFUN_ENDPOINT', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json'),
        ],
    ],

    'from' => [
        'name' => env('SMS_FROM_NAME'),
        'number' => env('SMS_FROM_NUMBER'),
    ],

    'debug' => env('SMS_DEBUG', false),

    'retry' => [
        'attempts' => env('SMS_RETRY_ATTEMPTS', 3),
        'delay' => env('SMS_RETRY_DELAY', 60),
        'max_retries' => env('SMS_MAX_RETRIES', 3),
        'retry_delay' => env('SMS_RETRY_DELAY', 1),
    ],

    'rate_limit' => [
        'enabled' => env('SMS_RATE_LIMIT_ENABLED', true),
        'max_attempts' => env('SMS_RATE_LIMIT_MAX_ATTEMPTS', 60),
        'decay_minutes' => env('SMS_RATE_LIMIT_DECAY_MINUTES', 1),
        'limit' => env('SMS_RATE_LIMIT', 100),
        'window' => env('SMS_RATE_LIMIT_WINDOW', 60),
    ],

    'circuit_breaker' => [
        'enabled' => env('SMS_CIRCUIT_BREAKER_ENABLED', true),
        'threshold' => env('SMS_CIRCUIT_BREAKER_THRESHOLD', 5),
        'timeout' => env('SMS_CIRCUIT_BREAKER_TIMEOUT', 60),
    ],

    'timeout' => env('SMS_TIMEOUT', 30),
];
```

### 2.2 Environment Variables
```env

# Netfun specific
NETFUN_TOKEN=your_token_here
NETFUN_ENDPOINT=https://v2.smsviainternet.it/api/rest/v1/sms-batch.json

# Global SMS configuration
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
SMS_FROM_NAME=<nome progetto>
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f963d2c0 (.)
=======
SMS_FROM_NAME=SaluteOra
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 909e45af (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> b99af5a8 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 909e45af (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> b99af5a8 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=<nome progetto>
>>>>>>> bf479cc (.)
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
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> ca10d6ad (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> febe79e3 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a29a4728 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM_NAME=<nome progetto>
>>>>>>> fbed41ac (.)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> ca10d6ad (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> febe79e3 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> a29a4728 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
SMS_FROM_NAME=
SMS_FROM_NAME=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
SMS_FROM_NAME=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
SMS_FROM_NUMBER=+393331234567
SMS_DEBUG=false

# Retry configuration
SMS_RETRY_ATTEMPTS=3
SMS_RETRY_DELAY=60
SMS_MAX_RETRIES=3

# Rate limiting
SMS_RATE_LIMIT_ENABLED=true
SMS_RATE_LIMIT_MAX_ATTEMPTS=60
SMS_RATE_LIMIT_DECAY_MINUTES=1
SMS_RATE_LIMIT=100
SMS_RATE_LIMIT_WINDOW=60

# Circuit breaker
SMS_CIRCUIT_BREAKER_ENABLED=true
SMS_CIRCUIT_BREAKER_THRESHOLD=5
SMS_CIRCUIT_BREAKER_TIMEOUT=60

# Timeout
SMS_TIMEOUT=30
```

## 3. Utilizzo

### 3.1 Nel Model
```php
<?php

namespace Modules\Patient\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    /**
     * Route notifications for the Netfun channel.
     *
     * @return string
     */
    public function routeNotificationForNetfun(): string
    {
        return $this->phone_number;
    }

    /**
     * Verifica se l'utente può ricevere SMS
     *
     * @return bool
     */
    public function canReceiveSms(): bool
    {
        return !empty($this->phone_number) && $this->consent_sms;
    }
}
```

### 3.2 Invio Notifica
```php
// Direttamente
$user->notify(new NetfunSmsNotification('Il tuo codice OTP è: 123456'));

// Con Action
SendNetfunSmsAction::make(
    to: $user->phone_number,
    message: 'Il tuo codice OTP è: 123456',
    sender: config('notify.from.number')
)->onQueue('sms')->execute();

// Con validazione
if ($user->canReceiveSms()) {
    $user->notify(new NetfunSmsNotification('Il tuo codice OTP è: 123456'));
}
```

## 4. Best Practices

### 4.1 Validazione
- Validare sempre il numero di telefono (formato italiano: +39XXXXXXXXXX)
- Verificare la lunghezza del messaggio (max 160 caratteri)
- Controllare il formato del sender (max 11 caratteri)
- Verificare il credito disponibile prima dell'invio
- Validare il consenso dell'utente per ricevere SMS
- Verificare il formato del messaggio (caratteri supportati)

### 4.2 Gestione Errori
- Usare try/catch per gestire le eccezioni
- Loggare gli errori con dettagli
- Implementare retry per fallimenti temporanei
- Gestire i codici di errore specifici di Netfun
- Implementare circuit breaker per errori persistenti
- Monitorare il tasso di errore

### 4.3 Performance
- Utilizzare le code per l'invio
- Implementare rate limiting (max 100 SMS/secondo)
- Monitorare l'uso dell'API
- Gestire il batch di invii per ottimizzare le performance
- Implementare caching per le configurazioni
- Ottimizzare le query al database

### 4.4 Sicurezza
- Validare l'input degli utenti
- Sanitizzare i messaggi
- Proteggere le chiavi API
- Implementare logging sicuro
- Gestire i timeout
- Implementare rate limiting per IP

## 5. Testing

### 5.1 Unit Test
```php
<?php

namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Actions\SendNetfunSmsAction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class NetfunSmsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Cache::flush();
    }

    public function test_sms_sent_successfully()
    {
        Http::fake([
            config('notify.drivers.netfun.endpoint') => Http::response([
                'status' => 'success',
                'message_id' => '123456'
            ], 200)
        ]);

        $action = SendNetfunSmsAction::make(
            to: '+393331234567',
            message: 'Test message',
            sender: config('notify.from.number')
        );

        $result = $action->execute();

        $this->assertEquals('success', $result->status);
        $this->assertEquals('123456', $result->message_id);
        
        Http::assertSent(function ($request) {
            return $request->url() == config('notify.drivers.netfun.endpoint') &&
                   $request['messages'][0]['to'] == '+393331234567' &&
                   $request['messages'][0]['text'] == 'Test message' &&
                   $request['messages'][0]['from'] == config('notify.from.number');
        });
    }

    public function test_sms_fails_with_invalid_number()
    {
        Http::fake([
            config('notify.drivers.netfun.endpoint') => Http::response([
                'status' => 'error',
                'error' => 'Invalid phone number'
            ], 400)
        ]);

        $this->expectException(\Exception::class);

        $action = SendNetfunSmsAction::make(
            to: 'invalid',
            message: 'Test message',
            sender: config('notify.from.number')
        );

        $action->execute();
    }

    public function test_rate_limiting()
    {
        $action = SendNetfunSmsAction::make(
            to: '+393331234567',
            message: 'Test message',
            sender: config('notify.from.number')
        );

        // Simula il raggiungimento del rate limit
        Cache::put('netfun_rate_limit_' . date('YmdHis'), 100, 60);

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Rate limit exceeded');

        $action->execute();
    }
}
```

### 5.2 Feature Test
```php
<?php

namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Modules\Patient\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Queue;

class NetfunNotificationTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Queue::fake();
    }

    public function test_user_can_receive_sms()
    {
        Http::fake([
            config('notify.drivers.netfun.endpoint') => Http::response([
                'status' => 'success',
                'message_id' => '123456'
            ], 200)
        ]);

        $user = User::factory()->create([
            'phone_number' => '+393331234567',
            'consent_sms' => true
        ]);

        $user->notify(new NetfunSmsNotification('Test message'));

        Http::assertSent(function ($request) {
            return $request->url() == config('notify.drivers.netfun.endpoint') &&
                   $request['messages'][0]['to'] == '+393331234567';
        });

        Queue::assertPushed(SendNetfunSmsAction::class);
    }

    public function test_user_cannot_receive_sms_without_consent()
    {
        $user = User::factory()->create([
            'phone_number' => '+393331234567',
            'consent_sms' => false
        ]);

        $user->notify(new NetfunSmsNotification('Test message'));

        Http::assertNothingSent();
        Queue::assertNothingPushed();
    }
}
```

## 6. Monitoraggio

### 6.1 Logging
```php
Log::info('SMS inviato', [
    'to' => $this->to,
    'message' => $this->message,
    'sender' => $this->sender,
    'response' => $response->json(),
    'message_id' => $response->json()['message_id'] ?? null,
    'timestamp' => now()->toIso8601String(),
    'duration' => microtime(true) - LARAVEL_START
]);
```

### 6.2 Metriche
- Numero di SMS inviati
- Tasso di successo
- Tempo di risposta
- Errori per tipo
- Credito residuo
- Costi per SMS
- Rate limit usage
- Retry attempts
- Queue length
- Processing time

### 6.3 Alerting
- Errori persistenti
- Rate limit raggiunto
- Credito basso
- Tempo di risposta alto
- Queue congestionata
- Tasso di errore alto

## 7. Collegamenti Utili

- [Documentazione Netfun](https://www.netfunitalia.it/)
- [API Netfun](https://v2.smsviainternet.it/api/rest/v1/)
- [Spatie Queueable Action](https://github.com/spatie/laravel-queueable-action)
- [Spatie Laravel Data](https://github.com/spatie/laravel-data)
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
