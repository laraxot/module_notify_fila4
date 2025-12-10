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
# Convenzioni per le Traduzioni del Modulo Notify

## Regole Fondamentali
- Le chiavi di traduzione devono essere in inglese, strutturate e gerarchiche (es. `notify.send_whatsapp.label`).
- I valori devono essere localizzati in italiano naturale e descrittivo.
- Non usare mai chiavi tecniche o placeholder come `.navigation`.
- I file di traduzione devono essere raggruppati per contesto (es. `notify.php`, `whatsapp.php`, `sms.php`), non per singola view o azione.
- Non lasciare mai file o cartelle di backup/temp/corrected nel repository.

## Esempio Corretto
```php
// notify.php
return [
    'send_whatsapp' => [
        'label' => 'Invio WhatsApp',
        'group' => 'Notifiche',
        'description' => 'Invia un messaggio WhatsApp tramite provider configurato',
    ],
    'send_sms' => [
        'label' => 'Invio SMS',
        'group' => 'Notifiche',
        'description' => 'Invia un SMS tramite provider configurato',
    ],
];
```

## Errori Comuni
- Chiavi come `'label' => 'send whats app.navigation'` sono errate: non sono localizzate e non seguono lo standard.
- File di traduzione per singola view/azione generano confusione e ridondanza.
- Cartelle di backup/temp/corrected non devono mai essere committate.

## Motivazione
- Facilita la manutenzione e la localizzazione multi-lingua.
- Migliora l'esperienza utente e la coerenza del progetto.
- Permette automazione e refactoring sicuri.

## Checklist PR
- Nessun file di traduzione deve contenere chiavi tecniche o placeholder.
- Tutte le chiavi devono essere localizzate e strutturate.
- I file devono essere raggruppati per contesto.
- Nessuna cartella di backup/temp/corrected nel repository.

## Struttura dei File di Traduzione

Tutti i file di traduzione nel modulo Notify devono seguire una struttura gerarchica precisa e convenzioni di naming specifiche per garantire la corretta applicazione automatica delle traduzioni tramite il LangServiceProvider.

## Regole Fondamentali

1. **Nomi dei File**
   - I nomi dei file devono essere in snake_case
   - Gli acronimi (SMS, AWS, ecc.) devono essere trattati come una singola parola
   - ✅ CORRETTO: `send_sms.php`, `send_aws_email.php`
   - ❌ ERRATO: `send_s_m_s.php`, `send_a_w_s_email.php`

2. **Struttura Gerarchica**
   - Ogni file deve seguire la struttura gerarchica standard:
     ```php
     return [
         'navigation' => [
             'label' => 'Invio SMS',
             'group' => 'Notifiche',
         ],
         'fields' => [
             'to' => [
                 'label' => 'Destinatario',
                 'placeholder' => 'Inserisci il numero di telefono',
                 'helper_text' => 'Numero di telefono del destinatario',
             ],
             // Altri campi...
         ],
         'actions' => [
             'send' => [
                 'label' => 'Invia SMS',
                 'tooltip' => 'Invia un messaggio SMS al destinatario',
             ],
             // Altre azioni...
         ],
         // Altre sezioni...
     ];
     ```

3. **Convenzioni per le Chiavi**
   - Utilizzare snake_case per tutte le chiavi
   - Non utilizzare traduzioni statiche nelle chiavi (es. `'label' => 'send sms.navigation'`)
   - Evitare abbreviazioni non standard

## Esempio di Implementazione Corretta

### File: `/lang/it/send_sms.php`
```php
<?php

return [
    'navigation' => [
        'label' => 'Invio SMS',
        'group' => 'Test',
    ],
    'fields' => [
        'from' => [
            'label' => 'Mittente',
            'placeholder' => 'Inserisci il mittente',
            'helper_text' => 'Nome o numero del mittente',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'Inserisci il numero di telefono',
            'helper_text' => 'Numero di telefono del destinatario',
        ],
        'body' => [
            'label' => 'Testo del messaggio',
            'placeholder' => 'Inserisci il testo del messaggio',
            'helper_text' => 'Il testo da inviare via SMS',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia SMS',
            'tooltip' => 'Invia un messaggio SMS al destinatario',
        ],
    ],
    'messages' => [
        'success' => 'SMS inviato con successo a :recipient',
        'error' => 'Errore durante l\'invio dell\'SMS: :error',
    ],
];
```

