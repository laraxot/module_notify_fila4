<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

use Override;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Filament\Forms\Form;
>>>>>>> 75179b8 (.)
=======
use Filament\Forms\Form;
>>>>>>> 7148d73 (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $recordTitleAttribute = 'id';
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    protected static null|string $recordTitleAttribute = 'id';
>>>>>>> 75179b8 (.)
=======
    protected static null|string $recordTitleAttribute = 'id';
>>>>>>> 7148d73 (.)

    #[Override]
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
        ];
    }
}
