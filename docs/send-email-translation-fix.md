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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
# Fix Traduzioni File send_email.php - Modulo Notify

## Problemi Identificati

### 1. Conflitti di Merge Non Risolti
- Presenza di marcatori git  nel file
- Codice duplicato e inconsistente

### 2. Sintassi Obsoleta
- Uso di `array()` invece di sintassi breve `[]`
- Mancanza di `declare(strict_types=1);`

### 3. Struttura Non Espansa
- Campi con struttura semplificata invece di struttura espansa
- Mancanza di `label`, `placeholder`, `help` per alcuni campi

### 4. Campi Mancanti
- Programmazione invio (`scheduled_at`)
- Configurazione mittente (`from_email`, `from_name`)
- Priorità email (`priority`)
- Categoria email (`category`)
- Tracking (`tracking_enabled`)

### 5. Azioni Incomplete
- Messaggi di successo/errore mancanti
- Conferme modali incomplete

### 6. Validazione Incompleta
- Messaggi di validazione specifici mancanti
- Regole di validazione non documentate

## Soluzioni Implementate

### ✅ Struttura Espansa Completa
Ogni campo ora ha la struttura espansa completa:
```php
'field_name' => [
    'label' => 'Etichetta Campo',
    'placeholder' => 'Placeholder diverso',
    'help' => 'Testo di aiuto specifico',
    'description' => 'Descrizione del campo',
    'tooltip' => 'Tooltip informativo',
    'helper_text' => '', // Vuoto perché diverso da placeholder
],
```

### ✅ Regola Critica: Tooltip e Helper Text
**REGOLA IMPORTANTE**: Ogni campo con `label` e `placeholder` DEVE avere:
- `tooltip`: Informazione aggiuntiva per l'utente
- `helper_text`: Impostato a `''` quando diverso da placeholder

### ✅ Campi Aggiunti
- `sections`: Organizzazione logica dei campi
- `to`, `cc`, `bcc`: Separazione destinatari
- `content`: Contenuto testuale separato da HTML
- `parameters`: Parametri JSON per template
- `priority`: Priorità di invio
- `category`: Categorizzazione email
- `tracking_enabled`: Abilitazione tracking

### ✅ Azioni Migliorate
- Messaggi di successo/errore completi
- Conferme modali con descrizioni dettagliate
- Tooltip per ogni azione

### ✅ Validazione Completa
- Messaggi specifici per ogni regola di validazione
- Validazione per tutti i nuovi campi

## Struttura Finale

### Sezioni Organizzate
1. **Dettagli Email**: Oggetto, template
2. **Destinatari**: To, CC, BCC
3. **Contenuto**: Testo, HTML, parametri
4. **Allegati**: File da allegare
5. **Programmazione**: Invio programmato
6. **Avanzate**: Priorità, categoria, tracking

### Campi Principali
- `subject`: Oggetto email
- `template_id`: Template predefinito
- `to`: Destinatario principale
- `cc`: Copia conoscenza
- `bcc`: Copia nascosta
- `from_email`: Email mittente
- `from_name`: Nome mittente
- `content`: Contenuto testuale
- `body_html`: Contenuto HTML
- `parameters`: Parametri template
- `attachments`: File allegati
- `priority`: Priorità invio
- `scheduled_at`: Programmazione
- `category`: Categoria email
- `tracking_enabled`: Abilita tracking

### Azioni Disponibili
- `send`: Invio immediato
- `preview`: Anteprima email
- `save_draft`: Salva bozza
- `schedule`: Programma invio
- `test_smtp`: Test configurazione

## Conformità Standard

### ✅ Sintassi Moderna
- `declare(strict_types=1);` presente
- Sintassi breve array `[]`
- Tipizzazione corretta

### ✅ Struttura Espansa
- Tutti i campi con struttura completa
- Tooltip e helper_text per ogni campo
- Organizzazione logica in sezioni

### ✅ Completezza
- Tutti i campi necessari presenti
- Azioni complete con messaggi
- Validazione specifica

### ✅ Coerenza
- Naming consistente
- Terminologia uniforme
- Struttura standardizzata

## Collegamenti

- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
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
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
=======
>>>>>>> 7624f916 (.)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> f963d2c0 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> ee18dd92 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 66453ace (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 2a97406c (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4f042b88 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 712617d3 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 36ac4fc1 (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)

## Note Importanti

### Regola Critica: Tooltip e Helper Text
**OGNI CAMPO** con `label` e `placeholder` deve avere:
```php
'tooltip' => 'Informazione aggiuntiva per l\'utente',
'helper_text' => '', // Vuoto se diverso da placeholder
```

### Struttura Espansa Obbligatoria
```php
'field_name' => [
    'label' => 'Etichetta',
    'placeholder' => 'Placeholder diverso',
    'help' => 'Aiuto specifico',
    'description' => 'Descrizione campo',
    'tooltip' => 'Tooltip informativo',
    'helper_text' => '',
],
```

<<<<<<< HEAD
*Ultimo aggiornamento: 2025-01-06* 
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
*Ultimo aggiornamento: 2025-01-06* 
=======
>>>>>>> 5fd545e4 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 2a97406c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4f042b88 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 712617d3 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4fc21b78 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 9c45d9bd (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> eb62d6cf (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 8c8937e7 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 36ac4fc1 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> c8b1c8bf (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 9cf0dc90 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 75179b85 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> f963d2c0 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> ee18dd92 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 2a97406c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4f042b88 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 712617d3 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4fc21b78 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 9c45d9bd (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> eb62d6cf (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 8c8937e7 (rebase 210)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 36ac4fc1 (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> c8b1c8bf (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
