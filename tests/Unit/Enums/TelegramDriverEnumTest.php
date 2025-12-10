<<<<<<< HEAD
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

        $this->assertEquals('telegram', TelegramDriverEnum::TELEGRAM->value);
        $this->assertEquals('botapi', TelegramDriverEnum::BOTAPI->value);
        $this->assertEquals('laravel-telegram', TelegramDriverEnum::LARAVEL_TELEGRAM->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = TelegramDriverEnum::options();

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

        $this->assertInstanceOf(TelegramDriverEnum::class, $default);
        $this->assertContains($default, TelegramDriverEnum::cases());
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
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
=======
>>>>>>> 207ac35 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
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
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
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
<<<<<<< HEAD
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
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
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> b19cd40 (.)
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
>>>>>>> e53a56570 (.)
        $values = array_map(fn ($case) => $case->value, TelegramDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, TelegramDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> e53a56570 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = TelegramDriverEnum::cases();

        $this->assertIsArray($cases);
        $this->assertCount(3, $cases);

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
=======
>>>>>>> 301ad8b44 (.)
