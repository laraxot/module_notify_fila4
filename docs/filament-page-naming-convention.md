<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> c7a4727b (.)
```

## Riferimenti

- [Filament Documentation](https://filamentphp.com/docs/3.x/panels/pages/getting-started)
- [PSR-4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
