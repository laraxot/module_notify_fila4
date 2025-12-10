<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a404ea71 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a404ea71 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a404ea71 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b85 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f963d2c0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a404ea71 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2941b0bd (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ca10d6ad (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4c323e61 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> febe79e3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2a97406c (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 98d837b9 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a29a4728 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f042b88 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4e4a7796 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> c7a4727b (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9d84f153 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9721a5b2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 116df547 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 1442e291 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fdb24863 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 84082535 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fcaebc79 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> eb62d6cf (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 5b50927d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36ac4fc1 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> d45a0226 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fd1fcc4c (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> cb5f23b0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f9ec4f86 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f3927d7 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4b544042 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> cccb594f (.)
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
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a404ea71 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ee18dd92 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2941b0bd (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> ca10d6ad (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 66453ace (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4c323e61 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> febe79e3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 2a97406c (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 98d837b9 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> a29a4728 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f042b88 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4e4a7796 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> c7a4727b (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9d84f153 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9721a5b2 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 712617d3 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 116df547 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 1442e291 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fdb24863 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 84082535 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fcaebc79 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 4fc21b78 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9c45d9bd (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 7ffa94fc (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9d3810d0 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> eb62d6cf (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 82e5ee2d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> d38aa9d2 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 8c8937e7 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 5b50927d (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 36ac4fc1 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> d45a0226 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> fd1fcc4c (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> cb5f23b0 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> f9ec4f86 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4f3927d7 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 4b544042 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> cccb594f (.)
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
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
* [phpstan-usage.md](../../Chart/docs/phpstan-usage.md)
>>>>>>> 3f537838 (.)
=======
* [phpstan-usage.md](../../Chart/project_docs/phpstan-usage.md)
>>>>>>> 75179b855 (.)


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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
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
