<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBaseDashboard;
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)

class Dashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
         * $user = auth()->user();
         * if (! $user->hasRole('super-admin')) {
         * redirect('/admin');
         * }
         */
    }
}
