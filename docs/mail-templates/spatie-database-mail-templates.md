<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 66453ace (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 2a97406c (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 909e45af (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 4f042b88 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 712617d3 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> fdb24863 (rebase 210)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 9c45d9bd (rebase 210)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> eb62d6cf (rebase 210)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 8c8937e7 (rebase 210)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 36ac4fc1 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> fd1fcc4c (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> eb71492d (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 4f3927d7 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_<nome progetto>/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 0ebb7b01 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 9cf0dc90 (.)
=======
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_saluteora/laravel/Modules/Notify/resources/mail-layouts/
/var/www/html/base_techplanner_fila3_mono/laravel/Modules/Notify/resources/mail-layouts/
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 0ebb7b01 (.)
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
    'subject' => 'Benvenuto su <nome progetto>, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su <nome progetto>. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su <nome progetto>. Visita {{ activationUrl }} per attivare il tuo account.'
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 6608a1a0 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
    'subject' => 'Benvenuto su SaluteOra, {{ name }}',
    'html_template' => '<h1>Ciao, {{ name }}!</h1><p>Benvenuto su SaluteOra. Clicca <a href="{{ activationUrl }}">qui</a> per attivare il tuo account.</p>',
    'text_template' => 'Ciao, {{ name }}! Benvenuto su SaluteOra. Visita {{ activationUrl }} per attivare il tuo account.'
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 6608a1a0 (.)
=======
    <title>SaluteOra</title>
>>>>>>> 66453ace (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 23cbbaf5 (.)
=======
    <title>SaluteOra</title>
>>>>>>> 2a97406c (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 909e45af (.)
=======
    <title>SaluteOra</title>
>>>>>>> 4f042b88 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> bb7e77c2 (.)
=======
    <title>SaluteOra</title>
>>>>>>> 712617d3 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> f3086887 (rebase 210)
=======
    <title>SaluteOra</title>
>>>>>>> fdb24863 (rebase 210)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 3d462363 (rebase 210)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> 4fc21b78 (rebase 210)
=======
    <title>SaluteOra</title>
>>>>>>> 9c45d9bd (rebase 210)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 54ad93c4 (rebase 210)
=======
    <title>SaluteOra</title>
>>>>>>> eb62d6cf (rebase 210)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 6e12a84b (rebase 210)
=======
    <title>SaluteOra</title>
>>>>>>> 8c8937e7 (rebase 210)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 545977c8 (rebase 210)
=======
    <title>SaluteOra</title>
>>>>>>> 36ac4fc1 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 69fa7d37 (.)
=======
    <title>SaluteOra</title>
>>>>>>> fd1fcc4c (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> eb71492d (.)
=======
    <title>SaluteOra</title>
>>>>>>> 4f3927d7 (.)
=======
    <title><nome progetto></title>
    <title><nome progetto></title>
>>>>>>> 0ebb7b01 (.)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> c8b1c8bf (.)
=======
    <title>SaluteOra</title>
>>>>>>> 9cf0dc90 (.)
=======
    <title><nome progetto></title>
    <title>SaluteOra</title>
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 6608a1a0 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 66453ace (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 23cbbaf5 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 2a97406c (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 909e45af (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 4f042b88 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> bb7e77c2 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 712617d3 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> f3086887 (rebase 210)
=======
        <h1>SaluteOra</h1>
>>>>>>> fdb24863 (rebase 210)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 3d462363 (rebase 210)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> 4fc21b78 (rebase 210)
=======
        <h1>SaluteOra</h1>
>>>>>>> 9c45d9bd (rebase 210)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 54ad93c4 (rebase 210)
=======
        <h1>SaluteOra</h1>
>>>>>>> eb62d6cf (rebase 210)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 6e12a84b (rebase 210)
=======
        <h1>SaluteOra</h1>
>>>>>>> 8c8937e7 (rebase 210)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 545977c8 (rebase 210)
=======
        <h1>SaluteOra</h1>
>>>>>>> 36ac4fc1 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 69fa7d37 (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> fd1fcc4c (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> eb71492d (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 4f3927d7 (.)
=======
        <h1><nome progetto></h1>
        <h1><nome progetto></h1>
>>>>>>> 0ebb7b01 (.)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> c8b1c8bf (.)
=======
        <h1>SaluteOra</h1>
>>>>>>> 9cf0dc90 (.)
=======
        <h1><nome progetto></h1>
        <h1>SaluteOra</h1>
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 6608a1a0 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 66453ace (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 23cbbaf5 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 2a97406c (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 909e45af (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 4f042b88 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> bb7e77c2 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 712617d3 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> f3086887 (rebase 210)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> fdb24863 (rebase 210)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 3d462363 (rebase 210)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 4fc21b78 (rebase 210)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 9c45d9bd (rebase 210)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 54ad93c4 (rebase 210)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> eb62d6cf (rebase 210)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 6e12a84b (rebase 210)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 8c8937e7 (rebase 210)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 545977c8 (rebase 210)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 36ac4fc1 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 69fa7d37 (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> fd1fcc4c (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> eb71492d (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 4f3927d7 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
>>>>>>> 0ebb7b01 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> c8b1c8bf (.)
=======
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 9cf0dc90 (.)
=======
        <p>© 2025 <nome progetto> - Tutti i diritti riservati</p>
        <p>© 2025 SaluteOra - Tutti i diritti riservati</p>
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 6608a1a0 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 66453ace (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 23cbbaf5 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 2a97406c (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 909e45af (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 4f042b88 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> bb7e77c2 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 712617d3 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> f3086887 (rebase 210)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> fdb24863 (rebase 210)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 3d462363 (rebase 210)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 4fc21b78 (rebase 210)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 9c45d9bd (rebase 210)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 54ad93c4 (rebase 210)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> eb62d6cf (rebase 210)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 6e12a84b (rebase 210)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 8c8937e7 (rebase 210)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 545977c8 (rebase 210)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 36ac4fc1 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 69fa7d37 (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> fd1fcc4c (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> eb71492d (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 4f3927d7 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
>>>>>>> 0ebb7b01 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> c8b1c8bf (.)
=======
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 9cf0dc90 (.)
=======
<h2>Benvenuto su <nome progetto>, {{ name }}!</h2>
<h2>Benvenuto su SaluteOra, {{ name }}!</h2>
>>>>>>> 75179b85 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 6608a1a0 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 66453ace (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 23cbbaf5 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 2a97406c (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 909e45af (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 4f042b88 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> bb7e77c2 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 712617d3 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> f3086887 (rebase 210)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> fdb24863 (rebase 210)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 3d462363 (rebase 210)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 4fc21b78 (rebase 210)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 9c45d9bd (rebase 210)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 54ad93c4 (rebase 210)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> eb62d6cf (rebase 210)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 6e12a84b (rebase 210)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 8c8937e7 (rebase 210)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 545977c8 (rebase 210)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 36ac4fc1 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 69fa7d37 (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> fd1fcc4c (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> eb71492d (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 4f3927d7 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di <nome progetto></p>
>>>>>>> 0ebb7b01 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> c8b1c8bf (.)
=======
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 9cf0dc90 (.)
=======
<p>Grazie,<br>Il team di <nome progetto></p>
<p>Grazie,<br>Il team di SaluteOra</p>
>>>>>>> 75179b85 (.)
```

## Best Practices

1. **Separare layout e contenuto**: Utilizzare il layout per elementi ripetitivi (header, footer, stili) e il template per il contenuto specifico
2. **Utilizzare CSS inline**: Le email hanno supporto limitato per i CSS, utilizzare stili inline
3. **Testare su più client email**: Verificare la corretta visualizzazione su diversi client
4. **Mantenere template semplici**: Evitare costrutti complessi in Mustache che potrebbero non funzionare
5. **Aggiungere versione testuale**: Fornire sempre una versione testuale dell'email per client che non supportano HTML
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
