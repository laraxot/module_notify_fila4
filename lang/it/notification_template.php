<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> 75179b8 (.)
return [
    'navigation' => [
        'icon' => 'heroicon-o-document-text',
        'label' => 'Template Notifiche',
        'group' => 'Sistema',
        'sort' => 52,
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'helper' => 'Nome univoco del template',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'helper' => 'Oggetto della notifica',
        ],
        'type' => [
            'label' => 'Tipo',
            'helper' => 'Tipo di notifica',
        ],
        'body_text' => [
            'label' => 'Testo Semplice',
            'helper' => 'Versione testo semplice della notifica',
        ],
        'body_html' => [
            'label' => 'HTML',
            'helper' => 'Versione HTML della notifica',
        ],
        'preview_data' => [
            'label' => 'Dati di Anteprima',
            'helper' => 'Dati JSON per l\'anteprima',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
    ],
    'columns' => [
        'name' => 'Nome',
        'subject' => 'Oggetto',
        'type' => 'Tipo',
        'created_at' => 'Creato il',
        'updated_at' => 'Aggiornato il',
    ],
    'actions' => [
        'preview' => 'Anteprima',
<<<<<<< HEAD
        'openColumnManager' => [
            'tooltip' => 'openColumnManager',
        ],
=======
>>>>>>> 75179b8 (.)
    ],
    'enums' => [
        'notification_type' => [
            'email' => 'Email',
            'sms' => 'SMS',
            'push' => 'Notifica Push',
        ],
    ],
];
<<<<<<< HEAD
=======
return array (
  'navigation' => 
  array (
    'icon' => 'heroicon-o-document-text',
    'label' => 'Template Notifiche',
    'group' => 'Sistema',
    'sort' => 52,
  ),
  'fields' => 
  array (
    'name' => 
    array (
      'label' => 'Nome',
      'helper' => 'Nome univoco del template',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'helper' => 'Oggetto della notifica',
    ),
    'type' => 
    array (
      'label' => 'Tipo',
      'helper' => 'Tipo di notifica',
    ),
    'body_text' => 
    array (
      'label' => 'Testo Semplice',
      'helper' => 'Versione testo semplice della notifica',
    ),
    'body_html' => 
    array (
      'label' => 'HTML',
      'helper' => 'Versione HTML della notifica',
    ),
    'preview_data' => 
    array (
      'label' => 'Dati di Anteprima',
      'helper' => 'Dati JSON per l\'anteprima',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
  ),
  'columns' => 
  array (
    'name' => 'Nome',
    'subject' => 'Oggetto',
    'type' => 'Tipo',
    'created_at' => 'Creato il',
    'updated_at' => 'Aggiornato il',
  ),
  'actions' => 
  array (
    'preview' => 'Anteprima',
  ),
  'enums' => 
  array (
    'notification_type' => 
    array (
      'email' => 'Email',
      'sms' => 'SMS',
      'push' => 'Notifica Push',
    ),
  ),
);
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
