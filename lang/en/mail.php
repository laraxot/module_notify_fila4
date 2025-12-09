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
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
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
