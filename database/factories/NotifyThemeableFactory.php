<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;

/**
 * NotifyThemeable Factory
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> a12f125f4a (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            'themeable_type' => 'Modules\\User\\Models\\User',
        ]);
    }

    public function forPatient(): static
    {
<<<<<<< HEAD
        return $this->state(fn (array $_attributes): array => [
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        return $this->state(fn(array $_attributes): array => [
>>>>>>> f813254 (.)
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
<<<<<<< HEAD
=======
=======
        return $this->state(fn (array $attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> b93ef594b4 (.)
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        return $this->state(fn (array $attributes): array => [
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
