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
use Spatie\LaravelData\Optional;

class NetfunSmsData extends Data
{
    public function __construct(
        public string $recipient,
        public string $message,
        public string $sender,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    ) {}
}
