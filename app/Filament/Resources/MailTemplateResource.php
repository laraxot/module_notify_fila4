<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\View;
=======
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
use Override;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\View;
use Filament\Forms\Components\Textarea;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
use Filament\Forms\Components\TextInput;
>>>>>>> 75179b8 (.)
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
<<<<<<< HEAD
    protected static ?string $model = MailTemplate::class;
=======
    protected static null|string $model = MailTemplate::class;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Filament\Resources\LangBaseResource;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'mailable' => TextInput::make('mailable')
                ->default('Modules\Notify\Emails\SpatieEmail')
                ->required()
                ->maxLength(255),
            'name_group' => Group::make()
=======
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
<<<<<<< HEAD
=======
    public static function getFormSchema(): array
    {
        return [
            'mailable' => TextInput::make('mailable')
                ->required()
                ->maxLength(255),
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            //'name' => Forms\Components\TextInput::make('name'),
            //'slug' => Forms\Components\TextInput::make('slug'),
            Group::make()
>>>>>>> 75179b8 (.)
                ->schema([
                    TextInput::make('name')
                        ->label('Nome Template')
                        ->required()
<<<<<<< HEAD
                        ->afterStateUpdated(function (string $state, Set $set): void {
=======
                        //->live(debounce: 200)
                        //->reactive()
                        ->afterStateUpdated(function (string $state, Set $set) {
>>>>>>> 75179b8 (.)
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
                        ->unique(ignoreRecord: true),
                ])
                ->columns(2),
<<<<<<< HEAD
            'subject' => TextInput::make('subject')
                ->required()
                ->maxLength(255),
            'html_template' => RichEditor::make('html_template')
                ->required()
                ->columnSpanFull(),
            'params_display' => View::make('notify::filament.components.params-badges')
                ->viewData(fn ($record): array => [
                    'params' => is_object($record) && isset($record->params) ? $record->params : [],
                ])
                ->columnSpanFull()
                ->visible(fn ($record): bool => is_object($record) && isset($record->params) && ! empty($record->params)),
            'text_template' => Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')
                ->columnSpanFull(),
=======
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
                        ->unique(ignoreRecord: true)
                ])
                ->columns(2),
                //->columnSpan('full'),

            'subject' => TextInput::make('subject')
                ->required()
                ->maxLength(255),

            'html_template' => RichEditor::make('html_template')
                ->required()
                ->columnSpanFull(),

            'params_display' => View::make('notify::filament.components.params-badges')
                ->viewData(fn ($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn ($record): bool => !empty($record->params)),

           

            'text_template' => Textarea::make('text_template')
                ->maxLength(65535)
                ->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')
                ->columnSpanFull(),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
        ];
    }
}
