<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
return [
    'template' => [
        'navigation' => [
            'label' => 'Template Email',
            'plural' => 'Template Email',
            'singular' => 'Template Email',
            'group' => 'Notifiche',
            'icon' => 'heroicon-o-envelope',
        ],
        'fields' => [
            'name' => [
                'label' => 'Nome',
                'placeholder' => 'Inserisci il nome del template',
<<<<<<< HEAD
                'tooltip' => 'Nome identificativo del template',
=======
<<<<<<< HEAD
                'tooltip' => 'Nome identificativo del template',
=======
                'tooltip' => 'Nome identificativo del template'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'code' => [
                'label' => 'Codice',
                'placeholder' => 'Inserisci il codice del template',
<<<<<<< HEAD
                'tooltip' => 'Codice univoco del template',
=======
<<<<<<< HEAD
                'tooltip' => 'Codice univoco del template',
=======
                'tooltip' => 'Codice univoco del template'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'description' => [
                'label' => 'Descrizione',
                'placeholder' => 'Inserisci una descrizione',
<<<<<<< HEAD
                'tooltip' => 'Descrizione dettagliata del template',
=======
<<<<<<< HEAD
                'tooltip' => 'Descrizione dettagliata del template',
=======
                'tooltip' => 'Descrizione dettagliata del template'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Inserisci l\'oggetto dell\'email',
<<<<<<< HEAD
                'tooltip' => 'Oggetto dell\'email',
=======
<<<<<<< HEAD
                'tooltip' => 'Oggetto dell\'email',
=======
                'tooltip' => 'Oggetto dell\'email'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'body_html' => [
                'label' => 'Corpo HTML',
                'placeholder' => 'Inserisci il contenuto HTML',
<<<<<<< HEAD
                'tooltip' => 'Contenuto HTML dell\'email',
=======
<<<<<<< HEAD
                'tooltip' => 'Contenuto HTML dell\'email',
=======
                'tooltip' => 'Contenuto HTML dell\'email'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'body_text' => [
                'label' => 'Corpo Testo',
                'placeholder' => 'Inserisci il contenuto testuale',
<<<<<<< HEAD
                'tooltip' => 'Contenuto testuale dell\'email',
=======
<<<<<<< HEAD
                'tooltip' => 'Contenuto testuale dell\'email',
=======
                'tooltip' => 'Contenuto testuale dell\'email'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'channels' => [
                'label' => 'Canali',
                'placeholder' => 'Seleziona i canali',
                'tooltip' => 'Canali di invio disponibili',
                'options' => [
                    'email' => ['label' => 'Email'],
                    'sms' => ['label' => 'SMS'],
                    'push' => ['label' => 'Push Notification'],
                    'whatsapp' => ['label' => 'WhatsApp'],
<<<<<<< HEAD
                    'telegram' => ['label' => 'Telegram'],
                ],
=======
<<<<<<< HEAD
                    'telegram' => ['label' => 'Telegram'],
                ],
=======
                    'telegram' => ['label' => 'Telegram']
                ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'variables' => [
                'label' => 'Variabili',
                'placeholder' => 'Aggiungi variabili',
<<<<<<< HEAD
                'tooltip' => 'Variabili disponibili nel template',
=======
<<<<<<< HEAD
                'tooltip' => 'Variabili disponibili nel template',
=======
                'tooltip' => 'Variabili disponibili nel template'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'conditions' => [
                'label' => 'Condizioni',
                'placeholder' => 'Aggiungi condizioni',
<<<<<<< HEAD
                'tooltip' => 'Condizioni di invio',
=======
<<<<<<< HEAD
                'tooltip' => 'Condizioni di invio',
=======
                'tooltip' => 'Condizioni di invio'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'preview_data' => [
                'label' => 'Dati Anteprima',
                'placeholder' => 'Aggiungi dati per l\'anteprima',
<<<<<<< HEAD
                'tooltip' => 'Dati per testare il template',
=======
<<<<<<< HEAD
                'tooltip' => 'Dati per testare il template',
=======
                'tooltip' => 'Dati per testare il template'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'category' => [
                'label' => 'Categoria',
                'placeholder' => 'Inserisci la categoria',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                'tooltip' => 'Categoria del template',
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template',
            ],
<<<<<<< HEAD
=======
=======
                'tooltip' => 'Categoria del template'
            ],
            'is_active' => [
                'label' => 'Attivo',
                'tooltip' => 'Stato di attivazione del template'
            ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ],
        'filters' => [
            'category' => [
                'label' => 'Categoria',
                'options' => [
                    'welcome' => ['label' => 'Benvenuto'],
                    'reminder' => ['label' => 'Promemoria'],
<<<<<<< HEAD
                    'notification' => ['label' => 'Notifica'],
                ],
=======
<<<<<<< HEAD
                    'notification' => ['label' => 'Notifica'],
                ],
=======
                    'notification' => ['label' => 'Notifica']
                ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'is_active' => [
                'label' => 'Stato',
                'options' => [
                    'active' => ['label' => 'Attivo'],
<<<<<<< HEAD
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
=======
<<<<<<< HEAD
                    'inactive' => ['label' => 'Inattivo'],
                ],
            ],
=======
                    'inactive' => ['label' => 'Inattivo']
                ]
            ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ],
        'actions' => [
            'edit' => [
                'label' => 'Modifica',
                'icon' => 'heroicon-o-pencil',
<<<<<<< HEAD
                'color' => 'primary',
=======
<<<<<<< HEAD
                'color' => 'primary',
=======
                'color' => 'primary'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'delete' => [
                'label' => 'Elimina',
                'icon' => 'heroicon-o-trash',
<<<<<<< HEAD
                'color' => 'danger',
=======
<<<<<<< HEAD
                'color' => 'danger',
=======
                'color' => 'danger'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ],
            'preview' => [
                'label' => 'Anteprima',
                'icon' => 'heroicon-o-eye',
<<<<<<< HEAD
                'color' => 'success',
            ],
=======
<<<<<<< HEAD
                'color' => 'success',
            ],
=======
                'color' => 'success'
            ]
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ],
        'preview' => [
            'title' => 'Anteprima Template',
            'subject' => 'Oggetto',
            'body_html' => 'Contenuto HTML',
            'body_text' => 'Contenuto Testuale',
            'variables' => 'Variabili',
            'actions' => [
                'back' => [
                    'label' => 'Torna indietro',
                    'icon' => 'heroicon-o-arrow-left',
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                    'color' => 'secondary',
                ],
            ],
        ],
    ],
];
<<<<<<< HEAD
=======
=======
                    'color' => 'secondary'
                ]
            ]
        ]
    ]
]; 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
