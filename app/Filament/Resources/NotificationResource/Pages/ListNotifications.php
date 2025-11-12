<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
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
>>>>>>> 99ff506 (.)
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 99ff506 (.)

class ListNotifications extends XotBaseListRecords
{
    protected static string $resource = NotificationResource::class;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'type' => TextColumn::make('type')->searchable()->sortable(),
            'notifiable' => TextColumn::make('notifiable.name')->searchable()->sortable(),
            'data' => TextColumn::make('data')->searchable(),
            'read_at' => TextColumn::make('read_at')->dateTime()->sortable(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
        ];
    }

    #[Override]
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
            'type' => TextColumn::make('type')->searchable()->sortable(),
            'notifiable' => TextColumn::make('notifiable.name')->searchable()->sortable(),
            'data' => TextColumn::make('data')->searchable(),
            'read_at' => TextColumn::make('read_at')->dateTime()->sortable(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
        ];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable(),
            'type' => TextColumn::make('type')
                ->searchable()
                ->sortable(),
            'notifiable' => TextColumn::make('notifiable.name')
                ->searchable()
                ->sortable(),
            'data' => TextColumn::make('data')
                ->searchable(),
            'read_at' => TextColumn::make('read_at')
                ->dateTime()
                ->sortable(),
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable(),
        ];
    }

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    public function getTableFilters(): array
    {
        return [
            'read' => Filter::make('is_read')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ->query(fn (Builder $query): Builder => $query->where('read_at', '!=', null))
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(fn (Builder $query): Builder => $query->whereNull('read_at'))
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
                ->query(fn(Builder $query): Builder => $query->where('read_at', '!=', null))
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(fn(Builder $query): Builder => $query->whereNull('read_at'))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
                ->query(function (Builder $query): Builder {
                    return $query->where('read_at', '!=', null);
                })
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(function (Builder $query): Builder {
                    return $query->whereNull('read_at');
                })
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->query(fn(Builder $query): Builder => $query->where('read_at', '!=', null))
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(fn(Builder $query): Builder => $query->whereNull('read_at'))
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
                ->label('Unread'),
            'type' => SelectFilter::make('type')
                ->options([
                    'info' => 'Info',
                    'success' => 'Success',
                    'warning' => 'Warning',
                    'error' => 'Error',
                ])
                ->multiple(),
        ];
    }
}
