<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
declare(strict_types=1);

<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
declare(strict_types=1);


>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
declare(strict_types=1);


>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
declare(strict_types=1);


>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
declare(strict_types=1);


>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
declare(strict_types=1);


>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsResponseData extends Data
{
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    public function __construct(
        public string $status,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
    ) {}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param array{status: string, batchId?: string, messages?: array<int, array<string, mixed>>, error?: string} $data
     * @return self
     */
    public static function fromArray(array $data): self
    {
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
        public ?string $batchId = null,
        public ?array $messages = null,
        public ?string $error = null,
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
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
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
        public null|string $batchId = null,
        public null|array $messages = null,
        public null|string $error = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
    ) {}

>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
            error: $data['error'] ?? null,
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 3f537838 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 75179b85 (.)
=======
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 3f537838 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 75179b85 (.)
=======
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 3f537838 (.)
=======
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            error: $data['error'] ?? null,
>>>>>>> 2941b0bd (.)
=======
        return new self(
            status: $data['status'],
            batchId: $data['batchId'] ?? null,
            messages: $data['messages'] ?? null,
            error: $data['error'] ?? null,
>>>>>>> 5fd545e4 (.)
=======
            error: $data['error'] ?? null,
=======
            error: $data['error'] ?? null
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
            error: $data['error'] ?? null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
        );
    }
}
