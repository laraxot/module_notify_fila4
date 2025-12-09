<?php

<<<<<<< HEAD
=======
/**
 * ---.
 */

>>>>>>> 75179b85 (.)
declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
=======
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 9777d1b3 (.)
use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 75179b85 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

    #[Override]
    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
        $panel = parent::panel($panel);

=======
>>>>>>> 75179b85 (.)
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);
<<<<<<< HEAD

=======
>>>>>>> 75179b85 (.)
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
<<<<<<< HEAD
            FilamentView::registerRenderHook('panels::user-menu.before', static fn (): string => Blade::render(
=======
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
>>>>>>> 75179b85 (.)
                '@livewire(\'database-notifications\')',
            ));
        }

<<<<<<< HEAD
        return $panel;
=======
        return parent::panel($panel);
>>>>>>> 75179b85 (.)
    }
}
