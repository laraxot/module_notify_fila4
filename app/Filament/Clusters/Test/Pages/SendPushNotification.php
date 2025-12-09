<?php

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
=======
>>>>>>> 75179b85 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Kreait\Firebase\Messaging\MessageData;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
<<<<<<< HEAD
=======
=======
>>>>>>> c8b1c8bf (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
=======
use Filament\Schemas\Schema;
<<<<<<< HEAD

=======
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Kreait\Firebase\Messaging\MessageData;
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
=======
>>>>>>> 75179b85 (.)
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
use Filament\Schemas\Schema;
>>>>>>> f1c9518b (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Modules\Notify\Filament\Clusters\Test;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\User\Models\DeviceUser;
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 75179b85 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\User\Models\DeviceUser;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

use function Safe\json_encode;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * @property \Filament\Schemas\Schema $notificationForm
 */
=======
<<<<<<< HEAD
=======
/**
 * 
 */
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
/**
 * @property \Filament\Schemas\Schema $notificationForm
 */
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
/**
 * @property \Filament\Schemas\Schema $notificationForm
 */
>>>>>>> 75179b85 (.)
class SendPushNotification extends Page implements HasForms
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
=======
>>>>>>> 207ac35e (.)
    public null|array $notificationData = [];
=======
<<<<<<< HEAD
    public ?array $notificationData = [];
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> b19cd40 (.)
=======
    public null|array $notificationData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|array $notificationData = [];
>>>>>>> 9777d1b3 (.)

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
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

    protected string $view = 'notify::filament.pages.send-push-notification';

    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
=======
    protected static ?string $cluster = Test::class;
=======
    public null|array $notificationData = [];
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    public ?array $notificationData = [];
=======
    public null|array $notificationData = [];
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $notificationData = [];
=======
    public ?array $notificationData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public null|array $notificationData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $notificationData = [];
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|array $notificationData = [];
>>>>>>> 75179b85 (.)
=======
    public null|array $notificationData = [];
=======
    public ?array $notificationData = [];
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-push-notification';

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
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
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
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function notificationForm(Schema $schema): Schema
=======
<<<<<<< HEAD
    public function form(Schema $schema): Schema
>>>>>>> c8b1c8bf (.)
    {
<<<<<<< HEAD
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

            // Relations & attributes in a Laravel-safe way
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

        /**
         * Callback per filtrare i dispositivi.
         */
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
=======
<<<<<<< HEAD
        /**
         * Callback per filtrare i dispositivi.
         */
=======

        /**
         * Callback per filtrare i dispositivi.
         */

>>>>>>> 99ff506 (.)
        Assert::isArray([]);

        return $schema
            ->components([
<<<<<<< HEAD
                Select::make('deviceToken')->options(fn () => []),
=======
<<<<<<< HEAD
                Select::make('deviceToken')->options(fn() => []),
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 75179b85 (.)
    public function notificationForm(Schema $schema): Schema
    {
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

            // Relations & attributes in a Laravel-safe way
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

        /**
         * Callback per filtrare i dispositivi.
         */
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $data = $this->notificationForm->getState();
=======
<<<<<<< HEAD
        $data = $this->notificationData;
=======
        $data = $this->notificationForm->getState();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        $data = $this->notificationForm->getState();
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======

=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
=======
                
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 207ac35e (.)
                
=======
                //
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
                
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
                
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
                
>>>>>>> 75179b85 (.)
=======
                
=======
                //
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                
>>>>>>> 9777d1b3 (.)

                ->submit('notificationFormActions'),
        ];
    }

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
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        if (!($user instanceof Model)) {
=======
<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
        $this->notificationForm->fill();
=======
<<<<<<< HEAD
        // Form data filled;
=======
        $this->notificationForm->fill();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        $this->notificationForm->fill();
>>>>>>> 75179b85 (.)
    }
}
