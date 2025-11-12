<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Override;
=======
use Override;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
use Override;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
=======


use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
use Override;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
    public function getTableColumns(): array
    {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> b19cd40 (.)
=======
}
>>>>>>> 4e2ebfb (.)
