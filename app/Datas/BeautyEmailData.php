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
    public ?array $css = [];
=======
    public null|array $css = [];
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $css = [];
=======
    public ?array $css = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|array $css = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|array $css = [];
>>>>>>> 9777d1b (.)

    public array $colors;
}
