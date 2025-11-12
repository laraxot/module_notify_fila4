# PHPStan Fixes - Notify

## 2025-01-06

| File | Intervento | Verifica |
|------|------------|----------|
| [`../app/Models/NotificationLog.php`](../app/Models/NotificationLog.php) | Creato modello mancante con metodi `markAsOpened()` / `markAsClicked()` e tipizzazione enum | `./vendor/bin/phpstan analyse Modules/Notify` |
| [`../app/Console/Commands/CleanupNotificationLogsCommand.php`](../app/Console/Commands/CleanupNotificationLogsCommand.php) | Query tipizzate (`Collection`, enum `->value`) e chunk tipizzato | ✅ |
| [`../app/Http/Controllers/NotificationTrackingController.php`](../app/Http/Controllers/NotificationTrackingController.php) | Controllo istanza log, gestione metadata con `Arr::get` | ✅ |
| [`../database/factories/NotificationLogFactory.php`](../database/factories/NotificationLogFactory.php) | Factory tipizzata (`NotificationLogStatusEnum`) con stato coerente | ✅ |

Risultato finale: `./vendor/bin/phpstan analyse Modules/Notify --memory-limit=2G --no-progress` → **nessun errore**.
