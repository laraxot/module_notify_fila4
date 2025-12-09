<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Modules\Notify\Enums\TelegramDriverEnum;
use PHPUnit\Framework\TestCase;

class TelegramDriverEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, TelegramDriverEnum::cases());

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('telegram', TelegramDriverEnum::TELEGRAM->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('botapi', TelegramDriverEnum::BOTAPI->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('laravel-telegram', TelegramDriverEnum::LARAVEL_TELEGRAM->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = TelegramDriverEnum::options();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Telegram', $options['telegram']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Bot API', $options['botapi']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Laravel Telegram', $options['laravel-telegram']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = TelegramDriverEnum::labels();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('telegram', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('botapi', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('laravel-telegram', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_drivers(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(TelegramDriverEnum::isSupported('telegram'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(TelegramDriverEnum::isSupported('botapi'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(TelegramDriverEnum::isSupported('laravel-telegram'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_drivers(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(TelegramDriverEnum::isSupported('invalid'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(TelegramDriverEnum::isSupported(''));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(TelegramDriverEnum::isSupported('TELEGRAM'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(TelegramDriverEnum::isSupported('Telegram'));
    }

    /** @test */
    public function get_default_returns_default_driver(): void
    {
        $default = TelegramDriverEnum::getDefault();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(TelegramDriverEnum::class, $default);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains($default, TelegramDriverEnum::cases());
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
        $uniqueValues = array_unique($values);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = TelegramDriverEnum::cases();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($cases);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $cases);

        foreach ($cases as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertInstanceOf(TelegramDriverEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (TelegramDriverEnum::cases() as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertIsString($case->value);
        }
    }
}
