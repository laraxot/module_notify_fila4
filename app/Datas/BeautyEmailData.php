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
    public null|array $css = [];
>>>>>>> 75179b8 (.)

    public array $colors;
}
