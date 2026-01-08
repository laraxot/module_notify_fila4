<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Override;

/**
 * @property \Filament\Schemas\Schema $smsForm
 */
class SendNetfunSmsPage extends XotBasePage
{
    public ?array $smsData = [];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 99ff506 (.)
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> d2d07aa (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> b586b08 (.)
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 65a883d (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 944ccc8 (.)
=======
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 75c16f6 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 5d44317 (.)

    protected string $view = 'notify::filament.pages.send-sms';

    protected static ?string $cluster = Test::class;

    /**
     * Get the slug of the page
     *
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
    public function smsForm(Schema $schema): Schema
    {
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput|\Filament\Forms\Components\Textarea|\Filament\Forms\Components\Select>
     */
<<<<<<< HEAD
=======
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
>>>>>>> ddee9d751 (.)
    public function getSmsFormSchema(): array
    {
        return [
            'recipient' => TextInput::make('recipient')
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
        $provider = $data['provider'] ?? 'netfun';

        try {
            Notification::route('sms', $data['recipient'])->notify(new SmsNotification($smsData, ['provider' => $provider]));

            FilamentNotification::make()
                ->success()
                ->title(__('notify::sms.notifications.sent.title'))
                ->body(__('notify::sms.notifications.sent.body'))
                ->send();

            Log::info('SMS inviato con successo', [
                'recipient' => $data['recipient'],
                'from' => $data['from'],
                'provider' => $provider,
            ]);
        } catch (Exception $e) {
            Log::error('Errore durante l\'invio dell\'SMS', [
                'error' => $e->getMessage(),
                'recipient' => $data['recipient'],
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
            Action::make('sendSms')->label(__('notify::sms.actions.send'))->submit('sendSms'),
        ];
    }

    #[Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

        if (! ($user instanceof Model)) {
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
        }

        return $user;
    }
}
