<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

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
<<<<<<< HEAD
        $token = is_string($data['token'] ?? null) ? $data['token'] : '';
        $messages = is_array($data['messages'] ?? null) ? $data['messages'] : [];
=======
        $token = $data['token'] ?? '';
        Assert::string($token);

        $messages = $data['messages'] ?? [];
        Assert::isArray($messages);
>>>>>>> ec9288a (.)

        return new self(
            token: $token,
            messages: $messages,
        );
    }
}
