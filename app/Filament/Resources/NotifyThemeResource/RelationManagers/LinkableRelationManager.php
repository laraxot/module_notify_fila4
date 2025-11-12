<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
use Override;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> 99ff506 (.)

<<<<<<< HEAD
=======
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $recordTitleAttribute = 'id';
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
    protected static null|string $recordTitleAttribute = 'id';
>>>>>>> 99ff506 (.)

    #[Override]
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
<<<<<<< HEAD
=======
    protected static ?string $recordTitleAttribute = 'id';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->required()
                ->maxLength(255),
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        ];
    }
}
