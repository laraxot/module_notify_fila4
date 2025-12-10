<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Standard di Struttura nel Modulo Notify

## Directory Principali e Convenzioni di Denominazione

| Directory | Scopo | Esempio Classe |
|-----------|-------|----------------|
| `app/Datas/` | **Data Transfer Objects** (usati per trasferire dati tra componenti) | `NetfunSmsData.php` |
| `app/Actions/` | **Azioni** (business logic, usano Spatie Queueable Action) | `SendNetfunSMSAction.php` |
| `app/Services/` | **Servizi** (logica di business complessa, orchestrazione) | `SmsService.php` |
| `app/Channels/` | **Canali di notifica** (implementazioni per Laravel Notifications) | `NetfunChannel.php` |

## Importante: `app/Datas/` vs Altri Pattern

### ✅ CORRETTO: USARE `app/Datas/`

Questo è lo standard stabilito nel modulo Notify per tutti i DTOs:

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SmsData.php
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SmsData.php
<<<<<<< HEAD
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SmsData.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SmsData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SmsData.php
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
```

### ❌ ERRATO: ALTERNATIVE COMUNI MA ERRATE

- `app/Data/` (singolare) - errore comune ma non standard nel nostro progetto
- `app/DTOs/` - standard in altri progetti ma non nel modulo Notify
- `app/DataObjects/` - non utilizzato in questo contesto

### Perché Questa Distinzione è Importante

1. **Consistenza nel codebase**: Mantenere lo stesso pattern in tutto il progetto
2. **Namespace corretti**: Il namespace deve allinearsi con la directory (`Modules\Notify\Datas`)
3. **PSR-4 Autoloading**: Laravel caricherà le classi solo se i percorsi sono corretti

## Verifica dei Percorsi Prima di Utilizzarli

1. **Usa `find_by_name` per verificare la directory corretta** 
2. **Esamina file simili esistenti per convenzioni di nomenclatura**
3. **Controlla il PSR-4 nel composer.json del modulo** 

### Verificare Sempre le Directory Esistenti

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 909e45af (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
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
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a29a4728 (.)
```

Questo restituirà:
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SMS
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
<<<<<<< HEAD
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
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 909e45af (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
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
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9d3810d0 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9e7ba5b6 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9d3810d0 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9e7ba5b6 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a29a4728 (.)
```

## Esempi di Importazioni Corrette

```php
use Modules\Notify\Datas\NetfunSmsData;  // ✅ Corretto
use Modules\Notify\Datas\SmsData;        // ✅ Corretto

use Modules\Notify\Data\NetfunSmsData;   // ❌ Errato
use Modules\Notify\DTOs\NetfunSmsData;   // ❌ Errato
use Modules\Notify\App\Datas\SmsData;    // ❌ Errato (App non è parte del namespace)
```

# Standard di Struttura per le Pagine Filament

## Regola di Naming per le Pagine

Tutte le classi nella cartella `app/Filament/Clusters/*/Pages` **devono terminare con `Page`**.

### Motivazione
- Chiarezza: è subito evidente che si tratta di una pagina Filament.
- Coerenza: tutte le pagine sono uniformi e facilmente ricercabili.
- Supporto a strumenti automatici: alcuni strumenti/autodiscovery si basano su questa convenzione.
- Manutenzione: più facile refactoring e ricerca.
- Rispetto delle convenzioni Filament e PSR-4.

### Best Practice
- Prima di committare, verificare che tutte le nuove pagine rispettino questa regola.
- In caso di refactoring, aggiornare sia il nome del file che della classe e tutti i riferimenti.
- Non usare mai nomi generici o ambigui (es. `SendNetfunSMS`), ma sempre `SendNetfunSMSPage`.

---

## Esempio

- File: `SendNetfunSMS.php` → `SendNetfunSMSPage.php`
- Classe: `class SendNetfunSMS extends XotBasePage` → `class SendNetfunSMSPage extends XotBasePage`

# Regola di Estensione delle Pagine Filament

## Non estendere mai direttamente Filament\Pages\Page

Tutte le pagine custom devono estendere una classe base personalizzata (es. `Modules\Xot\Filament\Pages\XotBasePage`) e **non** direttamente `Filament\Pages\Page`.

### Motivazione
- Centralizzazione della logica e delle convenzioni di progetto
- Facilità di manutenzione e aggiornamento
- Coerenza tra tutti i moduli
- Possibilità di override e personalizzazione globale
- Isolamento da breaking changes di Filament

### Best Practice
- Verificare sempre la classe base nelle nuove pagine
- Aggiornare la documentazione e le regole interne in caso di modifica della base
- Aggiungere test statici/CI che segnalano errori di estensione diretta

### Esempio

```php
// ❌ ERRATO
class MyPage extends \Filament\Pages\Page {}

// ✅ CORRETTO
class MyPage extends Modules\Xot\Filament\Pages\XotBasePage {}
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
