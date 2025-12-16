<?php

declare(strict_types=1);

namespace Modules\Notify\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;
=======
require_once __DIR__.'/../../Xot/tests/CreatesApplication.php';

use Illuminate\Foundation\Application;
use Modules\Notify\Providers\NotifyServiceProvider;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Xot\Tests\CreatesApplication;
>>>>>>> c8903a55c (.)

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
<<<<<<< HEAD

        // Load Notify module specific configurations
        $this->loadLaravelMigrations();

        // Seed any required data for Notify tests
        $this->artisan('module:seed', ['module' => 'Notify']);
=======
>>>>>>> c8903a55c (.)
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
