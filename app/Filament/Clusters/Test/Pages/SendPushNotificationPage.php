<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Kreait\Firebase\Messaging\MessageData;
use Exception;
<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\User\Models\DeviceUser;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
use Modules\Xot\Filament\Pages\XotBasePage;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Modules\Notify\Filament\Clusters\Test;
use Modules\User\Models\DeviceUser;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use Illuminate\Support\Collection;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Stringable;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Modules\Notify\Filament\Clusters\Test;
use Modules\User\Models\DeviceUser;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
use Illuminate\Support\Collection;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

use function Safe\json_encode;

/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 * @property \Filament\Schemas\Schema $notificationForm
 */
class SendPushNotificationPage extends XotBasePage
{
<<<<<<< HEAD
    // use NavigationLabelTrait;

    public null|array $notificationData = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    // use NavigationLabelTrait;

    public null|array $notificationData = [];
=======
=======
 * @property ComponentContainer $notificationForm
 */
class SendPushNotificationPage extends XotBasePage
{
>>>>>>> origin/develop

    // use NavigationLabelTrait;

    public ?array $notificationData = [];
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    // use NavigationLabelTrait;

    public null|array $notificationData = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-push-notification';

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

    // protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-push-notification';

    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
    public function notificationForm(Schema $schema): Schema
=======
<<<<<<< HEAD
    public function notificationForm(Schema $schema): Schema
=======
    public function notificationForm(Form $form): Form
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            // Creiamo la label con gli ultimi 5 caratteri del token
            $tokenSuffix = mb_substr($token, -5);
            $label = $fullName . ' (' . ($robot ?? '') . ') ' . $tokenSuffix;

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            
            // Creiamo la label con gli ultimi 5 caratteri del token
            $tokenSuffix = mb_substr($token, -5);
            $label = $fullName.' ('.($robot ?? '').') '.$tokenSuffix;
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            // Creiamo la label con gli ultimi 5 caratteri del token
            $tokenSuffix = mb_substr($token, -5);
            $label = $fullName . ' (' . ($robot ?? '') . ') ' . $tokenSuffix;

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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

<<<<<<< HEAD
        $to = $devices->filter($filterCallback)->mapWithKeys($callback)->toArray();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $to = $devices->filter($filterCallback)->mapWithKeys($callback)->toArray();
=======
=======
>>>>>>> origin/develop
        $to = $devices
            ->filter($filterCallback)
            ->mapWithKeys($callback)
            ->toArray();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $to = $devices->filter($filterCallback)->mapWithKeys($callback)->toArray();
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

        Assert::isArray($to);

