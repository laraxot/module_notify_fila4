<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
# Sistema di Notifica Appuntamenti - il progetto

## Panoramica

Il sistema di notifica degli appuntamenti di il progetto consente l'invio automatico di email ai pazienti in diverse fasi del ciclo di vita di un appuntamento. Il sistema è completamente integrato con il modulo Dental e utilizza esclusivamente le Spatie Laravel-Queueable-Action per le operazioni asincrone, in linea con le best practice del progetto.

## Tipi di Notifiche

Il sistema supporta i seguenti tipi di notifiche per gli appuntamenti:

1. **Conferma** (`confirmed`): Inviata quando un appuntamento viene confermato
2. **Promemoria** (`reminder`): Inviata automaticamente prima della data dell'appuntamento
3. **Cancellazione** (`cancelled`): Inviata quando un appuntamento viene cancellato
4. **Riprogrammazione** (`rescheduled`): Inviata quando un appuntamento viene modificato nelle date o orari
5. **Generica** (`generic`): Template generico per comunicazioni personalizzate

## Componenti Principali

### 1. `AppointmentNotificationMail`

Classe Mailable che gestisce l'invio delle email di notifica per gli appuntamenti. Supporta diversi tipi di notifiche e determina dinamicamente il template da utilizzare.

```php
namespace Modules\Notify\Mail;

class AppointmentNotificationMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    
    // ...
}
```

### 2. Template Email

Tutti i template sono strutturati in modo coerente e responsive, con variazioni di stile in base al tipo di notifica:

- `confirmed.blade.php`: Template per appuntamenti confermati (colore verde)
- `reminder.blade.php`: Template per promemoria di appuntamenti (colore blu)
- `cancelled.blade.php`: Template per appuntamenti cancellati (colore rosso)
- `rescheduled.blade.php`: Template per appuntamenti riprogrammati (colore viola)
- `generic.blade.php`: Template generico per comunicazioni personalizzate (colore blu)

### 3. Actions Spatie

Le seguenti azioni sono utilizzate per la gestione delle notifiche:

- `SendAppointmentNotificationAction`: Azione principale per l'invio di notifiche, utilizzata sia dal workflow che dal sistema automatico
- `SendAppointmentRemindersAction`: Azione per l'invio automatico di promemoria per appuntamenti imminenti

## Flusso di Lavoro

1. **Creazione/Modifica Appuntamento**:
   - L'appuntamento viene creato o modificato tramite il workflow Filament
   - Le notifiche vengono inviate automaticamente in base all'evento (conferma, modifica, cancellazione)

2. **Promemoria Automatici**:
   - Il comando `dental:send-appointment-reminders` viene eseguito secondo lo schedule configurato
   - Il comando utilizza `SendAppointmentRemindersAction` per identificare gli appuntamenti imminenti
   - I promemoria vengono inviati con informazioni pertinenti (data, ora, medico, ecc.)

## Configurazione Scheduler

Il sistema è configurato per inviare automaticamente:

- Promemoria giornalieri: ogni giorno alle 10:00 per appuntamenti del giorno successivo
- Promemoria settimanali: ogni lunedì alle 9:00 per appuntamenti della settimana successiva

## Integrazione con il Workflow di Appuntamenti

Il sistema di notifiche è completamente integrato con il workflow di prenotazione appuntamenti del modulo Dental:

1. Al completamento del workflow, viene inviata una notifica di conferma
2. In caso di modifica di data/ora, viene inviata una notifica di riprogrammazione
3. In caso di cancellazione, viene inviata una notifica di cancellazione

## Utilizzo nell'Applicazione

### Invio di una notifica manuale

```php
app(SendAppointmentNotificationAction::class)->execute(
    appointment: $appointment,
    type: 'generic',
    additionalData: [
        'message' => 'Messaggio personalizzato per il paziente',
        'additional_message' => 'Ulteriori informazioni'
    ]
);
```

### Esecuzione manuale dei promemoria

```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======

>>>>>>> b19cd40 (.)
=======
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
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
# Invio promemoria per appuntamenti di domani
php artisan dental:send-appointment-reminders --days=1

# Invio promemoria per appuntamenti tra 7 giorni
php artisan dental:send-appointment-reminders --days=7

# Invio promemoria usando le code (asincrono)
php artisan dental:send-appointment-reminders --days=1 --queue
```

## Best Practices

1. Utilizzare sempre le code per l'invio di notifiche multiple
2. Personalizzare i messaggi con informazioni specifiche del paziente e dell'appuntamento
3. Monitorare i log per verificare l'invio corretto delle notifiche
4. Testare regolarmente i template email su diversi client di posta
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
