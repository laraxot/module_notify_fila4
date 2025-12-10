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
# Struttura della Configurazione SMS 

## Introduzione

Questo documento definisce la struttura corretta del file di configurazione SMS (`config/sms.php`) nel modulo Notify, con particolare attenzione alla gestione delle configurazioni generiche vs specifiche per provider.

## Struttura Generale

Il file `config/sms.php` è organizzato in sezioni distinte:

```php
return [
    // Driver predefinito
    'default' => env('SMS_DRIVER', 'default_provider'),
    
    // Configurazione dei driver/provider
    'drivers' => [
        // Configurazioni specifiche per provider...
    ],
    
    // Configurazioni generiche per tutti i provider
    'queue' => env('SMS_QUEUE', 'default'),
    'retry' => [...],
    'rate_limit' => [...],
    'logging' => [...],
    'validation' => [...],
];
```

## Configurazioni Generiche vs Specifiche

### 1. Configurazioni Generiche

Le configurazioni generiche si applicano a **tutti** i provider SMS e sono definite a livello di root nel file di configurazione:

```php
'retry' => [
    'attempts' => env('SMS_RETRY_ATTEMPTS', 3),
    'delay' => env('SMS_RETRY_DELAY', 60),
],

'rate_limit' => [
    'enabled' => env('SMS_RATE_LIMIT_ENABLED', true),
    'max_attempts' => env('SMS_RATE_LIMIT_MAX_ATTEMPTS', 60),
    'decay_minutes' => env('SMS_RATE_LIMIT_DECAY_MINUTES', 1),
],
```

### 2. Configurazioni Specifiche per Provider

Le configurazioni specifiche per provider sono definite all'interno della sezione `drivers` e contengono **solo** i parametri specifici per quel provider:

```php
'drivers' => [
    'netfun' => [
        // Credenziali e parametri di connessione
        'username' => env('NETFUN_USERNAME'),
        'password' => env('NETFUN_PASSWORD'),
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b855 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
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
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
        'api_url' => env('NETFUN_API_URL', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json'),
        
        // Configurazioni avanzate specifiche per Netfun
        'circuit_breaker' => [
            'threshold' => env('NETFUN_CIRCUIT_BREAKER_THRESHOLD', 5),
            'timeout' => env('NETFUN_CIRCUIT_BREAKER_TIMEOUT', 60),
        ],
    ],
    
    'twilio' => [
        'account_sid' => env('TWILIO_ACCOUNT_SID'),
        'auth_token' => env('TWILIO_AUTH_TOKEN'),
        'from' => env('TWILIO_FROM'),
    ],
    
    // Altri provider...
],
```

## Regola Fondamentale: Evitare Duplicazioni

**IMPORTANTE**: Evitare di duplicare le configurazioni generiche all'interno delle configurazioni specifiche per provider. Ad esempio:

❌ **ERRATO**:
```php
'drivers' => [
    'netfun' => [
        // ...
        'max_retries' => env('NETFUN_MAX_RETRIES', 3),      // Duplica 'retry.attempts'
        'retry_delay' => env('NETFUN_RETRY_DELAY', 1),      // Duplica 'retry.delay'
        'rate_limit' => env('NETFUN_RATE_LIMIT', 100),      // Duplica 'rate_limit.max_attempts'
        'rate_limit_window' => env('NETFUN_RATE_LIMIT_WINDOW', 60), // Duplica 'rate_limit.decay_minutes'
        // ...
    ],
],
```

✅ **CORRETTO**:
```php
// Configurazioni generiche a livello di root
'retry' => [
    'attempts' => env('SMS_RETRY_ATTEMPTS', 3),
    'delay' => env('SMS_RETRY_DELAY', 60),
],

'rate_limit' => [
    'enabled' => env('SMS_RATE_LIMIT_ENABLED', true),
    'max_attempts' => env('SMS_RATE_LIMIT_MAX_ATTEMPTS', 60),
    'decay_minutes' => env('SMS_RATE_LIMIT_DECAY_MINUTES', 1),
],

// Solo configurazioni specifiche per provider nella sezione 'drivers'
'drivers' => [
    'netfun' => [
        'username' => env('NETFUN_USERNAME'),
        'password' => env('NETFUN_PASSWORD'),
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
        'sender' => env('NETFUN_SENDER', ''),
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b855 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
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
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
        'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
        'api_url' => env('NETFUN_API_URL', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json'),
        
        // Solo configurazioni veramente specifiche per Netfun
        'circuit_breaker' => [
            'threshold' => env('NETFUN_CIRCUIT_BREAKER_THRESHOLD', 5),
            'timeout' => env('NETFUN_CIRCUIT_BREAKER_TIMEOUT', 60),
        ],
    ],
],
```

## Gestione Precedenze

Quando sia le configurazioni generiche che quelle specifiche per provider sono presenti:

1. Le configurazioni specifiche per provider hanno **precedenza** sulle configurazioni generiche
2. Il codice che utilizza queste configurazioni deve implementare questa logica di precedenza

Esempio di implementazione della logica di precedenza:

```php
// In una classe che gestisce l'invio SMS
$retryAttempts = $config['drivers'][$driver]['max_retries'] ?? $config['retry']['attempts'];
$retryDelay = $config['drivers'][$driver]['retry_delay'] ?? $config['retry']['delay'];
```

## Checklist di Verifica

- [ ] Configurazioni generiche (retry, rate_limit, ecc.) definite a livello di root
- [ ] Configurazioni specifiche per provider definite solo nella sezione `drivers`
- [ ] Nessuna duplicazione tra configurazioni generiche e specifiche
- [ ] Logica di precedenza implementata nel codice che utilizza queste configurazioni

## Collegamenti

- [Configurazione Netfun](./NETFUN_CONFIG_REQUIREMENTS.md)
- [Provider SMS Supportati](./notifications/SMS_PROVIDER_CONFIGURATION.md)

---

*Ultimo aggiornamento: 2025-05-12*
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
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
