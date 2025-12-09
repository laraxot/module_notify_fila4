# Architettura delle Interfacce (Contracts) in Notify

## Principi Architetturali Fondamentali

### 1. Separazione delle Interfacce dall'Implementazione

Le interfacce **DEVONO** essere posizionate nella directory `app/Contracts/`, **MAI** all'interno delle directory di implementazione come `app/Actions/SMS/`.

```
✅ CORRETTO:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
```

### 2. Namespace Unificati per le Interfacce

Tutte le interfacce devono utilizzare lo stesso namespace base:

```php
// CORRETTO
namespace Modules\Notify\Contracts;

// ERRATO
namespace Modules\Notify\Contracts\SMS;
namespace Modules\Notify\Actions\SMS;
```

### 3. Nomenclatura delle Interfacce

Le interfacce devono seguire una nomenclatura coerente:

- Usare il suffisso `Interface` per tutte le interfacce
- Il nome deve descrivere chiaramente lo scopo dell'interfaccia
- Per interfacce di provider specifici, usare il prefisso corretto (es. `SmsProvider`, `EmailProvider`, `WhatsAppProvider`)

### 4. Unificazione delle Interfacce per Tipologia

Per ogni tipologia di servizio deve esistere **UNA SOLA** interfaccia di riferimento:

```
// CORRETTO: Un'unica interfaccia per tutti i provider SMS
SmsProviderActionInterface

// ERRATO: Interfacce duplicate o ridondanti
SmsActionInterface
SmsInterface
SendSmsInterface
```

## Struttura di Directory Corretta

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
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/<nome progetto>/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> bf479cc (.)
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
├── app/
│   ├── Actions/
│   │   ├── Email/
│   │   │   ├── SendSmtpEmailAction.php
│   │   │   └── ...
│   │   ├── SMS/
│   │   │   ├── SendNetfunSMSAction.php
│   │   │   ├── SendTwilioSMSAction.php
│   │   │   └── ...
│   │   └── WhatsApp/
│   │       ├── SendTwilioWhatsAppAction.php
│   │       ├── SendMeta360WhatsAppAction.php
│   │       └── ...
│   ├── Contracts/
│   │   ├── EmailProviderActionInterface.php
│   │   ├── SmsProviderActionInterface.php
│   │   ├── WhatsAppProviderActionInterface.php
│   │   └── ...
│   └── ...
```

## Errori Comuni da Evitare

1. **Interfacce duplicate**: Non creare multiple interfacce con scopi simili
2. **Interfacce nelle directory di implementazione**: Non mettere interfacce in `Actions/SMS/`
3. **Sottodirectory in Contracts**: Non creare sottodirectory come `Contracts/SMS/`
4. **Interfacce senza suffisso**: Tutte le interfacce devono terminare con `Interface`

## Azioni di Correzione per gli Errori Esistenti

1. Eliminare interfacce duplicate (`SmsActionInterface` in `/Contracts` e `/Contracts/SMS/`)
2. Normalizzare tutte le implementazioni per utilizzare `SmsProviderActionInterface`
3. Rimuovere tutti i riferimenti obsoleti alle interfacce non corrette
4. Aggiornare documentazione e implementazioni per riflettere questa architettura
