<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
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
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> fcaebc79 (rebase 210)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 9d3810d0 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> 9cf0dc90 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/
>>>>>>> a404ea71 (.)
├── SmsProviderActionInterface.php   ✅ CORRETTO
├── NotificationChannelInterface.php ✅ CORRETTO
└── ...
```

### Errori da Evitare

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
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/<nome progetto>/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
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
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> fcaebc79 (rebase 210)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 9d3810d0 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 9cf0dc90 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/app/Actions/SMS/
>>>>>>> a404ea71 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
