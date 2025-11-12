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
    public ?array $css = [];
=======
<<<<<<< HEAD
    public null|array $css = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $css = [];
=======
    public ?array $css = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $css = [];
>>>>>>> b93ef594b4 (.)
=======
    public ?array $css = [];
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    public array $colors;
}
