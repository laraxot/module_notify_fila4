<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns;
use Filament\Tables\Filters;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

class ListNotifyThemes extends XotBaseListRecords
{
    protected static string $resource = NotifyThemeResource::class;

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
            'id' => TextColumn::make('id')->sortable(),
            'lang' => TextColumn::make('lang')->sortable(),
            'type' => TextColumn::make('type')->sortable(),
            'post_id' => TextColumn::make('post_id')->sortable(),
            'post_type' => TextColumn::make('post_type')->sortable(),
            'logo_src' => TextColumn::make('logo_src')->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

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
    public function getTableFilters(): array
    {
        return [
            'lang' => SelectFilter::make('lang')->options(
<<<<<<< HEAD
<<<<<<< HEAD
                fn (): array => NotifyThemeResource::fieldOptions('lang'),
            ),
            'post_type' => SelectFilter::make('post_type')->options(
                fn (): array => NotifyThemeResource::fieldOptions('post_type'),
            ),
            'type' => SelectFilter::make('type')->options(
                fn (): array => NotifyThemeResource::fieldOptions('type'),
=======
=======
>>>>>>> 7148d73 (.)
                fn(): array => NotifyThemeResource::fieldOptions('lang'),
            ),
            'post_type' => SelectFilter::make('post_type')->options(
                fn(): array => NotifyThemeResource::fieldOptions('post_type'),
            ),
            'type' => SelectFilter::make('type')->options(
                fn(): array => NotifyThemeResource::fieldOptions('type'),
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            ),
        ];
    }
}
