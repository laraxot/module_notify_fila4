<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotifyThemeResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
=======
use Override;
=======
<<<<<<< HEAD
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Filament\Tables\Columns;
use Filament\Tables\Filters;
use Modules\Notify\Filament\Resources\NotifyThemeResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

=======
=======
>>>>>>> origin/develop




use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
class ListNotifyThemes extends XotBaseListRecords
{
    protected static string $resource = NotifyThemeResource::class;

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
    #[Override]
>>>>>>> 6ba141fc (.)
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
=======
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
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
        return [
            'id' => Columns\TextColumn::make('id')
                ->sortable(),
            'lang' => Columns\TextColumn::make('lang')
                ->sortable(),
            'type' => Columns\TextColumn::make('type')
                ->sortable(),
            'post_id' => Columns\TextColumn::make('post_id')
                ->sortable(),
            'post_type' => Columns\TextColumn::make('post_type')
                ->sortable(),
            'logo_src' => Columns\TextColumn::make('logo_src')
                ->sortable(),
            'created_at' => Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => Columns\TextColumn::make('updated_at')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

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
    #[Override]
>>>>>>> 6ba141fc (.)
    public function getTableFilters(): array
    {
        return [
            'lang' => SelectFilter::make('lang')->options(
                fn (): array => NotifyThemeResource::fieldOptions('lang'),
            ),
            'post_type' => SelectFilter::make('post_type')->options(
                fn (): array => NotifyThemeResource::fieldOptions('post_type'),
            ),
            'type' => SelectFilter::make('type')->options(
                fn (): array => NotifyThemeResource::fieldOptions('type'),
            ),
        ];
    }
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
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

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function getTableFilters(): array
    {
        return [
            'lang' => Filters\SelectFilter::make('lang')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('lang');
                }),
            'post_type' => Filters\SelectFilter::make('post_type')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('post_type');
                }),
            'type' => Filters\SelectFilter::make('type')
                ->options(function (): array {
                    return NotifyThemeResource::fieldOptions('type');
                })
        ];
    }

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
