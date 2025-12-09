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
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
     * |--------------------------------------------------------------------------
     * | Email Layout Configuration
     * |--------------------------------------------------------------------------
     * |
     * | This file contains the configuration for email layouts and templates.
     * |
     */

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),
<<<<<<< HEAD
=======
    |--------------------------------------------------------------------------
    | Email Layout Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration for email layouts and templates.
    |
    */

    // Logo URL for email headers
    'logo_url' => env('MAIL_LOGO_URL', null),

>>>>>>> b19cd40 (.)
    // Footer text for all emails
<<<<<<< HEAD
    // 'footer_text' => env('MAIL_FOOTER_TEXT', '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.'),
=======
    //'footer_text' => env('MAIL_FOOTER_TEXT', '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.'),
>>>>>>> 75179b85 (.)
=======
    // Footer text for all emails
    //'footer_text' => env('MAIL_FOOTER_TEXT', '© ' . date('Y') . ' ' . config('app.name') . '. All rights reserved.'),
>>>>>>> 75179b85 (.)

    // Social media links
    'social_links' => [
        'facebook' => env('MAIL_SOCIAL_FACEBOOK', null),
        'twitter' => env('MAIL_SOCIAL_TWITTER', null),
        'instagram' => env('MAIL_SOCIAL_INSTAGRAM', null),
        'linkedin' => env('MAIL_SOCIAL_LINKEDIN', null),
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
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

>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
    // Available layouts
    'layouts' => [
        'default' => 'notify::mail-layouts.base.default',
        // Add more layouts here
    ],
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
    // Available templates
    'templates' => [
        'welcome' => 'notify::mail-layouts.templates.welcome',
        // Add more templates here
    ],
];
