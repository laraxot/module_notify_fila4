<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages\PreviewNotificationTemplate;
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form;
=======
use Filament\Schemas\Schema;
>>>>>>> 22f1446 (.)
=======
use Filament\Schemas\Schema;
>>>>>>> 5bed4d4 (.)
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NotificationTemplateResource extends XotBaseResource
{
    protected static null|string $model = NotificationTemplate::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('name')
=======
            'name' => TextInput::make('name')
>>>>>>> 22f1446 (.)
=======
            'name' => TextInput::make('name')
>>>>>>> 5bed4d4 (.)
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('subject')
=======
            'subject' => TextInput::make('subject')
>>>>>>> 22f1446 (.)
=======
            'subject' => TextInput::make('subject')
>>>>>>> 5bed4d4 (.)
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
<<<<<<< HEAD
<<<<<<< HEAD
            Select::make('type')
=======
            'type' => Select::make('type')
>>>>>>> 22f1446 (.)
=======
            'type' => Select::make('type')
>>>>>>> 5bed4d4 (.)
                ->options(collect(NotificationTypeEnum::cases())
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
<<<<<<< HEAD
<<<<<<< HEAD
            Textarea::make('body_text')
=======
            'body_text' => Textarea::make('body_text')
>>>>>>> 22f1446 (.)
=======
            'body_text' => Textarea::make('body_text')
>>>>>>> 5bed4d4 (.)
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
<<<<<<< HEAD
<<<<<<< HEAD
            Textarea::make('body_html')
=======
            'body_html' => Textarea::make('body_html')
>>>>>>> 22f1446 (.)
=======
            'body_html' => Textarea::make('body_html')
>>>>>>> 5bed4d4 (.)
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
<<<<<<< HEAD
<<<<<<< HEAD
            Textarea::make('preview_data')
=======
            'preview_data' => Textarea::make('preview_data')
>>>>>>> 22f1446 (.)
=======
            'preview_data' => Textarea::make('preview_data')
>>>>>>> 5bed4d4 (.)
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
<<<<<<< HEAD
<<<<<<< HEAD
            SpatieMediaLibraryFileUpload::make('attachments')
=======
            'attachments' => SpatieMediaLibraryFileUpload::make('attachments')
>>>>>>> 22f1446 (.)
=======
            'attachments' => SpatieMediaLibraryFileUpload::make('attachments')
>>>>>>> 5bed4d4 (.)
                ->collection('attachments')
                ->multiple()
                ->maxFiles(5)
                ->maxSize(5120)
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            ...parent::getPages(),
            'preview' => PreviewNotificationTemplate::route('/{record}/preview'),
        ];
    }

    /*
     * public static function getEloquentQuery(): Builder
     * {
     * return parent::getEloquentQuery()
     * ->orderBy('name');
     * }
     */
}
