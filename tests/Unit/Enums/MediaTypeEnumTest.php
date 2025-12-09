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
        $this->assertCount(4, MediaTypeEnum::cases());

        $this->assertEquals('image', MediaTypeEnum::IMAGE->value);
        $this->assertEquals('video', MediaTypeEnum::VIDEO->value);
        $this->assertEquals('document', MediaTypeEnum::DOCUMENT->value);
        $this->assertEquals('audio', MediaTypeEnum::AUDIO->value);
    }

    /** @test */
    public function options_returns_correct_array(): void
    {
        $options = MediaTypeEnum::options();

        $this->assertIsArray($options);
        $this->assertCount(4, $options);
        $this->assertEquals('Image', $options['image']);
        $this->assertEquals('Video', $options['video']);
        $this->assertEquals('Document', $options['document']);
        $this->assertEquals('Audio', $options['audio']);
    }

    /** @test */
    public function labels_returns_localized_array(): void
    {
        $labels = MediaTypeEnum::labels();

        $this->assertIsArray($labels);
        $this->assertCount(4, $labels);
        $this->assertArrayHasKey('image', $labels);
        $this->assertArrayHasKey('video', $labels);
        $this->assertArrayHasKey('document', $labels);
        $this->assertArrayHasKey('audio', $labels);
    }

    /** @test */
    public function is_supported_returns_true_for_valid_types(): void
    {
        $this->assertTrue(MediaTypeEnum::isSupported('image'));
        $this->assertTrue(MediaTypeEnum::isSupported('video'));
        $this->assertTrue(MediaTypeEnum::isSupported('document'));
        $this->assertTrue(MediaTypeEnum::isSupported('audio'));
    }

    /** @test */
    public function is_supported_returns_false_for_invalid_types(): void
    {
        $this->assertFalse(MediaTypeEnum::isSupported('invalid'));
        $this->assertFalse(MediaTypeEnum::isSupported(''));
        $this->assertFalse(MediaTypeEnum::isSupported('IMAGE'));
        $this->assertFalse(MediaTypeEnum::isSupported('Image'));
    }

    /** @test */
    public function get_default_returns_image(): void
    {
        $default = MediaTypeEnum::getDefault();

        $this->assertInstanceOf(MediaTypeEnum::class, $default);
        $this->assertEquals(MediaTypeEnum::IMAGE, $default);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, MediaTypeEnum::cases());
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
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, MediaTypeEnum::cases());
>>>>>>> 161887a2 (.)
        $uniqueValues = array_unique($values);

        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = MediaTypeEnum::cases();

        $this->assertIsArray($cases);
        $this->assertCount(4, $cases);

        foreach ($cases as $case) {
            $this->assertInstanceOf(MediaTypeEnum::class, $case);
        }
    }
}