        return $schema
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            ->components([
                Select::make('deviceToken')->options(fn() => $to),
                TextInput::make('type')->required(),
                TextInput::make('title')->required(),
                TextInput::make('body')->required(),
                Repeater::make('data')->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('value')->required(),
                ]),
            ])
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            ->components(
                [
                    Select::make('deviceToken')
                        ->options(function () use ($to): array {
                            return $to;
                        }),
                    TextInput::make('type')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TextInput::make('body')
                        ->required(),
                    Repeater::make('data')
                        ->schema([
                            TextInput::make('name')->required(),
                            TextInput::make('value')->required(),
                        ]),
                ]
            )
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======

        Assert::isArray($to);

        return $form
            ->schema(
                [
                    Forms\Components\Select::make('deviceToken')
                        ->options(function () use ($to): array {
                            return $to;
                        }),
                    Forms\Components\TextInput::make('type')
                        ->required(),
                    Forms\Components\TextInput::make('title')
                        ->required(),
                    Forms\Components\TextInput::make('body')
                        ->required(),
                    Forms\Components\Repeater::make('data')
                        ->schema([
                            Forms\Components\TextInput::make('name')->required(),
                            Forms\Components\TextInput::make('value')->required(),
                        ]),
                ]
            )
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            // ->model($this->getUser())
            ->statePath('notificationData');
    }

    public function sendNotification(): void
    {
        $data = $this->notificationForm->getState();
        $deviceToken = $data['deviceToken'] ?? '';

        // Verifichiamo che deviceToken sia una stringa non vuota
        if ($deviceToken === '') {
            Notification::make()
                ->danger()
                ->title('Errore')
                ->body('Token del dispositivo non valido')
                ->send();
            return;
        }

        // Verifichiamo che i dati siano del tipo corretto
        $type = $data['type'] ?? '';
        $title = $data['title'] ?? '';
        $body = $data['body'] ?? '';
        $jsonData = isset($data['data']) ? json_encode($data['data']) : '{}';
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        // Verifichiamo che jsonData sia una stringa
        $jsonData = $jsonData ?: '{}';

        // Creiamo un array con chiavi non vuote e valori stringa che implementano Stringable
        $pushDataTemp = [];

<<<<<<< HEAD
=======
=======
        
=======

>>>>>>> b93ef594b4 (.)
        // Verifichiamo che jsonData sia una stringa
        $jsonData = $jsonData ?: '{}';

        // Creiamo un array con chiavi non vuote e valori stringa che implementano Stringable
        $pushDataTemp = [];
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
        // Verifichiamo che jsonData sia una stringa
        $jsonData = $jsonData ?: '{}';
        
        // Creiamo un array con chiavi non vuote e valori stringa che implementano Stringable
        $pushDataTemp = [];
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Aggiungiamo i valori all'array solo se non sono vuoti
        // PHPStan sa che queste stringhe non possono essere vuote a questo punto
        $pushDataTemp['type'] = $type;
        $pushDataTemp['title'] = $title;
        $pushDataTemp['body'] = $body;
        // Adding data field (we know jsonData can't be empty due to fallback to '{}' earlier)
        $pushDataTemp['data'] = $jsonData;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Verifichiamo che l'array contenga almeno un elemento
        if (count($pushDataTemp) === 0) {
            $pushDataTemp['type'] = 'notification';
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Creiamo un MessageData object
        // Convertiamo tutti i valori in stringa come richiesto da MessageData
        $sanitizedData = [];
        foreach ($pushDataTemp as $key => $value) {
            // All keys are non-empty strings by this point
            if (is_scalar($value) || is_null($value)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                $sanitizedData[$key] = is_string($value) ? $value : ((string) $value);
            } else {
                // Handle non-scalar values (arrays, objects) by converting to JSON
                $sanitizedData[$key] = (string) json_encode($value);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                $sanitizedData[$key] = is_string($value) ? $value : (string) $value;
            } else {
                // Handle non-scalar values (arrays, objects) by converting to JSON
                $sanitizedData[$key] = (string)json_encode($value);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                $sanitizedData[$key] = is_string($value) ? $value : ((string) $value);
            } else {
                // Handle non-scalar values (arrays, objects) by converting to JSON
                $sanitizedData[$key] = (string) json_encode($value);
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
            }
        }
        $messageData = MessageData::fromArray($sanitizedData);

        // Verifichiamo che deviceToken sia una stringa non vuota (per soddisfare il tipo non-empty-string)
        Assert::stringNotEmpty($deviceToken, 'Il token del dispositivo non può essere vuoto');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withHighestPossiblePriority()
            ->withData($messageData);

<<<<<<< HEAD
=======
=======
=======
            }
        }
        $messageData = \Kreait\Firebase\Messaging\MessageData::fromArray($sanitizedData);

        // Verifichiamo che deviceToken sia una stringa non vuota (per soddisfare il tipo non-empty-string)
        Assert::stringNotEmpty($deviceToken, 'Il token del dispositivo non può essere vuoto');
>>>>>>> origin/develop
        
        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withHighestPossiblePriority()
            ->withData($messageData);
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withHighestPossiblePriority()
            ->withData($messageData);

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        try {
            // Otteniamo l'istanza di messaging e verifichiamo che sia valida
            /** @var Messaging $messaging */
            $messaging = app('firebase.messaging');
            Assert::isInstanceOf($messaging, Messaging::class, 'Invalid messaging instance');
<<<<<<< HEAD

            $messaging->send($message);
        } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
            $messaging->send($message);
        } catch (Exception $e) {
=======
            
            $messaging->send($message);
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
                
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                
=======
                //
>>>>>>> a12f125f4a (.)
=======
                
>>>>>>> b93ef594b4 (.)
=======
                //
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

                ->submit('notificationFormActions'),
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        if (!($user instanceof Model)) {
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        return $user;
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->notificationForm->fill();
    }
}
