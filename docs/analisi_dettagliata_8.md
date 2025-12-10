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
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
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
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
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
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 602b8a0a9 (.)
# Analisi Dettagliata del Modulo Notify - Parte 8: Note Finali

## 8. Note Finali

### 8.1 Best Practices

#### 8.1.1 Documentazione
- Mantenere aggiornata la documentazione del codice
- Utilizzare PHPDoc per documentare classi, metodi e proprietà
- Includere esempi di utilizzo nella documentazione
- Documentare le dipendenze e i requisiti
- Mantenere un changelog aggiornato

#### 8.1.2 Logging
- Utilizzare livelli di log appropriati (info, warning, error)
- Includere contesto rilevante nei messaggi di log
- Implementare rotazione dei log
- Monitorare i log per errori e warning
- Configurare alert per errori critici

#### 8.1.3 Testing
- Mantenere una copertura dei test elevata
- Testare edge cases e scenari di errore
- Utilizzare test di integrazione per i flussi principali
- Implementare test di performance
- Eseguire test automatici in CI/CD

#### 8.1.4 Performance
- Implementare caching appropriato
- Ottimizzare query al database
- Minimizzare chiamate API esterne
- Utilizzare code per operazioni pesanti
- Monitorare metriche di performance

#### 8.1.5 Backup
- Eseguire backup regolari
- Verificare l'integrità dei backup
- Implementare retention policy
- Testare il ripristino dei backup
- Documentare procedure di backup/restore

#### 8.1.6 Code Review
- Rivedere il codice prima del merge
- Verificare la qualità del codice
- Controllare la sicurezza
- Verificare la manutenibilità
- Assicurare la coerenza dello stile

#### 8.1.7 Sicurezza
- Validare input utente
- Sanitizzare output
- Implementare rate limiting
- Utilizzare HTTPS
- Mantenere aggiornate le dipendenze

#### 8.1.8 Manutenzione
- Eseguire manutenzione regolare
- Monitorare l'utilizzo delle risorse
- Pulire dati obsoleti
- Ottimizzare performance
- Aggiornare dipendenze

### 8.2 Raccomandazioni

#### 8.2.1 Architettura
- Seguire i principi SOLID
- Utilizzare pattern architetturali appropriati
- Mantenere una struttura modulare
- Implementare dependency injection
- Separare le responsabilità

#### 8.2.2 Database
- Utilizzare indici appropriati
- Implementare soft deletes
- Utilizzare transazioni
- Ottimizzare query
- Implementare migrazioni

#### 8.2.3 Cache
- Implementare caching strategico
- Utilizzare cache tags
- Implementare cache invalidation
- Monitorare hit/miss ratio
- Configurare TTL appropriati

#### 8.2.4 API
- Documentare API con OpenAPI/Swagger
- Implementare versioning
- Utilizzare rate limiting
- Implementare autenticazione
- Validare input/output

#### 8.2.5 Frontend
- Implementare validazione lato client
- Utilizzare componenti riutilizzabili
- Implementare error handling
- Ottimizzare bundle size
- Implementare lazy loading

#### 8.2.6 Testing
- Implementare test unitari
- Implementare test di integrazione
- Implementare test end-to-end
- Implementare test di performance
- Implementare test di sicurezza

#### 8.2.7 Deployment
- Implementare CI/CD
- Utilizzare container
- Implementare rollback
- Monitorare deployment
- Documentare procedure

#### 8.2.8 Monitoraggio
- Implementare logging
- Implementare metrics
- Implementare alerting
- Monitorare performance
- Monitorare errori

### 8.3 Considerazioni Future

#### 8.3.1 Scalabilità
- Implementare sharding
- Utilizzare load balancing
- Implementare caching distribuito
- Ottimizzare query
- Monitorare performance

#### 8.3.2 Manutenibilità
- Documentare codice
- Implementare test
- Utilizzare pattern
- Refactoring regolare
- Code review

#### 8.3.3 Sicurezza
- Audit regolare
- Penetration testing
- Security headers
- Input validation
- Output sanitization

#### 8.3.4 Performance
- Profiling
- Ottimizzazione
- Caching
- Lazy loading
- Code splitting

#### 8.3.5 Feature
- A/B testing
- Analytics
- Personalizzazione
- Automazione
- Integrazione

### 8.4 Conclusione

