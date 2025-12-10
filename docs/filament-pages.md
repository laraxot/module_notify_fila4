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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
# Pagine Filament del Modulo Notify

## Panoramica

Le pagine Filament del modulo Notify estendono le classi base del modulo Xot e implementano le funzionalità specifiche per la gestione dei template delle notifiche.

## Struttura delle Pagine

### ListNotificationTemplates

```php
namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListNotificationTemplates extends XotBaseListRecords
{
    protected static string $resource = NotificationTemplateResource::class;
}
```

### CreateNotificationTemplate

```php
namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Pages\XotBaseCreateRecord;

class CreateNotificationTemplate extends XotBaseCreateRecord
{
    protected static string $resource = NotificationTemplateResource::class;
}
```

### EditNotificationTemplate

```php
namespace Modules\Notify\Filament\Resources\NotificationTemplateResource\Pages;

use Modules\Notify\Filament\Resources\NotificationTemplateResource;
use Modules\Xot\Filament\Pages\XotBaseEditRecord;

class EditNotificationTemplate extends XotBaseEditRecord
{
    protected static string $resource = NotificationTemplateResource::class;
}
```

## Best Practices Seguite

1. **Estensione Corretta**
   - Estendono le classi base dal modulo Xot
   - Non sovrascrivono metodi non necessari
   - Mantengono la struttura standard

2. **Namespace**
   - Seguono la struttura standard dei moduli
   - Non includono `app` nel namespace
   - Mantengono coerenza con altri componenti

3. **Configurazione**
   - Definiscono correttamente la risorsa associata
   - Non duplicano funzionalità delle classi base
   - Mantengono la semplicità

## Collegamenti Bidirezionali

### Collegamenti nella Root
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
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
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
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
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1487fe812 (.)
- [Architettura Filament](../../../../project_docs/architecture/filament.md)
- [Gestione Pagine](../../../../project_docs/architecture/pages.md)

### Collegamenti ai Moduli
- [XotBaseListRecords](../../Xot/project_docs/filament-pages.md#XotBaseListRecords)
- [XotBaseCreateRecord](../../Xot/project_docs/filament-pages.md#XotBaseCreateRecord)
- [XotBaseEditRecord](../../Xot/project_docs/filament-pages.md#XotBaseEditRecord)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1487fe812 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
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
>>>>>>> fbed41ac (.)
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
>>>>>>> fbed41ac (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
- [Architettura Filament](../../../../docs/architecture/filament.md)
- [Gestione Pagine](../../../../docs/architecture/pages.md)

### Collegamenti ai Moduli
- [XotBaseListRecords](../../Xot/docs/filament-pages.md#XotBaseListRecords)
- [XotBaseCreateRecord](../../Xot/docs/filament-pages.md#XotBaseCreateRecord)
- [XotBaseEditRecord](../../Xot/docs/filament-pages.md#XotBaseEditRecord)
- [NotificationTemplateResource](./filament-resources.md)

## Note Importanti

1. Le pagine estendono sempre le classi base appropriate
2. Non si sovrascrivono metodi se non necessario
3. Si mantiene la coerenza con il resto del sistema
4. La documentazione va mantenuta aggiornata
<<<<<<< HEAD
5. I namespace seguono le convenzioni standard 
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
5. I namespace seguono le convenzioni standard 
=======
>>>>>>> 5fd545e4 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 2a97406c (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 909e45af (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 4f042b88 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> bb7e77c2 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 36321fcb (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> b99af5a8 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 712617d3 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f3086887 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> fdb24863 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 4fc21b78 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 9c45d9bd (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 54ad93c4 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> eb62d6cf (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 6e12a84b (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 8c8937e7 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 545977c8 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 36ac4fc1 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> c8b1c8bf (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 9cf0dc90 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 75179b85 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f963d2c0 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 31f5d28f (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> ee18dd92 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 6608a1a0 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 66453ace (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 2a97406c (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 909e45af (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 4f042b88 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> bb7e77c2 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 36321fcb (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> b99af5a8 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 712617d3 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f3086887 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> fdb24863 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 4fc21b78 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 9c45d9bd (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 54ad93c4 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> eb62d6cf (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 6e12a84b (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 8c8937e7 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 545977c8 (rebase 210)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 36ac4fc1 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> c8b1c8bf (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 9cf0dc90 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 75179b85 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f963d2c0 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 75179b855 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f963d2c0 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 31f5d28f (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> ee18dd92 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 6608a1a0 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 66453ace (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 2a97406c (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 909e45af (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 4f042b88 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> bb7e77c2 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 36321fcb (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> b99af5a8 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> 712617d3 (.)
=======
5. I namespace seguono le convenzioni standard 
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
