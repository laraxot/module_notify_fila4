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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
=======
<<<<<<< HEAD
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
>>>>>>> 9777d1b3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fe4f466 (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
=======
>>>>>>> e0d9c9be (.)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
<<<<<<< HEAD
- [Spatie Packages](https://spatie.be/open-source)
<<<<<<< HEAD
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> cb85c538 (rebase 210)
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9cdf6146 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 3f39ac8b (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 3b4c9907 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 8e5817bc (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 51182e3c (rebase 210)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
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
>>>>>>> 82ae73be (.)
=======
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
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 9777d1b3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 161887a2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> ba564870 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 888799d0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> c6c33175 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 503981fd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 7a2f131f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Spatie Packages](https://spatie.be/open-source)
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
