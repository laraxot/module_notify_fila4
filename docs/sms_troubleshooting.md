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
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
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
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
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
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
# Troubleshooting SMS

## Errori Comuni e Soluzioni

### 1. Errore di Autenticazione
**Errore**: `Authentication failed` o `Invalid API key`

**Cause**:
- API key non valida o scaduta
- Credenziali non configurate correttamente
- Problemi di rete

**Soluzione**:
1. Verificare le credenziali nel file `.env`
2. Controllare la validità dell'API key
3. Verificare la connessione di rete
4. Controllare i log per dettagli specifici

### 2. Errore di Validazione Numero
**Errore**: `Invalid phone number format`

**Cause**:
- Formato numero non valido
- Prefisso internazionale mancante
- Caratteri non numerici

**Soluzione**:
1. Verificare il formato del numero (+39XXXXXXXXXX)
2. Aggiungere il prefisso internazionale
3. Rimuovere caratteri speciali
4. Utilizzare la validazione configurata

### 3. Errore di Rate Limit
**Errore**: `Rate limit exceeded`

**Cause**:
- Troppe richieste in breve tempo
- Limiti del provider superati
- Configurazione rate limit non corretta

**Soluzione**:
1. Implementare coda per gli invii
2. Aumentare i limiti nel provider
3. Ottimizzare la frequenza di invio
4. Utilizzare il rate limiting configurato

### 4. Errore di Template
**Errore**: `Template not found` o `Invalid template variables`

**Cause**:
- Template non esistente
- Variabili mancanti
- Sintassi template errata

**Soluzione**:
1. Verificare l'esistenza del template
2. Controllare le variabili richieste
3. Validare la sintassi del template
4. Testare il rendering

### 5. Errore di Connessione
**Errore**: `Connection failed` o `Timeout`

**Cause**:
- Problemi di rete
- Server non raggiungibile
- Timeout configurazione

**Soluzione**:
1. Verificare la connessione di rete
2. Controllare i firewall
3. Aumentare i timeout
4. Implementare retry mechanism

## Logging e Monitoraggio

### 1. Struttura Log
```json
{
    "timestamp": "2024-03-20 10:00:00",
    "level": "error",
    "message": "SMS sending failed",
    "context": {
        "recipient": "+393331234567",
        "template": "welcome",
        "error": "Invalid phone number",
        "provider": "smsfactor"
    }
}
```

### 2. Monitoraggio
- Tasso di consegna
- Tempi di risposta
- Errori per provider
- Costi per provider

## Best Practices

### 1. Validazione
- Verificare numeri prima dell'invio
- Validare template e variabili
- Controllare limiti e quote
- Testare in ambiente di sviluppo

### 2. Gestione Errori
- Implementare retry mechanism
- Logging dettagliato
- Notifiche di errore
- Monitoraggio continuo

### 3. Performance
- Utilizzare code per invii massivi
- Ottimizzare template
- Caching quando possibile
- Monitorare risorse

### 4. Sicurezza
- Proteggere API keys
- Validare input
- Rate limiting
- Logging sicuro

## Strumenti di Debug

### 1. Comandi Artisan
```bash

# Test connessione provider
php artisan sms:test-connection

# Verifica template
php artisan sms:validate-template welcome

# Test invio
php artisan sms:test-send +393331234567
```

### 2. Logging
```php
// Abilitare debug logging
Log::debug('SMS Debug', [
    'recipient' => $number,
    'template' => $template,
    'variables' => $variables
]);
```

### 3. Monitoraggio
- Dashboard provider
- Log Laravel
- Metriche applicazione
- Alert system

## Riferimenti

### 1. Documentazione Provider
- [SMSFactor](https://www.smsfactor.com)
- [Twilio](https://www.twilio.com/docs)
- [Nexmo](https://developer.nexmo.com)
- [Plivo](https://www.plivo.com/docs)

### 2. Risorse Utili
<<<<<<< HEAD
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
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
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Logging](https://laravel.com/docs/logging)- [Laravel Notifications](https://laravel.com/project_docs/notifications)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Logging](https://laravel.com/project_docs/logging)
=======
>>>>>>> d284d65 (.)
=======
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
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
<<<<<<< HEAD
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 75179b85 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> e790eb33 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 75179b85 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 75179b855 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 4689a827 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 66453ace (.)
=======
>>>>>>> 7325acf3 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 4f042b88 (.)
=======
>>>>>>> c4bdacbf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 36321fcb (.)
=======
>>>>>>> dceba960 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Queue](https://laravel.com/docs/queues)
- [Laravel Logging](https://laravel.com/docs/logging)
>>>>>>> 712617d3 (.)
=======
>>>>>>> bd804d67 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Logging](https://laravel.com/docs/logging)- [Laravel Notifications](https://laravel.com/project_docs/notifications)
<<<<<<< HEAD
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
- [Laravel Queue](https://laravel.com/project_docs/queues)
- [Laravel Logging](https://laravel.com/project_docs/logging)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 66453ace (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 36321fcb (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)

## Supporto

### 1. Canali di Supporto
- Email: support@example.com
- Ticket System: https://support.example.com
- Documentazione: https://docs.example.com

### 2. SLA
- Risposta entro 24h
- Risoluzione entro 48h
- Supporto 24/7 per criticità

## Manutenzione

### 1. Backup
- Backup giornaliero configurazioni
- Backup template
- Backup log

### 2. Aggiornamenti
- Monitoraggio versioni
- Test compatibilità
- Piano rollback

### 3. Monitoraggio
- Check periodici
- Alert system
- Report mensili 
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
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
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
>>>>>>> 36321fcb (.)
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
