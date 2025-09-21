<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
=======
=======
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b93ef594b4 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
<<<<<<< HEAD

/**
 * @property \Filament\Schemas\Schema $telegramForm
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
use Modules\Notify\Datas\TelegramMessageData;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)

/**
 * @property \Filament\Schemas\Schema $telegramForm
=======

/**
 * @property ComponentContainer $telegramForm
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
    public null|array $telegramData = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $telegramData = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-telegram';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> b93ef594b4 (.)
=======
    public ?array $telegramData = [];

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-telegram';

    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
    public function telegramForm(Schema $schema): Schema
    {
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
<<<<<<< HEAD
    public function telegramForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
        return $schema
            ->components($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> b93ef594b4 (.)
=======
    public function telegramForm(Form $form): Form
    {
        return $form
            ->schema($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    public function getTelegramFormSchema(): array
    {
        return [
<<<<<<< HEAD
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
=======
            TextInput::make('chat_id')
                ->required()
                ->helperText('ID della chat o username del canale'),
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Select::make('driver')
<<<<<<< HEAD
=======
=======
            Forms\Components\TextInput::make('chat_id')
                ->required()
                ->helperText('ID della chat o username del canale'),
            Forms\Components\TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Forms\Components\Select::make('driver')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
<<<<<<< HEAD
            Select::make('parse_mode')
=======
<<<<<<< HEAD
            Select::make('parse_mode')
=======
            Forms\Components\Select::make('parse_mode')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
<<<<<<< HEAD
            Select::make('media_type')
=======
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
>>>>>>> a12f125f4a (.)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
>>>>>>> b93ef594b4 (.)
            Select::make('media_type')
=======
            Forms\Components\Toggle::make('disable_web_page_preview')
                ->helperText('Disabilita l\'anteprima dei link'),
            Forms\Components\Toggle::make('disable_notification')
                ->helperText('Invia il messaggio silenziosamente'),
            Forms\Components\TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            Forms\Components\TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
            Forms\Components\Select::make('media_type')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->options([
                    'photo' => 'Foto',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
<<<<<<< HEAD
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> b93ef594b4 (.)
=======
            Forms\Components\TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }

    public function sendTelegram(): void
    {
        try {
            $data = $this->telegramForm->getState();
            $user = $this->getUser();

            $message = is_string($data['text']) ? $data['text'] : '';

<<<<<<< HEAD
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
=======
            Notification::route('telegram', $data['chat_id'])
                ->notify(new TelegramNotification($message, [
>>>>>>> a12f125f4a (.)
=======
            Notification::route('telegram', $data['chat_id'])->notify(
                new TelegramNotification($message, [
>>>>>>> b93ef594b4 (.)
=======
            Notification::route('telegram', $data['chat_id'])
                ->notify(new TelegramNotification($message, [
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                    'driver' => $data['driver'],
                    'parse_mode' => $data['parse_mode'] ?? null,
                    'disable_web_page_preview' => $data['disable_web_page_preview'] ?? false,
                    'disable_notification' => $data['disable_notification'] ?? false,
                    'reply_to_message_id' => $data['reply_to_message_id'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
                    'caption' => $data['caption'] ?? null,
<<<<<<< HEAD
                ]),
            );
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
            );
=======
                ]));
>>>>>>> a12f125f4a (.)
=======
                ]),
            );
>>>>>>> b93ef594b4 (.)
=======
                ]));
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

            FilamentNotification::make()
                ->success()
                ->title('Messaggio Telegram inviato con successo')
                ->send();
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======

        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
            Action::make('telegramFormActions')->submit('telegramFormActions'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Action::make('telegramFormActions')->submit('telegramFormActions'),
=======
            Action::make('telegramFormActions')
                ->submit('telegramFormActions'),
>>>>>>> a12f125f4a (.)
=======
            Action::make('telegramFormActions')->submit('telegramFormActions'),
>>>>>>> b93ef594b4 (.)
=======
            Action::make('telegramFormActions')
                ->submit('telegramFormActions'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        ];
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->telegramForm->fill();
    }
}
