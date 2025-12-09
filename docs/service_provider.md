<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
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
