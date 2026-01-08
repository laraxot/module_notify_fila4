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
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
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
=======
>>>>>>> c4bdacbf (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> efb0f8d9 (rebase 210)
>>>>>>> 9725cc0a0 (.)
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
