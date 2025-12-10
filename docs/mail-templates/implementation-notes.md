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
=======
>>>>>>> 02a2ea3c10 (.)
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
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
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
<<<<<<< HEAD
<<<<<<< HEAD
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a29a4728 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
>>>>>>> a55aa5e96 (.)
=======
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
>>>>>>> 02a2ea3c10 (.)
           'as' => 'logo.png',
           'mime' => 'image/png'
       ],
       [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
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
<<<<<<< HEAD
<<<<<<< HEAD
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 13aa25113 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 74eb2e964 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 54ad93c4 (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 6ad5224fb (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> ad905ce9c (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c7d5eaf96 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> a29a4728 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
           'path' => '/var/www/html/_bases/base_techplanner_fila3_mono/public_html/images/avatars/default-3.svg',
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> d38aa9d2 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
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
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 7ceb00286 (.)
=======
=======
           'path' => '/var/www/html/saluteora/public_html/images/avatars/default-3.svg',
>>>>>>> 9cf0dc90 (.)
>>>>>>> 379ffe3f3 (.)
=======
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
>>>>>>> a55aa5e96 (.)
=======
           'path' => '/var/www/html/<nome progetto>/public_html/images/avatars/default-3.svg',
>>>>>>> 02a2ea3c10 (.)
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
=======
>>>>>>> 02a2ea3c10 (.)
