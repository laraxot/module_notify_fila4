<<<<<<< HEAD
# Standard di Posizionamento dei File in Notify

## Organizzazione Directory Principali

| Tipo di File | Percorso Standard | Errori da Evitare |
|--------------|-------------------|-------------------|
| **Interfacce/Contratti** | `/app/Contracts/` | ❌ `/app/Actions/*/InterfaceName.php` |
| **Actions** | `/app/Actions/` | |
| **Datas** | `/app/Datas/` | ❌ `/app/Data/` (singolare), ❌ `/app/DTOs/` |
| **Models** | `/app/Models/` | |
| **Channels** | `/app/Channels/` | |

## Regole Specifiche per le Interfacce

Le interfacce devono sempre essere collocate nella directory `/app/Contracts/`, **mai** nelle directory delle implementazioni.

### Corretta Organizzazione delle Interfacce

```
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Contracts/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
>>>>>>> a55aa5e96 (.)
├── SmsProviderActionInterface.php   ✅ CORRETTO
├── NotificationChannelInterface.php ✅ CORRETTO
└── ...
```

### Errori da Evitare

```
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
>>>>>>> fea359347 (.)
<<<<<<< HEAD
/var/www/html/<directory progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a55aa5e96 (.)
├── SmsActionInterface.php           ❌ ERRATO
└── ...
```

## Regole per la Nomenclatura delle Interfacce

- Utilizzare il suffisso `Interface` per le interfacce
- Utilizzare il prefisso con il nome del concetto primario
- Esempio: `SmsProviderActionInterface` per le azioni di provider SMS

## Regole per il Namespace delle Interfacce

- Namespace corretto: `Modules\Notify\Contracts\`
- Namespace errato: `Modules\Notify\Actions\SMS\`

## Implementazioni Corrette

Quando si implementa un'interfaccia:

```php
// CORRETTO
use Modules\Notify\Contracts\SmsProviderActionInterface;

final class SendNetfunSMSAction implements SmsProviderActionInterface
{
    // ...
}

// ERRATO
use Modules\Notify\Actions\SMS\SmsActionInterface;

final class SendNetfunSMSAction implements SmsActionInterface
{
    // ...
}
```

## Principi Guida

1. **Separazione delle Responsabilità**: 
   - Le interfacce definiscono i contratti
   - Le implementazioni forniscono l'implementazione specifica

2. **Inversione delle Dipendenze**:
   - Le classi concrete dipendono dalle astrazioni (interfacce)
   - Le interfacce non dipendono dalle implementazioni

3. **Consistenza**:
   - Tutte le interfacce dello stesso tipo devono essere nello stesso namespace
   - Il pattern di organizzazione deve essere coerente in tutto il modulo
=======
>>>>>>> 301ad8b44 (.)
