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
        $this->assertCount(3, TelegramDriverEnum::cases());
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertEquals('telegram', TelegramDriverEnum::TELEGRAM->value);
        $this->assertEquals('botapi', TelegramDriverEnum::BOTAPI->value);
        $this->assertEquals('laravel-telegram', TelegramDriverEnum::LARAVEL_TELEGRAM->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = TelegramDriverEnum::options();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertIsArray($options);
        $this->assertCount(3, $options);
        $this->assertEquals('Telegram', $options['telegram']);
        $this->assertEquals('Bot API', $options['botapi']);
        $this->assertEquals('Laravel Telegram', $options['laravel-telegram']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = TelegramDriverEnum::labels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertIsArray($labels);
        $this->assertCount(3, $labels);
        $this->assertArrayHasKey('telegram', $labels);
        $this->assertArrayHasKey('botapi', $labels);
        $this->assertArrayHasKey('laravel-telegram', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_drivers(): void
    {
        $this->assertTrue(TelegramDriverEnum::isSupported('telegram'));
        $this->assertTrue(TelegramDriverEnum::isSupported('botapi'));
        $this->assertTrue(TelegramDriverEnum::isSupported('laravel-telegram'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_drivers(): void
    {
        $this->assertFalse(TelegramDriverEnum::isSupported('invalid'));
        $this->assertFalse(TelegramDriverEnum::isSupported(''));
        $this->assertFalse(TelegramDriverEnum::isSupported('TELEGRAM'));
        $this->assertFalse(TelegramDriverEnum::isSupported('Telegram'));
    }

    /** @test */
    public function get_default_returns_default_driver(): void
    {
        $default = TelegramDriverEnum::getDefault();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertInstanceOf(TelegramDriverEnum::class, $default);
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
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> e11621f (.)
        $uniqueValues = array_unique($values);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> a12f125f4a (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b93ef594b4 (.)
        $uniqueValues = array_unique($values);

=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
        $uniqueValues = array_unique($values);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = TelegramDriverEnum::cases();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        $this->assertIsArray($cases);
        $this->assertCount(3, $cases);

<<<<<<< HEAD
=======
=======
        
        $this->assertIsArray($cases);
        $this->assertCount(3, $cases);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        foreach ($cases as $case) {
            $this->assertInstanceOf(TelegramDriverEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (TelegramDriverEnum::cases() as $case) {
            $this->assertIsString($case->value);
        }
    }
}
