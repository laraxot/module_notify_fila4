<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\View;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;
use Override;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;
=======
=======
>>>>>>> 82ae73be (.)
use Override;
=======
>>>>>>> b19cd40 (.)
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\View;
use Filament\Forms\Components\Textarea;
use Filament\Forms;
<<<<<<< HEAD
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
    protected static null|string $model = MailTemplate::class;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
use Illuminate\Support\Str;
use Modules\Notify\Models\MailTemplate;
use Filament\Forms\Components\TextInput;
use Modules\Lang\Filament\Resources\LangBaseResource;

class MailTemplateResource extends LangBaseResource
{
    protected static ?string $model = MailTemplate::class;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
<<<<<<< HEAD
    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'mailable' => TextInput::make('mailable')
                ->default('Modules\Notify\Emails\SpatieEmail')
                ->required()
                ->maxLength(255),
            'name_slug_group' => Group::make()
=======
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
=======
    public static function getFormSchema(): array
    {
        return [
            'mailable' => TextInput::make('mailable')
                ->required()
                ->maxLength(255),
>>>>>>> b19cd40 (.)
            //'name' => Forms\Components\TextInput::make('name'),
            //'slug' => Forms\Components\TextInput::make('slug'),
            Group::make()
>>>>>>> 75179b85 (.)
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
>>>>>>> 75179b85 (.)
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
<<<<<<< HEAD
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
                ->visible(fn ($record): bool => is_object($record) && isset($record->params) && !empty($record->params)),
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
>>>>>>> 75179b85 (.)
=======
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
>>>>>>> 82ae73be (.)
        ];
    }
}
