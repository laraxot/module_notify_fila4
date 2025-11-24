<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
/**
 * ---.
 */

<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
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
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 7148d73 (.)
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
=======
    #[Override]
    public function panel(Panel $panel): Panel
    {
>>>>>>> 7148d73 (.)
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);
<<<<<<< HEAD
<<<<<<< HEAD

        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn (): string => Blade::render(
=======
=======
>>>>>>> 7148d73 (.)
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                '@livewire(\'database-notifications\')',
            ));
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return $panel;
=======
        return parent::panel($panel);
>>>>>>> 75179b8 (.)
=======
        return parent::panel($panel);
>>>>>>> 7148d73 (.)
    }
}
