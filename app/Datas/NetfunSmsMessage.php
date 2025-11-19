<?php

declare(strict_types=1);

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
namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class NetfunSmsMessage extends Data
{
    public function __construct(
        public string $recipient,
        public string $text,
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
