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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
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
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> 99ff506 (.)
return [
    'navigation' => [
        'label' => 'Test SMTP',
        'group' => [
            'label' => 'Sistema',
            'description' => 'Test configurazione server SMTP',
        ],
        'icon' => 'heroicon-o-envelope',
        'sort' => 50,
    ],
    'fields' => [
        'host' => [
            'label' => 'Host SMTP',
            'placeholder' => 'smtp.gmail.com',
            'help' => 'Indirizzo del server SMTP',
        ],
        'port' => [
            'label' => 'Porta',
            'placeholder' => '587 o 465',
            'help' => 'Porta del server SMTP (587 per TLS, 465 per SSL)',
        ],
        'username' => [
            'label' => 'Username',
            'placeholder' => 'user@gmail.com',
            'help' => 'Username per l\'autenticazione SMTP',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '********',
            'help' => 'Password per l\'autenticazione SMTP',
        ],
        'encryption' => [
            'label' => 'Crittografia',
            'placeholder' => 'TLS o SSL',
            'help' => 'Tipo di crittografia per la connessione sicura',
        ],
        'from_email' => [
            'label' => 'Email mittente',
            'placeholder' => 'mittente@dominio.it',
            'help' => 'Indirizzo email del mittente',
        ],
        'from_name' => [
            'label' => 'Nome mittente',
            'placeholder' => 'Sistema Notifiche',
            'help' => 'Nome visualizzato del mittente',
        ],
        'to' => [
            'label' => 'Destinatario',
            'placeholder' => 'test@email.it',
            'help' => 'Indirizzo email del destinatario per il test',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'placeholder' => 'Test configurazione SMTP',
            'help' => 'Oggetto della mail di test',
        ],
        'body_html' => [
            'label' => 'Contenuto HTML',
            'placeholder' => '<p>Questa è una mail di test per verificare la configurazione SMTP.</p>',
            'help' => 'Contenuto HTML della mail di test',
            'description' => 'body_html',
        ],
    ],
    'actions' => [
        'send' => [
            'label' => 'Invia Test',
            'success' => 'Test SMTP inviato con successo',
            'error' => 'Errore durante l\'invio del test SMTP',
            'confirmation' => 'Sei sicuro di voler inviare la mail di test?',
        ],
        'test_connection' => [
            'label' => 'Test Connessione',
            'success' => 'Connessione SMTP riuscita',
            'error' => 'Errore nella connessione SMTP',
        ],
        'emailFormActions' => [
            'label' => 'emailFormActions',
        ],
    ],
    'messages' => [
        'success' => 'Test SMTP inviato con successo',
        'error' => 'Si è verificato un errore durante l\'invio del test SMTP',
        'connection_success' => 'Connessione al server SMTP riuscita',
        'connection_error' => 'Impossibile connettersi al server SMTP',
        'authentication_error' => 'Errore di autenticazione SMTP',
        'configuration_error' => 'Errore nella configurazione SMTP',
    ],
    'validation' => [
        'host_required' => 'L\'host SMTP è obbligatorio',
        'port_required' => 'La porta SMTP è obbligatoria',
        'port_numeric' => 'La porta deve essere un numero',
        'username_required' => 'Lo username SMTP è obbligatorio',
        'password_required' => 'La password SMTP è obbligatoria',
        'from_email_required' => 'L\'email mittente è obbligatoria',
        'from_email_valid' => 'L\'email mittente deve essere un indirizzo valido',
        'to_required' => 'L\'email destinatario è obbligatoria',
        'to_valid' => 'L\'email destinatario deve essere un indirizzo valido',
        'subject_required' => 'L\'oggetto della email è obbligatorio',
    ],
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 4d2eb53e (.)
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
=======
=======
>>>>>>> 8e5817bc (.)
return array (
  'navigation' => 
  array (
    'label' => 'Test SMTP',
    'group' => 
    array (
      'label' => 'Sistema',
      'description' => 'Test configurazione server SMTP',
    ),
    'icon' => 'heroicon-o-envelope',
    'sort' => 50,
  ),
  'fields' => 
  array (
    'host' => 
    array (
      'label' => 'Host SMTP',
      'placeholder' => 'smtp.gmail.com',
      'help' => 'Indirizzo del server SMTP',
    ),
    'port' => 
    array (
      'label' => 'Porta',
      'placeholder' => '587 o 465',
      'help' => 'Porta del server SMTP (587 per TLS, 465 per SSL)',
    ),
    'username' => 
    array (
      'label' => 'Username',
      'placeholder' => 'user@gmail.com',
      'help' => 'Username per l\'autenticazione SMTP',
    ),
    'password' => 
    array (
      'label' => 'Password',
      'placeholder' => '********',
      'help' => 'Password per l\'autenticazione SMTP',
    ),
    'encryption' => 
    array (
      'label' => 'Crittografia',
      'placeholder' => 'TLS o SSL',
      'help' => 'Tipo di crittografia per la connessione sicura',
    ),
    'from_email' => 
    array (
      'label' => 'Email mittente',
      'placeholder' => 'mittente@dominio.it',
      'help' => 'Indirizzo email del mittente',
    ),
    'from_name' => 
    array (
      'label' => 'Nome mittente',
      'placeholder' => 'Sistema Notifiche',
      'help' => 'Nome visualizzato del mittente',
    ),
    'to' => 
    array (
      'label' => 'Destinatario',
      'placeholder' => 'test@email.it',
      'help' => 'Indirizzo email del destinatario per il test',
    ),
    'subject' => 
    array (
      'label' => 'Oggetto',
      'placeholder' => 'Test configurazione SMTP',
      'help' => 'Oggetto della mail di test',
    ),
    'body_html' => 
    array (
      'label' => 'Contenuto HTML',
      'placeholder' => '<p>Questa è una mail di test per verificare la configurazione SMTP.</p>',
      'help' => 'Contenuto HTML della mail di test',
      'description' => 'body_html',
    ),
  ),
  'actions' => 
  array (
    'send' => 
    array (
      'label' => 'Invia Test',
      'success' => 'Test SMTP inviato con successo',
      'error' => 'Errore durante l\'invio del test SMTP',
      'confirmation' => 'Sei sicuro di voler inviare la mail di test?',
    ),
    'test_connection' => 
    array (
      'label' => 'Test Connessione',
      'success' => 'Connessione SMTP riuscita',
      'error' => 'Errore nella connessione SMTP',
    ),
    'emailFormActions' => 
    array (
      'label' => 'emailFormActions',
    ),
  ),
  'messages' => 
  array (
    'success' => 'Test SMTP inviato con successo',
    'error' => 'Si è verificato un errore durante l\'invio del test SMTP',
    'connection_success' => 'Connessione al server SMTP riuscita',
    'connection_error' => 'Impossibile connettersi al server SMTP',
    'authentication_error' => 'Errore di autenticazione SMTP',
    'configuration_error' => 'Errore nella configurazione SMTP',
  ),
  'validation' => 
  array (
    'host_required' => 'L\'host SMTP è obbligatorio',
    'port_required' => 'La porta SMTP è obbligatoria',
    'port_numeric' => 'La porta deve essere un numero',
    'username_required' => 'Lo username SMTP è obbligatorio',
    'password_required' => 'La password SMTP è obbligatoria',
    'from_email_required' => 'L\'email mittente è obbligatoria',
    'from_email_valid' => 'L\'email mittente deve essere un indirizzo valido',
    'to_required' => 'L\'email destinatario è obbligatoria',
    'to_valid' => 'L\'email destinatario deve essere un indirizzo valido',
    'subject_required' => 'L\'oggetto della email è obbligatorio',
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
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
