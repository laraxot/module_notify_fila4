<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\MailTemplateVersion;
=======

namespace Modules\Notify\Database\Factories;

use Modules\Notify\Models\MailTemplateVersion;
use Illuminate\Database\Eloquent\Factories\Factory;
>>>>>>> 99ff506 (.)

class MailTemplateVersionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = MailTemplateVersion::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
