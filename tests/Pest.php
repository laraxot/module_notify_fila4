<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\Notification;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Modules\Notify\Models\Notification;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 75179b8 (.)
=======
use Modules\Notify\Models\Notification;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 7148d73 (.)
use Modules\Notify\Tests\TestCase;

/*
 * |--------------------------------------------------------------------------
 * | Test Case
 * |--------------------------------------------------------------------------
 * |
 * | The closure you provide to your test functions is always bound to a specific PHPUnit test
 * | case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
 * | need to change it using the "pest()" function to bind a different classes or traits.
 * |
 */

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/*
 * |--------------------------------------------------------------------------
 * | Expectations
 * |--------------------------------------------------------------------------
 * |
 * | When you're writing tests, you often need to check that values meet certain conditions. The
 * | "expect()" function gives you access to a set of "expectations" methods that you can use
 * | to assert different things. Of course, you may extend the Expectation API at any time.
 * |
 */

<<<<<<< HEAD
<<<<<<< HEAD
expect()->extend('toBeNotification', fn () => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn () => $this->toBeInstanceOf(MailTemplate::class));
=======
expect()->extend('toBeNotification', fn() => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn() => $this->toBeInstanceOf(MailTemplate::class));
>>>>>>> 75179b8 (.)
=======
expect()->extend('toBeNotification', fn() => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn() => $this->toBeInstanceOf(MailTemplate::class));
>>>>>>> 7148d73 (.)

/*
 * |--------------------------------------------------------------------------
 * | Functions
 * |--------------------------------------------------------------------------
 * |
 * | While Pest is very powerful out-of-the-box, you may have some testing code specific to your
 * | project that you don't want to repeat in every file. Here you can also expose helpers as
 * | global functions to help you to reduce the number of lines of code in your test files.
 * |
 */

function createNotification(array $attributes = []): Notification
{
    return Notification::factory()->create($attributes);
}

function makeNotification(array $attributes = []): Notification
{
    return Notification::factory()->make($attributes);
}

function createMailTemplate(array $attributes = []): MailTemplate
{
    return MailTemplate::factory()->create($attributes);
}

function makeMailTemplate(array $attributes = []): MailTemplate
{
    return MailTemplate::factory()->make($attributes);
}
