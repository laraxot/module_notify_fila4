<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
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
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> f1c9518b (.)
use Filament\Support\Contracts\HasLabel;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
use Modules\Notify\Enums\SmsDriverEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
use ReflectionClass;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop

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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
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
=======
>>>>>>> 207ac35 (.)
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
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
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
=======
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> b19cd40 (.)
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
        $values = array_map(fn ($case) => $case->value, SmsDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
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
        $values = array_map(fn($case) => $case->value, SmsDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
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
=======
>>>>>>> 301ad8b44 (.)
