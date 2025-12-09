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
use BackedEnum;
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
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Exception;
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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Emails\SpatieEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendSpatieEmailPage extends XotBasePage
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public null|array $emailData = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)
    protected string $view = 'notify::filament.pages.send-email';
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
=======
=======
    public ?array $emailData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
    protected string $view = 'notify::filament.pages.send-email';
    protected static ?string $cluster = Test::class;
>>>>>>> a12f125f4a (.)
=======
    public null|array $emailData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
    protected string $view = 'notify::filament.pages.send-email';
    protected static null|string $cluster = Test::class;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Modules\Notify\Datas\EmailData;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Contracts\HasForms;
use Modules\Notify\Emails\SpatieEmail;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;

/**
 * @property ComponentContainer $emailForm
 */
class SendSpatieEmailPage extends XotBasePage
{
    public ?array $emailData = [];
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';
    protected static string $view = 'notify::filament.pages.send-email';
    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    protected function getForms(): array
    {
        return [
            'emailForm',
        ];
    }

    protected function fillForms(): void
    {
        // $data = $this->getUser()->attributesToArray();

        // $this->editProfileForm->fill($data);
        $this->emailForm->fill();
    }

<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->schema($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput|\Filament\Forms\Components\Select|\Filament\Forms\Components\RichEditor>
     */
    public function getEmailFormSchema(): array
    {
        return [
            'to' => TextInput::make('to')->email()->required(),
            /*
             * 'subject' => Forms\Components\TextInput::make('subject')
             * ->required(),
             */
            'mail_template_slug' => Select::make('mail_template_slug')
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
            'body_html' => RichEditor::make('body_html')->required(),
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function emailForm(Schema $schema): Schema
    {
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
=======


    public function emailForm(Schema $schema): Schema
    {
        return $schema
            ->components($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
>>>>>>> a12f125f4a (.)
=======
    public function emailForm(Schema $schema): Schema
    {
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
>>>>>>> b93ef594b4 (.)
=======


    public function emailForm(Form $form): Form
    {
        return $form
            ->schema($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    public function getEmailFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            TextInput::make('to')->email()->required(),
            /*
             * Forms\Components\TextInput::make('subject')
             * ->required(),
             */
            Select::make('mail_template_slug')
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
            RichEditor::make('body_html')->required(),
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
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            TextInput::make('to')
                ->email()
                ->required(),
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
            TextInput::make('to')
                ->email()
                ->required(),
=======
            TextInput::make('to')->email()->required(),
>>>>>>> b93ef594b4 (.)
            /*
             * Forms\Components\TextInput::make('subject')
             * ->required(),
             */
            Select::make('mail_template_slug')
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
<<<<<<< HEAD
            RichEditor::make('body_html')
                ->required(),
>>>>>>> a12f125f4a (.)
=======
            RichEditor::make('body_html')->required(),
>>>>>>> b93ef594b4 (.)
=======
            Forms\Components\TextInput::make('to')
                ->email()
                ->required(),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
            /*
            Forms\Components\TextInput::make('subject')
                ->required(),
            */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
            Select::make('mail_template_slug')
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
            RichEditor::make('body_html')
                ->required(),
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
            Forms\Components\Select::make('mail_template_slug')
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
            Forms\Components\RichEditor::make('body_html')
                ->required(),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
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
=======
>>>>>>> 75179b85 (.)
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
        ];
    }

    public function sendEmail(): void
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $data = $this->emailForm->getState();
        /*
         * $email_data = EmailData::from($data);
         *
         * Mail::to($data['to'])->send(
         * new EmailDataEmail($email_data)
         * );
         *
         *
         */
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop

        $data = $this->emailForm->getState();
        /*
        $email_data = EmailData::from($data);

        Mail::to($data['to'])->send(
            new EmailDataEmail($email_data)
        );


        */
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $data = $this->emailForm->getState();
        /*
         * $email_data = EmailData::from($data);
         *
         * Mail::to($data['to'])->send(
         * new EmailDataEmail($email_data)
         * );
         *
         *
         */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $user = $this->getUser();
        $attachments = [
            [
                'path' => public_path('images/avatars/default-3.svg'),
                'as' => 'logo.png',
                'mime' => 'image/png',
            ],
            [
                'path' => public_path('images/avatars/default-3.svg'),
                'as' => 'logo.png',
                'mime' => 'image/png',
            ],
        ];
        //Mail::to($data['to'])->locale('it')->send((new SpatieEmail($user,'due'))->addAttachments($attachments));
        /*
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
         * // Create and send the email
         * $email = new SpatieEmail($user, 'uno');
         * $email->addAttachments($attachments);
         *
         * Mail::to($data['to'])
         * ->locale('it')
         * ->send($email);
         */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mail_template_slug = $data['mail_template_slug'];
        Assert::string($mail_template_slug, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $recordNotification = new RecordNotification($user, $mail_template_slug);
        $notify = $recordNotification->mergeData($data);
=======
        Assert::string($mail_template_slug = $data['mail_template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $notify = new RecordNotification($user, $mail_template_slug);
        $notify->mergeData($data);
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
         // Create and send the email
         $email = new SpatieEmail($user, 'uno');
         $email->addAttachments($attachments);

         Mail::to($data['to'])
             ->locale('it')
             ->send($email);
        */
        Assert::string($mail_template_slug=$data['mail_template_slug']);
        $notify=(new RecordNotification($user,$mail_template_slug))->mergeData($data);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
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
        Assert::string($mail_template_slug = $data['mail_template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $notify = new RecordNotification($user, $mail_template_slug);
        $notify->mergeData($data);
>>>>>>> 75179b85 (.)
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
        Assert::string($mail_template_slug = $data['mail_template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
        $notify = new RecordNotification($user, $mail_template_slug);
        $notify->mergeData($data);
>>>>>>> 75179b85 (.)
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

        Notification::route('mail', $data['to'])
            //->locale('it')
            ->notify($notify);

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        FilamentNotification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your email client'))
            ->send();
    }

    protected function getEmailFormActions(): array
    {
        return [
            Action::make('emailFormActions')->submit('emailFormActions'),
        ];
    }

    #[Override]
<<<<<<< HEAD
=======
=======

=======
>>>>>>> b93ef594b4 (.)
        FilamentNotification::make()
            ->success()
            // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
            ->title(__('check your email client'))
            ->send();
    }

    protected function getEmailFormActions(): array
    {
        return [
            Action::make('emailFormActions')->submit('emailFormActions'),
        ];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======

        FilamentNotification::make()
        ->success()
        // ->title(__('filament-panels::pages/auth/edit-profile.notifications.saved.title'))
        ->title(__('check your email client'))
        ->send();
    }



    protected function getEmailFormActions(): array
    {
        return [
            Action::make('emailFormActions')
                ->submit('emailFormActions'),
        ];
    }

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
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
<<<<<<< HEAD
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
        }

        return $user;
    }
<<<<<<< HEAD
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
}
