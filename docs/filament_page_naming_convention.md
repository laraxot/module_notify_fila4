<<<<<<< HEAD
# Convenzioni di Naming per Pagine Filament

## Regola Fondamentale

**Tutte** le classi situate in una cartella `Pages` di Filament **DEVONO** terminare con il suffisso `Page`.

## Struttura Corretta

### Percorso File
- ✅ CORRETTO: `Modules/Notify/app/Filament/Clusters/Test/Pages/SendFirebasePushNotificationPage.php`
- ❌ ERRATO: `Modules/Notify/app/Filament/Clusters/Test/Pages/SendFirebasePushNotification.php`

### Nome Classe
- ✅ CORRETTO: `class SendFirebasePushNotificationPage extends Page`
- ❌ ERRATO: `class SendFirebasePushNotification extends Page`

## Motivazione

1. **Coerenza**: Mantenere coerenza con le convenzioni di Filament.
2. **Chiarezza**: Il suffisso `Page` indica chiaramente che si tratta di una pagina Filament.
3. **Compatibilità PSR**: Rispetto delle convenzioni di naming PSR-4.
4. **Evitare Conflitti**: Previene potenziali conflitti di naming con altre classi.

## Esempi Corretti

```php
// Modules/Notify/app/Filament/Clusters/Test/Pages/SendSMSPage.php
namespace Modules\Notify\Filament\Clusters\Test\Pages;

use Filament\Pages\Page;

class SendSMSPage extends Page
{
    // ...
}
```

## Regole Aggiuntive

1. **Navigazione**: Il titolo della navigazione può omettere "Page" per leggibilità.
2. **URL**: L'URL generato sarà basato sul nome della classe senza "Page" (snake-case).
3. **Traduzione**: Le chiavi di traduzione devono seguire lo stesso pattern della classe.

## Avvertenza

Le pagine con nomi non conformi potrebbero:
- Non essere riconosciute correttamente dal sistema di routing
- Causare problemi con l'autoloading
- Creare conflitti con altre convenzioni di naming

## Come Verificare

Eseguire il seguente comando per trovare pagine non conformi:

```bash
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
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
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
=======
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
find /var/www/html/<directory progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
```

## Riferimenti

- [Filament Documentation](https://filamentphp.com/docs/3.x/panels/pages/getting-started)
- [PSR-4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/)
=======
>>>>>>> 301ad8b44 (.)
