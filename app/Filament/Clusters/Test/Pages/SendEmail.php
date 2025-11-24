<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
=======
=======
>>>>>>> 7148d73 (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
class SendEmail extends Page implements HasForms
{
    public array $data = [];

=======
=======
>>>>>>> 7148d73 (.)
/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendEmail extends Page implements HasForms
{
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    use InteractsWithForms;

    // use NavigationLabelTrait;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public null|array $emailData = [];
>>>>>>> 9777d1b (.)
=======
    public null|array $emailData = [];
>>>>>>> 7148d73 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 7148d73 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function sendEmail(): void
    {
        $data = $this->data;
=======
=======
>>>>>>> 7148d73 (.)
    public function emailForm(Schema $schema): Schema
    {
        return $schema
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
            ->model($this->getUser())
            ->statePath('emailData');
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        $email_data = EmailData::from($data);
        // $from_address = config('mail.from.address');

        Mail::to($data['to'])->send(new EmailDataEmail($email_data));

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
            Action::make('emailFormActions')->submit('emailFormActions'),
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
=======
        if (!($user instanceof Model)) {
>>>>>>> 7148d73 (.)
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
        // Form data filled;
=======
        $this->emailForm->fill();
>>>>>>> 75179b8 (.)
=======
        $this->emailForm->fill();
>>>>>>> 7148d73 (.)
    }
}
