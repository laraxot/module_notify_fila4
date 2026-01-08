<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseResourcePage;

class PreviewNotificationTemplate extends XotBaseResourcePage
{
    protected static string $resource = NotificationTemplateResource::class;

<<<<<<< HEAD
    protected string $view = 'notify::filament.resources.notification-template-resource.pages.preview-notification-template';
=======
<<<<<<< HEAD
    protected string $view = 'notify::filament.resources.notification-template-resource.pages.preview-notification-template';
=======
    protected static string $view = 'notify::filament.resources.notification-template-resource.pages.preview-notification-template';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function getTitle(): string
    {
        return __('notify::template.preview.title');
    }

    public function getSubheading(): string
    {
        return __('notify::template.preview.subheading');
    }
}
