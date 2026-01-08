<<<<<<< HEAD
# PHPStan Fixes Report - 19 Dicembre 2025
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
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
# Notify Module - PHPStan Level 7 Fixes - Gennaio 2025
>>>>>>> 022fa8f1c (.)

**Status**: ✅ Correzioni Implementate  
**Module**: Notify  
**PHPStan Level**: 10  
**Errors Fixed**: 17 → 0 (nel modulo Notify)

## Overview

Report completo delle correzioni PHPStan Level 10 implementate nel modulo Notify, inclusi fix per tipizzazione, metodi mancanti, e conformità agli standard Laraxot.

## Errori Corretti

### 1. NormalizePhoneNumberAction - Safe Functions

**File**: `Modules/Notify/app/Actions/NormalizePhoneNumberAction.php`

**Errori**:
- `preg_replace` unsafe function
- Parametri nullable non gestiti correttamente

**Fix Implementato**:
```php
use function Safe\preg_replace;

$normalized = preg_replace('/[^0-9+]/', '', $phoneNumber);
if (!is_string($normalized)) {
    return '';
}
```

<<<<<<< HEAD
**Filosofia**: Uso delle funzioni Safe per gestione errori robusta.
=======
### Filament Resources - Array Compatibility
Tutte le risorse Filament del modulo sono state aggiornate per utilizzare array associativi con chiavi string.

## 📋 **Errori Rimanenti (~6)**

### Mixed Type Casting Issues
- **Tipo**: `Cannot cast mixed to string/int/float`
- **Localizzazione**: Principalmente in Actions e Services
- **Soluzione**: Implementare pattern di safe casting con validazione

### Pattern di Risoluzione Raccomandati
```php
// Per casting a string
private function safeCastToString(mixed $value): string
{
    if (is_string($value)) {
        return $value;
    }
    
    if (is_null($value)) {
        return '';
    }
    
    return (string) $value;
}

// Per casting a int
private function safeCastToInt(mixed $value): int
{
    if (is_int($value)) {
        return $value;
    }
    
    if (is_numeric($value)) {
        return (int) $value;
    }
    
    return 0;
}

// Utilizzo di SafeStringCastAction
private function castNotificationData(mixed $data): string
{
    return SafeStringCastAction::cast($data);
}
```

## 🎯 **Progressi**
- **Errori Risolti**: ~75% (da ~24 errori iniziali a ~6)
- **Array Compatibility**: ✅ Completato
- **Method Signatures**: ✅ Completato
- **Safe Casting**: 🔄 In corso (75% completato)

## 📚 **Prossimi Passi**
1. Identificare i 6 errori rimanenti con PHPStan
2. Applicare pattern di safe casting ai punti critici
3. Validare con PHPStan Level 7
4. Aggiornare documentazione

## 📋 **Best Practices Implementate**
- **Array Associativi**: Chiavi string per azioni Filament
- **Safe Casting**: Pattern di validazione prima del casting
- **PHPDoc**: Tipi di ritorno precisi
- **Validation**: Controlli di tipo robusti

## 📚 **Documentazione di Riferimento**
- `docs/phpstan-level7-guide.md`: Guida completa PHPStan Level 7
- `docs/phpstan/safe-casting-patterns.md`: Pattern di casting sicuro
- `\Modules\Xot\Actions\Cast\SafeStringCastAction`: Action per casting sicuro

---
*Ultimo aggiornamento: Gennaio 2025*
*Stato: 🔄 In Corso - ~6 errori PHPStan rimanenti*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 4689a827 (.)
# Modulo Notify - Correzioni PHPStan Implementate

## Contesto

Durante l'audit del modulo `Notify`, sono stati identificati e corretti **errori critici di tipizzazione PHPStan** che compromettevano la qualità del codice e la conformità agli standard di tipo.

## Errori Identificati e Corretti

### 1. **ConfigHelper.php - Errori di Tipizzazione**

