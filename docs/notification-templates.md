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
# Template delle Notifiche

## Architettura

Il sistema di template delle notifiche è progettato seguendo i principi di:
- Separazione delle responsabilità
- Type safety
- Gestione centralizzata delle traduzioni
- Modularità e riusabilità

## Struttura

### Namespace
- `Modules\Notify\Filament\Resources` - Risorse Filament
- `Modules\Notify\Models` - Modelli
- `Modules\Notify\Actions` - Azioni (usando Spatie QueableActions)

### Componenti Principali

1. **NotificationTemplateResource**
   - Estende `XotBaseResource`
   - Gestisce CRUD dei template
   - Implementa preview in tempo reale
   - Supporta traduzioni multilingua

2. **NotificationTemplate Model**
   - Implementa `HasMedia` per gestione file
   - Usa `Spatie\Translatable\HasTranslations`
   - Supporta preview data per test

3. **Preview System**
   - Pagina dedicata per preview
   - Supporto per versione testo e HTML
   - Integrazione con sistema di traduzioni

## Best Practices

1. **Traduzioni**
   - Usare sempre chiavi di traduzione
   - Evitare hardcoding di stringhe
   - Mantenere traduzioni nel modulo

2. **Type Safety**
   - Usare enum per tipi di notifica
   - Definire tipi per tutti i parametri
   - Evitare mixed quando possibile

3. **File Management**
   - Usare Spatie Media Library
   - Configurare collezioni appropriate
   - Implementare conversioni necessarie

## Integrazione

### Con altri moduli
- `User` - Per destinatari
- `Media` - Per gestione file
- `Xot` - Per funzionalità base

### Con Filament
- Usare sempre classi XotBase
- Seguire convenzioni di naming
- Implementare interfacce standard

## Sicurezza

1. **Validazione**
   - Validare input
   - Sanitizzare output
   - Gestire permessi

2. **Audit**
   - Logging delle modifiche
   - Tracciamento accessi
   - Versioning dei template

## Performance

1. **Caching**
   - Cache dei template
   - Cache delle traduzioni
   - Ottimizzazione query

2. **Queue**
   - Processamento asincrono
   - Rate limiting
   - Retry logic

## Manutenzione

1. **Testing**
   - Unit test
   - Feature test
   - Integration test

2. **Documentazione**
   - Aggiornare docs
   - Mantenere esempi
   - Documentare cambiamenti

## Link Correlati

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
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
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
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 23cbbaf5 (.)
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
=======
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
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
=======
>>>>>>> fbed41ac (.)
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
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
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
=======
>>>>>>> fbed41ac (.)
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
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
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
