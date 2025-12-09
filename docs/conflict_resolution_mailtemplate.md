<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Risoluzione Conflitti MailTemplate.php

## Contesto del Conflitto
**File**: `/var/www/html/ptvx/laravel/Modules/Notify/app/Models/MailTemplate.php`
**Linee**: 75-79
**Tipo**: Conflitto di proprietà translatable

## Descrizione del Conflitto
Il conflitto riguarda la proprietà `$translatable` che definisce quali campi del modello MailTemplate sono traducibili:

### Versione HEAD
```php
/** @var list<string> */
public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
```

### Versione Branch
```php
/** @var list<string> */
public array $translatable = ['subject', 'html_template', 'text_template'];
```

## Analisi delle Differenze
- **HEAD**: Include `sms_template` nei campi traducibili (supporto SMS completo)
- **Branch**: Non include `sms_template` nei campi traducibili (solo email)

## Strategia di Risoluzione: Mantenere Versione HEAD

### Motivazione
1. **Funzionalità completa**: La versione HEAD supporta anche i template SMS, non solo email
2. **Coerenza con architettura**: Il modulo Notify gestisce sia email che SMS
3. **Espandibilità**: Includere `sms_template` permette traduzioni multilingue anche per SMS
4. **Backward compatibility**: Aggiungere un campo traducibile non rompe funzionalità esistenti
5. **Principio di completezza**: Meglio avere funzionalità in più che in meno

### Vantaggi della Versione HEAD
- Supporto completo per template SMS multilingue
- Coerenza con l'architettura del modulo Notify
- Maggiore flessibilità per future implementazioni
- Non richiede modifiche future quando si aggiunge supporto SMS

### Implementazione
Rimuovere i marker di conflitto mantenendo la versione HEAD che include `sms_template` nei campi traducibili.

## Codice Finale
```php
/** @var list<string> */
public array $translatable = ['subject', 'html_template', 'text_template','sms_template'];
```

## Note Tecniche
- Il campo `sms_template` deve essere presente nella tabella del database
- La traduzione SMS funziona solo se il package di localizzazione è configurato correttamente
- Nessun impatto negativo su funzionalità esistenti

## Pattern Identificato
**Pattern**: Quando si aggiungono nuovi campi traducibili, includerli sempre nella proprietà `$translatable` per supporto multilingue completo

**Anti-pattern**: Escludere campi traducibili dalla proprietà `$translatable` limitando le funzionalità multilingue

## Impatto su Altri File
Verificare che:
- La migrazione della tabella `mail_templates` includa il campo `sms_template`
- I form Filament includano il campo `sms_template` se necessario
- Le traduzioni includano le chiavi per `sms_template`

## Collegamenti
- [Notify Module Documentation](README.md)
- [SMS Implementation Guide](sms_implementation.md)
- [Mail Templates Structure](mail_templates_structure.md)
- [Translation Standards](translation_standards.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Root Conflict Resolution Guidelines](../../../docs/conflict-resolution-guidelines.md)
=======
- [Root Conflict Resolution Guidelines](../../../project_docs/conflict-resolution-guidelines.md)
>>>>>>> bf479cc (.)

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
