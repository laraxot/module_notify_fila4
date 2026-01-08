<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

<<<<<<< HEAD
use Filament\Actions\DeleteAction;
=======
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
=======
use Filament\Pages\Actions\DeleteAction;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;

/**
 * --
 */
<<<<<<< HEAD
class EditNotifyTheme extends XotBaseEditRecord
=======
<<<<<<< HEAD
class EditNotifyTheme extends XotBaseEditRecord
=======
class EditNotifyTheme extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
{
    protected static string $resource = NotifyThemeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
