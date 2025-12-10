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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
# Guida alla Correzione di SendEmail.php

## 🔍 Analisi del Problema

Il file `SendEmail.php` non funziona correttamente per i seguenti motivi:

1. **Configurazione SMTP Mancante**
   - Non utilizza la configurazione SMTP corretta
   - Manca la gestione delle credenziali

2. **Problemi di Implementazione**
   - Non estende `XotBasePage`
   - Manca la gestione degli errori
   - Non utilizza DTO per i dati

## 🛠️ Soluzione

### 1. Configurazione SMTP

Aggiungere nel file `.env`:

```env
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_from_address
MAIL_FROM_NAME="${APP_NAME}"
```

### 2. Modifiche al Codice

```php
<?php

namespace Modules\Notify\App\Filament\Clusters\Test\Pages;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Modules\Notify\App\Data\EmailData;
use Modules\Notify\App\Data\SmtpData;
use Modules\Xot\Filament\Pages\XotBasePage;

class SendEmail extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    protected static ?string $navigationLabel = 'Invia Email';
    protected static ?string $title = 'Invia Email';
    protected static ?string $slug = 'send-email';

    public ?EmailData $emailData = null;
    public ?SmtpData $smtpData = null;

    public function mount(): void
    {
        $this->authorize('view', $this);
        $this->emailData = new EmailData();
        $this->smtpData = new SmtpData();
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b855 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Configurazione SMTP')
                    ->schema([
                        Forms\Components\TextInput::make('smtp.host')
                            ->required()
                            ->label('Host SMTP')
                            ->default(config('mail.mailers.smtp.host')),
                        Forms\Components\TextInput::make('smtp.port')
                            ->required()
                            ->numeric()
                            ->label('Porta SMTP')
                            ->default(config('mail.mailers.smtp.port')),
                        Forms\Components\TextInput::make('smtp.username')
                            ->required()
                            ->label('Username SMTP')
                            ->default(config('mail.mailers.smtp.username')),
                        Forms\Components\TextInput::make('smtp.password')
                            ->required()
                            ->password()
                            ->label('Password SMTP')
                            ->default(config('mail.mailers.smtp.password')),
                        Forms\Components\TextInput::make('smtp.encryption')
                            ->label('Crittografia SMTP')
                            ->default(config('mail.mailers.smtp.encryption')),
                    ]),
                Forms\Components\Section::make('Dettagli Email')
                    ->schema([
                        Forms\Components\TextInput::make('email.to')
                            ->required()
                            ->email()
                            ->label('Destinatario'),
                        Forms\Components\TextInput::make('email.subject')
                            ->required()
                            ->label('Oggetto'),
                        Forms\Components\RichEditor::make('email.body')
                            ->required()
                            ->label('Corpo Email'),
                    ]),
            ]);
    }

    public function sendEmail(): void
    {
        try {
            $data = $this->form->getState();
            
            // Configura SMTP
            config([
                'mail.mailers.smtp.host' => $data['smtp']['host'],
                'mail.mailers.smtp.port' => $data['smtp']['port'],
                'mail.mailers.smtp.username' => $data['smtp']['username'],
                'mail.mailers.smtp.password' => $data['smtp']['password'],
                'mail.mailers.smtp.encryption' => $data['smtp']['encryption'],
            ]);

            // Crea DTO
            $smtpData = SmtpData::from($data['smtp']);
            $emailData = EmailData::from($data['email']);

            // Invia email
            $smtpData->send($emailData);

            Notification::make()
                ->success()
                ->title('Email inviata con successo')
                ->send();
        } catch (\Exception $e) {
            Notification::make()
                ->danger()
                ->title('Errore nell\'invio dell\'email')
                ->body($e->getMessage())
                ->send();
        }
    }
}
```

### 3. Creazione DTO

Creare i file DTO necessari:

```php
// app/Data/EmailData.php
<?php

namespace Modules\Notify\App\Data;

use Spatie\LaravelData\Data;

class EmailData extends Data
{
    public function __construct(
        public string $to,
        public string $subject,
        public string $body,
    ) {
    }
}

// app/Data/SmtpData.php
<?php

namespace Modules\Notify\App\Data;

use Spatie\LaravelData\Data;

class SmtpData extends Data
{
    public function __construct(
        public string $host,
        public int $port,
        public string $username,
        public string $password,
        public ?string $encryption = null,
    ) {
    }

    public function send(EmailData $emailData): void
    {
        // Implementare la logica di invio
        // Utilizzare Mail::to()->send() o un servizio SMTP
    }
}
```

## 📋 Checklist di Verifica

1. **Configurazione**
   - [ ] File `.env` configurato correttamente
   - [ ] Credenziali SMTP valide
   - [ ] Configurazione mail in `config/mail.php`

2. **Implementazione**
   - [ ] DTO creati e configurati
   - [ ] Form implementato correttamente
   - [ ] Gestione errori implementata
   - [ ] Notifiche configurate

3. **Test**
   - [ ] Test connessione SMTP
   - [ ] Test invio email
   - [ ] Verifica feedback utente
   - [ ] Controllo log errori

## 🔗 Collegamenti Utili

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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
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
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a404ea71 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a404ea71 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a404ea71 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a404ea71 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> ca10d6ad (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> febe79e3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a29a4728 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9721a5b2 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 1442e291 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f9ec4f86 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> cccb594f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a404ea71 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> ca10d6ad (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> febe79e3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> a29a4728 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9721a5b2 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 1442e291 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f9ec4f86 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> cccb594f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b855 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)

## ⚠️ Note Importanti

1. **Sicurezza**
   - Non committare mai le credenziali SMTP
   - Utilizzare variabili d'ambiente
   - Implementare rate limiting

2. **Performance**
   - Implementare coda per email
   - Gestire timeout
   - Monitorare utilizzo risorse

3. **Manutenzione**
   - Aggiornare regolarmente le dipendenze
   - Monitorare log errori
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
   - Verificare configurazione SMTP 
>>>>>>> 75179b85 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 75179b85 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 75179b85 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4fc21b78 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> c8b1c8bf (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 9cf0dc90 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 75179b85 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 66453ace (.)
=======
>>>>>>> 4c323e61 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 4e4a7796 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 712617d3 (.)
=======
>>>>>>> 116df547 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4fc21b78 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d45a0226 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> cb5f23b0 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 4b544042 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> c8b1c8bf (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 9cf0dc90 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 75179b85 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 75179b855 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
   - Verificare configurazione SMTP 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
