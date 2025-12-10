<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
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
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 69fa7d37 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 69fa7d37 (.)
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
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9cf0dc90 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -path "*/Filament/Resources/*/Pages/*" -exec grep -l "extends.*\\\\Filament\\\\Resources\\\\Pages" {} \;
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
```

## Riferimenti

- [Filament Resources Documentation](https://filamentphp.com/docs/3.x/panels/resources/getting-started)
<<<<<<< HEAD
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
=======
>>>>>>> 5fd545e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> bf479cc (.)
=======
>>>>>>> fbed41ac (.)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [<nome progetto> XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
>>>>>>> bf479cc (.)
=======
>>>>>>> fbed41ac (.)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 712617d3 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 36ac4fc1 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 9cf0dc90 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> ee18dd92 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> eb62d6cf (rebase 210)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 9cf0dc90 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> f963d2c0 (.)
=======
- [ XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 75179b855 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> ee18dd92 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 4f042b88 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
- [SaluteOra XotBase Architecture](./FILAMENT_XOT_ARCHITECTURE.md)
- [Pattern Architetturali in Laravel](https://laravel.com/docs/architecture)
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
