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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fdb24863 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d3810d0 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> eb62d6cf (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c96b91fe (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> d38aa9d2 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 8c8937e7 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> d45a0226 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fd1fcc4c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> cb5f23b0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f9ec4f86 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4f3927d7 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4b544042 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> cccb594f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9c45d9bd (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 7ffa94fc (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d3810d0 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 82e5ee2d (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> d38aa9d2 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 5b50927d (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 36ac4fc1 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> d45a0226 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fd1fcc4c (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> cb5f23b0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f9ec4f86 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4f3927d7 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4b544042 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> cccb594f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> c8b1c8bf (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9cf0dc90 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b85 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> 75179b855 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> ca10d6ad (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 66453ace (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4c323e61 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> febe79e3 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 98d837b9 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9721a5b2 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 116df547 (.)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/project_docs/`.
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- Documentare ogni plugin in `/docs` e `/Themes/One/docs/`.
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ee18dd92 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2941b0bd (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ca10d6ad (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4c323e61 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> febe79e3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2a97406c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 98d837b9 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a29a4728 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4f042b88 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4e4a7796 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> c7a4727b (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d84f153 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9721a5b2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 712617d3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 1442e291 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fdb24863 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 84082535 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1c96b91fe (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 36ac4fc1 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> d45a0226 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fd1fcc4c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> cb5f23b0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f9ec4f86 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4f3927d7 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4b544042 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> cccb594f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> c8b1c8bf (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9cf0dc90 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ee18dd92 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2941b0bd (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ca10d6ad (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 66453ace (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> febe79e3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2a97406c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a29a4728 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4f042b88 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4e4a7796 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> c7a4727b (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d84f153 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9721a5b2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 712617d3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 116df547 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 1442e291 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 84082535 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 5b50927d (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 36ac4fc1 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> d45a0226 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fd1fcc4c (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> cb5f23b0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f9ec4f86 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4f3927d7 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4b544042 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> cccb594f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> c8b1c8bf (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9cf0dc90 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b85 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> 75179b855 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2941b0bd (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> ca10d6ad (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 66453ace (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4c323e61 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> febe79e3 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 98d837b9 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a29a4728 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4e4a7796 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> c7a4727b (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d84f153 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9721a5b2 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 116df547 (.)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/project_docs/plugins)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
- [Tailwind CSS Plugin Docs](https://tailwindcss.com/docs/plugins)
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
