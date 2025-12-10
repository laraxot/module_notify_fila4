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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
# Sistema di Gestione Email Basato su Database - il progetto

## Panoramica

Implementazione personalizzata di un sistema di gestione email basato su database per il progetto, ispirato a Spatie/laravel-database-mail-templates ma con funzionalità aggiuntive e integrazione completa con il nostro ecosistema.

## Caratteristiche Principali

- Template email memorizzati nel database
- Supporto multilingua
- Editor WYSIWYG integrato con Filament
- Sistema di placeholder avanzato
- Versionamento dei template
- Preview in tempo reale
- Test di invio
- Statistiche di apertura/click
- Integrazione con il sistema di code
- Supporto per allegati dinamici
- Gestione layout personalizzati
- Backup automatico dei template

## Struttura Database

```php
// Template Email
Schema::create('notify_mail_templates', function (Blueprint $table) {
    $table->id();
    $table->string('mailable'); // Classe Mailable associata
    $table->string('name');     // Nome template
    $table->string('locale');   // Lingua (it, en, etc.)
    $table->text('html_template');
    $table->text('text_template')->nullable();
    $table->json('variables')->nullable(); // Variabili disponibili
    $table->json('layout')->nullable();    // Layout personalizzato
    $table->boolean('is_active')->default(true);
    $table->timestamps();
    $table->softDeletes();
});

// Versioni Template
Schema::create('notify_mail_template_versions', function (Blueprint $table) {
    $table->id();
    $table->foreignId('template_id')->constrained('notify_mail_templates');
    $table->text('html_template');
    $table->text('text_template')->nullable();
    $table->string('created_by');
    $table->text('change_notes')->nullable();
    $table->timestamps();
});

// Statistiche Invio
Schema::create('notify_mail_stats', function (Blueprint $table) {
    $table->id();
    $table->foreignId('template_id')->constrained('notify_mail_templates');
    $table->string('email');
    $table->timestamp('sent_at');
    $table->timestamp('opened_at')->nullable();
    $table->json('clicked_links')->nullable();
    $table->string('status'); // sent, delivered, opened, clicked, bounced
    $table->json('metadata')->nullable();
});
```

## Componenti del Sistema

### 1. Template Manager

```php
namespace Modules\Notify\Services;

class MailTemplateManager
{
    public function getTemplate(string $mailable, string $locale = null): ?MailTemplate
    {
        $locale = $locale ?? app()->getLocale();
        return MailTemplate::where('mailable', $mailable)
            ->where('locale', $locale)
            ->where('is_active', true)
            ->first();
    }

    public function renderTemplate(MailTemplate $template, array $data): string
    {
        // Rendering con Blade + gestione placeholder
        return view()
            ->make('notify::mail.template', [
                'content' => $template->html_template,
                'layout' => $template->layout,
                'data' => $data
            ])
            ->render();
    }
}
```

### 2. Trait per Mailables

```php
namespace Modules\Notify\Traits;

trait UseDatabaseTemplate
{
    public function build()
    {
        $template = app(MailTemplateManager::class)
            ->getTemplate(static::class);

        if (!$template) {
            return parent::build();
        }

        return $this->view('notify::mail.template')
            ->with([
                'content' => $template->html_template,
                'layout' => $template->layout,
                'data' => $this->data
            ]);
    }
}
```

### 3. Filament Resource

```php
namespace Modules\Notify\Filament\Resources;

class MailTemplateResource extends XotBaseResource
{
    protected static ?string $model = MailTemplate::class;

<<<<<<< HEAD
    public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
    public static function form(Form $form): Form
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
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
    {
        return $form->schema([
            Card::make()->schema([
                TextInput::make('name')
                    ->required(),
                Select::make('mailable')
                    ->options(static::getMailableClasses())
                    ->required(),
                Select::make('locale')
                    ->options(static::getAvailableLocales())
                    ->required(),
                RichEditor::make('html_template')
                    ->required()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'link',
                        'orderedList',
                        'unorderedList',
                        'h2',
                        'h3',
                    ]),
                Toggle::make('is_active')
                    ->default(true),
            ])
        ]);
    }
}
```

## Utilizzo

### 1. Creazione Template

