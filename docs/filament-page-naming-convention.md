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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 69fa7d37 (.)
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 69fa7d37 (.)
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> e2f1a4045 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9cf0dc90 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/Pages/*.php" | grep -v "Page.php$"
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
```

## Riferimenti

- [Filament Documentation](https://filamentphp.com/docs/3.x/panels/pages/getting-started)
- [PSR-4 Autoloading Standard](https://www.php-fig.org/psr/psr-4/)
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
