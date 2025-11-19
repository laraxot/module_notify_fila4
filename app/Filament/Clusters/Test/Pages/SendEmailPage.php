<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
<<<<<<< HEAD
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
=======
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
>>>>>>> 75179b8 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

/**
<<<<<<< HEAD
 * @property Schema $emailForm
=======
 * @property \Filament\Schemas\Schema $emailForm
>>>>>>> 75179b8 (.)
 */
class SendEmailPage extends XotBasePage
{
    // use NavigationLabelTrait;

<<<<<<< HEAD
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======

    // use NavigationLabelTrait;

    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    // use NavigationLabelTrait;

    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

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

    public function mount(): void
    {
        $this->fillForms();
    }

<<<<<<< HEAD
=======
    public function emailForm(Schema $schema): Schema
    {
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        return $schema
            ->components($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
    }
    
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    public function getEmailFormSchema(): array
    {
        return [
            'section' => Section::make()
                // ->description('Update your account\'s profile information and email address.')
                ->schema([
                    'to' => TextInput::make('to')
                        // ->unique(ignoreRecord: true)
                        ->email()
                        ->required(),
                    'subject' => TextInput::make('subject')->required(),
                    'body_html' => RichEditor::make('body_html')->required(),
                ]),
        ];
    }

    public function sendEmail(): void
    {
        $data = $this->emailForm->getState();
        $email_data = EmailData::from($data);

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
            Action::make('emailFormActions')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
                
=======
                //
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
                
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
                
>>>>>>> 9777d1b (.)

                ->submit('emailFormActions'),
        ];
    }

    #[Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

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
        $this->emailForm->fill();
    }
}