```php
use Modules\Notify\Models\MailTemplate;

MailTemplate::create([
    'mailable' => WelcomeEmail::class,
    'name' => 'Welcome Email',
    'locale' => 'it',
    'html_template' => '<h1>Benvenuto {{ $user->name }}!</h1>',
    'variables' => ['user' => 'App\Models\User'],
]);
```

### 2. Utilizzo in Mailable

```php
use Modules\Notify\Traits\UseDatabaseTemplate;

class WelcomeEmail extends Mailable
{
    use UseDatabaseTemplate;

    public function __construct(public User $user)
    {
        //
    }
}
```

### 3. Invio Email

```php
Mail::to($user)->send(new WelcomeEmail($user));
```

## Best Practices

1. **Versionamento Template**
   - Mantenere storico modifiche
   - Possibilità di rollback
   - Note di cambiamento

2. **Testing**
   - Test automatici per rendering
   - Validazione variabili
   - Preview multi-device

3. **Performance**
   - Cache dei template
   - Ottimizzazione query
   - Code per invio massivo

4. **Sicurezza**
   - Sanitizzazione input
   - Escape variabili
   - Protezione XSS

## Integrazione con Altri Moduli

### 1. Module Patient
```php
// Esempio notifica appuntamento
class AppointmentReminder extends Mailable
{
    use UseDatabaseTemplate;

    public function __construct(public Appointment $appointment)
    {
        //
    }
}
```

### 2. Module Dental
```php
// Esempio notifica trattamento
class TreatmentComplete extends Mailable
{
    use UseDatabaseTemplate;

    public function __construct(public Treatment $treatment)
    {
        //
    }
}
```

## Comandi Artisan

```bash
<<<<<<< HEAD
<<<<<<< HEAD
=======

















>>>>>>> 5d933abf (.)
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
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======

>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
# Gestione template
php artisan notify:mail-template:list
php artisan notify:mail-template:create
php artisan notify:mail-template:update
php artisan notify:mail-template:delete

# Utilità
php artisan notify:mail-template:export
php artisan notify:mail-template:import
php artisan notify:mail-template:test
```

## Roadmap

1. **Fase 1 - Base**
   - [x] Template database
   - [x] Editor WYSIWYG
   - [x] Supporto multilingua

2. **Fase 2 - Avanzato**
   - [ ] A/B Testing
   - [ ] Analytics avanzate
   - [ ] Template condizionali

3. **Fase 3 - Enterprise**
   - [ ] API REST
   - [ ] Webhook
   - [ ] Integrazioni esterne

## Troubleshooting

### Problemi Comuni

1. **Template non trovato**
   - Verificare mailable class
   - Controllare locale
   - Verificare is_active

2. **Variabili non renderizzate**
   - Controllare sintassi
   - Verificare escape
   - Debug dati passati

3. **Performance**
   - Ottimizzare query
   - Implementare cache
   - Monitorare tempi

## Collegamenti
- [Notify Module](../README.md)
- [Email Templates](email-templates.md)
- [Mail Queue](mail-queue.md)

## Vedi Anche
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
- [Spatie Packages](https://spatie.be/open-source)
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
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9777d1b3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> f963d2c0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 75179b85 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9777d1b3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> f963d2c0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 75179b85 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9777d1b3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> f963d2c0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 161887a2 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ee18dd92 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ba564870 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 66453ace (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 888799d0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 2a97406c (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> c6c33175 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4f042b88 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 503981fd (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 36321fcb (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7a2f131f (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 712617d3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> fdb24863 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> bb00ab64 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 36ac4fc1 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> c8b1c8bf (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 58816034 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9cf0dc90 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 75179b85 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9777d1b3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> f963d2c0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 161887a2 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ee18dd92 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ba564870 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 66453ace (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 888799d0 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 2a97406c (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> c6c33175 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4f042b88 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 503981fd (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 36321fcb (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7a2f131f (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 712617d3 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> fdb24863 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> bb00ab64 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 36ac4fc1 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> c8b1c8bf (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 58816034 (.)
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
- [Spatie Packages](https://spatie.be/open-source)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 1b6ddbbc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> 6e2169a3 (.)
