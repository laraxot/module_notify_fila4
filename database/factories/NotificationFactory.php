<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\Notification;
=======

=======
>>>>>>> b19cd40 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 99ff506 (.)

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Notification::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
