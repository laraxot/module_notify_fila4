<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> f1c9518b (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Modules\Notify\Enums\SmsDriverEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
use ReflectionClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Modules\Notify\Enums\SmsDriverEnum;
use PHPUnit\Framework\TestCase;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)

class SmsDriverEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        $this->assertCount(7, SmsDriverEnum::cases());

        $this->assertEquals('smsfactor', SmsDriverEnum::SMSFACTOR->value);
        $this->assertEquals('twilio', SmsDriverEnum::TWILIO->value);
        $this->assertEquals('nexmo', SmsDriverEnum::NEXMO->value);
        $this->assertEquals('plivo', SmsDriverEnum::PLIVO->value);
        $this->assertEquals('gammu', SmsDriverEnum::GAMMU->value);
        $this->assertEquals('netfun', SmsDriverEnum::NETFUN->value);
        $this->assertEquals('agiletelecom', SmsDriverEnum::AGILETELECOM->value);
    }

    /** @test */
    public function it_implements_filament_contracts(): void
    {
        $this->assertInstanceOf(HasLabel::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasIcon::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasColor::class, SmsDriverEnum::SMSFACTOR);
    }

    /** @test */
    public function it_has_trans_trait(): void
    {
        $reflection = new ReflectionClass(SmsDriverEnum::class);
        $traits = $reflection->getTraitNames();

        $this->assertContains('Modules\Xot\Filament\Traits\TransTrait', $traits);
    }

    /** @test */
    public function it_has_required_methods(): void
    {
        $this->assertTrue(method_exists(SmsDriverEnum::class, 'getLabel'));
        $this->assertTrue(method_exists(SmsDriverEnum::class, 'getColor'));
        $this->assertTrue(method_exists(SmsDriverEnum::class, 'getIcon'));
        $this->assertTrue(method_exists(SmsDriverEnum::class, 'getDescription'));
        $this->assertTrue(method_exists(SmsDriverEnum::class, 'getDefault'));
    }

    /** @test */
    public function get_default_returns_default_driver(): void
    {
        $default = SmsDriverEnum::getDefault();

        $this->assertInstanceOf(SmsDriverEnum::class, $default);
        $this->assertContains($default, SmsDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = SmsDriverEnum::cases();

        $this->assertIsArray($cases);
        $this->assertCount(7, $cases);

        foreach ($cases as $case) {
            $this->assertInstanceOf(SmsDriverEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (SmsDriverEnum::cases() as $case) {
            $this->assertIsString($case->getLabel());
            $this->assertIsString($case->getColor());
            $this->assertIsString($case->getIcon());
            $this->assertIsString($case->getDescription());
        }
    }
}