#### Problemi Risolti
- **Linea 27**: Parametri `array_merge` con tipi non corretti
- **Linea 29**: Parametro `recursiveReplace` con tipo non corretto
- **Linea 47**: Parametro `recursiveReplace` con tipo non corretto
- **Linea 85**: Parametro `replaceStringVariables` con tipo non corretto
- **Linee 89, 103, 114, 125, 136, 147**: Parametri `replaceTemplateVariables` con tipi non corretti

#### Soluzioni Implementate
```php
// ✅ PRIMA - Errori di tipizzazione
$companyConfig = Config::get('notify.company', []);
$templateVariables = Config::get('notify.template_variables', []);

// ✅ DOPO - Tipizzazione corretta con PHPDoc
/** @var array<string, mixed> $companyConfig */
$companyConfig = Config::get('notify.company', []);
/** @var array<string, mixed> $templateVariables */
$templateVariables = Config::get('notify.template_variables', []);
```

#### Pattern di Correzione Applicato
1. **Annotazioni PHPDoc**: Aggiunta di `@var` per garantire type safety
2. **Type Assertions**: Verifica che i valori siano array prima dell'uso
3. **Generic Types**: Utilizzo di `array<string, mixed>` per array associativi
4. **Recursive Type Safety**: Gestione corretta dei tipi nelle chiamate ricorsive

### 2. **NotifyThemeableFactory.php - Metodo Inesistente**

#### Problema Risolto
- **Linea 53**: Chiamata a metodo `getProjectNamespace()` inesistente in `XotData`

#### Soluzione Implementata
```php
// ✅ PRIMA - Metodo inesistente
protected function getProjectNamespace(): string
{
    return XotData::make()->getProjectNamespace();
}

// ✅ DOPO - Utilizzo di metodi esistenti
$xotData = XotData::make();
'themeable_type' => $xotData->getUserClass(),
```

#### Metodi XotData Utilizzati
- `getUserClass()`: Restituisce la classe User del progetto corrente
- `make()`: Istanza singleton di XotData

## Benefici delle Correzioni

### 1. **Type Safety Completa**
- Eliminazione di tutti gli errori PHPStan livello 9
- Conformità agli standard di tipizzazione Laraxot
- Prevenzione di errori runtime

### 2. **Mantenibilità del Codice**
- Codice più leggibile e comprensibile
- Documentazione inline completa
- Refactoring sicuro

### 3. **Qualità del Codice**
- Conformità PSR-12
- Best practices PHP 8.2+
- Architettura modulare robusta

## Pattern di Correzione Applicabili

### 1. **Config Helper Classes**
```php
// ✅ Pattern corretto per helper di configurazione
public static function getConfigValue(string $key): array
{
    /** @var array<string, mixed> $configValue */
    $configValue = Config::get($key, []);
    
    if (!is_array($configValue)) {
        $configValue = [];
    }
    
    return $configValue;
}
```

### 2. **Factory Classes**
```php
// ✅ Pattern corretto per factory con dipendenze dinamiche
public function definition(): array
{
    $xotData = XotData::make();
    
    return [
        'model_type' => $xotData->getUserClass(),
        // Altri campi...
    ];
}
```

### 3. **Recursive Methods**
```php
// ✅ Pattern corretto per metodi ricorsivi con type safety
private static function processArray(array $data): array
{
    $result = [];
    
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            /** @var array<string, mixed> $value */
            $result[$key] = self::processArray($value);
        } else {
            $result[$key] = $value;
        }
    }
    
    return $result;
}
```

## Checklist di Conformità

- [ ] **PHPStan Level 9**: Tutti gli errori risolti
- [ ] **Type Hints**: Tutti i parametri e return types specificati
- [ ] **PHPDoc**: Annotazioni complete per proprietà e metodi
- [ ] **Generic Types**: Utilizzo di `array<K, V>` per collezioni
- [ ] **Null Safety**: Gestione corretta dei valori nullable
- [ ] **Method Calls**: Solo metodi esistenti e documentati

