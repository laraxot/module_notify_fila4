<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;

/**
 * NotifyThemeable Factory
 *
 * @extends Factory<NotifyThemeable>
 */
class NotifyThemeableFactory extends Factory
{
    protected $model = NotifyThemeable::class;

    public function definition(): array
    {
        return [
            'notify_theme_id' => NotifyTheme::factory(),
            'themeable_type' => $this->faker->randomElement([
                'Modules\\User\\Models\\User',
                'Modules\\User\\Models\\User', // Generic fallback instead of project-specific
                'Modules\\User\\Models\\User', // Generic fallback instead of project-specific
            ]),
            'themeable_id' => $this->faker->randomNumber(),
        ];
    }

    public function forUser(): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9777d1b (.)
            'themeable_type' => 'Modules\\User\\Models\\User',
        ]);
    }

    public function forPatient(): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b8 (.)
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
