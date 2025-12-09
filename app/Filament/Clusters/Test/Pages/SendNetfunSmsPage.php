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
use Filament\Panel;
use Filament\Schemas\Schema;
=======
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Exception;
<<<<<<< HEAD
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property Schema $smsForm
=======
 * @property \Filament\Schemas\Schema $smsForm
>>>>>>> 75179b85 (.)
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
    public ?array $smsData = [];
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Log;
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
>>>>>>> b19cd40 (.)

/**
 * @property \Filament\Schemas\Schema $smsForm
 */
class SendNetfunSmsPage extends XotBasePage
{
<<<<<<< HEAD
    public null|array $smsData = [];
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======

    public ?array $smsData = [];
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';

    protected string $view = 'notify::filament.pages.send-sms';

<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
=======
>>>>>>> 2fc60436 (.)
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
=======
>>>>>>> 82ae73b (.)
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

    /**
     * Get the slug of the page
     *
=======
    protected static ?string $cluster = Test::class;
    
    /**
     * Get the slug of the page
     * 
>>>>>>> b19cd40 (.)
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
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
<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
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
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
    public function smsForm(Schema $schema): Schema
    {
<<<<<<< HEAD
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
=======
        return $schema
            ->components($this->getSmsFormSchema())
            ->model($this->getUser())
            ->statePath('smsData');
>>>>>>> b19cd40 (.)
    }

>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    public function getSmsFormSchema(): array
    {
        return [
            'to' => TextInput::make('to')
                ->label(__('notify::sms.form.to.label'))
                ->tel()
                ->required()
                ->helperText(__('notify::sms.form.to.helper'))
                ->placeholder('+393401234567'),
            'from' => TextInput::make('from')
                ->label(__('notify::sms.form.from.label'))
                ->default(config('app.name', 'Our Platform'))
                ->required()
                ->maxLength(11)
                ->helperText(__('notify::sms.form.from.helper')),
            'body' => Textarea::make('body')
                ->label(__('notify::sms.form.body.label'))
                ->required()
                ->rows(3)
                ->helperText(__('notify::sms.form.body.helper')),
            'provider' => Select::make('provider')
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
         * $smsData->to = $data['to'];
         * $smsData->from = $data['from'];
         * $smsData->body = $data['body'];
         */
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['to'])->notify(new SmsNotification($smsData, ['provider' => $provider]));
=======
        $smsData->to = $data['to'];
        $smsData->from = $data['from'];
        $smsData->body = $data['body'];
        */
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['to'])
                ->notify(new SmsNotification($smsData, ['provider' => $provider]));
>>>>>>> b19cd40 (.)

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
        } catch (Exception $e) {
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
            Action::make('sendSms')->label(__('notify::sms.actions.send'))->submit('sendSms'),
        ];
    }

    #[Override]
=======
            Action::make('sendSms')
                ->label(__('notify::sms.actions.send'))
                ->submit('sendSms'),
        ];
    }

>>>>>>> b19cd40 (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
<<<<<<< HEAD
        if (!($user instanceof Model)) {
=======
=======
>>>>>>> 2fc60436 (.)
<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 82ae73b (.)
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
=======
        if (! $user instanceof Model) {
            throw new Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.');
>>>>>>> b19cd40 (.)
        }

        return $user;
    }
}
