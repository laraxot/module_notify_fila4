<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
# Risoluzione Conflitto SmsDriverEnum

## Problema Identificato

Il file `Modules/Notify/app/Enums/SmsDriverEnum.php` presenta conflitti Git complessi relativi a:

1. **Linea 6**: Import di interfacce Filament vs nessun import
2. **Linea 20**: Implementazione di interfacce vs implementazione base
3. **Linea 30**: Metodi di interfaccia vs metodi statici
4. **Linea 34**: Trait TransTrait vs implementazione manuale

## Analisi del Conflitto

### Conflitto 1 (Linea 6) - Import Interfacce
```php
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;

```

### Conflitto 2 (Linea 20) - Implementazione Interfacce
```php
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
enum SmsDriverEnum: string
{
```

### Conflitto 3 (Linea 30) - Metodi vs Metodi Statici
```php
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class,$this->value.'.color');

    }

    public function getIcon(): string
    {
        return $this->transClass(self::class,$this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
    
    /**
     * Restituisce le opzioni per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function options(): array
    {
        return [
            self::SMSFACTOR->value => 'SMSFactor',
            self::TWILIO->value => 'Twilio',
            self::NEXMO->value => 'Nexmo',
            self::PLIVO->value => 'Plivo',
            self::GAMMU->value => 'Gammu',
            self::NETFUN->value => 'Netfun',
        ];
    }
    
    /**
     * Restituisce le etichette localizzate per il componente Select di Filament
     * 
     * @return array<string, string>
     */
    public static function labels(): array
    {
        return [
            self::SMSFACTOR->value => __('notify::sms.drivers.smsfactor'),
            self::TWILIO->value => __('notify::sms.drivers.twilio'),
            self::NEXMO->value => __('notify::sms.drivers.nexmo'),
            self::PLIVO->value => __('notify::sms.drivers.plivo'),
            self::GAMMU->value => __('notify::sms.drivers.gammu'),
            self::NETFUN->value => __('notify::sms.drivers.netfun'),
        ];
    }
    
    /**
     * Verifica se un driver è supportato
     * 
     * @param string $driver
     * @return bool
     */
    public static function isSupported(string $driver): bool
    {
```

## Soluzione Implementata

### Criteri di Risoluzione

1. **Funzionalità Filament**: Mantenere l'implementazione delle interfacce Filament
2. **Trait TransTrait**: Utilizzare il trait per la gestione delle traduzioni
3. **Metodi di Istanza**: Preferire metodi di istanza per coerenza con Filament
4. **Manutenibilità**: Mantenere la struttura esistente del progetto

### Risoluzione Applicata

#### Scelta: Versione HEAD (Interfacce Filament + TransTrait)

**Motivazione**:
- Le interfacce Filament sono necessarie per l'integrazione con Filament
- Il trait TransTrait fornisce funzionalità di traduzione centralizzate
- I metodi di istanza sono coerenti con il pattern Filament
- Mantiene la struttura esistente del progetto

#### Risoluzione Dettagliata

```php
// PRIMA (conflitto 1)
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;


// DOPO (risolto)
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;
use Modules\Xot\Filament\Traits\TransTrait;
```

```php
// PRIMA (conflitto 2)
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
enum SmsDriverEnum: string
{

// DOPO (risolto)
enum SmsDriverEnum: string implements HasLabel, HasIcon, HasColor
{
    use TransTrait;
```

```php
// PRIMA (conflitto 3)
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class,$this->value.'.color');

    }

    public function getIcon(): string
    {
        return $this->transClass(self::class,$this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
    // Metodi statici...

// DOPO (risolto)
    public function getLabel(): string
    {
        return $this->transClass(self::class,$this->value.'.label');
    }

    public function getColor(): string
    {
        return $this->transClass(self::class,$this->value.'.color');

    }

    public function getIcon(): string
    {
        return $this->transClass(self::class,$this->value.'.icon');
    }

    public function getDescription(): string
    {
        return $this->transClass(self::class,$this->value.'.description');
```

## Giustificazione Tecnica

### Perché le interfacce Filament?

1. **Integrazione Filament**: Necessarie per il funzionamento con Filament
2. **Coerenza**: Mantiene la coerenza con altri enum del progetto
3. **Funzionalità**: Fornisce metodi standardizzati per label, color e icon
4. **Estensibilità**: Permette estensioni future

### Perché il trait TransTrait?

1. **Centralizzazione**: Gestisce le traduzioni in modo centralizzato
2. **Riutilizzabilità**: Evita duplicazione di codice
3. **Consistenza**: Mantiene coerenza con altri componenti
4. **Manutenibilità**: Facilita la manutenzione delle traduzioni

### Impatto

- ✅ Mantenimento dell'integrazione Filament
- ✅ Utilizzo del sistema di traduzioni centralizzato
- ✅ Coerenza con la struttura del progetto
- ✅ Preservazione della funzionalità esistente

## Collegamenti Correlati

- [Notify Module](../README.md)
- [SMS Configuration](../sms-configuration.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> a404ea71 (.)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> 75179b85 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> a404ea71 (.)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> 75179b85 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> a404ea71 (.)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> 75179b85 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> a404ea71 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> ca10d6ad (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> febe79e3 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> a29a4728 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9721a5b2 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 1442e291 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f9ec4f86 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> cccb594f (.)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> c8b1c8bf (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Translation Standards](../../Lang/project_docs/translation-standards.md)
- [Filament Integration](../../Xot/project_docs/filament-translations.md)
>>>>>>> 75179b85 (.)
=======
- [Translation Standards](../../Lang/docs/translation-standards.md)
- [Filament Integration](../../Xot/docs/filament-translations.md)
>>>>>>> f963d2c0 (.)

## Note per Sviluppatori Futuri

1. **Interfacce Filament**: Mantenere sempre le interfacce per enum Filament
2. **TransTrait**: Utilizzare il trait per la gestione delle traduzioni
3. **Metodi di Istanza**: Preferire metodi di istanza per enum Filament
4. **Consistenza**: Seguire sempre la struttura esistente del progetto

## Data Risoluzione

- **Data**: Gennaio 2025
- **Modulo**: Notify
- **File**: `app/Enums/SmsDriverEnum.php`
- **Tipo Conflitto**: Implementazione interfacce e trait
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 75179b85 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 75179b85 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 75179b85 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> c8b1c8bf (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 9cf0dc90 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> 75179b85 (.)
=======
- **Scelta**: Versione HEAD (interfacce Filament + TransTrait) 
>>>>>>> f963d2c0 (.)
