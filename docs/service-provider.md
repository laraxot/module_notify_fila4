<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
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
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 31f5d28f (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 022fa8f1c (.)
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
=======
>>>>>>> 5fd545e4 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 2a97406c (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 909e45af (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4f042b88 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> bb7e77c2 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 36321fcb (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> b99af5a8 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 712617d3 (.)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> f3086887 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> fdb24863 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
Per maggiori dettagli sul provider base, consulta `modules/xot/project_docs/providers/xotbaseserviceprovider.md`.
Per maggiori dettagli sul provider base, consulta `modules/xot/docs/providers/xotbaseserviceprovider.md`.
>>>>>>> 4fc21b78 (rebase 210)
