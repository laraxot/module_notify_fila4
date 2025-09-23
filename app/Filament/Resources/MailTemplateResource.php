<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Group;
use Filament\Forms\Components\View;
=======
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\View;
>>>>>>> 22f1446 (.)
=======
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\View;
>>>>>>> 5bed4d4 (.)
use Override;
use Filament\Forms\Components\Utilities\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;
use Modules\Lang\Filament\Resources\LangBaseResource;
use Modules\Notify\Models\MailTemplate;

class MailTemplateResource extends LangBaseResource
{
    protected static null|string $model = MailTemplate::class;

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
        return [
            'mailable' => TextInput::make('mailable')->required()->maxLength(255),
<<<<<<< HEAD
<<<<<<< HEAD
            //'name' => Forms\Components\TextInput::make('name'),
            //'slug' => Forms\Components\TextInput::make('slug'),
            Group::make()
=======
            'name_group' => Group::make()
>>>>>>> 22f1446 (.)
=======
            'name_group' => Group::make()
>>>>>>> 5bed4d4 (.)
                ->schema([
                    TextInput::make('name')
                        ->label('Nome Template')
                        ->required()
<<<<<<< HEAD
<<<<<<< HEAD
                        //->live(debounce: 200)
                        //->reactive()
=======
>>>>>>> 22f1446 (.)
=======
>>>>>>> 5bed4d4 (.)
                        ->afterStateUpdated(function (string $state, \Filament\Schemas\Components\Utilities\Set $set) {
                            $set('slug', Str::slug($state));
                        }),
                    TextInput::make('slug')
                        ->label('Slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                ])
                ->columns(2),
<<<<<<< HEAD
<<<<<<< HEAD
            //->columnSpan('full'),

=======
>>>>>>> 22f1446 (.)
=======
>>>>>>> 5bed4d4 (.)
            'subject' => TextInput::make('subject')->required()->maxLength(255),
            'html_template' => RichEditor::make('html_template')->required()->columnSpanFull(),
            'params_display' => View::make('notify::filament.components.params-badges')
                ->viewData(fn($record) => ['params' => $record?->params])
                ->columnSpanFull()
                ->visible(fn($record): bool => !empty($record->params)),
            'text_template' => Textarea::make('text_template')->maxLength(65535)->columnSpanFull(),
            'sms_template' => Textarea::make('sms_template')->columnSpanFull(),
        ];
    }
}
