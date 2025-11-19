<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
use Exception;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
=======
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
>>>>>>> 75179b8 (.)
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD

/**
 * @property Schema $telegramForm
=======
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $telegramForm
>>>>>>> 75179b8 (.)
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $telegramData = [];
=======
    public null|array $telegramData = [];
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|array $telegramData = [];
>>>>>>> 9777d1b (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-telegram';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function telegramForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<Htmlable|string> $components */
        $components = array_values($this->getTelegramFormSchema());

        return $schema
            ->components($components)
            ->model($this->getUser())
            ->statePath('telegramData');
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
        return $schema
            ->components($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 9777d1b (.)
    }

    public function getTelegramFormSchema(): array
    {
        return [
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
            TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Select::make('driver')
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
            Select::make('parse_mode')
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
                ->options([
                    'photo' => 'Foto',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
        ];
    }

    public function sendTelegram(): void
    {
        try {
            $data = $this->telegramForm->getState();
            $user = $this->getUser();

            $message = is_string($data['text']) ? $data['text'] : '';

            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
                    'driver' => $data['driver'],
                    'parse_mode' => $data['parse_mode'] ?? null,
                    'disable_web_page_preview' => $data['disable_web_page_preview'] ?? false,
                    'disable_notification' => $data['disable_notification'] ?? false,
                    'reply_to_message_id' => $data['reply_to_message_id'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                    'caption' => $data['caption'] ?? null,
                ]),
            );

            FilamentNotification::make()
                ->success()
                ->title('Messaggio Telegram inviato con successo')
                ->send();
        } catch (Exception $e) {
<<<<<<< HEAD
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 75179b8 (.)

            FilamentNotification::make()
                ->danger()
                ->title('Errore nell\'invio Telegram')
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getForms(): array
    {
        return [
            'telegramForm',
        ];
    }

    protected function getTelegramFormActions(): array
    {
        return [
            Action::make('telegramFormActions')->submit('telegramFormActions'),
        ];
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->telegramForm->fill();
    }
}
