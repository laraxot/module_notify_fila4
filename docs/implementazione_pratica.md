<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Implementazione Pratica del Modulo Notify

## 1. Setup Iniziale

### 1.1 Installazione Dipendenze
```bash
composer require spatie/laravel-mail-templates
composer require mjml/mjml-php
composer require mailgun/mailgun-php
```

### 1.2 Configurazione Base
```php
// config/mail-templates.php
return [
    'default_layout' => 'notify::layouts.default',
    'cache' => [
        'enabled' => true,
        'ttl' => 3600
    ],
    'mjml' => [
        'app_id' => env('MJML_APP_ID'),
        'secret_key' => env('MJML_SECRET_KEY')
    ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET')
    ]
];
```

## 2. Struttura del Modulo

### 2.1 Models
```php
namespace Modules\Notify\Models;

class Template extends Model
{
    protected $fillable = [
        'name',
        'subject',
        'content',
        'layout',
        'is_active',
        'version'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'version' => 'integer'
    ];

    public function versions()
    {
        return $this->hasMany(TemplateVersion::class);
    }

    public function translations()
    {
        return $this->hasMany(TemplateTranslation::class);
    }

    public function analytics()
    {
        return $this->hasMany(TemplateAnalytics::class);
    }
}

class TemplateVersion extends Model
{
    protected $fillable = [
        'template_id',
        'version',
        'content',
        'created_by',
        'changes'
    ];

    protected $casts = [
        'changes' => 'array'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}

class TemplateTranslation extends Model
{
    protected $fillable = [
        'template_id',
        'locale',
        'content',
        'subject'
    ];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }
}
```

### 2.2 Controllers
```php
namespace Modules\Notify\Http\Controllers;

class TemplateController extends Controller
{
    protected $templateService;
    protected $mjmlService;
    protected $mailgunService;

    public function __construct(
        TemplateService $templateService,
        MjmlService $mjmlService,
        MailgunService $mailgunService
    ) {
        $this->templateService = $templateService;
        $this->mjmlService = $mjmlService;
        $this->mailgunService = $mailgunService;
    }

    public function index()
    {
        $templates = Template::with(['translations', 'versions'])
            ->latest()
            ->paginate();

        return view('notify::templates.index', compact('templates'));
    }

    public function create()
    {
        return view('notify::templates.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'layout' => 'required|string',
            'is_active' => 'boolean'
        ]);

        $template = $this->templateService->create($validated);

        return redirect()
            ->route('notify.templates.show', $template)
            ->with('success', 'Template created successfully.');
    }

    public function show(Template $template)
    {
        $template->load(['translations', 'versions', 'analytics']);

        return view('notify::templates.show', compact('template'));
    }

    public function edit(Template $template)
    {
        return view('notify::templates.edit', compact('template'));
    }

    public function update(Request $request, Template $template)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'layout' => 'required|string',
            'is_active' => 'boolean'
        ]);

        $template = $this->templateService->update($template, $validated);

        return redirect()
            ->route('notify.templates.show', $template)
            ->with('success', 'Template updated successfully.');
    }

    public function destroy(Template $template)
    {
        $this->templateService->delete($template);

        return redirect()
            ->route('notify.templates.index')
            ->with('success', 'Template deleted successfully.');
    }

    public function preview(Template $template)
    {
        $preview = $this->templateService->preview($template);

        return view('notify::templates.preview', compact('preview'));
    }

    public function send(Request $request, Template $template)
    {
        $validated = $request->validate([
            'to' => 'required|email',
            'data' => 'array'
        ]);

        $this->mailgunService->send($template, $validated);

        return redirect()
            ->route('notify.templates.show', $template)
            ->with('success', 'Email sent successfully.');
    }
}
```