Il modulo Notify è un componente complesso e robusto che fornisce funzionalità avanzate per la gestione delle email. L'architettura modulare e l'implementazione di best practices garantiscono manutenibilità, scalabilità e sicurezza.

Le principali caratteristiche includono:
- Gestione template MJML
- Versioning
- Traduzioni
- Analytics
- Backup
- Manutenzione

Le raccomandazioni per il futuro includono:
- Migliorare la documentazione
- Aumentare la copertura dei test
- Ottimizzare le performance
- Implementare nuove feature
- Migliorare la sicurezza

Il modulo è progettato per essere estensibile e personalizzabile, permettendo l'aggiunta di nuove funzionalità e l'integrazione con altri sistemi.

### 8.5 Riferimenti

#### 8.5.1 Documentazione
- [Laravel Documentation](https://laravel.com/docs)
- [MJML Documentation](https://mjml.io/documentation)
- [Mailgun Documentation](https://documentation.mailgun.com)
- [Filament Documentation](https://filamentphp.com/docs)

#### 8.5.2 Package
- [spatie/laravel-mail-templates](https://github.com/spatie/laravel-mail-templates)
- [mjml/mjml-php](https://github.com/mjmlio/mjml-php)
- [mailgun/mailgun-php](https://github.com/mailgun/mailgun-php)

#### 8.5.3 Tools
<<<<<<< HEAD
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
=======
>>>>>>> 3ee54c5d (.)
>>>>>>> 763771402 (.)
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 763771402 (.)
>>>>>>> 75179b85 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b215d516b (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a75783374 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4b544042 (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> cccb594f (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc2faa05b (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9d84f153 (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ec4cda261 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 43dd68f4b (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> cb5f23b0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 602b8a0a9 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> cccb594f (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [Laravel Telescope](https://laravel.com/project_docs/telescope)
- [Laravel Horizon](https://laravel.com/project_docs/horizon)
- [Laravel Dusk](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b855 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
- [Laravel Telescope](https://laravel.com/docs/telescope)
- [Laravel Horizon](https://laravel.com/docs/horizon)
- [Laravel Dusk](https://laravel.com/docs/dusk)
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
=======
>>>>>>> bf479cc (.)
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
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
>>>>>>> 602b8a0a9 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)

#### 8.5.4 Best Practices
- [Laravel Best Practices](https://github.com/alexeymezenin/laravel-best-practices)
- [PHP The Right Way](https://phptherightway.com)
- [SOLID Principles](https://en.wikipedia.org/wiki/SOLID)

#### 8.5.5 Security
- [OWASP](https://owasp.org)
<<<<<<< HEAD
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/docs/security)
- [Laravel Security](https://laravel.com/project_docs/security)
- [Laravel Security](https://laravel.com/docs/security)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ee18dd92 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> febe79e3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2a97406c (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 98d837b9 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a29a4728 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f042b88 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4e4a7796 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> c7a4727b (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d84f153 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 712617d3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 74eb2e964 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fdb24863 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 84082535 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c188e2a18 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> eb62d6cf (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 5b50927d (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 26d39e2eb (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> d45a0226 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fd1fcc4c (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> cb5f23b0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f3927d7 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4b544042 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> cccb594f (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ee18dd92 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 66453ace (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> febe79e3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2a97406c (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a29a4728 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f042b88 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4e4a7796 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> c7a4727b (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d84f153 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 712617d3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 116df547 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 84082535 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fcaebc79 (rebase 210)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01750b107 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 5b50927d (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 36ac4fc1 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7d5eaf96 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fd1fcc4c (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> cb5f23b0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f3927d7 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4b544042 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> cccb594f (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b85 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> 75179b855 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 66453ace (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> febe79e3 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 98d837b9 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a29a4728 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4e4a7796 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> c7a4727b (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d84f153 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 116df547 (.)
=======
- [Laravel Security](https://laravel.com/docs/security)
=======
- [Laravel Security](https://laravel.com/project_docs/security)
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 82e5ee2d (rebase 210)
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 5b50927d (rebase 210)
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 2dab69c8a (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> cb5f23b0 (.)
>>>>>>> 8db6adf75 (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4f3927d7 (.)
>>>>>>> 602b8a0a9 (.)
=======
>>>>>>> 763771402 (.)
=======
=======
- [Laravel Security](https://laravel.com/docs/security)
>>>>>>> 4b544042 (.)
>>>>>>> a85ebf6cc (.)
- [PHP Security](https://phpsecurity.readthedocs.io)

#### 8.5.6 Testing
- [PHPUnit](https://phpunit.de)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
<<<<<<< HEAD
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
>>>>>>> 4e4a7796 (.)
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
>>>>>>> 9d84f153 (.)
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 7ffa94fc (rebase 210)
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
=======
>>>>>>> 545977c8 (rebase 210)
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
=======
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
=======
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
=======
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
=======
>>>>>>> 4f3927d7 (.)
>>>>>>> 602b8a0a9 (.)
=======
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)
- [Laravel Testing](https://laravel.com/docs/testing)
- [Test-Driven Development](https://en.wikipedia.org/wiki/Test-driven_development)

#### 8.5.7 Performance
- [Laravel Performance](https://laravel.com/docs/performance)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
=======
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> 9f8e680a (rebase 210)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 22baa66d (rebase 210)
=======
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
=======
>>>>>>> eb71492d (.)
=======
=======
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> dceba960 (.)
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 9f8e680a (rebase 210)
=======
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> 6e12a84b (rebase 210)
=======
=======
>>>>>>> 22baa66d (rebase 210)
=======
=======
>>>>>>> 545977c8 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e790eb33 (.)
=======
=======
>>>>>>> eb71492d (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 3ee54c5d (.)
=======
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
=======
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> bb7e77c2 (.)
=======
=======
>>>>>>> dceba960 (.)
=======
=======
>>>>>>> b99af5a8 (.)
=======
=======
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
=======
=======
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
=======
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
=======
>>>>>>> 9f8e680a (rebase 210)
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
=======
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
=======
=======
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 763771402 (.)
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [Test-Driven Development](https://en.wikipedia.org/wiki/Test-driven_development)

#### 8.5.7 Performance
- [Laravel Performance](https://laravel.com/project_docs/performance)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
<<<<<<< HEAD
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> bc2faa05b (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
=======
>>>>>>> 84082535 (rebase 210)
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
=======
>>>>>>> 82e5ee2d (rebase 210)
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
=======
>>>>>>> 8c8937e7 (rebase 210)
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
=======
>>>>>>> 5b50927d (rebase 210)
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
=======
>>>>>>> 9e7ba5b6 (rebase 210)
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
>>>>>>> 2dab69c8a (.)
=======
>>>>>>> 8db6adf75 (.)
=======
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
>>>>>>> a2f3c239e (.)
=======
>>>>>>> 8134673e1 (.)
=======
=======
>>>>>>> 4f3927d7 (.)
>>>>>>> 602b8a0a9 (.)
=======
>>>>>>> 763771402 (.)
=======
>>>>>>> a85ebf6cc (.)
- [PHP Performance](https://www.php.net/manual/en/performance.php)
- [Web Performance](https://web.dev/performance)

#### 8.5.8 Monitoring
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
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 12a7e2462 (.)
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
>>>>>>> 1487fe812 (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
<<<<<<< HEAD
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 3f537838 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> a404ea71 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> ee18dd92 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 2941b0bd (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 4c323e61 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> 4c323e61 (.)
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
>>>>>>> febe79e3 (.)
>>>>>>> 753ea7aca (.)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
=======
>>>>>>> 5fd545e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> c188e2a18 (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> e790eb33 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> d284d65 (.)
>>>>>>> 2dab69c8a (.)
=======
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
<<<<<<< HEAD
>>>>>>> 8db6adf75 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
>>>>>>> a2f3c239e (.)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> eb71492d (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
>>>>>>> bf479cc (.)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 712617d3 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fea359347 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d9e649ac3 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4f3927d7 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> ee18dd92 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> 998e6866b (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4f042b88 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 712617d3 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7a142b4f5 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 36ac4fc1 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> fd1fcc4c (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4f3927d7 (.)
<<<<<<< HEAD
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/project_docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> f963d2c0 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> ee18dd92 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 2a97406c (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 731b801a8 (.)
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
- [Laravel Monitoring](https://laravel.com/docs/monitoring)
- [Application Monitoring](https://en.wikipedia.org/wiki/Application_performance_management)
- [Log Management](https://en.wikipedia.org/wiki/Log_management) 
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> d9e649ac3 (.)
=======
>>>>>>> 602b8a0a9 (.)
