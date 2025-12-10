<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema {
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 75179b85 (.)
=======
public static function form(Form $form): Form {
>>>>>>> f963d2c0 (.)
=======
public static function form(Form $form): Form {
>>>>>>> ee18dd92 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 66453ace (.)
=======
public static function form(Form $form): Form {
>>>>>>> 2a97406c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f042b88 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 712617d3 (.)
=======
public static function form(Form $form): Form {
>>>>>>> fdb24863 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 4fc21b78 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 9c45d9bd (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> eb62d6cf (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 8c8937e7 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 36ac4fc1 (.)
=======
public static function form(Form $form): Form {
>>>>>>> fd1fcc4c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f3927d7 (.)
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
>>>>>>> ee18dd92 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 66453ace (.)
=======
public static function form(Form $form): Form {
>>>>>>> 2a97406c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f042b88 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 712617d3 (.)
=======
public static function form(Form $form): Form {
>>>>>>> fdb24863 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 4fc21b78 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 9c45d9bd (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> eb62d6cf (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 8c8937e7 (rebase 210)
=======
public static function form(Form $form): Form {
>>>>>>> 36ac4fc1 (.)
=======
public static function form(Form $form): Form {
>>>>>>> fd1fcc4c (.)
=======
public static function form(Form $form): Form {
>>>>>>> 4f3927d7 (.)
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
>>>>>>> ee18dd92 (.)
=======
public static function form(Form $form): Form {
>>>>>>> 66453ace (.)
=======
public static function form(Form $form): Form {
>>>>>>> 2a97406c (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ee18dd92 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2941b0bd (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ca10d6ad (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 66453ace (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4c323e61 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2a97406c (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 98d837b9 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a29a4728 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f042b88 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4e4a7796 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> c7a4727b (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9d84f153 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9721a5b2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 712617d3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 116df547 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 1442e291 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fdb24863 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 84082535 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 4fc21b78 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9c45d9bd (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 7ffa94fc (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9d3810d0 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> eb62d6cf (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 82e5ee2d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> d38aa9d2 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 8c8937e7 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 5b50927d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36ac4fc1 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> d45a0226 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fd1fcc4c (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> cb5f23b0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f9ec4f86 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f3927d7 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4b544042 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> cccb594f (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> c8b1c8bf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9cf0dc90 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ee18dd92 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2941b0bd (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ca10d6ad (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 66453ace (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4c323e61 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2a97406c (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 98d837b9 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a29a4728 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f042b88 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4e4a7796 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> c7a4727b (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9d84f153 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9721a5b2 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 712617d3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 116df547 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 1442e291 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fdb24863 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 84082535 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 4fc21b78 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9c45d9bd (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 7ffa94fc (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9d3810d0 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> eb62d6cf (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 82e5ee2d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> d38aa9d2 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 8c8937e7 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 5b50927d (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 36ac4fc1 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> d45a0226 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> fd1fcc4c (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> cb5f23b0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f9ec4f86 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4f3927d7 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4b544042 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> cccb594f (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> c8b1c8bf (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 9cf0dc90 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b85 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> 75179b855 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> f963d2c0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 3f537838 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> a404ea71 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ee18dd92 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2941b0bd (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> ca10d6ad (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 66453ace (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 4c323e61 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
=======
- GrapesJS Docs: https://grapesjs.com/project_docs/
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- GrapesJS Docs: https://grapesjs.com/docs/
>>>>>>> 2a97406c (.)
