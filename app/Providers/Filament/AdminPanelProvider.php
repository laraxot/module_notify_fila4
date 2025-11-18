<?php

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20a3d3b (.)
use Filament\Notifications\Livewire\DatabaseNotifications;
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
=======
use Filament\Panel;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20a3d3b (.)
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);

        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn (): string => Blade::render(
                '@livewire(\'database-notifications\')',
            ));
        }

<<<<<<< HEAD
=======
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
        return $panel;
    }
}
