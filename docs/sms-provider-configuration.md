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
# Configurazione Corretta dei Provider SMS 

## Regola Fondamentale

, tutte le configurazioni relative ai provider SMS **DEVONO** essere gestite esclusivamente attraverso il file `config/sms.php` e non tramite il file `config/services.php`.

## Struttura Corretta

```php
// Struttura CORRETTA in config/sms.php
return [
    // Configurazioni di base (applicate a tutti i provider)
<<<<<<< HEAD
    'from' => env('SMS_FROM', '<nome progetto>'),
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
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 3d462363 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6e12a84b (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 545977c8 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 69fa7d37 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', '<nome progetto>'),
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
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> fbed41ac (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> febe79e3 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> d38aa9d2 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9e7ba5b6 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> fbed41ac (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
    'from' => env('SMS_FROM', ''),
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b855 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a404ea71 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ca10d6ad (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> a29a4728 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
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
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
    'retry' => [
        'attempts' => env('SMS_RETRY_ATTEMPTS', 3),
        'delay' => env('SMS_RETRY_DELAY', 60),
    ],
    'rate_limit' => [
        'enabled' => env('SMS_RATE_LIMIT_ENABLED', true),
        'max_attempts' => env('SMS_RATE_LIMIT_MAX_ATTEMPTS', 60),
        'decay_minutes' => env('SMS_RATE_LIMIT_DECAY_MINUTES', 1),
    ],
    
    // Configurazione specifiche dei provider
    'drivers' => [
        'netfun' => [
            'api_key' => env('NETFUN_API_KEY'),
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
<<<<<<< HEAD
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
=======
>>>>>>> 1c96b91fe (.)
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
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
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
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
            'api_url' => env('NETFUN_API_URL', 'https://v2.smsviainternet.it/api/rest/v1/sms-batch.json'),
        ],
        'twilio' => [
            'account_sid' => env('TWILIO_ACCOUNT_SID'),
            'auth_token' => env('TWILIO_AUTH_TOKEN'),
        ],
        // Altri provider...
    ],
];
```

## Implementazione Corretta nelle Action

Ecco come recuperare correttamente le configurazioni nelle classi Action:

```php
// ✅ CORRETTO
public function __construct()
{
    // Recupera configurazione specifica per il provider
    $config = config('sms.drivers.netfun');
    if (!is_array($config)) {
        throw new Exception('Configurazione Netfun non trovata in sms.php');
    }

    $this->token = $config['api_key'] ?? null;
    if (!is_string($this->token)) {
        throw new Exception('API Key Netfun non configurata in sms.php');
    }
    
    // Parametri generici a livello di root
    $this->defaultSender = config('sms.from');
    $this->timeout = config('sms.timeout', 30);
}
```

## Errori Comuni da Evitare

1. **MAI utilizzare `config('services.{provider}')` per accedere alle configurazioni SMS**:
   - ❌ ERRATO: `$token = config('services.netfun.token');`
   - ✅ CORRETTO: `$token = config('sms.drivers.netfun.api_key');`

2. **MAI duplicare configurazioni generiche nei singoli provider**:
   - ❌ ERRATO: Impostare timeout/retry in ogni provider
   - ✅ CORRETTO: Definire timeout/retry a livello di root in config/sms.php

3. **MAI assumere valori predefiniti hardcoded** che non siano documentati:
   - ❌ ERRATO: Usare URL o valori senza documentarli
   - ✅ CORRETTO: Utilizzare sempre env() con valori predefiniti documentati

## Motivazione

1. **Separazione delle Responsabilità**:
   - `services.php` è riservato ai servizi di terze parti generali
   - `sms.php` è dedicato specificatamente alle configurazioni SMS

2. **Manutenibilità**:
   - Centralizzare le configurazioni in un unico file facilita la manutenzione
   - Evita confusione su dove cercare le configurazioni

3. **Coerenza e Standardizzazione**:
   - Tutti i provider SMS seguono lo stesso pattern di configurazione
   - Facilita l'aggiunta di nuovi provider mantenendo lo stesso standard

## Riferimenti nei File di Ambiente

Quando configuri il file `.env`, utilizza questi nomi di variabili:

```

# Configurazione generale SMS
<<<<<<< HEAD
SMS_FROM=<nome progetto>
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
SMS_FROM=<nome progetto>
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> b99af5a8 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> b99af5a8 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> b99af5a8 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
SMS_FROM=
SMS_FROM=<nome progetto>
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
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ca10d6ad (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> febe79e3 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> fbed41ac (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> febe79e3 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a29a4728 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> fbed41ac (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
SMS_FROM=
SMS_FROM=SaluteOra
>>>>>>> 75179b855 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a404ea71 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> ca10d6ad (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
SMS_FROM=SaluteOra
>>>>>>> a29a4728 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
SMS_FROM=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
SMS_FROM=SaluteOra
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
SMS_FROM=SaluteOra
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
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
SMS_FROM=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
SMS_RETRY_ATTEMPTS=3
SMS_RETRY_DELAY=60

# Netfun
NETFUN_API_KEY=your_api_key_here
<<<<<<< HEAD
NETFUN_SENDER=<nome progetto>
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
NETFUN_SENDER=<nome progetto>
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> b99af5a8 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 69fa7d37 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> b99af5a8 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 69fa7d37 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> b99af5a8 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
NETFUN_SENDER=
NETFUN_SENDER=<nome progetto>
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
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ca10d6ad (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> febe79e3 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> fbed41ac (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> febe79e3 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a29a4728 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> fbed41ac (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
NETFUN_SENDER=
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b855 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a404ea71 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> ca10d6ad (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> a29a4728 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9721a5b2 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
NETFUN_SENDER=SaluteOra
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
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
NETFUN_SENDER=SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
NETFUN_API_URL=https://v2.smsviainternet.it/api/rest/v1/sms-batch.json

# Twilio
TWILIO_ACCOUNT_SID=your_account_sid_here
TWILIO_AUTH_TOKEN=your_auth_token_here
```
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
