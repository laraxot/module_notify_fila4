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
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
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
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
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
>>>>>>> 731b801a8 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
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
- [Laravel Mail](https://laravel.com/docs/mail)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a29a4728 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a115e2aad (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0a5473e16 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c96b91fe (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c188e2a18 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
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
- [Laravel Mail](https://laravel.com/project_docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 4c323e61 (.)
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 116df547 (.)
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
=======
- [Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
- [Spatie Packages](https://spatie.be/open-source) 
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
- [Laravel Mail](https://laravel.com/docs/mail)
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
