<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
# Miglioramento File Traduzione send_email.php

## 🔍 Analisi del Problema

Il file `laravel/Modules/Notify/lang/it/send_email.php` presenta diversi problemi critici:

### 1. Conflitto di Merge Non Risolto
- Presenza di marcatori 
- Due versioni del file in conflitto
- Sintassi PHP non valida che impedisce l'esecuzione

### 2. Problemi di Struttura
- Uso di sintassi `array()` invece di `[]` moderna
- Mancanza di `declare(strict_types=1);`
- Struttura non espansa per alcuni campi
- Duplicazioni e campi non necessari

### 3. Non Conformità alle Best Practice Laraxot
- Mancanza di struttura espansa per tutti i campi
- Uso di `helper_text` uguale alla chiave dell'array
- Mancanza di organizzazione logica delle sezioni

## 🛠️ Soluzioni Implementate

### 1. Risoluzione Conflitto di Merge

**Prima**:
```php
declare(strict_types=1);

return [
    // Versione HEAD
];
return array (
    // Versione branch trans
);
```

**Dopo**:
```php
<?php

declare(strict_types=1);

return [
    // Struttura unificata e migliorata
];
```

### 2. Modernizzazione Sintassi

**Prima**:
```php
return array (
  'navigation' => 
  array (
    'label' => 'Invio Email',
    // ...
  ),
);
```

**Dopo**:
```php
return [
    'navigation' => [
        'label' => 'Invio Email',
        // ...
    ],
];
```

### 3. Struttura Espansa Completa

**Implementata per tutti i campi**:
```php
'fields' => [
    'field_name' => [
        'label' => 'Etichetta Campo',
        'placeholder' => 'Placeholder diverso',
        'help' => 'Testo di aiuto specifico',
        'description' => 'Descrizione dettagliata del campo'
    ]
]
```

### 4. Organizzazione in Sezioni Logiche

```php
'sections' => [
    'email_details' => [
        'label' => 'Dettagli Email',
        'description' => 'Informazioni principali dell\'email',
    ],
    'recipients' => [
        'label' => 'Destinatari',
        'description' => 'Configurazione destinatari e copie',
    ],
    'content' => [
        'label' => 'Contenuto',
        'description' => 'Contenuto dell\'email e template',
    ],
    'attachments' => [
        'label' => 'Allegati',
        'description' => 'File da allegare all\'email',
    ],
    'scheduling' => [
        'label' => 'Programmazione',
        'description' => 'Configurazione invio programmato',
    ],
    'advanced' => [
        'label' => 'Avanzate',
        'description' => 'Opzioni avanzate per l\'invio',
    ],
],
```

### 5. Campi Migliorati e Aggiunti

#### Campi per Programmazione
```php
'scheduled_at' => [
    'label' => 'Data e Ora Programmate',
    'placeholder' => 'Seleziona data e ora per l\'invio programmato',
    'help' => 'Programma l\'invio dell\'email per una data e ora specifiche',
    'description' => 'Data e ora per l\'invio programmato dell\'email',
],
```

#### Configurazione Mittente
```php
'from_email' => [
    'label' => 'Email Mittente',
    'placeholder' => 'mittente@dominio.com',
    'help' => 'Indirizzo email del mittente (se diverso dal default)',
    'description' => 'Indirizzo email del mittente personalizzato',
],
'from_name' => [
    'label' => 'Nome Mittente',
    'placeholder' => 'Nome del mittente',
    'help' => 'Nome visualizzato del mittente (se diverso dal default)',
    'description' => 'Nome visualizzato del mittente personalizzato',
],
```

#### Opzioni Priorità Migliorate
```php
'priority' => [
    'label' => 'Priorità',
    'placeholder' => 'Seleziona la priorità dell\'email',
    'help' => 'Imposta la priorità di invio dell\'email',
    'description' => 'Livello di priorità per l\'invio dell\'email',
    'options' => [
        'normal' => 'Normale',
        'high' => 'Alta',
        'urgent' => 'Urgente',
    ],
],
```

### 6. Azioni Migliorate

