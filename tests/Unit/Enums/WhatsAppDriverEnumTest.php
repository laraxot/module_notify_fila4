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
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, WhatsAppDriverEnum::cases());

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('twilio', WhatsAppDriverEnum::TWILIO->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('messagebird', WhatsAppDriverEnum::MESSAGEBIRD->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('vonage', WhatsAppDriverEnum::VONAGE->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('infobip', WhatsAppDriverEnum::INFOBIP->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = WhatsAppDriverEnum::options();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Twilio', $options['twilio']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('MessageBird', $options['messagebird']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Vonage', $options['vonage']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Infobip', $options['infobip']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = WhatsAppDriverEnum::labels();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('twilio', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('messagebird', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('vonage', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('infobip', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_drivers(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(WhatsAppDriverEnum::isSupported('twilio'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(WhatsAppDriverEnum::isSupported('messagebird'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(WhatsAppDriverEnum::isSupported('vonage'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(WhatsAppDriverEnum::isSupported('infobip'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_drivers(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(WhatsAppDriverEnum::isSupported('invalid'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(WhatsAppDriverEnum::isSupported(''));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(WhatsAppDriverEnum::isSupported('TWILIO'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(WhatsAppDriverEnum::isSupported('Twilio'));
    }

    /** @test */
    public function get_default_returns_default_driver(): void
    {
        $default = WhatsAppDriverEnum::getDefault();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(WhatsAppDriverEnum::class, $default);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains($default, WhatsAppDriverEnum::cases());
    }

    /** @test */
    public function each_case_has_unique_value(): void
    {
        $values = array_map(fn ($case) => $case->value, WhatsAppDriverEnum::cases());
        $uniqueValues = array_unique($values);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = WhatsAppDriverEnum::cases();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($cases);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $cases);

        foreach ($cases as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertInstanceOf(WhatsAppDriverEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (WhatsAppDriverEnum::cases() as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertIsString($case->value);
        }
    }
}
