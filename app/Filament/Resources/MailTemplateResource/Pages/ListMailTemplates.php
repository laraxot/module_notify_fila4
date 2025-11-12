<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Tables\Columns\TextColumn;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Modules\Notify\Filament\Resources\MailTemplateResource;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
=======
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
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
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
use Modules\Lang\Filament\Resources\Pages\LangBaseListRecords;
use Filament\Tables;
use Filament\Tables\Table;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
=======
use Override;
>>>>>>> 92ecc28 (.)

class ListMailTemplates extends LangBaseListRecords
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[\Override]
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
    #[Override]
>>>>>>> 6ba141fc (.)
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
