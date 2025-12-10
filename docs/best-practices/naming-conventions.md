<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 2dab69c8a (.)
# Convenzioni di Naming

## Regole Generali
1. **CamelCase per Classi e Metodi**
   - Usa PascalCase per i nomi delle classi
   - Usa camelCase per i nomi dei metodi
   - Evita abbreviazioni non standard

2. **Acronimi**
   - Gli acronimi devono essere trattati come parole singole
   - Esempio: `Sms` non `SMS`, `Http` non `HTTP`
   - Questo si applica sia a classi che a metodi

3. **Suffissi**
   - Le classi Page devono terminare con `Page`
   - Le classi Controller devono terminare con `Controller`
   - Le classi Service devono terminare con `Service`

## Esempi Corretti e Incorretti

### Classi
```php
// ✅ Corretto
class SendSmsPage extends XotBasePage
class HttpRequest
class SmsNotification

// ❌ Incorretto
class SendSMSPage extends XotBasePage
class HTTPRequest
class SMSNotification
```

### Metodi
```php
// ✅ Corretto
public function sendSms(): void
public function handleHttpRequest(): void

// ❌ Incorretto
public function sendSMS(): void
public function handleHTTPRequest(): void
```

## Motivazione
1. **Consistenza**: Mantenere uno stile coerente in tutto il codice
2. **Leggibilità**: Rendere il codice più facile da leggere e mantenere
3. **Standard**: Seguire le convenzioni PSR e le best practices di Laravel
4. **Prevenzione Errori**: Evitare confusione e potenziali bug

## Implementazione
- Verificare sempre i nomi delle classi e dei metodi
- Usare strumenti di analisi statica
- Seguire le convenzioni del framework
- Documentare eventuali eccezioni

# Convenzioni di Naming per le Azioni di Notifica

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema , supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema , supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema , supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> a2f3c239e (.)
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema SaluteOra, supportando la risoluzione dinamica delle classi implementata nei factory.
=======
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema , supportando la risoluzione dinamica delle classi implementata nei factory.
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema <nome progetto>, supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> bf479cc (.)
<<<<<<< HEAD
=======
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema SaluteOra, supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
Questo documento definisce le convenzioni di naming standardizzate per le azioni di notifica nel sistema SaluteOra, supportando la risoluzione dinamica delle classi implementata nei factory.
>>>>>>> 8134673e1 (.)

## Pattern di Naming

### Azioni SMS

```
Send{Driver}SMSAction
```

Esempi:
- `SendSmsFactorSMSAction` (per il driver 'smsfactor')
- `SendTwilioSMSAction` (per il driver 'twilio')
- `SendNexmoSMSAction` (per il driver 'nexmo')

### Azioni WhatsApp

```
Send{Driver}WhatsAppAction
```

Esempi:
- `SendTwilioWhatsAppAction` (per il driver 'twilio')
- `SendFacebookWhatsAppAction` (per il driver 'facebook')
- `Send360dialogWhatsAppAction` (per il driver '360dialog')

### Azioni Telegram

```
Send{Driver}TelegramAction
```

Esempi:
- `SendOfficialTelegramAction` (per il driver 'official')
- `SendBotmanTelegramAction` (per il driver 'botman')
- `SendNutgramTelegramAction` (per il driver 'nutgram')

## Regole di Normalizzazione

1. **Prima lettera maiuscola**: La prima lettera del nome del driver viene convertita in maiuscolo
2. **Resto in minuscolo**: Il resto del nome del driver viene convertito in minuscolo
3. **Rimozione caratteri speciali**: Per driver con caratteri non alfanumerici (es. '360dialog'), i caratteri speciali vengono rimossi

## Namespace

Tutte le azioni devono essere posizionate nel namespace corretto:

- SMS: `Modules\Notify\Actions\SMS`
- WhatsApp: `Modules\Notify\Actions\WhatsApp`
- Telegram: `Modules\Notify\Actions\Telegram`

## Implementazione dell'Interfaccia

Ogni azione deve implementare l'interfaccia corrispondente:

- SMS: `Modules\Notify\Contracts\SmsActionInterface`
- WhatsApp: `Modules\Notify\Contracts\WhatsAppProviderActionInterface`
- Telegram: `Modules\Notify\Contracts\TelegramProviderActionInterface`

## Esempio di Implementazione

```php
<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Modules\Notify\Contracts\SmsActionInterface;
use Modules\Notify\Datas\SmsData;

final class SendNewProviderSMSAction implements SmsActionInterface
{
    public function execute(SmsData $smsData): array
    {
        // Implementazione...
        
        return [
            'success' => true,
            // Altri dati...
        ];
    }
}
```

## Vantaggi della Standardizzazione

1. **Coerenza**: Tutte le azioni seguono lo stesso pattern di naming
2. **Prevedibilità**: È facile prevedere il nome di una classe dato il nome del driver
3. **Automazione**: Supporta la risoluzione dinamica delle classi nei factory
4. **Documentazione**: Facilita la comprensione e la documentazione del codice

## Aggiunta di Nuovi Driver

Per aggiungere un nuovo driver:

1. Aggiungere il driver alla configurazione (es. `config/sms.php`)
2. Creare una nuova classe che segue la convenzione di naming
3. Implementare l'interfaccia corrispondente

Non è necessario modificare i factory, poiché utilizzano la risoluzione dinamica delle classi.

## Casi Speciali

### Driver con Caratteri Speciali

Per driver con caratteri speciali (es. '360dialog'), i caratteri non alfanumerici vengono rimossi:

```php
$normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower($driver)));
```

Esempio: '360dialog' → 'Send360dialogWhatsAppAction'

### Driver con Nomi Composti

Per driver con nomi composti (es. 'sms_factor'), ogni parola deve iniziare con una lettera maiuscola:

```php
$normalizedDriver = str_replace(' ', '', ucwords(str_replace('_', ' ', $driver)));
```

Esempio: 'sms_factor' → 'SendSmsFactorSMSAction'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 2dab69c8a (.)
