<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
>>>>>>> b8140d8 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

    protected static ?string $recordTitleAttribute = 'id';

<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
=======
    #[\Override]
>>>>>>> 5e14ac3 (.)
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
        ];
    }
}
