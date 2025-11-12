<?php

declare(strict_types=1);

namespace Modules\Notify\Database\Factories;

<<<<<<< HEAD
=======
use Modules\Notify\Models\MailTemplateLog;
>>>>>>> f5f1cb1 (.)
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\MailTemplateLog;

class MailTemplateLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = MailTemplateLog::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}
