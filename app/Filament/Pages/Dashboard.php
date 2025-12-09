<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

class Dashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
         * $user = auth()->user();
         * if (! $user->hasRole('super-admin')) {
         * redirect('/admin');
         * }
         */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $user = auth()->user();
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
}
