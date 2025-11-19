<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\NotificationTemplate;
=======

namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\NotificationTemplate;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 75179b8 (.)

class NotificationTemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = NotificationTemplate::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
