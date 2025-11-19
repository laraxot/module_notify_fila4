<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Builders\ColumnBuilder;
use Modules\Xot\Filament\Builders\FilterBuilder;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * List Contacts page.
 *
 * Uses ColumnBuilder and FilterBuilder to reduce code duplication.
 */
=======
use Override;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

>>>>>>> 75179b8 (.)
class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

<<<<<<< HEAD
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'active' => FilterBuilder::activeToggle(),
=======
    #[Override]
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
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
>>>>>>> 75179b8 (.)
        ];
    }
}
