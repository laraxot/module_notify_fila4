<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
=======
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
>>>>>>> 75179b85 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
use Override;
=======
>>>>>>> 75179b85 (.)

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendEmailPage extends XotBasePage
{
    // use NavigationLabelTrait;

<<<<<<< HEAD
    public ?array $emailData = [];
=======
    public null|array $emailData = [];
>>>>>>> 75179b85 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function emailForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, \Filament\Schemas\Components\Component> $formSchema */
        $formSchema = $this->getEmailFormSchema();
        return $schema->components($formSchema)->model($this->getUser())->statePath('emailData');
    }

    /**
     * @return array<string, \Filament\Schemas\Components\Component>
     */
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

=======
        return $schema
            ->components($this->getEmailFormSchema())
<<<<<<< HEAD
=======
=======
    public function emailForm(Form $form): Form
    {
        return $form
            ->schema($this->getEmailFormSchema())
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
            ->model($this->getUser())
            ->statePath('emailData');
    }
    
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

>>>>>>> 9777d1b3 (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

>>>>>>> 75179b85 (.)
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
=======
                
>>>>>>> 75179b85 (.)

                ->submit('emailFormActions'),
        ];
    }

    #[Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b85 (.)
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
