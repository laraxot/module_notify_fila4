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
    'navigation' => [
        'icon' => 'heroicon-o-document-text',
        'label' => 'Template Notifiche',
        'group' => 'Sistema',
        'sort' => '52',
    ],
    'fields' => [
        'name' => [
            'label' => 'Nome',
            'helper' => 'Nome univoco del template',
        ],
        'subject' => [
            'label' => 'Oggetto',
            'helper' => 'Oggetto della notifica',
        ],
        'type' => [
            'label' => 'Tipo',
            'helper' => 'Tipo di notifica',
        ],
        'body_text' => [
            'label' => 'Testo Semplice',
            'helper' => 'Versione testo semplice della notifica',
        ],
        'body_html' => [
            'label' => 'HTML',
            'helper' => 'Versione HTML della notifica',
        ],
        'preview_data' => [
            'label' => 'Dati di Anteprima',
            'helper' => 'Dati JSON per l\'anteprima',
        ],
    ],
    'columns' => [
        'name' => 'Nome',
        'subject' => 'Oggetto',
        'type' => 'Tipo',
        'created_at' => 'Creato il',
        'updated_at' => 'Aggiornato il',
    ],
    'actions' => [
        'preview' => 'Anteprima',
    ],
    'enums' => [
        'notification_type' => [
            'email' => 'Email',
            'sms' => 'SMS',
            'push' => 'Notifica Push',
        ],
    ],
];
