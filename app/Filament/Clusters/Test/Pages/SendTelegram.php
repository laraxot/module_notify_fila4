<?php

/**
 * @see https://medium.com/modulr/send-telegram-notifications-with-laravel-9-342cc87b406
 * @see https://laravel-notification-channels.com/telegram/#usage
 */

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
>>>>>>> 99ff506 (.)
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
>>>>>>> 8e43c3e (.)
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
use Webmozart\Assert\Assert;

=======
use Telegram\Bot\Laravel\Facades\Telegram;
use Webmozart\Assert\Assert;

/**
 * 
 */
>>>>>>> 99ff506 (.)
=======
use Webmozart\Assert\Assert;

>>>>>>> 8e43c3e (.)
class SendTelegram extends Page implements HasForms
{
    public array $data = [];

    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $emailData = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

    protected static ?string $cluster = Test::class;
=======
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> 8e43c3e (.)

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
=======
    protected static ?string $cluster = Test::class;
>>>>>>> 8e43c3e (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function sendEmail(): void
    {
        $data = $this->data;
        Assert::string($token = config('services.telegram-bot-api.token'));
<<<<<<< HEAD
<<<<<<< HEAD
        $url = 'https://api.telegram.org/bot'.$token.'/getMe';
=======
        $url = 'https://api.telegram.org/bot' . $token . '/getMe';
>>>>>>> 99ff506 (.)
=======
        $url = 'https://api.telegram.org/bot'.$token.'/getMe';
>>>>>>> 8e43c3e (.)
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

                ->submit('emailFormActions'),
        ];
    }

    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();
<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
=======
        if (! ($user instanceof Model)) {
>>>>>>> 8e43c3e (.)
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
        // Form data filled;
    }
}
