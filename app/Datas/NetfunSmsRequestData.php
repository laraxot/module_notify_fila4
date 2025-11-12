<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

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
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
    public function __construct(
        public string $token,
        public array $messages,
    ) {}

    /**
     * @param  array<string, mixed>  $data
     */
    public static function fromArray(array $data): self
    {
        $token = is_string($data['token'] ?? null) ? $data['token'] : '';
        $messages = is_array($data['messages'] ?? null) ? $data['messages'] : [];

        return new self(
<<<<<<< HEAD
            token: $token,
            messages: $messages,
=======
            token: $data['token'],
<<<<<<< HEAD
            messages: $data['messages'],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            messages: $data['messages'],
=======
            messages: $data['messages']
>>>>>>> a12f125f4a (.)
=======
            messages: $data['messages'],
>>>>>>> b93ef594b4 (.)
=======
            messages: $data['messages']
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        );
    }
}
