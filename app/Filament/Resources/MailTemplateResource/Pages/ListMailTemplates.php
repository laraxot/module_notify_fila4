<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Modules\Notify\Filament\Resources\MailTemplateResource;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
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
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
use Filament\Tables\Columns\TextColumn;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
    public function getTableColumns(): array
    {
        return [
            TextColumn::make('slug')->searchable()->sortable(),
            TextColumn::make('mailable')->searchable()->sortable(),
            TextColumn::make('subject')->searchable()->sortable(),
            TextColumn::make('counter')->searchable()->sortable(),
        ];
    }
}
