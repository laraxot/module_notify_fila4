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
>>>>>>> 7624f916 (.)
# Utilizzo Corretto degli Allegati nelle Email Spatie

Questa documentazione descrive come utilizzare correttamente il metodo `addAttachments()` nella classe `SpatieEmail` del modulo Notify.

## Formato degli Allegati

Il metodo `addAttachments()` accetta un array di array, dove ogni array interno rappresenta un singolo allegato con le relative proprietà.

### Formato Corretto

<<<<<<< HEAD
Il metodo `addAttachments()` supporta **due formati** per gli allegati:

#### Formato 1: Allegato da File Esistente (`path`)

```php
// Formato corretto - allegato da file su filesystem
$attachments = [
    [
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
=======
```php
// Formato corretto - un array di array di allegati
$attachments = [
    [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
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
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fcaebc79 (rebase 210)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 4fc21b78 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9d3810d0 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> c8b1c8bf (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9cf0dc90 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fcaebc79 (rebase 210)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 4fc21b78 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9d3810d0 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> c8b1c8bf (.)
=======
        'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9cf0dc90 (.)
>>>>>>> 7624f916 (.)
        'as' => 'logo.svg',  // Opzionale: nome del file da mostrare nell'email
        'mime' => 'image/svg+xml',  // Opzionale: MIME type del file
    ],
    // Eventualmente altri allegati...
    [
<<<<<<< HEAD
        'path' => '/var/www/html/<nome progetto>/public_html/documents/terms.pdf',
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
        'path' => '/var/www/html/<nome progetto>/public_html/documents/terms.pdf',
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f963d2c0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 69fa7d37 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/<nome progetto>/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
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
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> fcaebc79 (rebase 210)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 4fc21b78 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9d3810d0 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> c8b1c8bf (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9cf0dc90 (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 75179b85 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a404ea71 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> ca10d6ad (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> febe79e3 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> a29a4728 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9721a5b2 (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 1442e291 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> fcaebc79 (rebase 210)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> 4fc21b78 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9d3810d0 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> d38aa9d2 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9e7ba5b6 (rebase 210)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
        'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/documents/terms.pdf',
>>>>>>> c8b1c8bf (.)
=======
        'path' => '/var/www/html/saluteora/public_html/documents/terms.pdf',
>>>>>>> 9cf0dc90 (.)
>>>>>>> 7624f916 (.)
        'as' => 'termini.pdf',
        'mime' => 'application/pdf',
    ],
];
```

<<<<<<< HEAD
#### Formato 2: Allegato da Contenuto Binario (`data`)

```php
// Formato corretto - allegato da contenuto binario generato dinamicamente
$pdfContent = app(GetPdfContentByRecordAction::class)->execute($record);

$attachments = [
    [
        'data' => $pdfContent, // Contenuto binario del PDF generato
        'as' => 'scheda_123_Rossi_Mario.pdf', // Nome file dinamico
        'mime' => 'application/pdf', // Tipo MIME obbligatorio per 'data'
    ],
];
```

**Quando usare `data` invece di `path`**:
- ✅ File generati dinamicamente (PDF, immagini, report)
- ✅ Nessun file temporaneo su filesystem
- ✅ Performance migliori per file temporanei
- ✅ Più sicuro (no file residui)
- ❌ Non usare per file molto grandi (> 50MB) - usa `path` con storage dedicato

=======
>>>>>>> 7624f916 (.)
## Implementazione nella Classe SpatieEmail

La classe `SpatieEmail` utilizza la classe `Illuminate\Mail\Mailables\Attachment` di Laravel per gestire gli allegati in modo robusto:

```php
/**
 * Add attachments to the email
 *
 * @param array<int, array<string, string>> $attachments Array of attachment data
 * @return self
 */
public function addAttachments(array $attachments): self
{
    $attachmentObjects = [];
    
    foreach ($attachments as $item) {
<<<<<<< HEAD
        $attachment = null;
        
        // Priorità 1: Se esiste 'path' e il file esiste, usa getAttachmentFromPath()
        if (isset($item['path']) && file_exists($item['path'])) {
            $attachment = $this->getAttachmentFromPath($item);
        }
        
        // Priorità 2: Se non c'è path o file non esiste, prova con 'data' (contenuto binario)
        if ($attachment === null && isset($item['data'])) {
            $attachment = $this->getAttachmentFromData($item);
        }
        
        if ($attachment) {
            $attachmentObjects[] = $attachment;
        }
=======
        if (!isset($item['path']) || !file_exists($item['path'])) {
            continue;
        }
        
        $attachment = Attachment::fromPath($item['path']);
        
        if (isset($item['as'])) {
            $attachment = $attachment->as($item['as']);
        }
        
        if (isset($item['mime'])) {
            $attachment = $attachment->withMime($item['mime']);
        }
        
        $attachmentObjects[] = $attachment;
>>>>>>> 7624f916 (.)
    }
    
    $this->customAttachments = $attachmentObjects;
    
    return $this;
}

/**
 * Get the attachments for the message.
 *
 * @return array<int, \Illuminate\Mail\Mailables\Attachment>
 */
public function attachments(): array
{
    return $this->customAttachments;
}
```

## Esempio di Utilizzo Completo

<<<<<<< HEAD
### Esempio 1: Allegato da File Esistente

```php
// Creazione di un array di allegati da file esistenti
=======
```php
// Creazione di un array di allegati
>>>>>>> 7624f916 (.)
$attachments = [
    [
        'path' => 'modules/notify/resources/assets/images/logo.png',
        'as' => 'logo.png',
        'mime' => 'image/png',
    ],
];

// Invio email con allegati
Mail::to($recipient)
    ->locale('it')
    ->send((new SpatieEmail($user, 'email_template_slug'))
    ->addAttachments($attachments));
```

<<<<<<< HEAD
### Esempio 2: Allegato PDF Generato Dinamicamente

```php
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;

// Genera contenuto PDF binario da un record
$pdfContent = app(GetPdfContentByRecordAction::class)->execute($record);

// Crea array allegati con contenuto binario
$attachments = [
    [
        'data' => $pdfContent, // Contenuto binario del PDF
        'as' => 'scheda_123_Rossi_Mario.pdf', // Nome file dinamico
        'mime' => 'application/pdf', // Tipo MIME obbligatorio
    ],
];

// Invio email con allegato PDF generato dinamicamente
$email = new SpatieEmail($record, 'schede');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);
```

### Esempio 3: Allegati Misti (File + Binario)

```php
// Combinazione di allegati da file e da contenuto binario
$attachments = [
    // Allegato da file esistente
    [
        'path' => storage_path('app/public/terms.pdf'),
        'as' => 'termini_condizioni.pdf',
        'mime' => 'application/pdf',
    ],
    // Allegato generato dinamicamente
    [
        'data' => $pdfContent,
        'as' => 'scheda_personale.pdf',
        'mime' => 'application/pdf',
    ],
];

$email = new SpatieEmail($record, 'schede');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);
```

## Opzioni Disponibili per gli Allegati

Ogni allegato può utilizzare **due formati** a seconda della fonte:

### Formato con `path` (File Esistente)

- `path` (**richiesto**): Percorso al file da allegare (può essere percorso relativo o assoluto)
- `as` (opzionale): Nome del file che apparirà nell'email
- `mime` (opzionale): Tipo MIME del file (es. 'image/png', 'application/pdf', ecc.)

### Formato con `data` (Contenuto Binario)

- `data` (**richiesto**): Contenuto binario del file da allegare (stringa binaria)
- `as` (**richiesto**): Nome del file che apparirà nell'email
- `mime` (**richiesto**): Tipo MIME del file (es. 'application/pdf', 'image/png', ecc.)

**Nota**: Il tipo MIME è obbligatorio quando si usa `data` perché il sistema non può dedurlo automaticamente dal contenuto binario.

## Note Aggiuntive

### File Esistenti (`path`)
- Assicurarsi che i file specificati nei percorsi esistano
- Verificare i permessi di lettura sul file
- Per file molto grandi, considerare l'utilizzo di storage dedicato

### Contenuto Binario (`data`)
- Il tipo MIME è **obbligatorio** quando si usa `data`
- Per file molto grandi (> 50MB), considerare di salvare su filesystem e usare `path`
- Gestire memory limit per PDF molto grandi
- Il contenuto binario viene mantenuto in memoria fino all'invio dell'email

### Performance
- Per allegati di grandi dimensioni, considerare l'utilizzo di un job in coda
- Verificare che i tipi MIME siano corretti per evitare problemi di visualizzazione nei client email
- Usare `data` per file generati dinamicamente evita operazioni I/O su filesystem

## Esempi Pratici da Progetti Reali

### Esempio: Email con PDF di Scheda Valutazione

Vedi [Email PDF Attachments](../../../Ptv/docs/email-pdf-attachments.md) per un esempio completo di generazione e invio PDF come allegato email.

## Esempi Completi

### Esempio 1: PDF Generato Dinamicamente (Pattern Raccomandato)

```php
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;
use Modules\Notify\Notifications\RecordNotification;

// Genera PDF binario
$pdfContent = app(GetPdfContentByRecordAction::class)->execute($record);

// Prepara allegato
$attachments = [
    [
        'data' => $pdfContent,
        'as' => 'documento_'.$record->id.'.pdf',
        'mime' => 'application/pdf',
    ],
];

// Invia email
$notify = new RecordNotification($record, 'template-slug');
$notify = $notify->addAttachments($attachments);

Notification::route('mail', 'destinatario@example.com')->notify($notify);
```

### Esempio 2: File Esistente + PDF Dinamico

```php
$attachments = [
    // File esistente
    [
        'path' => storage_path('documents/contratto.pdf'),
        'as' => 'contratto.pdf',
        'mime' => 'application/pdf',
    ],
    // PDF generato
    [
        'data' => app(GetPdfContentByRecordAction::class)->execute($record),
        'as' => 'dettaglio.pdf',
        'mime' => 'application/pdf',
    ],
];

$email = new SpatieEmail($record, 'multi-attachment');
$email->addAttachments($attachments);
Mail::to($recipient)->send($email);
```

### Esempio 3: Bulk Action con PDF Multipli

```php
use Modules\Xot\Actions\Pdf\GetPdfContentByRecordAction;

foreach ($records as $record) {
    $pdfContent = app(GetPdfContentByRecordAction::class)->execute($record);
    
    $attachments = [
        [
            'data' => $pdfContent,
            'as' => "scheda_{$record->id}.pdf",
            'mime' => 'application/pdf',
        ],
    ];
    
    $notify = new RecordNotification($record, 'bulk-template');
    $notify->addAttachments($attachments);
    
    Notification::route('mail', $record->email)->notify($notify);
}
```

## Collegamenti alla Documentazione Correlata

### Documentazione Interna
- [Ptv - Complete PDF Email Guide](../../../Ptv/docs/pdf-email-attachments-complete-guide.md)
- [Xot - PDF Generation Technical](../../../Xot/docs/actions/pdf-content-generation-technical.md)
- [EMAIL_LAYOUTS_BEST_PRACTICES.md](../mail-templates/EMAIL_LAYOUTS_BEST_PRACTICES.md)
- [SPATIE_MAIL_TEMPLATES_STRUCTURE.md](../mail-templates/SPATIE_MAIL_TEMPLATES_STRUCTURE.md)
- [EMAIL_TROUBLESHOOTING.md](./EMAIL_TROUBLESHOOTING.md)

### File Correlati
- `Modules/Notify/app/Emails/SpatieEmail.php` - Gestione allegati
- `Modules/Notify/app/Notifications/RecordNotification.php` - Notifiche con allegati
- `Modules/Xot/app/Actions/Pdf/GetPdfContentByRecordAction.php` - Generazione PDF
=======
## Opzioni Disponibili per gli Allegati

Ogni allegato deve contenere i seguenti parametri:

- `path`: Percorso al file da allegare (può essere percorso relativo o assoluto)
- `as`: Nome del file che apparirà nell'email
- `mime`: Tipo MIME del file (es. 'image/png', 'application/pdf', ecc.)

## Note Aggiuntive

- Assicurarsi che i file specificati nei percorsi esistano
- Per allegati di grandi dimensioni, considerare l'utilizzo di un job in coda
- Verificare che i tipi MIME siano corretti per evitare problemi di visualizzazione nei client email

## Collegamenti alla Documentazione Correlata

- [EMAIL_LAYOUTS_BEST_PRACTICES.md](../mail-templates/EMAIL_LAYOUTS_BEST_PRACTICES.md)
- [SPATIE_MAIL_TEMPLATES_STRUCTURE.md](../mail-templates/SPATIE_MAIL_TEMPLATES_STRUCTURE.md)
- [EMAIL_TROUBLESHOOTING.md](./EMAIL_TROUBLESHOOTING.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7624f916 (.)
