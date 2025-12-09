<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param string $token
     * @param array<int, array<string, mixed>> $messages
     */
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    public function __construct(
        public string $token,
        public array $messages,
    ) {}

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param array{token: string, messages: array<int, array<string, mixed>>} $data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        /** @var string $token */
        $token = $data['token'];
        /** @var array<int, array<string, mixed>> $messages */
        $messages = $data['messages'];
        return new self(
            token: $token,
            messages: $messages,
=======
=======
>>>>>>> 75179b85 (.)
    public static function fromArray(array $data): self
    {
        return new self(
            token: $data['token'],
<<<<<<< HEAD
<<<<<<< HEAD
            messages: $data['messages'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            messages: $data['messages'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
            messages: $data['messages'],
>>>>>>> 75179b85 (.)
        );
    }
}
