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
>>>>>>> fd1fcc4c (.)
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
>>>>>>> fd1fcc4c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 161887a2 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> ba564870 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 968ed47cd (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a9167faf (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db6bec044 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> 510809c6f (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> e2f1a4045 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
<<<<<<< HEAD
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> 848f79b79 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 6ad5224fb (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
>>>>>>> ce1853afd (.)
=======
=======
=======
    'from' => env('SMS_FROM', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 26d39e2eb (.)
    'from' => env('SMS_FROM', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
    'from' => env('SMS_FROM', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 161887a2 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> ba564870 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 968ed47cd (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a9167faf (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 7c39b1fe (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 888799d0 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4d253d2c (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 52cd5f85 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db6bec044 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bb00ab64 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 59916c8f (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> c6c33175 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 1c0eb9c7 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> 510809c6f (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fd1fcc4c (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 9cf0dc90 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> e2f1a4045 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> 848f79b79 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> b19cd40 (.)
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> 4e2ebfb (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 6ad5224fb (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
>>>>>>> ce1853afd (.)
=======
=======
=======
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 26d39e2eb (.)
            'sender' => env('NETFUN_SENDER', '<nome progetto>'),
=======
>>>>>>> d284d65 (.)
            'sender' => env('NETFUN_SENDER', 'SaluteOra'),
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
SMS_FROM=<nome progetto>
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> 161887a2 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> ba564870 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> 7c39b1fe (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 888799d0 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> c6c33175 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 968ed47cd (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4d253d2c (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a9167faf (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> 52cd5f85 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> bb00ab64 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 59916c8f (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 7c39b1fe (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> 888799d0 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> c6c33175 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4d253d2c (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
SMS_FROM=<nome progetto>
>>>>>>> 52cd5f85 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db6bec044 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
>>>>>>> bb00ab64 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 59916c8f (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> c6c33175 (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> fd1fcc4c (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
SMS_FROM=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> 510809c6f (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> fd1fcc4c (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> e2f1a4045 (.)
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
SMS_FROM=<nome progetto>
<<<<<<< HEAD
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
=======
SMS_FROM=SaluteOra
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
SMS_FROM=SaluteOra
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
SMS_FROM=SaluteOra
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> 848f79b79 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
SMS_FROM=<nome progetto>
>>>>>>> 4e2ebfb (.)
SMS_FROM=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 6ad5224fb (.)
SMS_FROM=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
>>>>>>> ce1853afd (.)
=======
=======
=======
SMS_FROM=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 26d39e2eb (.)
SMS_FROM=<nome progetto>
=======
>>>>>>> d284d65 (.)
SMS_FROM=SaluteOra
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
SMS_RETRY_ATTEMPTS=3
SMS_RETRY_DELAY=60

# Netfun
NETFUN_API_KEY=your_api_key_here
<<<<<<< HEAD
NETFUN_SENDER=<nome progetto>
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
NETFUN_SENDER=<nome progetto>
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 161887a2 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f19d70d2 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> ba564870 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 7c39b1fe (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 888799d0 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> c6c33175 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 968ed47cd (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4d253d2c (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a9167faf (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 52cd5f85 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bb00ab64 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 59916c8f (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 7c39b1fe (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 888799d0 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> c6c33175 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4d253d2c (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 52cd5f85 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db6bec044 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bb00ab64 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 59916c8f (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> c6c33175 (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 7a2f131f (.)
=======
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 13655a7ed (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
>>>>>>> e0836b102 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 1c0eb9c7 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 17f6b8617 (.)
=======
>>>>>>> db6bec044 (.)
=======
>>>>>>> 2e1ac1f20 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 229a065a (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> fd1fcc4c (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> 510809c6f (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bd804d67 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> fd1fcc4c (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
=======
>>>>>>> e2f1a4045 (.)
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
NETFUN_SENDER=<nome progetto>
<<<<<<< HEAD
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
=======
NETFUN_SENDER=SaluteOra
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
NETFUN_SENDER=SaluteOra
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
=======
>>>>>>> 848f79b79 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
=======
>>>>>>> 229a065a (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> b19cd40 (.)
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> 4e2ebfb (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 6ad5224fb (.)
NETFUN_SENDER=SaluteOra
<<<<<<< HEAD
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
>>>>>>> ce1853afd (.)
=======
=======
=======
NETFUN_SENDER=<nome progetto>
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 26d39e2eb (.)
NETFUN_SENDER=<nome progetto>
=======
>>>>>>> d284d65 (.)
NETFUN_SENDER=SaluteOra
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
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
>>>>>>> c31e900eb (.)
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
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
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
>>>>>>> fea359347 (.)
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
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
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
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
