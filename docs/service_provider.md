<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 602b8a0a9 (.)
# Service Provider del Modulo Notify

Il `NotifyServiceProvider` estende `XotBaseServiceProvider` e gestisce il bootstrap dei componenti del modulo e la registrazione dei binding.

## Linee Guida

- Dichiarare `public string $name = 'Notify';` immediatamente dopo `class NotifyServiceProvider`.
- Evitare docblock sopra la proprietà `$name`.
- Non sovrascrivere `boot()` a meno di necessità di personalizzazioni; in tal caso, chiamare sempre `parent::boot()` all'inizio.
- Se si sovrascrive `register()`, chiamare `parent::register()` per ereditare la logica base.
- Il metodo `provides()` può essere definito per esporre i binding creati.

## Esempio di Implementazione

```php
<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

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
        return ['notify.manager'];
    }
}
```

<<<<<<< HEAD
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ee18dd92 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2941b0bd (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ca10d6ad (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4c323e61 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2a97406c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 98d837b9 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a29a4728 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f042b88 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4e4a7796 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c7a4727b (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d84f153 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9721a5b2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 712617d3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 116df547 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 1442e291 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fdb24863 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 84082535 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9c45d9bd (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 7ffa94fc (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> eb62d6cf (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 82e5ee2d (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d38aa9d2 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 8c8937e7 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 36ac4fc1 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7d5eaf96 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fd1fcc4c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> cb5f23b0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f3927d7 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4b544042 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> cccb594f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c8b1c8bf (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9cf0dc90 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ee18dd92 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2941b0bd (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ca10d6ad (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 66453ace (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2a97406c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 98d837b9 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a29a4728 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f042b88 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4e4a7796 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c7a4727b (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d84f153 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9721a5b2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 712617d3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 116df547 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 1442e291 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 84082535 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4fc21b78 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9c45d9bd (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 7ffa94fc (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d3810d0 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> eb62d6cf (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 82e5ee2d (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d38aa9d2 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 5b50927d (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 26d39e2eb (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d45a0226 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fd1fcc4c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> cb5f23b0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f9ec4f86 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f3927d7 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4b544042 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> cccb594f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c8b1c8bf (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9cf0dc90 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b855 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2941b0bd (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ca10d6ad (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 66453ace (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4c323e61 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 98d837b9 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a29a4728 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4e4a7796 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c7a4727b (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d84f153 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9721a5b2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 116df547 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 116df547 (.)
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 82e5ee2d (rebase 210)
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> cb5f23b0 (.)
>>>>>>> 8db6adf75 (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f3927d7 (.)
>>>>>>> 602b8a0a9 (.)
=======
>>>>>>> 763771402 (.)
=======
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4b544042 (.)
>>>>>>> a85ebf6cc (.)
