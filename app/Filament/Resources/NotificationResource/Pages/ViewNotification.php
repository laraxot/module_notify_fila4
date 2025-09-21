<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationResource\Pages;

<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
use Filament\Schemas\Components\Section;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Component;
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Filament\Schemas\Components\Component;
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Schemas\Components\Section;
=======
use Filament\Infolists\Components\Section;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Filament\Infolists\Components\TextEntry;
use Modules\Notify\Filament\Resources\NotificationResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseViewRecord;

class ViewNotification extends XotBaseViewRecord
{
    protected static string $resource = NotificationResource::class;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
=======
     * @return array<\Filament\Schemas\Components\Component>
=======
     * @return array<Component>
>>>>>>> b93ef594b4 (.)
     */
    #[Override]
    protected function getInfolistSchema(): array
    {
        return [
<<<<<<< HEAD
=======
     * @return array<\Filament\Infolists\Components\Component>
     */
    protected function getInfolistSchema(): array
    {
        return [
>>>>>>> origin/develop
            Section::make()
                ->schema([
                    TextEntry::make('id'),
                    TextEntry::make('type'),
                    TextEntry::make('notifiable_type'),
                    TextEntry::make('notifiable_id'),
                    TextEntry::make('data'),
                    TextEntry::make('read_at')
                        ->dateTime(),
                    TextEntry::make('created_at')
                        ->dateTime(),
                    TextEntry::make('updated_at')
                        ->dateTime(),
                ])
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }
}
