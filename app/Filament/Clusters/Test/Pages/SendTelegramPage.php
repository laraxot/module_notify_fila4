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
>>>>>>> 7624f916 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
<<<<<<< HEAD
use Illuminate\Contracts\Support\Htmlable;
=======
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> 7624f916 (.)
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
use Modules\Notify\Datas\TelegramData;
use Modules\Notify\Datas\TelegramMessageData;
=======
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $telegramForm

/**
 * @property Schema $telegramForm
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
use NotificationChannels\Telegram\TelegramMessage;
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $telegramForm
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 7624f916 (.)
use Modules\Notify\Datas\TelegramMessageData;
use Illuminate\Support\Facades\Log;
use Filament\Notifications\Notification as FilamentNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Datas\TelegramData;
<<<<<<< HEAD

/**
 * @property \Filament\Schemas\Schema $telegramForm

/**
 * @property ComponentContainer $telegramForm
=======
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
 */
class SendTelegramPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
    public null|array $telegramData = [];
    public ?array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];

    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
=======
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
>>>>>>> 7624f916 (.)

    protected string $view = 'notify::filament.pages.send-telegram';

    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
    public ?array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public ?array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public ?array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public ?array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
    public null|array $telegramData = [];
=======
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
=======
>>>>>>> 58816034 (.)
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
=======
>>>>>>> 207ac35e (.)
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
=======
    public null|array $telegramData = [];
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
    public null|array $telegramData = [];
=======
    public ?array $telegramData = [];
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
    public null|array $telegramData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> 6e2169a3 (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 9777d1b3 (.)
<<<<<<< HEAD
>>>>>>> 99a612a8 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
    public null|array $telegramData = [];
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-telegram';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
    protected static ?string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static ?string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static ?string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
=======
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
=======
>>>>>>> 58816034 (.)
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
=======
>>>>>>> 207ac35e (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
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
    protected static null|string $cluster = Test::class;
>>>>>>> d09cb759 (.)
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
>>>>>>> 7624f916 (.)
    public ?array $telegramData = [];

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-telegram';

    protected static ?string $cluster = Test::class;
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
    protected static null|string $cluster = Test::class;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> 6e2169a3 (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b3 (.)
<<<<<<< HEAD
>>>>>>> 99a612a8 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function telegramForm(Schema $schema): Schema
    {
<<<<<<< HEAD
        return $schema->schema($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
<<<<<<< HEAD
=======
=======
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
=======
>>>>>>> 58816034 (.)
>>>>>>> 7624f916 (.)
        /** @var array<Htmlable|string> $components */
        $components = array_values($this->getTelegramFormSchema());

        return $schema
            ->components($components)
            ->model($this->getUser())
            ->statePath('telegramData');
<<<<<<< HEAD
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
=======
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
>>>>>>> 7624f916 (.)
        return $schema
            ->components($this->getTelegramFormSchema())
            ->model($this->getUser())
            ->statePath('telegramData');
<<<<<<< HEAD
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 5d933abf (.)
    }

    /**
     * @return array<string, \Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput|\Filament\Forms\Components\Toggle>
     */
<<<<<<< HEAD
=======
=======
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
=======
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
    }

<<<<<<< HEAD
    /**
     * @return array<string, \Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput|\Filament\Forms\Components\Toggle>
     */
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> 7624f916 (.)
    public function getTelegramFormSchema(): array
    {
        return [
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
            TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
<<<<<<< HEAD
            'driver' => Select::make('driver')
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
    }

    /**
     * @return array<\Illuminate\Contracts\Support\Htmlable|string>
     */
>>>>>>> 5d933abf (.)
    public function getTelegramFormSchema(): array
    {
        return [
            'chat_id' => TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
            'text' => TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
<<<<<<< HEAD
            'driver' => Select::make('driver')
=======
            Select::make('driver')
=======
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
=======
        return $schema->components($this->getTelegramFormSchema())->model($this->getUser())->statePath('telegramData');
    }

>>>>>>> 75179b85 (.)
    public function getTelegramFormSchema(): array
    {
        return [
            TextInput::make('chat_id')->required()->helperText('ID della chat o username del canale'),
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
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 7624f916 (.)
            Forms\Components\TextInput::make('chat_id')
                ->required()
                ->helperText('ID della chat o username del canale'),
            Forms\Components\TextInput::make('text')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Forms\Components\Select::make('driver')
<<<<<<< HEAD
            Select::make('driver')
            Select::make('driver')
            Select::make('driver')
>>>>>>> 5d933abf (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
                ->options([
                    'bot' => 'Bot API',
                    'webhook' => 'Webhook',
                ])
                ->default('bot')
                ->required(),
<<<<<<< HEAD
            'parse_mode' => Select::make('parse_mode')
<<<<<<< HEAD
=======
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
            Select::make('parse_mode')
>>>>>>> 5d933abf (.)
=======
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
            Select::make('parse_mode')
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
            Select::make('parse_mode')
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
                ->options([
                    'HTML' => 'HTML',
                    'Markdown' => 'Markdown',
                    'MarkdownV2' => 'MarkdownV2',
                ])
                ->helperText('Formato del testo (opzionale)'),
<<<<<<< HEAD
            'disable_web_page_preview' => Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            'disable_notification' => Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            'reply_to_message_id' => TextInput::make('reply_to_message_id')
<<<<<<< HEAD
=======
=======
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
>>>>>>> 7624f916 (.)
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
<<<<<<< HEAD
=======
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
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> 6e2169a3 (.)
=======
=======
>>>>>>> 9777d1b3 (.)
<<<<<<< HEAD
>>>>>>> 99a612a8 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
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
=======
>>>>>>> d09cb759 (.)
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
>>>>>>> 7624f916 (.)
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
<<<<<<< HEAD
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
<<<<<<< HEAD
            Select::make('media_type')
=======
>>>>>>> b93ef594b4 (.)
            Select::make('media_type')
=======
>>>>>>> 7624f916 (.)
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
<<<<<<< HEAD
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 7624f916 (.)
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
            Toggle::make('disable_web_page_preview')->helperText('Disabilita l\'anteprima dei link'),
            Toggle::make('disable_notification')->helperText('Invia il messaggio silenziosamente'),
            TextInput::make('reply_to_message_id')
>>>>>>> 5d933abf (.)
                ->numeric()
                ->helperText('ID del messaggio a cui rispondere'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
=======
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
                ->options([
                    'photo' => 'Foto',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
<<<<<<< HEAD
            'caption' => TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
<<<<<<< HEAD
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            Forms\Components\TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 5d933abf (.)
=======
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
=======
            TextInput::make('caption')
                ->helperText('Didascalia per il media (opzionale)'),
<<<<<<< HEAD
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
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 82ae73be (.)
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
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 58816034 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> 6e2169a3 (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 9777d1b3 (.)
<<<<<<< HEAD
>>>>>>> 99a612a8 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
            TextInput::make('caption')->helperText('Didascalia per il media (opzionale)'),
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
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
        } catch (Exception $e) {

        } catch (\Exception $e) {
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
            Log::error('Errore nell\'invio Telegram: '.$e->getMessage());
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
=======
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
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
            Log::error('Errore nell\'invio Telegram: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)

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
