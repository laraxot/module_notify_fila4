<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages\PreviewNotificationTemplate;
<<<<<<< HEAD
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
=======
>>>>>>> a12f125f4a (.)
=======
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NotificationTemplateResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    protected static null|string $model = NotificationTemplate::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
            TextInput::make('subject')
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
            Select::make('type')
                ->options(collect(NotificationTypeEnum::cases())
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
            Textarea::make('body_text')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
            Textarea::make('body_html')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
            Textarea::make('preview_data')
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
            SpatieMediaLibraryFileUpload::make('attachments')
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
<<<<<<< HEAD
=======
=======
    protected static ?string $model = NotificationTemplate::class;


=======
    protected static null|string $model = NotificationTemplate::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->helperText(__('notify::template.form.name.helper'))
                ->columnSpan(['lg' => 2]),
            TextInput::make('subject')
                ->required()
                ->maxLength(255)
                ->helperText(__('notify::template.form.subject.helper'))
                ->columnSpan(['lg' => 2])
                ->translateLabel(),
            Select::make('type')
                ->options(collect(NotificationTypeEnum::cases())
                    ->mapWithKeys(fn($type) => [$type->value => $type->label()]))
                ->required()
                ->default(NotificationTypeEnum::EMAIL->value)
                ->helperText(__('notify::template.form.type.helper'))
                ->columnSpan(['lg' => 1]),
            Textarea::make('body_text')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_text.helper'))
                ->rows(5)
                ->translateLabel(),
            Textarea::make('body_html')
                ->required()
                ->maxLength(65535)
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.body_html.helper'))
                ->rows(10)
                ->translateLabel(),
            Textarea::make('preview_data')
                ->json()
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.preview_data.helper'))
                ->rows(5),
            SpatieMediaLibraryFileUpload::make('attachments')
                ->collection('attachments')
                ->multiple()
                ->maxFiles(5)
                ->maxSize(5120)
                ->acceptedFileTypes(['application/pdf', 'image/*'])
                ->columnSpan(['lg' => 3])
                ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }

<<<<<<< HEAD


>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = NotificationTemplate::class;



    public static function getFormSchema(): array
    {
        return [
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->helperText(__('notify::template.form.name.helper'))
                        ->columnSpan(['lg' => 2]),

                    Forms\Components\TextInput::make('subject')
                        ->required()
                        ->maxLength(255)
                        ->helperText(__('notify::template.form.subject.helper'))
                        ->columnSpan(['lg' => 2])
                        ->translateLabel(),

                    Forms\Components\Select::make('type')
                        ->options(collect(NotificationTypeEnum::cases())->mapWithKeys(fn ($type) => [$type->value => $type->label()]))
                        ->required()
                        ->default(NotificationTypeEnum::EMAIL->value)
                        ->helperText(__('notify::template.form.type.helper'))
                        ->columnSpan(['lg' => 1]),

                    Forms\Components\Textarea::make('body_text')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_text.helper'))
                        ->rows(5)
                        ->translateLabel(),

                    Forms\Components\Textarea::make('body_html')
                        ->required()
                        ->maxLength(65535)
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.body_html.helper'))
                        ->rows(10)
                        ->translateLabel(),

                    Forms\Components\Textarea::make('preview_data')
                        ->json()
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.preview_data.helper'))
                        ->rows(5),

                    Forms\Components\SpatieMediaLibraryFileUpload::make('attachments')
                        ->collection('attachments')
                        ->multiple()
                        ->maxFiles(5)
                        ->maxSize(5120)
                        ->acceptedFileTypes(['application/pdf', 'image/*'])
                        ->columnSpan(['lg' => 3])
                        ->helperText(__('notify::template.form.attachments.helper')),
        ];
    }



>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    public static function getPages(): array
    {
        return [
            ...parent::getPages(),
<<<<<<< HEAD
            'preview' => PreviewNotificationTemplate::route('/{record}/preview'),
=======
<<<<<<< HEAD
            'preview' => PreviewNotificationTemplate::route('/{record}/preview'),
=======
            'preview' => Pages\PreviewNotificationTemplate::route('/{record}/preview'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }

    /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
     * public static function getEloquentQuery(): Builder
     * {
     * return parent::getEloquentQuery()
     * ->orderBy('name');
     * }
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('name');
    }
            */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
}
