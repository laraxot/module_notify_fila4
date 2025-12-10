<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Risoluzione Conflitti SmsChannel.php

## Contesto del Conflitto
**File**: `/var/www/html/ptvx/laravel/Modules/Notify/app/Channels/SmsChannel.php`
**Linee**: 55-58
**Tipo**: Conflitto di formattazione (riga vuota aggiuntiva)

## Descrizione del Conflitto
Il conflitto è molto semplice e riguarda solo la presenza di una riga vuota aggiuntiva:

### Versione HEAD
```php
$action = $this->factory->create();
        
return $action->execute($smsData);
```

### Versione Branch
```php
$action = $this->factory->create();

return $action->execute($smsData);
```

## Analisi delle Differenze
- **HEAD**: Mantiene una riga vuota aggiuntiva dopo `$this->factory->create()`
- **Branch**: Ha solo una riga vuota standard

## Strategia di Risoluzione: Mantenere Versione HEAD

### Motivazione
1. **Coerenza con stile esistente**: La versione HEAD mantiene uno stile di spaziatura più consistente
2. **Leggibilità**: La riga vuota aggiuntiva migliora la separazione visiva tra creazione e esecuzione
3. **Minimo impatto**: È solo una questione di formattazione, non di logica
4. **Principio conservativo**: In caso di dubbio su formattazione, mantenere la versione HEAD

### Implementazione
Rimuovere i marker di conflitto mantenendo la versione HEAD con la riga vuota aggiuntiva.

## Codice Finale
```php
$action = $this->factory->create();
        
return $action->execute($smsData);
```

## Note Tecniche
- Nessun impatto sulla funzionalità
- Nessun impatto su PHPStan o analisi statica
- Solo miglioramento della leggibilità del codice

## Collegamenti
- [Notify Module Documentation](README.md)
- [SMS Channel Architecture](sms_channel_action_resolution.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 2941b0bd (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> ca10d6ad (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 66453ace (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> 4c323e61 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
>>>>>>> febe79e3 (.)

*Ultimo aggiornamento: giugno 2025*
=======
>>>>>>> 5fd545e4 (.)
=======
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
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)

*Ultimo aggiornamento: giugno 2025*
>>>>>>> 2a97406c (.)
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
