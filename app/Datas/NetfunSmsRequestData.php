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

    public static function fromArray(array $data): self
    {
        $token = $data['token'] ?? '';
        Assert::string($token);

        $messages = $data['messages'] ?? [];
        Assert::isArray($messages);

        return new self(
            token: $token,
            messages: $messages,
        );
    }
}
