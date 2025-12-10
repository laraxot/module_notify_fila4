<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 998e6866b (.)
# Template Email

## Panoramica
Questo documento descrive il sistema di template email utilizzato nel modulo Notify.

## Struttura dei Template

### Template Base
```php
// resources/views/vendor/notifications/email/base.blade.php
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
```

### Template Markdown
```php
// resources/views/vendor/notifications/email/welcome.blade.php
@component('mail::message')

# Benvenuto in {{ config('app.name') }}

Grazie per esserti registrato.

@component('mail::button', ['url' => $url])
Accedi
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent
```

## Editor Visuale

### Integrazione GrapesJS
```php
// app/Filament/Resources/EmailTemplateResource.php
use Filament\Forms\Components\Builder;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
public static function form(Form $form): Form
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
public static function form(Form $form): Form
>>>>>>> f963d2c (.)
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
public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
>>>>>>> 6a44db8a (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
public static function form(Form $form): Form
>>>>>>> f963d2c (.)
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
=======
public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
public static function form(Form $form): Form
>>>>>>> 1487fe812 (.)
=======
public static function form(Form $form): Form
>>>>>>> 12a7e2462 (.)
=======
public static function form(Form $form): Form
>>>>>>> 4bec160e6 (.)
=======
public static function form(Form $form): Form
>>>>>>> 138485550 (.)
=======
public static function form(Form $form): Form
>>>>>>> 998e6866b (.)
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
                    ]),
            ])
    ]);
}
```

## Personalizzazione

### Variabili Template
```php
// app/Notifications/WelcomeNotification.php
public function toMail($notifiable)
{
    return (new MailMessage)
        ->subject('Benvenuto {name}')
        ->greeting('Ciao {name}')
        ->line('Benvenuto in {app_name}')
        ->action('Accedi', $this->loginUrl)
        ->line('Grazie per esserti registrato!')
        ->with([
            'name' => $notifiable->name,
            'app_name' => config('app.name'),
        ]);
}
```

### Stili Personalizzati
```css
/* resources/css/email.css */
.email-container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
}

.email-header {
    text-align: center;
    padding: 20px 0;
}

.email-footer {
    text-align: center;
    padding: 20px 0;
    font-size: 12px;
    color: #666;
}
```

## Best Practices

### 1. Struttura Template
- Utilizzare layout responsive
- Mantenere stili inline
- Testare su diversi client
- Supportare modalità testo

### 2. Performance
- Ottimizzare immagini
- Minimizzare CSS
- Utilizzare CDN
- Implementare cache

### 3. Accessibilità
- Contrasto adeguato
- Test screen reader
- Tag semantici
- Alt text immagini

## Note
- Tutti i collegamenti sono relativi
- La documentazione è mantenuta in italiano
- I collegamenti sono bidirezionali quando appropriato
- Ogni sezione ha il suo README.md specifico

## Contribuire
Per contribuire alla documentazione, seguire le [Linee Guida](../../../../docs/linee-guida-documentazione.md) e le [Regole dei Collegamenti](../../../../docs/regole_collegamenti_documentazione.md).

## Collegamenti Completi
Per una lista completa di tutti i collegamenti tra i README.md, consultare il file [README_links.md](../../../../docs/README_links.md). 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 998e6866b (.)
