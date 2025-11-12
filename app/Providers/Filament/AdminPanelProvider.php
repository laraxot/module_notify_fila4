<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
use Override;
// use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin; // Temporaneamente commentato per compatibilità Filament 4.x
use Filament\Notifications\Livewire\DatabaseNotifications;
=======
use Filament\Notifications\Livewire\DatabaseNotifications;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> ab15d0e (.)
use Filament\Panel;
use Filament\Support\Facades\FilamentView;
use Illuminate\Support\Facades\Blade;
use Modules\Xot\Datas\XotData;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;
use Filament\SpatieLaravelTranslatablePlugin;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

    #[Override]
    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
=======
        // ✅ Registrazione plugin per supporto multilingua
        // Richiesto da LangBaseListRecords che usa trait Translatable
        $panel->plugins([
            SpatieTranslatablePlugin::make()
                ->defaultLocales(['it', 'en']),
        ]);
        
>>>>>>> ab15d0e (.)
        if (! XotData::make()->disable_database_notifications) {
            DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
            DatabaseNotifications::pollingInterval('60s');

            FilamentView::registerRenderHook(
                'panels::user-menu.before',
                static fn (): string => Blade::render("@livewire('database-notifications')")
            );
        }

        return parent::panel($panel);
    }
}
