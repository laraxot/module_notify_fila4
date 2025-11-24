<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======

>>>>>>> 7148d73 (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
<<<<<<< HEAD
    public function __construct(
        public string $status,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
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
            status: $status,
            batchId: $batchId,
            messages: $messages,
            error: $error,
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
    /**
     * @param string $status
     * @param string|null $batchId
     * @param array<int, array<string, mixed>>|null $messages
     * @param string|null $error
     */
    public function __construct(
        public string $status,
>>>>>>> 7148d73 (.)
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
    ) {}

<<<<<<< HEAD
    public static function fromArray(array $data): self
    {
        return new self(
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
            error: $data['error'] ?? null,
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
    /**
     * @param array{status: string, batchId?: string, messages?: array<int, array<string, mixed>>, error?: string} $data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        /** @var string $status */
        $status = $data['status'];
        /** @var string|null $batchId */
        $batchId = $data['batchId'] ?? null;
        /** @var array<int, array<string, mixed>>|null $messages */
        $messages = $data['messages'] ?? null;
        /** @var string|null $error */
        $error = $data['error'] ?? null;
        return new self(
            status: $status,
            batchId: $batchId,
            messages: $messages,
            error: $error,
>>>>>>> 7148d73 (.)
        );
    }
}
