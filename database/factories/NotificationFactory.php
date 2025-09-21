<?php

<<<<<<< HEAD
declare(strict_types=1);


namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\Notification;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


>>>>>>> b93ef594b4 (.)
namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\Notification;
=======
namespace Modules\Notify\Database\Factories;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
<<<<<<< HEAD
    protected $model = Notification::class;
=======
<<<<<<< HEAD
    protected $model = Notification::class;
=======
    protected $model = \Modules\Notify\Models\Notification::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
