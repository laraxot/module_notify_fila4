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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
declare(strict_types=1);

<<<<<<< HEAD

=======
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
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
return [
    'resource' => [
        'name' => 'Invio SMS',
        'plural' => 'Invio SMS',
    ],
    'navigation' => [
        'name' => 'Invio SMS',
        'plural' => 'Invio SMS',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione dell\'invio di notifiche SMS',
        ],
        'label' => 'Invio SMS',
        'icon' => 'heroicon-o-chat-bubble-left-right',
        'sort' => '15',
    ],
    'fields' => [
        'driver' => [
            'description' => 'Driver SMS',
            'helper_text' => 'Seleziona il provider per l\'invio SMS',
            'placeholder' => 'Seleziona un driver',
            'label' => 'Driver',
        ],
        'message' => [
            'description' => 'Contenuto del messaggio',
            'helper_text' => 'Testo del messaggio da inviare',
            'placeholder' => 'Scrivi il messaggio',
            'label' => 'Messaggio',
        ],
        'phone' => [
            'description' => 'Numero di telefono',
            'helper_text' => 'Numero del destinatario',
            'placeholder' => 'Inserisci il numero',
            'label' => 'Numero telefono',
        ],
        'gateway' => [
            'description' => 'Gateway SMS',
            'helper_text' => 'Gateway utilizzato per l\'invio',
            'placeholder' => 'Gateway SMS',
            'label' => 'Gateway',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia SMS',
            'tooltip' => 'Invia un messaggio SMS al destinatario',
            'success_message' => 'SMS inviato con successo',
            'error_message' => 'Errore nell\'invio dell\'SMS',
        ],
        'test' => [
            'label' => 'Test connessione',
            'tooltip' => 'Verifica la connessione con il provider',
            'success_message' => 'Connessione verificata con successo',
            'error_message' => 'Errore nella verifica della connessione',
        ],
    ],
    'messages' => [
        'success' => 'SMS inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio dell\'SMS',
        'confirmation' => 'Sei sicuro di voler inviare questo SMS?',
    ],
];
