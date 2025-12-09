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
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)

declare(strict_types=1);

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
declare(strict_types=1);


>>>>>>> b19cd40 (.)
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

declare(strict_types=1);

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)

declare(strict_types=1);

=======
declare(strict_types=1);
=======
>>>>>>> b93ef594b4 (.)

declare(strict_types=1);

>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f537838 (.)
=======

declare(strict_types=1);

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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======

declare(strict_types=1);

>>>>>>> 3f537838 (.)
=======

declare(strict_types=1);

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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======

declare(strict_types=1);

>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

declare(strict_types=1);

>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======

declare(strict_types=1);

>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======

declare(strict_types=1);

>>>>>>> ba564870 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======

declare(strict_types=1);

>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======

declare(strict_types=1);

>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
return [
    'navigation' => [
        'group' => 'Sistema',
        'label' => 'Tema Notifica',
        'icon' => 'notify-theme-animated',
        'sort' => 50,
        'description' => 'Gestione del tema per le notifiche',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'tooltip' => 'Nome del tema',
            'placeholder' => 'es: Tema Aziendale',
            'help' => 'Inserisci un nome descrittivo per il tema',
        ],
        'description' => [
            'label' => 'Descrizione',
            'tooltip' => 'Descrizione del tema',
            'placeholder' => 'es: Tema standard per le comunicazioni aziendali',
            'help' => 'Breve descrizione dello scopo del tema',
        ],
        'colors' => [
            'label' => 'Colori',
            'tooltip' => 'Schema colori del tema',
            'help' => 'Definisci i colori principali del tema',
            'options' => [
                'primary' => [
                    'label' => 'Primario',
                    'tooltip' => 'Colore principale del tema',
                    'placeholder' => 'es: #4A90E2',
                ],
                'secondary' => [
                    'label' => 'Secondario',
                    'tooltip' => 'Colore secondario del tema',
                    'placeholder' => 'es: #5C6AC4',
                ],
                'accent' => [
                    'label' => 'Accento',
                    'tooltip' => 'Colore di accento per elementi in evidenza',
                    'placeholder' => 'es: #F5A623',
                ],
            ],
        ],
        'typography' => [
            'label' => 'Tipografia',
            'tooltip' => 'Impostazioni tipografiche',
            'help' => 'Configura i font e le dimensioni del testo',
            'options' => [
                'font_family' => [
                    'label' => 'Font principale',
                    'tooltip' => 'Font utilizzato per il testo principale',
                    'placeholder' => 'es: Arial, sans-serif',
                ],
                'heading_font' => [
                    'label' => 'Font titoli',
                    'tooltip' => 'Font utilizzato per i titoli',
                    'placeholder' => 'es: Helvetica, Arial, sans-serif',
                ],
            ],
        ],
        'layout' => [
            'label' => 'Layout',
            'tooltip' => 'Impostazioni del layout',
            'help' => 'Configura la struttura del template',
            'options' => [
                'header' => [
                    'label' => 'Intestazione',
                    'tooltip' => 'Stile dell\'intestazione',
                ],
                'footer' => [
                    'label' => 'Piè di pagina',
                    'tooltip' => 'Stile del piè di pagina',
                ],
            ],
        ],
        'assets' => [
            'label' => 'Risorse',
            'tooltip' => 'Risorse del tema',
            'help' => 'Gestisci le risorse associate al tema',
            'options' => [
                'logo' => [
                    'label' => 'Logo',
                    'tooltip' => 'Logo da utilizzare nelle notifiche',
                ],
                'background' => [
                    'label' => 'Sfondo',
                    'tooltip' => 'Immagine di sfondo',
                ],
            ],
        ],
        'is_default' => [
            'label' => 'Predefinito',
            'tooltip' => 'Imposta come tema predefinito',
            'help' => 'Il tema predefinito verrà utilizzato per tutte le notifiche senza tema specifico',
        ],
        'is_active' => [
            'label' => 'Attivo',
            'tooltip' => 'Stato di attivazione del tema',
            'help' => 'Solo i temi attivi possono essere utilizzati',
        ],
    ],
    'actions' => [
        'preview' => [
            'label' => 'Anteprima',
            'tooltip' => 'Visualizza anteprima del tema',
            'icon' => 'heroicon-o-eye',
            'color' => 'primary',
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'tooltip' => 'Crea una copia del tema',
            'icon' => 'heroicon-o-document-duplicate',
            'color' => 'info',
            'confirmation' => [
                'title' => 'Conferma duplicazione',
                'message' => 'Vuoi creare una copia di questo tema?',
                'confirm' => 'Sì, duplica',
                'cancel' => 'No, annulla',
            ],
        ],
        'set_default' => [
            'label' => 'Imposta predefinito',
            'tooltip' => 'Imposta questo tema come predefinito',
            'icon' => 'heroicon-o-star',
            'color' => 'primary',
            'confirmation' => [
                'title' => 'Conferma impostazione predefinito',
                'message' => 'Vuoi impostare questo tema come predefinito?',
                'confirm' => 'Sì, imposta',
                'cancel' => 'No, annulla',
            ],
        ],
<<<<<<< HEAD
        'logout' => [
            'tooltip' => 'logout',
            'icon' => 'logout',
        ],
=======
>>>>>>> 99ff506 (.)
    ],
    'messages' => [
        'created' => [
            'title' => 'Tema Creato',
            'message' => 'Il tema è stato creato con successo',
        ],
        'updated' => [
            'title' => 'Tema Aggiornato',
            'message' => 'Il tema è stato aggiornato con successo',
        ],
        'deleted' => [
            'title' => 'Tema Eliminato',
            'message' => 'Il tema è stato eliminato con successo',
        ],
        'duplicated' => [
            'title' => 'Tema Duplicato',
            'message' => 'Il tema è stato duplicato con successo',
        ],
        'preview' => [
            'title' => 'Anteprima Tema',
            'message' => 'Questa è un\'anteprima di come apparirà il tema',
        ],
        'set_default' => [
            'title' => 'Tema Predefinito',
            'message' => 'Il tema è stato impostato come predefinito',
        ],
    ],
    'model' => [
        'label' => 'Tema Notifica',
    ],
];
