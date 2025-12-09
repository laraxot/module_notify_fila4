<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 75179b85 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns;
use Filament\Tables\Filters;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

=======




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
class ListNotifyThemes extends XotBaseListRecords
{
    protected static string $resource = NotifyThemeResource::class;

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
            'id' => TextColumn::make('id')->sortable(),
            'lang' => TextColumn::make('lang')->sortable(),
            'type' => TextColumn::make('type')->sortable(),
            'post_id' => TextColumn::make('post_id')->sortable(),
            'post_type' => TextColumn::make('post_type')->sortable(),
            'logo_src' => TextColumn::make('logo_src')->sortable(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->sortable(),
            'lang' => TextColumn::make('lang')
                ->sortable(),
            'type' => TextColumn::make('type')
                ->sortable(),
            'post_id' => TextColumn::make('post_id')
                ->sortable(),
            'post_type' => TextColumn::make('post_type')
                ->sortable(),
            'logo_src' => TextColumn::make('logo_src')
                ->sortable(),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    #[Override]
    public function getTableFilters(): array
    {
        return [
            'lang' => SelectFilter::make('lang')->options(
                fn(): array => NotifyThemeResource::fieldOptions('lang'),
            ),
            'post_type' => SelectFilter::make('post_type')->options(
                fn(): array => NotifyThemeResource::fieldOptions('post_type'),
            ),
            'type' => SelectFilter::make('type')->options(
                fn(): array => NotifyThemeResource::fieldOptions('type'),
            ),
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    public function getTableFilters(): array
    {
        return [
            'lang' => SelectFilter::make('lang')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('lang');
                }),
            'post_type' => SelectFilter::make('post_type')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('post_type');
                }),
            'type' => SelectFilter::make('type')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('type');
                })
        ];
    }

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
}
