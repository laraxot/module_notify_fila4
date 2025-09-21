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
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\View;
use Filament\Forms\Components\Textarea;
use Filament\Forms;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
    protected static null|string $model = MailTemplate::class;
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
=======
>>>>>>> b93ef594b4 (.)
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = MailTemplate::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $model = MailTemplate::class;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Group;
use Modules\Notify\Models\MailTemplate;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Filament\Resources\LangBaseResource;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
<<<<<<< HEAD
=======
=======
    public static function getFormSchema(): array
    {
        return [
            'mailable' => TextInput::make('mailable')
                ->required()
                ->maxLength(255),
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
>>>>>>> b93ef594b4 (.)
=======
    public static function getFormSchema(): array
    {
        return [
            'mailable' => Forms\Components\TextInput::make('mailable')
                ->required()
                ->maxLength(255),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            //'name' => Forms\Components\TextInput::make('name'),
            //'slug' => Forms\Components\TextInput::make('slug'),
            Group::make()
                ->schema([
                    TextInput::make('name')
                        ->label('Nome Template')
                        ->required()
                        //->live(debounce: 200)
                        //->reactive()
                        ->afterStateUpdated(function (string $state, Set $set) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                        ->unique(ignoreRecord: true),
                ])
                ->columns(2),
            //->columnSpan('full'),

            'subject' => TextInput::make('subject')->required()->maxLength(255),
            'html_template' => RichEditor::make('html_template')->required()->columnSpanFull(),
            'params_display' => View::make('notify::filament.components.params-badges')
                ->viewData(fn($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn($record): bool => !empty($record->params)),
            'text_template' => Textarea::make('text_template')->maxLength(65535)->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')->columnSpanFull(),
<<<<<<< HEAD
=======
=======
                        ->unique(ignoreRecord: true)
=======
                        ->unique(ignoreRecord: true),
>>>>>>> b93ef594b4 (.)
                ])
                ->columns(2),
            //->columnSpan('full'),

            'subject' => TextInput::make('subject')->required()->maxLength(255),
            'html_template' => RichEditor::make('html_template')->required()->columnSpanFull(),
            'params_display' => View::make('notify::filament.components.params-badges')
                ->viewData(fn($record) => ['params' => $record?->params])
                ->columnSpanFull()
<<<<<<< HEAD
=======
                        ->unique(ignoreRecord: true)
                ])
                ->columns(2),
                //->columnSpan('full'),

            'subject' => Forms\Components\TextInput::make('subject')
                ->required()
                ->maxLength(255),

            'html_template' => Forms\Components\RichEditor::make('html_template')
                ->required()
                ->columnSpanFull(),

            'params_display' => Forms\Components\View::make('notify::filament.components.params-badges')
                ->viewData(fn ($record) => ['params' => $record?->params])
                ->columnSpanFull()
>>>>>>> origin/develop
                ->visible(fn ($record): bool => !empty($record->params)),

           

<<<<<<< HEAD
            'text_template' => Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')
                ->columnSpanFull(),
>>>>>>> a12f125f4a (.)
=======
                ->visible(fn($record): bool => !empty($record->params)),
            'text_template' => Textarea::make('text_template')->maxLength(65535)->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')->columnSpanFull(),
>>>>>>> b93ef594b4 (.)
=======
            'text_template' => Forms\Components\Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
            'sms_template' => Forms\Components\Textarea::make('sms_template')
                ->columnSpanFull(),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }
}
