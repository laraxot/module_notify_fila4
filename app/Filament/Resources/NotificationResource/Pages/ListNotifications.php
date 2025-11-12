<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotifications extends XotBaseListRecords
{
    protected static string $resource = NotificationResource::class;

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
            'type' => TextColumn::make('type')->searchable()->sortable(),
            'notifiable' => TextColumn::make('notifiable.name')->searchable()->sortable(),
            'data' => TextColumn::make('data')->searchable(),
            'read_at' => TextColumn::make('read_at')->dateTime()->sortable(),
            'created_at' => TextColumn::make('created_at')->dateTime()->sortable(),
            'updated_at' => TextColumn::make('updated_at')->dateTime()->sortable(),
        ];
    }

<<<<<<< HEAD
    #[\Override]
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
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
>>>>>>> 82c6772 (.)
    public function getTableFilters(): array
    {
        return [
            'read' => Filter::make('is_read')
<<<<<<< HEAD
                ->query(fn (Builder $query): Builder => $query->where('read_at', '!=', null))
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(fn (Builder $query): Builder => $query->whereNull('read_at'))
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                ->query(fn(Builder $query): Builder => $query->where('read_at', '!=', null))
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(fn(Builder $query): Builder => $query->whereNull('read_at'))
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                ->query(function (Builder $query): Builder {
                    return $query->where('read_at', '!=', null);
                })
                ->label('Read'),
            'unread' => Filter::make('is_unread')
                ->query(function (Builder $query): Builder {
                    return $query->whereNull('read_at');
                })
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
