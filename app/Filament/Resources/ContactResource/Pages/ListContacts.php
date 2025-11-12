<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\ContactResource\Pages;

use Modules\Notify\Filament\Resources\ContactResource;
use Modules\Xot\Filament\Builders\ColumnBuilder;
use Modules\Xot\Filament\Builders\FilterBuilder;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

/**
 * List Contacts page.
 *
 * Uses ColumnBuilder and FilterBuilder to reduce code duplication.
 */
class ListContacts extends XotBaseListRecords
{
    protected static string $resource = ContactResource::class;

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

    #[\Override]
    public function getTableFilters(): array
    {
        return [
            'active' => FilterBuilder::activeToggle(),
        ];
    }
}