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
=======
>>>>>>> a55aa5e96 (.)
# Risoluzione dei Problemi nelle Email 

Questa documentazione fornisce soluzioni per i problemi comuni che possono verificarsi durante l'invio di email nel modulo Notify.

## Errori Comuni e Soluzioni

### 1. Gestione corretta degli allegati con la classe `Attachment` di Laravel

La classe `SpatieEmail` ora utilizza l'API moderna di Laravel per gli allegati tramite la classe `Attachment`.

#### Best Practices

```php
// Preparazione degli allegati
$attachments = [
    [
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 545977c8 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> b99af5a8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9d3810d0 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9cf0dc90 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> fcaebc79 (rebase 210)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 4fc21b78 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> c8b1c8bf (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9cf0dc90 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default.svg',
>>>>>>> 75179b855 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
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
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default.svg',
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default.svg',
>>>>>>> a55aa5e96 (.)
        'as' => 'logo.svg',
        'mime' => 'image/svg+xml',
    ],
];

// Opzione 1: Fluent API (concatenazione dei metodi)
Mail::to($recipient)
    ->locale('it')
    ->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));

// Opzione 2: Istanziazione separata (più leggibile)
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);

Mail::to($recipient)
    ->locale('it')
    ->send($email);
```

#### Miglioramenti dell'implementazione

L'implementazione attuale include:

1. **Validazione dei file**: Verifica che il file esista prima di allegarlo
2. **Utilizzo della classe moderna `Attachment`**: Più robusta e manutenibile
3. **Gestione opzionale di nome e MIME type**: Personalizzazione flessibile degli allegati
4. **Documentazione PHPDoc completa**: Miglior supporto IDE e type hints

Per maggiori dettagli, consultare [ATTACHMENTS_USAGE.md](./ATTACHMENTS_USAGE.md).

### 2. Errore: "View [notify::emails.template-name] not found"

#### Problema
Questo errore si verifica quando il template email non è stato trovato nel database o il nome del template è errato.

#### Soluzione
1. Verificare che il template esista nella tabella `mail_templates`
2. Controllare che lo slug del template sia corretto
3. Verificare che il namespace sia corretto

```php
// Esempio di inserimento di un template nel database
MailTemplate::create([
    'mailable' => \Modules\Notify\Emails\SpatieEmail::class,
    'name' => 'Template Test',
    'slug' => 'test-template',
    'subject' => 'Test Email: {{ name }}',
    'html_template' => '<p>Ciao, {{ name }}.</p>',
    'text_template' => 'Ciao, {{ name }}.'
]);
```

### 3. Errore: "File not found at path: [percorso]"

#### Problema
Questo errore si verifica quando il percorso di un allegato non è valido o il file non esiste.

#### Soluzione
1. Utilizzare percorsi assoluti o funzioni helper Laravel per i percorsi
2. Verificare che il file esista prima di allegarlo

```php
// Esempio di verifica file e utilizzo di percorso assoluto
$filePath = public_path('assets/images/logo.png');
if (file_exists($filePath)) {
    $attachments = [
        [
            'path' => $filePath,
            'as' => 'logo.png',
            'mime' => 'image/png',
        ],
    ];
    // Invio email con allegati
}
```

### 4. Errore: "Connection could not be established with host smtp.example.com"

#### Problema
Problemi di connessione al server SMTP.

#### Soluzione
1. Verificare le credenziali SMTP nel file `.env`
2. Controllare la connessione di rete
3. Verificare che il server SMTP sia attivo e accessibile

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
```

### 5. Errore: "Call to a member function addAttachments() on null"

#### Problema
Questo errore si verifica quando si tenta di chiamare il metodo `addAttachments()` su un oggetto null.

#### Soluzione
Assicurarsi che l'istanza di `SpatieEmail` sia creata correttamente:

```php
// Corretto
$email = new SpatieEmail($user, 'template-slug');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);

// Alternativa in una sola linea
Mail::to($recipient)->send((new SpatieEmail($user, 'template-slug'))->addAttachments($attachments));
```

## Procedure di Debug

### Logging delle Email

Per il debug delle email, è possibile utilizzare il logger:

```php
try {
    Mail::to($recipient)->send(new SpatieEmail($user, 'template-slug'));
} catch (\Exception $e) {
    \Log::error('Errore invio email: ' . $e->getMessage(), [
        'recipient' => $recipient,
        'template' => 'template-slug',
        'trace' => $e->getTraceAsString()
    ]);
}
```

### Test in Ambiente Locale

Per testare le email in ambiente locale senza inviarle realmente:

1. Configurare Mailtrap o un servizio simile
2. Utilizzare Laravel Log Driver per salvare le email nel log

```dotenv

# .env per test con Mailtrap
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=tls

# Oppure per salvare le email nel log
MAIL_MAILER=log
```

## Test Automatizzati

Esempio di test per verificare il corretto funzionamento dell'invio email:

```php
public function test_can_send_email_with_attachments()
{
    Mail::fake();
    
    $user = User::factory()->create();
    $attachments = [
        [
            'path' => public_path('test-file.txt'),
            'as' => 'test.txt',
            'mime' => 'text/plain',
        ],
    ];
    
    // Crea il file test se non esiste
    if (!file_exists(public_path('test-file.txt'))) {
        file_put_contents(public_path('test-file.txt'), 'Test content');
    }
    
    // Invia email
    Mail::to($user->email)->send((new SpatieEmail($user, 'test-template'))->addAttachments($attachments));
    
    // Verifica che l'email sia stata inviata
    Mail::assertSent(SpatieEmail::class, function ($mail) use ($user) {
        return $mail->hasTo($user->email);
    });
}
```

## Collegamenti alla Documentazione Correlata

- [ATTACHMENTS_USAGE.md](./ATTACHMENTS_USAGE.md)
- [EMAIL_LAYOUTS_BEST_PRACTICES.md](../mail-templates/EMAIL_LAYOUTS_BEST_PRACTICES.md)
- [SPATIE_MAIL_TEMPLATES_STRUCTURE.md](../mail-templates/SPATIE_MAIL_TEMPLATES_STRUCTURE.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a55aa5e96 (.)
