<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Guida all'Implementazione delle Interfacce nel Modulo Notify

## Struttura delle Interfacce

Nel modulo Notify, le interfacce seguono una struttura specifica che è importante rispettare per garantire il corretto funzionamento del sistema.

### Posizionamento delle Interfacce

Le interfacce sono organizzate in due livelli:

1. **Interfacce Generiche**: Posizionate direttamente nella directory `app/Contracts/`
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   /var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 69fa7d37 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 69fa7d37 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
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
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> ca10d6ad (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> febe79e3 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a29a4728 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9721a5b2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 1442e291 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> fcaebc79 (rebase 210)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 4fc21b78 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9d3810d0 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> d38aa9d2 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> c8b1c8bf (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9cf0dc90 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> ca10d6ad (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> febe79e3 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a29a4728 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9721a5b2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 1442e291 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> fcaebc79 (rebase 210)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 4fc21b78 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9d3810d0 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> d38aa9d2 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> c8b1c8bf (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 9cf0dc90 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> 75179b855 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
   ```

2. **Interfacce Specifiche per Canale**: Posizionate in sottodirectory dedicate
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
   /var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 69fa7d37 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 69fa7d37 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/<nome progetto>/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
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
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> ca10d6ad (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> febe79e3 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a29a4728 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9721a5b2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 1442e291 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> fcaebc79 (rebase 210)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 4fc21b78 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9d3810d0 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> d38aa9d2 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> c8b1c8bf (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9cf0dc90 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> ca10d6ad (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> febe79e3 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a29a4728 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9721a5b2 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 1442e291 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> fcaebc79 (rebase 210)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 4fc21b78 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9d3810d0 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> d38aa9d2 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9e7ba5b6 (rebase 210)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> c8b1c8bf (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 9cf0dc90 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b85 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
   /var/www/html/_bases/base_techplanner_fila3_mono/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> 75179b855 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> a404ea71 (.)
=======
   /var/www/html/saluteora/laravel/Modules/Notify/app/Contracts/SMS/SmsActionContract.php
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
   ```

### Convenzioni di Naming

1. **Suffisso `Contract`**: Tutte le interfacce devono utilizzare il suffisso `Contract` e non `Interface`
   ```php
   // ✅ CORRETTO
   interface SmsActionContract
   
   // ❌ ERRATO
   interface SmsActionInterface
   ```

2. **Namespace Corretto**: Il namespace deve riflettere la posizione fisica del file
   ```php
   // Per interfacce nella directory principale
   namespace Modules\Notify\Contracts;
   
   // Per interfacce in sottodirectory
   namespace Modules\Notify\Contracts\SMS;
   ```

## Implementazione nelle Classi

Le classi che implementano queste interfacce devono importare l'interfaccia corretta:

```php
// Per classi che implementano interfacce nella directory principale
use Modules\Notify\Contracts\SmsActionContract;

// Per classi che implementano interfacce in sottodirectory
use Modules\Notify\Contracts\SMS\SmsActionContract;
```

### Esempio di Implementazione Corretta

```php
<?php

declare(strict_types=1);

namespace Modules\Notify\Actions\SMS;

use Modules\Notify\Contracts\SMS\SmsActionContract;
use Modules\Notify\Datas\SmsData;

final class SendNetfunSMSAction implements SmsActionContract
{
    // Implementazione...
    
    public function execute(SmsData $smsData): array
    {
        // Logica di invio SMS...
    }
}
```

## Risoluzione dei Problemi Comuni

### Errore: Interface Not Found

Se si verifica l'errore `Interface "Modules\Notify\Contracts\SMS\SmsActionContract" not found`, verificare:

1. **Esistenza del File**: Assicurarsi che il file dell'interfaccia esista nella posizione corretta
2. **Namespace Corretto**: Verificare che il namespace nell'interfaccia corrisponda alla sua posizione fisica
3. **Import Corretto**: Verificare che la classe stia importando l'interfaccia dal namespace corretto
4. **Cache di Composer**: Provare a pulire la cache di Composer con `composer dump-autoload`
5. **Cache di Laravel**: Pulire la cache di Laravel con `php artisan optimize:clear`

## Note Importanti

1. **Discrepanza nella Documentazione**: Esiste una discrepanza tra alcuni documenti che indicano che le interfacce dovrebbero essere solo nella directory principale e l'implementazione attuale che utilizza anche sottodirectory. L'implementazione attuale è quella corretta da seguire.

2. **Coerenza all'Interno del Modulo**: Mantenere la coerenza all'interno del modulo è fondamentale. Se le classi esistenti utilizzano interfacce in sottodirectory, continuare a seguire questo pattern.

## Collegamenti Correlati

- [Convenzioni di Naming per le Interfacce](./INTERFACE_NAMING_CONVENTION.md)
- [Chiarimento sulla Struttura delle Interfacce](./INTERFACE_STRUCTURE_CLARIFICATION.md)
- [Architettura dei Contratti](./CONTRACTS_ARCHITECTURE.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
