<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
declare(strict_types=1);


=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param string $status
     * @param string|null $batchId
     * @param array<int, array<string, mixed>>|null $messages
     * @param string|null $error
     */
=======
>>>>>>> 75179b85 (.)
    public function __construct(
        public string $status,
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> b19cd40 (.)
    ) {}

<<<<<<< HEAD
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
=======
=======
    public function __construct(
        public string $status,
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
=======
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
>>>>>>> b19cd40 (.)
    ) {}

>>>>>>> 75179b85 (.)
    public static function fromArray(array $data): self
    {
        return new self(
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            error: $data['error'] ?? null,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 75179b85 (.)
=======
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
        );
    }
}
