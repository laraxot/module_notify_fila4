<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Override;
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
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Filament\Tables;
>>>>>>> f813254 (.)
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

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
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'email' => TextColumn::make('email')->searchable()->sortable(),
            'phone' => TextColumn::make('phone')->searchable()->sortable(),
            'message' => TextColumn::make('message')->searchable()->sortable(),
            'is_read' => IconColumn::make('is_read')->boolean(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
        ];
    }

<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
>>>>>>> 6ba141fc (.)
    public function getTableFilters(): array
    {
        return [
            'active' => Filter::make('active')->query(fn (Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn (Builder $query): Builder => $query->where('active', false),
            ),
<<<<<<< HEAD
=======
=======
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'email' => TextColumn::make('email')->searchable()->sortable(),
            'phone' => TextColumn::make('phone')->searchable()->sortable(),
            'message' => TextColumn::make('message')->searchable()->sortable(),
            'is_read' => IconColumn::make('is_read')->boolean(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
<<<<<<< HEAD
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'email' => TextColumn::make('email')
                ->searchable()
                ->sortable(),
            'phone' => TextColumn::make('phone')
                ->searchable()
                ->sortable(),
            'message' => TextColumn::make('message')
                ->searchable()
                ->sortable(),
            'is_read' => IconColumn::make('is_read')
                ->boolean(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
>>>>>>> origin/develop
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }
}
