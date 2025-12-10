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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ca10d6ad (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a29a4728 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a75783374 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f9ec4f86 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> cccb594f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc2faa05b (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9d84f153 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9721a5b2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f9ec4f86 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> cccb594f (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b85 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
- [Documentazione Filament](../../../project_docs/filament.md)
- [Documentazione Media Library](../../../project_docs/media-library.md)
- [Documentazione Traduzioni](../../../project_docs/translations.md) 
>>>>>>> 75179b855 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> ca10d6ad (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> a29a4728 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 9721a5b2 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> bc2faa05b (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
- [Documentazione Filament](../../../docs/filament.md)
- [Documentazione Media Library](../../../docs/media-library.md)
- [Documentazione Traduzioni](../../../docs/translations.md) 
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
