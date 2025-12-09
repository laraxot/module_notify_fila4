<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# XotBaseServiceProvider: Analisi, Regole e Best Practice

## 1. Cos'è XotBaseServiceProvider
`XotBaseServiceProvider` è la classe base **obbligatoria** per tutti i Service Provider principali dei moduli Laraxot. Estende `Illuminate\Support\ServiceProvider` e implementa:
- Registrazione automatica di views, traduzioni, config, Livewire, Blade components, comandi
- Caricamento delle migrazioni
- Naming e namespace standardizzati

## 2. Proprietà e Metodi Fondamentali

```php
abstract class XotBaseServiceProvider extends ServiceProvider
{
    public string $name = '';
    public string $nameLower = '';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
    // ...

    public function boot(): void
    {
        $this->registerTranslations();
        $this->registerViews();
        $this->loadMigrationsFrom($this->module_dir.'/../Database/Migrations');
        $this->registerLivewireComponents();
        $this->registerBladeComponents();
        $this->registerCommands();
    }

    public function register(): void
    {
        $this->nameLower = Str::lower($this->name);
        $this->module_ns = collect(explode('\\', $this->module_ns))->slice(0, -1)->implode('\\');
        $this->app->register($this->module_ns.'\Providers\RouteServiceProvider');
        $this->app->register($this->module_ns.'\Providers\EventServiceProvider');
        $this->registerConfig();
        $this->registerBladeIcons();
    }
    // ...
}
```

## 3. Come si Estende Correttamente

- **Visibilità proprietà**: le proprietà pubbliche della base vanno sempre dichiarate `public` anche nell'estensione.
- **Naming**: imposta sempre `$name` e `$nameLower`.
- **Mai duplicare logica di boot**: NON ridefinire `boot()` per caricare views, config, migrazioni ecc. (già gestito dalla base!).
- **Aggiungi solo override specifici**: Se servono binding custom, aggiungili solo in `register()` dopo il `parent::register()`.

## 4. Errori Comuni da NON Fare Mai Più

- ❌ **Ridefinire la logica di boot** (es: caricare views/config/migrations manualmente): già gestito dalla base!
- ❌ **Dimenticare di chiamare `parent::register()`**: rischi di non registrare provider essenziali.
- ❌ **Dichiarare proprietà con visibilità diversa dalla base**: causa errori di access level.
- ❌ **Duplicare codice di registrazione di risorse**.

## 5. Esempio Corretto

```php
class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    public function register(): void
    {
        parent::register();
        $this->app->singleton('notify.manager', function ($app) {
            return new \Modules\Notify\Services\NotificationManager();
        });
    }

    public function provides(): array
    {
        return [
            'notify.manager',
        ];
    }
}
```

## 6. Checklist per PR e Revisione
- [x] La proprietà `$name` è `public`
- [x] Il metodo `register()` chiama sempre `parent::register()`
- [x] Non ci sono override inutili di `boot()`
- [x] Nessuna duplicazione di logica di registrazione risorse
- [x] Solo binding custom in `register()`

## 7. Riferimenti
- [XotBaseServiceProvider](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/app/Providers/XotBaseServiceProvider.php)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> ee18dd92 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 2941b0bd (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> ca10d6ad (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 66453ace (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4c323e61 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> febe79e3 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 2a97406c (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 98d837b9 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a29a4728 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4f042b88 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4e4a7796 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> c7a4727b (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9d84f153 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9721a5b2 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 712617d3 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 116df547 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 1442e291 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> fdb24863 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 84082535 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 5b50927d (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 36ac4fc1 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> d45a0226 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> fd1fcc4c (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> cb5f23b0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f9ec4f86 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4f3927d7 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4b544042 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> cccb594f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> c8b1c8bf (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> 75179b85 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 3f537838 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> a404ea71 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> ee18dd92 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 2941b0bd (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> ca10d6ad (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 66453ace (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> 4c323e61 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/project_docs/service-provider-best-practices.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Best Practices](/var/www/html/base_<nome progetto>/laravel/Modules/Xot/docs/service-provider-best-practices.md)
>>>>>>> febe79e3 (.)

---

> **Questa documentazione è stata aggiornata dopo un errore di override errato del metodo boot. Seguire SEMPRE queste regole per evitare errori futuri.**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 5fd545e4 (.)
