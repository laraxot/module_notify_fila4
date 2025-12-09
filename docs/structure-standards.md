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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SmsData.php
=======
=======
>>>>>>> 75179b85 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SmsData.php
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsRequestData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/NetfunSmsResponseData.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SmsData.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
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
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/<nome progetto>/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/saluteora/laravel/Modules/Notify/app -type d -name "Data*"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app -type d -name "Data*"
>>>>>>> 75179b85 (.)
```

Questo restituirà:
```
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
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
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
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Datas/SMS
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas
/var/www/html/saluteora/laravel/Modules/Notify/app/Datas/SMS
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
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