### 2.3 Services
```php
namespace Modules\Notify\Services;

class TemplateService
{
    protected $mjmlService;
    protected $cache;

    public function __construct(MjmlService $mjmlService)
    {
        $this->mjmlService = $mjmlService;
        $this->cache = app('cache');
    }

    public function create(array $data)
    {
        $template = Template::create($data);

        $this->createVersion($template, $data['content']);

        return $template;
    }

    public function update(Template $template, array $data)
    {
        $template->update($data);

        if (isset($data['content'])) {
            $this->createVersion($template, $data['content']);
        }

        $this->cache->forget("template.{$template->id}");

        return $template;
    }

    public function delete(Template $template)
    {
        $template->delete();
        $this->cache->forget("template.{$template->id}");
    }

    public function preview(Template $template)
    {
        return $this->mjmlService->compile($template->content);
    }

    protected function createVersion(Template $template, string $content)
    {
        $version = $template->versions()->count() + 1;

        $changes = $template->versions()->latest()->first()
            ? $this->getChanges($template->versions()->latest()->first()->content, $content)
            : null;

        return $template->versions()->create([
            'version' => $version,
            'content' => $content,
            'created_by' => auth()->id(),
            'changes' => $changes
        ]);
    }

    protected function getChanges(string $old, string $new)
    {
        // Implementazione diff
        return [
            'added' => $this->getAddedLines($old, $new),
            'removed' => $this->getRemovedLines($old, $new),
            'modified' => $this->getModifiedLines($old, $new)
        ];
    }
}

class MjmlService
{
    protected $mjml;
    protected $options;

    public function __construct()
    {
        $this->mjml = new \Mjml\Mjml();
        $this->options = [
            'minify' => true,
            'beautify' => false,
            'validationLevel' => 'strict'
        ];
    }

    public function compile($template)
    {
        try {
            $mjml = $this->convertToMjml($template);
            $result = $this->mjml->render($mjml, $this->options);
            
            return [
                'html' => $result->html,
                'errors' => $result->errors
            ];
        } catch (\Exception $e) {
            Log::error('MJML compilation failed', [
                'error' => $e->getMessage(),
                'template' => $template
            ]);
            throw $e;
        }
    }

    protected function convertToMjml($template)
    {
        return view('notify::mjml.wrapper', [
            'content' => $template,
            'styles' => $this->extractStyles($template),
            'components' => $this->extractComponents($template)
        ])->render();
    }
}

class MailgunService
{
    protected $mailgun;
    protected $domain;
    protected $analytics;

    public function __construct()
    {
        $this->mailgun = new \Mailgun\Mailgun(config('services.mailgun.secret'));
        $this->domain = config('services.mailgun.domain');
        $this->analytics = new MailgunAnalytics();
    }

    public function send($template, $data)
    {
        try {
            $result = $this->mailgun->messages()->send($this->domain, [
                'from' => $template->from,
                'to' => $data['to'],
                'subject' => $template->subject,
                'template' => $template->mailgun_template,
                'h:X-Mailgun-Variables' => json_encode($data),
                'o:tracking' => true,
                'o:tracking-clicks' => true,
                'o:tracking-opens' => true
            ]);

            $this->analytics->track($template, $result);

            return $result;
        } catch (\Exception $e) {
            Log::error('Mailgun send failed', [
                'error' => $e->getMessage(),
                'template' => $template,
                'data' => $data
            ]);
            throw $e;
        }
    }
}
```

## 3. Integrazione con Filament

### 3.1 Resources
```php
namespace Modules\Notify\Filament\Resources;

use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;

class TemplateResource extends Resource
{
    protected static ?string $model = Template::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    {
        return $form->schema([
            Forms\Components\Tabs::make('Template')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('Content')
                        ->schema([
                            Forms\Components\TextInput::make('name')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('subject')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\Builder::make('content')
                                ->blocks([
                                    Builder\Block::make('text')
                                        ->schema([
                                            Forms\Components\RichEditor::make('content')
                                                ->required()
                                                ->toolbarButtons([
                                                    'bold',
                                                    'italic',
                                                    'link',
                                                    'bulletList',
                                                    'orderedList'
                                                ])
                                        ]),
                                    Builder\Block::make('image')
                                        ->schema([
                                            Forms\Components\FileUpload::make('image')
                                                ->required()
                                                ->image()
                                                ->imageResizeMode('cover')
                                                ->imageCropAspectRatio('16:9')
                                                ->imageResizeTargetWidth('1920')
                                                ->imageResizeTargetHeight('1080')
                                        ])
                                ])
                        ]),
                    Forms\Components\Tabs\Tab::make('Preview')
                        ->schema([
                            Forms\Components\View::make('notify::preview')
                                ->livewire(TemplatePreview::class)
                        ]),
                    Forms\Components\Tabs\Tab::make('Settings')
                        ->schema([
                            Forms\Components\Select::make('layout')
                                ->options([
                                    'default' => 'Default',
                                    'custom' => 'Custom'
                                ])
                                ->required(),
                            Forms\Components\Toggle::make('is_active')
                                ->label('Active')
                                ->default(true)
                        ])
                ])
        ]);
    }

    public static function table(Tables $table): Tables
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('subject')
                ->searchable()
                ->sortable(),
            Tables\Columns\IconColumn::make('is_active')
                ->boolean()
                ->sortable(),
            Tables\Columns\TextColumn::make('version')
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('layout')
                ->options([
                    'default' => 'Default',
                    'custom' => 'Custom'
                ]),
            Tables\Filters\TernaryFilter::make('is_active')
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
            Tables\Actions\Action::make('preview')
                ->url(fn (Template $record): string => route('notify.templates.preview', $record))
                ->openUrlInNewTab()
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\VersionsRelationManager::class,
            RelationManagers\TranslationsRelationManager::class,
            RelationManagers\AnalyticsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTemplates::route('/'),
            'create' => Pages\CreateTemplate::route('/create'),
            'edit' => Pages\EditTemplate::route('/{record}/edit'),
        ];
    }
}
```

### 3.2 Actions
```php
namespace Modules\Notify\Filament\Resources\TemplateResource\Actions;

use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Model;

class PreviewAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->icon('heroicon-o-eye')
            ->label('Preview')
            ->url(fn (Model $record): string => route('notify.templates.preview', $record))
            ->openUrlInNewTab();
    }
}

class SendAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->icon('heroicon-o-paper-airplane')
            ->label('Send')
            ->form([
                Forms\Components\TextInput::make('to')
                    ->email()
                    ->required(),
                Forms\Components\KeyValue::make('data')
                    ->label('Template Variables')
            ])
            ->action(function (Model $record, array $data): void {
                $record->send($data['to'], $data['data']);
            });
    }
}
```

