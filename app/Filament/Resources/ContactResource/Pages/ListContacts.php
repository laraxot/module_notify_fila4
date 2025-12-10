<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Override;
use Override;
use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Builders\ColumnBuilder;
use Modules\Xot\Filament\Builders\FilterBuilder;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
use Override;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;


use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;





/**
 * List Contacts page.
 *
 * Uses ColumnBuilder and FilterBuilder to reduce code duplication.
 */


use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Override;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Builders\ColumnBuilder;
use Modules\Xot\Filament\Builders\FilterBuilder;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;
use Override;






/**
 * List Contacts page.
 *
 * Uses ColumnBuilder and FilterBuilder to reduce code duplication.
 */


use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Xot\Filament\Resources\RelationManagers\XotBaseRelationManager;

class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

    #[\Override]
    #[\Override]
    #[Override]
    /**
     * @return array<string, mixed>
     */
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
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
    /**
     * @return array<string, mixed>
     */
    public function getTableFilters(): array
    {
        return [
            'active' => Filter::make('active')->query(fn (Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn (Builder $query): Builder => $query->where('active', false),
            ),
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
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
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
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            'active' => Filter::make('active')->query(fn (Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn (Builder $query): Builder => $query->where('active', false),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
            'active' => FilterBuilder::activeToggle(),
    #[Override]
    public function getTableColumns(): array
    {
        return [
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
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
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
            'active' => FilterBuilder::activeToggle(),
        ];
    }

    public function getTableFilters(): array
    {
        return [
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
    #[Override]
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    #[\Override]
    #[\Override]
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
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
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
            'active' => FilterBuilder::activeToggle(),
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
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
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            'active' => Filter::make('active')->query(fn (Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn (Builder $query): Builder => $query->where('active', false),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
            'active' => FilterBuilder::activeToggle(),
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
            'id' => ColumnBuilder::id(),
            'name' => ColumnBuilder::name(),
            'email' => ColumnBuilder::email(),
            'phone' => \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            'message' => ColumnBuilder::description(limit: 100),
            'is_read' => ColumnBuilder::booleanIcon('is_read'),
            ...ColumnBuilder::timestamps(),
        ];
    }

    #[Override]
    public function getTableFilters(): array
    {
        return [
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
            'active' => Filter::make('active')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', true);
                }),
            'inactive' => Filter::make('inactive')
                ->query(function (Builder $query): Builder {
                    return $query->where('active', false);
                }),
            'active' => Filter::make('active')->query(fn(Builder $query): Builder => $query->where('active', true)),
            'inactive' => Filter::make('inactive')->query(
                fn(Builder $query): Builder => $query->where('active', false),
            ),
            'active' => FilterBuilder::activeToggle(),
        ];
    }
}
