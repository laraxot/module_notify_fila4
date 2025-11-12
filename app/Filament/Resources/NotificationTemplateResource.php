<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages\PreviewNotificationTemplate;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;

class NotificationTemplateResource extends XotBaseResource
{
    protected static ?string $model = NotificationTemplate::class;
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> d5c4b93 (.)
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 4e643df (.)
=======
>>>>>>> 12f2f7e (.)
=======
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> c434001 (.)
=======
>>>>>>> 9e8255b (.)
=======
>>>>>>> e5b598a (.)
=======
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
=======
>>>>>>> 10b3b08 (.)
=======
>>>>>>> bc11326 (.)
=======
>>>>>>> 954a7fa (.)
=======
>>>>>>> 0b399d7 (.)
=======
>>>>>>> 535f451 (.)
=======
>>>>>>> 5dacc15 (.)
=======
>>>>>>> 5f6e153 (.)
=======
>>>>>>> 4f8845a (.)
=======
>>>>>>> 4cfca80 (.)
=======
>>>>>>> 9fe19a6 (.)
use Override;
use Filament\Forms\Components\TextInput;
=======
>>>>>>> 8e43c3e (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages\PreviewNotificationTemplate;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Override;

class NotificationTemplateResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = NotificationTemplate::class;
>>>>>>> 99ff506 (.)
=======
    protected static ?string $model = NotificationTemplate::class;
>>>>>>> 8e43c3e (.)

    #[\Override]
    public static function getFormSchema(): array
    {
        return array_values([
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
            'subject' => TextInput::make('subject')
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
            'type' => Select::make('type')
                ->options(collect(NotificationTypeEnum::cases())
<<<<<<< HEAD
<<<<<<< HEAD
                    ->mapWithKeys(fn ($type) => [$type->value => $type->label()]))
=======
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
>>>>>>> 99ff506 (.)
=======
                    ->mapWithKeys(fn ($type) => [$type->value => $type->label()]))
>>>>>>> 8e43c3e (.)
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
            'body_text' => Textarea::make('body_text')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
            'body_html' => Textarea::make('body_html')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
            'preview_data' => Textarea::make('preview_data')
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
            'attachments' => SpatieMediaLibraryFileUpload::make('attachments')
                ->collection('attachments')
                ->multiple()
                ->maxFiles(5)
                ->maxSize(5120)
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.attachments.helper')),
        ]);}

    #[\Override]
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
