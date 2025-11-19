<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

<<<<<<< HEAD
=======
use Override;
>>>>>>> 75179b8 (.)
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 75179b8 (.)
    public function getTableColumns(): array
    {
        return [];
    }
}
