<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
=======
use Filament\Facades\Filament\Schemas\Schema;
>>>>>>> c0c6523 (.)
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
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Exception;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
=======
=======
use Filament\Forms;
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $smsForm
=======
 * @property \Filament\Schemas\Schema $smsForm
>>>>>>> 75179b85 (.)
=======
 * @property \Filament\Schemas\Schema $smsForm
>>>>>>> 75179b85 (.)
 */
class SendNetfunSmsPage extends XotBasePage
{
<<<<<<< HEAD
    public null|array $smsData = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $smsData = [];
=======

    public ?array $smsData = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $smsData = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';

    protected string $view = 'notify::filament.pages.send-sms';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    protected static null|string $cluster = Test::class;

    /**
     * Get the slug of the page
     *
<<<<<<< HEAD
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
=======
=======
=======
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;

/**
 * @property ComponentContainer $smsForm
 */
class SendNetfunSmsPage extends XotBasePage
{

    public ?array $smsData = [];

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';

    protected static string $view = 'notify::filament.pages.send-sms';

>>>>>>> origin/develop
    protected static ?string $cluster = Test::class;
    
    /**
     * Get the slug of the page
     * 
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $cluster = Test::class;

    /**
     * Get the slug of the page
     *
>>>>>>> b93ef594b4 (.)
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
=======
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(): string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        return 'send-netfun-sms-page';
    }

    public function mount(): void
    {
        $this->fillForms();
    }

    protected function getForms(): array
    {
        return [
            'smsForm',
        ];
    }

    protected function fillForms(): void
    {
        $this->smsForm->fill();
    }

<<<<<<< HEAD
    public function smsForm(Schema $schema): Schema
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
        return $schema->schema($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput|\Filament\Forms\Components\Textarea|\Filament\Forms\Components\Select>
     */
=======
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
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
=======
<<<<<<< HEAD
    public function smsForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
=======
        return $schema
            ->components($this->getSmsFormSchema())
            ->model($this->getUser())
            ->statePath('smsData');
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
>>>>>>> b93ef594b4 (.)
=======
    public function smsForm(Form $form): Form
    {
        return $form
            ->schema($this->getSmsFormSchema())
            ->model($this->getUser())
            ->statePath('smsData');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

>>>>>>> 75179b85 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
    public function getSmsFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'to' => TextInput::make('to')
=======
<<<<<<< HEAD
            'to' => TextInput::make('to')
=======
            'to' => Forms\Components\TextInput::make('to')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->label(__('notify::sms.form.to.label'))
                ->tel()
                ->required()
                ->helperText(__('notify::sms.form.to.helper'))
                ->placeholder('+393401234567'),
<<<<<<< HEAD
            'from' => TextInput::make('from')
=======
<<<<<<< HEAD
            'from' => TextInput::make('from')
=======
            'from' => Forms\Components\TextInput::make('from')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->label(__('notify::sms.form.from.label'))
                ->default(config('app.name', 'Our Platform'))
                ->required()
                ->maxLength(11)
                ->helperText(__('notify::sms.form.from.helper')),
<<<<<<< HEAD
            'body' => Textarea::make('body')
=======
<<<<<<< HEAD
            'body' => Textarea::make('body')
=======
            'body' => Forms\Components\Textarea::make('body')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->label(__('notify::sms.form.body.label'))
                ->required()
                ->rows(3)
                ->helperText(__('notify::sms.form.body.helper')),
<<<<<<< HEAD
            'provider' => Select::make('provider')
=======
<<<<<<< HEAD
            'provider' => Select::make('provider')
=======
            'provider' => Forms\Components\Select::make('provider')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ->label(__('notify::sms.form.provider.label'))
                ->options([
                    'netfun' => 'Netfun',
                    'smsfactor' => 'SmsFactory',
                    'twilio' => 'Twilio',
                    'nexmo' => 'Nexmo',
                    'plivo' => 'Plivo',
                    'gammu' => 'Gammu',
                ])
                ->default('netfun')
                ->selectablePlaceholder(false)
                ->required(),
        ];
    }

    public function sendSms(): void
    {
        $data = $this->smsForm->getState();

        $smsData = SmsData::from($data);
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
         * $smsData->to = $data['to'];
         * $smsData->from = $data['from'];
         * $smsData->body = $data['body'];
         */
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['to'])->notify(new SmsNotification($smsData, ['provider' => $provider]));
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        $smsData->to = $data['to'];
        $smsData->from = $data['from'];
        $smsData->body = $data['body'];
        */
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['to'])
                ->notify(new SmsNotification($smsData, ['provider' => $provider]));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['to'])->notify(new SmsNotification($smsData, ['provider' => $provider]));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

            FilamentNotification::make()
                ->success()
                ->title(__('notify::sms.notifications.sent.title'))
                ->body(__('notify::sms.notifications.sent.body'))
                ->send();

            Log::info('SMS inviato con successo', [
                'to' => $data['to'],
                'from' => $data['from'],
                'provider' => $provider,
            ]);
<<<<<<< HEAD
        } catch (Exception $e) {
=======
<<<<<<< HEAD
        } catch (Exception $e) {
=======
        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            Log::error('Errore durante l\'invio dell\'SMS', [
                'error' => $e->getMessage(),
                'to' => $data['to'],
                'from' => $data['from'],
                'provider' => $provider,
            ]);

            FilamentNotification::make()
                ->danger()
                ->title(__('notify::sms.notifications.error.title'))
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getSmsFormActions(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            Action::make('sendSms')->label(__('notify::sms.actions.send'))->submit('sendSms'),
        ];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            Action::make('sendSms')
                ->label(__('notify::sms.actions.send'))
                ->submit('sendSms'),
        ];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
            Action::make('sendSms')->label(__('notify::sms.actions.send'))->submit('sendSms'),
        ];
    }

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
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (! $user instanceof Model) {
            throw new \Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        return $user;
    }
}
