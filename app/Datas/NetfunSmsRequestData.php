<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
declare(strict_types=1);


=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
    /**
     * @param  array<int, array<string, mixed>>  $messages
     */
    public function __construct(
        public string $token,
        public array $messages,
    ) {}

    /**
     * @param  array{token: string, messages: array<int, array<string, mixed>>}  $data
     */
    public static function fromArray(array $data): self
    {
<<<<<<< HEAD
        /** @var string $token */
        $token = $data['token'];
        /** @var array<int, array<string, mixed>> $messages */
        $messages = $data['messages'];

        return new self(
            token: $token,
            messages: $messages,
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    public static function fromArray(array $data): self
    {
        return new self(
            token: $data['token'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
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
            messages: $data['messages'],
>>>>>>> d09cb759 (.)
=======
            messages: $data['messages'],
>>>>>>> d09cb759 (.)
=======
            messages: $data['messages'],
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
            messages: $data['messages'],
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            messages: $data['messages'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            messages: $data['messages'],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            messages: $data['messages'],
>>>>>>> 3f537838 (.)
=======
            messages: $data['messages'],
>>>>>>> 75179b85 (.)
=======
            messages: $data['messages'],
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            messages: $data['messages'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            messages: $data['messages'],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            messages: $data['messages'],
>>>>>>> 3f537838 (.)
=======
            messages: $data['messages'],
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
            messages: $data['messages'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            messages: $data['messages'],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
            messages: $data['messages'],
>>>>>>> 2941b0bd (.)
=======
        return new self(
            token: $data['token'],
            messages: $data['messages'],
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        );
    }
}
