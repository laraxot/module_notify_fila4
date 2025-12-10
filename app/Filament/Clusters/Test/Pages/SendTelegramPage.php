<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use BackedEnum;
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)

/**
 * @property \Filament\Schemas\Schema $telegramForm
=======
=======
>>>>>>> c8b1c8bf (.)

/**
 * @property Schema $telegramForm
=======
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

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
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
    public null|array $telegramData = [];
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
    public ?array $telegramData = [];
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> b19cd40 (.)
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|array $telegramData = [];
>>>>>>> 9777d1b3 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)

    protected string $view = 'notify::filament.pages.send-telegram';

    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
=======
    protected static ?string $cluster = Test::class;
=======
    public null|array $telegramData = [];
<<<<<<< HEAD
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
    public ?array $telegramData = [];
=======
    public null|array $telegramData = [];
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|array $telegramData = [];
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> d09cb759 (.)
=======
    public null|array $telegramData = [];
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
    public ?array $telegramData = [];
=======
    public null|array $telegramData = [];
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-telegram';

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
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35 (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 3f537838 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->schema($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
        /** @var array<Htmlable|string> $components */
        $components = array_values($this->getTelegramFormSchema());

        return $schema
            ->components($components)
            ->model($this->getUser())
            ->statePath('telegramData');
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
        return $schema
            ->components($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
    }

<<<<<<< HEAD
    /**
     * @return array<string, \Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput|\Filament\Forms\Components\Toggle>
     */
=======
>>>>>>> 5fd545e4 (.)
    public function getTelegramFormSchema(): array
    {
        return [
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
            TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'driver' => Select::make('driver')
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
    }

<<<<<<< HEAD
    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
    }

>>>>>>> 75179b85 (.)
=======
>>>>>>> 54220b28 (rebase 210)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Select::make('driver')
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
            Select::make('driver')
>>>>>>> a335025b (rebase 210)
=======
            Select::make('driver')
>>>>>>> e00d798d (.)
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'parse_mode' => Select::make('parse_mode')
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
=======
            Select::make('parse_mode')
=======
            Select::make('parse_mode')
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
            Select::make('parse_mode')
=======
            Forms\Components\Select::make('parse_mode')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
=======
            Select::make('parse_mode')
>>>>>>> 2cbbc069 (.)
=======
            Select::make('parse_mode')
>>>>>>> 7c1c276f (rebase 210)
=======
            Select::make('parse_mode')
>>>>>>> a335025b (rebase 210)
=======
            Select::make('parse_mode')
>>>>>>> e00d798d (.)
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
=======
            Select::make('parse_mode')
>>>>>>> 2cbbc069 (.)
=======
            Select::make('parse_mode')
>>>>>>> 7c1c276f (rebase 210)
=======
            Select::make('parse_mode')
>>>>>>> a335025b (rebase 210)
=======
            Select::make('parse_mode')
>>>>>>> e00d798d (.)
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
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
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
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
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> 2cbbc069 (.)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> 7c1c276f (rebase 210)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> a335025b (rebase 210)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> 2cbbc069 (.)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> 7c1c276f (rebase 210)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> a335025b (rebase 210)
=======
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
>>>>>>> e00d798d (.)
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
            'caption' => TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> ce89c8bb (.)
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> b93ef594b4 (.)
=======
            Forms\Components\TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 82ae73be (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 82ae73be (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 2fc60436 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 82ae73be (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 2fc60436 (.)
=======
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 2cbbc069 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 7c1c276f (rebase 210)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> a335025b (rebase 210)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> e00d798d (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 58816034 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 2cbbc069 (.)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 7c1c276f (rebase 210)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> a335025b (rebase 210)
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> e00d798d (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

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
