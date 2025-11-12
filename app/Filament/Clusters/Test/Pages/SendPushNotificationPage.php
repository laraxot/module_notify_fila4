<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\MessageData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
use Override;
=======
use Filament\Schemas\Schema;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Kreait\Firebase\Messaging\MessageData;
=======
>>>>>>> 8e43c3e (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\MessageData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
use Override;
>>>>>>> 8e43c3e (.)
=======
>>>>>>> 6a92a74 (.)
use Webmozart\Assert\Assert;

use function Safe\json_encode;

<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * 
 */
>>>>>>> 99ff506 (.)
=======
>>>>>>> 8e43c3e (.)
class SendPushNotificationPage extends XotBasePage
{
    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $notificationData = [];

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-push-notification';

    protected static ?string $cluster = Test::class;
=======
    public null|array $notificationData = [];
=======
    public ?array $notificationData = [];
>>>>>>> 8e43c3e (.)

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-push-notification';

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

    public function form(Schema $schema): Schema
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
        /**
         * Callback per filtrare i dispositivi.
         */
=======
=======
=======
=======
=======
    public function notificationForm(Schema $schema): Schema
    {
>>>>>>> da89aab (.)
=======
=======
>>>>>>> 0e521e1 (.)
=======
=======
    public function notificationForm(Schema $schema): Schema
    {
>>>>>>> 9bd3cd0 (.)
        $devices = DeviceUser::with(['profile', 'device'])
            ->where('push_notifications_token', '!=', null)
            ->where('push_notifications_token', '!=', 'unknown')
            ->where('push_notifications_enabled', 1)
            // ->whereHas('profile') //db separato percio' da errore cosi'
            ->whereHas('device')
            ->get();

        /**
         * Callback per mappare i dispositivi in opzioni per il select.
         */
        $callback = function ($item) {
            /** @var mixed $item */
            if (!is_object($item)) {
                return [];
            }

            // Relations & attributes (Laravel-safe)
            $profile = method_exists($item, 'getRelationValue') ? $item->getRelationValue('profile') : null;
            if (!is_object($profile)) {
                return [];
            }
            $fullName = (string) (data_get($profile, 'full_name') ?? 'Utente');

            $tokenAttr = method_exists($item, 'getAttribute') ? $item->getAttribute('push_notifications_token') : null;
            $token = is_string($tokenAttr) ? $tokenAttr : '';
            if ($token === '' || $token === 'unknown') {
                return [];
            }

            $device = method_exists($item, 'getRelationValue') ? $item->getRelationValue('device') : null;
            $robotVal = data_get($device, 'robot');
            $robot = is_string($robotVal) ? $robotVal : null;

            // Creiamo la label con gli ultimi 5 caratteri del token
            $tokenSuffix = mb_substr($token, -5);
            $label = $fullName . ' (' . ($robot ?? '') . ') ' . $tokenSuffix;

            return [$token => $label];
        };
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6bd5430 (.)
>>>>>>> 9c8f04e (.)
=======
>>>>>>> 220b97c (.)
=======
>>>>>>> b8140d8 (.)
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
=======
>>>>>>> 6bd5430 (.)
>>>>>>> 0e521e1 (.)
=======
>>>>>>> 41dc34b (.)
=======
>>>>>>> b8140d8 (.)
>>>>>>> 9bd3cd0 (.)
=======
>>>>>>> 895d6b1 (.)

        /**
         * Callback per filtrare i dispositivi.
         */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 9c8f04e (.)
=======
>>>>>>> 220b97c (.)
=======
>>>>>>> 0e521e1 (.)
=======
>>>>>>> 41dc34b (.)
        Assert::isArray([]);

        return $schema
            ->components([
<<<<<<< HEAD
                Select::make('deviceToken')->options(fn () => []),
=======
                Select::make('deviceToken')->options(fn() => []),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 9bd3cd0 (.)
=======
        $filterCallback = function ($item): bool {
            if (!is_object($item)) {
                return false;
            }
            $profile = method_exists($item, 'getRelationValue') ? $item->getRelationValue('profile') : null;
            return is_object($profile);
        };

        $to = $devices->filter($filterCallback)->mapWithKeys($callback)->toArray();

        Assert::isArray($to);

        return $schema
            ->components([
                Select::make('deviceToken')->options(fn() => $to),
>>>>>>> b8140d8 (.)
<<<<<<< HEAD
>>>>>>> da89aab (.)
=======
>>>>>>> 61cfa35 (.)
=======
>>>>>>> 9bd3cd0 (.)
=======
>>>>>>> 895d6b1 (.)
=======
=======
        /**
         * Callback per filtrare i dispositivi.
         */

>>>>>>> ab15d0e (.)
        return $schema
            ->components([
                Select::make('deviceToken')->options(fn () => []),
>>>>>>> 8e43c3e (.)
                TextInput::make('type')->required(),
                TextInput::make('title')->required(),
                TextInput::make('body')->required(),
                Repeater::make('data')->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('value')->required(),
                ]),
            ])
            // ->model($this->getUser())
            ->statePath('notificationData');
    }

    public function sendNotification(): void
    {
        $data = $this->data;
        $deviceToken = $data['deviceToken'] ?? '';

        // Verifichiamo che deviceToken sia una stringa non vuota
        if ($deviceToken === '') {
            Notification::make()
                ->danger()
                ->title('Errore')
                ->body('Token del dispositivo non valido')
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
=======

>>>>>>> 8e43c3e (.)
            return;
        }

        // Verifichiamo che i dati siano del tipo corretto
        $type = $data['type'] ?? '';
        $title = $data['title'] ?? '';
        $body = $data['body'] ?? '';
        $jsonData = isset($data['data']) ? json_encode($data['data']) : '{}';

        // Verifichiamo che jsonData sia una stringa
        $jsonData = $jsonData ?: '{}';

        // Creiamo un array con chiavi non vuote e valori stringa che implementano Stringable
        $pushDataTemp = [];

        // Aggiungiamo i valori all'array solo se non sono vuoti
        // PHPStan sa che queste stringhe non possono essere vuote a questo punto
        $pushDataTemp['type'] = $type;
        $pushDataTemp['title'] = $title;
        $pushDataTemp['body'] = $body;
        // Adding data field (we know jsonData can't be empty due to fallback to '{}' earlier)
        $pushDataTemp['data'] = $jsonData;

        // Verifichiamo che l'array contenga almeno un elemento
        if (count($pushDataTemp) === 0) {
            $pushDataTemp['type'] = 'notification';
        }

        // Creiamo un MessageData object
        // Convertiamo tutti i valori in stringa come richiesto da MessageData
        $sanitizedData = [];
        foreach ($pushDataTemp as $key => $value) {
            // All keys are non-empty strings by this point
            if (is_scalar($value) || is_null($value)) {
                $sanitizedData[$key] = is_string($value) ? $value : ((string) $value);
            } else {
                // Handle non-scalar values (arrays, objects) by converting to JSON
                $sanitizedData[$key] = (string) json_encode($value);
            }
        }
        $messageData = MessageData::fromArray($sanitizedData);

        // Verifichiamo che deviceToken sia una stringa non vuota (per soddisfare il tipo non-empty-string)
        Assert::stringNotEmpty($deviceToken, 'Il token del dispositivo non può essere vuoto');

        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withHighestPossiblePriority()
            ->withData($messageData);

        try {
            // Otteniamo l'istanza di messaging e verifichiamo che sia valida
            /** @var Messaging $messaging */
            $messaging = app('firebase.messaging');
            Assert::isInstanceOf($messaging, Messaging::class, 'Invalid messaging instance');

            $messaging->send($message);
        } catch (Exception $e) {
            dddx([
                'message' => $e->getMessage(),
                'deviceToken' => $deviceToken,
            ]);
        }

        Notification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your client'))
            ->send();
    }

    protected function getForms(): array
    {
        return [
            'notificationForm',
        ];
    }

    protected function getNotificationFormActions(): array
    {
        return [
            Action::make('notificationFormActions')

                ->submit('notificationFormActions'),
        ];
    }

    #[\Override]
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
