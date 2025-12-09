<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
# Notify Module Documentation

## Overview
This document serves as the central index for the Notify module, providing guidance on managing notifications within a Laravel application. The Notify module handles various notification channels like email, SMS, and push notifications in a modular and reusable way.

## Key Principles
1. **Modularity**: The Notify module is designed to be reusable across different projects, maintaining generic functionality.
2. **Extensibility**: Allows for customization and addition of new notification channels without altering core code.
3. **Reliability**: Ensures notifications are delivered through robust error handling and logging.

## Core Features
- **Multi-Channel Notifications**: Supports email, SMS, WhatsApp, Telegram, and more.
- **Template Management**: Provides a system for creating and managing notification templates.
- **Configuration**: Offers flexible configuration options for different notification providers.

## Implementation Guidelines

### 1. Module Structure
- The Notify module follows a standard structure with directories for models, services, providers, and templates to ensure clarity and maintainability.

### 2. Notification Channels
- Implement various channels for sending notifications, ensuring each channel is configurable and extensible.
  ```php
  // Example Channel Configuration
  return [
      'sms' => [
          'driver' => 'netfun',
          'api_key' => env('SMS_API_KEY'),
      ],
  ];
  ```

### 3. Templates
- Use templates for consistent notification formatting across different channels.

### 4. Error Handling
- Implement robust error handling to manage failures in notification delivery.

## Common Issues and Fixes
- **Delivery Failures**: Ensure correct configuration of API keys and endpoints for each notification channel.
- **Template Errors**: Verify template syntax and placeholders to avoid rendering issues.
- **Performance Bottlenecks**: Use queueing for notification sending to prevent delays in user experience.

## Documentation and Updates
- Document any custom implementations or new notification channels in the relevant documentation folder.
- Update this index if new features or significant changes are introduced to the Notify module.

