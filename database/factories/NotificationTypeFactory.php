<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======

>>>>>>> 7148d73 (.)
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\NotificationType;

class NotificationTypeFactory extends Factory
{
    protected $model = NotificationType::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence(),
            'is_active' => $this->faker->boolean(90),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
