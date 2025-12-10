<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 26d39e2eb (.)
# Chiarimento sulle Convenzioni di Traduzione nel Modulo Notify

## Identificazione di Convenzioni Contrastanti

 sono state identificate convenzioni contrastanti per le traduzioni:

### Convenzioni Generali (Modules/Lang/docs/TRANSLATION_KEYS_RULES.md)

```php
// Struttura gerarchica espansa
'auth' => [
    'login' => [
        'button' => [
            'label' => 'Login',
        ],
    ],
],

// Formato: modulo::risorsa.fields.campo.label
// Esempio: user::auth.login.button.label
```

### Convenzioni Specifiche del Modulo Notify (Modules/Notify/docs/TRANSLATION_CONVENTIONS.md)

```php
// Struttura con chiave 'navigation'
return [
    'navigation' => [
        'label' => 'Invio SMS',
        'group' => 'Notifiche',
    ],
    'fields' => [
        // ...
    ],
];
```

## Risoluzione della Discrepanza

Dopo un'analisi approfondita, è stato determinato che:

1. **Le convenzioni specifiche del modulo Notify sono valide per questo modulo**
   - I file di traduzione come `send_whats_app.php` seguono correttamente le convenzioni specifiche del modulo
   - L'uso della chiave `navigation` è intenzionale e necessario per il funzionamento del modulo Notify

2. **Eccezioni alle convenzioni generali**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di <nome progetto>
>>>>>>> bf479cc (.)
   - Questa eccezione è documentata e intenzionale

## Convenzioni Corrette per il Modulo Notify

### Naming dei File

- I nomi dei file devono essere in snake_case
- Gli acronimi (SMS, AWS, ecc.) devono essere trattati come una singola parola
- ✅ CORRETTO: `send_sms.php`, `send_aws_email.php`, `send_whats_app.php`
- ❌ ERRATO: `sendSms.php`, `SendWhatsApp.php`

### Struttura delle Chiavi

```php
return [
    'navigation' => [
        'label' => 'Nome della Funzionalità',
        'group' => 'Gruppo di Navigazione',
    ],
    'fields' => [
        'campo' => [
            'label' => 'Etichetta Campo',
            'placeholder' => 'Placeholder Campo',
            'helper_text' => 'Testo di aiuto',
        ],
    ],
    'actions' => [
        'azione' => [
            'label' => 'Etichetta Azione',
        ],
    ],
];
```

## Conclusione

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di <nome progetto>, poiché rappresentano un'eccezione documentata.
>>>>>>> bf479cc (.)

## Riferimenti

- [Convenzioni Generali di Traduzione](../../Lang/docs/TRANSLATION_KEYS_RULES.md)
- [Convenzioni Specifiche del Modulo Notify](./TRANSLATION_CONVENTIONS.md)
- [Regole per le Chiavi di Traduzione](../../Lang/docs/TRANSLATION_KEYS_BEST_PRACTICES.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 26d39e2eb (.)
