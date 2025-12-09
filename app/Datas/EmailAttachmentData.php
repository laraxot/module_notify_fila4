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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
        public string $contentType = 'application/octet-stream',
=======
        public string $contentType = 'application/octet-stream'
>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
        public string $contentType = 'application/octet-stream',
=======
>>>>>>> 4689a827 (.)
=======
        public string $contentType = 'application/octet-stream',
=======
>>>>>>> 7325acf3 (.)
=======
        public string $contentType = 'application/octet-stream',
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
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
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> c6c33175 (.)
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
