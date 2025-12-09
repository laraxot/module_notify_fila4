<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# GrapesJS per Filament: Analisi e Best Practice

## Regola sulle rotte

Il file `routes/web.php` del modulo Notify **deve essere vuoto**.
- Tutta la gestione backoffice avviene tramite Filament, che registra le proprie rotte internamente.
- Il frontoffice è gestito tramite Volt/Folio, che ha i propri controller/rotte.
- **Non vanno mai aggiunte rotte custom in questo file**: aggiungerle è un errore grave che rompe la separazione tra backoffice e frontoffice.

**Vedi anche:**
- [structure.md](structure.md#regola-sulle-rotte)
- [database-mail.md](database-mail.md#regola-sulle-rotte)

---

## Collegamenti correlati
- [Regola sulle rotte vuote in structure.md](structure.md#regola-sulle-rotte)
- [Regola sulle rotte vuote in database-mail.md](database-mail.md#regola-sulle-rotte)

## Cos'è
[GrapesJS](https://grapesjs.com/) è un editor visuale drag-and-drop per HTML, pensato per la creazione di email, landing page e layout web. Il plugin [dotswan/filament-grapesjs-v3](https://github.com/dotswan/filament-grapesjs-v3) integra GrapesJS come campo custom in Filament, permettendo la modifica visuale di contenuti HTML direttamente dalle resource Filament.

---

## Funzionalità principali del plugin
- **Campo Filament custom** per editing HTML visuale (drag-and-drop)
- Supporta la creazione/modifica di template email, landing page, blocchi HTML
- Salvataggio del markup HTML direttamente nel database
- Personalizzazione dei blocchi, stili e componenti GrapesJS
- Possibilità di integrare l'editor in qualsiasi form/resource Filament
- Configurazione pubblicabile per personalizzare l'esperienza utente

---

## Vantaggi nell'adozione
- **Esperienza WYSIWYG avanzata**: editing visuale, anteprima in tempo reale
- **Drag-and-drop**: creazione di layout complessi senza conoscenze di codice
- **Personalizzazione**: aggiunta di blocchi custom, branding, componenti riutilizzabili
- **Perfetto per email e landing page**: markup ottimizzato per email/clienti web
- **Integrazione con sistemi di template**: ideale per sistemi Database Mail avanzati

---

## Limiti e considerazioni
- Il markup generato va validato per la compatibilità con i client email (se usato per email)
- Richiede configurazione attenta per evitare blocchi non desiderati o HTML non sicuro
- La UI GrapesJS può essere "pesante" su device datati o connessioni lente
- Non gestisce direttamente la logica di invio email, solo la parte di editing

---

## Best Practice di integrazione
- **Separare il campo HTML visuale dai dati strutturati** (es: soggetto, destinatari)
- **Validare e sanificare l'HTML** prima dell'invio o pubblicazione
- **Personalizzare i blocchi GrapesJS** per riflettere il branding del progetto
- **Utilizzare template di base** per facilitare la creazione di nuovi contenuti
- **Integrare con il sistema Database Mail**: usare GrapesJS per l'editing visuale dei template email salvati in DB
- **Testare i template su diversi client/email** per garantirne la resa

---

## Esempio di utilizzo in una Resource Filament
```php
use Dotswan\FilamentGrapesjs\Forms\Components\Grapesjs;

Grapesjs::make('body_html')
    ->label('Contenuto HTML')
    ->columnSpanFull(),
```

---

## Possibili estensioni per la nostra soluzione
- Integrazione nativa con EmailTemplate e Database Mail (vedi doc correlata)
- Blocchi custom per header, footer, logo, variabili dinamiche (es: {{ user.full_name }})
- Template starter per email transazionali, newsletter, landing page
- Preview integrata e validazione HTML/email
- Supporto multi-lingua e multi-tenant

---

## Link utili
- [Plugin GitHub](https://github.com/dotswan/filament-grapesjs-v3)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f963d2c0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 3f537838 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a404ea71 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f963d2c0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 3f537838 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a404ea71 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f963d2c0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 3f537838 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a404ea71 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f963d2c0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 3f537838 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a404ea71 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> ee18dd92 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 2941b0bd (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> ca10d6ad (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 66453ace (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 4c323e61 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> febe79e3 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 2a97406c (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 98d837b9 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a29a4728 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 4f042b88 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 4e4a7796 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> c7a4727b (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9d84f153 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9721a5b2 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 712617d3 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 116df547 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 1442e291 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> fdb24863 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 84082535 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> fcaebc79 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> eb62d6cf (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 5b50927d (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 36ac4fc1 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> d45a0226 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> fd1fcc4c (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> cb5f23b0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f9ec4f86 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 4f3927d7 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 4b544042 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> cccb594f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> c8b1c8bf (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 9cf0dc90 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> 75179b85 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> f963d2c0 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 3f537838 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> a404ea71 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> ee18dd92 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
>>>>>>> 2941b0bd (.)
=======
- [GrapesJS Docs](https://grapesjs.com/docs/)
=======
- [GrapesJS Docs](https://grapesjs.com/project_docs/)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
- [Filament Plugins](https://filamentphp.com/plugins)

---

**GrapesJS integrato in Filament rappresenta la soluzione ideale per un editor visuale avanzato di template email e landing page, facilmente estendibile e personalizzabile secondo le esigenze del progetto.**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
