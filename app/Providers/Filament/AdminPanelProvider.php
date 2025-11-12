<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Notifications\Livewire\DatabaseNotifications;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
=======
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> b19cd40 (.)
=======
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
>>>>>>> 4e2ebfb (.)
use Filament\Notifications\Livewire\DatabaseNotifications;
>>>>>>> 99ff506 (.)
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 99ff506 (.)

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
        // ✅ Registrazione plugin per supporto multilingua
        // Richiesto da LangBaseListRecords che usa trait Translatable
        $panel->plugins([
            SpatieTranslatablePlugin::make()
                ->defaultLocales(['it', 'en']),
        ]);
        
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn (): string => Blade::render(
=======
        // Temporaneamente commentato per compatibilità Filament 4.x
        // $panel->plugins([
        //     SpatieTranslatablePlugin::make(),
        // ]);
        if (!XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            // DatabaseNotifications::databaseNotificationsPollingInterval('30s');
            DatabaseNotifications::pollingInterval('60s');
            FilamentView::registerRenderHook('panels::user-menu.before', static fn(): string => Blade::render(
>>>>>>> 99ff506 (.)
                '@livewire(\'database-notifications\')',
            ));
        }

        return parent::panel($panel);
    }
}
<<<<<<< HEAD
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
=======
>>>>>>> 4e2ebfb (.)