### File: `/lang/en/send_sms.php`
```php
<?php

return [
    'navigation' => [
        'label' => 'Send SMS',
        'group' => 'Test',
    ],
    'fields' => [
        'from' => [
            'label' => 'From',
            'placeholder' => 'Enter sender',
            'helper_text' => 'Sender name or number',
        ],
        'to' => [
            'label' => 'To',
            'placeholder' => 'Enter phone number',
            'helper_text' => 'Recipient phone number',
        ],
        'body' => [
            'label' => 'Message body',
            'placeholder' => 'Enter message text',
            'helper_text' => 'Text to send via SMS',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Send SMS',
            'tooltip' => 'Send an SMS message to the recipient',
        ],
    ],
    'messages' => [
        'success' => 'SMS successfully sent to :recipient',
        'error' => 'Error sending SMS: :error',
    ],
];
```

## Linee Guida per le Pagine Filament

Per le pagine Filament nel cluster Test, la struttura delle traduzioni deve essere:

```php
return [
    'navigation' => [
        'label' => 'Nome della pagina', // Visualizzato nella navigazione
        'group' => 'Nome del gruppo',   // Gruppo di navigazione
    ],
    'fields' => [
        // Campi del form...
    ],
    'actions' => [
        // Azioni della pagina...
    ],
    'messages' => [
        // Messaggi di feedback...
    ],
];
```

## Accesso alle Traduzioni nel Codice

Evitare l'uso di funzioni di traduzione dirette nel codice. Il LangServiceProvider gestisce automaticamente le traduzioni in base ai nomi dei campi e dei componenti.

### ❌ ERRATO
```php
TextInput::make('to')
    ->label(__('notify::send_sms.fields.to.label'))
```

### ✅ CORRETTO
```php
TextInput::make('to') // La traduzione viene applicata automaticamente
```

## Verifica delle Traduzioni

Per verificare se le traduzioni sono applicate correttamente:

1. Impostare la lingua dell'applicazione (tramite URL o preferenze utente)
2. Verificare che i componenti dell'interfaccia utente visualizzino le etichette tradotte
3. Controllare che tutti i messaggi di sistema siano tradotti

## Riferimenti

<<<<<<< HEAD
- [<nome progetto> Translation System](../../../../.cursor/rules/translations.rule)
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
- [<nome progetto> Translation System](../../../../.cursor/rules/translations.rule)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 69fa7d37 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 69fa7d37 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [<nome progetto> Translation System](../../../../.cursor/rules/translations.rule)
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
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> febe79e3 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9721a5b2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 1442e291 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> fcaebc79 (rebase 210)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9cf0dc90 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> febe79e3 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a29a4728 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9721a5b2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 1442e291 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> fcaebc79 (rebase 210)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c8b1c8bf (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9cf0dc90 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b85 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
- [ Translation System](../../../../.cursor/rules/translations.rule)
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 75179b855 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a404ea71 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> ca10d6ad (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> a29a4728 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9721a5b2 (.)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
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
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- [SaluteOra Translation System](../../../../.cursor/rules/translations.rule)
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
- [Filament Translations](../../../../.cursor/rules/filament-translations.rule)
- [Laravel Localization](https://laravel.com/docs/10.x/localization)

## Nota sui collegamenti

Tutti i collegamenti nei file `.md` **devono essere relativi** rispetto alla posizione del file stesso, per garantire portabilità e funzionamento sia su GitHub che in locale. Non usare mai path assoluti o riferimenti hardcoded alla root del progetto.

## Politica
La politica del progetto è garantire inclusività, accessibilità e rispetto per tutte le culture e le diversità linguistiche. Ogni traduzione deve essere pensata per essere neutra, rispettosa e non discriminatoria.

## Filosofia
Crediamo nella chiarezza, nella semplicità e nella trasparenza. Ogni stringa tradotta deve aiutare l'utente a sentirsi accolto e guidato, senza ambiguità o tecnicismi inutili.

## Religione
Il sistema di traduzioni è laico e neutrale rispetto a ogni credo. Non sono ammesse espressioni, simboli o riferimenti religiosi, salvo esplicita richiesta di progetto e sempre nel rispetto di tutte le fedi.

## Etica
Le traduzioni devono essere oneste, non ingannevoli, non manipolatorie e non offensive. L'etica del progetto impone di evitare ogni forma di linguaggio discriminatorio, sessista, razzista o che possa ledere la dignità della persona.

## Zen
La traduzione perfetta è quella che non si nota: è naturale, fluida, non distrae e non crea attrito. Ogni parola superflua va eliminata, ogni concetto va reso con la massima semplicità e armonia.
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
