<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
<<<<<<< HEAD
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> b19cd40 (.)
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> 4e2ebfb (.)
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
<<<<<<< HEAD
<<<<<<< HEAD
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
        );
    }
}