```php
'actions' => [
    'send' => [
        'label' => 'Invia Email',
        'success' => 'Email inviata con successo al destinatario',
        'error' => 'Errore nell\'invio dell\'email. Verifica la configurazione.',
        'confirmation' => 'Sei sicuro di voler inviare questa email?',
        'tooltip' => 'Invia l\'email al destinatario specificato',
        'modal' => [
            'heading' => 'Conferma Invio Email',
            'description' => 'Stai per inviare un\'email. Questa azione non può essere annullata.',
            'confirm' => 'Invia Email',
            'cancel' => 'Annulla',
        ],
    ],
    'test_smtp' => [
        'label' => 'Test SMTP',
        'success' => 'Test SMTP completato con successo',
        'error' => 'Errore nel test SMTP',
        'tooltip' => 'Testa la configurazione SMTP prima dell\'invio',
        'modal' => [
            'heading' => 'Test Configurazione SMTP',
            'description' => 'Verifica la configurazione SMTP prima dell\'invio',
            'confirm' => 'Esegui Test',
            'cancel' => 'Annulla',
        ],
    ],
],
```

### 7. Messaggi di Validazione Migliorati

```php
'validation' => [
    'subject_required' => 'L\'oggetto dell\'email è obbligatorio',
    'subject_max' => 'L\'oggetto non può superare i 255 caratteri',
    'to_required' => 'Il destinatario è obbligatorio',
    'to_valid' => 'Il destinatario deve essere un indirizzo email valido',
    'to_max' => 'L\'indirizzo email del destinatario è troppo lungo',
    'cc_valid' => 'Gli indirizzi in CC devono essere email valide',
    'cc_max' => 'Uno o più indirizzi in CC sono troppo lunghi',
    'bcc_valid' => 'Gli indirizzi in BCC devono essere email valide',
    'bcc_max' => 'Uno o più indirizzi in BCC sono troppo lunghi',
    'content_required' => 'Il contenuto testuale dell\'email è obbligatorio',
    'content_max' => 'Il contenuto testuale è troppo lungo (max 10000 caratteri)',
    'body_html_max' => 'Il contenuto HTML è troppo lungo (max 20000 caratteri)',
    'template_exists' => 'Il template selezionato non esiste',
    'parameters_required' => 'I parametri sono obbligatori quando si utilizza un template',
    'parameters_json' => 'I parametri devono essere in formato JSON valido',
    'parameters_max' => 'I parametri superano la lunghezza massima consentita',
    'priority_required' => 'La priorità è obbligatoria',
    'priority_valid' => 'La priorità deve essere una delle opzioni disponibili',
    'attachments_max' => 'Numero massimo di allegati consentito: :max',
    'attachments_total_size' => 'La dimensione totale degli allegati supera il limite consentito',
    'file_required' => 'Seleziona un file da allegare',
    'file_size_max' => 'Dimensione massima del file: :max_size',
    'file_type_allowed' => 'Tipo di file non consentito. Tipi supportati: :types',
    'scheduled_at_required' => 'Specifica la data e l\'ora per la programmazione',
    'scheduled_at_date' => 'La data di programmazione non è valida',
    'scheduled_at_after' => 'La data di programmazione deve essere futura',
],
```

### 8. Stati e Categorie Migliorati

```php
'status' => [
    'draft' => 'Bozza',
    'scheduled' => 'Programmata',
    'sending' => 'Invio in corso',
    'sent' => 'Inviata',
    'delivered' => 'Consegnata',
    'opened' => 'Letta',
    'failed' => 'Fallita',
    'bounced' => 'Rimbalzata',
    'complained' => 'Segnalata come spam',
    'cancelled' => 'Annullata',
],

'categories' => [
    'marketing' => 'Marketing',
    'transactional' => 'Transazionale',
    'notification' => 'Notifica',
    'newsletter' => 'Newsletter',
    'system' => 'Sistema',
],
```

## 📋 Validazione e Testing

### 1. Controllo Sintassi PHP
```bash
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>/laravel
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_<nome progetto>/laravel
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
cd /var/www/html/_bases/base_<nome progetto>/laravel
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 909e45af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> b99af5a8 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f3086887 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 3d462363 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 54ad93c4 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6e12a84b (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 69fa7d37 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 23cbbaf5 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> b99af5a8 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f3086887 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 3d462363 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 54ad93c4 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6e12a84b (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 545977c8 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 69fa7d37 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 23cbbaf5 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 909e45af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_<nome progetto>/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
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
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ca10d6ad (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> febe79e3 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a29a4728 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9721a5b2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 1442e291 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9d3810d0 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> d38aa9d2 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9e7ba5b6 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
cd /var/www/html/_bases/base_<nome progetto>/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> fbed41ac (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9cf0dc90 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> febe79e3 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a29a4728 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9721a5b2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 1442e291 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> fcaebc79 (rebase 210)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 4fc21b78 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> d38aa9d2 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_<nome progetto>/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> fbed41ac (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> c8b1c8bf (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9cf0dc90 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b85 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
cd /var/www/html/_bases/base_saluteora/laravel
cd /var/www/html/_bases/base_techplanner_fila3_mono/laravel
>>>>>>> 75179b855 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a404ea71 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> ca10d6ad (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> febe79e3 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> a29a4728 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
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
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
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
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
cd /var/www/html/_bases/base_saluteora/laravel
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
cd /var/www/html/_bases/base_<nome progetto>/laravel
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
php -l Modules/Notify/lang/it/send_email.php

# Output: No syntax errors detected
```

