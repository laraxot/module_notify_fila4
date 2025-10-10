<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $status = $data['status'];
        Assert::string($status);

        $batchId = $data['batchId'] ?? null;
        Assert::nullOrString($batchId);

        $messages = $data['messages'] ?? null;
        Assert::nullOrIsArray($messages);

        $error = $data['error'] ?? null;
        Assert::nullOrString($error);

        return new self(
            status: $status,
            batchId: $batchId,
            messages: $messages,
            error: $error,
        );
    }
}
