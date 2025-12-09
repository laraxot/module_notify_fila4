<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

=======
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


>>>>>>> b19cd40 (.)
=======
=======
>>>>>>> 82ae73be (.)
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    protected static null|string $recordTitleAttribute = 'id';

    #[Override]
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    protected static ?string $recordTitleAttribute = 'id';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->required()
                ->maxLength(255),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        ];
    }
}
