# Correzioni PHPStan Recenti

## Restore MailTemplateVersion senza proprietà fantasma

- **File**: `laravel/Modules/Notify/app/Models/MailTemplateVersion.php`
- **Problema**: il metodo `restore()` tentava di copiare gli attributi `html_body` e `text_body` nel modello `MailTemplate`, ma entrambe le properties non esistono né sulla versione né sul template (lo schema usa `html_template` e `text_template`). PHPStan segnalava `property.notFound` sia sul template sia sulla versione.
- **Soluzione**: il ripristino ora assegna correttamente `html_template` e `text_template`, in linea con le colonne effettive del database e con i campi translatable gestiti da Spatie.
- **Impatto**: eliminati 4 errori PHPStan, ripristino delle versioni nuovamente coerente con l'architettura della libreria `spatie/mail-templates`.

