<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Notify\Enums\SmsDriverEnum;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Enums\SmsDriverEnum;
use PHPUnit\Framework\TestCase;
>>>>>>> 99ff506 (.)

class SmsDriverEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        $this->assertCount(7, SmsDriverEnum::cases());
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
        $this->assertInstanceOf(HasLabel::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasIcon::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasColor::class, SmsDriverEnum::SMSFACTOR);
=======
<<<<<<< HEAD
        $this->assertInstanceOf(HasLabel::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasIcon::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(HasColor::class, SmsDriverEnum::SMSFACTOR);
=======
        $this->assertInstanceOf(\Filament\Support\Contracts\HasLabel::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(\Filament\Support\Contracts\HasIcon::class, SmsDriverEnum::SMSFACTOR);
        $this->assertInstanceOf(\Filament\Support\Contracts\HasColor::class, SmsDriverEnum::SMSFACTOR);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /** @test */
    public function it_has_trans_trait(): void
    {
<<<<<<< HEAD
        $reflection = new ReflectionClass(SmsDriverEnum::class);
        $traits = $reflection->getTraitNames();

=======
<<<<<<< HEAD
        $reflection = new ReflectionClass(SmsDriverEnum::class);
        $traits = $reflection->getTraitNames();

=======
        $reflection = new \ReflectionClass(SmsDriverEnum::class);
        $traits = $reflection->getTraitNames();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> e11621f (.)
        $uniqueValues = array_unique($values);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> a12f125f4a (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b93ef594b4 (.)
        $uniqueValues = array_unique($values);

=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
        $uniqueValues = array_unique($values);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = SmsDriverEnum::cases();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        $this->assertIsArray($cases);
        $this->assertCount(7, $cases);

<<<<<<< HEAD
=======
=======
        
        $this->assertIsArray($cases);
        $this->assertCount(7, $cases);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
