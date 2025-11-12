<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
=======

=======
>>>>>>> b19cd40 (.)
=======
declare(strict_types=1);


>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        public ?string $reference = null,
        public ?string $scheduledDate = null,
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    ) {}
}
