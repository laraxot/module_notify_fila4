# Progresso Standardizzazione Traduzioni

## Stato Attuale - 12/05/2025

### Problemi Identificati

1. **Convenzioni di Naming Non Rispettate**
   - File `send_whats_app.php` utilizzava naming errato (WhatsApp separato da underscore)
   - La convenzione corretta richiede di trattare "WhatsApp" come un'unica parola in snake_case: `send_whatsapp.php`

2. **Elementi Strutturali Mancanti**
   - Analisi ha rivelato che 20 file di traduzione mancano della dichiarazione `declare(strict_types=1);`
   - Molti file non contengono la sezione `resource` obbligatoria
   - Le strutture gerarchiche sono spesso incomplete (mancano elementi come icon, sort, plural in navigation)

3. **File Problematici Identificati**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_aws_email.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/setting.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/edit_mail_template.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/notification_template.php`
=======
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 125a2c2b8 (.)
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_aws_email.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/setting.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/edit_mail_template.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/notification_template.php`
<<<<<<< HEAD
=======
=======
>>>>>>> 36ac4fc1 (.)
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_aws_email.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/setting.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/edit_mail_template.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_netfun_sms.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/notification_template.php`
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> 125a2c2b8 (.)
   - E altri 15 file (elenco completo in appendice)

### Correzioni Implementate

1. **Documentazione Standard**
<<<<<<< HEAD
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_NAMING_RULES.md`
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_STRUCTURE_GUIDE.md`

2. **File Corretti**
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_whatsapp.php` con struttura corretta
   - Aggiornato `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php` con struttura completa
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
   - Creato `/var/www/html/<nome progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_NAMING_RULES.md`
   - Creato `/var/www/html/<nome progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_STRUCTURE_GUIDE.md`

2. **File Corretti**
   - Creato `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_whatsapp.php` con struttura corretta
   - Aggiornato `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php` con struttura completa
=======
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_NAMING_RULES.md`
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/docs/TRANSLATION_FILE_STRUCTURE_GUIDE.md`

2. **File Corretti**
   - Creato `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_whatsapp.php` con struttura corretta
   - Aggiornato `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php` con struttura completa
=======
>>>>>>> 36ac4fc1 (.)
   - Creato `/var/www/html/saluteora/laravel/Modules/Notify/docs/TRANSLATION_FILE_NAMING_RULES.md`
   - Creato `/var/www/html/saluteora/laravel/Modules/Notify/docs/TRANSLATION_FILE_STRUCTURE_GUIDE.md`

2. **File Corretti**
   - Creato `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_whatsapp.php` con struttura corretta
   - Aggiornato `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_netfun_sms.php` con struttura completa
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> 125a2c2b8 (.)
   - Rimosso il file con naming errato `send_whats_app.php`

### Prossime Correzioni da Implementare

1. **File da Correggere Prioritariamente**
<<<<<<< HEAD
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_email.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_sms.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_telegram.php`

2. **Verifiche da Eseguire**
   - Analisi della cartella `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/en/` per identificare problemi simili
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_email.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_sms.php`
   - `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_telegram.php`

2. **Verifiche da Eseguire**
   - Analisi della cartella `/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/en/` per identificare problemi simili
=======
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_email.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_sms.php`
   - `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_telegram.php`

2. **Verifiche da Eseguire**
   - Analisi della cartella `/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/en/` per identificare problemi simili
=======
>>>>>>> 36ac4fc1 (.)
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_email.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_sms.php`
   - `/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_telegram.php`

2. **Verifiche da Eseguire**
   - Analisi della cartella `/var/www/html/saluteora/laravel/Modules/Notify/lang/en/` per identificare problemi simili
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> 125a2c2b8 (.)
   - Controllo dei riferimenti nel codice che potrebbero puntare ai vecchi file

## Documentazione di Riferimento

1. **Standard di Traduzione**
   - [Regole Generali per le Traduzioni](../../Lang/docs/TRANSLATION_KEYS_RULES.md)
   - [Best Practices per le Traduzioni](../../Lang/docs/TRANSLATION_KEYS_BEST_PRACTICES.md)

2. **Guide Specifiche per Notify**
   - [Convenzioni di Traduzione nel Modulo Notify](./TRANSLATION_CONVENTIONS.md)
   - [Regole di Naming per i File di Traduzione](./TRANSLATION_FILE_NAMING_RULES.md)
   - [Guida alla Struttura dei File di Traduzione](./TRANSLATION_FILE_STRUCTURE_GUIDE.md)

## Appendice: Elenco Completo dei File Non Conformi

```
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_aws_email.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/setting.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/edit_mail_template.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php (corretto)
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/notification_template.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/notify.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/contacts.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/test_smtp.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/log.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_sms.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/contact.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/slack_notification.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/template.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_push_notification.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/dashboard.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_whats_app.php (rimosso e sostituito)
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_firebase_push_notification.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_email.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/send_spatie_email.php
/var/www/html/<nome progetto>/laravel/Modules/Notify/lang/it/create_mail_template.php
=======
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
<<<<<<< HEAD
>>>>>>> 125a2c2b8 (.)
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_aws_email.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/setting.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/edit_mail_template.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_netfun_sms.php (corretto)
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/notification_template.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/notify.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/contacts.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/test_smtp.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/log.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_sms.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/contact.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/slack_notification.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/template.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_push_notification.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/dashboard.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_whats_app.php (rimosso e sostituito)
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_firebase_push_notification.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_email.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/send_spatie_email.php
/var/www/html/<directory progetto>/laravel/Modules/Notify/lang/it/create_mail_template.php
<<<<<<< HEAD
=======
=======
>>>>>>> 36ac4fc1 (.)
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_aws_email.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/setting.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/edit_mail_template.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_netfun_sms.php (corretto)
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/notification_template.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/notify.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/contacts.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/test_smtp.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/log.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_sms.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/contact.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/slack_notification.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/template.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_push_notification.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/dashboard.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_whats_app.php (rimosso e sostituito)
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_firebase_push_notification.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_email.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/send_spatie_email.php
/var/www/html/saluteora/laravel/Modules/Notify/lang/it/create_mail_template.php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
>>>>>>> 125a2c2b8 (.)
```
