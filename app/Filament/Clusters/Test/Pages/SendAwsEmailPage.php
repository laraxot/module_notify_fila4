<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
=======
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
>>>>>>> b8140d8 (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Emails\EmailDataEmail;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
use Override;

class SendAwsEmailPage extends XotBasePage
{
    public ?array $emailData = [];
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

/**
 * @property \Filament\Schemas\Schema $emailForm
 */
class SendAwsEmailPage extends XotBasePage
{
    public null|array $emailData = [];
>>>>>>> b8140d8 (.)

<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-envelope';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-envelope';
>>>>>>> 99ff506 (.)

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static ?string $cluster = Test::class;
=======
    protected static null|string $cluster = Test::class;
>>>>>>> b8140d8 (.)

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
        // $this->emailForm->fill();
        // Form data filled;
=======
        $this->emailForm->fill();
    }

    public function emailForm(Schema $schema): Schema
    {
        return $schema->components($this->getEmailFormSchema())->model($this->getUser())->statePath('emailData');
>>>>>>> b8140d8 (.)
    }

    /**
     * @return array<string, mixed>
     */
    /** @phpstan-ignore-next-line return.type */
    public function getEmailFormSchema(): array
    {
        return [
            TextInput::make('to')
                ->label(__('notify::email.form.to.label'))
                ->email()
                ->required()
                ->helperText(__('notify::email.form.to.helper')),
            TextInput::make('subject')
                ->label(__('notify::email.form.subject.label'))
                ->required()
                ->maxLength(150),
            RichEditor::make('body_html')
                ->label(__('notify::email.form.body_html.label'))
                ->required()
                ->fileAttachmentsDisk('public')
                ->fileAttachmentsDirectory('uploads/mail-attachments')
                ->helperText(__('notify::email.form.body_html.helper')),
            Select::make('template')
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
            Toggle::make('add_attachments')
                ->label(__('notify::email.form.add_attachments.label'))
                ->default(false)
                ->helperText(__('notify::email.form.add_attachments.helper')),
        ];
    }

    public function sendEmail(): void
    {
<<<<<<< HEAD
        // $data = $this->emailForm->getState();
        $data = $this->data;
=======
        $data = $this->emailForm->getState();
>>>>>>> b8140d8 (.)

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
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> b8140d8 (.)
            throw new Exception(
                'L\'utente autenticato deve essere un modello Eloquent per consentire l\'aggiornamento del profilo.',
            );
        }

        return $user;
    }
}
