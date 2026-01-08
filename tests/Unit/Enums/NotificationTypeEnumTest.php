<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Enums;

use Modules\Notify\Enums\NotificationTypeEnum;
use PHPUnit\Framework\TestCase;

class NotificationTypeEnumTest extends TestCase
{
    /** @test */
    public function it_has_correct_cases(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, NotificationTypeEnum::cases());

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('email', NotificationTypeEnum::EMAIL->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('sms', NotificationTypeEnum::SMS->value);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('push', NotificationTypeEnum::PUSH->value);
    }

    /** @test */
    public function label_returns_localized_string(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString(NotificationTypeEnum::EMAIL->label());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString(NotificationTypeEnum::SMS->label());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsString(NotificationTypeEnum::PUSH->label());
    }

    /** @test */
    public function icon_returns_heroicon_string(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('heroicon-o-envelope', NotificationTypeEnum::EMAIL->icon());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('heroicon-o-device-phone-mobile', NotificationTypeEnum::SMS->icon());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('heroicon-o-bell', NotificationTypeEnum::PUSH->icon());
    }

    /** @test */
    public function color_returns_correct_color(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('success', NotificationTypeEnum::EMAIL->color());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('warning', NotificationTypeEnum::SMS->color());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('info', NotificationTypeEnum::PUSH->color());
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
=======
        $values = array_map(fn ($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $values = array_map(fn($case) => $case->value, NotificationTypeEnum::cases());
>>>>>>> 161887a2 (.)
        $uniqueValues = array_unique($values);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(count($values), $uniqueValues, 'All enum cases should have unique values');
    }

    /** @test */
    public function cases_returns_all_enum_instances(): void
    {
        $cases = NotificationTypeEnum::cases();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($cases);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $cases);

        foreach ($cases as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertInstanceOf(NotificationTypeEnum::class, $case);
        }
    }

    /** @test */
    public function all_cases_have_required_methods(): void
    {
        foreach (NotificationTypeEnum::cases() as $case) {
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertIsString($case->label());
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertIsString($case->icon());
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertIsString($case->color());
        }
    }
}
