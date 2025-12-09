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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    ) {}
}
