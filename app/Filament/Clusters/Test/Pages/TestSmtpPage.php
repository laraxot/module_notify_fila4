<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Form;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Override;
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
=======
>>>>>>> c8b1c8bf (.)
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
use Override;
=======
>>>>>>> b19cd40 (.)
=======
use Override;
>>>>>>> 4e2ebfb (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
<<<<<<< HEAD
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
=======
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
=======
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Notify\Filament\Clusters\Test;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Datas\XotData;
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
use Modules\Xot\Filament\Pages\XotBasePage;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
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
=======
use Webmozart\Assert\Assert;

/**
 * @property ComponentContainer $emailForm
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
 */
=======
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Webmozart\Assert\Assert;

>>>>>>> c8b1c8bf (.)
=======
use Modules\Xot\Datas\XotData;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;
=======
>>>>>>> b19cd40 (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 4e2ebfb (.)
use Webmozart\Assert\Assert;

/**
<<<<<<< HEAD
 * 
 */
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
 * @property \Filament\Schemas\Schema $emailForm
 */
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
class TestSmtpPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $emailData = [];
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
    public ?array $emailData = [];
>>>>>>> f1c9518b (.)

<<<<<<< HEAD
    public null|string $error_message = null;
=======
    public ?string $error_message = null;
=======
    public null|array $emailData = [];

    public null|string $error_message = null;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $emailData = [];

    public null|string $error_message = null;
=======
    public ?array $emailData = [];

    public ?string $error_message = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public null|array $emailData = [];

    public null|string $error_message = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
=======
    public null|array $emailData = [];

    public null|string $error_message = null;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
>>>>>>> ce89c8bb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
    public function sendEmail(): void
    {
        $data = $this->data;
=======
<<<<<<< HEAD
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
>>>>>>> c8b1c8bf (.)
    public function emailForm(Schema $schema): Schema
    {
        Assert::isArray($mail_config = config('mail'));
        $smtpConfig = Arr::get($mail_config, 'mailers.smtp');

        $this->emailData['subject'] = 'test';
        $defaultEmail = XotData::make()->super_admin;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 4e2ebfb (.)
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
            Action::make('emailFormActions')->submit('emailFormActions'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
    public function emailForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var Schema $result */
        $result = $schema->components([])->model($this->getUser())->statePath('emailData');
        return $result;
=======
        return $schema->components([])->model($this->getUser())->statePath('emailData');
>>>>>>> 5fd545e4 (.)
=======
        return $schema->components([])->model($this->getUser())->statePath('emailData');
>>>>>>> 54220b28 (rebase 210)
    }

=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    #[Override]
<<<<<<< HEAD
=======
            Action::make('emailFormActions')

                ->submit('emailFormActions'),
        ];
    }

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento della pagina del profilo.',
            );
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento della pagina del profilo.');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        }

        return $user;
    }

    protected function fillForms(): void
    {
        Assert::isArray($mail_config = config('mail'));
        Assert::isArray($smtpConfig = Arr::get($mail_config, 'mailers.smtp'));
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
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
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 2fc60436 (.)
        $this->fill($typedConfig);
=======
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    }
}
