<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> f1c9518b (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Filament\Forms\Components\TextInput;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
use ReflectionClass;
=======
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Filament\Forms\Components\TextInput;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

class ContactTypeEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        $this->assertCount(6, ContactTypeEnum::cases());

        $this->assertEquals('phone', ContactTypeEnum::PHONE->value);
        $this->assertEquals('mobile', ContactTypeEnum::MOBILE->value);
        $this->assertEquals('email', ContactTypeEnum::EMAIL->value);
        $this->assertEquals('pec', ContactTypeEnum::PEC->value);
        $this->assertEquals('whatsapp', ContactTypeEnum::WHATSAPP->value);
        $this->assertEquals('fax', ContactTypeEnum::FAX->value);
    }

    /** @test */
    public function it_implements_filament_contracts(): void
    {
        $this->assertInstanceOf(HasLabel::class, ContactTypeEnum::PHONE);
        $this->assertInstanceOf(HasIcon::class, ContactTypeEnum::PHONE);
        $this->assertInstanceOf(HasColor::class, ContactTypeEnum::PHONE);
    }

    /** @test */
    public function it_has_trans_trait(): void
    {
        $reflection = new ReflectionClass(ContactTypeEnum::class);
        $traits = $reflection->getTraitNames();

        $this->assertContains('Modules\Xot\Filament\Traits\TransTrait', $traits);
    }

    /** @test */
    public function it_has_required_methods(): void
    {
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getLabel'));
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getColor'));
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getIcon'));
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getDescription'));
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getSearchable'));
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getFormSchema'));
    }

    /** @test */
    public function get_searchable_returns_all_values(): void
    {
        $searchable = ContactTypeEnum::getSearchable();

        $this->assertIsArray($searchable);
        $this->assertCount(6, $searchable);
        $this->assertContains('phone', $searchable);
        $this->assertContains('mobile', $searchable);
        $this->assertContains('email', $searchable);
        $this->assertContains('pec', $searchable);
        $this->assertContains('whatsapp', $searchable);
        $this->assertContains('fax', $searchable);
    }

    /** @test */
    public function get_form_schema_returns_text_inputs(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $form = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($form);
        $this->assertCount(6, $form);

        foreach ($form as $component) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
        $schema = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($schema);
        $this->assertCount(6, $schema);

        foreach ($schema as $component) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            $this->assertInstanceOf(TextInput::class, $component);
        }
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
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
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
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }
}
