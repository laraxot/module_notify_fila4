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
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    ) {}
}
