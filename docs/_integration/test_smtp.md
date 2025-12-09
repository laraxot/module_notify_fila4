# test_smtp

<!-- Contenuto migrato da _docs/test_smtp.txt -->

//----------------------------------------------------------------------------
Test Laravel SMTP Mail via Tinker
https://medium.com/@azishapidin/test-laravel-smtp-mail-via-tinker-cec59999214
//----------------------------------------------------------------------------
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)

# Come far funzionare la pagina SendEmail

## Problema
La pagina `SendEmail` non funziona se la configurazione SMTP globale di Laravel (file `.env`) è errata, mancante o il server SMTP non è raggiungibile. Al contrario, `TestSmtpPage` funziona sempre perché permette di specificare i parametri SMTP a runtime.

## Soluzione

### 1. Verifica la configurazione SMTP in `.env`
Assicurati che le seguenti variabili siano corrette:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.tuoserver.com
MAIL_PORT=587
MAIL_USERNAME=la-tua-username
MAIL_PASSWORD=la-tua-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=la-tua-email@dominio.com
MAIL_FROM_NAME="Nome mittente"
```
Dopo ogni modifica, esegui:
```
php artisan config:clear
php artisan cache:clear
```

### 2. Testa la configurazione
Usa Tinker o la pagina `TestSmtpPage` per verificare che l'invio funzioni:
```php
Mail::raw('Test SMTP', function($m){ $m->to('tuo@email.com')->subject('Test SMTP'); });
```

### 3. Miglioramenti consigliati per SendEmail
- Aggiungi gestione errori (try/catch) e mostra notifiche di errore.
- (Opzionale) Permetti l'override dei parametri SMTP da form, come in `TestSmtpPage`.

## Approfondimenti
- [TestSmtpPage vs SendEmail: differenze architetturali](./test_smtp.md)
- [Best practice per la configurazione SMTP](./EMAIL_BEST_PRACTICES.md)
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
=======
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> 9777d1b3 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Laravel Mail](https://laravel.com/project_docs/mail)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