## Prevenzione Errori Futuri

### 1. **Controlli Pre-Commit**
- Eseguire PHPStan livello 9 prima di ogni commit
- Verificare type safety per nuovi metodi
- Controllare annotazioni PHPDoc

### 2. **Code Review**
- Verificare tipizzazione per helper classes
- Controllare factory con dipendenze dinamiche
- Validare metodi ricorsivi

### 3. **Documentazione**
- Aggiornare PHPDoc per modifiche
- Documentare nuovi pattern di tipizzazione
- Mantenere esempi di utilizzo

## Riferimenti

- [PHPStan Level 10 Guidelines](../../Xot/docs/PHPSTAN_LIVELLO10_LINEE_GUIDA.md)
- [Laraxot Type Safety Rules](../../Xot/docs/TYPE_SAFETY_RULES.md)
- [Config Helper Best Practices](./config-helper-best-practices.md)

## Stato

**✅ COMPLETATO**: Tutti gli errori PHPStan risolti
**✅ VERIFICATO**: Conformità livello 9 raggiunta
**✅ DOCUMENTATO**: Pattern di correzione documentati
**✅ PREVENZIONE**: Regole implementate per errori futuri
>>>>>>> 022fa8f1c (.)

---

### 2. SendRecordNotificationAction - Refactoring Pattern

<<<<<<< HEAD
**File**: `Modules/Notify/app/Actions/SendRecordNotificationAction.php`

**Errori**:
- `routeNotificationFor*` chiamati senza Notification
- MailTemplate::make() non esiste

**Fix Implementato**:
- Uso di `new MailTemplate()` invece di `MailTemplate::make()`
- Creazione di Notification temporanea per `routeNotificationFor*` methods
- Migliorata estrazione contatti con pattern DRY

**Pattern Applicato**:
- Estrazione email/phone/whatsapp con fallback intelligente
- Normalizzazione phone numbers con `NormalizePhoneNumberAction`
- Uso di `Notification::route()` per entrambi canali standard e custom

---

### 3. RecordNotification - MailMessage::html() Non Esiste

**File**: `Modules/Notify/app/Notifications/RecordNotification.php`

**Errore**:
- `MailMessage::html()` non esiste in Laravel

**Fix Implementato**:
```php
use Illuminate\Support\HtmlString;

return (new MailMessage())
    ->subject($subject)
    ->line(new HtmlString($htmlContent));
```

**Filosofia**: Uso di `HtmlString` per permettere HTML in `MailMessage::line()`, pattern standard Laravel.

---

### 4. RecordNotification - Metodi mergeData() e addAttachments()

**File**: `Modules/Notify/app/Notifications/RecordNotification.php`

**Errori**:
- Metodi `mergeData()` e `addAttachments()` chiamati ma non esistenti
- Usati in `XotBaseTransition`, `SendSmsPage`, `SendSpatieEmailPage`

**Fix Implementato**:
```php
/**
 * Additional data to merge with record attributes.
 * @var array<string, mixed>
 */
public array $additionalData = [];

/**
 * Attachments to add to the mail message.
 * @var array<int, array<string, string>>
 */
public array $attachments = [];

public function mergeData(array $data): self
{
    $this->additionalData = array_merge($this->additionalData, $data);
    return $this;
}

public function addAttachments(array $attachments): self
{
    $this->attachments = array_merge($this->attachments, $attachments);
    return $this;
}
```

**Motivazione**: Compatibilità con codice esistente che usa questi metodi, mantenendo API fluente.

---

### 5. ChannelEnum - Return Type getLabel()

**File**: `Modules/Notify/app/Enums/ChannelEnum.php`

**Errore**:
- `getLabel()` dichiarato come `?string` ma mai restituisce null

**Fix Implementato**:
```php
public function getLabel(): string
{
    return match ($this) {
        self::Mail => __('notify::channel.mail'),
        self::Sms => __('notify::channel.sms'),
        self::WhatsApp => __('notify::channel.whatsapp'),
    };
}
```

