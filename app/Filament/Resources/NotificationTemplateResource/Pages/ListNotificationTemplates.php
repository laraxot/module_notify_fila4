<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
    #[\Override]
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    public function getTableColumns(): array
    {
        return [];
    }
}