## 4. Template Base

### 4.1 Layout
```php
// resources/views/notify/layouts/default.blade.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        /* Base styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .content {
            padding: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        @include('notify::partials.header')
        
        <div class="content">
            {{ $slot }}
        </div>
        
        @include('notify::partials.footer')
    </div>
</body>
</html>
```

### 4.2 Components
```php
// resources/views/notify/partials/header.blade.php
<div class="header">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
</div>

// resources/views/notify/partials/footer.blade.php
<div class="footer">
    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    <p>
        <a href="{{ config('app.url') }}/unsubscribe">Unsubscribe</a> |
        <a href="{{ config('app.url') }}/preferences">Email Preferences</a>
    </p>
</div>
```

## 5. Utilizzo

### 5.1 Creazione Template
```php
$template = Template::create([
    'name' => 'Welcome Email',
    'subject' => 'Welcome to {{ app_name }}',
    'content' => view('notify::templates.welcome')->render(),
    'layout' => 'default',
    'is_active' => true
]);
```

### 5.2 Invio Email
```php
$template->send('user@example.com', [
    'app_name' => config('app.name'),
    'user_name' => 'John Doe'
]);
```

## 6. Testing

### 6.1 Unit Tests
```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Models\Template;
use Modules\Notify\Services\TemplateService;

class TemplateTest extends TestCase
{
    protected $templateService;

    protected function setUp(): void
    {
        parent::setUp();
        $this->templateService = app(TemplateService::class);
    }

    public function test_can_create_template()
    {
        $data = [
            'name' => 'Test Template',
            'subject' => 'Test Subject',
            'content' => 'Test Content',
            'layout' => 'default',
            'is_active' => true
        ];

        $template = $this->templateService->create($data);

        $this->assertInstanceOf(Template::class, $template);
        $this->assertEquals($data['name'], $template->name);
        $this->assertEquals($data['subject'], $template->subject);
        $this->assertEquals($data['content'], $template->content);
    }

    public function test_can_update_template()
    {
        $template = Template::factory()->create();

        $data = [
            'name' => 'Updated Template',
            'subject' => 'Updated Subject',
            'content' => 'Updated Content',
            'layout' => 'default',
            'is_active' => true
        ];

        $updated = $this->templateService->update($template, $data);

        $this->assertEquals($data['name'], $updated->name);
        $this->assertEquals($data['subject'], $updated->subject);
        $this->assertEquals($data['content'], $updated->content);
    }
}
```

### 6.2 Feature Tests
```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Modules\Notify\Models\Template;

class TemplateControllerTest extends TestCase
{
    public function test_can_view_templates_index()
    {
        $response = $this->get(route('notify.templates.index'));

        $response->assertStatus(200);
        $response->assertViewIs('notify::templates.index');
    }

    public function test_can_create_template()
    {
        $data = [
            'name' => 'Test Template',
            'subject' => 'Test Subject',
            'content' => 'Test Content',
            'layout' => 'default',
            'is_active' => true
        ];

        $response = $this->post(route('notify.templates.store'), $data);

        $response->assertRedirect(route('notify.templates.show', Template::first()));
        $this->assertDatabaseHas('templates', $data);
    }

    public function test_can_preview_template()
    {
        $template = Template::factory()->create();

        $response = $this->get(route('notify.templates.preview', $template));

        $response->assertStatus(200);
        $response->assertViewIs('notify::templates.preview');
    }
}
```

## 7. Note Importanti

1. **Versioning**
   - Mantenere versioni dei template
   - Implementare diff tra versioni
   - Permettere rollback

2. **Caching**
   - Cache template compilati
   - Cache query frequenti
   - Implementare cache tags

3. **Testing**
   - Test su vari client email
   - Test responsive design
   - Test performance

4. **Documentazione**
   - Documentare variabili disponibili
   - Mantenere changelog
   - Documentare API

## 8. Collegamenti Utili

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 3f537838 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> a404ea71 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> ee18dd92 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 66453ace (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
>>>>>>> febe79e3 (.)
- [MJML Documentation](https://mjml.io/documentation/)
- [Mailgun API](https://documentation.mailgun.com/en/latest/api_reference.html)
- [Filament Documentation](https://filamentphp.com/docs) 
=======
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
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
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
- [MJML Documentation](https://mjml.io/documentation/)
- [Mailgun API](https://documentation.mailgun.com/en/latest/api_reference.html)
- [Filament Documentation](https://filamentphp.com/docs) 
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)
=======
- [Laravel Mail Documentation](https://laravel.com/project_docs/mail)
>>>>>>> bf479cc (.)
- [MJML Documentation](https://mjml.io/documentation/)
- [Mailgun API](https://documentation.mailgun.com/en/latest/api_reference.html)
- [Filament Documentation](https://filamentphp.com/docs) 
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
