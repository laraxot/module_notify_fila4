<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
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
>>>>>>> 31f5d28f (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 31f5d28f (.)
=======
    public function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 31f5d28f (.)
=======
    public function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public function form(Form $form): Form
>>>>>>> 6608a1a0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public function form(Form $form): Form
>>>>>>> 23cbbaf5 (.)
=======
    public function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public function form(Form $form): Form
>>>>>>> 909e45af (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public function form(Form $form): Form
>>>>>>> bb7e77c2 (.)
=======
    public function form(Form $form): Form
>>>>>>> 36321fcb (.)
=======
    public function form(Form $form): Form
>>>>>>> b99af5a8 (.)
=======
    public function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public function form(Form $form): Form
>>>>>>> f3086887 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 3d462363 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 54ad93c4 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 6e12a84b (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 545977c8 (rebase 210)
=======
    public function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public function form(Form $form): Form
>>>>>>> 69fa7d37 (.)
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
>>>>>>> 31f5d28f (.)
=======
    public function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public function form(Form $form): Form
>>>>>>> 6608a1a0 (.)
=======
    public function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public function form(Form $form): Form
>>>>>>> 23cbbaf5 (.)
=======
    public function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public function form(Form $form): Form
>>>>>>> 909e45af (.)
=======
    public function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public function form(Form $form): Form
>>>>>>> bb7e77c2 (.)
=======
    public function form(Form $form): Form
>>>>>>> 36321fcb (.)
=======
    public function form(Form $form): Form
>>>>>>> b99af5a8 (.)
=======
    public function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public function form(Form $form): Form
>>>>>>> f3086887 (rebase 210)
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
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 3d462363 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/project_docs/forms)
- [Best Practices SMTP](https://laravel.com/project_docs/mail#smtp-configuration)
>>>>>>> f3086887 (rebase 210)
- [Documentazione Laravel Mail](https://laravel.com/docs/mail)
- [Documentazione Filament Forms](https://filamentphp.com/docs/forms)
- [Best Practices SMTP](https://laravel.com/docs/mail#smtp-configuration)

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
   - Verificare configurazione SMTP 
=======
>>>>>>> 5fd545e4 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 2a97406c (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 909e45af (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f042b88 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> bb7e77c2 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 36321fcb (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> b99af5a8 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 712617d3 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f3086887 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> fdb24863 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4fc21b78 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 9c45d9bd (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 54ad93c4 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> eb62d6cf (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 6e12a84b (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 8c8937e7 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 545977c8 (rebase 210)
=======
   - Verificare configurazione SMTP 
>>>>>>> 36ac4fc1 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
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
   - Verificare configurazione SMTP 
>>>>>>> 31f5d28f (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> ee18dd92 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 6608a1a0 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 66453ace (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 2a97406c (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 909e45af (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 4f042b88 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> bb7e77c2 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 36321fcb (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> b99af5a8 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> 712617d3 (.)
=======
   - Verificare configurazione SMTP 
>>>>>>> f3086887 (rebase 210)
