<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Modules\Notify\Enums\WhatsAppDriverEnum;
use PHPUnit\Framework\TestCase;

class WhatsAppDriverEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        $this->assertCount(4, WhatsAppDriverEnum::cases());
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertEquals('twilio', WhatsAppDriverEnum::TWILIO->value);
        $this->assertEquals('messagebird', WhatsAppDriverEnum::MESSAGEBIRD->value);
        $this->assertEquals('vonage', WhatsAppDriverEnum::VONAGE->value);
        $this->assertEquals('infobip', WhatsAppDriverEnum::INFOBIP->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = WhatsAppDriverEnum::options();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertIsArray($options);
        $this->assertCount(4, $options);
        $this->assertEquals('Twilio', $options['twilio']);
        $this->assertEquals('MessageBird', $options['messagebird']);
        $this->assertEquals('Vonage', $options['vonage']);
        $this->assertEquals('Infobip', $options['infobip']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = WhatsAppDriverEnum::labels();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertIsArray($labels);
        $this->assertCount(4, $labels);
        $this->assertArrayHasKey('twilio', $labels);
        $this->assertArrayHasKey('messagebird', $labels);
        $this->assertArrayHasKey('vonage', $labels);
        $this->assertArrayHasKey('infobip', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_drivers(): void
    {
        $this->assertTrue(WhatsAppDriverEnum::isSupported('twilio'));
        $this->assertTrue(WhatsAppDriverEnum::isSupported('messagebird'));
        $this->assertTrue(WhatsAppDriverEnum::isSupported('vonage'));
        $this->assertTrue(WhatsAppDriverEnum::isSupported('infobip'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_drivers(): void
    {
        $this->assertFalse(WhatsAppDriverEnum::isSupported('invalid'));
        $this->assertFalse(WhatsAppDriverEnum::isSupported(''));
        $this->assertFalse(WhatsAppDriverEnum::isSupported('TWILIO'));
        $this->assertFalse(WhatsAppDriverEnum::isSupported('Twilio'));
    }

    /** @test */
    public function get_default_returns_default_driver(): void
    {
        $default = WhatsAppDriverEnum::getDefault();
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertInstanceOf(WhatsAppDriverEnum::class, $default);
        $this->assertContains($default, WhatsAppDriverEnum::cases());
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 207ac35 (.)
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 985c7bda (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 161887a2 (.)
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
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
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
        $uniqueValues = array_unique($values);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> a12f125f4a (.)
=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
>>>>>>> b93ef594b4 (.)
        $uniqueValues = array_unique($values);

=======
        $values = array_map(fn($case) => $case->value, WhatsAppDriverEnum::cases());
        $uniqueValues = array_unique($values);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = WhatsAppDriverEnum::cases();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        $this->assertIsArray($cases);
        $this->assertCount(4, $cases);

<<<<<<< HEAD
=======
=======
        
        $this->assertIsArray($cases);
        $this->assertCount(4, $cases);
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        foreach ($cases as $case) {
            $this->assertInstanceOf(WhatsAppDriverEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (WhatsAppDriverEnum::cases() as $case) {
            $this->assertIsString($case->value);
        }
    }
}
=======
>>>>>>> 301ad8b44 (.)
