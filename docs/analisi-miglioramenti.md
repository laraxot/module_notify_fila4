<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Analisi e Miglioramenti del Modulo Notify

## Analisi delle Soluzioni Esistenti

### 1. Editor Visuale
Dall'analisi di [Laravel Mail Editor](https://github.com/Qoraiche/laravel-mail-editor) e [Visual Builder Email Templates](https://filamentphp.com/plugins/visual-builder-email-templates), possiamo implementare:

```php
namespace Modules\Notify\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Forms\Components\Builder;

class TemplateResource extends Resource
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
    {
        return $form->schema([
            Builder::make('content')
                ->blocks([
                    Builder\Block::make('text')
                        ->schema([
                            Forms\Components\RichEditor::make('content')
                                ->required()
                        ]),
                    Builder\Block::make('image')
                        ->schema([
                            Forms\Components\FileUpload::make('image')
                                ->required()
                        ])
                ])
        ]);
    }
}
```

### 2. Preview in Browser
Basato su [How to Render Emails in Browser](https://how.dev/answers/how-to-render-emails-in-browser-using-laravel):

```php
namespace Modules\Notify\Http\Controllers;

class PreviewController extends Controller
{
    public function preview($template)
    {
        $rendered = $this->templateService->render($template, [
            'preview' => true,
            'data' => $this->getPreviewData()
        ]);

        return response()->view('notify::preview', [
            'content' => $rendered
        ]);
    }
}
```

### 3. Responsive Design con MJML
Dall'analisi di [MJML](https://mjml.io/), implementiamo:

```php
namespace Modules\Notify\Services;

class MjmlService
{
    public function compile($template)
    {
        $mjml = $this->convertToMjml($template);
        return $this->compileMjml($mjml);
    }

    protected function convertToMjml($template)
    {
        // Conversione del template in MJML
        return view('notify::mjml.wrapper', [
            'content' => $template
        ])->render();
    }
}
```

## Miglioramenti Strutturali

### 1. Sistema di Versioning
```php
namespace Modules\Notify\Models;

class TemplateVersion extends Model
{
    protected $fillable = [
        'template_id',
        'version',
        'content',
        'created_by'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
```

### 2. Gestione Multilingua Avanzata
```php
namespace Modules\Notify\Services;

class LocalizationService
{
    public function translate($template, $locale)
    {
        return $template->translations()
            ->where('locale', $locale)
            ->first();
    }

    public function syncTranslations($template, $locales)
    {
        foreach ($locales as $locale) {
            $template->translations()->updateOrCreate(
                ['locale' => $locale],
                ['content' => $this->translateContent($template, $locale)]
            );
        }
    }
}
```

### 3. Sistema di Analytics
```php
namespace Modules\Notify\Services;

class AnalyticsService
{
    public function track($template, $event)
    {
        return TemplateAnalytics::create([
            'template_id' => $template->id,
            'event' => $event,
            'metadata' => [
                'user_agent' => request()->userAgent(),
                'ip' => request()->ip(),
                'timestamp' => now()
            ]
        ]);
    }
}
```

## Integrazione con Servizi Esterni

### 1. Mailgun Integration
```php
namespace Modules\Notify\Services;

class MailgunService
{
    public function send($template, $data)
    {
        return $this->mailgun->messages()->send(config('services.mailgun.domain'), [
            'from' => $template->from,
            'to' => $data['to'],
            'subject' => $template->subject,
            'template' => $template->mailgun_template,
            'h:X-Mailgun-Variables' => json_encode($data)
        ]);
    }
}
```

### 2. Stripo Integration
```php
namespace Modules\Notify\Services;

class StripoService
{
    public function export($template)
    {
        return $this->stripo->export([
            'html' => $template->content,
            'css' => $template->styles
        ]);
    }
}
```

## Miglioramenti UI/UX

### 1. Editor Avanzato
```php
namespace Modules\Notify\Filament\Resources;

class TemplateResource extends Resource
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
    {
        return $form->schema([
            Forms\Components\Tabs::make('Template')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Content')
                        ->schema([
                            Forms\Components\RichEditor::make('content')
                                ->required()
                        ]),
                    Forms\Components\Tabs\Tab::make('Preview')
                        ->schema([
                            Forms\Components\View::make('notify::preview')
                        ]),
                    Forms\Components\Tabs\Tab::make('Settings')
                        ->schema([
                            Forms\Components\TextInput::make('subject')
                                ->required(),
                            Forms\Components\Select::make('layout')
                                ->options([
                                    'default' => 'Default',
                                    'custom' => 'Custom'
                                ])
                        ])
                ])
        ]);
    }
}
```

### 2. Preview in Tempo Reale
```php
namespace Modules\Notify\Livewire;

class TemplatePreview extends Component
{
    public $template;
    public $content;

    public function updatedContent()
    {
        $this->preview = $this->templateService->render($this->template, [
            'content' => $this->content
        ]);
    }

    public function render()
    {
        return view('notify::livewire.preview');
    }
}
```

## Raccomandazioni per l'Implementazione

1. **Fase 1: Core Features**
   - Implementare sistema di versioning
   - Aggiungere editor visuale
   - Migliorare preview

2. **Fase 2: Integrazioni**
   - Integrare Mailgun
   - Aggiungere supporto MJML
   - Implementare analytics

3. **Fase 3: UI/UX**
   - Migliorare editor
   - Aggiungere preview in tempo reale
   - Implementare drag-and-drop

4. **Fase 4: Performance**
   - Ottimizzare caching
   - Migliorare query
   - Implementare queue

## Note Tecniche

1. **Performance**
   - Utilizzare Redis per caching
   - Implementare lazy loading
   - Ottimizzare query database

2. **Sicurezza**
   - Sanitizzare input
   - Implementare rate limiting
   - Validare template

3. **Manutenibilità**
   - Documentare API
   - Aggiungere test
   - Implementare logging

## Collegamenti Utili

- [MJML Documentation](https://mjml.io/documentation/)
- [Mailgun API](https://documentation.mailgun.com/en/latest/api_reference.html)
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
>>>>>>> d09cb759 (.)
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
>>>>>>> d09cb759 (.)
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
>>>>>>> ee18dd92 (.)
=======
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
>>>>>>> 66453ace (.)
=======
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
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
>>>>>>> 4f042b88 (.)
=======
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
>>>>>>> 36321fcb (.)
=======
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
>>>>>>> 712617d3 (.)
=======
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
>>>>>>> fdb24863 (rebase 210)
=======
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
>>>>>>> 4fc21b78 (rebase 210)
=======
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
>>>>>>> eb62d6cf (rebase 210)
=======
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
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
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
>>>>>>> fd1fcc4c (.)
=======
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
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
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
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
