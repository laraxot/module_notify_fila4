<?php

declare(strict_types=1);

return [
    'name' => 'Notify',
    'description' => 'Modulo per la gestione delle notifiche e comunicazioni',
    'icon' => 'heroicon-o-bell',
    'navigation' => [
        'enabled' => true,
        'sort' => 70,
    ],
    'routes' => [
        'enabled' => true,
        'middleware' => ['web', 'auth'],
    ],
    'providers' => [
        'Modules\\Notify\\Providers\\NotifyServiceProvider',
    ],
    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
     * |--------------------------------------------------------------------------
     * | Email Layout Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This file contains the configuration for email layouts and templates.
     * |
     */
<<<<<<< HEAD

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),
=======
<<<<<<< HEAD

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),
=======
=======
>>>>>>> origin/develop
    |--------------------------------------------------------------------------
    | Email Layout Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for email layouts and templates.
    |
    */

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    // Footer text for all emails
<<<<<<< HEAD
    // 'footer_text' => env('MAIL_FOOTER_TEXT', '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.'),
=======
    //'footer_text' => env('MAIL_FOOTER_TEXT', '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.'),
>>>>>>> 99ff506 (.)

    // Social media links
    'social_links' => [
        'facebook' => env('MAIL_SOCIAL_FACEBOOK', null),
        'twitter' => env('MAIL_SOCIAL_TWITTER', null),
        'instagram' => env('MAIL_SOCIAL_INSTAGRAM', null),
        'linkedin' => env('MAIL_SOCIAL_LINKEDIN', null),
    ],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    // Unsubscribe URL
    'unsubscribe_url' => env('MAIL_UNSUBSCRIBE_URL', null),
    /*
     * |--------------------------------------------------------------------------
     * | Mail Templates
     * |--------------------------------------------------------------------------
     * |
     * | Configuration for mail templates
     * |
     */

    // Default layout to use
    'default_layout' => 'notify::mail-layouts.base.default',
<<<<<<< HEAD
=======
=======

=======
>>>>>>> b93ef594b4 (.)
    // Unsubscribe URL
    'unsubscribe_url' => env('MAIL_UNSUBSCRIBE_URL', null),
    /*
     * |--------------------------------------------------------------------------
     * | Mail Templates
     * |--------------------------------------------------------------------------
     * |
     * | Configuration for mail templates
     * |
     */

    // Default layout to use
    'default_layout' => 'notify::mail-layouts.base.default',
<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

    // Unsubscribe URL
    'unsubscribe_url' => env('MAIL_UNSUBSCRIBE_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Mail Templates
    |--------------------------------------------------------------------------
    |
    | Configuration for mail templates
    |
    */

    // Default layout to use
    'default_layout' => 'notify::mail-layouts.base.default',

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    // Available layouts
    'layouts' => [
        'default' => 'notify::mail-layouts.base.default',
        // Add more layouts here
    ],
<<<<<<< HEAD
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
    // Available templates
    'templates' => [
        'welcome' => 'notify::mail-layouts.templates.welcome',
        // Add more templates here
    ],
];
