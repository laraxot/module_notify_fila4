<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Template Email',
        'plural' => 'Template Email',
    ],
    'navigation' => [
        'name' => 'Template Email',
        'plural' => 'Template Email',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione delle notifiche email e dei relativi template',
        ],
        'label' => 'Template Email',
        'icon' => 'heroicon-o-envelope',
        'sort' => 1,
    ],
    'sections' => [
        'main' => 'Informazioni Principali',
        'content' => 'Contenuto',
        'styling' => 'Stile',
        'settings' => 'Impostazioni',
        'variables' => 'Variabili',
    ],
    'fields' => [
        'id' => [
            'label' => 'ID',
            'helper_text' => 'Identificativo univoco del template',
        ],
        'mailable' => [
            'label' => 'Classe Mailable',
            'helper_text' => 'Classe PHP che gestisce l\'invio dell\'email',
            'placeholder' => 'es: App\\Mail\\WelcomeEmail',
            'description' => 'mailable',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'helper_text' => 'Oggetto dell\'email',
            'placeholder' => 'Inserisci l\'oggetto dell\'email',
            'description' => 'subject',
        ],
        'html_template' => [
            'label' => 'Template HTML',
            'helper_text' => 'Contenuto HTML del template email',
            'placeholder' => 'Inserisci il codice HTML',
            'description' => 'html_template',
        ],
        'text_template' => [
            'label' => 'Template Testo',
            'helper_text' => 'Versione testuale del template email',
            'placeholder' => 'Inserisci la versione testuale',
            'description' => 'text_template',
        ],
        'from_email' => [
            'label' => 'Email mittente',
            'helper_text' => 'Indirizzo email del mittente',
            'placeholder' => 'noreply@example.com',
        ],
        'from_name' => [
            'label' => 'Nome mittente',
            'helper_text' => 'Nome visualizzato del mittente',
            'placeholder' => 'Nome Azienda',
        ],
        'variables' => [
            'label' => 'Variabili disponibili',
            'helper_text' => 'Elenco delle variabili che possono essere utilizzate nel template',
            'placeholder' => 'es: {{name}}, {{email}}',
        ],
        'is_markdown' => [
            'label' => 'Usa Markdown',
            'helper_text' => 'Indica se il template utilizza la sintassi Markdown',
        ],
        'status' => [
            'label' => 'Stato',
            'helper_text' => 'Stato attuale del template',
        ],
        'created_at' => [
            'label' => 'Data creazione',
            'helper_text' => 'Data di creazione del template',
        ],
        'updated_at' => [
            'label' => 'Ultima modifica',
            'helper_text' => 'Data dell\'ultima modifica del template',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'layout' => [
            'label' => 'layout',
        ],
        'slug' => [
            'label' => 'slug',
            'description' => 'slug',
            'helper_text' => 'slug',
            'placeholder' => 'slug',
        ],
        'name' => [
            'description' => 'Nome del template',
            'helper_text' => 'Nome descrittivo per identificare il template',
            'placeholder' => 'Es: Benvenuto, Conferma ordine, Reset password',
            'label' => 'Nome Template',
        ],
        'params' => [
            'label' => 'Parametri',
            'helper_text' => 'Inserisci i parametri separati da virgola che possono essere utilizzati nel template',
            'placeholder' => 'name, email, date, company',
            'description' => 'Parametri disponibili per il template email',
        ],
        'delete' => [
            'label' => 'delete',
        ],
        'sms_template' => [
            'description' => 'sms_template',
            'helper_text' => 'sms_template',
            'placeholder' => 'sms_template',
            'label' => 'sms_template',
        ],
        'edit' => [
            'label' => 'edit',
        ],
        'view' => [
            'label' => 'view',
        ],
        'create' => [
            'label' => 'create',
        ],
        'counter' => [
            'label' => 'counter',
        ],
    ],
    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza anteprima dell\'email',
            'success_message' => 'Anteprima generata con successo',
            'error_message' => 'Errore nella generazione dell\'anteprima',
        ],
        'test' => [
            'label' => 'Invia test',
            'tooltip' => 'Invia un\'email di test',
            'success_message' => 'Email di test inviata con successo',
            'error_message' => 'Errore nell\'invio dell\'email di test',
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'tooltip' => 'Crea una copia del template',
            'success_message' => 'Template duplicato con successo',
            'error_message' => 'Errore nella duplicazione del template',
        ],
        'export' => [
            'label' => 'Esporta',
            'tooltip' => 'Esporta il template in formato JSON',
            'success_message' => 'Template esportato con successo',
            'error_message' => 'Errore nell\'esportazione del template',
        ],
        'import' => [
            'label' => 'Importa',
            'tooltip' => 'Importa un template da un file JSON',
            'success_message' => 'Template importato con successo',
            'error_message' => 'Errore nell\'importazione del template',
        ],
        'activeLocale' => [
            'label' => 'activeLocale',
        ],
        'logout' => [
            'tooltip' => 'logout',
            'icon' => 'logout',
            'label' => 'logout',
        ],
        'profile' => [
            'tooltip' => 'profile',
            'icon' => 'profile',
            'label' => 'profile',
        ],
        'cancel' => [
            'tooltip' => 'cancel',
            'icon' => 'cancel',
            'label' => 'cancel',
        ],
        'reorderRecords' => [
            'tooltip' => 'reorderRecords',
            'icon' => 'reorderRecords',
            'label' => 'reorderRecords',
        ],
        'save' => [
            'tooltip' => 'save',
            'icon' => 'save',
            'label' => 'save',
        ],
    ],
    'messages' => [
        'success' => 'Operazione completata con successo',
        'error' => 'Si è verificato un errore durante l\'operazione',
        'confirmation' => 'Sei sicuro di voler procedere con questa operazione?',
        'template_created' => 'Il template email è stato creato con successo',
        'template_updated' => 'Il template email è stato aggiornato con successo',
        'template_deleted' => 'Il template email è stato eliminato con successo',
    ],
    'status' => [
        'sent' => 'Inviata',
        'delivered' => 'Consegnata',
        'failed' => 'Fallita',
        'opened' => 'Aperta',
        'clicked' => 'Cliccata',
        'bounced' => 'Respinta',
        'spam' => 'Segnalata come spam',
    ],
    'model' => [
        'label' => 'mail template.model',
    ],
    'label' => 'mail template',
];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
return array (
  'resource' => 
  array (
    'name' => 'Template Email',
    'plural' => 'Template Email',
  ),
  'navigation' => 
  array (
    'name' => 'Template Email',
    'plural' => 'Template Email',
    'group' => 
    array (
      'name' => 'Notifiche',
      'description' => 'Gestione delle notifiche email e dei relativi template',
    ),
    'label' => 'Template Email',
    'icon' => 'heroicon-o-envelope',
    'sort' => 1,
  ),
  'sections' => 
  array (
    'main' => 'Informazioni Principali',
    'content' => 'Contenuto',
    'styling' => 'Stile',
    'settings' => 'Impostazioni',
    'variables' => 'Variabili',
  ),
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'helper_text' => 'Identificativo univoco del template',
    ),
    'mailable' => 
    array (
      'label' => 'Classe Mailable',
      'helper_text' => 'Classe PHP che gestisce l\'invio dell\'email',
      'placeholder' => 'es: App\\Mail\\WelcomeEmail',
      'description' => 'mailable',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'helper_text' => 'Oggetto dell\'email',
      'placeholder' => 'Inserisci l\'oggetto dell\'email',
      'description' => 'subject',
    ),
    'html_template' => 
    array (
      'label' => 'Template HTML',
      'helper_text' => 'Contenuto HTML del template email',
      'placeholder' => 'Inserisci il codice HTML',
      'description' => 'html_template',
    ),
    'text_template' => 
    array (
      'label' => 'Template Testo',
      'helper_text' => 'Versione testuale del template email',
      'placeholder' => 'Inserisci la versione testuale',
      'description' => 'text_template',
    ),
    'from_email' => 
    array (
      'label' => 'Email mittente',
      'helper_text' => 'Indirizzo email del mittente',
      'placeholder' => 'noreply@example.com',
    ),
    'from_name' => 
    array (
      'label' => 'Nome mittente',
      'helper_text' => 'Nome visualizzato del mittente',
      'placeholder' => 'Nome Azienda',
    ),
    'variables' => 
    array (
      'label' => 'Variabili disponibili',
      'helper_text' => 'Elenco delle variabili che possono essere utilizzate nel template',
      'placeholder' => 'es: {{name}}, {{email}}',
    ),
    'is_markdown' => 
    array (
      'label' => 'Usa Markdown',
      'helper_text' => 'Indica se il template utilizza la sintassi Markdown',
    ),
    'status' => 
    array (
      'label' => 'Stato',
      'helper_text' => 'Stato attuale del template',
    ),
    'created_at' => 
    array (
      'label' => 'Data creazione',
      'helper_text' => 'Data di creazione del template',
    ),
    'updated_at' => 
    array (
      'label' => 'Ultima modifica',
      'helper_text' => 'Data dell\'ultima modifica del template',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'layout' => 
    array (
      'label' => 'layout',
    ),
    'slug' => 
    array (
      'label' => 'slug',
      'description' => 'slug',
      'helper_text' => 'slug',
      'placeholder' => 'slug',
    ),
    'name' => 
    array (
      'description' => 'Nome del template',
      'helper_text' => 'Nome descrittivo per identificare il template',
      'placeholder' => 'Es: Benvenuto, Conferma ordine, Reset password',
      'label' => 'Nome Template',
    ),
    'params' => 
    array (
      'label' => 'Parametri',
      'helper_text' => 'Inserisci i parametri separati da virgola che possono essere utilizzati nel template',
      'placeholder' => 'name, email, date, company',
      'description' => 'Parametri disponibili per il template email',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'sms_template' => 
    array (
      'description' => 'sms_template',
      'helper_text' => 'sms_template',
      'placeholder' => 'sms_template',
      'label' => 'sms_template',
    ),
    'edit' => 
    array (
      'label' => 'edit',
    ),
    'view' => 
    array (
      'label' => 'view',
    ),
    'create' => 
    array (
      'label' => 'create',
    ),
    'counter' => 
    array (
      'label' => 'counter',
    ),
  ),
  'actions' => 
  array (
    'preview' => 
    array (
      'label' => 'Anteprima',
      'tooltip' => 'Visualizza anteprima dell\'email',
      'success_message' => 'Anteprima generata con successo',
      'error_message' => 'Errore nella generazione dell\'anteprima',
    ),
    'test' => 
    array (
      'label' => 'Invia test',
      'tooltip' => 'Invia un\'email di test',
      'success_message' => 'Email di test inviata con successo',
      'error_message' => 'Errore nell\'invio dell\'email di test',
    ),
    'duplicate' => 
    array (
      'label' => 'Duplica',
      'tooltip' => 'Crea una copia del template',
      'success_message' => 'Template duplicato con successo',
      'error_message' => 'Errore nella duplicazione del template',
    ),
    'export' => 
    array (
      'label' => 'Esporta',
      'tooltip' => 'Esporta il template in formato JSON',
      'success_message' => 'Template esportato con successo',
      'error_message' => 'Errore nell\'esportazione del template',
    ),
    'import' => 
    array (
      'label' => 'Importa',
      'tooltip' => 'Importa un template da un file JSON',
      'success_message' => 'Template importato con successo',
      'error_message' => 'Errore nell\'importazione del template',
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
  ),
  'messages' => 
  array (
    'success' => 'Operazione completata con successo',
    'error' => 'Si è verificato un errore durante l\'operazione',
    'confirmation' => 'Sei sicuro di voler procedere con questa operazione?',
    'template_created' => 'Il template email è stato creato con successo',
    'template_updated' => 'Il template email è stato aggiornato con successo',
    'template_deleted' => 'Il template email è stato eliminato con successo',
  ),
  'status' => 
  array (
    'sent' => 'Inviata',
    'delivered' => 'Consegnata',
    'failed' => 'Fallita',
    'opened' => 'Aperta',
    'clicked' => 'Cliccata',
    'bounced' => 'Respinta',
    'spam' => 'Segnalata come spam',
  ),
  'model' => 
  array (
    'label' => 'mail template.model',
  ),
);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
