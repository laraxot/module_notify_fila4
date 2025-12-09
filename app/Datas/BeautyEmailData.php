<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;

// use Modules\Notify\Datas\BeautyEmailViewData;

class BeautyEmailData extends Data
{
    public array $view;

    // css must not be accessed before its inizialization.
    // sulla config beautymail di localhost manca, quindi va gestito se è vuoto
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    public null|array $css = [];
=======
    public ?array $css = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|array $css = [];
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|array $css = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

    public array $colors;
}
