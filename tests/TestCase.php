<?php

declare(strict_types=1);

namespace Modules\Notify\Tests;

use Illuminate\Foundation\Application;
<<<<<<< HEAD
=======
use Modules\Notify\Providers\NotifyServiceProvider;
>>>>>>> f5f1cb1 (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Notify\Providers\NotifyServiceProvider;
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

        // Seed any required data for Notify tests
        $this->artisan('module:seed', ['module' => 'Notify']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param  Application  $app
=======
     * @param Application $app
>>>>>>> f5f1cb1 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            NotifyServiceProvider::class,
        ];
    }
}
