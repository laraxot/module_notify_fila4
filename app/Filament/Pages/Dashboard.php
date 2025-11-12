<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBaseDashboard;
<<<<<<< HEAD

class Dashboard extends XotBaseDashboard
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home';
=======
use Modules\Xot\Filament\Pages\XotBasePage;

class Dashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';
>>>>>>> 99ff506 (.)

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
