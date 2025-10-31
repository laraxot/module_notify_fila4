<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Filament\Forms\Components\TextInput;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Modules\Notify\Enums\ContactTypeEnum;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ContactTypeEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(6, ContactTypeEnum::cases());

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('phone', ContactTypeEnum::PHONE->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('mobile', ContactTypeEnum::MOBILE->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('email', ContactTypeEnum::EMAIL->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('pec', ContactTypeEnum::PEC->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('whatsapp', ContactTypeEnum::WHATSAPP->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('fax', ContactTypeEnum::FAX->value);
    }

    /** @test */
    public function it_implements_filament_contracts(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(HasLabel::class, ContactTypeEnum::PHONE);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(HasIcon::class, ContactTypeEnum::PHONE);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(HasColor::class, ContactTypeEnum::PHONE);
    }

    /** @test */
    public function it_has_trans_trait(): void
    {
        $reflection = new ReflectionClass(ContactTypeEnum::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $traits = $reflection->getTraitNames();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Modules\Xot\Filament\Traits\TransTrait', $traits);
    }

    /** @test */
    public function it_has_required_methods(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getLabel'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getColor'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getIcon'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getDescription'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getSearchable'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists(ContactTypeEnum::class, 'getFormSchema'));
    }

    /** @test */
    public function get_searchable_returns_all_values(): void
    {
        $searchable = ContactTypeEnum::getSearchable();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(6, $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('phone', $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('mobile', $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('email', $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('pec', $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('whatsapp', $searchable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('fax', $searchable);
    }

    /** @test */
    public function get_form_schema_returns_text_inputs(): void
    {
        $form = ContactTypeEnum::getFormSchema();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($form);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(6, $form);

        foreach ($form as $component) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertInstanceOf(TextInput::class, $component);
        }
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
        $values = array_map(fn ($case) => $case->value, ContactTypeEnum::cases());
        $uniqueValues = array_unique($values);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }
}
