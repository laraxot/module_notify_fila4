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
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
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
