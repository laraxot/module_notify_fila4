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
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
# Regole di Percorso e Interfacce nel Modulo Notify

## Principi Fondamentali

1. **Regola Principale per le Interfacce**
   - Le interfacce DEVONO essere posizionate in `/app/Contracts/`
   - MAI in sottodirectory di Contracts come `/app/Contracts/SMS/`
   - MAI nelle directory di implementazione come `/app/Actions/SMS/`

2. **Regola Principale per i Namespace**
   - Namespace corretto: `Modules\Notify\Contracts`
   - Namespace ERRATO: `Modules\Notify\Contracts\SMS`
   - Namespace ERRATO: `Modules\Notify\Actions\SMS`

## Struttura delle Directory e Namespace

### Directory Fisiche (path su disco)
```
<<<<<<< HEAD
/var/www/html/<nome progetto>/laravel/Modules/Notify/
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
/var/www/html/<nome progetto>/laravel/Modules/Notify/
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 69fa7d37 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/<nome progetto>/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
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
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> c7d5eaf96 (.)
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9d3810d0 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9e7ba5b6 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9cf0dc90 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9721a5b2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 1442e291 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> fcaebc79 (rebase 210)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 4fc21b78 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> d38aa9d2 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> c8b1c8bf (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9cf0dc90 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b85 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
/var/www/html/saluteora/laravel/Modules/Notify/
/var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/
>>>>>>> 75179b855 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a404ea71 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> ca10d6ad (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> febe79e3 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> a29a4728 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
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
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
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
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
/var/www/html/saluteora/laravel/Modules/Notify/
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
├── app/                           # Directory fisica con app minuscolo
│   ├── Actions/                  
│   │   ├── Email/                # Azioni per email
│   │   ├── SMS/                  # Azioni per SMS
│   │   └── WhatsApp/             # Azioni per WhatsApp
│   ├── Contracts/                # TUTTE le interfacce qui (no sottodirectory)
│   ├── Datas/                    # Data Transfer Objects
│   └── ...
└── config/
    ├── sms.php                   # Config per SMS
    ├── mail.php                  # Config per Email
    └── whatsapp.php              # Config per WhatsApp
```

### Namespace (in codice PHP)
```php
namespace Modules\Notify\Actions\SMS;      // Per le azioni SMS
namespace Modules\Notify\Actions\WhatsApp; // Per le azioni WhatsApp
namespace Modules\Notify\Contracts;        // Per TUTTE le interfacce
namespace Modules\Notify\Datas;            // Per tutti i DTO
```

## Convenzioni di Nomenclatura

### Interfacce
- Usare suffisso `Interface`: `SmsProviderActionInterface`
- Usare prefisso descrittivo: `SmsProvider`, `EmailProvider`, `WhatsAppProvider`
- MAI usare solo il servizio: `SmsInterface` (troppo generico)

### Implementazioni
- Usare prefisso `Send` seguito dal provider: `SendNetfunSMSAction`
- Usare suffisso `Action` per le azioni: `SendTwilioWhatsAppAction`
- Mantenere coerenza nella capitalizzazione: `SMS` maiuscolo, non `Sms`

### DTO
- Usare nomi descrittivi: `SmsData`, `WhatsAppData`, `EmailData`
- Ogni campo deve essere fortemente tipizzato
- Utilizzare solo proprietà readonly in PHP 8.2+

## Errori Comuni da Correggeere Immediatamente

1. **Interfacce nei percorsi sbagliati**
   - ❌ `/app/Actions/SMS/SmsActionInterface.php`
   - ❌ `/app/Contracts/SMS/SmsActionInterface.php`
   - ✅ `/app/Contracts/SmsProviderActionInterface.php`

2. **Interfacce con nomenclatura errata**
   - ❌ `SmsActionInterface` (troppo generico)
   - ✅ `SmsProviderActionInterface` (chiaro e specifico)

3. **Implementazioni che usano l'interfaccia sbagliata**
   - ❌ `implements SmsActionInterface`
   - ✅ `implements SmsProviderActionInterface`

## Azioni di Correzione Richieste

Per ogni nuova implementazione (come WhatsApp) o correzione di implementazioni esistenti:

1. Verificare che le interfacce siano in `/app/Contracts/`
2. Verificare che i namespace siano corretti
3. Verificare che le classi implementino le interfacce corrette
4. Verificare che i DTO siano nella directory corretta
5. Aggiornare la documentazione per riflettere l'architettura corretta

## Motivazioni Architetturali

Questa struttura garantisce:

1. **Separazione delle Responsabilità**: Interfacce separate dalle implementazioni
2. **Inversione delle Dipendenze**: Dependency Injection basato su interfacce
3. **Coerenza**: Pattern coerenti in tutto il modulo
4. **Manutenibilità**: Facile trovare e comprendere il codice
5. **Estendibilità**: Aggiungere nuovi provider senza modificare l'architettura
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
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
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> c8b1c8bf (.)
>>>>>>> 7ceb00286 (.)
=======
>>>>>>> 379ffe3f3 (.)
