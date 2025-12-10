<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Convenzioni dei Path in Laravel e 

## Regole Fondamentali per i Path di Cartelle

In Laravel e , i nomi delle cartelle principali (come definite nella struttura standard di Laravel) **DEVONO** rispettare il caso specifico definito dalle convenzioni di Laravel.
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
# Convenzioni dei Path in Laravel e SaluteOra

## Regole Fondamentali per i Path di Cartelle

In Laravel e SaluteOra, i nomi delle cartelle principali (come definite nella struttura standard di Laravel) **DEVONO** rispettare il caso specifico definito dalle convenzioni di Laravel.

## Cartelle Standard di Laravel e loro Casing Corretto

| Nome Cartella  | Caso Corretto | Caso Errato     |
|----------------|---------------|-----------------|
| `app`          | lowercase     | `App`           |
| `bootstrap`    | lowercase     | `Bootstrap`     |
| `config`       | lowercase     | `Config`        |
| `database`     | lowercase     | `Database`      |
| `public`       | lowercase     | `Public`        |
| `resources`    | lowercase     | `Resources`     |
| `routes`       | lowercase     | `Routes`        |
| `storage`      | lowercase     | `Storage`       |
| `tests`        | lowercase     | `Tests`         |
| `vendor`       | lowercase     | `Vendor`        |

## Convenzioni per le Viste

Le viste in Laravel devono essere collocate nella cartella `resources/views` (lowercase):

```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
>>>>>>> 75179b855 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> d09cb759 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> 4689a827 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> 7325acf3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> f2e64178 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/resources/views/
>>>>>>> a29a4728 (.)
```

**NON** in:

```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
>>>>>>> 75179b855 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> d09cb759 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/Resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> 4689a827 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/Resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> 7325acf3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/Resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> f2e64178 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
/var/www/html/<nome progetto>/laravel/Modules/Notify/Resources/views/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/Resources/views/
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/Resources/views/
>>>>>>> a29a4728 (.)
```

## Perché è Importante

1. **Compatibilità cross-platform**: Linux è case-sensitive per i filesystem mentre Windows e macOS possono non esserlo
2. **Coerenza con il framework**: Seguire le convenzioni di Laravel garantisce compatibilità con tool e utility
3. **Prevedibilità**: Path consistenti rendono più facile il debug e la manutenzione
4. **Automazione**: Gli strumenti di CI/CD e build tools spesso si aspettano la struttura standard

## Regole per i Path nei File PHP

Quando si fa riferimento a viste nei file PHP:

```php
// CORRETTO
protected static string $view = 'notify::filament.pages.send-sms';

// Il path fisico corrispondente sarà:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
=======
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> 75179b855 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> d09cb759 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
=======
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> a404ea71 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> 4689a827 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
=======
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> ca10d6ad (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> 7325acf3 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
=======
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> febe79e3 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> f2e64178 (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
=======
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/<nome progetto>/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
// /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
// /var/www/html/saluteora/laravel/Modules/Notify/resources/views/filament/pages/send-sms.blade.php
>>>>>>> a29a4728 (.)
```

## Verifica e Correzione

Per verificare che tutti i path siano corretti:

1. Controllare che le cartelle abbiano il caso corretto
2. Controllare i riferimenti alle viste nei file PHP
3. Se necessario, rinominare le cartelle con il caso corretto
4. Aggiornare i ServiceProvider se spostano le cartelle

## Riferimenti

- [Struttura delle Cartelle in Laravel](https://laravel.com/docs/structure)
- [Laravel Blade Templates](https://laravel.com/docs/blade)
- [Laravel Modules](https://docs.laravelmodules.com/)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> f2e64178 (.)
