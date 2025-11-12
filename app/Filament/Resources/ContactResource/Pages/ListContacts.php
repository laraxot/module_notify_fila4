<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;

/**
 * List Contacts page.
 *
 * Uses ColumnBuilder and FilterBuilder to reduce code duplication.
 */
class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

    #[Override]
    public function getTableColumns(): array
    {
        /** @var array<\Filament\Tables\Columns\Column|\Filament\Tables\Columns\Layout\Component> $columns */
        $columns = [
            \Filament\Tables\Columns\TextColumn::make('id')->sortable()->searchable(),
            \Filament\Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            \Filament\Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            \Filament\Tables\Columns\TextColumn::make('phone')->searchable()->sortable(),
            \Filament\Tables\Columns\TextColumn::make('message')->limit(100)->searchable(),
            \Filament\Tables\Columns\IconColumn::make('is_read')->boolean(),
            \Filament\Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            \Filament\Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable(),
        ];

        return $columns;
    }

    #[Override]
    public function getTableFilters(): array
    {
        /** @var array<int|string, \Filament\Tables\Filters\BaseFilter> $filters */
        $filters = [
            \Filament\Tables\Filters\TernaryFilter::make('active'),
        ];

        return $filters;
    }
}