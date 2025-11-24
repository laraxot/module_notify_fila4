<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
=======
=======
>>>>>>> 7148d73 (.)
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use ReflectionClass;
use Filament\Forms\Components\TextInput;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

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
        $form = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($form);
        $this->assertCount(6, $form);

        foreach ($form as $component) {
=======
=======
>>>>>>> 7148d73 (.)
        $schema = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($schema);
        $this->assertCount(6, $schema);

        foreach ($schema as $component) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
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
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 9777d1b (.)
=======
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
>>>>>>> 7148d73 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }
}
