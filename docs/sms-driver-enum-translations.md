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
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
# Traduzioni SmsDriverEnum - Modulo Notify

## Panoramica

Il `SmsDriverEnum` utilizza il `TransTrait` per gestire automaticamente le traduzioni dei driver SMS supportati. Questo permette di avere etichette, colori, icone e descrizioni localizzate per ogni provider SMS.

## Struttura Enum

```php
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
    
    case SMSFACTOR = 'smsfactor';
    case TWILIO = 'twilio';
    case NEXMO = 'nexmo';
    case PLIVO = 'plivo';
    case GAMMU = 'gammu';
    case NETFUN = 'netfun';
    case AGILETELECOM = 'agiletelecom';
}
```

## Metodi di Traduzione

L'enum implementa i seguenti metodi che utilizzano il `TransTrait`:

```php
public function getLabel(): string
{
    return $this->transClass(self::class, $this->value . '.label');
}

public function getColor(): string
{
    return $this->transClass(self::class, $this->value . '.color');
}

public function getIcon(): string
{
    return $this->transClass(self::class, $this->value . '.icon');
}

public function getDescription(): string
{
    return $this->transClass(self::class, $this->value . '.description');
}
```

## File di Traduzione

Le traduzioni sono gestite tramite il file `sms_driver_enum.php` in ogni lingua:

### Struttura File
```
laravel/Modules/Notify/lang/
├── it/sms_driver_enum.php
├── en/sms_driver_enum.php
└── de/sms_driver_enum.php
```

### Formato Traduzioni

Ogni driver ha la seguente struttura:

```php
'smsfactor' => [
    'label' => 'SMSFactor',
    'color' => 'primary',
    'icon' => 'heroicon-o-device-phone-mobile',
    'description' => 'Provider SMS francese con API REST e supporto per messaggi bulk',
],
```

## Driver Supportati

### 1. SMSFactor
- **Label**: SMSFactor
- **Color**: primary
- **Icon**: heroicon-o-device-phone-mobile
- **Description**: Provider SMS francese con API REST e supporto per messaggi bulk

### 2. Twilio
- **Label**: Twilio
- **Color**: success
- **Icon**: heroicon-o-chat-bubble-left-right
- **Description**: Piattaforma cloud per comunicazioni con API robuste e documentazione completa

### 3. Nexmo (Vonage)
- **Label**: Nexmo (Vonage)
- **Color**: warning
- **Icon**: heroicon-o-globe-alt
- **Description**: Provider globale per SMS e comunicazioni con copertura internazionale

### 4. Plivo
- **Label**: Plivo
- **Color**: info
- **Icon**: heroicon-o-phone
- **Description**: Piattaforma per comunicazioni vocali e SMS con API semplici

### 5. Gammu
- **Label**: Gammu
- **Color**: secondary
- **Icon**: heroicon-o-cpu-chip
- **Description**: Libreria open source per gestione modem GSM e invio SMS

### 6. Netfun
- **Label**: Netfun
- **Color**: danger
- **Icon**: heroicon-o-bolt
- **Description**: Provider italiano per SMS con supporto per messaggi promozionali e transazionali

### 7. Agile Telecom
- **Label**: Agile Telecom
- **Color**: gray
- **Icon**: heroicon-o-truck
- **Description**: Provider italiano per servizi di telecomunicazioni e SMS

## Utilizzo in Filament

L'enum può essere utilizzato direttamente nei componenti Filament:

```php
use Modules\Notify\Enums\SmsDriverEnum;

// In un form
Select::make('driver')
    ->options(SmsDriverEnum::class)
    ->required();

// In una tabella
TextColumn::make('driver')
    ->formatStateUsing(fn (SmsDriverEnum $state) => $state->getLabel())
    ->color(fn (SmsDriverEnum $state) => $state->getColor())
    ->icon(fn (SmsDriverEnum $state) => $state->getIcon());
```

## Chiavi di Traduzione

Il `TransTrait` genera automaticamente le seguenti chiavi:

- `Modules\Notify\Enums\SmsDriverEnum::smsfactor.label`
- `Modules\Notify\Enums\SmsDriverEnum::smsfactor.color`
- `Modules\Notify\Enums\SmsDriverEnum::smsfactor.icon`
- `Modules\Notify\Enums\SmsDriverEnum::smsfactor.description`

## Aggiunta Nuovi Driver

Per aggiungere un nuovo driver:

1. **Aggiungere il case nell'enum**:
```php
case NUOVO_DRIVER = 'nuovo_driver';
```

2. **Aggiungere le traduzioni** in tutti i file di lingua:
```php
'nuovo_driver' => [
    'label' => 'Nuovo Driver',
    'color' => 'primary',
    'icon' => 'heroicon-o-star',
    'description' => 'Descrizione del nuovo driver',
],
```

3. **Aggiornare la configurazione** in `config/sms.php` se necessario

## Verifica Traduzioni

Per verificare che tutte le traduzioni siano presenti:

```bash

# Verifica sintassi PHP
php -l laravel/Modules/Notify/lang/it/sms_driver_enum.php
php -l laravel/Modules/Notify/lang/en/sms_driver_enum.php
php -l laravel/Modules/Notify/lang/de/sms_driver_enum.php
```

## Collegamenti

- [SmsDriverEnum](../app/Enums/SmsDriverEnum.php)
- [TransTrait](../../Xot/app/Traits/TransTrait.php)
- [Configurazione SMS](../config/sms.php)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)

---

<<<<<<< HEAD
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
>>>>>>> b85076e48 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
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
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)

---

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
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
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 66453ace (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
- [Documentazione Traduzioni](../../Lang/docs/)

---

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
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
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
<<<<<<< HEAD
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
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
