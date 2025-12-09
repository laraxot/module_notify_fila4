<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;

/**
 * NotifyThemeable Factory
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> b19cd40 (.)
=======
 *
>>>>>>> 75179b85 (.)
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
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> b19cd40 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b85 (.)
            'themeable_type' => 'Modules\\User\\Models\\User',
        ]);
    }

    public function forPatient(): static
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        return $this->state(fn(array $_attributes): array => [
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
<<<<<<< HEAD
=======
        return $this->state(fn (array $attributes): array => [
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
