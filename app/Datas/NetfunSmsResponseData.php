<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
=======
declare(strict_types=1);


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
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
=======
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> a12f125f4a (.)
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> b93ef594b4 (.)
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
>>>>>>> f813254 (.)
        );
    }
}
