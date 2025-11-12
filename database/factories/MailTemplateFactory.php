<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
namespace Modules\Notify\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Notify\Models\MailTemplate;

class MailTemplateFactory extends Factory
{
    protected $model = MailTemplate::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'slug' => $this->faker->slug(),
            'subject' => $this->faker->sentence(),
            'html_template' => $this->faker->randomHtml(),
            'text_template' => $this->faker->text(),
            'type' => $this->faker->randomElement(['email', 'notification', 'sms']),
            'is_active' => $this->faker->boolean(80),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
