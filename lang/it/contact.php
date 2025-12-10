<?php

declare(strict_types=1);

return [
    'resource' => [
        'name' => 'Contact',
    ],
    'navigation' => [
        'name' => 'contatto',
        'plural' => 'contatti',
        'group' => 'Sistema',
        'label' => 'Contatto',
        'sort' => 49,
        'icon' => 'notify-contact-animated',
        'description' => 'Gestione del singolo contatto per le notifiche',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del contatto',
            'placeholder' => 'es: Mario Rossi',
            'help' => 'Inserisci il nome completo del contatto',
        ],
        'email' => [
            'label' => 'Email',
            'tooltip' => 'Indirizzo email del contatto',
            'placeholder' => 'es: mario.rossi@example.com',
            'help' => 'Inserisci un indirizzo email valido',
        ],
        'phone' => [
            'label' => 'Telefono',
            'tooltip' => 'Numero di telefono del contatto',
            'placeholder' => 'es: +39 123 456 7890',
            'help' => 'Inserisci il numero con prefisso internazionale',
        ],
        'telegram_chat_id' => [
            'label' => 'Chat ID Telegram',
            'tooltip' => 'ID della chat Telegram del contatto',
            'placeholder' => 'es: 123456789',
            'help' => 'ID numerico fornito dal bot Telegram',
        ],
        'group' => [
            'label' => 'Gruppo',
            'tooltip' => 'Gruppo di appartenenza del contatto',
            'placeholder' => 'es: Amministrazione',
            'help' => 'Seleziona il gruppo di appartenenza',
            'options' => [
                'admin' => [
                    'label' => 'Amministratore',
                    'tooltip' => 'Staff amministrativo',
                ],
                'user' => [
                    'label' => 'Utente',
                    'tooltip' => 'Utente standard',
                ],
                'support' => [
                    'label' => 'Supporto',
                    'tooltip' => 'Team di supporto',
                ],
            ],
        ],
        'channels' => [
            'label' => 'Canali',
            'tooltip' => 'Canali di notifica preferiti',
            'help' => 'Seleziona i canali per l\'invio delle notifiche',
            'options' => [
                'email' => [
                    'label' => 'Email',
                    'tooltip' => 'Notifiche via email',
                ],
                'sms' => [
                    'label' => 'SMS',
                    'tooltip' => 'Notifiche via SMS',
                ],
                'telegram' => [
                    'label' => 'Telegram',
                    'tooltip' => 'Notifiche via Telegram',
                ],
                'push' => [
                    'label' => 'Push',
                    'tooltip' => 'Notifiche push sul browser',
                ],
            ],
        ],
        'preferences' => [
            'label' => 'Preferenze',
            'tooltip' => 'Preferenze di notifica',
            'help' => 'Configura le preferenze personali',
            'options' => [
                'frequency' => [
                    'label' => 'Frequenza',
                    'tooltip' => 'Frequenza di invio delle notifiche',
                    'options' => [
                        'immediate' => [
                            'label' => 'Immediata',
                            'tooltip' => 'Invia le notifiche immediatamente',
                        ],
                        'daily' => [
                            'label' => 'Giornaliera',
                            'tooltip' => 'Raggruppa le notifiche in un digest giornaliero',
                        ],
                        'weekly' => [
                            'label' => 'Settimanale',
                            'tooltip' => 'Raggruppa le notifiche in un digest settimanale',
                        ],
                    ],
                ],
                'quiet_hours' => [
                    'label' => 'Ore di silenzio',
                    'tooltip' => 'Periodo in cui non inviare notifiche',
                    'help' => 'Le notifiche verranno inviate al termine del periodo',
                ],
            ],
        ],
        'is_active' => [
            'label' => 'Attivo',
            'tooltip' => 'Stato di attivazione del contatto',
            'help' => 'Disattiva temporaneamente le notifiche',
        ],
        'last_notified_at' => [
            'label' => 'Ultima notifica',
            'tooltip' => 'Data e ora dell\'ultima notifica inviata',
        ],
    ],
    'actions' => [
        'import' => [
            'name' => 'Importa da file',
            'fields' => [
                'import_file' => 'Seleziona un file XLS o CSV da caricare',
            ],
        ],
        'export' => [
            'name' => 'Esporta dati',
            'filename_prefix' => 'Aree al',
            'columns' => [
                'name' => 'Nome area',
                'parent_name' => 'Nome area livello superiore',
            ],
        ],
        'test_notification' => [
            'label' => 'Invia test',
            'tooltip' => 'Invia una notifica di test',
            'icon' => 'heroicon-o-paper-airplane',
            'color' => 'primary',
            'confirmation' => [
                'title' => 'Conferma invio test',
                'message' => 'Vuoi inviare una notifica di test?',
                'confirm' => 'Sì, invia',
                'cancel' => 'No, annulla',
            ],
        ],
        'verify' => [
            'label' => 'Verifica contatto',
            'tooltip' => 'Verifica la validità del contatto',
            'icon' => 'heroicon-o-check-circle',
            'color' => 'warning',
        ],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
        'logout' => [
            'tooltip' => 'logout',
        ],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    ],
    'messages' => [
        'created' => [
            'title' => 'Contatto Creato',
            'message' => 'Il contatto è stato creato con successo',
        ],
        'updated' => [
            'title' => 'Contatto Aggiornato',
            'message' => 'Il contatto è stato aggiornato con successo',
        ],
        'deleted' => [
            'title' => 'Contatto Eliminato',
            'message' => 'Il contatto è stato eliminato con successo',
        ],
        'test_sent' => [
            'title' => 'Test Inviato',
            'message' => 'La notifica di test è stata inviata con successo',
        ],
        'test_failed' => [
            'title' => 'Errore Test',
            'message' => 'Impossibile inviare la notifica di test: :error',
        ],
        'verified' => [
            'title' => 'Verifica Completata',
            'message' => 'Il contatto è stato verificato con successo',
        ],
        'verification_failed' => [
            'title' => 'Errore Verifica',
            'message' => 'Impossibile verificare il contatto: :error',
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
        ],
    ],
