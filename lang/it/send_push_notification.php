<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
return [
    'resource' => [
        'name' => 'Invio Notifica Push',
    ],
    'navigation' => [
        'name' => 'Invio Notifica Push',
        'plural' => 'Invio Notifiche Push',
        'group' => [
            'name' => 'Sistema',
            'description' => 'Funzionalità per l\'invio di notifiche push tramite Firebase',
        ],
        'label' => 'Invio Notifiche Push',
        'icon' => 'notify-push-animated',
        'sort' => 51,
    ],
    'fields' => [
        'device_token' => [
            'label' => 'Token Dispositivo',
        ],
        'type' => [
            'label' => 'Tipo',
            'options' => [
                'notification' => 'Notifica',
                'data' => 'Dati',
                'both' => 'Entrambi',
            ],
        ],
        'title' => [
            'label' => 'Titolo',
        ],
        'body' => [
            'label' => 'Contenuto',
        ],
        'data' => [
            'label' => 'Dati Aggiuntivi',
            'description' => 'Dati in formato JSON da inviare con la notifica',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia Notifica',
            'success' => 'Notifica push inviata con successo',
            'error' => 'Errore durante l\'invio della notifica push',
        ],
        'preview' => [
            'label' => 'Anteprima',
        ],
    ],
];
