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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
# Approfondimento Completo: Tailwind CSS su Webcrunch

Fonte: [Webcrunch Tailwind CSS Collection](https://webcrunch.com/collections/tailwind-css)

---

## Cos'è Tailwind CSS secondo Webcrunch
Tailwind CSS è un framework CSS utility-first che permette di costruire interfacce moderne e responsive in modo estremamente rapido e modulare, sfruttando classi predefinite e personalizzabili. Webcrunch raccoglie una serie di guide che coprono sia l’uso base che pattern avanzati, plugin e componenti riutilizzabili.

---

## Tutorial e Pattern Analizzati

### 1. **Border Gradients**
- Come applicare gradienti solo ai bordi usando utility class dedicate.
- Approccio: wrapper con overflow-hidden, pseudo-elementi, e classi `border-gradient` custom.
- Vantaggi: effetti moderni senza scrivere CSS custom.
- Svantaggi: attenzione alla compatibilità cross-browser.

### 2. **Navbar Responsive con Dropdown**
- Creazione step-by-step di una navbar mobile-first, con dropdown accessibili.
- Uso di utility responsive (`md:`, `lg:`), transizioni animate e gestione stato con Alpine.js o JS vanilla.
- Pattern: mobile-first, progressive enhancement, separazione markup/logica.
- Vantaggi: riusabilità e accessibilità.
- Svantaggi: attenzione a focus/keyboard navigation.

### 3. **Glow Effect Mouse-Tracking**
- Effetto "glow" che segue il mouse su elementi interattivi.
- Implementato con JS per tracking e classi Tailwind dinamiche.
- Pattern: UI engaging, utile per landing page o CTA.
- Vantaggi: effetto moderno, nessun CSS custom richiesto.
- Svantaggi: attenzione a performance su molti elementi.

### 4. **Creazione Plugin Tailwind CSS**
- Come estendere Tailwind creando plugin custom (es. nuovi button, utilities).
- Pattern: DRY, riuso, scalabilità.
- Vantaggi: centralizzazione logica di stile, team-friendly.
- Svantaggi: richiede conoscenza base di JS e Tailwind plugin API.

### 5. **Mega Menu**
- Mega menu responsive solo con utility Tailwind.
- Pattern: grid, flex, dropdown, breakpoint per mobile/desktop.
- Vantaggi: nessun CSS custom, solo utility class.
- Svantaggi: markup più verboso, attenzione all’accessibilità.

### 6. **Button Components**
- Componenti button riutilizzabili, combinando Tailwind e PostCSS.
- Pattern: classi composte, varianti (colori, size), focus su accessibilità.
- Vantaggi: coerenza UI, override semplice.
- Svantaggi: rischio di proliferazione classi se non si standardizza.

### 7. **Card Components**
- Varianti di "card" ispirate a Bootstrap, solo con utility Tailwind.
- Pattern: composizione, responsive, slot per contenuti variabili.
- Vantaggi: pattern flessibile per dashboard, liste, contenuti informativi.
- Svantaggi: attenzione a padding/margin per coerenza visiva.

---

## Vantaggi di Tailwind CSS (sintesi Webcrunch)
- **Produttività**: sviluppo rapido, meno context-switch tra HTML e CSS.
- **Personalizzazione**: override semplice via config, temi custom.
- **Responsive**: utility mobile-first, breakpoints intuitivi.
- **Componentizzazione**: pattern DRY, plugin custom, riuso.
- **Estendibilità**: plugin, compatibilità con PostCSS e tool moderni.
- **Accessibilità**: pattern suggeriti per focus, aria-label, keyboard navigation.

---

## Svantaggi e Criticità
- Verbosità markup se non si astraggono pattern ripetuti.
- Rischio di classi duplicate senza componentizzazione.
- Necessità di documentare e standardizzare pattern custom/plugin.
- Attenzione a performance su effetti JS avanzati (es. glow tracking su molti elementi).

---

## Pattern e Best Practice per <nome progetto>
- **Componenti riutilizzabili**: creare Blade component per bottoni, card, navbar seguendo pattern Tailwind.
- **Plugin custom**: centralizzare logica di stile condivisa (es. button, alert, badge) in plugin Tailwind.
- **Responsive-first**: sempre usare breakpoint e utility mobile-first.
- **Accessibilità**: seguire pattern Webcrunch per aria-label, focus, keyboard navigation.
- **Effetti avanzati**: usare solo dove necessari e se coerenti con UX/accessibilità.
<<<<<<< HEAD
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fdb24863 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9c45d9bd (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d3810d0 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> eb62d6cf (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c96b91fe (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> d38aa9d2 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 8c8937e7 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 36ac4fc1 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> d45a0226 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fd1fcc4c (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> cb5f23b0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f9ec4f86 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4f3927d7 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4b544042 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> cccb594f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9cf0dc90 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9c45d9bd (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 7ffa94fc (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d3810d0 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 82e5ee2d (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> d38aa9d2 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 5b50927d (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> d45a0226 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fd1fcc4c (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> cb5f23b0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f9ec4f86 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4f3927d7 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4b544042 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> cccb594f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9cf0dc90 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> 75179b855 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
- **Documentazione**: mantenere esempi e snippet aggiornati in `/docs` e in `/Themes/One/docs/`.
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)

---

## Collegamenti Utili e Fonti
- [Tailwind CSS Border Gradients Tutorial](https://webcrunch.com/posts/tailwind-css-border-gradients)
- [Responsive Tailwind Navbar with Dropdowns](https://webcrunch.com/posts/responsive-tailwind-navbar)
- [Mouse-tracking Glow Effect](https://webcrunch.com/posts/mouse-tracking-glow-effect-tailwind-css)
- [Create Tailwind CSS Plugins](https://webcrunch.com/posts/create-a-tailwind-css-plugin-from-scratch)
- [Code a mega menu with Tailwind CSS](https://webcrunch.com/posts/code-a-mega-menu-with-tailwind-css)
- [Tailwind CSS button components](https://webcrunch.com/posts/tailwind-css-button-components)
- [Tailwind CSS card components](https://webcrunch.com/posts/tailwind-css-card-components)

---

## Raccomandazioni Finali
- Integrare pattern Tailwind nelle UI Notify e in altri moduli <nome progetto>.
- Usare plugin custom e componenti Blade per evitare duplicazione classi.
- Documentare pattern e plugin condivisi.
- Favorire accessibilità e coerenza tra moduli e temi.
<<<<<<< HEAD
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
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
