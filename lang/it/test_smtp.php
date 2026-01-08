<?php

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)
declare(strict_types=1);

return [
    'navigation' => [
        'group' => 'test smtp.navigation',
    ],
    'actions' => [
        'logout' => [
            'tooltip' => 'logout',
            'icon' => 'logout',
            'label' => 'logout',
        ],
        'emailFormActions' => [
            'tooltip' => 'emailFormActions',
            'icon' => 'emailFormActions',
            'label' => 'emailFormActions',
        ],
        'profile' => [
            'tooltip' => 'profile',
            'icon' => 'profile',
        ],
    ],
    'fields' => [
        'body_html' => [
            'description' => 'body_html',
            'helper_text' => 'body_html',
        ],
    ],
];
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
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
>>>>>>> b19cd40 (.)
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)
