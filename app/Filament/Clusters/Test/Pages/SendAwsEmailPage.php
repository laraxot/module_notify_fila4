<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
=======
use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\EmailData;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendAwsEmailPage extends XotBasePage
{
<<<<<<< HEAD
<<<<<<< HEAD
    public null|array $emailData = [];
=======

    public ?array $emailData = [];
>>>>>>> b19cd40 (.)
=======
    public null|array $emailData = [];
>>>>>>> 4e2ebfb (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
    protected static null|string $cluster = Test::class;

    /**
     * Get the slug of the page
     *
<<<<<<< HEAD
=======
    protected static ?string $cluster = Test::class;
    
    /**
     * Get the slug of the page
     * 
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
        $this->emailForm->fill();
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
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
=======
        return $schema
            ->components($this->getEmailFormSchema())
            ->model($this->getUser())
            ->statePath('emailData');
>>>>>>> b19cd40 (.)
=======
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
>>>>>>> 4e2ebfb (.)
    }

    public function getEmailFormSchema(): array
    {
        return [
            TextInput::make('to')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
            TextInput::make('to')
=======
            Forms\Components\TextInput::make('to')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
=======
=======
            Forms\Components\TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            Forms\Components\RichEditor::make('body_html')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
            'template' => Select::make('template')
=======
            Select::make('template')
>>>>>>> 75179b85 (.)
=======
            Select::make('template')
=======
<<<<<<< HEAD
            Select::make('template')
=======
            Forms\Components\Select::make('template')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
            Select::make('template')
>>>>>>> 3f537838 (.)
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
            'add_attachments' => Toggle::make('add_attachments')
=======
            Toggle::make('add_attachments')
>>>>>>> 75179b85 (.)
=======
            Toggle::make('add_attachments')
=======
<<<<<<< HEAD
            Toggle::make('add_attachments')
=======
            Forms\Components\Toggle::make('add_attachments')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
            Toggle::make('add_attachments')
>>>>>>> 3f537838 (.)
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
        $data = $this->emailForm->getState();

        try {
            $to = is_string($data['to']) ? $data['to'] : '';
            $subject = is_string($data['subject']) ? $data['subject'] : '';
            $bodyHtml = is_string($data['body_html']) ? $data['body_html'] : '';

<<<<<<< HEAD
<<<<<<< HEAD
            $emailData = new EmailData($to, $subject, $bodyHtml);
=======
            $emailData = new EmailData(
                $to,
                $subject,
                $bodyHtml
            );
>>>>>>> b19cd40 (.)
=======
            $emailData = new EmailData($to, $subject, $bodyHtml);
>>>>>>> 4e2ebfb (.)

            // Configurare lo specifico driver AWS SES per questo test
            config(['mail.default' => 'ses']);

            // Invia l'email utilizzando il servizio SES
<<<<<<< HEAD
<<<<<<< HEAD
            Mail::to($to)->send(new EmailDataEmail($emailData));
=======
            Mail::to($to)
                ->send(new EmailDataEmail($emailData));
>>>>>>> b19cd40 (.)
=======
            Mail::to($to)->send(new EmailDataEmail($emailData));
>>>>>>> 4e2ebfb (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
            Action::make('sendEmail')->label(__('notify::email.actions.send'))->submit('sendEmail'),
        ];
    }

    #[Override]
<<<<<<< HEAD
=======
            Action::make('sendEmail')
                ->label(__('notify::email.actions.send'))
                ->submit('sendEmail'),
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
=======
>>>>>>> 4e2ebfb (.)
        if (!($user instanceof Model)) {
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        }

        return $user;
    }
}
