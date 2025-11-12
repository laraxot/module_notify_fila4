<?php

declare(strict_types=1);

namespace Modules\Notify\Tests;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
<<<<<<< HEAD
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Notify\Providers\NotifyServiceProvider;
=======
use Modules\Notify\Providers\NotifyServiceProvider;
=======
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> b19cd40 (.)
=======
use Illuminate\Foundation\Application;
use Modules\Notify\Providers\NotifyServiceProvider;
>>>>>>> 4e2ebfb (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
>>>>>>> 99ff506 (.)
use Modules\Xot\Tests\CreatesApplication;

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

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        // Seed any required data for Notify tests
        $this->artisan('module:seed', ['module' => 'Notify']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Application  $app
=======
     * @param Application $app
>>>>>>> 99ff506 (.)
=======
     * @param Application $app
=======
     * @param Application $app
>>>>>>> 4e643df (.)
=======
     * @param Application $app
>>>>>>> c434001 (.)
=======
     * @param Application $app
>>>>>>> 10b3b08 (.)
=======
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
     * @param Application $app
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 4e643df (.)
=======
     * @param Application $app
>>>>>>> 12f2f7e (.)
=======
>>>>>>> c434001 (.)
=======
     * @param Application $app
>>>>>>> 9e8255b (.)
=======
>>>>>>> 10b3b08 (.)
=======
     * @param Application $app
>>>>>>> bc11326 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
