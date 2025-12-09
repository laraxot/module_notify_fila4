# Spatie Laravel Database Mail Templates

## Introduzione

Questo pacchetto permette di memorizzare i template delle email nel database anziché in file statici, consentendo maggiore flessibilità e la possibilità di modificarli senza necessità di deployment.

- **Repository**: [spatie/laravel-database-mail-templates](https://github.com/spatie/laravel-database-mail-templates)
- **Documentazione**: [GitHub README](https://github.com/spatie/laravel-database-mail-templates)
- **Versione installata**: 3.7.1

## Architettura del Package

Il pacchetto funziona con i seguenti componenti principali:

1. **`TemplateMailable` classe base**: I tuoi Mailable devono estendere questa classe
2. **`MailTemplate` modello**: Memorizza i template nel database
3. **Sistema di template Mustache**: Utilizzato per interpolare le variabili nei template

## Struttura dei Mail Layout

### Posizione dei Layout

In questo progetto, i layout HTML delle email sono memorizzati in:

```
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 75179b85 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> ee18dd92 (.)
```

Questi layout forniscono la struttura base per tutte le email, con un placeholder `{{{ body }}}` dove verrà inserito il contenuto specifico del template.

### Funzione getHtmlLayout()

La funzione `getHtmlLayout()` nei Mailable (o nei MailTemplate, se sovrascritti) recupera il layout HTML:

```php
public function getHtmlLayout(): string
{
    // Percorso al layout HTML
    $pathToLayout = base_path('Modules/Notify/resources/mail-layouts/main.html');
    
    // Legge il contenuto del file e lo restituisce
    return file_get_contents($pathToLayout);
}
```

## Utilizzo nel Progetto

### 1. Definire un TemplateMailable

```php
<?php

namespace Modules\Notify\Mail;

use Spatie\MailTemplates\TemplateMailable;
use Modules\User\Models\User;

class WelcomeMail extends TemplateMailable
{
    /** @var string */
    public $name;
    
    /** @var string */
    public $activationUrl;

    public function __construct(User $user, string $activationUrl)
    {
        $this->name = $user->name;
        $this->activationUrl = $activationUrl;
    }
    
    public function getHtmlLayout(): string
    {
        // Percorso al layout HTML
        $pathToLayout = base_path('Modules/Notify/resources/mail-layouts/main.html');
        
        return file_get_contents($pathToLayout);
    }
}
```

### 2. Creare un Template nel Database

```php
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Mail\WelcomeMail;

MailTemplate::create([
    'mailable' => WelcomeMail::class,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
<<<<<<< HEAD
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 75179b85 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> ee18dd92 (.)
]);
```

### 3. Inviare l'Email

```php
use Illuminate\Support\Facades\Mail;
use Modules\Notify\Mail\WelcomeMail;

// Invia la mail utilizzando il template dal database
Mail::to($user->email)->send(new WelcomeMail($user, $activationUrl));
```

## Template Mustache

Il sistema utilizza il motore di template Mustache per sostituire le variabili nel soggetto e nel corpo dell'email:

- Le variabili sono racchiuse in `{{ }}`: `{{ nome_variabile }}`
- Tutte le proprietà pubbliche del Mailable sono disponibili come variabili nel template
- È possibile aggiungere ulteriori variabili usando `$this->setAdditionalData(['chiave' => 'valore'])`

## Personalizzazione di Layout e Template

### Layout HTML

Un layout HTML contiene l'intera struttura della mail, con un segnaposto `{{{ body }}}` dove verrà inserito il contenuto specifico:

```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    <title><nome progetto></title>
<<<<<<< HEAD
=======
    <title>SaluteOra</title>
>>>>>>> 75179b85 (.)
=======
    <title>SaluteOra</title>
>>>>>>> f963d2c0 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 31f5d28f (.)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> 75179b85 (.)
=======
    <title>SaluteOra</title>
>>>>>>> f963d2c0 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 31f5d28f (.)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> 75179b85 (.)
=======
    <title>SaluteOra</title>
>>>>>>> f963d2c0 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 31f5d28f (.)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> 75179b85 (.)
=======
    <title>SaluteOra</title>
>>>>>>> f963d2c0 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 31f5d28f (.)
=======
    <title>SaluteOra</title>
>>>>>>> ee18dd92 (.)
    <style>
        /* Stili CSS inline */
        body { 
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #0075c9;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: #f5f5f5;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <h1><nome progetto></h1>
<<<<<<< HEAD
=======
        <h1>SaluteOra</h1>
>>>>>>> 75179b85 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> f963d2c0 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 31f5d28f (.)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> 75179b85 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> f963d2c0 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 31f5d28f (.)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> 75179b85 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> f963d2c0 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 31f5d28f (.)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> 75179b85 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> f963d2c0 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 31f5d28f (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> ee18dd92 (.)
    </div>
    
    <div class="content">
        {{{ body }}}
    </div>
    
    <div class="footer">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
<<<<<<< HEAD
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 75179b85 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> f963d2c0 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 31f5d28f (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 75179b85 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> f963d2c0 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 31f5d28f (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 75179b85 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> f963d2c0 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 31f5d28f (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 75179b85 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> f963d2c0 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 31f5d28f (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> ee18dd92 (.)
        <p>Se hai ricevuto questa email per errore, per favore ignorala o contattaci.</p>
    </div>
</body>
</html>
```

### Template Specifico

Il template specifico dell'email (memorizzato nel campo `html_template` del modello `MailTemplate`):

```html
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<<<<<<< HEAD
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 75179b85 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> f963d2c0 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 31f5d28f (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 75179b85 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> f963d2c0 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 31f5d28f (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 75179b85 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> f963d2c0 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 31f5d28f (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 75179b85 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> f963d2c0 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 31f5d28f (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> ee18dd92 (.)

<p>Siamo felici di darti il benvenuto sulla nostra piattaforma.</p>

<p>Per completare la registrazione e attivare il tuo account, clicca sul pulsante qui sotto:</p>

<p style="text-align: center;">
    <a href="{{ activationUrl }}" style="background-color: #0075c9; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; display: inline-block; margin: 20px 0;">
        Attiva il tuo account
    </a>
</p>

<p>Se il pulsante non funziona, copia e incolla questo link nel tuo browser:</p>
<p>{{ activationUrl }}</p>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<p>Grazie,<br>Il team di <nome progetto></p>
<<<<<<< HEAD
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 75179b85 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> f963d2c0 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 31f5d28f (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 75179b85 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> f963d2c0 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 31f5d28f (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 75179b85 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> f963d2c0 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 31f5d28f (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 75179b85 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> f963d2c0 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 31f5d28f (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> ee18dd92 (.)
```

## Best Practices

1. **Separare layout e contenuto**: Utilizzare il layout per elementi ripetitivi (header, footer, stili) e il template per il contenuto specifico
2. **Utilizzare CSS inline**: Le email hanno supporto limitato per i CSS, utilizzare stili inline
3. **Testare su più client email**: Verificare la corretta visualizzazione su diversi client
4. **Mantenere template semplici**: Evitare costrutti complessi in Mustache che potrebbero non funzionare
5. **Aggiungere versione testuale**: Fornire sempre una versione testuale dell'email per client che non supportano HTML
