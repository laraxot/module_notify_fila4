<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;

>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)

class EditNotificationTemplate extends XotBaseEditRecord
{
    protected static string $resource = NotificationTemplateResource::class;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

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
=======
=======
=======
>>>>>>> origin/develop
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
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
