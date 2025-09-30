<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;
>>>>>>> b19cd40 (.)

class Dashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'notify::filament.pages.dashboard';

    public function mount(): void
    {
        /*
<<<<<<< HEAD
         * $user = auth()->user();
         * if (! $user->hasRole('super-admin')) {
         * redirect('/admin');
         * }
         */
=======
        $user = auth()->user();
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
>>>>>>> b19cd40 (.)
    }
}
