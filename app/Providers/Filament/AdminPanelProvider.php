<?php

<<<<<<< HEAD
=======
/**
 * ---.
 */

>>>>>>> 75179b8 (.)
declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
=======
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 9777d1b (.)
use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
>>>>>>> 75179b8 (.)
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);
<<<<<<< HEAD

        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn (): string => Blade::render(
=======
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
>>>>>>> 75179b8 (.)
                '@livewire(\'database-notifications\')',
            ));
        }

<<<<<<< HEAD
        return $panel;
=======
        return parent::panel($panel);
>>>>>>> 75179b8 (.)
    }
}
