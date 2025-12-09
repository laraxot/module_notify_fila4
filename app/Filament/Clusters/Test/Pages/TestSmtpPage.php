<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
<<<<<<< HEAD
use Override;
=======
>>>>>>> b19cd40 (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> b19cd40 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;
=======
>>>>>>> b19cd40 (.)
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * 
=======
 * @property \Filament\Schemas\Schema $emailForm
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
=======
use Webmozart\Assert\Assert;

/**
 * @property ComponentContainer $emailForm
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
 * @property \Filament\Schemas\Schema $emailForm
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
 * @property \Filament\Schemas\Schema $emailForm
>>>>>>> 75179b85 (.)
 */
class TestSmtpPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

<<<<<<< HEAD
    public null|array $emailData = [];

    public null|string $error_message = null;
=======
    public ?array $emailData = [];

    public ?string $error_message = null;
>>>>>>> b19cd40 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function sendEmail(): void
    {
        $data = $this->data;
=======
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
    public function emailForm(Schema $schema): Schema
    {
        Assert::isArray($mail_config = config('mail'));
        $smtpConfig = Arr::get($mail_config, 'mailers.smtp');

        $this->emailData['subject'] = 'test';
        $defaultEmail = XotData::make()->super_admin;

<<<<<<< HEAD
        return $schema->components([
            Section::make('SMTP')
                ->schema([
                    TextInput::make('host'),
                    // ->default($smtpConfig['host'])
                    TextInput::make('port')->numeric(),
                    // ->default($smtpConfig['port'])
                    TextInput::make('username'),
                    // ->default($smtpConfig['username'])
                    TextInput::make('password'),
                    // ->default($smtpConfig['password'])
                    TextInput::make('encryption'),
                    // ->default($smtpConfig['encryption'])
                ])
                ->columns(3),
            Section::make('MAIL')
                ->schema([
                    TextInput::make('from_email')
                        // ->default(config('mail.from.address', $defaultEmail))
                        ->email()
                        ->required(),
                    TextInput::make('from'),
                    // ->default(config('mail.from.name'))
                    TextInput::make('to')
                        // ->default($defaultEmail)
                        ->email()
                        ->required(),
                    TextInput::make('subject')->default('test')->required(),
                    RichEditor::make('body_html')
                        ->default('test body')
                        ->required()
                        ->columnSpanFull(),
                ])
                ->columns(3),
        ])->statePath('emailData');
=======
        return $schema
            ->components(
                [
                    Section::make('SMTP')
                        ->schema(
                            [
                                TextInput::make('host')
                                // ->default($smtpConfig['host'])
                                ,
                                TextInput::make('port')
                                    ->numeric()
                                // ->default($smtpConfig['port'])
                                ,
                                TextInput::make('username')
                                // ->default($smtpConfig['username'])
                                ,
                                TextInput::make('password')
                                // ->default($smtpConfig['password'])
                                ,
                                TextInput::make('encryption')
                                // ->default($smtpConfig['encryption'])
                                ,
                            ]
                        )->columns(3),
                    Section::make('MAIL')
                        ->schema(
                            [
                                TextInput::make('from_email')
                                    // ->default(config('mail.from.address', $defaultEmail))
                                    ->email()
                                    ->required(),
                                TextInput::make('from')
                                // ->default(config('mail.from.name'))
                                ,
                                TextInput::make('to')
                                    // ->default($defaultEmail)
                                    ->email()
                                    ->required(),
                                TextInput::make('subject')
                                    ->default('test')
                                    ->required(),
                                RichEditor::make('body_html')
                                    ->default('test body')
                                    ->required()
                                    ->columnSpanFull(),
                            ]
                        )->columns(3),
                ]
            )
            ->statePath('emailData');
>>>>>>> b19cd40 (.)
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
        $smtp = SmtpData::from($data);
        $emailData = EmailData::from($data);
        // dddx([
        //    'a' => $emailData,
        // 'b' => EmailData::make(),
        // ]);
        $smtp->send($emailData);

        Notification::make()
            ->success()
            ->title(__('Controlla il tuo client di posta'))
            ->send();
    }

    protected function getForms(): array
    {
        return ['emailForm'];
    }

    protected function getEmailFormActions(): array
    {
        return [
<<<<<<< HEAD
            Action::make('emailFormActions')->submit('emailFormActions'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
        return $schema->components([])->model($this->getUser())->statePath('emailData');
    }

=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    #[Override]
=======
            Action::make('emailFormActions')

                ->submit('emailFormActions'),
        ];
    }

>>>>>>> b19cd40 (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
        if (!($user instanceof Model)) {
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento della pagina del profilo.',
            );
=======
        if (! $user instanceof Model) {
            throw new Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento della pagina del profilo.');
>>>>>>> b19cd40 (.)
        }

        return $user;
    }

    protected function fillForms(): void
    {
        Assert::isArray($mail_config = config('mail'));
        Assert::isArray($smtpConfig = Arr::get($mail_config, 'mailers.smtp'));
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        // Convertiamo l'array generico in un array<string, mixed>
        $typedConfig = [];
        foreach ($smtpConfig as $key => $value) {
            if (is_string($key)) {
                $typedConfig[$key] = $value;
            }
        }
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->fill($typedConfig);
=======
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
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
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
    }
}
