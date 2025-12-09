<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
}
=======
}
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