=======
        ]
    ]
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        ],
    ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
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
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
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
        ],
    ],
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
        ],
    ],
=======
=======
        ],
    ],
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
=======
>>>>>>> c4bdacbf (.)
=======
        ],
    ],
=======
>>>>>>> dceba960 (.)
=======
        ],
    ],
=======
>>>>>>> bd804d67 (.)
=======
        ],
    ],
=======
>>>>>>> 229a065a (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 22baa66d (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 2effe245 (.)
=======
        ],
    ],
=======
>>>>>>> e790eb33 (.)
=======
        ],
    ],
=======
>>>>>>> 3ee54c5d (.)
=======
        ],
    ],
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
=======
>>>>>>> c4bdacbf (.)
=======
        ],
    ],
=======
>>>>>>> dceba960 (.)
=======
        ],
    ],
=======
>>>>>>> bd804d67 (.)
=======
        ],
    ],
=======
>>>>>>> 229a065a (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 22baa66d (rebase 210)
=======
        ],
    ],
=======
>>>>>>> 2effe245 (.)
=======
        ],
    ],
=======
>>>>>>> e790eb33 (.)
=======
        ],
    ],
=======
>>>>>>> 3ee54c5d (.)
=======
        ],
    ],
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        ],
    ],
=======
        ]
    ]
>>>>>>> a12f125f4a (.)
=======
        ],
    ],
>>>>>>> b93ef594b4 (.)
=======
        ]
    ]
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
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
        ],
    ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
        ],
    ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        ],
    ],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        ],
    ],
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        ],
    ],
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        ],
    ],
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        ],
    ],
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        ],
    ],
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
        ],
    ],
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        ],
    ],
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
        ],
    ],
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        ],
    ],
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
        ],
    ],
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        ],
    ],
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
        ],
    ],
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
        ],
    ],
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        ],
    ],
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
        ],
    ],
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        ],
    ],
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
        ],
    ],
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        ],
    ],
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        ],
    ],
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
        ],
    ],
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        ],
    ],
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
        ],
    ],
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        ],
    ],
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
        ],
    ],
>>>>>>> 58816034 (.)
=======
        ],
    ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        ],
    ],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        ],
    ],
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        ],
    ],
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        ],
    ],
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        ],
    ],
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        ],
    ],
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
        ],
    ],
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        ],
    ],
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
        ],
    ],
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        ],
    ],
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
        ],
    ],
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        ],
    ],
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
        ],
    ],
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
        ],
    ],
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        ],
    ],
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
        ],
    ],
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        ],
    ],
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
        ],
    ],
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        ],
    ],
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        ],
    ],
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
        ],
    ],
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        ],
    ],
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
        ],
    ],
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        ],
    ],
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
        ],
    ],
>>>>>>> 58816034 (.)
=======
        ],
    ],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
        ],
    ],
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        ],
    ],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        ],
    ],
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        ],
    ],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        ],
    ],
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
        ],
    ],
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        ],
    ],
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
        ],
    ],
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        ],
    ],
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        ],
    ],
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
        ],
    ],
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        ],
    ],
>>>>>>> 4e4a7796 (.)
];
