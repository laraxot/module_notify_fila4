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
# Correzioni per le Migrazioni JSON in Laravel

## Problema Identificato

Si è verificato un errore durante il tentativo di conversione di campi esistenti al formato JSON:

```
SQLSTATE[22032]: <<Unknown error>>: 3140 Invalid JSON text: "Invalid value." at position 0 in value for column '#sql-243_4da.subject'.
```

Questo errore indica che un campo contenente dati non-JSON validi sta per essere convertito in una colonna di tipo JSON, causando un fallimento della migrazione.

## Causa Dettagliata

Quando si converte una colonna esistente a tipo JSON in Laravel/MySQL, tutti i dati presenti nella colonna devono essere già in formato JSON valido. Se anche un solo record contiene dati non conformi, la migrazione fallirà.

### Pattern Errato nella Migrazione

```php
// Pattern ERRATO - Tentativo di conversione diretta
if(in_array($this->getColumnType('subject'), ['text', 'string'])) {
    $table->json('subject')->nullable()->change();
}
```

Questo approccio fallisce se i dati esistenti non sono già in formato JSON valido. MySQL non esegue automaticamente la conversione da stringa a JSON.

## Soluzioni Corrette

### 1. Conversione e Pulizia dei Dati Prima della Migrazione

Il modo appropriato per gestire questa situazione è:

1. **Preparare i dati** prima di cambiare il tipo di colonna
2. **Convertire ogni valore** in formato JSON valido
3. **Solo dopo** cambiare il tipo di colonna

#### Implementazione con Raw SQL

```php
// In una migrazione separata o come parte di tableUpdate
if(in_array($this->getColumnType('subject'), ['text', 'string'])) {
    // Passo 1: Convertire i dati esistenti in formato JSON valido
    DB::table('mail_templates')->whereNotNull('subject')->update([
        'subject' => DB::raw("JSON_OBJECT('it', subject)")
    ]);
    
    // Passo 2: Gestire i valori NULL (opzionale)
    DB::table('mail_templates')->whereNull('subject')->update([
        'subject' => DB::raw("JSON_OBJECT('it', '')")
    ]);
    
    // Passo 3: Ora è sicuro cambiare il tipo di colonna
    $table->json('subject')->nullable()->change();
}
```

#### Implementazione con Eloquent

In alternativa, puoi utilizzare Eloquent per una maggiore flessibilità:

```php
// In uno script o una migrazione separata
MailTemplate::whereNotNull('subject')->each(function ($template) {
    $template->subject = ['it' => $template->subject];
    $template->save();
});

// Dopo la conversione dei dati, eseguire la migrazione di modifica tipo
```

### 2. Migrazione con Colonna Temporanea

Un'altra strategia sicura è:

1. **Creare una nuova colonna** JSON 
2. **Migrare i dati** dalla vecchia colonna a quella nuova, convertendoli
3. **Eliminare la vecchia colonna**
4. **Rinominare** la nuova colonna

```php
// Nella migrazione
if(in_array($this->getColumnType('subject'), ['text', 'string'])) {
    // Passo 1: Aggiungi colonna temporanea
    $table->json('subject_json')->nullable()->after('subject');
    
    // Passo 2: Migra i dati (da eseguire dopo la modifica dello schema)
    Schema::table('mail_templates', function (Blueprint $table) {
        DB::statement("UPDATE mail_templates SET subject_json = JSON_OBJECT('it', subject) WHERE subject IS NOT NULL");
    });
    
    // Passo 3: Elimina vecchia colonna
    $table->dropColumn('subject');
    
    // Passo 4: Rinomina nuova colonna
    $table->renameColumn('subject_json', 'subject');
}
```

## Best Practices per Migrazioni JSON

1. **Mai convertire direttamente** campi esistenti a JSON senza verificare e preparare i dati
2. **Sempre validare** il formato JSON dei dati esistenti prima della conversione
3. **Utilizzare migrations separate** per la trasformazione dei dati e per la modifica dello schema
4. **Testare in ambiente di staging** prima di applicare in produzione

### Pattern Corretto per Nuovi Campi JSON

