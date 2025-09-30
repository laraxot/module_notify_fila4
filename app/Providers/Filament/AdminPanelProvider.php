<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
=======
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> b19cd40 (.)
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
    #[Override]
    public function panel(Panel $panel): Panel
    {
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
                '@livewire(\'database-notifications\')',
            ));
        }

        return parent::panel($panel);
    }
}
=======
    public function panel(Panel $panel): Panel
    { 
        $panel->plugins([
            SpatieTranslatablePlugin::make(),
        ]);
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook(
                'panels::user-menu.before',
                static fn (): string => Blade::render('@livewire(\'database-notifications\')'),
            );
        }

       

        return parent::panel($panel);
    }
}

>>>>>>> b19cd40 (.)
