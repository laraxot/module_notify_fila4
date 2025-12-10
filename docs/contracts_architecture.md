<<<<<<< HEAD
# Architettura delle Interfacce (Contracts) in Notify

## Principi Architetturali Fondamentali

### 1. Separazione delle Interfacce dall'Implementazione

Le interfacce **DEVONO** essere posizionate nella directory `app/Contracts/`, **MAI** all'interno delle directory di implementazione come `app/Actions/SMS/`.

```
✅ CORRETTO:
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
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> a55aa5e96 (.)
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
=======
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/SmsProviderActionInterface.php

❌ ERRATO:
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Actions/SMS/SmsActionInterface.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionInterface.php (sottocartella non corretta)
=======
>>>>>>> 36ac4fc1 (.)
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
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> fea359347 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> a55aa5e96 (.)
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/Notify/
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/
>>>>>>> a55aa5e96 (.)
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
=======
>>>>>>> 301ad8b44 (.)
