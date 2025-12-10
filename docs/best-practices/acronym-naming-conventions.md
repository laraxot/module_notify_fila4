<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Convenzioni di Naming per Acronimi 

## Regola Fondamentale

, gli acronimi nei nomi delle classi e dei file devono utilizzare **PascalCase** e non tutte maiuscole.

## Esempi Corretti vs Errati

| ❌ Errato | ✅ Corretto |
|----------|-------------|
| `SendSMSPage` | `SendSmsPage` |
| `SendAWSEmailPage` | `SendAwsEmailPage` |
| `HTTPService` | `HttpService` |
| `JSONResponse` | `JsonResponse` |
| `NetfunSMSAction` | `NetfunSmsAction` |

## Motivazione

1. **Coerenza con PSR**: Le convenzioni PSR-1 suggeriscono l'uso di PascalCase per i nomi delle classi
2. **Leggibilità**: Gli acronimi in PascalCase sono più leggibili, specialmente quando concatenati
3. **Compatibilità IDE**: Migliore supporto da parte degli IDE per il completamento automatico
4. **Coerenza con Laravel/PHP**: Segue le pratiche standard in Laravel e nell'ecosistema PHP moderno

## Applicazione della Regola

Questa regola si applica a:
- Nomi delle classi
- Nomi dei file
- Metodi e proprietà
- Nomi dei namespace

## Esempi di Applicazione

### Classi di Pagine Filament

```php
// ❌ ERRATO
class SendSMSPage extends XotBasePage
{
    // ...
}

// ✅ CORRETTO
class SendSmsPage extends XotBasePage
{
    // ...
}
```

### Nomi dei File

```
// ❌ ERRATO
SendSMSPage.php
AWSEmailService.php

// ✅ CORRETTO
SendSmsPage.php
AwsEmailService.php
```

### Metodi e Proprietà

```php
// ❌ ERRATO
public function sendSMSNotification()
// ✅ CORRETTO
public function sendSmsNotification()

// ❌ ERRATO
protected $HTTPClient;
// ✅ CORRETTO
protected $httpClient;
```

## Eccezioni

Non ci sono eccezioni a questa regola. Tutti gli acronimi, indipendentemente dalla loro lunghezza o diffusione, devono seguire la convenzione PascalCase quando utilizzati nei nomi delle classi e dei file.

## Verifica e Controllo

Per identificare i file che non rispettano questa convenzione, è possibile utilizzare il seguente comando:

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
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> d09cb759 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4689a827 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 7325acf3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f2e64178 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c4bdacbf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c7a4727b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bd804d67 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1487fe812 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 510809c6f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c4282a934 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 8dc1f2ed6 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 01af324fe (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 8c6d84fe6 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 2e9bd58c3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 53eef8d8d (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 753ea7aca (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 23f115647 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 13aa25113 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> fdad57c30 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a115e2aad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 7aae79847 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 275b7ad99 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 47bbf2b1c (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> b215d516b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 848f79b79 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 74eb2e964 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f957fb24b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 3e757cee2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 0a5473e16 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 252fa579e (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 43dd68f4b (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c188e2a18 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bf479cc (.)
>>>>>>> 6ad5224fb (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 21a6fa9bc (.)
```

## Riferimenti

- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [Laravel Documentation - Coding Style](https://laravel.com/docs/10.x/contributions#coding-style)
- [PHP-FIG Naming Conventions](https://www.php-fig.org/bylaws/psr-naming-conventions/)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
