<?php

declare(strict_types=1);

<<<<<<< HEAD
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
=======

>>>>>>> 7148d73 (.)
return [
    'resource' => [
        'name' => 'Invio WhatsApp',
        'plural' => 'Invio WhatsApp',
    ],
    'navigation' => [
        'name' => 'Invio WhatsApp',
        'plural' => 'Invio WhatsApp',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione dell\'invio di notifiche WhatsApp',
        ],
        'label' => 'Invio WhatsApp',
        'icon' => 'heroicon-o-paper-airplane',
        'sort' => '20',
    ],
    'fields' => [
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'Inserisci il numero',
            'helper_text' => 'Numero di telefono del destinatario',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Scrivi il messaggio',
            'helper_text' => 'Contenuto del messaggio WhatsApp',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia',
            'tooltip' => 'Invia un messaggio WhatsApp al destinatario',
            'success_message' => 'Messaggio WhatsApp inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio WhatsApp',
        ],
    ],
    'messages' => [
        'success' => 'Messaggio WhatsApp inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio del messaggio WhatsApp',
        'confirmation' => 'Sei sicuro di voler inviare questo messaggio WhatsApp?',
    ],
];
