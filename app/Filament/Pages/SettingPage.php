<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Pages;

use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Widgets\EnvWidget;

class SettingPage extends XotBasePage
{
<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';
>>>>>>> f813254 (.)

    protected string $view = 'notify::filament.pages.setting';
=======
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'notify::filament.pages.setting';
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'notify::filament.pages.setting';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function getHeaderWidgets(): array
    {
        $only = [
            'debugbar_enabled',
            // 'google_maps_api_key',
            'telegram_bot_token',
        ];

        return [
            EnvWidget::make(['only' => $only]),
        ];
    }
}
