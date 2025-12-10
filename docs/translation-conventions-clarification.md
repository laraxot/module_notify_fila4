<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di <nome progetto>
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 75179b85 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f963d2c0 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 6608a1a0 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 909e45af (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> bb7e77c2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> b99af5a8 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 69fa7d37 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 6608a1a0 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 23cbbaf5 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 909e45af (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> bb7e77c2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> b99af5a8 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f3086887 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 3d462363 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 54ad93c4 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 6e12a84b (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 545977c8 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di <nome progetto>
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
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a404ea71 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 75179b85 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a404ea71 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 75179b85 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a404ea71 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 75179b85 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a404ea71 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> ca10d6ad (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> febe79e3 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a29a4728 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9721a5b2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> c8b1c8bf (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9cf0dc90 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 75179b85 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a404ea71 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> ca10d6ad (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> febe79e3 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> a29a4728 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9721a5b2 (.)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 1442e291 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> fcaebc79 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di 
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 4fc21b78 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9d3810d0 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> d38aa9d2 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   - Il modulo Notify rappresenta un'eccezione alle convenzioni generali di SaluteOra
>>>>>>> 9e7ba5b6 (rebase 210)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di <nome progetto>, poiché rappresentano un'eccezione documentata.
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b85 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f963d2c0 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 6608a1a0 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 23cbbaf5 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 909e45af (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> bb7e77c2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> b99af5a8 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f3086887 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 3d462363 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 54ad93c4 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 6e12a84b (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 545977c8 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 69fa7d37 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 6608a1a0 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 23cbbaf5 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 909e45af (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> bb7e77c2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> b99af5a8 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f3086887 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 3d462363 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 54ad93c4 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 6e12a84b (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 545977c8 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di <nome progetto>, poiché rappresentano un'eccezione documentata.
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
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a404ea71 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b85 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a404ea71 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b85 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a404ea71 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b85 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a404ea71 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> ca10d6ad (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> febe79e3 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a29a4728 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9721a5b2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 1442e291 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> fcaebc79 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 4fc21b78 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9d3810d0 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> d38aa9d2 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> c8b1c8bf (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9cf0dc90 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 75179b85 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a404ea71 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> ca10d6ad (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> febe79e3 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> a29a4728 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9721a5b2 (.)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 1442e291 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> fcaebc79 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di , poiché rappresentano un'eccezione documentata.
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 4fc21b78 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9d3810d0 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> d38aa9d2 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
Il file `send_whats_app.php` e altri file simili nel modulo Notify seguono correttamente le convenzioni specifiche del modulo. Non è necessario modificare questi file per conformarsi alle convenzioni generali di SaluteOra, poiché rappresentano un'eccezione documentata.
>>>>>>> 9e7ba5b6 (rebase 210)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Convenzioni Generali di Traduzione](../../Lang/project_docs/TRANSLATION_KEYS_RULES.md)
- [Convenzioni Specifiche del Modulo Notify](./TRANSLATION_CONVENTIONS.md)
- [Regole per le Chiavi di Traduzione](../../Lang/project_docs/TRANSLATION_KEYS_BEST_PRACTICES.md)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
