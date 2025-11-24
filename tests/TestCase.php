<?php

declare(strict_types=1);

namespace Modules\Notify\Tests;

use Illuminate\Foundation\Application;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Notify\Providers\NotifyServiceProvider;
use Modules\Xot\Tests\CreatesApplication;
=======
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
>>>>>>> 75179b8 (.)
=======
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
>>>>>>> 7148d73 (.)

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

        // Seed any required data for Notify tests
        $this->artisan('module:seed', ['module' => 'Notify']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Application  $app
=======
     * @param Application $app
>>>>>>> 75179b8 (.)
=======
     * @param Application $app
>>>>>>> 7148d73 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
