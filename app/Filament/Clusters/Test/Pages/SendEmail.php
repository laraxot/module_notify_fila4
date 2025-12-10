<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e53a56570 (.)
use Filament\Schemas\Schema;
=======
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
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
use Filament\Schemas\Schema;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
use Filament\Schemas\Schema;
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
=======
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;

<<<<<<< HEAD
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;

>>>>>>> f1c9518b (.)
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
=======
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
use Filament\Schemas\Schema;

>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

<<<<<<< HEAD
/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendEmail extends Page implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    // use NavigationLabelTrait;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
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
 * 
 */
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> e53a56570 (.)
/**
 * 
 */
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> e53a56570 (.)
>>>>>>> f1c9518b (.)
class SendEmail extends Page implements HasForms
{
    public array $data = [];

=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
/**
>>>>>>> c8b1c8bf (.)
=======
/**
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
/**
>>>>>>> c8b1c8bf (.)
=======
/**
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
/**
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
 * @property \Filament\Schemas\Schema $emailForm
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 3f537838 (.)
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendEmail extends Page implements HasForms
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 1487fe812 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|array $emailData = [];
=======
<<<<<<< HEAD
    public ?array $emailData = [];
>>>>>>> f1c9518b (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
=======
>>>>>>> e53a56570 (.)
    public null|array $emailData = [];
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
    public ?array $emailData = [];
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $emailData = [];
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
    public null|array $emailData = [];
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|array $emailData = [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> a12f125f4a (.)
=======
    public null|array $emailData = [];
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
    public null|array $emailData = [];
>>>>>>> 11b43e822 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

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
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
=======
    protected static ?string $cluster = Test::class;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
=======
    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
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
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
    protected static null|string $cluster = Test::class;
=======
>>>>>>> 510809c6f (.)
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
    public ?array $emailData = [];

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.pages.send-email';

    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
>>>>>>> 10292b60a (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
    public function sendEmail(): void
    {
        $data = $this->data;
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
    public function emailForm(Schema $schema): Schema
    {
        return $schema
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
    public function emailForm(Schema $schema): Schema
    {
        return $schema
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
        return $schema
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
            ->components([
                Section::make()
                    // ->description('Update your account\'s profile information and email address.')
                    ->schema([
                        TextInput::make('to')
                            // ->unique(ignoreRecord: true)
                            ->email()
                            ->required(),
                        TextInput::make('subject')->required(),
                        RichEditor::make('body_html')->required(),
                    ]),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
            ->components(
                [
                    Section::make()
                        // ->description('Update your account\'s profile information and email address.')
                        ->schema(
                            [
                                TextInput::make('to')
                                    // ->unique(ignoreRecord: true)
                                    ->email()
                                    ->required(),
                                TextInput::make('subject')
                                    ->required(),
                                RichEditor::make('body_html')
<<<<<<< HEAD
=======
=======
    public function emailForm(Form $form): Form
    {
        return $form
            ->schema(
                [
                    Forms\Components\Section::make()
                        // ->description('Update your account\'s profile information and email address.')
                        ->schema(
                            [
                                Forms\Components\TextInput::make('to')
                                    // ->unique(ignoreRecord: true)
                                    ->email()
                                    ->required(),
                                Forms\Components\TextInput::make('subject')
                                    ->required(),
                                Forms\Components\RichEditor::make('body_html')
>>>>>>> origin/develop
>>>>>>> 510809c6f (.)
                                    ->required(),
                            ]
                        ),
                ]
            )
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
            ->model($this->getUser())
            ->statePath('emailData');
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 1487fe812 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
        $email_data = EmailData::from($data);
        // $from_address = config('mail.from.address');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
=======
=======
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
=======
=======
>>>>>>> origin/develop
>>>>>>> 510809c6f (.)
        Mail::to($data['to'])
            ->send(
                new EmailDataEmail($email_data)
            );
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
>>>>>>> 4e2ebfb (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
        Mail::to($data['to'])->send(new EmailDataEmail($email_data));
>>>>>>> 11b43e822 (.)

        Notification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your email client'))
            ->send();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Action::make('send')
                ->label(__('Send Email'))
                ->icon('heroicon-o-paper-airplane')
                ->color('primary')
                ->action('sendEmail'),
=======
            Action::make('emailFormActions')->submit('emailFormActions'),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Action::make('emailFormActions')->submit('emailFormActions'),
=======
            Action::make('emailFormActions')

                ->submit('emailFormActions'),
>>>>>>> a12f125f4a (.)
=======
            Action::make('emailFormActions')->submit('emailFormActions'),
>>>>>>> b93ef594b4 (.)
=======
            Action::make('emailFormActions')

                ->submit('emailFormActions'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
            Action::make('emailFormActions')->submit('emailFormActions'),
>>>>>>> 11b43e822 (.)
        ];
    }

    protected function getFormActions(): array
    {
        return $this->getEmailFormActions();
    }

=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
            Action::make('emailFormActions')->submit('emailFormActions'),
=======
            Action::make('emailFormActions')

                ->submit('emailFormActions'),
>>>>>>> b19cd40 (.)
=======
            Action::make('emailFormActions')->submit('emailFormActions'),
>>>>>>> 4e2ebfb (.)
        ];
    }

>>>>>>> laraxot/develop
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
        if (!($user instanceof Model)) {
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
        if (!($user instanceof Model)) {
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
=======
        if (!($user instanceof Model)) {
=======
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
        }

        return $user;
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
<<<<<<< HEAD
        $this->emailForm->fill();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // Form data filled;
=======
        $this->emailForm->fill();
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill();
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill();
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
        // Form data filled;
=======
        $this->emailForm->fill();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        $this->emailForm->fill();
>>>>>>> 75179b85 (.)
=======
        // Form data filled;
=======
        $this->emailForm->fill();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        $this->emailForm->fill();
>>>>>>> 75179b85 (.)
=======
        $this->emailForm->fill();
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
    }
}
=======
>>>>>>> 301ad8b44 (.)
