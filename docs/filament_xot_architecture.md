<<<<<<< HEAD
# Architettura Filament : Pattern XotBase

## Introduzione

<<<<<<< HEAD
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
<<<<<<< HEAD
<<<<<<< HEAD
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
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
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
=======
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
<main module> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
=======
SaluteOra utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
<nome progetto> utilizza un pattern architetturale fondamentale per l'integrazione con Filament: **non estendere mai direttamente** le classi Filament, ma utilizzare sempre le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)

Questo documento spiega in dettaglio i motivi architetturali, i vantaggi e l'implementazione di questo pattern.

## Pattern Architetturale

### Struttura delle Classi XotBase

```
Filament\Pages\Page
    ↑
    └── Modules\Xot\Filament\Pages\XotBasePage
        ↑
        └── Modules\Notify\Filament\Clusters\Test\Pages\YourCustomPage
```

### Principi Fondamentali

1. **Separazione degli Strati**: Le classi XotBase fungono da layer di astrazione tra il codice applicativo e il framework Filament
2. **Centralizzazione della Logica**: Funzionalità comuni vengono implementate una sola volta
3. **Uniformità del Codice**: Garanzia di comportamento coerente in tutti i moduli
4. **Estensibilità Controllata**: Possibilità di estendere Filament in modo centralizzato

## Vantaggi Architetturali

| Vantaggio | Descrizione | Impatto |
|-----------|-------------|---------|
| **Traduzione Automatica** | Il trait `TransTrait` fornisce funzionalità di traduzione standardizzate | Evita duplicazione di codice di traduzione in ogni pagina |
| **Gestione Form Integrata** | Implementazione del metodo `form()` e `getFormSchema()` | Standardizza la creazione dei form |
| **State Management** | Gestione dello stato via `$data` centralizzata | Comportamento coerente per tutti i dati dei form |
| **Routing Semplificato** | Logica di routing e generazione URL | Semplifica la navigazione tra le pagine |
| **Capacità Multi-tenant** | Supporto integrato per multi-tenancy | Separazione automatica dei dati per tenant |
| **Gestione Modelli** | Risoluzione automatica dei modelli tramite convenzioni | Riduce il codice boilerplate |

## Analisi Tecnica di XotBasePage

```php
abstract class XotBasePage extends Page implements HasForms
{
    use TransTrait;
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static string $view = 'job::filament.pages.job-monitor';
    protected static ?string $model = null;
    public ?array $data = [];

    // Traduzione automatica
    public static function getNavigationLabel(): string
    {
        return static::transFunc(__FUNCTION__);
    }

    // Form standardizzato
<<<<<<< HEAD
    public function form(Form $form): Form
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
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
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    // Schema form override nelle classi figlie
    protected function getFormSchema(): array
    {
        return [];
    }
}
```

## Conseguenze del Non Utilizzo

Il mancato utilizzo delle classi XotBase porta a:

1. **Inconsistenza del Codice**: Comportamenti diversi in diverse parti dell'applicazione
2. **Duplicazione**: La stessa logica viene implementata più volte
3. **Testing Difficoltoso**: Più punti da testare per la stessa funzionalità
4. **Manutenzione Complessa**: Modifiche al comportamento richiedono aggiornamenti in multiple location
5. **Incompatibilità con Multi-tenant**: Funzionalità tenant-aware non disponibili

## Casi d'Uso Pratici

### Traduzione Automatica

Prima (❌):
```php
// In ogni classe Page
public static function getNavigationLabel(): string
{
    return __('notify::pages.send_sms.navigation_label');
}
```

Dopo (✅):
```php
// Solo in XotBasePage, riutilizzato in tutte le classi
public static function getNavigationLabel(): string
{
    return static::transFunc(__FUNCTION__);
}
```

### Gestione Form Semplificata

Prima (❌):
```php
// In ogni classe Page
<<<<<<< HEAD
public function form(Form $form): Form
=======
<<<<<<< HEAD
<<<<<<< HEAD
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
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
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public function form(Form $form): Form
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
{
    return $form
        ->schema([
            // Schema specifico
        ])
        ->statePath('myCustomState');
}
```

Dopo (✅):
```php
// Solo override getFormSchema() nelle classi figlie
protected function getFormSchema(): array
{
    return [
        // Schema specifico
    ];
}
```

## Best Practices

1. **Mai estendere direttamente** le classi Filament, sempre utilizzare le classi XotBase
2. **Non duplicare metodi** già definiti in XotBase
3. **Seguire le convenzioni di naming** per beneficiare della risoluzione automatica
4. **Utilizzare la traduzione automatica** tramite le chiavi strutturate
5. **Implementare solo i metodi necessari** per la logica specifica della pagina

## Riferimenti

- [Filament Documentation](https://filamentphp.com/docs)
- [Laravel Architecture Patterns](https://laravel.com/docs/10.x/architecture)
- [DRY Principle](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself)
- [Wrapper Pattern](https://en.wikipedia.org/wiki/Decorator_pattern)

## Controllo Qualità

Per verificare che tutte le classi seguano questa regola:

```bash
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
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
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
=======
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
find /var/www/html/<directory progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "extends.*\\\\Filament\\\\Pages\\\\Page" {} \;
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
```

Le pagine che violano questa regola devono essere immediatamente corrette sostituendo l'estensione con la classe XotBase appropriata.
=======
>>>>>>> 301ad8b44 (.)
