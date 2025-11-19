<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
>>>>>>> 75179b8 (.)
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewNotification extends XotBaseViewRecord
{
    protected static string $resource = NotificationResource::class;

    /**
     * @return array<Component>
     */
    #[Override]
    protected function getInfolistSchema(): array
    {
        return [
            Section::make()->schema([
                TextEntry::make('id'),
                TextEntry::make('type'),
                TextEntry::make('notifiable_type'),
                TextEntry::make('notifiable_id'),
                TextEntry::make('data'),
                TextEntry::make('read_at')->dateTime(),
                TextEntry::make('created_at')->dateTime(),
                TextEntry::make('updated_at')->dateTime(),
            ]),
        ];
    }
}
