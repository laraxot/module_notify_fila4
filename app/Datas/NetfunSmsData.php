<?php

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
=======

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;
>>>>>>> 75179b8 (.)

class NetfunSmsData extends Data
{
    public function __construct(
        public string $recipient,
        public string $message,
        public string $sender,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $reference = null,
        public ?string $scheduledDate = null,
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 9777d1b (.)
    ) {}
}
