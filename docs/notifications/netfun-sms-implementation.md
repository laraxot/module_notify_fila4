<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
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
>>>>>>> 75179b855 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
# Implementazione Netfun SMS 

## Introduzione

Netfun è un provider italiano di SMS che offre servizi per l'invio di messaggi SMS tramite API REST. 
Questo documento descrive l'implementazione corretta dell'integrazione Netfun usando Spatie Queueable Actions.

## Endpoint API

L'endpoint corretto per le API Netfun è:
```
https://v2.smsviainternet.it/api/rest/v1/sms-batch.json
```

## Configurazione

### 1. Configurazione Specifica del Provider

Netfun utilizza un API token configurato in `config/services.php`:

```php
// config/services.php
return [
    // Altre configurazioni...
    
    'netfun' => [
        'token' => env('NETFUN_TOKEN'),
        'sender' => env('NETFUN_SENDER'), // Senza valore predefinito
    ],
];
```

Assicurati di aggiungere le variabili d'ambiente nel file `.env`:

```
NETFUN_TOKEN=your_api_token
NETFUN_SENDER=your_sender_name
```

> **IMPORTANTE**: Non utilizzare valori predefiniti per parametri critici come il sender. Ogni ambiente deve definire esplicitamente i propri valori appropriati.

### 2. Configurazione Generica

Per la gestione di retry, rate limiting e altre configurazioni generiche, usa le sezioni comuni nel file `config/sms.php` che si applicano a tutti i provider SMS:

```php
// config/sms.php
return [
    // Configurazione specifica per provider (solo per riferimento)
    'drivers' => [
        // Vari provider...
    ],
    
    // Configurazione generica per retry - usata per tutti i provider
    'retry' => [
        'attempts' => env('SMS_RETRY_ATTEMPTS', 3),
        'delay' => env('SMS_RETRY_DELAY', 60), // secondi
    ],
    
    // Configurazione generica per rate limiting - usata per tutti i provider
    'rate_limit' => [
        'enabled' => env('SMS_RATE_LIMIT_ENABLED', true),
        'max_attempts' => env('SMS_RATE_LIMIT_MAX_ATTEMPTS', 60),
        'decay_minutes' => env('SMS_RATE_LIMIT_DECAY_MINUTES', 1),
    ],
    
    // Altre configurazioni generiche
];
```

> **IMPORTANTE**: Evita di duplicare configurazioni generiche nella sezione specifica del provider. Usa le sezioni generiche per comportamenti applicabili a tutti i provider.

## Implementazione Data Objects

Seguendo gli standard del modulo, utilizziamo `spatie/laravel-data` per i DTO nella cartella `app/Datas`:

```php
<?php

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsData extends Data
{
    public function __construct(
        public string $recipient,
        public string $message,
        public string $sender,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
    ) {}
}
```

## Implementazione Queueable Action

L'invio SMS viene gestito tramite una Queueable Action utilizzando il pattern di Spatie:

```php
<?php

namespace Modules\Notify\Actions\SMS;

use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Modules\Notify\Datas\NetfunSmsData;

class SendNetfunSmsAction
{
    use QueueableAction;
    
    public function execute(NetfunSmsData $smsData)
    {
        $config = config('sms.drivers.netfun');
        
        try {
            $response = Http::post($config['endpoint'], [
                'apiKey' => $config['api_key'],
                'messages' => [[
                    'recipient' => $smsData->recipient,
                    'text' => $smsData->message,
                    'sender' => $smsData->sender,
                    'reference' => $smsData->reference,
                    'date' => $smsData->scheduledDate,
                ]],
            ]);
            // Gestione risposta e logging
        } catch (\Exception $e) {
            Log::error('Errore invio SMS Netfun', [
                'error' => $e->getMessage(),
            ]);
            throw $e;
        }
    }
}
```

## Utilizzo nella Notification

