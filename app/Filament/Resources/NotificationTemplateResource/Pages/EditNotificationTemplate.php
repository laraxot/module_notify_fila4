<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

class EditNotificationTemplate extends XotBaseEditRecord
{
    protected static string $resource = NotificationTemplateResource::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)

    /*
     * protected function getRedirectUrl(): string
     * {
     * return $this->getResource()::getUrl('index');
     * }
     *
     * protected function mutateFormDataBeforeSave(array $data): array
     * {
     * // Crea una nuova versione del template
     * $this->record->createNewVersion(
     * auth()->user()->name,
     * 'Modificato tramite interfaccia amministrativa'
     * );
     *
     * return $data;
     * }
     */
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    /*
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Crea una nuova versione del template
        $this->record->createNewVersion(
            auth()->user()->name,
            'Modificato tramite interfaccia amministrativa'
        );

        return $data;
    }
    */
} 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
