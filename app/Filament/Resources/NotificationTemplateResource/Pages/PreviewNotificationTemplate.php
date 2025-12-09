<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Filament\Resources\Pages\Page;
use Modules\Notify\Filament\Resources\NotificationTemplateResource;

class PreviewNotificationTemplate extends Page
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
