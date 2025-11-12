<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
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
=======
use Override;
>>>>>>> 6bd5430 (.)
>>>>>>> 9c8f04e (.)
=======
>>>>>>> 220b97c (.)
=======
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\View;
use Override;
use Filament\Forms\Components\Utilities\Set;
=======
>>>>>>> 05bc3ad (.)
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\View;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;
use Override;

class MailTemplateResource extends LangBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = MailTemplate::class;
>>>>>>> 99ff506 (.)
=======
    protected static ?string $model = MailTemplate::class;
>>>>>>> 05bc3ad (.)

    /**
     * Restituisce lo schema del form per Filament.
     *
     * - Array associativo con chiavi stringhe
     * - Campi ricavati da migration/model: id, mailable, subject, html_template, text_template
     * - Le etichette, i placeholder e i testi di aiuto sono gestiti tramite LangServiceProvider
     * - File di traduzione: Modules/Notify/resources/lang/{locale}/mail_template.php
     */
    #[Override]
    public static function getFormSchema(): array
    {
<<<<<<< HEAD
        return [
<<<<<<< HEAD
            'mailable' => TextInput::make('mailable')
                ->default('Modules\Notify\Emails\SpatieEmail')
                ->required()
                ->maxLength(255),
=======
=======
        return array_values([
>>>>>>> 05bc3ad (.)
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 9c8f04e (.)
=======
>>>>>>> 220b97c (.)
=======
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
            'name_group' => Group::make()
                ->schema([
                    TextInput::make('name')
                        ->label('Nome Template')
                        ->required()
                        ->afterStateUpdated(function (string $state, \Filament\Schemas\Components\Utilities\Set $set): void {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                ])
                ->columns(2),
            'subject' => TextInput::make('subject')->required()->maxLength(255),
            'html_template' => RichEditor::make('html_template')->required()->columnSpanFull(),
            'params_display' => View::make('notify::filament.components.params-badges')
<<<<<<< HEAD
<<<<<<< HEAD
                ->viewData(fn ($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn ($record): bool => ! empty($record->params)),
=======
                ->viewData(fn($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn($record): bool => !empty($record->params)),
>>>>>>> 99ff506 (.)
=======
                ->viewData(function ($record): array {
                    if (! is_object($record) || ! property_exists($record, 'params')) {
                        return ['params' => []];
                    }

                    return ['params' => $record->params];
                })
                ->columnSpanFull()
                ->visible(function ($record): bool {
                    if (! is_object($record) || ! property_exists($record, 'params')) {
                        return false;
                    }

                    return ! empty($record->params);
                }),
>>>>>>> 05bc3ad (.)
            'text_template' => Textarea::make('text_template')->maxLength(65535)->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')->columnSpanFull(),
        ]);
    }
}
