<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\Notification;
=======
=======
>>>>>>> 7148d73 (.)

namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

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
