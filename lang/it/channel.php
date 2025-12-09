<?php

declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Canale di Notifica',
    ],
    'navigation' => [
        'group' => 'Sistema',
        'label' => 'Canali di Notifica',
        'icon' => 'notify-channel-animated',
        'sort' => 47,
        'description' => 'Gestione dei canali di comunicazione per le notifiche',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome identificativo del canale',
            'placeholder' => 'es: Email Marketing',
            'help' => 'Inserisci un nome univoco per identificare il canale',
        ],
        'driver' => [
            'label' => 'Driver',
            'tooltip' => 'Tipo di servizio utilizzato per l\'invio',
            'help' => 'Seleziona il driver appropriato per questo canale',
            'options' => [
                'mail' => [
                    'label' => 'Email',
                    'tooltip' => 'Invio tramite server SMTP',
                ],
                'database' => [
                    'label' => 'Database',
                    'tooltip' => 'Salvataggio nel database',
                ],
                'broadcast' => [
                    'label' => 'Broadcast',
                    'tooltip' => 'Invio tramite websocket',
                ],
                'sms' => [
                    'label' => 'SMS',
                    'tooltip' => 'Invio tramite gateway SMS',
                ],
                'telegram' => [
                    'label' => 'Telegram',
                    'tooltip' => 'Invio tramite bot Telegram',
                ],
                'slack' => [
                    'label' => 'Slack',
                    'tooltip' => 'Invio tramite webhook Slack',
                ],
            ],
        ],
        'configuration' => [
            'label' => 'Configurazione',
            'tooltip' => 'Parametri di configurazione del canale',
            'help' => 'Configura i parametri necessari per il funzionamento del canale',
            'options' => [
                'host' => [
                    'label' => 'Host',
                    'tooltip' => 'Indirizzo del server',
                    'placeholder' => 'es: smtp.gmail.com',
                ],
                'port' => [
                    'label' => 'Porta',
                    'tooltip' => 'Porta di connessione',
                    'placeholder' => 'es: 587',
                ],
                'username' => [
                    'label' => 'Username',
                    'tooltip' => 'Nome utente per l\'autenticazione',
                    'placeholder' => 'es: user@example.com',
                ],
                'password' => [
                    'label' => 'Password',
                    'tooltip' => 'Password per l\'autenticazione',
                    'help' => 'La password verrà criptata prima del salvataggio',
                ],
                'encryption' => [
                    'label' => 'Crittografia',
                    'tooltip' => 'Metodo di crittografia',
                    'options' => [
                        'tls' => [
                            'label' => 'TLS',
                            'tooltip' => 'Transport Layer Security',
                        ],
                        'ssl' => [
                            'label' => 'SSL',
                            'tooltip' => 'Secure Sockets Layer',
                        ],
                    ],
                ],
                'from_address' => [
                    'label' => 'Indirizzo mittente',
                    'tooltip' => 'Indirizzo email del mittente',
                    'placeholder' => 'es: noreply@example.com',
                ],
                'from_name' => [
                    'label' => 'Nome mittente',
                    'tooltip' => 'Nome visualizzato del mittente',
                    'placeholder' => 'es: Sistema Notifiche',
                ],
                'api_key' => [
                    'label' => 'API Key',
                    'tooltip' => 'Chiave API per l\'autenticazione',
                    'help' => 'Chiave fornita dal servizio per l\'autenticazione',
                ],
                'api_secret' => [
                    'label' => 'API Secret',
                    'tooltip' => 'Chiave segreta API',
                    'help' => 'Non condividere mai questa chiave',
                ],
                'bot_token' => [
                    'label' => 'Token Bot',
                    'tooltip' => 'Token del bot Telegram',
                    'help' => 'Ottieni il token da @BotFather su Telegram',
                ],
                'chat_id' => [
                    'label' => 'ID Chat',
                    'tooltip' => 'ID della chat Telegram',
                    'help' => 'ID del gruppo o canale Telegram',
                ],
                'webhook_url' => [
                    'label' => 'URL Webhook',
                    'tooltip' => 'URL per le chiamate webhook',
                    'placeholder' => 'es: https://hooks.slack.com/services/...',
                ],
            ],
        ],
        'is_default' => [
            'label' => 'Predefinito',
            'tooltip' => 'Imposta come canale predefinito',
            'help' => 'Il canale predefinito verrà utilizzato quando non specificato diversamente',
        ],
        'is_enabled' => [
            'label' => 'Abilitato',
            'tooltip' => 'Stato di attivazione del canale',
            'help' => 'Disabilita temporaneamente il canale senza eliminarlo',
        ],
    ],
    'actions' => [
        'test_connection' => [
            'label' => 'Testa connessione',
            'tooltip' => 'Verifica la configurazione del canale',
            'icon' => 'heroicon-o-signal',
            'color' => 'info',
        ],
        'send_test' => [
            'label' => 'Invia test',
            'tooltip' => 'Invia un messaggio di test',
            'icon' => 'heroicon-o-paper-airplane',
            'color' => 'primary',
            'confirmation' => [
                'title' => 'Conferma test',
                'message' => 'Vuoi inviare un messaggio di test?',
                'confirm' => 'Sì, invia',
                'cancel' => 'No, annulla',
            ],
        ],
    ],
    'messages' => [
        'connection_success' => [
            'title' => 'Connessione Riuscita',
            'message' => 'La connessione al canale è stata stabilita con successo',
        ],
        'connection_failed' => [
            'title' => 'Errore di Connessione',
            'message' => 'Impossibile connettersi al canale: :error',
        ],
        'test_sent' => [
            'title' => 'Test Inviato',
            'message' => 'Il messaggio di test è stato inviato con successo',
        ],
        'test_failed' => [
            'title' => 'Errore Test',
            'message' => 'Impossibile inviare il messaggio di test: :error',
        ],
    ],
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
    
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
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
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
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
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
    
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
];
