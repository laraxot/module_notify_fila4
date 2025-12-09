<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
# Regole di Percorso e Interfacce nel Modulo Notify

## Principi Fondamentali

1. **Regola Principale per le Interfacce**
   - Le interfacce DEVONO essere posizionate in `/app/Contracts/`
   - MAI in sottodirectory di Contracts come `/app/Contracts/SMS/`
   - MAI nelle directory di implementazione come `/app/Actions/SMS/`

2. **Regola Principale per i Namespace**
   - Namespace corretto: `Modules\Notify\Contracts`
   - Namespace ERRATO: `Modules\Notify\Contracts\SMS`
   - Namespace ERRATO: `Modules\Notify\Actions\SMS`

## Struttura delle Directory e Namespace

### Directory Fisiche (path su disco)
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> b99af5a8 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/<nome progetto>/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> bf479cc (.)
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
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
├── app/                           # Directory fisica con app minuscolo
│   ├── Actions/                  
│   │   ├── Email/                # Azioni per email
│   │   ├── SMS/                  # Azioni per SMS
│   │   └── WhatsApp/             # Azioni per WhatsApp
│   ├── Contracts/                # TUTTE le interfacce qui (no sottodirectory)
│   ├── Datas/                    # Data Transfer Objects
│   └── ...
└── config/
    ├── sms.php                   # Config per SMS
    ├── mail.php                  # Config per Email
    └── whatsapp.php              # Config per WhatsApp
```

### Namespace (in codice PHP)
```php
namespace Modules\Notify\Actions\SMS;      // Per le azioni SMS
namespace Modules\Notify\Actions\WhatsApp; // Per le azioni WhatsApp
namespace Modules\Notify\Contracts;        // Per TUTTE le interfacce
namespace Modules\Notify\Datas;            // Per tutti i DTO
```

## Convenzioni di Nomenclatura

### Interfacce
- Usare suffisso `Interface`: `SmsProviderActionInterface`
- Usare prefisso descrittivo: `SmsProvider`, `EmailProvider`, `WhatsAppProvider`
- MAI usare solo il servizio: `SmsInterface` (troppo generico)

### Implementazioni
- Usare prefisso `Send` seguito dal provider: `SendNetfunSMSAction`
- Usare suffisso `Action` per le azioni: `SendTwilioWhatsAppAction`
- Mantenere coerenza nella capitalizzazione: `SMS` maiuscolo, non `Sms`

### DTO
- Usare nomi descrittivi: `SmsData`, `WhatsAppData`, `EmailData`
- Ogni campo deve essere fortemente tipizzato
- Utilizzare solo proprietà readonly in PHP 8.2+

## Errori Comuni da Correggeere Immediatamente

1. **Interfacce nei percorsi sbagliati**
   - ❌ `/app/Actions/SMS/SmsActionInterface.php`
   - ❌ `/app/Contracts/SMS/SmsActionInterface.php`
   - ✅ `/app/Contracts/SmsProviderActionInterface.php`

2. **Interfacce con nomenclatura errata**
   - ❌ `SmsActionInterface` (troppo generico)
   - ✅ `SmsProviderActionInterface` (chiaro e specifico)

3. **Implementazioni che usano l'interfaccia sbagliata**
   - ❌ `implements SmsActionInterface`
   - ✅ `implements SmsProviderActionInterface`

## Azioni di Correzione Richieste

Per ogni nuova implementazione (come WhatsApp) o correzione di implementazioni esistenti:

1. Verificare che le interfacce siano in `/app/Contracts/`
2. Verificare che i namespace siano corretti
3. Verificare che le classi implementino le interfacce corrette
4. Verificare che i DTO siano nella directory corretta
5. Aggiornare la documentazione per riflettere l'architettura corretta

## Motivazioni Architetturali

Questa struttura garantisce:

1. **Separazione delle Responsabilità**: Interfacce separate dalle implementazioni
2. **Inversione delle Dipendenze**: Dependency Injection basato su interfacce
3. **Coerenza**: Pattern coerenti in tutto il modulo
4. **Manutenibilità**: Facile trovare e comprendere il codice
5. **Estendibilità**: Aggiungere nuovi provider senza modificare l'architettura
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
