<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasColor;
use Filament\Forms\Components\TextInput;
use Modules\Notify\Enums\ContactTypeEnum;
<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
use ReflectionClass;
>>>>>>> c8903a55c (.)

it('has correct cases', function (): void {
    expect(ContactTypeEnum::cases())->toHaveCount(6);

    expect(ContactTypeEnum::PHONE->value)->toBe('phone');
    expect(ContactTypeEnum::MOBILE->value)->toBe('mobile');
    expect(ContactTypeEnum::EMAIL->value)->toBe('email');
    expect(ContactTypeEnum::PEC->value)->toBe('pec');
    expect(ContactTypeEnum::WHATSAPP->value)->toBe('whatsapp');
    expect(ContactTypeEnum::FAX->value)->toBe('fax');
});

it('implements filament contracts', function (): void {
    expect(ContactTypeEnum::PHONE)->toBeInstanceOf(HasLabel::class);
    expect(ContactTypeEnum::PHONE)->toBeInstanceOf(HasIcon::class);
    expect(ContactTypeEnum::PHONE)->toBeInstanceOf(HasColor::class);
});

it('has trans trait', function (): void {
    $reflection = new ReflectionClass(ContactTypeEnum::class);
    $traits = $reflection->getTraitNames();

    expect($traits)->toContain('Modules\\Xot\\Filament\\Traits\\TransTrait');
});

it('has required methods', function (): void {
    expect(method_exists(ContactTypeEnum::class, 'getLabel'))->toBeTrue();
    expect(method_exists(ContactTypeEnum::class, 'getColor'))->toBeTrue();
    expect(method_exists(ContactTypeEnum::class, 'getIcon'))->toBeTrue();
    expect(method_exists(ContactTypeEnum::class, 'getDescription'))->toBeTrue();
    expect(method_exists(ContactTypeEnum::class, 'getSearchable'))->toBeTrue();
    expect(method_exists(ContactTypeEnum::class, 'getFormSchema'))->toBeTrue();
});

it('getSearchable returns all values', function (): void {
    $searchable = ContactTypeEnum::getSearchable();

    expect($searchable)->toBeArray();
    expect($searchable)->toHaveCount(6);
    expect($searchable)->toContain('phone', 'mobile', 'email', 'pec', 'whatsapp', 'fax');
});

it('getFormSchema returns TextInput components', function (): void {
    $schema = ContactTypeEnum::getFormSchema();

    expect($schema)->toBeArray();
    expect($schema)->toHaveCount(6);

    foreach ($schema as $component) {
        expect($component)->toBeInstanceOf(TextInput::class);
    }
});

it('each case has a unique value', function (): void {
    $values = array_map(static fn (ContactTypeEnum $case): string => $case->value, ContactTypeEnum::cases());
    $uniqueValues = array_unique($values);

<<<<<<< HEAD
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
        $schema = ContactTypeEnum::getFormSchema();

        $this->assertIsArray($schema);
        $this->assertCount(6, $schema);

        foreach ($schema as $component) {
            $this->assertInstanceOf(TextInput::class, $component);
        }
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
        $values = array_map(fn($case) => $case->value, ContactTypeEnum::cases());
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }
}
=======
    expect($uniqueValues)->toHaveCount(count($values));
});
>>>>>>> c8903a55c (.)
