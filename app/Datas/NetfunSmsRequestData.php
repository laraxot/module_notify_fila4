<?php

<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsRequestData extends Data
{
<<<<<<< HEAD
    /**
     * @param string $token
     * @param array<int, array<string, mixed>> $messages
     */
=======
>>>>>>> 75179b85 (.)
    public function __construct(
        public string $token,
        public array $messages,
    ) {}

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
    public static function fromArray(array $data): self
    {
        return new self(
            token: $data['token'],
<<<<<<< HEAD
            messages: $data['messages'],
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            messages: $data['messages']
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
        );
    }
}
