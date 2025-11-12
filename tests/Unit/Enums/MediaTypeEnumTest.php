<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Modules\Notify\Enums\MediaTypeEnum;
use PHPUnit\Framework\TestCase;

class MediaTypeEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, MediaTypeEnum::cases());

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('image', MediaTypeEnum::IMAGE->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('video', MediaTypeEnum::VIDEO->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('document', MediaTypeEnum::DOCUMENT->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('audio', MediaTypeEnum::AUDIO->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = MediaTypeEnum::options();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $options);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Image', $options['image']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Video', $options['video']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Document', $options['document']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('Audio', $options['audio']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = MediaTypeEnum::labels();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('image', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('video', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('document', $labels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertArrayHasKey('audio', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_types(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(MediaTypeEnum::isSupported('image'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(MediaTypeEnum::isSupported('video'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(MediaTypeEnum::isSupported('document'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(MediaTypeEnum::isSupported('audio'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_types(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(MediaTypeEnum::isSupported('invalid'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(MediaTypeEnum::isSupported(''));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(MediaTypeEnum::isSupported('IMAGE'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse(MediaTypeEnum::isSupported('Image'));
    }

    /** @test */
    public function get_default_returns_image(): void
    {
        $default = MediaTypeEnum::getDefault();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(MediaTypeEnum::class, $default);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(MediaTypeEnum::IMAGE, $default);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('image', $default->value);
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
        $values = array_map(fn ($case) => $case->value, MediaTypeEnum::cases());
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> e11621f (.)
        $uniqueValues = array_unique($values);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = MediaTypeEnum::cases();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($cases);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $cases);

        foreach ($cases as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertInstanceOf(MediaTypeEnum::class, $case);
        }
    }
}
