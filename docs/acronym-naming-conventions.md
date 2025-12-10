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
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
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
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 69fa7d37 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/<nome progetto>/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
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
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9721a5b2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1442e291 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> fcaebc79 (rebase 210)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4fc21b78 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9d3810d0 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> d38aa9d2 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9e7ba5b6 (rebase 210)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c8b1c8bf (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9cf0dc90 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b85 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
find /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 75179b855 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a404ea71 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> ca10d6ad (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> febe79e3 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> a29a4728 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
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
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
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
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
find /var/www/html/saluteora/laravel/Modules -type f -name "*[A-Z][A-Z]*.php" | grep -v "Test\\.php$" | grep -v "HTML\\.php$"
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
```

## Riferimenti

- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
<<<<<<< HEAD
- [Laravel Documentation - Coding Style](https://laravel.com/docs/10.x/contributions#coding-style)
=======
- [Laravel Documentation - Coding Style](https://laravel.com/project_docs/10.x/contributions#coding-style)
>>>>>>> d284d65 (.)
- [PHP-FIG Naming Conventions](https://www.php-fig.org/bylaws/psr-naming-conventions/)
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
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
