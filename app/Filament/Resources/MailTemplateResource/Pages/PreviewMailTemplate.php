<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Notify\Models\MailTemplate;

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
                ->url(fn () => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
                ->url(fn() => MailTemplateResource::getUrl('edit', ['record' => $this->record])),
>>>>>>> 75179b8 (.)
        ];
    }
}
