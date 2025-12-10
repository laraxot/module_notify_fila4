<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
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
    public static function form(Form $form): Form
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 70175d0c4 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
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
>>>>>>> fbed41ac (.)
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
>>>>>>> laraxot/develop
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

- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Mail Templates](https://github.com/spatie/laravel-database-mail-templates)
- [TinyMCE](https://www.tiny.cloud)
<<<<<<< HEAD
- [Filament Forms](https://filamentphp.com/docs/forms)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
=======
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 49639b815 (.)
=======
=======
>>>>>>> e0d9c9be (.)
>>>>>>> 968ed47cd (.)
=======
>>>>>>> e0836b102 (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
=======
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
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 49639b815 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> e0836b102 (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
>>>>>>> 75179b85 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 75179b85 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 161887a2 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ee18dd92 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d3a8af4d5 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ba564870 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 66453ace (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 888799d0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> c6c33175 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4f042b88 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 503981fd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 36321fcb (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7a2f131f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> fdb24863 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5d49e093a (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> bb00ab64 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 36ac4fc1 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> c8b1c8bf (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 58816034 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9cf0dc90 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 75179b85 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 161887a2 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ee18dd92 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ba564870 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 888799d0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 2a97406c (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> c6c33175 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4f042b88 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 503981fd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 36321fcb (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7a2f131f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 712617d3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13655a7ed (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 903e3e2cd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a0788fa28 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> bb00ab64 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 36ac4fc1 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> c8b1c8bf (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 58816034 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9cf0dc90 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 75179b85 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 9777d1b3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> f963d2c0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 161887a2 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> ba564870 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 66453ace (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 888799d0 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 2a97406c (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> c6c33175 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a115e2aad (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db0bc148f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 503981fd (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 36321fcb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9cb55171f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2641c2944 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 7a2f131f (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
>>>>>>> 712617d3 (.)
=======
- [Filament Forms](https://filamentphp.com/docs/forms)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> db0bc148f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
>>>>>>> 49639b815 (.)
=======
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 13655a7ed (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
>>>>>>> e0836b102 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 5d49e093a (.)
