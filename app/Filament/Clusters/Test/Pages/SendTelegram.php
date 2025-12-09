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
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;

=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\TelegramNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use NotificationChannels\Telegram\TelegramMessage;
<<<<<<< HEAD
<<<<<<< HEAD
use Telegram\Bot\Laravel\Facades\Telegram;
=======
>>>>>>> c8b1c8bf (.)
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
=======
<<<<<<< HEAD
use Webmozart\Assert\Assert;

=======
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * 
 */
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
class SendTelegram extends Page implements HasForms
{
<<<<<<< HEAD
=======
    public array $data = [];

=======
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendTelegram extends Page implements HasForms
{
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $emailData = [];
=======
<<<<<<< HEAD
    public ?array $emailData = [];
>>>>>>> f1c9518b (.)

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

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
=======
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
        /*
         * dddx($response = Telegram::getMe());
         * $response = $telegram->sendMessage([
         * 'chat_id' => 'CHAT_ID',
         * 'text' => 'Hello World',
         * ]);
         */
        return $schema
            ->components([
                Section::make()
                    // ->description('Update your account\'s profile information and email address.')
                    ->schema([
                        TextInput::make('to')->required(),
                        RichEditor::make('body')->required(),
                    ]),
            ])
            ->model($this->getUser())
            ->statePath('emailData');
    }

=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
        Assert::string($token = config('services.telegram-bot-api.token'));
<<<<<<< HEAD
        $url = 'https://api.telegram.org/bot' . $token . '/getMe';
=======
<<<<<<< HEAD
        $url = 'https://api.telegram.org/bot'.$token.'/getMe';
=======
<<<<<<< HEAD
        $url = 'https://api.telegram.org/bot' . $token . '/getMe';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
    public function emailForm(Schema $schema): Schema
    {
        /*
         * dddx($response = Telegram::getMe());
         * $response = $telegram->sendMessage([
         * 'chat_id' => 'CHAT_ID',
         * 'text' => 'Hello World',
         * ]);
         */
        return $schema
            ->components([
                Section::make()
                    // ->description('Update your account\'s profile information and email address.')
                    ->schema([
                        TextInput::make('to')->required(),
                        RichEditor::make('body')->required(),
                    ]),
            ])
            ->model($this->getUser())
            ->statePath('emailData');
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
        Assert::string($token = config('services.telegram-bot-api.token'));
        $url = 'https://api.telegram.org/bot' . $token . '/getMe';
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
        Http::get($url);
        // dddx($response->json());
        /*
         * "ok" => true
         * "result" => array:8 [▼
         * "id" =>
         * "is_bot" => true
         * "first_name" => " "
         * "username" => " "
         * "can_join_groups" => true
         * "can_read_all_group_messages" => false
         * "supports_inline_queries" => false
         * "can_connect_to_business" => false
         * ]
         * ]
         */
        /*
         * $res = TelegramMessage::create()
         * // Optional recipient user id.
         * ->to($data['to'])
         * // Markdown supported.
         * ->content($data['body']);
         */
        // Notification::sendNow($developers, new TelegramNotification());
        $message = is_string($data['body']) ? $data['body'] : '';
        Notification::route('telegram', $data['to'])->notify(new TelegramNotification($message));
    }

    protected function getForms(): array
    {
        return [
            'emailForm',
        ];
    }

    protected function getEmailFormActions(): array
    {
        return [
            Action::make('emailFormActions')
<<<<<<< HEAD
                
=======
<<<<<<< HEAD
=======
                
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

                ->submit('emailFormActions'),
        ];
    }

    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();
<<<<<<< HEAD
<<<<<<< HEAD
        if (!($user instanceof Model)) {
=======
<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
        }

        return $user;
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
<<<<<<< HEAD
        $this->emailForm->fill();
=======
<<<<<<< HEAD
        // Form data filled;
=======
        $this->emailForm->fill();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    }
}
