<<<<<<< HEAD
<<<<<<< HEAD
# Filament Class Extension Rules
=======
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
>>>>>>> 125a2c2b8 (.)
# Regole di Estensione delle Classi Filament
>>>>>>> ddee9d751 (.)

**Fundamental Principle**: Never extend Filament classes directly - always use XotBase classes.

## 🚨 Absolute Rule

**NEVER extend Filament classes directly.**

Always extend abstract classes with the `XotBase` prefix that respect the old path.

## 📋 Filament -> XotBase Class Mapping

### Resources Pages

| ❌ WRONG | ✅ CORRECT |
|---|---|
| `Filament\Resources\Pages\CreateRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord` |
| `Filament\Resources\Pages\EditRecord` | `Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord` |
| `Filament\Resources\Pages\ListRecords` | `Modules\Xot\Filament\Resources\Pages\XotBaseListRecords` |
| `Filament\Resources\Pages\Page` | `Modules\Xot\Filament\Resources\Pages\XotBasePage` |
| `Filament\Actions\BulkAction` | `Modules\Xot\Filament\Actions\XotBaseBulkAction` |

### Resources

| ❌ WRONG | ✅ CORRECT |
|---|---|
| `Filament\Resources\Resource` | `Modules\Xot\Filament\Resources\XotBaseResource` |

### Standalone Pages

| ❌ WRONG | ✅ CORRECT |
|---|---|
| `Filament\Pages\Page` | `Modules\Xot\Filament\Pages\XotBasePage` |

### Service Providers

| ❌ WRONG | ✅ CORRECT |
|---|---|
| `Illuminate\Support\ServiceProvider` | `Modules\Xot\Providers\XotBaseServiceProvider` |

## ⚠️ Specific Rules for XotBaseResource

### getTableColumns Method NOT Required

Extensions of `XotBaseResource` **MUST NOT have** the `getTableColumns()` method.

```php
// ❌ WRONG
class UserResource extends XotBaseResource
{
    public static function getTableColumns(): array
    {
        return [/* ... */];
    }
}

// ✅ CORRECT
class UserResource extends XotBaseResource
{
    // getTableColumns() handled automatically by XotBaseResource
}
```

### Methods NOT Required

Do not implement these methods if they return standard values:

- `getPages()` - if it contains only standard routes
- `getRelations()` - if it returns an empty array
- `getTableActions()` - if it contains only standard actions
- `getTableBulkActions()` - if it contains only standard actions

## ⚠️ Specific Rules for XotBasePage

### Properties NOT Allowed

Extensions of `Modules\Xot\Filament\Pages\XotBasePage` **MUST NOT have**:

```php
// ❌ WRONG
class MyPage extends XotBasePage
{
    protected static ?string $navigationIcon;
    protected static ?string $title;
    protected static ?string $navigationLabel;
}

// ✅ CORRECT
class MyPage extends XotBasePage
{
    // These properties are handled automatically by the base class
}
```

## 🔧 Model Patterns

### Extending BaseModel

```php
// ❌ WRONG
class Team extends Model implements TeamContract

<<<<<<< HEAD
// ✅ CORRECT
class Team extends BaseTeam
=======
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
>>>>>>> 125a2c2b8 (.)
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
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/<nome progetto>/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> bf479cc (.)
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
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
>>>>>>> ee18dd92 (.)
>>>>>>> 022fa8f1c (.)
```

<<<<<<< HEAD
### Extending Third-Party Models

```php
// ❌ WRONG - laravel/Modules/User/app/Models/Permission.php
class Permission extends Model

// ✅ CORRECT
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
```

### Do Not Replicate Methods

**Rule**: Do not replicate extended class methods if there are no differences.

```php
// ❌ WRONG - Method identical to base class
class MyModel extends BaseModel
{
    public function getName(): string
    {
        return $this->name; // Identical to base class
    }
}

// ✅ CORRECT - Remove the method, use the base class one
class MyModel extends BaseModel
{
    // getName() inherited from BaseModel
}
```

## 🚫 Deprecations

### BadgeColumn Deprecated

```php
// ❌ DEPRECATED
use Filament\Tables\Columns\BadgeColumn;

BadgeColumn::make('status')

// ✅ CORRECT - Use TextColumn with badge()
use Filament\Tables\Columns\TextColumn;

TextColumn::make('status')->badge()
```

### protected $casts Deprecated (Laravel 11+)

```php
// ❌ DEPRECATED - Laravel 10 and earlier
class User extends Model
{
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];
}

// ✅ CORRECT - Laravel 11+ (casts() method)
class User extends Model
{
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'is_admin' => 'boolean',
        ];
    }
}
```

**IMPORTANT**: If a model has BOTH `protected $casts` AND `casts()`, remove `protected $casts` (it is deprecated and ignored).

## 🌐 Translation Management

### Do NOT Use Direct Methods

```php
// ❌ WRONG
TextInput::make('name')
    ->label('Name')
    ->placeholder('Insert name')
    ->tooltip(' The user name')

// ✅ CORRECT - Use translation files
TextInput::make('name')
// Translations are handled automatically by LangServiceProvider
```

## 🔄 Actions instead of Services

### Use Spatie Queueable Actions

```php
// ❌ WRONG - Traditional Service
class UserService
{
    public function createUser(array $data): User
    {
        // ...
    }
}

// ✅ CORRECT - Queueable Action
use Spatie\QueueableAction\QueueableAction;

class CreateUserAction
{
    use QueueableAction;

    public function execute(array $data): User
    {
        // ...
    }
}

// Usage
app(CreateUserAction::class)->execute($data);
```

---

**Philosophy**: DRY + KISS - Do not duplicate, do not complicate, always use base classes.
=======
Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
=======
>>>>>>> 5fd545e4 (.)
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
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
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/saluteora/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -path "*/Filament/*/*.php" -type f -exec grep -l "extends.*Filament" {} \;
```

Le pagine che violano questa regola devono essere immediatamente corrette per mantenere l'integrità dell'architettura.
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> 125a2c2b8 (.)
