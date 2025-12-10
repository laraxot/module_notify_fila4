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
<<<<<<< HEAD
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
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
# XotBaseMigration: Best Practices

## Introduzione

Questo documento illustra le best practices per l'utilizzo di `XotBaseMigration` , con particolare focus su come gestire correttamente le verifiche di colonne e tabelle durante le migrazioni.

## Errori comuni

### 1. Utilizzo diretto di Schema::hasColumn()

**NON UTILIZZARE MAI** il metodo `Schema::hasColumn()` direttamente nelle migrazioni che estendono `XotBaseMigration`:

```php
// ERRATO: Non utilizzare mai
if (\Illuminate\Support\Facades\Schema::hasColumn('mail_templates', 'subject_json')) {
    // ...
}
```

### 2. Utilizzo di prefissi tabelle hardcoded

**NON UTILIZZARE MAI** i nomi delle tabelle hardcoded:

```php
// ERRATO: Non utilizzare mai
DB::table('mail_templates')->where(...);
```

## Approccio corretto

### 1. Verificare l'esistenza delle colonne

Utilizzare sempre i metodi forniti da `XotBaseMigration`:

```php
// CORRETTO
if ($this->hasColumn('column_name')) {
    // ...
}
```

### 2. Verificare il tipo di colonna

```php
// CORRETTO
if (!$this->isColumnType('subject', 'json')) {
    // ...
}
```

### 3. Pattern sicuro per la conversione JSON

```php
// CORRETTO
if ($this->hasColumn('subject') && !$this->isColumnType('subject', 'json')) {
    // 1. Crea colonna temporanea
    if (!$this->hasColumn('subject_json')) {
        $table->json('subject_json')->nullable()->after('subject');
    }
    
    // 2. Migra i dati solo se la colonna temporanea esiste
    if ($this->hasColumn('subject_json')) {
        DB::table('mail_templates')->chunkById(100, function ($records) {
            foreach ($records as $record) {
                if (!empty($record->subject)) {
                    DB::table('mail_templates')
                        ->where('id', $record->id)
                        ->update([
                            'subject_json' => json_encode(['it' => $record->subject])
                        ]);
                }
            }
        });
    }
    
    // 3. Rimuovi e rinomina
    $table->dropColumn('subject');
    $table->renameColumn('subject_json', 'subject');
}
```

## Perché non usare Schema::hasColumn()?

`XotBaseMigration` gestisce:

1. **Connessioni multiple**: Utilizzando `getConn()` per determinare la connessione corretta
2. **Prefissi tabelle**: Aggiungendo automaticamente i prefissi alle tabelle
3. **Multi-tenant**: Gestendo le tabelle su schemi/database multipli
4. **Transaction safety**: Con il corretto rollback e commit delle transazioni

Quando si utilizza `Schema::hasColumn()` direttamente, si bypassa tutta questa logica, portando a errori come:

- Operazioni sulla tabella o connessione errata
- Ignorare i prefissi tabelle configurati
- Problemi con le transazioni durante le migrazioni

## Come evitare errori

1. **Verifica esistenza colonna**: 
   ```php
   $this->hasColumn('column_name')
   ```

2. **Verifica tipo colonna**: 
   ```php
   $this->isColumnType('column_name', 'expected_type')
   ```

3. **Ottieni tipo colonna**: 
   ```php
   $this->getColumnType('column_name')
   ```

## Riferimenti

<<<<<<< HEAD
- [Xot Module Documentation](/var/www/html/<nome progetto>/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/<nome progetto>/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
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
- [Xot Module Documentation](/var/www/html/<nome progetto>/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/<nome progetto>/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
- [Xot Module Documentation](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
- [Xot Module Documentation](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 43dd68f4b (.)
>>>>>>> 75179b85 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 6608a1a0 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 909e45af (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> bb7e77c2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> b99af5a8 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f3086887 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 3d462363 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 545977c8 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 69fa7d37 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 6608a1a0 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 23cbbaf5 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> b99af5a8 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f3086887 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 3d462363 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 545977c8 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 69fa7d37 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 6608a1a0 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 23cbbaf5 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 909e45af (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> bb7e77c2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f3086887 (rebase 210)
=======
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
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
- [Xot Module Documentation](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
- [Xot Module Documentation](/var/www/html/<nome progetto>/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/<nome progetto>/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
- [Xot Module Documentation](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
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
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 6ad5224fb (.)
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ca10d6ad (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a29a4728 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9721a5b2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b85076e48 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21a6fa9bc (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ca10d6ad (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9721a5b2 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 1442e291 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 252fa579e (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a404ea71 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c6d84fe6 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> a29a4728 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 275b7ad99 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
- [Xot Module Documentation](/var/www/html/saluteora/laravel/Modules/Xot/docs/MIGRATIONS.md)
- [JSON Migration Best Practices](/var/www/html/saluteora/laravel/Modules/Notify/docs/mail-templates/JSON_MIGRATION_FIXES.md)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
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
=======
>>>>>>> 909e45af (.)
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
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
