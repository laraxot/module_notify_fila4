<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
=======
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Filament\Resources\MailTemplateResource;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Filament\Resources\MailTemplateResource;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

/**
 * @property MailTemplate $record
 */
class PreviewMailTemplate extends Page
{
    protected static string $resource = MailTemplateResource::class;

<<<<<<< HEAD
    protected string $view = 'notify::filament.resources.mail-template-resource.pages.preview-mail-template';
=======
<<<<<<< HEAD
    protected string $view = 'notify::filament.resources.mail-template-resource.pages.preview-mail-template';
=======
    protected static string $view = 'notify::filament.resources.mail-template-resource.pages.preview-mail-template';
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function getTitle(): string
    {
        return __('notify::mail.template.preview.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label(__('notify::mail.template.preview.actions.back.label'))
                ->icon(__('notify::mail.template.preview.actions.back.icon'))
                ->color(__('notify::mail.template.preview.actions.back.color'))
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                ->url(fn() => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
        ];
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                ->url(fn () => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
        ];
    }
} 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                ->url(fn() => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
        ];
    }
}
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
