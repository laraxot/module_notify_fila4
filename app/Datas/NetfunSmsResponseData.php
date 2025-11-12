<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
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
