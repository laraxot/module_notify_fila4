<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 01750b107 (.)
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
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> d09cb759 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 4689a827 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 7325acf3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f2e64178 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c4bdacbf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c7a4727b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bd804d67 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 1487fe812 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 510809c6f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c4282a934 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 8dc1f2ed6 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 01af324fe (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 8c6d84fe6 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 2e9bd58c3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 53eef8d8d (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 753ea7aca (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 23f115647 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 13aa25113 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> fdad57c30 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> a115e2aad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 7aae79847 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 275b7ad99 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 47bbf2b1c (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> b215d516b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 848f79b79 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 74eb2e964 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> f957fb24b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 3e757cee2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 0a5473e16 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 252fa579e (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 43dd68f4b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> c188e2a18 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 6ad5224fb (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 21a6fa9bc (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> cd5474106 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> 1c96b91fe (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 610b999f1 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> 01750b107 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> bf479cc (.)
>>>>>>> ad905ce9c (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*.php" -exec grep -l "get.*FormSchema" {} \; | xargs grep -l "return \["
>>>>>>> ff78f10a5 (.)
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
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 01750b107 (.)