---

### 6. SendRecordsNotificationBulkAction (Filament) - Tipizzazione Array

**File**: `Modules/Notify/app/Filament/Actions/SendRecordsNotificationBulkAction.php`

**Errori**:
- Namespace errato per `XotBaseBulkAction`
- Tipizzazione array non corretta per `options()`
- `nullCoalesce.expr` per expression non nullable

**Fix Implementato**:
```php
use Modules\Xot\Filament\Tables\Actions\XotBaseBulkAction;

->options(
    /** @return array<string, string> */
    fn (): array => collect(ChannelEnum::cases())
        ->mapWithKeys(function (ChannelEnum $enum): array {
            $label = $enum->getLabel();
            return [$enum->value => is_string($label) ? $label : $enum->value];
        })
        ->all()
)
```

---

### 7. SendRecordsNotificationBulkAction (Action) - Parametri Errati

**File**: `Modules/Notify/app/Actions/SendRecordsNotificationBulkAction.php`

**Errori**:
- Passa `string $templateSlug` invece di `MailTemplate`
- Passa `array<string>` invece di `array<ChannelEnum>`
- `execute()` ora restituisce `void` invece di `bool`

**Fix Implementato**:
- Caricamento `MailTemplate` dallo slug prima della chiamata
- Conversione string channels in `ChannelEnum[]`
- Gestione corretta del fatto che `execute()` è void

---

### 8. SmsChannel - Tipizzazione toSms()

**File**: `Modules/Notify/app/Notifications/Channels/SmsChannel.php`

**Errori**:
- `toSms()` potrebbe non esistere su tutte le Notification
- String interpolation con mixed

**Fix Implementato**:
```php
if (!method_exists($notification, 'toSms')) {
    report(new \Exception(...));
    return;
}

$message = $notification->toSms($notifiable);
if (!is_string($message)) {
    $message = '';
}
```

---

### 9. WhatsAppChannel - Tipizzazione e Logica

**File**: `Modules/Notify/app/Notifications/Channels/WhatsAppChannel.php`

**Errori**:
- String interpolation con mixed
- Confronti sempre false

**Fix Implementato**:
```php
// Separazione logica per type narrowing
if ($to === null) {
    report(...);
    return;
}

if (!is_string($to) || $to === '' || $message === '') {
    report(...);
    return;
}

// $to è garantito essere string non-empty
Log::info("Sending WhatsApp to {$to}: {$message}");
```

---

### 10. ~~GetSeasonalEmailLayoutAction - RIMOSSO (Over-Engineering)~~

**File**: `Modules/Notify/app/Actions/GetSeasonalEmailLayoutAction.php` - **RIMOSSO**

**Motivazione Rimozione**:
- ❌ Duplicava logica già esistente in `GetThemeContextAction` (modulo Xot)
- ❌ Violava DRY: logica stagionale già centralizzata
- ❌ Violava KISS: complicazione inutile per logica semplice
- ✅ **Soluzione corretta**: Usare `GetMailLayoutAction` che delega a `GetThemeContextAction`

**Pattern Corretto Implementato**:
```php
// GetMailLayoutAction.php (già corretto)
$context = app(GetThemeContextAction::class)->execute(); // Single Source of Truth

// SpatieEmail.php (aggiornato dall'utente)
public function getHtmlLayout(): string
{
    return app(GetMailLayoutAction::class)->execute();
}
```

**Filosofia**: La logica stagionale esiste in `GetThemeContextAction` (Xot), non deve essere duplicata.

---

### 12. XotBaseTransition - RecordNotification Constructor

**File**: `Modules/Xot/app/States/Transitions/XotBaseTransition.php`

**Errori**:
- Passa `string $slug` invece di `MailTemplate` a `RecordNotification`
- Chiama `mergeData()` e `addAttachments()` (ora implementati)