```php
// In tableCreate per nuove installazioni
$table->json('subject')->nullable();

// In tableUpdate per installazioni esistenti
if(!$this->hasColumn('subject')) {
    $table->json('subject')->nullable()->after('nome_colonna_precedente');
} elseif(in_array($this->getColumnType('subject'), ['text', 'string'])) {
    // Attenzione: Questa conversione richiede preparazione dei dati
    // Utilizzare una delle strategie sopra indicate
}
```

<<<<<<< HEAD
## Applicazione a <nome progetto>

Nel contesto di <nome progetto>, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
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
## Applicazione a <nome progetto>

Nel contesto di <nome progetto>, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 1487fe812 (.)
## Applicazione a 

Nel contesto di , tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
<<<<<<< HEAD
<<<<<<< HEAD
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
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 6608a1a0 (.)
=======
<<<<<<< HEAD
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 23cbbaf5 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 909e45af (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> bb7e77c2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> b99af5a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f3086887 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 3d462363 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 54ad93c4 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 6e12a84b (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 545977c8 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 69fa7d37 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 6608a1a0 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> bb7e77c2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> b99af5a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f3086887 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 3d462363 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 54ad93c4 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 6e12a84b (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 545977c8 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 69fa7d37 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 6608a1a0 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 23cbbaf5 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 909e45af (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47bbf2b1c (.)
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
## Applicazione a 

Nel contesto di , tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
## Applicazione a <nome progetto>

Nel contesto di <nome progetto>, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ca10d6ad (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a29a4728 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9721a5b2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9d3810d0 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> d38aa9d2 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9e7ba5b6 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ca10d6ad (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> febe79e3 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdad57c30 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9721a5b2 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 1442e291 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9d3810d0 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> d38aa9d2 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9e7ba5b6 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a404ea71 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c6d84fe6 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> febe79e3 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> a29a4728 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 275b7ad99 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
## Applicazione a SaluteOra

Nel contesto di SaluteOra, tutte le migrazioni che coinvolgono la conversione di campi esistenti a JSON devono seguire queste linee guida, in particolare:
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)

1. Le migrazioni per `mail_templates` e tabelle simili
2. Campi multilingua che utilizzano il trait `HasTranslations`
3. Campi contenenti configurazioni o meta-dati strutturati

## Verifiche da Effettuare su tutto il Progetto

È necessario esaminare tutte le migrazioni esistenti per identificare pattern simili di conversione diretta a JSON:

```bash
<<<<<<< HEAD
grep -r "json.*change" /var/www/html/<nome progetto>/laravel/Modules/*/database/migrations/
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
grep -r "json.*change" /var/www/html/<nome progetto>/laravel/Modules/*/database/migrations/
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 909e45af (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> b99af5a8 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f3086887 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 3d462363 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6e12a84b (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 545977c8 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 69fa7d37 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 23cbbaf5 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> b99af5a8 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f3086887 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 3d462363 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6e12a84b (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 545977c8 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 69fa7d37 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 23cbbaf5 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 909e45af (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/<nome progetto>/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ca10d6ad (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> febe79e3 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a29a4728 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9721a5b2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 1442e291 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> fcaebc79 (rebase 210)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 4fc21b78 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9d3810d0 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> d38aa9d2 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> c8b1c8bf (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9cf0dc90 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> febe79e3 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a29a4728 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9721a5b2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 1442e291 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> fcaebc79 (rebase 210)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 4fc21b78 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9d3810d0 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> d38aa9d2 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> c8b1c8bf (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9cf0dc90 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b85 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
grep -r "json.*change" /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/*/database/migrations/
>>>>>>> 75179b855 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> ca10d6ad (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> febe79e3 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a29a4728 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
grep -r "json.*change" /var/www/html/saluteora/laravel/Modules/*/database/migrations/
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
```

I problemi più comuni si verificano in migrazioni che coinvolgono campi con traduzioni multilingua o configurazioni serializzate.

## Riferimenti

- [Laravel Doctrine - Working with JSON columns](https://www.laraveldoctrine.org/docs/1.3/orm/working-with-objects/json-objects)
- [MySQL JSON Functions Reference](https://dev.mysql.com/doc/refman/8.0/en/json-functions.html)
- [Laravel Migration & Database Guide](https://laravel.com/docs/10.x/migrations)
- [Converting Database Column Types in Laravel](https://laravel.com/docs/10.x/migrations#modifying-columns)
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
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
