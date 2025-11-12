<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\RelationManagers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Override;
>>>>>>> f813254 (.)
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;

<<<<<<< HEAD
=======
=======
use Filament\Forms\Form;
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

<<<<<<< HEAD

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
class LinkableRelationManager extends XotBaseRelationManager
{
    protected static string $relationship = 'linkable';

<<<<<<< HEAD
    protected static ?string $recordTitleAttribute = 'id';
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    protected static null|string $recordTitleAttribute = 'id';
>>>>>>> f813254 (.)

<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')->required()->maxLength(255),
<<<<<<< HEAD
=======
=======
    protected static ?string $recordTitleAttribute = 'id';
=======
    protected static null|string $recordTitleAttribute = 'id';
>>>>>>> b93ef594b4 (.)

    #[Override]
    public function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            TextInput::make('id')
                ->required()
                ->maxLength(255),
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('id')->required()->maxLength(255),
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $recordTitleAttribute = 'id';

    public function getFormSchema(): array
    {
        return [
            TextInput::make('id')
                ->required()
                ->maxLength(255),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }
}
