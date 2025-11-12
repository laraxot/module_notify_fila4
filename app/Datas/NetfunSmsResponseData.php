<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
    public function __construct(
        public string $status,
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
<<<<<<< HEAD
            error: $data['error'] ?? null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> a12f125f4a (.)
=======
            error: $data['error'] ?? null,
>>>>>>> b93ef594b4 (.)
=======
            error: $data['error'] ?? null
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        );
    }
}
