<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
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
=======
=======
>>>>>>> 1487fe812 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SmsData.php
<<<<<<< HEAD
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
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 848f79b79 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SmsData.php
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
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> d09cb759 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 4689a827 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 7325acf3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> f2e64178 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c4bdacbf (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c7a4727b (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bd804d67 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 1487fe812 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 510809c6f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> c4282a934 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 8dc1f2ed6 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 01af324fe (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 8c6d84fe6 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 2e9bd58c3 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 53eef8d8d (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 753ea7aca (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 23f115647 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 13aa25113 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> fdad57c30 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a115e2aad (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 7aae79847 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 275b7ad99 (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 47bbf2b1c (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> b215d516b (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 848f79b79 (.)
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 1487fe812 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> d09cb759 (.)
=======
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
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
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> c4bdacbf (.)
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
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 1487fe812 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> c4282a934 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 8c6d84fe6 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 753ea7aca (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> fdad57c30 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> b215d516b (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> 848f79b79 (.)
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
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
