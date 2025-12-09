<?php

declare(strict_types=1);

namespace Modules\Notify\Tests;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Notify\Providers\NotifyServiceProvider;
=======
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> b19cd40 (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Xot\Tests\CreatesApplication;
=======
=======
>>>>>>> 82ae73be (.)
use Illuminate\Foundation\Application;
use Modules\Notify\Providers\NotifyServiceProvider;
=======
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> b19cd40 (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
>>>>>>> 75179b85 (.)

/**
 * Base test case for Notify module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Notify module specific configurations
        $this->loadLaravelMigrations();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        // Seed any required data for Notify tests
        $this->artisan('module:seed', ['module' => 'Notify']);
    }

    /**
     * Get package providers.
     *
     * @param Application $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
