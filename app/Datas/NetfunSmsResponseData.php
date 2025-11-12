<?php

declare(strict_types=1);

<<<<<<< HEAD
=======

>>>>>>> f5f1cb1 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
<<<<<<< HEAD
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> f5f1cb1 (.)
    ) {}

    /**
     * @param  array<string, mixed>  $data
     */
    public static function fromArray(array $data): self
    {
        $status = is_string($data['status'] ?? null) ? $data['status'] : '';
        $batchId = isset($data['batchId']) && is_string($data['batchId']) ? $data['batchId'] : null;
        $messages = isset($data['messages']) && is_array($data['messages']) ? $data['messages'] : null;
        $error = isset($data['error']) && is_string($data['error']) ? $data['error'] : null;

        return new self(
<<<<<<< HEAD
            status: $status,
            batchId: $batchId,
            messages: $messages,
            error: $error,
=======
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
            error: $data['error'] ?? null,
>>>>>>> f5f1cb1 (.)
        );
    }
}
