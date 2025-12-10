<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Note di Implementazione Email

## Errori Comuni e Soluzioni

### 1. Errore Destinatario Mancante
L'errore `Symfony\Component\Mime\Exception\LogicException: An email must have a "To", "Cc", or "Bcc" header` si verifica quando:

1. **Causa Principale**
   - Il destinatario non è specificato correttamente
   - Il valore del campo 'to' è null o vuoto
   - Il formato dell'email non è valido

2. **Verifica dei Dati**
   - Controllare che `$data['to']` sia presente
   - Verificare che non sia null
   - Assicurarsi che sia un indirizzo email valido

3. **Soluzione**
   - Validare l'input prima dell'invio
   - Verificare il formato dell'email
   - Assicurarsi che il destinatario sia specificato

## Implementazione Allegati Corretta

### Struttura Corretta
L'implementazione corretta degli allegati richiede una struttura specifica. Ecco le caratteristiche chiave:

1. **Formato Array di Array**
   ```php
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
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b855 (.)
           'as' => 'logo.png',
           'mime' => 'image/png'
       ],
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
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b85 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 75179b855 (.)
           'as' => 'logo.png',
           'mime' => 'image/png'
       ]
   ];
   ```

2. **Percorsi**
   - Supporto per percorsi assoluti e relativi
   - Verifica dell'accessibilità dei file
   - Gestione dei permessi

### Differenze con la Documentazione Precedente

1. **Struttura Array**
   - La documentazione precedente suggeriva un singolo array
   - L'implementazione corretta richiede un array di array
   - Ogni allegato deve essere un array separato

2. **Gestione dei Percorsi**
   - Supporto per percorsi assoluti
   - Verifica dell'accessibilità
   - Gestione dei permessi

3. **Integrazione con SpatieEmail**
   ```php
   // Creare l'istanza dell'email
   $email = new SpatieEmail($user, 'due');
   
   // Aggiungere gli allegati
   $email->addAttachments($attachments);
   
   // Inviare l'email
   Mail::to($data['to'])
       ->locale('it')
       ->send($email);
   ```

### Best Practices Verificate

1. **Organizzazione File**
   - Verificare l'accessibilità dei file
   - Gestire i permessi correttamente
   - Utilizzare percorsi coerenti

2. **Gestione MIME Types**
   - Specificare sempre il MIME type corretto
   - Verificare la compatibilità
   - Documentare i tipi supportati

3. **Performance**
   - Ottimizzare le dimensioni dei file
   - Considerare l'impatto sulla velocità
   - Monitorare l'uso della memoria

### Note di Miglioramento

1. **Documentazione**
   - Aggiornare la documentazione esistente
   - Rimuovere le informazioni non corrette
   - Aggiungere esempi funzionanti

2. **Testing**
   - Verificare con diversi tipi di file
   - Testare in vari client email
   - Validare la compatibilità

3. **Manutenzione**
   - Monitorare le performance
   - Aggiornare i MIME types
   - Verificare la compatibilità

## Conclusioni

L'implementazione corretta dimostra che:
1. La struttura array di array è necessaria
2. I percorsi devono essere verificati
3. L'integrazione con SpatieEmail richiede passaggi specifici
4. La documentazione deve essere precisa
5. La validazione del destinatario è fondamentale

## Prossimi Passi

1. **Documentazione**
   - Aggiornare `ATTACHMENTS.md`
   - Revisionare `TROUBLESHOOTING.md`
   - Aggiungere esempi reali

2. **Testing**
   - Espandere i test
   - Verificare edge cases
   - Documentare i risultati

3. **Miglioramenti**
   - Considerare la validazione
   - Implementare logging
   - Aggiungere monitoraggio 

## Visualizzazione Parametri come Badge

### Implementazione
È stata aggiunta una funzionalità per visualizzare i parametri del template email come badge colorati nell'interfaccia Filament.

#### Caratteristiche
1. **Campo Params**: Campo di input testuale che accetta parametri separati da virgola
2. **Visualizzazione Badge**: I parametri vengono mostrati come badge blu sotto il campo HTML template
3. **Visibilità Condizionale**: I badge appaiono solo quando ci sono parametri definiti
4. **Design Responsive**: I badge si adattano al layout e supportano la modalità dark

#### Struttura Implementata

```php
// Nel MailTemplateResource.php
'params_display' => Forms\Components\View::make('notify::filament.components.params-badges')
    ->viewData(fn ($record) => ['params' => $record?->params])
    ->columnSpanFull()
    ->visible(fn ($record): bool => !empty($record?->params)),

'params' => Forms\Components\TextInput::make('params')
    ->label('Parametri')
    ->helperText('Inserisci i parametri separati da virgola (es: name, email, date)')
    ->placeholder('name, email, date, company')
    ->columnSpanFull(),
```

#### View Component
- **File**: `resources/views/filament/components/params-badges.blade.php`
- **Logica**: Divide la stringa params per virgola e crea badge per ogni parametro
- **Stile**: Utilizza classi Tailwind coerenti con il design Filament

#### Benefici
1. **Visualizzazione Chiara**: I parametri sono immediatamente visibili come badge colorati
2. **Usabilità**: Gli utenti possono vedere rapidamente quali variabili sono disponibili
3. **Consistenza**: Design coerente con l'interfaccia Filament
4. **Accessibilità**: Supporto per modalità dark e screen reader

#### Utilizzo
1. Modificare un template email esistente
2. Inserire parametri nel campo "Parametri" separati da virgola
3. I badge appaiono automaticamente sotto il template HTML
4. I parametri possono essere utilizzati nel template con la sintassi `{{parameter_name}}`

#### Esempi
```
Input: "name, email, company, date"
Output: [name] [email] [company] [date] (come badge blu)
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
