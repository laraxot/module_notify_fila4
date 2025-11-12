<?php

declare(strict_types=1);

namespace Modules\Notify\Providers\Filament;

<<<<<<< HEAD
=======
use Filament\Notifications\Livewire\DatabaseNotifications;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
>>>>>>> 6ba141fc (.)
use Filament\Panel;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Notify';

    #[\Override]
    public function panel(Panel $panel): Panel
    {
<<<<<<< HEAD
        $panel = parent::panel($panel);
=======
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
                '@livewire(\'database-notifications\')',
            ));
        }
>>>>>>> 6ba141fc (.)

        return $panel;
    }
}
