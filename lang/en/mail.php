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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


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
>>>>>>> b93ef594b4 (.)
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
return [
    'template' => [
        'navigation' => [
            'group' => 'Notifications',
            'label' => 'Email Templates',
            'plural' => 'Email Templates',
            'singular' => 'Email Template',
            'icon' => 'heroicon-o-envelope',
            'sort' => '1',
        ],
        'sections' => [
            'main' => 'Main Information',
        ],
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter template name',
                'tooltip' => 'The identifying name of the email template',
            ],
            'layout' => [
                'label' => 'Layout',
                'placeholder' => 'Select template layout',
                'tooltip' => 'The graphical layout that will be used for the email',
            ],
            'mailable' => [
                'label' => 'Mailable Class',
                'placeholder' => 'Enter the Mailable class name',
                'tooltip' => 'The PHP class that handles email sending',
            ],
            'subject' => [
                'label' => 'Subject',
                'placeholder' => 'Enter the email subject',
                'tooltip' => 'The subject that will appear in the email',
            ],
            'body_html' => [
                'label' => 'HTML Content',
                'placeholder' => 'Enter the email HTML content',
                'tooltip' => 'The email content in HTML format',
            ],
            'body_text' => [
                'label' => 'Text Content',
                'placeholder' => 'Enter the email text content',
                'tooltip' => 'Text version of the email for clients that don\'t support HTML',
            ],
        ],
        'actions' => [
            'preview' => [
                'label' => 'Preview',
                'tooltip' => 'View a preview of the template',
            ],
        ],
        'messages' => [
            'created' => 'Email template created successfully',
            'updated' => 'Email template updated successfully',
            'deleted' => 'Email template deleted successfully',
        ],
    ],
];
