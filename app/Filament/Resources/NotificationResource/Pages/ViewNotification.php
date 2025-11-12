<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
use Override;
=======
=======
>>>>>>> 9c8f04e (.)
=======
>>>>>>> 220b97c (.)
=======
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
=======
>>>>>>> 0e521e1 (.)
=======
>>>>>>> 41dc34b (.)
=======
>>>>>>> 9bd3cd0 (.)
=======
>>>>>>> 895d6b1 (.)
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> 8e43c3e (.)
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Component;
use Filament\Schemas\Components\Section;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
use Override;
>>>>>>> 8e43c3e (.)
=======
>>>>>>> 6a92a74 (.)

class ViewNotification extends XotBaseViewRecord
{
    protected static string $resource = NotificationResource::class;

    /**
     * @return array<Component>
     */
    #[\Override]
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
