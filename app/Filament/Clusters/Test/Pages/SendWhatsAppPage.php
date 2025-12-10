<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use BackedEnum;
use Filament\Panel;
use Filament\Schemas\Schema;
use Override;
use Illuminate\Contracts\Support\Htmlable;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Schemas\Schema;
use Filament\Panel;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Schemas\Schema;
use Filament\Panel;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\KeyValue;
use Exception;
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Override;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Override;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;

/**
 * @property \Filament\Schemas\Schema $whatsappForm
 */
class SendWhatsAppPage extends XotBasePage
{
    public null|array $whatsappData = [];
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;
    public ?array $whatsappData = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected string $view = 'notify::filament.pages.send-whatsapp';

    protected static ?string $cluster = Test::class;
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;

    /**
     * Get the slug of the page
     *
    public ?array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static ?string $cluster = Test::class;
    
    /**
     * Get the slug of the page
     * 
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
    {
        return 'send-whatsapp-page';
    }

    public function mount(): void
    {
        $this->fillForms();
    }

    protected function getForms(): array
    {
        return [
            'whatsappForm',
        ];
    }

    protected function fillForms(): void
    {
        $this->whatsappForm->fill();
    }

    public function whatsappForm(Schema $schema): Schema
    {
        return $schema->schema($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
<<<<<<< HEAD
=======
    }

    /**
     * @return array<string, \Filament\Forms\Components\KeyValue|\Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput>
     */
    public function getWhatsAppFormSchema(): array
    {
        return [
            TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            'driver' => Select::make('driver')
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
    public function whatsappForm(Schema $schema): Schema
    {
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema
            ->components($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
    public function whatsappForm(Form $form): Form
    {
        return $form
            ->schema($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        /** @var array<Htmlable|string> $components */
        $components = array_values($this->getWhatsAppFormSchema());

        return $schema->components($components)->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema
            ->components($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 5d933abf (.)
    }

    /**
     * @return array<string, \Filament\Forms\Components\KeyValue|\Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput>
     */
    public function getWhatsAppFormSchema(): array
    {
        return [
            'to' => TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            'message' => TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
<<<<<<< HEAD
            'driver' => Select::make('driver')
=======
            Select::make('driver')
            Forms\Components\TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            Forms\Components\TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Forms\Components\Select::make('driver')
            Select::make('driver')
            Select::make('driver')
            Select::make('driver')
            Select::make('driver')
            Select::make('driver')
            Select::make('driver')
>>>>>>> 5d933abf (.)
                ->options(WhatsAppDriverEnum::options())
                ->default(WhatsAppDriverEnum::getDefault()->value)
                ->required()
                ->helperText(__('notify::whatsapp.fields.driver.helper_text')),
            'template' => TextInput::make('template')->helperText('Nome del template (opzionale)'),
            'parameters' => KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
<<<<<<< HEAD
=======
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
            Forms\Components\TextInput::make('template')
                ->helperText('Nome del template (opzionale)'),
            Forms\Components\KeyValue::make('parameters')
                ->helperText('Parametri per il template (opzionale)'),
            Forms\Components\TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
            Forms\Components\Select::make('media_type')
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            TextInput::make('template')
                ->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')
                ->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> 5d933abf (.)
                ->options([
                    'image' => 'Immagine',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
        ];
    }

    public function sendWhatsApp(): void
    {
        try {
            $data = $this->whatsappForm->getState();
            $user = $this->getUser();

            $message = is_string($data['message']) ? $data['message'] : '';

            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])
                ->notify(new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])
                ->notify(new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
                    'driver' => $data['driver'],
                    'template' => $data['template'] ?? null,
                    'parameters' => $data['parameters'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                ]),
            );
                ]));
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]));
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );
                ]),
            );

            FilamentNotification::make()
                ->success()
                ->title('Messaggio WhatsApp inviato con successo')
                ->send();















        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());


        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());

            FilamentNotification::make()
                ->danger()
                ->title('Errore nell\'invio WhatsApp')
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getWhatsAppFormActions(): array
    {
        return [
            Action::make('whatsappFormActions')->submit('whatsappFormActions'),
        ];
    }

    #[Override]
            Action::make('whatsappFormActions')
                ->submit('whatsappFormActions'),
        ];
    }

            Action::make('whatsappFormActions')->submit('whatsappFormActions'),
        ];
    }

    #[Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if (!($user instanceof Model)) {
        if (! ($user instanceof Model)) {
        if (!($user instanceof Model)) {
        if (! ($user instanceof Model)) {
        if (!($user instanceof Model)) {
        if (! ($user instanceof Model)) {
        if (!($user instanceof Model)) {
        if (! ($user instanceof Model)) {
        if (!($user instanceof Model)) {
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
        if (!($user instanceof Model)) {
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
        }

        return $user;
    }
}
