<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
# Architettura delle Azioni dei Provider in Notify

## Struttura e Principi Fondamentali

Le azioni dei provider in Notify seguono il pattern di Spatie Queueable Actions e sono progettate per supportare molteplici provider mantenendo un'interfaccia comune e consistente.

### 1. Interfaccia Comune

Tutte le azioni di invio SMS devono implementare `SmsProviderActionInterface` per garantire un'interfaccia unificata:

```php
interface SmsProviderActionInterface
{
    public function execute(SmsData $smsData): array;
}
```

Questo assicura che qualsiasi client possa utilizzare qualsiasi provider senza modificare il codice di utilizzo.

### 2. Posizione delle Azioni

Le azioni specifiche dei provider SMS si trovano nella directory:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- `/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/`
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> b99af5a8 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> bf479cc (.)
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
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
- `/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 75179b85 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a404ea71 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> ca10d6ad (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> febe79e3 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> a29a4728 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- `/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/`
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)

### 3. Convenzioni di Nomenclatura

- Le azioni devono essere nominate seguendo il pattern `Send{Provider}SMSAction`
- Esempio: `SendNetfunSMSAction`, `SendTwilioSMSAction`, ecc.

## Data Transfer Objects

### Principale: `SmsData`

La classe `SmsData` è l'interfaccia comune che tutte le azioni di provider devono accettare:

```php
class SmsData extends Data
{
    public string $from;    // Mittente
    public string $to;      // Destinatario
    public string $body;    // Corpo del messaggio
}
```

### DTOs Specifici dei Provider

I provider possono avere anche DTOs specifici che estendono `SmsData` con proprietà aggiuntive:

```php
class NetfunSmsData extends Data
{
    public string $recipient;    // Equivalente a 'to' in SmsData
    public string $message;      // Equivalente a 'body' in SmsData
    public string $sender;       // Equivalente a 'from' in SmsData
    public ?string $reference;   // Proprietà specifica di Netfun
    public ?string $scheduledDate; // Proprietà specifica di Netfun
}
```

## Adattamento tra SmsData e DTOs Specifici

Le azioni di provider devono sempre:

1. **Accettare `SmsData` nel metodo `execute()`**:
   ```php
   public function execute(SmsData $smsData): array
   ```

2. **Adattare internamente `SmsData` ai propri DTOs specifici** se necessario:
   ```php
   // All'interno di SendNetfunSMSAction
   $netfunData = new NetfunSmsData(
       recipient: $smsData->to,
       message: $smsData->body,
       sender: $smsData->from,
       reference: null,
       scheduledDate: null
   );
   ```

## Gestione delle Configurazioni

Le azioni devono recuperare le configurazioni specifiche del provider dal percorso corretto:

```php
// Configurazioni specifiche del provider
$token = config('sms.drivers.provider_name.token');

// Configurazioni globali a livello di root
$debug = config('sms.debug', false);
```

## Risultato dell'Esecuzione

Tutte le azioni devono restituire un array con almeno i seguenti campi:

```php
return [
    'success' => true|false,  // Successo o fallimento
    'message_id' => '...',    // ID del messaggio (se disponibile)
    'reference' => '...',     // Riferimento per il tracciamento
    // Altri campi specifici del provider...
];
```

## Gestione degli Errori

Tutte le azioni devono gestire correttamente gli errori:

1. Log appropriati degli errori
2. Lancio di eccezioni in caso di errori critici
3. Restituzione di un array con `'success' => false` in caso di errori non critici
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
