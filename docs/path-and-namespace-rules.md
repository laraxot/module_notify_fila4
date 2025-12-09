# Regole per Path e Namespace nel Modulo Notify

> **ATTENZIONE:** In nessun caso il namespace deve contenere il segmento `App`, anche se il file si trova nella cartella `app/`. Questa è una regola fondamentale e ogni violazione può causare errori di autoloading, incompatibilità con PSR-4 e problemi di coerenza nel progetto. Consulta sempre questa sezione prima di creare nuovi file o correggere errori di namespace.

## Struttura Corretta dei Path

### ✅ Path Corretti

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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Providers
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Models
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Filament
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Models
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Filament
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers
/var/www/html/saluteora/laravel/Modules/Notify/app/Models
/var/www/html/saluteora/laravel/Modules/Notify/app/Filament
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Models
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Filament
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Http/Controllers
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Providers
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Models
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Filament
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
```

### ❌ Path Errati

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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Providers
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Providers
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Providers
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Providers
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/<nome progetto>/laravel/Modules/Notify/App/Providers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/App/Providers
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/App/Actions/SMS
/var/www/html/saluteora/laravel/Modules/Notify/App/Http/Controllers
/var/www/html/saluteora/laravel/Modules/Notify/App/Providers
>>>>>>> f963d2c0 (.)
```

## Struttura Corretta dei Namespace

### ✅ Namespace Corretti

```php
namespace Modules\Notify\Actions\SMS;
namespace Modules\Notify\Http\Controllers;
namespace Modules\Notify\Providers;
namespace Modules\Notify\Models;
namespace Modules\Notify\Filament;
namespace Modules\Notify\Datas;
```

### ❌ Namespace Errati

```php
namespace Modules\Notify\App\Actions\SMS;
namespace Modules\Notify\App\Http\Controllers;
namespace Modules\Notify\App\Providers;
namespace Modules\Notify\App\Datas;
```

## Regola Fondamentale

**Il namespace NON deve mai contenere il segmento `App`.** Anche se i file sono fisicamente posizionati nella cartella `app` (minuscolo), il namespace deve partire da `Modules\Notify\` seguito dalla sottocartella, senza mai includere `App`.

## Esempi Concreti

### Esempio 1: Action per invio SMS

**Path fisico corretto:**
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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SendNetfunSmsAction.php
>>>>>>> f963d2c0 (.)
```

**Namespace corretto:**
```php
namespace Modules\Notify\Actions\SMS;
```

### Esempio 2: Controller

**Path fisico corretto:**
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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Http/Controllers/NotificationController.php
>>>>>>> f963d2c0 (.)
```

**Namespace corretto:**
```php
namespace Modules\Notify\Http\Controllers;
```

### Esempio 3: Provider

**Path fisico corretto:**
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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Providers/NotifyServiceProvider.php
>>>>>>> f963d2c0 (.)
```

**Namespace corretto:**
```php
namespace Modules\Notify\Providers;
```

### Esempio 4: Data per SMS Netfun

**Path fisico corretto:**
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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSMSMessage.php
>>>>>>> f963d2c0 (.)
```

**Namespace corretto:**
```php
namespace Modules\Notify\Datas;
```

**❌ Namespace errato:**
```php
namespace Modules\Notify\App\Datas;
```

> **Nota:** Questa regola si applica a tutte le sottocartelle di `app`, incluse `Datas`, `Filament`, ecc. Il segmento `App` non deve mai comparire nel namespace.

## Motivo di questa Regola

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto <nome progetto>.
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto .
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 75179b85 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> f963d2c0 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 31f5d28f (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 31f5d28f (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto .
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto <nome progetto>.
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> a404ea71 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto .
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 75179b85 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> a404ea71 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto .
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 75179b85 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> a404ea71 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto .
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> 75179b85 (.)
=======
Questa struttura di namespace mantiene compatibilità con la convenzione di Laravel e il sistema di moduli Nwidart, anche se i file sono fisicamente organizzati in modo diverso. Questo approccio è stato adottato per standardizzare i namespace in tutto il progetto SaluteOra.
>>>>>>> f963d2c0 (.)

## Esempio per Datas

### ❌ Namespace Errato
```php
namespace Modules\Notify\App\Datas; // ERRATO
```

### ✅ Namespace Corretto
```php
namespace Modules\Notify\Datas; // CORRETTO
```

> **Attenzione:** Anche se il file si trova in `app/Datas`, il namespace NON deve includere `App`. Seguire sempre la forma `Modules\<NomeModulo>\Datas`.

## Collegamento alle Regole Generali

Per le regole generali e condivise tra tutti i moduli, consulta anche:
- [Regole generali per i namespace (Xot)](../../Xot/docs/NAMESPACE-RULES.md): linee guida ufficiali e motivazioni delle scelte di struttura dei namespace nei moduli Laraxot.

## Collegamenti

- [Regole Generali per i Namespace](/laravel/Modules/Xot/docs/NAMESPACE-RULES.md)
- [Convenzioni di Codice](/laravel/Modules/Xot/docs/CODE-CONVENTIONS.md)
- [Struttura dei Moduli](/laravel/Modules/Xot/docs/MODULE-STRUCTURE.md)
- [Collegamento Bidirezionale: Documentazione Root](../../../../docs/links.md)

### Esempio 5: Console Command

**Path fisico corretto:**
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
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Console/Commands/AnalyzeTranslationFiles.php
>>>>>>> f963d2c0 (.)
```

**Namespace corretto:**
```php
namespace Modules\Notify\Console\Commands;
```

**❌ Namespace errato:**
```php
namespace Modules\Notify\App\Console\Commands;
```

> **Nota:** Anche per i comandi console, il namespace non deve mai includere il segmento `App`.

---

*Ultimo aggiornamento: 2025-05-12*
