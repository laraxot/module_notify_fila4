<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
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
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Filament\Forms\Components\TextInput;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)

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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7624f916 (.)
        $form = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($form);
        $this->assertCount(6, $form);

        foreach ($form as $component) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $schema = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($schema);
        $this->assertCount(6, $schema);

        foreach ($schema as $component) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
            $this->assertInstanceOf(TextInput::class, $component);
        }
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
<<<<<<< HEAD
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
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
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> ce89c8bb (.)
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 888799d0 (.)
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
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
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> 3f39ac8b (.)
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
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
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2fc60436 (.)
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
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
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
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
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> 6e2169a3 (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
>>>>>>> 99a612a8 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }
}
