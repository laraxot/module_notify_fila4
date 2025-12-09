<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
# Architettura delle Pagine di Risorse Filament 

## Regola Fondamentale

, **MAI** estendere direttamente le classi di Filament per le pagine di risorse. Utilizzare **SEMPRE** le classi wrapper corrispondenti con prefisso `XotBase` fornite dal modulo `Xot`.

## Struttura Architetturale

Il pattern XotBase si applica a tutte le classi di Filament, incluse le pagine di risorse:

```
Filament\Resources\Pages\CreateRecord
    ↑
    └── Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
        ↑
        └── Modules\Notify\Filament\Resources\YourResource\Pages\CreateYourModel

Filament\Resources\Pages\EditRecord
    ↑
    └── Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
        ↑
        └── Modules\Notify\Filament\Resources\YourResource\Pages\EditYourModel

Filament\Resources\Pages\ListRecords
    ↑
    └── Modules\Xot\Filament\Resources\Pages\XotBaseListRecords
        ↑
        └── Modules\Notify\Filament\Resources\YourResource\Pages\ListYourModels
```

## Mappatura Completa delle Classi

| ❌ Classe Filament (NON USARE) | ✅ Classe XotBase (DA USARE) |
|-------------------------------|----------------------------|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\ViewRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord` |
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage` |

## Implementazione Corretta

### ✅ Esempio di `CreateNotifyTheme.php`

```php
<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;

class CreateNotifyTheme extends XotBaseCreateRecord
{
    protected static string $resource = NotifyThemeResource::class;
}
```

### ✅ Esempio di `EditNotifyTheme.php`

```php
<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Filament\Pages\Actions\DeleteAction;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

class EditNotifyTheme extends XotBaseEditRecord
{
    protected static string $resource = NotifyThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
```

## Vantaggi Architetturali

1. **Traduzione Automatica**: Le classi XotBase forniscono traduzione automatica per etichette, messaggi e testi UI
2. **Logica di Persistenza**: Gestione standardizzata di salvataggio, validazione e notifiche
3. **Multi-tenant**: Supporto integrato per isolamento dei dati per tenant
4. **Audit Trail**: Logging automatico delle modifiche ai record
5. **Autorizzazioni Unificate**: Gestione centralizzata dei permessi
6. **Convenzioni di Naming**: Supporto per strutture di naming coerenti

## Estendere le Funzionalità

Le classi base XotBase già implementano la maggior parte delle funzionalità necessarie. Quando si estendono, limitarsi a definire:

1. La risorsa associata via `protected static string $resource`
2. Azioni aggiuntive specifiche (header actions, etc.)
3. Override di comportamenti specifici solo quando necessario

## Verifica del Codice

Per verificare che tutte le pagine di risorse seguano questo pattern:

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
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 909e45af (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
```

## Riferimenti

- [Filament Resources Documentation](https://filamentphp.com/docs/3.x/panels/resources/getting-started)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 23cbbaf5 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> febe79e3 (.)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> 909e45af (.)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> bf479cc (.)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
