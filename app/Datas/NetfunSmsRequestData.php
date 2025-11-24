<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======

>>>>>>> 7148d73 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
<<<<<<< HEAD
=======
    /**
     * @param string $token
     * @param array<int, array<string, mixed>> $messages
     */
>>>>>>> 7148d73 (.)
    public function __construct(
        public string $token,
        public array $messages,
    ) {}

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param  array<string, mixed>  $data
     */
    public static function fromArray(array $data): self
    {
        $token = is_string($data['token'] ?? null) ? $data['token'] : '';
        $messages = is_array($data['messages'] ?? null) ? $data['messages'] : [];

        return new self(
            token: $token,
            messages: $messages,
=======
    public static function fromArray(array $data): self
    {
        return new self(
            token: $data['token'],
            messages: $data['messages'],
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            messages: $data['messages'],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
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
>>>>>>> 7148d73 (.)
        );
    }
}
