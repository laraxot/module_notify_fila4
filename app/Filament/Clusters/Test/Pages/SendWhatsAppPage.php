<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
=======
=======
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
use Filament\Schemas\Schema;
use Filament\Panel;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\KeyValue;
=======
>>>>>>> 05bc3ad (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 05bc3ad (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 99ff506 (.)
=======
>>>>>>> 05bc3ad (.)
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
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
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> d5c4b93 (.)
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
=======
>>>>>>> e5b598a (.)
=======
>>>>>>> 806a0e3 (.)
=======
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
=======
use Override;
>>>>>>> 05bc3ad (.)

/**
 * @property \Filament\Schemas\Schema $whatsappForm
 */
class SendWhatsAppPage extends XotBasePage
{
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
=======
>>>>>>> 05bc3ad (.)
    public ?array $whatsappData = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

<<<<<<< HEAD
    protected string $view = 'notify::filament.pages.send-whatsapp';

    protected static ?string $cluster = Test::class;
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
=======
    protected string $view = 'notify::filament.pages.send-whatsapp';

    protected static ?string $cluster = Test::class;
>>>>>>> 05bc3ad (.)

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
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
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
            'driver' => Select::make('driver')
                ->options(WhatsAppDriverEnum::options())
                ->default(WhatsAppDriverEnum::getDefault()->value)
                ->required()
                ->helperText(__('notify::whatsapp.fields.driver.helper_text')),
            'template' => TextInput::make('template')->helperText('Nome del template (opzionale)'),
            'parameters' => KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
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
                    'driver' => $data['driver'],
                    'template' => $data['template'] ?? null,
                    'parameters' => $data['parameters'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                ]),
            );

            FilamentNotification::make()
                ->success()
                ->title('Messaggio WhatsApp inviato con successo')
                ->send();
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 99ff506 (.)
=======
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
>>>>>>> 05bc3ad (.)

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
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

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
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
=======
        if (! ($user instanceof Model)) {
>>>>>>> 05bc3ad (.)
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
        }

        return $user;
    }
}
