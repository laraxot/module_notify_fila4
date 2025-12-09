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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
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
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
 *
=======
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
 *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
 *
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
 *
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
 *
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
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
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9777d1b3 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
=======
        return $this->state(fn(array $_attributes): array => [
=======
>>>>>>> d09cb759 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
>>>>>>> d09cb759 (.)
=======
        return $this->state(fn(array $_attributes): array => [
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3f537838 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3f537838 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
        return $this->state(fn (array $_attributes): array => [
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
        return $this->state(fn(array $_attributes): array => [
=======
        return $this->state(fn (array $attributes): array => [
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
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
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
        return $this->state(fn(array $_attributes): array => [
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
            'themeable_type' => 'Modules\\User\\Models\\User',
        ]);
    }

    public function forPatient(): static
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
        return $this->state(fn(array $_attributes): array => [
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
        return $this->state(fn (array $_attributes): array => [
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
        return $this->state(fn(array $_attributes): array => [
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
        return $this->state(fn (array $attributes): array => [
            'themeable_type' => 'Modules\\User\\Models\\User', // Generic fallback
        ]);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
