<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;

class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

    protected static ?string $recordTitleAttribute = 'id';

<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
        ];
    }
}
