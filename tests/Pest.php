<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\Notification;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Modules\Notify\Models\Notification;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
expect()->extend('toBeNotification', fn () => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn () => $this->toBeInstanceOf(MailTemplate::class));
=======
expect()->extend('toBeNotification', fn() => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn() => $this->toBeInstanceOf(MailTemplate::class));
>>>>>>> 99ff506 (.)
=======
=======
expect()->extend('toBe' + 'Notify' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});

>>>>>>> 1f80445 (.)
expect()->extend('toBe' + 'Notify' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});
<<<<<<< HEAD

expect()->extend('toBe' + 'Notify' + '', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(...);
});
>>>>>>> 6fb15fa (.)
=======
expect()->extend('toBeNotification', fn () => $this->toBeInstanceOf(Notification::class));

expect()->extend('toBeMailTemplate', fn () => $this->toBeInstanceOf(MailTemplate::class));
>>>>>>> ab15d0e (.)
=======
>>>>>>> 1f80445 (.)

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
