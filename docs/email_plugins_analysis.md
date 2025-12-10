<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Analisi Plugin Email per Filament - il progetto

## Panoramica

Analisi comparativa dei principali plugin per la gestione email in Filament, con focus sulle funzionalità che possiamo integrare nel nostro sistema.

## Plugin Analizzati

### 1. Filament Error Mailer (hugomyb/filament-error-mailer)
**Punti di Forza:**
- Notifica errori via email
- Integrazione con Filament
- Configurazione semplice

**Limitazioni:**
- Solo per errori
- Funzionalità limitate
- No template personalizzati

### 2. Filament Mails (vormkracht10/filament-mails)
**Punti di Forza:**
- Gestione template
- Preview email
- Test invio

**Limitazioni:**
- No versionamento
- No multilingua
- No statistiche

### 3. Email Templates (visualbuilder/email-templates)
**Punti di Forza:**
- Editor WYSIWYG
- Template responsive
- Preview live

**Limitazioni:**
- Dipendenze esterne
- Performance
- Complessità

### 4. Database Mail (martin-petricko/database-mail)
**Punti di Forza:**
- Template in database
- Multilingua
- Cache

**Limitazioni:**
- Costo
- Limitazioni tecniche
- No versionamento

## Nostra Implementazione

### 1. Caratteristiche Uniche

```php
// Esempio di implementazione avanzata
class MailTemplate extends Model
{
    use HasFactory, SoftDeletes;

    protected $casts = [
        'variables' => 'array',
        'layout' => 'array',
        'is_active' => 'boolean',
    ];

    // Versionamento
    public function versions()
    {
        return $this->hasMany(MailTemplateVersion::class);
    }

    // Statistiche
    public function stats()
    {
        return $this->hasMany(MailStats::class);
    }

    // Cache
    public function getCachedTemplate()
    {
        return Cache::remember(
            "mail_template_{$this->id}",
            now()->addDay(),
            fn() => $this->html_template
        );
    }
}
```

### 2. Miglioramenti Proposti

1. **Sistema di Versionamento**
   - Storico completo modifiche
   - Rollback versioni
   - Confronto versioni
   - Note di cambiamento

2. **Editor Avanzato**
   - WYSIWYG migliorato
   - Supporto componenti
   - Preview multi-device
   - Validazione in tempo reale

3. **Gestione Layout**
   - Layout personalizzabili
   - Componenti riutilizzabili
   - Responsive design
   - Branding dinamico

4. **Analytics**
   - Tracking aperture
   - Click tracking
   - A/B testing
   - Report avanzati

5. **Performance**
   - Cache intelligente
   - Lazy loading
   - Ottimizzazione query
   - Compressione assets

### 3. Integrazione Filament

```php
class MailTemplateResource extends XotBaseResource
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    {
        return $form->schema([
            Card::make()->schema([
                // Editor avanzato
                RichEditor::make('html_template')
                    ->required()
                    ->live()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('preview', $this->renderPreview($state));
                    }),

                // Preview live
                ViewField::make('preview')
                    ->view('notify::mail.preview'),

                // Versionamento
                Repeater::make('versions')
                    ->schema([
                        TextInput::make('version')
                            ->required(),
                        Textarea::make('changes')
                            ->required(),
                    ]),

                // Analytics
                StatsOverview::make([
                    'opens' => fn() => $this->getOpenStats(),
                    'clicks' => fn() => $this->getClickStats(),
                    'conversion' => fn() => $this->getConversionRate(),
                ]),
            ])
        ]);
    }
}
```

### 4. Sistema di Cache

```php
class MailTemplateCache
{
    public function getTemplate(string $key): ?string
    {
        return Cache::tags(['mail_templates'])
            ->remember(
                "template:{$key}",
                now()->addDay(),
                fn() => $this->loadTemplate($key)
            );
    }

    public function invalidate(string $key): void
    {
        Cache::tags(['mail_templates'])->forget("template:{$key}");
    }
}
```

### 5. Analytics e Tracking

```php
class MailAnalytics
{
    public function trackOpen(MailTemplate $template, string $email): void
    {
        $template->stats()->create([
            'email' => $email,
            'event' => 'open',
            'metadata' => [
                'user_agent' => request()->userAgent(),
                'ip' => request()->ip(),
            ],
        ]);
    }

    public function trackClick(MailTemplate $template, string $email, string $url): void
    {
        $template->stats()->create([
            'email' => $email,
            'event' => 'click',
            'metadata' => [
                'url' => $url,
                'user_agent' => request()->userAgent(),
                'ip' => request()->ip(),
            ],
        ]);
    }
}
```

## Vantaggi della Nostra Soluzione

1. **Completezza**
   - Funzionalità complete
   - Integrazione nativa
   - Estensibilità

2. **Performance**
   - Ottimizzazione
   - Cache intelligente
   - Scalabilità

3. **Manutenibilità**
   - Codice pulito
   - Documentazione
   - Test coverage

4. **Sicurezza**
   - Validazione
   - Sanitizzazione
   - Permessi

5. **UX/UI**
   - Interfaccia intuitiva
   - Preview live
   - Feedback immediato

## Roadmap

1. **Fase 1 - Base**
   - [x] Template database
   - [x] Editor base
   - [x] Preview

2. **Fase 2 - Avanzato**
   - [ ] Versionamento
   - [ ] Analytics
   - [ ] A/B testing

3. **Fase 3 - Enterprise**
   - [ ] API REST
   - [ ] Webhook
   - [ ] Integrazioni

## Collegamenti
- [Database Mail System](database-mail-system.md)
- [Mail Queue](database-mail-queue.md)
- [Testing](database-mail-system-tests.md)

## Vedi Anche
- [Filament Documentation](https://filamentphp.com/docs)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
- [Spatie Packages](https://spatie.be/open-source) 
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> ee18dd92 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 66453ace (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 2a97406c (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 98d837b9 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a29a4728 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4f042b88 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4e4a7796 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> c7a4727b (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 712617d3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 116df547 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> fdb24863 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 84082535 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 5b50927d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 36ac4fc1 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 2effe245 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> d45a0226 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> fd1fcc4c (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> cb5f23b0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4f3927d7 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4b544042 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> cccb594f (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> ee18dd92 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 66453ace (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 2a97406c (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 98d837b9 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a29a4728 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4f042b88 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4e4a7796 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> c7a4727b (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 712617d3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 116df547 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> fdb24863 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 84082535 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 5b50927d (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 36ac4fc1 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 2effe245 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> d45a0226 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> fd1fcc4c (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> cb5f23b0 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4f3927d7 (.)