### 2. Conformità Best Practice
- ✅ Sintassi array moderna `[]`
- ✅ `declare(strict_types=1);` presente
- ✅ Struttura espansa per tutti i campi
- ✅ Nessuna duplicazione
- ✅ Campi organizzati logicamente
- ✅ Messaggi di validazione completi
- ✅ Helper text diverso da placeholder e description
- ✅ Organizzazione in sezioni logiche

### 3. Controllo PHPStan
```bash
./vendor/bin/phpstan analyze Modules/Notify/lang/it/send_email.php --level=9
```

## 🔗 Collegamenti

### Documentazione Correlata
- [Regole Traduzioni Laraxot](../../../docs/translation-standards.md)
<<<<<<< HEAD
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
=======
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
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
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
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
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
<<<<<<< HEAD
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
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
>>>>>>> 66453ace (.)
<<<<<<< HEAD
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
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
>>>>>>> 1c96b91fe (.)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> fbed41ac (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> ee18dd92 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 66453ace (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 2a97406c (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 4f042b88 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 712617d3 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> fdb24863 (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 36ac4fc1 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> fbed41ac (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> c8b1c8bf (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)- [Regole Traduzioni Laraxot](../../../project_docs/translation-standards.md)
- [Best Practice Filament](../../../project_docs/FILAMENT-BEST-PRACTICES.md)
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 75179b855 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> ee18dd92 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 66453ace (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 2a97406c (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 4f042b88 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 7ceb00286 (.)
=======
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
- [Best Practice Filament](../../../docs/FILAMENT-BEST-PRACTICES.md)
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
- [Struttura Modulo Notify](./README.md)

### File Modificati
- `laravel/Modules/Notify/lang/it/send_email.php` - File principale migliorato
<<<<<<< HEAD
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
=======
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
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
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
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
<<<<<<< HEAD
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
<<<<<<< HEAD
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
>>>>>>> 998e6866b (.)
=======
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
>>>>>>> 731b801a8 (.)
=======
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
>>>>>>> 7a142b4f5 (.)
=======
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 9cf0dc90 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> f963d2c0 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> ee18dd92 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 66453ace (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 2a97406c (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 4f042b88 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 712617d3 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> fdb24863 (rebase 210)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 4fc21b78 (rebase 210)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 9c45d9bd (rebase 210)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> eb62d6cf (rebase 210)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 8c8937e7 (rebase 210)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 36ac4fc1 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> fbed41ac (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> c8b1c8bf (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 9cf0dc90 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b85 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> f963d2c0 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione- `laravel/Modules/Notify/project_docs/send_email_translation_improvement.md` - Questa documentazione
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 75179b855 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> f963d2c0 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> ee18dd92 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 66453ace (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 2a97406c (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 4f042b88 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 7ceb00286 (.)
=======
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
- `laravel/Modules/Notify/docs/send_email_translation_improvement.md` - Questa documentazione
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)

## 📝 Note di Implementazione

1. **Backward Compatibility**: Le modifiche mantengono compatibilità con il codice esistente
2. **Estensibilità**: La nuova struttura permette facile aggiunta di nuovi campi
3. **Manutenibilità**: Organizzazione logica facilita la manutenzione
4. **Conformità**: Rispetta tutte le convenzioni Laraxot per traduzioni
5. **Struttura Espansa**: Tutti i campi hanno struttura espansa completa
6. **Helper Text**: Nessun helper_text uguale alla chiave dell'array

## 🚀 Prossimi Passi

1. **Testing**: Verificare che tutte le traduzioni funzionino correttamente
2. **Documentazione**: Aggiornare documentazione Filament se necessario
3. **Review**: Code review per verificare conformità standards
4. **Deployment**: Deploy in ambiente di sviluppo per testing

---

**Ultimo aggiornamento**: Gennaio 2025  
**Autore**: Sistema di miglioramento automatico  
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
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
=======
>>>>>>> a55aa5e96 (.)
>>>>>>> 331118f25 (.)
