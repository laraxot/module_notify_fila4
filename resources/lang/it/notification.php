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
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
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
return [
    'fields' => [
        'type' => [
            'label' => 'Tipo Notifica',
            'placeholder' => 'Inserisci il tipo di notifica',
            'helper_text' => 'Il tipo di notifica',
        ],
        'notifiable_type' => [
            'label' => 'Tipo Destinatario',
            'placeholder' => 'Inserisci il tipo di destinatario',
            'helper_text' => 'Il tipo di entità che riceve la notifica',
        ],
        'notifiable_id' => [
            'label' => 'ID Destinatario',
            'placeholder' => 'Inserisci l\'ID del destinatario',
            'helper_text' => 'L\'ID dell\'entità che riceve la notifica',
        ],
        'data' => [
            'label' => 'Dati Notifica',
            'placeholder' => 'Inserisci i dati della notifica',
            'helper_text' => 'I dati contenuti nella notifica',
        ],
        'read_at' => [
            'label' => 'Data Lettura',
            'placeholder' => 'Seleziona la data di lettura',
            'helper_text' => 'Quando la notifica è stata letta',
        ],
        'created_by' => [
            'label' => 'Creato Da',
            'placeholder' => 'Inserisci chi ha creato la notifica',
            'helper_text' => 'L\'utente che ha creato la notifica',
        ],
        'updated_by' => [
            'label' => 'Aggiornato Da',
            'placeholder' => 'Inserisci chi ha aggiornato la notifica',
            'helper_text' => 'L\'utente che ha aggiornato la notifica',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Notifica',
            'icon' => 'heroicon-o-plus',
            'color' => 'primary',
        ],
        'edit' => [
            'label' => 'Modifica Notifica',
            'icon' => 'heroicon-o-pencil',
            'color' => 'warning',
        ],
        'delete' => [
            'label' => 'Elimina Notifica',
            'icon' => 'heroicon-o-trash',
            'color' => 'danger',
        ],
        'mark_as_read' => [
            'label' => 'Segna come Letta',
            'icon' => 'heroicon-o-check',
            'color' => 'success',
        ],
        'mark_as_unread' => [
            'label' => 'Segna come Non Letta',
            'icon' => 'heroicon-o-x-mark',
            'color' => 'danger',
        ],
    ],
];
