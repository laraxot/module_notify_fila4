<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
=======
<<<<<<< HEAD
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
>>>>>>> c8b1c8bf (.)
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Exception;
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
=======
use Filament\Panel;
=======
=======
>>>>>>> 75179b85 (.)
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Exception;
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendAwsEmailPage extends XotBasePage
{
<<<<<<< HEAD
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
=======
=======
>>>>>>> 75179b85 (.)
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendAwsEmailPage extends XotBasePage
{
    public null|array $emailData = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======

    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-envelope';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected string $view = 'notify::filament.pages.send-email';

    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)

    /**
     * Get the slug of the page
     *
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
    {
        return 'send-aws-email-page';
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
        $this->emailForm->fill();
=======
<<<<<<< HEAD
        // $this->emailForm->fill();
        // Form data filled;
=======
=======
>>>>>>> 75179b85 (.)
        $this->emailForm->fill();
    }

    public function emailForm(Schema $schema): Schema
    {
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
        return $schema
            ->components($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
    }

    public function emailForm(Schema $schema): Schema
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
        return $schema->schema($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput|\Filament\Forms\Components\RichEditor|\Filament\Forms\Components\Select|\Filament\Forms\Components\Toggle>
     */
    public function getEmailFormSchema(): array
    {
        return [
            'to' => TextInput::make('to')
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
    }

    /**
     * @return array<string, mixed>
     */
    /** @phpstan-ignore-next-line return.type */
=======
    }

>>>>>>> 75179b85 (.)
    public function getEmailFormSchema(): array
    {
        return [
            TextInput::make('to')
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
            TextInput::make('to')
=======
            Forms\Components\TextInput::make('to')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
                ->label(__('notify::email.form.to.label'))
                ->email()
                ->required()
                ->helperText(__('notify::email.form.to.helper')),
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
            'subject' => TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            'body_html' => RichEditor::make('body_html')
=======
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
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
            Forms\Components\TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            Forms\Components\RichEditor::make('body_html')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
>>>>>>> 2cbbc069 (.)
=======
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
>>>>>>> 7c1c276f (rebase 210)
=======
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
>>>>>>> a335025b (rebase 210)
=======
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
                ->label(__('notify::email.form.body_html.label'))
                ->required()
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('uploads/mail-attachments')
                ->helperText(__('notify::email.form.body_html.helper')),
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
            'template' => Select::make('template')
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
=======
            Select::make('template')
=======
            Select::make('template')
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
            Select::make('template')
=======
            Forms\Components\Select::make('template')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> 3f537838 (.)
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> 3f537838 (.)
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> 3f537838 (.)
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> 3f537838 (.)
=======
            Select::make('template')
>>>>>>> 2cbbc069 (.)
=======
            Select::make('template')
>>>>>>> 7c1c276f (rebase 210)
=======
            Select::make('template')
>>>>>>> a335025b (rebase 210)
=======
            Select::make('template')
>>>>>>> e00d798d (.)
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
                ->label(__('notify::email.form.template.label'))
                ->options([
                    'aws-default' => 'AWS Default',
                    'aws-notification' => 'AWS Notification',
                    'aws-receipt' => 'AWS Receipt',
                    'aws-alert' => 'AWS Alert',
                ])
                ->default('aws-default')
                ->required()
                ->helperText(__('notify::email.form.template.helper')),
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
            'add_attachments' => Toggle::make('add_attachments')
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
=======
            Toggle::make('add_attachments')
=======
            Toggle::make('add_attachments')
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
            Toggle::make('add_attachments')
=======
            Forms\Components\Toggle::make('add_attachments')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 3f537838 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 3f537838 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 3f537838 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 3f537838 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 2cbbc069 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 7c1c276f (rebase 210)
=======
            Toggle::make('add_attachments')
>>>>>>> a335025b (rebase 210)
=======
            Toggle::make('add_attachments')
>>>>>>> e00d798d (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
                ->label(__('notify::email.form.add_attachments.label'))
                ->default(false)
                ->helperText(__('notify::email.form.add_attachments.helper')),
        ];
    }

    public function sendEmail(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $data = $this->emailForm->getState();
=======
<<<<<<< HEAD
        // $data = $this->emailForm->getState();
        $data = $this->data;
=======
        $data = $this->emailForm->getState();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        $data = $this->emailForm->getState();
>>>>>>> 75179b85 (.)

        try {
            $to = is_string($data['to']) ? $data['to'] : '';
            $subject = is_string($data['subject']) ? $data['subject'] : '';
            $bodyHtml = is_string($data['body_html']) ? $data['body_html'] : '';

            $emailData = new EmailData($to, $subject, $bodyHtml);

            // Configurare lo specifico driver AWS SES per questo test
            config(['mail.default' => 'ses']);

            // Invia l'email utilizzando il servizio SES
            Mail::to($to)->send(new EmailDataEmail($emailData));

            FilamentNotification::make()
                ->success()
                ->title(__('notify::email.notifications.sent.title'))
                ->body(__('notify::email.notifications.sent.body'))
                ->send();
        } catch (Exception $e) {
            FilamentNotification::make()
                ->danger()
                ->title(__('notify::email.notifications.error.title'))
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getEmailFormActions(): array
    {
        return [
            Action::make('sendEmail')->label(__('notify::email.actions.send'))->submit('sendEmail'),
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
<<<<<<< HEAD
        if (!($user instanceof Model)) {
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> c8b1c8bf (.)
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b85 (.)
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
        }

        return $user;
    }
}
