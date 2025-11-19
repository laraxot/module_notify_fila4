<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

readonly class SmsMessageData
{
    public function __construct(
        public string $recipient,
        public string $message,
<<<<<<< HEAD
        public ?string $sender = null,
        public ?string $reference = null,
        public ?string $scheduledDate = null,
=======
        public null|string $sender = null,
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 75179b8 (.)
    ) {}
}
