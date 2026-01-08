<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

class EmailAttachmentData extends Data
{
    public function __construct(
        private string $content,
        public string $name,
<<<<<<< HEAD
        public string $contentType = 'application/octet-stream',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
        public string $contentType = 'application/octet-stream',
=======
        public string $contentType = 'application/octet-stream'
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 9777d1b3 (.)
=======
        public string $contentType = 'application/octet-stream',
=======
=======
        public string $contentType = 'application/octet-stream',
=======
>>>>>>> d09cb759 (.)
=======
        public string $contentType = 'application/octet-stream',
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        public string $contentType = 'application/octet-stream',
=======
        public string $contentType = 'application/octet-stream'
>>>>>>> a12f125f4a (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> b93ef594b4 (.)
=======
        public string $contentType = 'application/octet-stream'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 3f537838 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
