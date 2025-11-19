<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
>>>>>>> 75179b8 (.)
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
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
>>>>>>> 75179b8 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Notify\Filament\Clusters\Test;
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;
use Webmozart\Assert\Assert;

=======
use Modules\Xot\Datas\XotData;
use Modules\Xot\Filament\Pages\XotBasePage;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
>>>>>>> 75179b8 (.)
class TestSmtpPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

<<<<<<< HEAD
    public ?array $emailData = [];

    public ?string $error_message = null;
=======
    public null|array $emailData = [];

    public null|string $error_message = null;
>>>>>>> 75179b8 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
    public function sendEmail(): void
    {
        $data = $this->data;
=======
    public function emailForm(Schema $schema): Schema
    {
        Assert::isArray($mail_config = config('mail'));
        $smtpConfig = Arr::get($mail_config, 'mailers.smtp');

        $this->emailData['subject'] = 'test';
        $defaultEmail = XotData::make()->super_admin;

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
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
>>>>>>> 75179b8 (.)
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
            Action::make('emailFormActions')->submit('emailFormActions'),
        ];
    }

<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
        return $schema->components([])->model($this->getUser())->statePath('emailData');
    }

=======
>>>>>>> 75179b8 (.)
    #[Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento della pagina del profilo.',
            );
        }

        return $user;
    }

    protected function fillForms(): void
    {
        Assert::isArray($mail_config = config('mail'));
        Assert::isArray($smtpConfig = Arr::get($mail_config, 'mailers.smtp'));

        // Convertiamo l'array generico in un array<string, mixed>
        $typedConfig = [];
        foreach ($smtpConfig as $key => $value) {
            if (is_string($key)) {
                $typedConfig[$key] = $value;
            }
        }

<<<<<<< HEAD
        $this->fill($typedConfig);
=======
        $this->emailForm->fill($typedConfig);
>>>>>>> 75179b8 (.)
    }
}
