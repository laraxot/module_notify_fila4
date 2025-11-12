<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
=======
=======
use Filament\Forms\Form;
>>>>>>> 05bc3ad (.)
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Override;
=======
>>>>>>> d2c515f (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
use Filament\Schemas\Schema;
>>>>>>> d2c515f (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Notify\Datas\EmailData;
use Modules\Notify\Datas\SmtpData;
use Modules\Notify\Filament\Clusters\Test;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBasePage;
use Webmozart\Assert\Assert;

=======
use Modules\Xot\Datas\XotData;
=======
>>>>>>> d2c515f (.)
use Modules\Xot\Filament\Pages\XotBasePage;
use Override;
use Webmozart\Assert\Assert;

<<<<<<< HEAD
/**
 * 
 */
>>>>>>> 99ff506 (.)
=======
>>>>>>> d2c515f (.)
class TestSmtpPage extends XotBasePage implements HasForms
{
    use InteractsWithForms;

<<<<<<< HEAD
<<<<<<< HEAD
    public ?array $emailData = [];

    public ?string $error_message = null;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

    protected static ?string $cluster = Test::class;
=======
    public null|array $emailData = [];
=======
    public ?array $emailData = [];
>>>>>>> d2c515f (.)

    public ?string $error_message = null;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.pages.send-email';

<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
>>>>>>> 99ff506 (.)
=======
    protected static ?string $cluster = Test::class;
>>>>>>> d2c515f (.)

    public function mount(): void
    {
        $this->fillForms();
    }

    public function sendEmail(): void
    {
        $data = $this->data;
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

    public function emailForm(Schema $schema): Schema
    {
        return $schema->components([])->model($this->getUser())->statePath('emailData');
    }

    #[\Override]
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
<<<<<<< HEAD
        if (! ($user instanceof Model)) {
=======
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
=======
        if (! ($user instanceof Model)) {
>>>>>>> d2c515f (.)
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

        $this->fill($typedConfig);
    }
}
