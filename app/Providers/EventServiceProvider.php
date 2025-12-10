<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
        // Email verification configuration if needed
    }
    protected function configureEmailVerification(): void {}
    protected function configureEmailVerification(): void
    {
    }
    protected function configureEmailVerification(): void
    {
    }
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function configureEmailVerification(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Email verification configuration if needed
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    }
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
    protected function configureEmailVerification(): void {}
=======
    protected function configureEmailVerification(): void
    {
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
    protected function configureEmailVerification(): void
    {
    }
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
}
