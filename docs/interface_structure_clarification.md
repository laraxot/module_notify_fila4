<<<<<<< HEAD
# Chiarimento sulla Struttura delle Interfacce 

## Struttura Corretta per le Interfacce SMS

, le interfacce per le azioni SMS seguono questa struttura:

```
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a55aa5e96 (.)
```

Con il namespace corrispondente:

```php
namespace Modules\Notify\Contracts\SMS;
```

## Implementazione nelle Classi

Tutte le classi di azione SMS devono implementare questa interfaccia:

```php
use Modules\Notify\Contracts\SMS\SmsActionContract;

final class SendNetfunSMSAction implements SmsActionContract
{
    // Implementazione...
}
```

## Nota sulla Discrepanza nella Documentazione

Si noti che esiste una discrepanza nella documentazione del progetto:

1. **PATH_AND_INTERFACE_RULES.md** indica che le interfacce dovrebbero essere nella directory principale `Contracts` e non in sottodirectory.
2. **SMS_ACTIONS.md** indica che le interfacce SMS sono definite in `app/Contracts/SMS/`.

**La struttura corretta e funzionante è quella indicata in SMS_ACTIONS.md**, con le interfacce SMS posizionate nella sottodirectory `Contracts/SMS/`.

## Convenzioni di Naming

Indipendentemente dalla posizione, tutte le interfacce  devono seguire queste convenzioni di naming:

1. Utilizzare il suffisso `Contract` e non `Interface`
2. Seguire il pattern PascalCase
3. Essere descrittive del loro scopo

## Verifica dell'Implementazione Corretta

Per verificare che una classe implementi correttamente l'interfaccia:

```php
// Nella Factory
if (!($instance instanceof SmsActionContract)) {
    throw new Exception("Class {$className} does not implement SmsActionContract.");
}
```
=======
>>>>>>> 301ad8b44 (.)
