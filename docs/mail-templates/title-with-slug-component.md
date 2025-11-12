# Analisi del Componente TitleWithSlugInput per Filament

## Introduzione


## Panoramica del Pacchetto

### Caratteristiche Principali

- **Integrazione titolo-slug**: Gestione combinata dei campi titolo e slug in un unico componente
- **Generazione automatica**: Conversione automatica del titolo in slug
- **Anteprima URL**: Visualizzazione in tempo reale dell'URL risultante
- **Personalizzazione**: Possibilità di modificare etichette, placeholder e comportamenti
- **Link "Visita"**: Opzione per visualizzare e navigare direttamente all'URL
- **Supporto Dark Mode**: Compatibilità con il tema scuro di Filament
- **Validazione Avanzata**: Regole di validazione personalizzabili


- Non utilizza componenti UI personalizzati
- Può essere configurato per restituire array associativi con chiavi stringhe
- Supporta la localizzazione attraverso file di traduzione
- Si integra con il pattern di form di Filament utilizzato 

## Installazione

Per integrare il componente nel modulo Notify, è necessario installare il pacchetto:

```bash
composer require camya/filament-title-with-slug
```

Opzionalmente, è possibile pubblicare il file di configurazione:

```bash
php artisan vendor:publish --tag="filament-title-with-slug-config"
```

## Implementazione in MailTemplateResource

### Configurazione Base


```php
use Camya\Filament\Forms\Components\TitleWithSlugInput;

public static function getFormSchema(): array
{
    return [
        'titleSlug' => TitleWithSlugInput::make(
            fieldTitle: 'name',
            fieldSlug: 'slug',
        )
        ->columnSpanFull(),
        
        // Altri campi del form
        'subject' => Forms\Components\TextInput::make('subject')
            ->required()
            ->maxLength(255),
            
        'html_template' => Forms\Components\RichEditor::make('html_template')
            ->required()
            ->columnSpanFull(),
            
        'text_template' => Forms\Components\Textarea::make('text_template')
            ->maxLength(65535)
            ->columnSpanFull(),
    ];
}
```

### Personalizzazione Avanzata


```php
'titleSlug' => TitleWithSlugInput::make(
    fieldTitle: 'name',
    fieldSlug: 'slug',
)
->urlPath('/mail-templates/')
->urlHost(config('app.url'))
->titleLabel('Nome Template')
->titlePlaceholder('Inserisci il nome del template...')
->slugLabel('Identificatore')
->urlVisitLinkLabel('Visualizza Template')
->columnSpanFull(),
```

## Funzionalità Rilevanti

### 1. Generazione Automatica dello Slug

Il componente converte automaticamente il titolo in uno slug, applicando trasformazioni come:
- Conversione in minuscolo
- Sostituzione degli spazi con trattini
- Rimozione di caratteri speciali

Questo comportamento è personalizzabile attraverso il parametro `slugSlugifier`:

```php
->slugSlugifier(fn($string) => Str::slug($string))
```

### 2. Anteprima URL

Il componente mostra un'anteprima dell'URL completo, personalizzabile attraverso:

```php
->urlPath('/mail-templates/')
->urlHostVisible(true)
```

### 3. Validazione

Le regole di validazione possono essere personalizzate sia per il titolo che per lo slug:

```php
->titleRules(['required', 'min:3', 'max:255'])
->slugRules(['required', 'max:255'])
->slugRuleRegex('/^[a-z0-9\-]+$/')
```

Per la validazione dell'unicità, il componente offre parametri specifici:

```php
->titleRuleUniqueParameters([
    'ignorable' => fn(?Model $record) => $record,
])
->slugRuleUniqueParameters([
    'ignorable' => fn(?Model $record) => $record,
])
```

### 4. Link "Visita"

Il componente può generare un link per visualizzare direttamente la risorsa:

```php
->urlVisitLinkRoute(fn(?Model $record) => $record?->slug 
    ? route('notify.mail-templates.view', ['slug' => $record->slug])
    : null)
```


L'integrazione di questo componente nel modulo Notify offrirebbe:

1. **Esperienza Utente Migliorata**: Interfaccia più intuitiva per la gestione dei template email
2. **Riduzione Errori**: Generazione automatica di slug validi e unici
3. **Feedback Visivo**: Anteprima immediata dell'URL
4. **Flessibilità**: Personalizzazione completa per adattarsi alle esigenze del progetto
5. **Consistenza**: Uniformità nella gestione di titoli e slug in tutta l'applicazione

## Considerazioni per l'Implementazione

2. **Array Associativo**: Utilizzare chiavi stringhe nell'array di schema del form
3. **Nomenclatura**: Seguire le convenzioni di nomenclatura del progetto

### Esempio di Implementazione Conforme

```php
public static function getFormSchema(): array
{
    return [
        'titleWithSlug' => TitleWithSlugInput::make(
            fieldTitle: 'name',
            fieldSlug: 'slug',
        )
        ->columnSpanFull()
        // Non utilizziamo ->label() poiché le etichette sono gestite dal LangServiceProvider
        ->titleExtraInputAttributes(['class' => 'bg-gray-50']) // Stile compatibile con Filament
        ->urlVisitLinkRoute(function (?Model $record) {
            if (!$record?->slug) return null;
            return route('notify.mail-templates.view', ['slug' => $record->slug]);
        }),
        
        // Altri campi...
    ];
}
```

## Limitazioni e Alternative

### Potenziali Limitazioni

1. **Dipendenza Esterna**: Introduce una dipendenza aggiuntiva nel progetto
3. **Modifiche Future**: Come ogni dipendenza, è soggetto a cambiamenti nelle versioni future

### Alternative

2. **Approccio Modulare**: Utilizzare i componenti nativi di Filament con logica personalizzata
3. **Altri Pacchetti**: Valutare pacchetti alternativi con funzionalità simili

## Conclusioni


L'implementazione dovrebbe seguire le convenzioni del progetto, con particolare attenzione alla localizzazione e alla struttura del form schema.

## Riferimenti

- [Repository GitHub del Pacchetto](https://github.com/camya/filament-title-with-slug)
- [Documentazione Filament](https://filamentphp.com/docs)
- [Implementazione Modello con Slug](./MODEL_SLUG_IMPLEMENTATION.md)
- [Implementazione Risorsa con Slug](./RESOURCE_SLUG_IMPLEMENTATION.md)
- [Miglioramenti UI/UX](./UI_UX_ENHANCEMENTS.md)
