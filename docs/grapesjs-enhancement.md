<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
# Integrazione GrapesJS Editor (Dotswan)

Questo documento analizza il plugin [Dotswan GrapesJS](https://filamentphp.com/plugins/dotswan-grapesjs) per Filament e propone una versione in-house open source migliorata.

---

## 1. Plugin di riferimento

- **Dotswan GrapesJS**: editor drag’n’drop per contenuti HTML via GrapesJS
- **GitHub**: https://github.com/dotswan/filament-grapesjs

## 2. Funzionalità chiave del plugin

- Editor visuale con componenti drag’n’drop
- Asset manager per upload di immagini e risorse
- Anteprima live del design nel form Filament
- Salvataggio del JSON di GrapesJS nel DB e rendering HTML

## 3. Gap e Limitazioni

1. **Nessun versioning**: impossibile rollback a precedenti revisioni
2. **Stati non gestiti**: nessuna distinzione tra bozza, pubblicato, errore
3. **Media library disaccoppiata**: upload file base senza spatie/medialibrary
4. **Configurazione rigida**: toolbar e asset manager non estendibili via code
5. **Mantenimento incerto**: dipendenza da plugin esterno a volte non aggiornato

## 4. Obiettivi Soluzione In-House

- Archiviare sia **JSON** che **HTML** generato
- Introduzione di **versioning** e **ModelStates** (draft/published/failed)
- **Gestione media** centralizzata con `spatie/laravel-medialibrary`
- **Custom Field** per GrapesJS in Filament Forms
- **Preview live** e rendering frontend
- **Action** queueable per rendering, publishing e rollback
- **Audit log** delle modifiche ai template

## 5. Architettura Proposta

```mermaid
flowchart LR
  DB[email_templates table] --> M[PageTemplate Model]
  M --> S(ModelStates)
  S --> R(Filament Resource)
  R --> A(RenderGrapesJSAction)
  A --> P(PublishAction) --> L(email_logs / deployment)
``` 

### 5.1 Migrazione e Modello
```php
Schema::create('page_templates', fn(Blueprint $table) =>
    $table->id()
          ->string('name')
          ->json('content_json')
          ->text('content_html')->nullable()
          ->timestamps()
);

class PageTemplate extends Model {
    use HasStates, InteractsWithMedia;
    protected $casts = ['status' => PageTemplateStatus::class];
    public function registerMediaCollections(): void {
        $this->addMediaCollection('assets')->useDisk('public');
    }
}
```

### 5.2 Filament Resource
```php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema {
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 31f5d28f (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 31f5d28f (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 31f5d28f (.)
=======
public static function form(Form $form): Form {
>>>>>>> ee18dd92 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 6608a1a0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 66453ace (.)
=======
public static function form(Form $form): Form {
>>>>>>> 23cbbaf5 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 2a97406c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 909e45af (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f042b88 (.)
=======
public static function form(Form $form): Form {
>>>>>>> bb7e77c2 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 36321fcb (.)
=======
public static function form(Form $form): Form {
>>>>>>> b99af5a8 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 712617d3 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f3086887 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> fdb24863 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 3d462363 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 4fc21b78 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 9c45d9bd (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 54ad93c4 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> eb62d6cf (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 6e12a84b (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 8c8937e7 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 545977c8 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 36ac4fc1 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 69fa7d37 (.)
=======
public static function form(Form $form): Form {
>>>>>>> c8b1c8bf (.)
=======
public static function form(Form $form): Form {
>>>>>>> 9cf0dc90 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 31f5d28f (.)
=======
public static function form(Form $form): Form {
>>>>>>> ee18dd92 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 6608a1a0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 66453ace (.)
=======
public static function form(Form $form): Form {
>>>>>>> 23cbbaf5 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 2a97406c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 909e45af (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f042b88 (.)
=======
public static function form(Form $form): Form {
>>>>>>> bb7e77c2 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 36321fcb (.)
=======
public static function form(Form $form): Form {
>>>>>>> b99af5a8 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 712617d3 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f3086887 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> fdb24863 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 3d462363 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 4fc21b78 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 9c45d9bd (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 54ad93c4 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> eb62d6cf (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 6e12a84b (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 8c8937e7 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 545977c8 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 36ac4fc1 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 69fa7d37 (.)
=======
public static function form(Form $form): Form {
>>>>>>> c8b1c8bf (.)
=======
public static function form(Form $form): Form {
>>>>>>> 9cf0dc90 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b855 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 31f5d28f (.)
=======
public static function form(Form $form): Form {
>>>>>>> ee18dd92 (.)
    return $form->schema([
        TextInput::make('name')->required(),
        GrapesJsEditor::make('content_json')
            ->toolbar(['bold','italic','image','video','link'])
            ->mediaCollection('assets'),
        Hidden::make('content_html'),
    ]);
}
```

### 5.3 Stati Template
```php
abstract class PageTemplateStatus extends State {
  public static function config(): StateConfig {
    return parent::config()
      ->default(Draft::class)
      ->allowTransition(Draft::class, Pending::class)
      ->allowTransition(Pending::class, Published::class)
      ->allowTransition(Pending::class, Failed::class);
  }
}
class Draft extends PageTemplateStatus {}
class Pending extends PageTemplateStatus {}
class Published extends PageTemplateStatus {}
class Failed extends PageTemplateStatus {}
```

### 5.4 Queueable Actions
```php
class RenderGrapesJSAction {
    use QueueableAction;
    public function execute(PageTemplate $template): void {
        $html = GrapesJsRenderer::render($template->content_json);
        $template->content_html = $html;
        $template->status->transitionTo(Pending::class);
        $template->save();
    }
}

class PublishPageTemplateAction {
    use QueueableAction;
    public function execute(PageTemplate $template): void {
        // logica di deploy o pubblicazione front-end
        $template->status->transitionTo(Published::class);
        $template->save();
    }
}
```

## 6. Vantaggi

- **Versioning & rollback**: gestione revisioni via ModelStates
- **Media library**: upload e conversione asset con spatie/medialibrary
- **Scalabilità**: rendering e publishing asincroni
- **Customizzabile**: toolbar e asset manager configurabili via code
- **Manutenibile**: pieno controllo sul codice, nessuna dipendenza esterna non manutenuta

---

**Link Utili**:

- Plugin ufficiale: https://filamentphp.com/plugins/dotswan-grapesjs
- Repository: https://github.com/dotswan/filament-grapesjs
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 23cbbaf5 (.)
- GrapesJS Docs: https://grapesjs.com/docs/
=======
>>>>>>> 5fd545e4 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2a97406c (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
=======
>>>>>>> fbed41ac (.)
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 909e45af (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f042b88 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
=======
>>>>>>> fbed41ac (.)
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> bb7e77c2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36321fcb (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> b99af5a8 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 712617d3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f3086887 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fdb24863 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4fc21b78 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9c45d9bd (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 54ad93c4 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> eb62d6cf (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 6e12a84b (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 8c8937e7 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 545977c8 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36ac4fc1 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 69fa7d37 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> c8b1c8bf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9cf0dc90 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ee18dd92 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 6608a1a0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 66453ace (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2a97406c (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 909e45af (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f042b88 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> bb7e77c2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36321fcb (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> b99af5a8 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 712617d3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f3086887 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fdb24863 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4fc21b78 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9c45d9bd (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 54ad93c4 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> eb62d6cf (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 6e12a84b (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 8c8937e7 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 545977c8 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36ac4fc1 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 69fa7d37 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> c8b1c8bf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9cf0dc90 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 75179b855 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ee18dd92 (.)
