<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
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
>>>>>>> 36321fcb (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Root](../project_docs/translation_standards_links.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)- [Documentazione Root](../project_docs/translation_standards_links.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
- [Documentazione Root](../project_docs/translation_standards_links.md)
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
- [Documentazione Root](../project_docs/translation_standards_links.md)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
- [Regole Helper Text](../project_docs/translation-helper-text-standards.md)
- [Best Practices Filament](../project_docs/filament_translation_best_practices.md)
=======
>>>>>>> d284d65 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
<<<<<<< HEAD
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> c8b1c8bf (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 9cf0dc90 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 75179b855 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Documentazione Root](../docs/translation_standards_links.md)
- [Regole Helper Text](../docs/translation-helper-text-standards.md)
- [Best Practices Filament](../docs/filament_translation_best_practices.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
- [Documentazione Root](../project_docs/translation_standards_links.md)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
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
>>>>>>> fd1fcc4c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4f3927d7 (.)
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
>>>>>>> 36321fcb (.)
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
>>>>>>> fd1fcc4c (.)
=======
*Ultimo aggiornamento: 2025-01-06* 
>>>>>>> 4f3927d7 (.)
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
>>>>>>> 75179b855 (.)
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
