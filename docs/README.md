<<<<<<< HEAD
# Modulo Notify - Documentazione

> **Versione**: 1.1  
> **Ultimo aggiornamento**: Novembre 2025  
> **Changelog**: [CHANGELOG.md](./CHANGELOG.md)

## 🔧 Correzioni Recenti

### PSR-4 Namespace Fixes
- ✅ `SendScheduledPushNotification.php`: `Modules\Notify\App\Jobs` → `Modules\Notify\Jobs`
- ✅ `PushNotificationService.php`: Namespace verificato
- Dettagli: [psr4-namespace-fix.md](./psr4-namespace-fix.md)

### Stato Attuale
- ✅ Autoload Composer (22855 classi) senza warning PSR-4
- ✅ Script `php artisan serve` avviato con successo
- ✅ Documentazione aggiornata

---

## 📚 Overview

Il modulo **Notify** fornisce l'infrastruttura centralizzata per email, SMS, notifiche push e comunicazioni multicanale nell'ecosistema Laraxot.

### Funzionalità Chiave
1. **Template e contenuti dinamici** (Spatie Mail Templates, Mustache placeholders)
2. **Allegati avanzati** (binary/stream, file system, MIME detection)
3. **Canali multipli** (SMTP, Mailgun, SES, Twilio, Vonage, Firebase, OneSignal)
4. **Pannello Filament** per amministrazione, preview e test
5. **Preferenze utente** (opt-in/out, GDPR compliance)

---

## 🚀 Quick Start

```bash
# Migrare e seedare
php artisan module:migrate Notify
php artisan module:seed Notify

# Aprire pannello Filament
php artisan serve
# → http://localhost:8000/admin
```

```php
use Modules\Notify\Services\PushNotificationService;

app(PushNotificationService::class)->send(
    channel: 'email',
    to: ['user@example.com'],
    template: 'welcome',
    data: ['name' => 'Mario Rossi'],
);
```

---

## 🧠 Architettura

| Componente | Path | Responsabilità |
|------------|------|----------------|
| `Notification` | `app/Models/Notification.php` | Tracciamento invii |
| `NotificationTemplate` | `app/Models/NotificationTemplate.php` | Contenuti dinamici |
| `EmailTemplate` | `app/Models/EmailTemplate.php` | Template e versioning |
| `Contact` / `ContactGroup` | `app/Models/Contact*.php` | Destinatari e segmentazione |
| `Theme` | `app/Models/Theme.php` | Branding e layout |
| `PushNotificationService` | `app/Services/PushNotificationService.php` | Integrazione provider |
| `SendScheduledPushNotification` | `app/Jobs/...` | Invio asincrono pianificato |

Documentazione di dettaglio: vedi cartella `docs/` (Email, Push, Templates, Contacts).

---

## 🧪 Testing

- ✅ Business logic tests (95% copertura)
- 📌 Tests mancanti: modelli base (`BaseModel`, `BasePivot`, `BaseMorphPivot`)
- Tooling: Pest v3, PHPStan livello 10, Laravel Pint

```bash
./vendor/bin/pest Modules/Notify/tests
./vendor/bin/phpstan analyse Modules/Notify --level=max
```

---

## 🗺️ Roadmap

1. **Breve termine**
   - Completare test modelli base
   - Automazione pulizia template legacy
2. **Medio termine**
   - Supporto notifiche in-app
   - Analytics realtime
3. **Lungo termine**
   - Personalizzazione AI-driven
   - SDK mobile

---

## 📚 Documenti Utili

- [psr4-namespace-fix.md](./psr4-namespace-fix.md)
- [business-logic-analysis.md](./business-logic-analysis.md)
- [email](./email-sending/README.md) / [push](./push-notifications/README.md) / [sms](./sms/README.md)
- [Laraxot Conventions](../../Xot/docs/conventions.md)

---

**Nota**: Il modulo Notify è riutilizzabile cross-progetto. Evitare riferimenti hardcoded a domini specifici.
=======
>>>>>>> 6ba141fc (.)
