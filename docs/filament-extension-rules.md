<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Regole di Estensione delle Classi Filament

## Regola Fondamentale

**MAI** estendere direttamente classi di Filament. Utilizzare **SEMPRE** le classi wrapper con prefisso `XotBase` fornite dal modulo `Xot`.

## Mappatura Classi Corretta

| ❌ Classe Filament (NON USARE) | ✅ Classe XotBase (DA USARE) |
|-------------------------------|----------------------------|
| `\Filament\Pages\Page` | `\Modules\Xot\Filament\Pages\XotBasePage` |
| `\Filament\Resources\Resource` | `\Modules\Xot\Filament\Resources\XotBaseResource` |
| `\Filament\Resources\Pages\CreateRecord` | `\Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `\Filament\Resources\Pages\EditRecord` | `\Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `\Filament\Resources\Pages\ListRecords` | `\Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `\Filament\Widgets\Widget` | `\Modules\Xot\Filament\Widgets\XotBaseWidget` |

## Esempi

### ❌ Errato
```php
use Filament\Pages\Page;

class SendSMSPage extends Page
{
    // ...
}
```

### ✅ Corretto
```php
use Modules\Xot\Filament\Pages\XotBasePage;

class SendSMSPage extends XotBasePage
{
    // ...
}
```

## Motivazione

1. **Consistenza**: Garantisce un approccio uniforme in tutto il progetto
2. **Estensibilità**: Le classi XotBase aggiungono funzionalità specifiche del progetto
3. **Centralizzazione**: Modifiche al comportamento di Filament possono essere gestite in un unico punto
4. **Adattabilità**: Facilita futuri aggiornamenti di Filament isolando le dipendenze dirette

## Vantaggi del Pattern di Wrapper

1. **Traduzione Automatica**: Le classi XotBase integrano automaticamente il sistema di traduzione
2. **Gestione Tenant**: Supporto integrato per multi-tenancy
3. **Sicurezza**: Controlli di autorizzazione centralizzati
4. **Logging**: Tracciamento uniformato delle azioni
5. **Configurazione**: Impostazioni standardizzate

## Verifica

Per verificare che tutte le classi seguano questa regola:

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
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> febe79e3 (.)
```

Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
=======
>>>>>>> 5fd545e4 (.)
=======
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> bf479cc (.)
=======
>>>>>>> fbed41ac (.)
```

Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
```

Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
```

Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
