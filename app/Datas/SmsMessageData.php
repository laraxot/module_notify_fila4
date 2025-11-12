<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

readonly class SmsMessageData
{
    public function __construct(
        public string $recipient,
        public string $message,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> f5f1cb1 (.)
    ) {}
}
