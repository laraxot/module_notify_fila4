# Modulo Notify - Documentazione

## Overview

Il modulo Notify gestisce le notifiche, i template email e le integrazioni con sistemi di messaggistica per l'applicazione PTVX.

## Componenti Principali

### MailTemplateResource

Resource Filament per la gestione dei template email con supporto multilingua tramite **Spatie Translatable**.

**Path**: `Modules/Notify/app/Filament/Resources/MailTemplateResource.php`

**Estende**: `LangBaseResource` (Modules/Lang)

**Caratteristiche**:
- Supporto multilingua per subject, html_template, text_template
- Editor rich text per template HTML
- Visualizzazione parametri disponibili
- Gestione slug automatico

### Modello MailTemplate

**Path**: `Modules/Notify/app/Models/MailTemplate.php`

**Campi**:
- `mailable` - FQCN della classe Mailable
- `subject` - Oggetto email (traducibile)
- `html_template` - Template HTML (traducibile)
- `text_template` - Template testo (traducibile)
- `sms_template` - Template SMS (traducibile)
- `params` - Parametri disponibili nel template

## Integrazione Spatie Translatable

### Plugin Registration

Il plugin **Lara Zeus Spatie Translatable** è registrato in `AdminPanelProvider`:

```php
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;

public function panel(Panel $panel): Panel
{
    $panel->plugins([
        SpatieTranslatablePlugin::make()
            ->defaultLocales(['it', 'en']),
    ]);
    
    return parent::panel($panel);
}
```

### Lingue Supportate

- **Italiano** (it) - predefinita
- **Inglese** (en)

### Documentazione Dettagliata

Consultare [spatie-translatable-integration.md](./spatie-translatable-integration.md) per:
- Setup completo
- Migrazione modelli esistenti
- Best practices
- Troubleshooting

## Database Notifications

### Configurazione

Il modulo supporta notifiche database Filament con polling personalizzato:

```php
DatabaseNotifications::trigger('notify::livewire.database-notifications-trigger');
DatabaseNotifications::pollingInterval('60s');
```

### Disabilitazione

Le notifiche database possono essere disabilitate tramite configurazione:

```php
// config/xot.php
'disable_database_notifications' => true,
```

## Panel Filament

### ID Panel

`notify::admin`

### Path

`/notify/admin`

### Discovery

Il panel auto-discover:
- Resources in `app/Filament/Resources`
- Pages in `app/Filament/Pages`
- Widgets in `app/Filament/Widgets`
- Clusters in `app/Filament/Clusters`

## Errori Comuni

### Plugin spatie-translatable Not Registered

**Errore**: `LogicException - Plugin [spatie-translatable] is not registered for panel [notify::admin]`

**Causa**: Plugin commentato in AdminPanelProvider

**Soluzione**: Vedere [errori/plugin-spatie-translatable-not-registered.md](./errori/plugin-spatie-translatable-not-registered.md)

**Status**: ✅ RISOLTO (plugin registrato)

## Best Practices

### 1. Template Email Multilingua

Creare sempre traduzioni per tutte le lingue supportate:

```php
MailTemplate::create([
    'mailable' => 'App\\Mail\\WelcomeMail',
    'slug' => 'welcome',
    'subject' => [
        'it' => 'Benvenuto',
        'en' => 'Welcome',
    ],
    'html_template' => [
        'it' => '<p>Ciao {{name}}</p>',
        'en' => '<p>Hello {{name}}</p>',
    ],
]);
```

### 2. Parametri Template

Documentare sempre i parametri disponibili nel template:

```php
'params' => ['name', 'email', 'verification_url']
```

### 3. Testing Templates

Testare rendering in tutte le lingue supportate.

## Collegamenti

### Documentazione Interna
- [Spatie Translatable Integration](./spatie-translatable-integration.md)
- [Errore Plugin Not Registered](./errori/plugin-spatie-translatable-not-registered.md)
- [Lang Module](../../../Lang/docs/README.md)
- [Xot Panel Configuration](../../../Xot/docs/filament/panel-configuration.md)

### Documentazione Esterna
- [Lara Zeus Spatie Translatable](https://filamentphp.com/plugins/lara-zeus-spatie-translatable)
- [Spatie Laravel Translatable](https://spatie.be/docs/laravel-translatable/v6/introduction)
- [Filament Plugins](https://filamentphp.com/plugins)

---

**Ultimo aggiornamento**: 27 Ottobre 2025  
**Maintainer**: Team PTVX  
**Status**: ✅ ATTIVO con supporto multilingua

