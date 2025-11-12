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
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    public null|array $css = [];
=======
    public ?array $css = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public null|array $css = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
    public null|array $css = [];
>>>>>>> e11621f (.)

    public array $colors;
}
