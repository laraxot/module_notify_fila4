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
use Filament\Schemas\Schema;
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
            'name' => TextInput::make('name')
=======
            TextInput::make('name')
>>>>>>> 75179b85 (.)
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
<<<<<<< HEAD
            'subject' => TextInput::make('subject')
=======
            TextInput::make('subject')
>>>>>>> 75179b85 (.)
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
<<<<<<< HEAD
            'type' => Select::make('type')
=======
            Select::make('type')
>>>>>>> 75179b85 (.)
                ->options(collect(NotificationTypeEnum::cases())
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
<<<<<<< HEAD
            'body_text' => Textarea::make('body_text')
=======
            Textarea::make('body_text')
>>>>>>> 75179b85 (.)
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
<<<<<<< HEAD
            'body_html' => Textarea::make('body_html')
=======
            Textarea::make('body_html')
>>>>>>> 75179b85 (.)
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
<<<<<<< HEAD
            'preview_data' => Textarea::make('preview_data')
=======
            Textarea::make('preview_data')
>>>>>>> 75179b85 (.)
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
<<<<<<< HEAD
            'attachments' => SpatieMediaLibraryFileUpload::make('attachments')
=======
            SpatieMediaLibraryFileUpload::make('attachments')
>>>>>>> 75179b85 (.)
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
