<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Convenzioni per i Form Schema 

## Regola Fondamentale per Array di Schema

Tutti i metodi `getXFormSchema()`  **DEVONO** restituire array **associativi** con **chiavi string**, non array sequenziali.

## Convenzione di Naming

Il nome del metodo deve seguire la convenzione `get{FormName}FormSchema()`. Se il form si chiama `emailForm`, il metodo deve chiamarsi `getEmailFormSchema()`.

## Esempio Errato vs Corretto

### ❌ ERRATO: Array Sequenziale/Numerico

```php
public function getSmsFormSchema(): array
{
    return [
        Forms\Components\TextInput::make('to')
            ->tel()
            ->required(),
        Forms\Components\TextInput::make('message')
            ->required(),
        Forms\Components\Select::make('driver')
            ->options([
                'netfun' => 'Netfun',
                'twilio' => 'Twilio',
            ]),
    ];
}
```

### ✅ CORRETTO: Array Associativo con Chiavi String

```php
public function getSmsFormSchema(): array
{
    return [
        'to' => Forms\Components\TextInput::make('to')
            ->tel()
            ->required(),
        'message' => Forms\Components\TextInput::make('message')
            ->required(),
        'driver' => Forms\Components\Select::make('driver')
            ->options([
                'netfun' => 'Netfun',
                'twilio' => 'Twilio',
            ]),
    ];
}
```

## Motivazioni

### 1. Riferimento Esplicito

Le chiavi esplicite permettono di riferirsi direttamente a specifici campi del form quando necessario:

```php
// Con chiavi string è possibile fare:
$formSchema['to']->disabled();
```

### 2. Facilità di Sovrascrittura

Le classi figlie possono sovrascrivere o modificare facilmente parti dello schema:

```php
public function getSmsFormSchema(): array
{
    $schema = parent::getSmsFormSchema();
    $schema['to']->helperText('Nuovo testo di aiuto');
    return $schema;
}
```

### 3. Manipolazione Dinamica

Diventa più semplice manipolare dinamicamente i campi:

```php
$schema = $this->getSmsFormSchema();
if ($condition) {
    unset($schema['driver']);
}
return $schema;
```

### 4. Compatibilità con XotBasePage

La classe `XotBasePage` è progettata per lavorare con array associativi nei metodi `getXFormSchema()`.

## Verifica

Per verificare che tutti i metodi schema rispettino questa convenzione:

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 909e45af (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
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
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4f042b88 (.)
```

## Riferimenti

- [Filament Form Schemas](https://filamentphp.com/docs/forms/defining-a-form)
- [PHP Array Types](https://www.php.net/manual/en/language.types.array.php)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b855 (.)
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
