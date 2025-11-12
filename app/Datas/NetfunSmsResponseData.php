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

    /**
     * @param  array<string, mixed>  $data
     */
    public static function fromArray(array $data): self
    {
<<<<<<< HEAD
        $status = is_string($data['status'] ?? null) ? $data['status'] : '';
        $batchId = isset($data['batchId']) && is_string($data['batchId']) ? $data['batchId'] : null;
        $messages = isset($data['messages']) && is_array($data['messages']) ? $data['messages'] : null;
        $error = isset($data['error']) && is_string($data['error']) ? $data['error'] : null;
=======
        $status = $data['status'];
        Assert::string($status);

        $batchId = $data['batchId'] ?? null;
        Assert::nullOrString($batchId);

        $messages = $data['messages'] ?? null;
        Assert::nullOrIsArray($messages);

        $error = $data['error'] ?? null;
        Assert::nullOrString($error);
>>>>>>> ec9288a (.)

        return new self(
            status: $status,
            batchId: $batchId,
            messages: $messages,
            error: $error,
        );
    }
}
