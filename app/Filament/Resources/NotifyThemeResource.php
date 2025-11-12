<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Override;
>>>>>>> 99ff506 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
=======
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
use Override;
>>>>>>> e11621f (.)
=======
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
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
use Override;
>>>>>>> f5f1cb1 (.)
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
<<<<<<< HEAD
use Modules\Notify\Models\NotifyTheme;
use Modules\Xot\Filament\Resources\XotBaseResource;
use Override;

class NotifyThemeResource extends XotBaseResource
{
    protected static ?string $model = NotifyTheme::class;
=======
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages\CreateNotifyTheme;
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages\EditNotifyTheme;
use Modules\Notify\Filament\Resources\NotifyThemeResource\Pages\ListNotifyThemes;
use Modules\Notify\Models\NotifyTheme;
use Modules\Xot\Filament\Resources\XotBaseResource;

class NotifyThemeResource extends XotBaseResource
{
    protected static null|string $model = NotifyTheme::class;
>>>>>>> 99ff506 (.)

    #[Override]
    public static function getFormSchema(): array
    {
<<<<<<< HEAD
        return [
<<<<<<< HEAD
=======
        return array_values([
>>>>>>> 05bc3ad (.)
            'lang' => Select::make('lang')->options(fn (): array => self::fieldOptions('lang')),
            'type' => Select::make('type')->options(fn (): array => self::fieldOptions('type')),
            'post_type' => Select::make('post_type')->options(fn (): array => self::fieldOptions('post_type')),
=======
            'lang' => Select::make('lang')->options(fn(): array => self::fieldOptions('lang')),
            'type' => Select::make('type')->options(fn(): array => self::fieldOptions('type')),
            'post_type' => Select::make('post_type')->options(fn(): array => self::fieldOptions('post_type')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
    protected static ?string $model = NotifyTheme::class;

=======
    protected static null|string $model = NotifyTheme::class;
>>>>>>> b93ef594b4 (.)

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
    protected static ?string $model = NotifyTheme::class;


    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> f813254 (.)
            'lang' => Select::make('lang')
                ->options(function (): array {
                    return self::fieldOptions('lang');
                }),
            'type' => Select::make('type')
                ->options(function (): array {
                    return self::fieldOptions('type');
                }),
            'post_type' => Select::make('post_type')
                ->options(function (): array {
                    return self::fieldOptions('post_type');
                }),
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            'lang' => Select::make('lang')->options(fn(): array => self::fieldOptions('lang')),
            'type' => Select::make('type')->options(fn(): array => self::fieldOptions('type')),
            'post_type' => Select::make('post_type')->options(fn(): array => self::fieldOptions('post_type')),
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            'post_id' => TextInput::make('post_id'),
            'subject' => TextInput::make('subject'),
            'from' => TextInput::make('from'),
            'from_email' => TextInput::make('from_email'),
            'logo' => SpatieMediaLibraryFileUpload::make('logo_src')
                ->enableOpen()
                ->enableDownload()
                ->columnSpanFull()
                ->disk('uploads')
                ->directory('photos')
                ->preserveFilenames(),
            'logo_width' => TextInput::make('logo_width'),
            'logo_height' => TextInput::make('logo_height'),
            'theme' => Select::make('theme')
                ->options([
                    'empty' => 'empty',
                    'ark' => 'ark',
                    'minty' => 'minty',
                    'sunny' => 'sunny',
                    'widgets' => 'widgets',
                ])
                ->default('empty'),
            'body' => Textarea::make('body')->columnSpanFull(),
            'body_html' => RichEditor::make('body_html')->columnSpanFull(),
        ]);
    }

    public static function fieldOptions(string $field): array
    {
        return match ($field) {
            'lang' => [
                'it' => 'Italiano',
                'en' => 'English',
            ],
            'type' => [
                'email' => 'Email',
                'sms' => 'SMS',
                'push' => 'Push Notification',
            ],
            'post_type' => [
                'page' => 'Page',
                'post' => 'Post',
                'product' => 'Product',
            ],
            default => [],
        };
    }
}
