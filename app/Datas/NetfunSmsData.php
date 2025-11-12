<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
=======

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
>>>>>>> 99ff506 (.)

class NetfunSmsData extends Data
{
    public function __construct(
        public string $recipient,
        public string $message,
        public string $sender,
<<<<<<< HEAD
        public ?string $reference = null,
        public ?string $scheduledDate = null,
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 99ff506 (.)
    ) {}
}