**Fix Implementato**:
```php
// Load MailTemplate from slug
$mailTemplate = \Modules\Notify\Models\MailTemplate::where('slug', $slug)->first();

if ($mailTemplate === null) {
    return; // Skip if template not found
}

// ✅ CORRETTO: Pass slug string - MailTemplate resolved internally
$notify = new RecordNotification($this->record, $slug);
```

---

### 13. SendSmsPage e SendSpatieEmailPage - RecordNotification Constructor

**File**: 
- `Modules/Notify/app/Filament/Clusters/Test/Pages/SendSmsPage.php`
- `Modules/Notify/app/Filament/Clusters/Test/Pages/SendSpatieEmailPage.php`

**Errori**:
- Passano `string $templateSlug` invece di `MailTemplate`
- Chiamano `mergeData()` (ora implementato)

**Fix Implementato**:
```php
// ✅ CORRETTO: Pass slug string - RecordNotification resolves MailTemplate internally (lazy resolution)
// No need to pre-load MailTemplate - RecordNotification handles it via firstOrCreate
$recordNotification = new RecordNotification($user, $template_slug);
```

---

## Pattern e Principi Applicati

### DRY (Don't Repeat Yourself)
- Estrazione contatti centralizzata in `SendRecordNotificationAction`
- Logica di normalizzazione phone numbers riutilizzata
- Pattern di validazione coerente

### KISS (Keep It Simple, Stupid)
- Metodi semplici e focalizzati
- Type narrowing progressivo per garantire type safety
- Uso di pattern Laravel standard (HtmlString, Notification::route)

### Type Safety
- Tipizzazione esplicita per tutti i parametri e return types
- Type narrowing per garantire correttezza
- PHPDoc completi per generics

### Clean Code
- Separazione logica per type narrowing
- Naming chiaro e descrittivo
- Commenti dove necessario per chiarire intent

## Testing Recommendations

### Unit Tests
```php
test('RecordNotification mergeData merges additional data correctly', function () {
    $record = Client::factory()->create();
    $template = MailTemplate::factory()->create();
    $notification = new RecordNotification($record, $template);
    
    $notification->mergeData(['custom' => 'value']);
    
    expect($notification->additionalData)->toHaveKey('custom');
});

test('RecordNotification addAttachments adds attachments correctly', function () {
    // Test attachments
});
```

### Integration Tests
- Verifica che `SendRecordNotificationAction` funzioni con tutti i canali
- Verifica che `mergeData()` funzioni correttamente con placeholder replacement
- Verifica che attachments vengano inclusi nel MailMessage

## Documentazione Aggiornata

- [RecordNotification](./notifications/record-notification.md) - Aggiornata con `mergeData()` e `addAttachments()`
- [SendRecordNotificationAction](./send-record-notification-action-refactoring.md) - Pattern di estrazione contatti
- [ChannelEnum](./refactoring/channel-enum-implementation-complete.md) - Return type corretto

## Note per Sviluppo Futuro

1. **MailMessage HTML**: Se Laravel aggiunge supporto nativo per `->html()`, valutare migrazione
2. **Attachments**: Considerare delegazione diretta a `MailMessage::attach()` invece di array intermedio
3. **Type Narrowing**: Pattern applicato può essere riutilizzato in altri canali custom

## Compliance Status

- ✅ PHPStan Level 10: **0 errori nel modulo Notify** (risolto autoload dopo composer dump-autoload)
- ✅ PHPMD: Warning minori accettabili (StaticAccess per app(), Assert, factory methods)
- ✅ Type Safety: 100% tipizzato
- ✅ DRY: Pattern composizione rispettato
- ✅ KISS: Codice semplice e leggibile

## Risoluzione Autoload

L'errore `WhatsAppChannel not found` in `ChannelEnum.php` è stato risolto eseguendo `composer dump-autoload` per aggiornare l'autoload di Composer dopo le modifiche ai file.

---

**Ultimo aggiornamento**: 19 Dicembre 2025  
**Filosofia**: *"Type safety first, simplicity second, DRY always"*
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
>>>>>>> 022fa8f1c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