```php
<?php

namespace Modules\Notify\Notifications;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendNetfunSmsAction;
use Modules\Notify\Datas\NetfunSmsData;

class AppointmentReminder extends Notification
{
    protected $appointment;
    
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }
    
    public function via($notifiable)
    {
        return ['mail', 'database', 'netfun'];
    }
    
    public function toNetfun($notifiable)
    {
        $phoneNumber = $notifiable->routeNotificationForSms($this);
        
        if (!$phoneNumber) {
            return null;
        }
        
        $action = app(SendNetfunSmsAction::class);
        
        $smsData = new NetfunSmsData(
            recipient: $phoneNumber,
            message: "Promemoria: appuntamento il {$this->appointment->date}",
<<<<<<< HEAD
            sender: '<nome progetto>',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            sender: '<nome progetto>',
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
            sender: 'SaluteOra',
=======
            sender: 'SaluteOra',
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            sender: 'SaluteOra',
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 23cbbaf5 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> bb7e77c2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> b99af5a8 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f3086887 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 3d462363 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 54ad93c4 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 6e12a84b (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 545977c8 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 69fa7d37 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            sender: 'SaluteOra',
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> bb7e77c2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> b99af5a8 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f3086887 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 3d462363 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 54ad93c4 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 6e12a84b (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 545977c8 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 69fa7d37 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 23cbbaf5 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            sender: 'SaluteOra',
>>>>>>> b99af5a8 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
            sender: 'SaluteOra',
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
            sender: 'SaluteOra',
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
            sender: '',
            sender: '<nome progetto>',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ca10d6ad (.)
=======
            sender: 'SaluteOra',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
            sender: 'SaluteOra',
>>>>>>> febe79e3 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 9721a5b2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> 1442e291 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> fcaebc79 (rebase 210)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 4fc21b78 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9d3810d0 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> d38aa9d2 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> c8b1c8bf (.)
=======
            sender: 'SaluteOra',
>>>>>>> 9cf0dc90 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
            sender: 'SaluteOra',
>>>>>>> febe79e3 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> a29a4728 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 9721a5b2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 1442e291 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> fcaebc79 (rebase 210)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 4fc21b78 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9d3810d0 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> d38aa9d2 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> c8b1c8bf (.)
=======
            sender: 'SaluteOra',
>>>>>>> 9cf0dc90 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b85 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
            sender: '',
            sender: 'SaluteOra',
>>>>>>> 75179b855 (.)
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
            sender: 'SaluteOra',
>>>>>>> ca10d6ad (.)
=======
            sender: 'SaluteOra',
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
            sender: 'SaluteOra',
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
            sender: 'SaluteOra',
>>>>>>> a29a4728 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            sender: 'SaluteOra',
>>>>>>> 9721a5b2 (.)
=======
            sender: 'SaluteOra',
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
            sender: 'SaluteOra',
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
            sender: 'SaluteOra',
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
            reference: 'app_' . $this->appointment->id
        );
        
        // Esecuzione sincrona per notifiche
        return $action->execute($smsData);
        
        // Per esecuzione asincrona
        // return $action->onQueue('sms')->execute($smsData);
    }
}
```

## Errori Comuni da Evitare

1. **Mai modificare i moduli riutilizzabili** - Non modificare direttamente `config/sms.php` nel modulo Notify
2. **Mai utilizzare il namespace sbagliato** - Usare `Modules\Notify\Datas` e non `Modules\Notify\Datas`
3. **Mai utilizzare username/password per Netfun** - Netfun utilizza un API token, non username/password
4. **Mai usare HTTP client sbagliato** - Utilizzare `GuzzleHttp\Client` come nella classe `NetfunSendAction` esistente

## Riferimenti

- [Documentazione Netfun API](https://www.netfun.it/docs/api)
- [Spatie Laravel Data](https://github.com/spatie/laravel-data)
- [Spatie Queueable Actions](https://github.com/spatie/laravel-queueable-action)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
