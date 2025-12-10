<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
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
>>>>>>> 36321fcb (.)
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
=======
>>>>>>> ee18dd92 (.)
# Database Mail System

## Regola sulle rotte

Il file `routes/web.php` del modulo Notify **deve rimanere vuoto**.
- Tutta la gestione backoffice avviene tramite Filament, che registra le proprie rotte internamente.
- Il frontoffice è gestito tramite Volt/Folio, che ha i propri controller/rotte.
- **Non vanno mai aggiunte rotte custom in questo file**: aggiungerle è un errore grave che rompe la separazione tra backoffice e frontoffice.

**Vedi anche:**
- [structure.md](structure.md#regola-sulle-rotte)
- [grapesjs-filament.md](grapesjs-filament.md#regola-sulle-rotte)

---

## Collegamenti correlati
- [Regola sulle rotte vuote in structure.md](structure.md#regola-sulle-rotte)
- [Regola sulle rotte vuote in grapesjs-filament.md](grapesjs-filament.md#regola-sulle-rotte)

## Panoramica

Un sistema di gestione email basato su database che permette di:
- Memorizzare i template delle email nel database
- Gestire i template tramite interfaccia Filament
- Associare i template a eventi Laravel
- Supportare traduzioni multiple
- Utilizzare un editor WYSIWYG per la creazione dei template
- Gestire variabili dinamiche nei template
- Tracciare lo stato di invio delle email
- Personalizzare layout, branding e allegati
- Gestire log invii, errori e retry

---

## Analisi comparativa plugin & pacchetti

### Plugin/Packages studiati:
- **hugomyb/filament-error-mailer**: invio notifiche errori via mail, log errori, configurazione base.
- **vormkracht10/filament-mails**: gestione e preview email inviate, log, visualizzazione stato, nessun editor template.
- **visualbuilder/email-templates**: editor WYSIWYG per template email integrato in Filament, supporto variabili e preview, multi-lingua, open source.
- **martin-petricko/database-mail**: gestione template email da Filament, associazione eventi, preview, a pagamento.
- **spatie/laravel-database-mail-templates**: rendering mailables da template in DB, variabili, localizzazione, estendibile, no UI.
- **spatie/laravel-mailcoach-mailer**: driver per invio massivo/newsletter, log avanzato, gestione code.
- **soluzioni custom**: guide su logo, branding, allegati, log, fallback blade.

### Limiti delle soluzioni esistenti
- Nessuna soluzione open source integra **tutti** i seguenti aspetti:
  - UI moderna per editing/preview template
  - Supporto completo multi-lingua, variabili, layout personalizzati
  - Log invii dettagliato e gestione errori
  - Branding (logo, header/footer custom) e allegati
  - Associazione flessibile a eventi Laravel e supporto multi-tenant

---

## Proposta architetturale: Database Mail evoluto

### Obiettivi
- UI Filament moderna per CRUD, editing e preview template (base: visualbuilder/email-templates)
- Modello EmailTemplate esteso, compatibile con Spatie (variabili, localizzazione, layout, allegati)
- Event Listener flessibili: trigger su eventi Laravel, selezione template, popolamento variabili, invio
- Rendering con Spatie/laravel-database-mail-templates (fallback blade)
- Log invii: tabella dedicata con stato, destinatario, errori, retry
- Branding: supporto logo, header/footer custom, allegati
- Multi-lingua e multi-tenant ready

### Componenti principali
- **Model**: `EmailTemplate` (estende Spatie\MailTemplate)
- **Filament Resource**: CRUD, editor WYSIWYG, gestione variabili, preview, localizzazione
- **Event Listener**: intercetta eventi, seleziona template, popola variabili, invia email
- **Mailer**: rendering Spatie, fallback blade, gestione allegati
- **Log**: tabella `email_logs` per tracciamento invii, stato, errori
- **Branding**: personalizzazione header/footer/logo via configurazione o editor

### Esempio di flusso
```php
// Listener generico
Event::listen(UserRegistered::class, function ($event) {
    $template = EmailTemplate::active()->forEvent('user_registered')->first();
    if ($template) {
        $template->send([
            'user' => $event->user,
            // altre variabili...
        ]);
    }
});
```

---

## Vantaggi rispetto ai plugin esistenti
- **Open source e componibile**: nessun vendor lock-in, massima estendibilità
- **UI moderna**: editor visuale, preview, gestione variabili e lingue
- **Log avanzato**: stato invio, errori, retry, storico
- **Branding e allegati**: logo, header/footer, allegati integrati
- **Flessibilità eventi**: trigger su qualunque evento Laravel, multi-tenant ready

---

## Roadmap di implementazione
1. Integrare visualbuilder/email-templates come base UI Filament
2. Estendere EmailTemplate model per compatibilità Spatie e gestione variabili/allegati
3. Implementare Event Listener generici e configurabili
4. Aggiungere tabella e UI per log invii email
5. Gestire branding (logo, header, footer) e allegati
6. Scrivere test end-to-end e documentazione esempi
7. Allineare naming, localizzazione, best practice di sicurezza

---

## Link e riferimenti utili
- [visualbuilder/email-templates (GitHub)](https://github.com/visualbuilder/email-templates)
- [spatie/laravel-database-mail-templates (GitHub)](https://github.com/spatie/laravel-database-mail-templates)
- [filamentphp.com/plugins](https://filamentphp.com/plugins)
- [Guida logo email Laravel (Medium)](https://medium.com/@python-javascript-php-html-css/how-to-customize-laravel-email-templates-with-a-logo-3dc862fba8d0)
- [Esempi invio email Spatie](https://laraveldaily.com/code-examples/example/spatie-be/send-email)

---

**Questa architettura permette di avere un sistema di email transazionali robusto, moderno, estendibile e conforme alle best practice Laravel/Filament/Spatie.**

## Architettura

### Models

```php
class EmailTemplate extends Model
{
    use HasTranslations;
    
    protected $fillable = [
        'name',
        'description', 
        'event',
        'subject',
        'body',
        'layout',
        'variables',
        'is_active',
        'delay',
        'cc',
        'bcc'
    ];

    protected $casts = [
        'variables' => 'array',
        'is_active' => 'boolean',
        'delay' => 'integer'
    ];

    public $translatable = [
        'subject',
        'body'
    ];
}

class EmailLog extends Model 
{
    protected $fillable = [
        'template_id',
        'event',
        'recipient',
        'subject',
        'body',
        'variables',
        'status',
        'error',
        'sent_at'
    ];

    protected $casts = [
        'variables' => 'array',
        'sent_at' => 'datetime'
    ];
}
```

### Filament Resources

```php
class EmailTemplateResource extends Resource
{
    protected static ?string $model = EmailTemplate::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 36321fcb (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 36321fcb (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b855 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
    {
        return $form->schema([
            Card::make()->schema([
                TextInput::make('name')
                    ->required(),
                    
                Select::make('event')
                    ->options(EventRegistry::getEvents())
                    ->required(),
                    
                TinyMCE::make('body')
                    ->toolbarButtons([
                        'bold', 'italic', 'link', 
                        'bulletList', 'orderedList',
                        'table', 'image'
                    ])
                    ->fileAttachments()
                    ->required(),
                    
                KeyValue::make('variables')
                    ->keyLabel('Variable')
                    ->valueLabel('Description')
                    ->reorderable(),
                    
                Toggle::make('is_active'),
                
                TextInput::make('delay')
                    ->numeric()
                    ->suffix('minutes'),
                    
                TagsInput::make('cc'),
                TagsInput::make('bcc')
            ])
        ]);
    }
}
```

### Services

```php
class EmailService
{
    public function __construct(
        private EventRegistry $events,
        private TemplateRenderer $renderer,
        private MailQueue $queue
    ) {}

    public function sendMail(string $event, array $data = []): void
    {
        $template = EmailTemplate::where('event', $event)
            ->where('is_active', true)
            ->first();
            
        if (!$template) {
            return;
        }
        
        $variables = $this->events->getVariables($event, $data);
        
        $mail = new TemplateMail(
            $template,
            $variables
        );
        
        if ($template->delay) {
            $this->queue->later(
                $mail,
                now()->addMinutes($template->delay)
            );
        } else {
            $this->queue->send($mail);
        }
    }
}

class TemplateRenderer
{
    public function render(EmailTemplate $template, array $variables): string
    {
        return Blade::render(
            $template->body,
            $variables
        );
    }
}
```

### Events

```php
class EventRegistry
{
    protected array $events = [];
    
    public function register(string $event, array $variables = []): void
    {
        $this->events[$event] = $variables;
    }
    
    public function getEvents(): array
    {
        return array_keys($this->events);
    }
    
    public function getVariables(string $event, array $data): array
    {
        $variables = $this->events[$event] ?? [];
        
        return collect($variables)
            ->mapWithKeys(fn ($var) => [
                $var => data_get($data, $var)
            ])
            ->toArray();
    }
}
```

### Mailable

```php
class TemplateMail extends Mailable
{
    public function __construct(
        private EmailTemplate $template,
        private array $variables
    ) {}
    
    public function build()
    {
        return $this
            ->subject($this->template->subject)
            ->cc($this->template->cc)
            ->bcc($this->template->bcc)
            ->html(
                app(TemplateRenderer::class)->render(
                    $this->template,
                    $this->variables
                )
            );
    }
}
```

## Utilizzo

### Registrazione Eventi

```php
// AppServiceProvider
public function boot()
{
    app(EventRegistry::class)->register(
        'DoctorRegistrationApproved',
        [
            'doctor.name',
            'doctor.email',
            'approval_date',
            'approval_notes'
        ]
    );
}
```

### Invio Email

```php
class ProcessDoctorModerationAction
{
    public function __construct(
        private EmailService $emailService
    ) {}
    
    public function execute(Doctor $doctor, bool $approved): void
    {
        if ($approved) {
            $this->emailService->sendMail(
                'DoctorRegistrationApproved',
                [
                    'doctor' => $doctor,
                    'approval_date' => now(),
                    'approval_notes' => 'Congratulazioni!'
                ]
            );
        }
    }
}
```

### Template Example

```html
<x-mail::message>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======

>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 712617d3 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
# Registrazione Approvata

Gentile {{ $doctor->name }},

La sua registrazione è stata approvata in data {{ $approval_date->format('d/m/Y') }}.

{{ $approval_notes }}

<x-mail::button :url="$url">
Accedi al Portale
</x-mail::button>

Cordiali saluti,<br>
{{ config('app.name') }}
</x-mail::message>
```

## Miglioramenti Rispetto a Database Mail

1. **Traduzioni Native**
   - Supporto per traduzioni multiple dei template
   - Interfaccia di gestione traduzioni integrata
   - Fallback automatico alla lingua di default

2. **Editor Avanzato**
   - TinyMCE con supporto per immagini e file
   - Preview in tempo reale
   - Validazione HTML
   - Supporto per template Markdown

3. **Gestione Eventi**
   - Registry centralizzato degli eventi
   - Validazione automatica delle variabili
   - Documentazione automatica delle variabili disponibili

4. **Logging e Monitoring**
   - Log dettagliato di ogni email inviata
   - Tracciamento dello stato di invio
   - Gestione errori e retry
   - Dashboard di monitoraggio

5. **Performance**
   - Caching dei template compilati
   - Code di invio ottimizzate
   - Batch sending per invii massivi

6. **Sicurezza**
   - Validazione input
   - Sanitizzazione HTML
   - Rate limiting
   - Protezione da spam

## Vedi Anche

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
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
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
