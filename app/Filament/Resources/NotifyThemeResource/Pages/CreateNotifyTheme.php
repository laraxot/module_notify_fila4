<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 75179b8 (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 75179b85 (.)

/**
 * --
 */
<<<<<<< HEAD
class CreateNotifyTheme extends XotBaseCreateRecord
=======
<<<<<<< HEAD
class CreateNotifyTheme extends XotBaseCreateRecord
=======
class CreateNotifyTheme extends \Modules\Xot\Filament\Resources\Pages\XotBaseCreateRecord
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
{
    protected static string $resource = NotifyThemeResource::class;
}
