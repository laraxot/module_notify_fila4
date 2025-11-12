<?php

<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);


=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
declare(strict_types=1);


<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        public null|string $reference = null,
        public null|string $scheduledDate = null,
=======
        public ?string $reference = null,
        public ?string $scheduledDate = null,
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        public null|string $reference = null,
        public null|string $scheduledDate = null,
>>>>>>> b93ef594b4 (.)
=======
        public ?string $reference = null,
        public ?string $scheduledDate = null,
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    ) {}
}
