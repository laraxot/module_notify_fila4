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
=======
>>>>>>> 888799d0 (.)
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
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
return [
    'resource' => [
        'name' => 'Invio SMS Netfun',
        'plural' => 'Invio SMS Netfun',
    ],
    'navigation' => [
        'name' => 'Invio SMS (Netfun)',
        'plural' => 'Invio SMS (Netfun)',
        'group' => [
            'name' => 'Notifiche',
            'description' => 'Gestione dell\'invio di notifiche SMS tramite Netfun',
        ],
        'label' => 'Invio SMS (Netfun)',
        'icon' => 'heroicon-o-chat-bubble-left-right',
        'sort' => '15',
    ],
    'fields' => [
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'Inserisci il numero di telefono',
            'helper_text' => 'Numero di telefono del destinatario',
        ],
        'message' => [
            'label' => 'Messaggio',
            'placeholder' => 'Scrivi il testo del messaggio',
            'helper_text' => 'Contenuto del messaggio SMS',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia',
            'tooltip' => 'Invia un messaggio SMS tramite Netfun',
            'success_message' => 'Messaggio SMS inviato con successo',
            'error_message' => 'Errore nell\'invio del messaggio SMS',
        ],
    ],
    'messages' => [
        'success' => 'Messaggio SMS inviato con successo tramite Netfun',
        'error' => 'Si è verificato un errore durante l\'invio del messaggio SMS',
        'confirmation' => 'Sei sicuro di voler inviare questo messaggio SMS?',
    ],
];
