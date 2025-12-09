<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
=======
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Filament\Resources\MailTemplateResource;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;
>>>>>>> 9777d1b3 (.)

/**
 * @property MailTemplate $record
 */
class PreviewMailTemplate extends Page
{
    protected static string $resource = MailTemplateResource::class;

    protected string $view = 'notify::filament.resources.mail-template-resource.pages.preview-mail-template';

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
=======
>>>>>>> 9777d1b3 (.)
                ->url(fn() => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
        ];
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ->url(fn () => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
        ];
    }
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
=======
>>>>>>> 9777d1b3 (.)