## Links to Related Documentation
- [Architecture Overview](./ARCHITECTURE.md)
- [Notification Channels Implementation](./NOTIFICATION_CHANNELS_IMPLEMENTATION.md)
- [Email Templates](./EMAIL_TEMPLATES.md)
- [SMS Implementation](./SMS_IMPLEMENTATION.md)
- [Troubleshooting](./TROUBLESHOOTING.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 7bac387 (.)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
# Indice della Documentazione - Modulo Notify

## Panoramica
Questo documento serve come indice centrale per il modulo Notify, fornendo una guida per la gestione delle notifiche all'interno di un'applicazione Laravel. Il modulo Notify gestisce vari canali di notifica come email, SMS e push notifications in modo modulare e riutilizzabile.

## Principi Chiave
1. **Modularità**: Il modulo Notify è progettato per essere riutilizzabile in diversi progetti, mantenendo funzionalità generiche
2. **Estensibilità**: Consente personalizzazione e aggiunta di nuovi canali di notifica senza alterare il codice principale
3. **Affidabilità**: Garantisce la consegna delle notifiche attraverso gestione robusta degli errori e logging

## Funzionalità Principali
- **Notifiche Multi-Canale**: Supporta email, SMS, WhatsApp, Telegram e altro
- **Gestione Template**: Fornisce un sistema per creare e gestire template di notifica
- **Configurazione**: Offre opzioni di configurazione flessibili per diversi provider di notifica

## Collegamenti Correlati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Documentazione Generale <nome progetto>](../../../../docs/README.md)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
=======
- [Documentazione Generale PTV](../../../../docs/README.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
=======
- [Documentazione Generale PTV](../../../../docs/README.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
=======
- [Documentazione Generale PTV](../../../../docs/README.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> 75179b85 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> f963d2c0 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
=======
- [Documentazione Generale PTV](../../../../docs/README.md)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> ee18dd92 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
=======
- [Documentazione Generale PTV](../../../../docs/README.md)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Documentazione Generale SaluteOra](../../../../docs/README.md)
>>>>>>> 3f39ac8b (.)
- [Collegamenti Documentazione](../../../../docs/collegamenti-documentazione.md)
- [Standard di Documentazione](../../../../docs/DOCUMENTATION_STANDARDS.md)
- [Modulo Xot](../../Xot/docs/README.md)
- [Modulo Lang](../../Lang/docs/README.md)
- [Modulo UI](../../UI/docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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

>>>>>>> bf479cc (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 3f39ac8b (.)
## Categorie Principali

### Architettura e Struttura
- [README](./README.md) - Panoramica generale del modulo
- [Architettura](./ARCHITECTURE.md) - Architettura generale del modulo
- [Struttura](./structure.md) - Struttura delle directory e dei componenti
- [Modelli](./models.md) - Documentazione dei modelli Eloquent
- [Eventi](./events.md) - Eventi e listeners

### Sistema Email
- [Sistema Email Database](./database-mail-system.md) - Sistema di gestione delle email basato su database
- [Code Email](./database_mail_queue.md) - Sistema di code per l'invio di email
- [Template Email](./EMAIL_TEMPLATES.md) - Struttura e utilizzo dei template email
- [Best Practices Email](./EMAIL_BEST_PRACTICES.md) - Linee guida per le email
- [Template Responsivi](./RESPONSIVE_EMAIL_TEMPLATES.md) - Implementazione di template email responsivi

### Canali di Notifica
- [Implementazione Canali](./NOTIFICATION_CHANNELS_IMPLEMENTATION.md) - Implementazione dei canali di notifica
- [SMS](./SMS_IMPLEMENTATION.md) - Implementazione del canale SMS
- [WhatsApp](./WHATSAPP_CHANNEL.md) - Implementazione del canale WhatsApp
- [Telegram](./TELEGRAM_CHANNEL.md) - Implementazione del canale Telegram

### Filament UI
- [Risorse Filament](./filament-resources.md) - Componenti Filament Resources
- [Pagine Filament](./filament-pages.md) - Componenti Filament Pages
- [Convenzioni Filament](./FILAMENT_EXTENSION_PATTERN.md) - Pattern di estensione per Filament

### Configurazione
- [Struttura Config](./CONFIG_STRUCTURE.md) - Struttura dei file di configurazione
- [Configurazione SMS](./SMS_CONFIG_STRUCTURE.md) - Struttura della configurazione SMS
- [Principi di Configurazione](./CONFIGURATIONS_USAGE_PRINCIPLES.md) - Principi per l'utilizzo delle configurazioni

### Pattern e Architettura
- [Pattern Factory](./FACTORY_PATTERN_ANALYSIS.md) - Analisi del pattern Factory
- [Risoluzione Dinamica delle Classi](./DYNAMIC_CLASS_RESOLUTION.md) - Pattern di risoluzione dinamica delle classi
- [Queueable Actions](./queueable-action.md) - Utilizzo di Spatie Queueable Actions

### Standard e Traduzioni
- [Convenzioni di Naming](./NAMING_CONVENTIONS.md) - Standard per i nomi di file e classi
- [Traduzioni](./translations.md) - Sistema di traduzioni
- [Standard Traduzioni](./TRANSLATION_STANDARDS.md) - Standard per le chiavi di traduzione

### Testing e Qualità
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [PHPStan Level 10](./phpstan-level10-analysis.md) - Analisi e correzioni per PHPStan Level 10
- [Quality Improvements](./quality-improvements-2025-01-06.md) - Riepilogo miglioramenti qualità codice
- [Migration Fixes Summary](./migration-fixes-summary.md) - Correzioni migrazioni e server
- [Troubleshooting](./troubleshooting.md) - Risoluzione problemi comuni (ParseError, PHPStan, etc.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> 75179b85 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> f963d2c0 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> 75179b85 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> f963d2c0 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> 75179b85 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> f963d2c0 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> 75179b85 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> f963d2c0 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> ee18dd92 (.)
=======
- [PHPStan Level 10](./PHPSTAN_LEVEL10_FIXES.md) - Correzioni per PHPStan Level 10
>>>>>>> 3f39ac8b (.)
- [Testing](./TESTING.md) - Strategie e approcci per il testing

## Linee Guida per l'Implementazione

### 1. Struttura del Modulo
Il modulo Notify segue una struttura standard con directory per modelli, servizi, provider e template per garantire chiarezza e manutenibilità.

### 2. Canali di Notifica
Implementare vari canali per l'invio di notifiche, assicurandosi che ogni canale sia configurabile ed estensibile.
```php
// Esempio Configurazione Canale
return [
    'sms' => [
        'driver' => 'netfun',
        'api_key' => env('SMS_API_KEY'),
    ],
];
```

### 3. Template
Utilizzare template per una formattazione coerente delle notifiche attraverso diversi canali.

### 4. Gestione Errori
Implementare una gestione robusta degli errori per gestire i fallimenti nella consegna delle notifiche.

## Problemi Comuni e Soluzioni
- **Fallimenti di Consegna**: Assicurarsi della corretta configurazione di chiavi API e endpoint per ogni canale di notifica
- **Errori Template**: Verificare sintassi template e placeholder per evitare problemi di rendering
- **Colli di Bottiglia Performance**: Utilizzare il queueing per l'invio di notifiche per prevenire ritardi nell'esperienza utente
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======

>>>>>>> bf479cc (.)
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d284d65 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
## Documentazione e Aggiornamenti
- Documentare qualsiasi implementazione personalizzata o nuovi canali di notifica nella cartella di documentazione pertinente
- Aggiornare questo indice se vengono introdotte nuove funzionalità o modifiche significative al modulo Notify
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 7bac387 (.)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)

## Sottocartelle

### Mail Templates
- [Index](./mail-templates/INDEX.md) - Indice della documentazione sui template email
- [Implementazione Slug](./mail-templates/MAIL_TEMPLATE_SLUG_IMPLEMENTATION.md) - Implementazione del campo slug

### Notifications
- [Index](./notifications/INDEX.md) - Indice della documentazione sulle notifiche

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
## Collegamenti alla Documentazione Correlata
- [Panoramica Architettura](./ARCHITECTURE.md)
- [Implementazione Canali Notifica](./NOTIFICATION_CHANNELS_IMPLEMENTATION.md)
- [Template Email](./EMAIL_TEMPLATES.md)
- [Implementazione SMS](./SMS_IMPLEMENTATION.md)
- [Troubleshooting](./TROUBLESHOOTING.md)

>>>>>>> bf479cc (.)
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
### Miglioramenti Qualità Codice (2025-01-06)
- **PHPStan Livello 10**: Analisi completa e correzione errori di tipizzazione
  - Corretti 16 errori principali nel modulo Notify
  - Documentazione completa in [phpstan-level10-analysis.md](./phpstan-level10-analysis.md)
  - Pattern di correzione documentati per riutilizzo futuro
- **Risoluzione Problemi Server**: 
  - Tabella cache creata manualmente
  - File traduzioni tenant-specifici creati
  - Migrazione workers corretta (duplicazione colonne)
  - Documentazione in [migration-fixes-summary.md](./migration-fixes-summary.md)

=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
## Note sulla Manutenzione
Questa documentazione viene aggiornata regolarmente. Prima di apportare modifiche al codice, consultare la documentazione pertinente e aggiornare i documenti correlati.

>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
## Risoluzione Conflitti e Standard
- **Gennaio 2025**: Risoluzione sistematica di tutti i conflitti Git nei file di documentazione:
  - `index.md` - Unificato contenuto italiano e inglese mantenendo struttura completa
  - `database_mail_queue.md` - Rimossi marcatori conflitto, aggiornati path di sistema
  - `database_mail_system.md` - Puliti conflitti nelle sezioni bash e riferimenti
  - `database_mail.md` - Risolti conflitti nei template e riferimenti esterni
- Il file `lang/it/notify_theme.php` è stato risolto manualmente mantenendo PSR-12, strict_types, array short syntax e solo chiavi effettive, come richiesto dagli standard PHPStan livello 10
- Il file `NOTIFICATION_CHANNELS_IMPLEMENTATION.md` è stato risolto manualmente mantenendo la versione più aggiornata e coerente con le best practice architetturali del modulo Notify
- **Filosofia di risoluzione**: Approccio olistico con analisi manuale approfondita, mantenimento integrità architetturale, documentazione bidirezionale aggiornata
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
Ultimo aggiornamento: 14 Maggio 2025

## Risoluzione conflitti e standard
- Il file `lang/it/notify_theme.php` è stato risolto manualmente mantenendo PSR-12, strict_types, array short syntax e solo chiavi effettive, come richiesto dagli standard PHPStan livello 10.
- Il file `NOTIFICATION_CHANNELS_IMPLEMENTATION.md` è stato risolto manualmente mantenendo la versione più aggiornata e coerente con le best practice architetturali del modulo Notify.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
<<<<<<< HEAD
>>>>>>> d284d65 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 31f5d28f (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 31f5d28f (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 31f5d28f (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 6608a1a0 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni"

*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 75179b85 (.)
=======
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> f963d2c0 (.)
=======
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 75179b85 (.)
=======
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> f963d2c0 (.)
=======
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> 75179b85 (.)
=======
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> f963d2c0 (.)
=======
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
>>>>>>> ee18dd92 (.)
=======
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> 7bac387 (.)
=======
>>>>>>> f813254 (.)
## Risoluzione Conflitti e Standard
- **Gennaio 2025**: Risoluzione sistematica di tutti i conflitti Git nei file di documentazione:
  - `index.md` - Unificato contenuto italiano e inglese mantenendo struttura completa
  - `database_mail_queue.md` - Rimossi marcatori conflitto, aggiornati path di sistema
  - `database_mail_system.md` - Puliti conflitti nelle sezioni bash e riferimenti
  - `database_mail.md` - Risolti conflitti nei template e riferimenti esterni
- Il file `lang/it/notify_theme.php` è stato risolto manualmente mantenendo PSR-12, strict_types, array short syntax e solo chiavi effettive, come richiesto dagli standard PHPStan livello 10
- Il file `NOTIFICATION_CHANNELS_IMPLEMENTATION.md` è stato risolto manualmente mantenendo la versione più aggiornata e coerente con le best practice architetturali del modulo Notify
- **Filosofia di risoluzione**: Approccio olistico con analisi manuale approfondita, mantenimento integrità architetturale, documentazione bidirezionale aggiornata
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
*Ultimo aggiornamento: Gennaio 2025*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f813254 (.)
=======
Ultimo aggiornamento: 14 Maggio 2025

## Risoluzione conflitti e standard
- Il file `lang/it/notify_theme.php` è stato risolto manualmente mantenendo PSR-12, strict_types, array short syntax e solo chiavi effettive, come richiesto dagli standard PHPStan livello 10.
- Il file `NOTIFICATION_CHANNELS_IMPLEMENTATION.md` è stato risolto manualmente mantenendo la versione più aggiornata e coerente con le best practice architetturali del modulo Notify.
<<<<<<< HEAD
- Vedi anche: [../../../../project_docs/README.md](../../../../project_docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 7bac387 (.)
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
- Vedi anche: [../../../../docs/README.md](../../../../docs/README.md)
- Per dettagli sulle scelte architetturali e funzionali, consultare la doc globale e la sezione "Standard e Traduzioni".
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
