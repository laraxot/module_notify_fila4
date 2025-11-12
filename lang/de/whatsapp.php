<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
return [
    'resource' => [
        'name' => 'WhatsApp',
        'plural' => 'WhatsApp',
    ],
    'navigation' => [
        'name' => 'Invio WhatsApp',
        'plural' => 'Invio WhatsApp',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione delle notifiche WhatsApp',
        ],
        'label' => 'Invio WhatsApp',
        'icon' => 'heroicon-o-chat-bubble-left-right',
        'sort' => '20',
    ],
    'fields' => [
        'to' => [
            'label' => 'Numero di telefono',
            'placeholder' => 'Inserisci il numero di telefono',
            'helper_text' => 'Inserisci il numero di telefono con prefisso internazionale (es. +39)',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Inserisci il messaggio',
            'helper_text' => 'Il messaggio non può superare i 4096 caratteri',
        ],
        'driver' => [
            'label' => 'Provider WhatsApp',
            'placeholder' => 'Seleziona il provider WhatsApp',
            'helper_text' => 'Seleziona il provider WhatsApp da utilizzare',
        ],
        'template' => [
            'label' => 'Template',
            'placeholder' => 'Inserisci il nome del template',
            'helper_text' => 'Nome del template (opzionale)',
        ],
        'parameters' => [
            'label' => 'Parametri',
            'placeholder' => 'Inserisci i parametri',
            'helper_text' => 'Parametri per il template (opzionale)',
        ],
        'media_url' => [
            'label' => 'URL Media',
            'placeholder' => 'Inserisci l\'URL del media',
            'helper_text' => 'URL del media (opzionale)',
        ],
        'media_type' => [
            'label' => 'Tipo Media',
            'placeholder' => 'Seleziona il tipo di media',
            'helper_text' => 'Seleziona il tipo di media',
        ],
    ],
    'drivers' => [
        'twilio' => 'Twilio',
        'messagebird' => 'MessageBird',
        'vonage' => 'Vonage',
        'infobip' => 'Infobip',
    ],
    'media_types' => [
        'image' => 'Immagine',
        'video' => 'Video',
        'document' => 'Documento',
        'audio' => 'Audio',
    ],
    'actions' => [
        'send' => 'Invia WhatsApp',
        'cancel' => 'Annulla',
    ],
    'messages' => [
        'success' => 'WhatsApp inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio del WhatsApp',
    ],
];
