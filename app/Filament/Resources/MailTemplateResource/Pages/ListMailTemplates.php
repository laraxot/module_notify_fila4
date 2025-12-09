<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
use Override;
>>>>>>> 75179b85 (.)
=======
use Override;
>>>>>>> 75179b85 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
use Filament\Tables\Columns\TextColumn;
=======
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables;
use Filament\Tables\Table;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
use Filament\Tables\Columns\TextColumn;
>>>>>>> de02998b (.)
=======
=======
use Filament\Tables\Columns\TextColumn;
>>>>>>> 82ae73be (.)
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('slug')->searchable()->sortable(),
            TextColumn::make('mailable')->searchable()->sortable(),
            TextColumn::make('subject')->searchable()->sortable(),
            TextColumn::make('counter')->searchable()->sortable(),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('slug')
                ->searchable()
                ->sortable()
                ,

            TextColumn::make('mailable')
                ->searchable()
                ->sortable()
                ,

            TextColumn::make('subject')
                ->searchable()
                ->sortable()
                ,

            TextColumn::make('counter')
                ->searchable()
                ->sortable()
                ,
            
        ];
    }


>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
}
