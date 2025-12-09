<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
<<<<<<< HEAD
>>>>>>> 9777d1b3 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
- [Documentazione Traduzioni](../../Lang/project_docs/)
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
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> 5fe4f466 (.)
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
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
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
>>>>>>> 207ac35e (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 9777d1b3 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 9777d1b3 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 161887a2 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> ba564870 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
>>>>>>> bb00ab64 (rebase 210)

---

=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> 2a97406c (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> 4f042b88 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> 36321fcb (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> 712617d3 (.)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> eb62d6cf (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
<<<<<<< HEAD
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)
=======
>>>>>>> d284d65 (.)

---

>>>>>>> 8c8937e7 (rebase 210)
=======
- [Documentazione Traduzioni](../../Lang/docs/)
- [Documentazione Traduzioni](../../Lang/project_docs/)
- [Documentazione Traduzioni](../../Lang/docs/)- [Documentazione Traduzioni](../../Lang/project_docs/)

---

>>>>>>> 36ac4fc1 (.)
