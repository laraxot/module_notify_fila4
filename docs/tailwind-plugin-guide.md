<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Guida: Creazione di Plugin Tailwind Custom per <nome progetto>

Questa guida mostra come creare, documentare e integrare plugin custom Tailwind CSS per pattern condivisi (bottoni, alert, badge, ecc.) secondo le best practice Webcrunch e le regole <nome progetto>.

---

## 1. Cos'è un Plugin Tailwind
Un plugin Tailwind permette di aggiungere nuove utility, componenti o variant personalizzate, centralizzando la logica di stile e favorendo la coerenza tra moduli/temi.

---

## 2. Struttura Base di un Plugin
**Esempio: plugin per button variants**

**plugins/button-variants.js**
```js
const plugin = require('tailwindcss/plugin');

module.exports = plugin(function({ addComponents, theme }) {
  const buttons = {
    '.btn': {
      padding: `${theme('spacing.2')} ${theme('spacing.4')}`,
      borderRadius: theme('borderRadius.lg'),
      fontWeight: theme('fontWeight.medium'),
      display: 'inline-flex',
      alignItems: 'center',
      justifyContent: 'center',
      transition: 'background 0.2s',
    },
    '.btn-primary': {
      backgroundColor: theme('colors.blue.600'),
      color: theme('colors.white'),
      '&:hover': {
        backgroundColor: theme('colors.blue.700'),
      },
    },
    '.btn-secondary': {
      backgroundColor: theme('colors.gray.200'),
      color: theme('colors.gray.900'),
      '&:hover': {
        backgroundColor: theme('colors.gray.300'),
      },
    },
  };
  addComponents(buttons);
});
```

---

## 3. Integrazione nel Progetto
**tailwind.config.js**
```js
module.exports = {
  // ...
  plugins: [
    require('./plugins/button-variants'),
    // altri plugin custom...
  ],
};
```

---

## 4. Best Practice
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 3d462363 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 3d462363 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
- Usare i plugin per pattern condivisi (bottoni, alert, badge, card, ecc.).
- Versionare e testare i plugin per evitare regressioni.
- Integrare plugin solo se realmente riutilizzati da più moduli/temi.
- Favorire la coerenza di naming e struttura.

---

## 5. Esempi di Plugin Utili per <nome progetto>
- **Button variants**: `.btn`, `.btn-primary`, `.btn-secondary`, ecc.
- **Alert**: `.alert-info`, `.alert-success`, ecc.
- **Badge**: `.badge`, `.badge-success`, ecc.
- **Card**: `.card`, `.card-header`, `.card-footer`.

---

## 6. Collegamenti e Risorse
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 3d462363 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 3d462363 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
- [Webcrunch: Creare Plugin Tailwind](https://webcrunch.com/posts/create-a-tailwind-css-plugin-from-scratch)

---

## Raccomandazioni Finali
- Centralizzare i plugin condivisi per evitare duplicazione.
- Documentare pattern e snippet di utilizzo.
- Integrare plugin custom solo se portano reale valore e riuso.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
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
