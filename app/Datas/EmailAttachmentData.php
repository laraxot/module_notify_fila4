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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        public string $contentType = 'application/octet-stream',
=======
        public string $contentType = 'application/octet-stream'
>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
        public string $contentType = 'application/octet-stream',
>>>>>>> 3f537838 (.)
    ) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
