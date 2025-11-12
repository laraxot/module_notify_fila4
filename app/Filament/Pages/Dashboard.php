<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\XotBasePage;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

class Dashboard extends XotBaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';

    protected string $view = 'notify::filament.pages.dashboard';
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'notify::filament.pages.dashboard';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function mount(): void
    {
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
         * $user = auth()->user();
         * if (! $user->hasRole('super-admin')) {
         * redirect('/admin');
         * }
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        $user = auth()->user();
        if (! $user->hasRole('super-admin')) {
            redirect('/admin');
        }
        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
