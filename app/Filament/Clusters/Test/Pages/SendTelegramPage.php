<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use BackedEnum;
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Datas\TelegramMessageData;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Datas\TelegramData;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

/**
 * @property \Filament\Schemas\Schema $telegramForm
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)

<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)

    protected string $view = 'notify::filament.pages.send-telegram';

<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function telegramForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->schema($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput|\Filament\Forms\Components\Toggle>
     */
    public function getTelegramFormSchema(): array
    {
        return [
            'chat_id' => TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
            'text' => TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            'driver' => Select::make('driver')
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
        return $schema
            ->components($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> b19cd40 (.)
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 4e2ebfb (.)
    }

    public function getTelegramFormSchema(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
=======
            TextInput::make('chat_id')
                ->required()
                ->helperText('ID della chat o username del canale'),
>>>>>>> b19cd40 (.)
=======
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
>>>>>>> 4e2ebfb (.)
            TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Select::make('driver')
>>>>>>> 75179b85 (.)
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
<<<<<<< HEAD
            'parse_mode' => Select::make('parse_mode')
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'disable_web_page_preview' => Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            'disable_notification' => Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            'reply_to_message_id' => TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
<<<<<<< HEAD
=======
            Toggle::make('disable_web_page_preview')
                ->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')
                ->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
            Select::make('media_type')
>>>>>>> 75179b85 (.)
                ->options([
                    'photo' => 'Foto',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'caption' => TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
        ];
    }

    public function sendTelegram(): void
    {
        try {
            $data = $this->telegramForm->getState();
            $user = $this->getUser();

            $message = is_string($data['text']) ? $data['text'] : '';

<<<<<<< HEAD
<<<<<<< HEAD
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
=======
            Notification::route('telegram', $data['chat_id'])
                ->notify(new TelegramNotification($message, [
>>>>>>> b19cd40 (.)
=======
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
>>>>>>> 4e2ebfb (.)
                    'driver' => $data['driver'],
                    'parse_mode' => $data['parse_mode'] ?? null,
                    'disable_web_page_preview' => $data['disable_web_page_preview'] ?? false,
                    'disable_notification' => $data['disable_notification'] ?? false,
                    'reply_to_message_id' => $data['reply_to_message_id'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                    'caption' => $data['caption'] ?? null,
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
            );
=======
                ]));
>>>>>>> b19cd40 (.)
=======
                ]),
            );
>>>>>>> 4e2ebfb (.)

            FilamentNotification::make()
                ->success()
                ->title('Messaggio Telegram inviato con successo')
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        } catch (Exception $e) {
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());

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
<<<<<<< HEAD
<<<<<<< HEAD
            Action::make('telegramFormActions')->submit('telegramFormActions'),
=======
            Action::make('telegramFormActions')
                ->submit('telegramFormActions'),
>>>>>>> b19cd40 (.)
=======
            Action::make('telegramFormActions')->submit('telegramFormActions'),
>>>>>>> 4e2ebfb (.)
        ];
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->telegramForm->fill();
    }
}
