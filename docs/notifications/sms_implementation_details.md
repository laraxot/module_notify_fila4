<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
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
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
# Implementazione SMS : Guida Dettagliata

Questa documentazione fornisce una guida dettagliata all'implementazione delle notifiche SMS , con confronto tra diversi provider e best practices specifiche per il contesto italiano.

## Indice

- [Confronto Provider SMS](#confronto-provider-sms)
- [Provider Consigliati per l'Italia](#provider-consigliati-per-litalia)
- [Implementazione con Twilio](#implementazione-con-twilio)
- [Implementazione con Provider Italiani](#implementazione-con-provider-italiani)
- [Gestione dei Numeri di Telefono](#gestione-dei-numeri-di-telefono)
- [Testing delle Notifiche SMS](#testing-delle-notifiche-sms)
- [Pattern Avanzati](#pattern-avanzati)
- [Conformità Normativa](#conformità-normativa)

## Confronto Provider SMS

| Provider | Copertura Italia | Costi | Affidabilità | Velocità | Supporto Unicode/Emoji | API | Documentazione |
|----------|------------------|-------|--------------|----------|------------------------|-----|---------------|
| Twilio | Eccellente | Medio-Alto | Alta | Alta | Sì | Eccellente | Ottima |
| Vonage (Nexmo) | Buona | Medio | Alta | Buona | Sì | Buona | Buona |
| Plivo | Buona | Medio | Buona | Buona | Sì | Buona | Buona |
| Telcob | Ottima | Basso | Alta | Alta | Parziale | Base | Base (IT) |
| SMSHosting | Ottima | Basso | Alta | Alta | Sì | Buona | Buona (IT) |
| NetFun Italia | Ottima | Basso | Buona | Buona | Parziale | Base | Base (IT) |
| Spring Edge | Limitata | Basso | Media | Media | No | Base | Limitata |

## Provider Consigliati per l'Italia

### Telcob

Telcob è un provider italiano specializzato nel settore sanitario, con tariffe competitive e ottima copertura nazionale.

**Vantaggi**:
- Contratti specifici per studi medici e cliniche
- Supporto in italiano
- Conformità GDPR garantita
- Ottima consegna su rete italiana

**Svantaggi**:
- API meno robusta rispetto a provider internazionali
- Limitata copertura internazionale

### SMSHosting

SMSHosting offre un buon compromesso tra qualità e prezzo, con un'API ben documentata.

**Vantaggi**:
- Prezzi competitivi
- Buona documentazione in italiano
- Supporta notifiche di consegna
- Integrazione facile con Laravel

**Svantaggi**:
- Supporto clienti non sempre tempestivo

### NetFun Italia

Provider italiano con tariffe molto competitive per volumi elevati.

**Vantaggi**:
- Prezzi molto competitivi per grandi volumi
- Ottimizzato per rete italiana
- Supporto telefonico

**Svantaggi**:
- API meno moderna
- Documentazione limitata

## Implementazione con Twilio

Sebbene più costoso, Twilio offre l'API più robusta e la migliore documentazione.

### Installazione

```bash
composer require laravel-notification-channels/twilio
```

### Configurazione

```php
// config/services.php
'twilio' => [
    'account_sid' => env('TWILIO_ACCOUNT_SID'),
    'auth_token' => env('TWILIO_AUTH_TOKEN'),
    'from' => env('TWILIO_FROM_NUMBER'),
],
```

```dotenv

# .env
TWILIO_ACCOUNT_SID=AC123...
TWILIO_AUTH_TOKEN=abc123...
TWILIO_FROM_NUMBER=+39XXXXXXXXXX
```

### Creazione Notification Class

```php
namespace Modules\Notify\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;

class AppointmentReminder extends Notification
{
    protected $appointment;
    
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
    }
    
    public function via($notifiable)
    {
        return [TwilioChannel::class];
    }
    
    public function toTwilio($notifiable)
    {
        $formattedDate = $this->appointment->formatted_date;
        $formattedTime = $this->appointment->formatted_time;
        $doctor = $this->appointment->doctor->name;
        
        return (new TwilioSmsMessage())
            ->content("Promemoria: hai un appuntamento il {$formattedDate} alle {$formattedTime} con il Dr. {$doctor}. Conferma rispondendo SI o annulla con NO.");
    }
}
```

### Aggiunta del metodo `routeNotificationForTwilio` al Model

```php
namespace Modules\Patient\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    // ...
    
    public function routeNotificationForTwilio()
    {
        // Garantisci che il numero sia in formato E.164 (es. +393331234567)
        $phoneNumber = $this->phone_number;
        
        // Rimuovi eventuali spazi o caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        
        // Se inizia con 0, sostituisci con +39
        if (strpos($phoneNumber, '0') === 0) {
            $phoneNumber = '+39' . substr($phoneNumber, 1);
        }
        
        // Se non ha prefisso, aggiungi +39
        if (strpos($phoneNumber, '+') !== 0) {
            $phoneNumber = '+39' . $phoneNumber;
        }
        
        return $phoneNumber;
    }
}
```

### Invio della notifica

```php
$user->notify(new AppointmentReminder($appointment));
```

## Implementazione con Provider Italiani

### SMSHosting

#### Installazione

SMSHosting non ha un canale di notifica Laravel ufficiale, quindi creiamo un canale personalizzato con Queueable Actions.

```bash
composer require smshosting/smshosting-api-php-client
composer require spatie/laravel-queueable-action
```

#### Creazione Queueable Action

```php
namespace Modules\Notify\Actions\SMS;

use Spatie\QueueableAction\QueueableAction;
use SMSHosting\Rest\Client;
use Illuminate\Support\Facades\Log;

class SendSMSHostingAction
{
    use QueueableAction;
    
    protected $client;
    
    public function __construct()
    {
        $this->client = new Client(
            config('sms.smshosting.username'),
            config('sms.smshosting.password')
        );
    }
    
    public function execute(string $to, string $content, array $options = [])
    {
        try {
            $response = $this->client->messages->send([
                'to' => $to,
                'text' => $content,
                'from' => config('sms.smshosting.sender'),
                'options' => $options,
            ]);
            
            Log::info('SMS inviato con successo', [
                'to' => $to,
                'provider' => 'SMSHosting',
                'message_id' => $response->getId() ?? null,
            ]);
            
            return $response;
        } catch (\Exception $e) {
            Log::error('Errore invio SMS', [
                'to' => $to,
                'provider' => 'SMSHosting',
                'error' => $e->getMessage(),
            ]);
            
            throw $e;
        }
    }
}
```

#### Creazione Channel usando Queueable Action

```php
namespace Modules\Notify\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendSMSHostingAction;

class SMSHostingChannel
{
    protected $sendSMSAction;
    
    public function __construct(SendSMSHostingAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
    
    public function send($notifiable, Notification $notification)
    {
        if (! $to = $notifiable->routeNotificationForSMSHosting()) {
            return;
        }
        
        $message = $notification->toSMSHosting($notifiable);
        
        // Esecuzione asincrona dell'azione
        return $this->sendSMSAction->onQueue('sms')
            ->execute($to, $message->content, $message->options);
    }
}
```

#### Configurazione

```php
// config/sms.php
return [
    'smshosting' => [
        'username' => env('SMSHOSTING_USERNAME'),
        'password' => env('SMSHOSTING_PASSWORD'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 161887a2 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> ba564870 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 968ed47cd (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a9167faf (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db6bec044 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6dad70a87 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
=======
>>>>>>> 6dad70a87 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
<<<<<<< HEAD
=======
>>>>>>> cca10a64 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> 510809c6f (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
<<<<<<< HEAD
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> e2f1a4045 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> 848f79b79 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 6ad5224fb (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
>>>>>>> ce1853afd (.)
=======
=======
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 26d39e2eb (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
=======
>>>>>>> e790eb33 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
=======
>>>>>>> 2fc60436 (.)
>>>>>>> be698cf2c (.)
=======
>>>>>>> cbb586cb0 (.)
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
        'sender' => env('SMSHOSTING_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
        'sender' => env('SMSHOSTING_SENDER', '<nome progetto>'),
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
    ],
];
```

#### Creazione Message Class

```php
namespace Modules\Notify\Messages;

class SMSHostingMessage
{
    public $content;
    public $options = [];
    
    public function __construct($content = '')
    {
        $this->content = $content;
    }
    
    public function content($content)
    {
        $this->content = $content;
        
        return $this;
    }
    
    public function unicode()
    {
        $this->options['unicode'] = true;
        
        return $this;
    }
    
    public function flash()
    {
        $this->options['flash'] = true;
        
        return $this;
    }
}
```

### Telcob

Telcob offre un servizio SMS con API REST. Implementiamo l'invio usando le Queueable Actions di Spatie.

#### Creazione Queueable Action

```php
namespace Modules\Notify\Actions\SMS;

use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SendTelcobSMSAction
{
    use QueueableAction;
    
    protected $apiKey;
    protected $sender;
    protected $baseUrl = 'https://api.telcob.com/sms/v1';
    
    public function __construct()
    {
        $this->apiKey = config('sms.telcob.api_key');
        $this->sender = config('sms.telcob.sender');
    }
    
    public function execute(string $to, string $message, array $options = [])
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => "Bearer {$this->apiKey}",
                'Content-Type' => 'application/json',
            ])->post("{$this->baseUrl}/send", [
                'to' => $to,
                'text' => $message,
                'from' => $this->sender,
                'options' => $options,
            ]);
            
            if ($response->successful()) {
                Log::info('SMS Telcob inviato con successo', [
                    'to' => $to,
                    'message_id' => $response->json('id') ?? null,
                ]);
            } else {
                Log::warning('Risposta negativa da Telcob', [
                    'to' => $to,
                    'status' => $response->status(),
                    'body' => $response->json(),
                ]);
            }
            
            return $response;
        } catch (\Exception $e) {
            Log::error('Errore invio SMS Telcob', [
                'to' => $to,
                'error' => $e->getMessage(),
            ]);
            
            throw $e;
        }
    }
}
```

#### Creazione Channel per Telcob

```php
namespace Modules\Notify\Channels;

use Illuminate\Notifications\Notification;
use Modules\Notify\Actions\SMS\SendTelcobSMSAction;

class TelcobChannel
{
    protected $sendSMSAction;
    
    public function __construct(SendTelcobSMSAction $sendSMSAction)
    {
        $this->sendSMSAction = $sendSMSAction;
    }
    
    public function send($notifiable, Notification $notification)
    {
        if (! $to = $notifiable->routeNotificationForTelcob()) {
            return;
        }
        
        $message = $notification->toTelcob($notifiable);
        
        // Esecuzione asincrona dell'azione
        return $this->sendSMSAction->onQueue('sms')
            ->execute($to, $message->content, $message->options ?? []);
    }
}
```

## Gestione dei Numeri di Telefono

La gestione corretta dei numeri di telefono è cruciale per l'invio di SMS.

### Formato E.164

Il formato E.164 è lo standard internazionale per i numeri di telefono:
- Inizia con il simbolo `+`
- Seguito dal prefisso internazionale (39 per l'Italia)
- Seguito dal numero senza lo zero iniziale
- Senza spazi o simboli

**Esempi**:
- `+393331234567` (corretto)
- `00393331234567` (non standard)
- `3331234567` (incompleto)
- `0331234567` (formato italiano locale)

### Classe Helper per Formattazione

```php
namespace Modules\Notify\Helpers;

class PhoneNumberFormatter
{
    public static function formatToE164($phoneNumber, $defaultCountryCode = '39')
    {
        // Rimuovi tutti i caratteri non numerici
        $phoneNumber = preg_replace('/[^0-9+]/', '', $phoneNumber);
        
        // Se il numero inizia con + è già in formato internazionale
        if (strpos($phoneNumber, '+') === 0) {
            return $phoneNumber;
        }
        
        // Se inizia con 00, sostituisci con +
        if (strpos($phoneNumber, '00') === 0) {
            return '+' . substr($phoneNumber, 2);
        }
        
        // Se inizia con 0, assumi che sia un numero italiano e rimuovi lo 0
        if (strpos($phoneNumber, '0') === 0) {
            return '+' . $defaultCountryCode . substr($phoneNumber, 1);
        }
        
        // Altrimenti aggiungi solo il prefisso
        return '+' . $defaultCountryCode . $phoneNumber;
    }
    
    public static function isValidItalianMobile($phoneNumber)
    {
        $e164 = self::formatToE164($phoneNumber);
        
        // I numeri di cellulare italiani iniziano con +393
        return preg_match('/^\+393\d{8,9}$/', $e164) === 1;
    }
}
```

## Testing delle Notifiche SMS

### Mock Channel per Testing

```php
namespace Modules\Notify\Testing;

use Illuminate\Notifications\Notification;
use Modules\Notify\Channels\SMSHostingChannel;

class MockSMSChannel extends SMSHostingChannel
{
    public $messages = [];
    
    public function send($notifiable, Notification $notification)
    {
        $to = $notifiable->routeNotificationForSMSHosting();
        $message = $notification->toSMSHosting($notifiable);
        
        $this->messages[] = [
            'to' => $to,
            'content' => $message->content,
        ];
        
        return true;
    }
}
```

### Feature Test

```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Modules\Patient\Models\User;
use Modules\Appointment\Models\Appointment;
use Modules\Notify\Notifications\AppointmentReminder;
use Modules\Notify\Testing\MockSMSChannel;
use Illuminate\Support\Facades\Notification;

class SMSNotificationTest extends TestCase
{
    public function testAppointmentReminderSMS()
    {
        // Arrange
        $user = User::factory()->create(['phone_number' => '+393331234567']);
        $appointment = Appointment::factory()->create(['user_id' => $user->id]);
        
        $mockChannel = new MockSMSChannel();
        $this->app->instance(SMSHostingChannel::class, $mockChannel);
        
        // Act
        $user->notify(new AppointmentReminder($appointment));
        
        // Assert
        $this->assertCount(1, $mockChannel->messages);
        $this->assertEquals('+393331234567', $mockChannel->messages[0]['to']);
        $this->assertStringContainsString($appointment->formatted_date, $mockChannel->messages[0]['content']);
    }
    
    public function testSMSNotSentWhenPhoneInvalid()
    {
        // Arrange
        Notification::fake();
        $user = User::factory()->create(['phone_number' => 'invalid-number']);
        $appointment = Appointment::factory()->create(['user_id' => $user->id]);
        
        // Act
        $user->notify(new AppointmentReminder($appointment));
        
        // Assert
        Notification::assertNothingSent();
    }
}
```

## Pattern Avanzati

### Notifiche Multi-canale con Fallback

```php
namespace Modules\Notify\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;
use Modules\Notify\Emails\SpatieEmail;

class ImportantNotification extends Notification
{
    protected $record;
    protected $slug;
    
    public function __construct($record, $slug)
    {
        $this->record = $record;
        $this->slug = $slug;
    }
    
    public function via($notifiable)
    {
        $channels = ['mail'];
        
        // Aggiungi SMS solo se l'utente ha un numero di telefono valido
        if ($notifiable->phone_number && $notifiable->sms_notifications_enabled) {
            $channels[] = TwilioChannel::class;
        }
        
        return $channels;
    }
    
    public function toMail($notifiable)
    {
        $email = new SpatieEmail($this->record, $this->slug);
        
        // IMPORTANTE: garantisci che ci sia sempre un destinatario
        if (method_exists($notifiable, 'routeNotificationFor')) {
            $email->to($notifiable->routeNotificationFor('mail'));
        }
        
        return $email;
    }
    
    public function toTwilio($notifiable)
    {
        return (new TwilioSmsMessage())
            ->content("Notifica importante: {$this->record->title}");
    }
}
```

### Gestione Tentativi Falliti con Queueable Actions

Utilizzando le Queueable Actions di Spatie, è possibile gestire i tentativi falliti in modo elegante:

```php
namespace Modules\Notify\Actions\SMS;

use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Notifications\SMSFailureNotification;

class SendNotificationWithRetryAction
{
    use QueueableAction;
    
    // Configurazione della coda
    public $tries = 3;
    public $backoff = 60; // 1 minuto tra i tentativi
    public $queue = 'notifications';
    
    public function execute($notifiable, $notification, array $options = [])
    {
        try {
            // Invio della notifica
            $notifiable->notify($notification);
            
            // Registrazione del successo
            Log::info('Notifica inviata con successo', [
                'notifiable_type' => get_class($notifiable),
                'notifiable_id' => $notifiable->id,
                'notification_class' => get_class($notification),
            ]);
            
            return true;
        } catch (\Exception $e) {
            // Registrazione dell'errore
            Log::error('Errore invio notifica', [
                'error' => $e->getMessage(),
                'notifiable_id' => $notifiable->id,
                'notification_class' => get_class($notification),
                'attempt' => $options['attempt'] ?? 1,
            ]);
            
            // Incrementa il contatore di tentativi
            $attempt = ($options['attempt'] ?? 1) + 1;
            
            // Se non abbiamo superato il numero massimo di tentativi, ritenta
            if ($attempt <= $this->tries) {
                // Pianifica un nuovo tentativo dopo il backoff
                $this->onQueue($this->queue)
                     ->execute($notifiable, $notification, ['attempt' => $attempt]);
            } else {
                // Invia notifica di fallimento via email se abbiamo esaurito i tentativi
                $this->sendFailureNotification($notifiable, $notification);
            }
            
            // Propaga l'eccezione per gestione esterna
            throw $e;
        }
    }
    
    protected function sendFailureNotification($notifiable, $notification)
    {
        // Controlla se il notifiable ha un indirizzo email
        if (method_exists($notifiable, 'routeNotificationFor') && $notifiable->routeNotificationFor('mail')) {
            // Invia email di notifica del fallimento
            Notification::send(
                $notifiable,
                new SMSFailureNotification($notification)
            );
        }
    }
}
```

### Utilizzo dell'Action

```php
namespace Modules\Notify\Services;

use Modules\Notify\Actions\SMS\SendNotificationWithRetryAction;
use Modules\Notify\Notifications\AppointmentReminder;

class AppointmentService
{
    public function sendReminders($appointments)
    {   
        $sendNotificationAction = app(SendNotificationWithRetryAction::class);
        
        foreach ($appointments as $appointment) {
            // Crea la notifica
            $notification = new AppointmentReminder($appointment);
            
            // Invia la notifica con gestione tentativi via Queueable Action
            // L'esecuzione sarà asincrona sulla coda 'notifications'
            $sendNotificationAction->onQueue('notifications')
                                   ->execute($appointment->patient, $notification);
        }
    }
}
```
```

## Conformità Normativa

### GDPR e Privacy

Quando si inviano SMS, è necessario rispettare le normative GDPR:

1. **Consenso Esplicito**: Ottenere e documentare il consenso dell'utente
2. **Opt-Out**: Fornire istruzioni per disiscriversi dalle comunicazioni
3. **Minimizzazione Dati**: Inviare solo le informazioni necessarie
4. **Conservazione**: Definire politiche di conservazione dei log SMS
5. **Sicurezza**: Utilizzare canali sicuri per l'invio

### Template SMS GDPR-Compliant

```php
public function toTwilio($notifiable)
{
    return (new TwilioSmsMessage())
<<<<<<< HEAD
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
<<<<<<< HEAD
<<<<<<< HEAD
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
=======
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 968ed47cd (.)
=======
=======
>>>>>>> cb85c538 (rebase 210)
>>>>>>> e0836b102 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> e0836b102 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 9d67cabd (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> e0d9c9be (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 9d67cabd (.)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 1375c94d (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 030c9674 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> db6bec044 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 6dad70a87 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 968ed47cd (.)
>>>>>>> 011072e4 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 161887a2 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> ba564870 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7c39b1fe (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 888799d0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> c6c33175 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e0d9c9be (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7a2f131f (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> cb85c538 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 1c0eb9c7 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4d253d2c (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 52cd5f85 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> bb00ab64 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 59916c8f (.)
=======
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> e0836b102 (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 6dad70a87 (.)
>>>>>>> 011072e4 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 161887a2 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> ba564870 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f054e0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7c39b1fe (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 888799d0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> c6c33175 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7a2f131f (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 1c0eb9c7 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 460b8f5b (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4d253d2c (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1375c94d (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 52cd5f85 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 030c9674 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> bb00ab64 (rebase 210)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eea68ec9 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 59916c8f (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
>>>>>>> 011072e4 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 161887a2 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> ba564870 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7c39b1fe (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 888799d0 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6b6b9e41 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> c6c33175 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 161887a2 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
=======
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
=======
>>>>>>> e0d9c9be (.)
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> e0836b102 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
=======
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
=======
>>>>>>> 030c9674 (rebase 210)
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
=======
=======
>>>>>>> eea68ec9 (.)
>>>>>>> 6dad70a87 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 75179b85 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> f963d2c0 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 31f5d28f (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 31f5d28f (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 6608a1a0 (.)
=======
<<<<<<< HEAD
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 23cbbaf5 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 909e45af (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> bb7e77c2 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> f3086887 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 3d462363 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 54ad93c4 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7d5eaf96 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> eb71492d (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 31f5d28f (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 6608a1a0 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> bb7e77c2 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> f3086887 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 3d462363 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 54ad93c4 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 6e12a84b (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 545977c8 (rebase 210)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 69fa7d37 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> eb71492d (.)
=======
<<<<<<< HEAD
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 31f5d28f (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 6608a1a0 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 23cbbaf5 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 909e45af (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> f3086887 (rebase 210)
=======
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
>>>>>>> 74eb2e964 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
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
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 7325acf3 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5aedc39c (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
<<<<<<< HEAD
=======
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 4689a827 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 9f8e680a (rebase 210)
>>>>>>> c188e2a18 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> cca10a64 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
<<<<<<< HEAD
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 379ffe3f3 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 4689a827 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 7325acf3 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 510809c6f (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 01750b107 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
=======
>>>>>>> e790eb33 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> d284d65 (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
=======
>>>>>>> 2fc60436 (.)
>>>>>>> be698cf2c (.)
=======
>>>>>>> cbb586cb0 (.)
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
=======
>>>>>>> b19cd40 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> 4e2ebfb (.)
        ->content("SaluteOra: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: saluteora.it/privacy");
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7ceb00286 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
        ->content("<nome progetto>: Promemoria appuntamento {$this->appointment->formatted_date}. 
        Per annullare rispondere NO. Per info: <nome progetto>.it/privacy");
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
}
```

### Registro dei Consensi

Implementare un sistema di registro dei consensi:

```php
namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Model;

class ConsentLog extends Model
{
    protected $fillable = [
        'user_id',
        'channel',
        'consented_at',
        'ip_address',
        'user_agent',
        'consent_text',
        'revoked_at',
    ];
    
    protected $casts = [
        'consented_at' => 'datetime',
        'revoked_at' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeActive($query)
    {
        return $query->whereNotNull('consented_at')
            ->whereNull('revoked_at');
    }
    
    public function scopeForChannel($query, $channel)
    {
        return $query->where('channel', $channel);
    }
}
```

## Collegamenti alla Documentazione Correlata

- [MULTI_CHANNEL_NOTIFICATIONS.md](./MULTI_CHANNEL_NOTIFICATIONS.md)
- [SMS_PROVIDER_CONFIGURATION.md](./SMS_PROVIDER_CONFIGURATION.md)
- [NOTIFICATIONS_IMPLEMENTATION_GUIDE.md](./NOTIFICATIONS_IMPLEMENTATION_GUIDE.md)
- [TELEGRAM_NOTIFICATIONS_GUIDE.md](./TELEGRAM_NOTIFICATIONS_GUIDE.md)
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
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
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
>>>>>>> fea359347 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
