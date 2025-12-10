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
# Risoluzione Conflitti RecordNotification.php

## Contesto del Conflitto
**File**: `/var/www/html/ptvx/laravel/Modules/Notify/app/Notifications/RecordNotification.php`
**Linee**: 77-91
**Tipo**: Conflitto tra codice pulito e codice di debug

## Descrizione del Conflitto
Il conflitto riguarda la logica nel metodo `toSms()` della classe RecordNotification:

### Versione HEAD
```php
$email = new SpatieEmail($this->record, $this->slug);

$email=$email->mergeData($this->data);
```

### Versione Branch
```php
$email = new SpatieEmail($this->record, $this->slug);
/*
dddx([
    'methods' => get_class_methods($email),
   // 'text' => $email->text(),
   'getHtmlLayout' => $email->getHtmlLayout(),


]);
*/
```

## Analisi delle Differenze
- **HEAD**: Codice pulito che chiama `mergeData()` per unire i dati aggiuntivi
- **Branch**: Codice di debug commentato con `dddx()` per ispezionare l'oggetto email

## Strategia di Risoluzione: Mantenere Versione HEAD

### Motivazione
1. **Codice di produzione**: La versione HEAD contiene codice funzionale, non di debug
2. **Funzionalità completa**: `mergeData()` è necessario per unire i dati della notificazione
3. **Pulizia del codice**: Evitare codice di debug commentato nel codice di produzione
4. **Best practice**: Il codice di debug deve essere rimosso prima del commit
5. **Manutenibilità**: Codice pulito è più facile da mantenere e comprendere

### Vantaggi della Versione HEAD
- Funzionalità completa con merge dei dati
- Codice pulito senza debug residuo
- Migliore performance (no codice commentato)
- Coerenza con le best practice di sviluppo

### Implementazione
Rimuovere i marker di conflitto mantenendo la versione HEAD con la chiamata a `mergeData()`.

## Codice Finale
```php
$email = new SpatieEmail($this->record, $this->slug);

$email=$email->mergeData($this->data);
```

## Note Tecniche
- Il metodo `mergeData()` è essenziale per unire i dati aggiuntivi della notificazione
- Il codice di debug `dddx()` era probabilmente utilizzato per ispezionare l'oggetto email durante lo sviluppo
- Rimuovere il codice di debug migliora le performance e la leggibilità

## Pattern Identificato
**Pattern**: Mantenere sempre codice funzionale pulito invece di codice di debug commentato

**Anti-pattern**: Lasciare codice di debug commentato nel codice di produzione

## Impatto su Altri File
Verificare che:
- Il metodo `mergeData()` sia implementato correttamente nella classe SpatieEmail
- Non ci siano altre istanze di codice di debug `dddx()` nel modulo
- Le notificazioni SMS funzionino correttamente con i dati uniti

## Collegamenti
- [Notify Module Documentation](README.md)
- [RecordNotification Implementation](notifications/record_notification.md)
- [SpatieEmail Integration](spatie_email_usage_guide.md)
<<<<<<< HEAD
<<<<<<< HEAD
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
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
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)

*Ultimo aggiornamento: giugno 2025*
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
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 3f537838 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> a404ea71 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> ee18dd92 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 2941b0bd (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> ca10d6ad (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 4c323e61 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 4c323e61 (.)
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)

*Ultimo aggiornamento: giugno 2025*
=======
>>>>>>> 5fd545e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 712617d3 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> eb62d6cf (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 36ac4fc1 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> fd1fcc4c (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4f3927d7 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> c8b1c8bf (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 9cf0dc90 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> ee18dd92 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> 998e6866b (.)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4f042b88 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 712617d3 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> eb62d6cf (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 36ac4fc1 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> fd1fcc4c (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4f3927d7 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> c8b1c8bf (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 9cf0dc90 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 75179b85 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 75179b855 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> f963d2c0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> ee18dd92 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 2a97406c (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
