<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
# Utilizzo di PHPStan nel Progetto <nome progetto>

## Esecuzione di PHPStan

PHPStan deve essere eseguito dalla directory principale di Laravel. Il comando corretto è:

```bash
cd /path/to/laravel
./vendor/bin/phpstan analyse -l 9 [percorso/al/modulo]
```

### Esempi di utilizzo

Analizzare un singolo modulo:
```bash
./vendor/bin/phpstan analyse -l 9 Modules/Notify
```

Analizzare più moduli contemporaneamente:
```bash
./vendor/bin/phpstan analyse -l 9 Modules/Rating Modules/User Modules/Notify
```

Analizzare tutti i moduli (attenzione, può richiedere tempo):
```bash
./vendor/bin/phpstan analyse -l 9 Modules/*
```

## Opzioni utili

- `-l 9` : imposta il livello di analisi a 9 (massimo)
- `--debug` : mostra ulteriori informazioni per il debugging
- `--memory-limit=2G` : imposta il limite di memoria per PHPStan (utile per progetti grandi)
- `--error-format=table` : formatta l'output come tabella
- `--no-progress` : disattiva la barra di progresso

## PHPStan e CI/CD

Quando si esegue PHPStan in un ambiente di CI/CD, è consigliabile utilizzare:

```bash
./vendor/bin/phpstan analyse -l 9 --no-progress --error-format=github Modules/*
```

## Architettura del Modulo Notify

Il modulo Notify implementa un sistema di notifiche multicanale che richiede un'attenta organizzazione strutturale per garantire l'affidabilità dell'analisi statica.

### Organizzazione Concettuale

Il modulo è organizzato seguendo il principio di separazione delle responsabilità, con differenti componenti che si occupano di:

* **Generazione notifiche**: Logica per la creazione e personalizzazione dei messaggi
* **Invio multicanale**: Adattatori per diversi canali di comunicazione (push, email, SMS)
* **Monitoraggio e tracking**: Meccanismi per tracciare le notifiche inviate

### Separazione Namespace-Directory

Il modulo segue una chiara distinzione tra organizzazione fisica e logica:

#### 1. Struttura Fisica delle Directory

* **Codice applicativo**: Risiede nella directory `app/` del modulo
  ```
  Modules/Notify/app/Models/          <-- Entità dati (Notification, Channel, ecc.)
  Modules/Notify/app/Actions/         <-- Azioni di notifica
  Modules/Notify/app/Services/        <-- Servizi di invio (in migrazione verso Actions)
  ```

* **Traduzioni**: Si trovano direttamente nella directory `lang/` del modulo
  ```
  Modules/Notify/lang/it/            <-- Traduzioni italiane delle notifiche
  Modules/Notify/lang/en/            <-- Traduzioni inglesi delle notifiche
  ```

* **Configurazione**: A livello root del modulo
  ```
  Modules/Notify/config/notification.php   <-- Configurazione canali e opzioni
  ```

La documentazione completa sulla struttura dei moduli è disponibile in `docs/directory_structure.md`.

## Risoluzione dei problemi comuni

### "Impossibile trovare file"

Se PHPStan riporta "No files found to analyse", verificare:

1. Di essere nella directory `/path/to/laravel`
2. Che il percorso al modulo sia corretto
3. Che il modulo contenga effettivamente dei file PHP

### Errori di memoria

Se si verificano errori di memoria, aumentare il limite:

```bash
php -d memory_limit=2G ./vendor/bin/phpstan analyse -l 9 Modules/*
```

### Escludere file o directory

È possibile configurare esclusioni nel file `phpstan.neon`:

```yaml
parameters:
    excludePaths:
        - Modules/*/Tests/*
        - Modules/*/Vendor/*
```

## Configurazione avanzata

Il file `phpstan.neon` nella directory Laravel contiene le configurazioni personalizzate per il progetto.
### Versione HEAD


## Collegamenti tra versioni di phpstan-usage.md
<<<<<<< HEAD
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
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
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 6608a1a0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 23cbbaf5 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2a97406c (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 909e45af (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f042b88 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36321fcb (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> f3086887 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fdb24863 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 3d462363 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 54ad93c4 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> eb62d6cf (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 6e12a84b (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 545977c8 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36ac4fc1 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 69fa7d37 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fbed41ac (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> c8b1c8bf (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9cf0dc90 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2a97406c (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 909e45af (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f042b88 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bb7e77c2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36321fcb (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> b99af5a8 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fdb24863 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 54ad93c4 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> eb62d6cf (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 6e12a84b (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 545977c8 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36ac4fc1 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 69fa7d37 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fbed41ac (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> c8b1c8bf (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9cf0dc90 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b855 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 6608a1a0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 23cbbaf5 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 909e45af (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bb7e77c2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36321fcb (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> b99af5a8 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)


### Versione Incoming


---

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
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
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
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
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 5fd545e4 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 70175d0c4 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
