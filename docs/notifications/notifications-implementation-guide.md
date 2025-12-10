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
# Guida all'Implementazione delle Notifiche 

Questa documentazione descrive come implementare correttamente le notifiche utilizzando Laravel Notifications nel modulo Notify.

## Struttura Base di una Notifica

Per implementare correttamente una notifica, è necessario seguire questa struttura:

```php
namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Database\Eloquent\Model;

class RecordNotification extends Notification implements ShouldQueue
{
    use Queueable;
    
    protected Model $record;
    protected string $templateSlug;
    
    /**
     * Create a new notification instance.
     */
    public function __construct(Model $record, string $templateSlug)
    {
        $this->record = $record;
        $this->templateSlug = $templateSlug;
    }
    
    /**
     * Get the notification's delivery channels.
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }
    
    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
<<<<<<< HEAD
            ->subject('Notifica da <nome progetto>')
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
            ->subject('Notifica da <nome progetto>')
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
            ->subject('Notifica da SaluteOra')
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->subject('Notifica da SaluteOra')
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 23cbbaf5 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> bb7e77c2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> b99af5a8 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f3086887 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 3d462363 (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->subject('Notifica da SaluteOra')
>>>>>>> 54ad93c4 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 6e12a84b (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 545977c8 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 69fa7d37 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 23cbbaf5 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->subject('Notifica da SaluteOra')
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> bb7e77c2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> b99af5a8 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f3086887 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 3d462363 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 54ad93c4 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 6e12a84b (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 545977c8 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 69fa7d37 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 23cbbaf5 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> bb7e77c2 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
            ->subject('Notifica da SaluteOra')
>>>>>>> b99af5a8 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f3086887 (rebase 210)
=======
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 53eef8d8d (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 909e45af (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6ad5224fb (.)
            ->subject('Notifica da ')
            ->subject('Notifica da <nome progetto>')
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
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ca10d6ad (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> febe79e3 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9721a5b2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 1442e291 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> fcaebc79 (rebase 210)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 4fc21b78 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9d3810d0 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> d38aa9d2 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9e7ba5b6 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> c8b1c8bf (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9cf0dc90 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> febe79e3 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a29a4728 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9721a5b2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 1442e291 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> fcaebc79 (rebase 210)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9d3810d0 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 6e12a84b (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> d38aa9d2 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9e7ba5b6 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> c8b1c8bf (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9cf0dc90 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b85 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
            ->subject('Notifica da ')
            ->subject('Notifica da SaluteOra')
>>>>>>> 75179b855 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a404ea71 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> ca10d6ad (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23cbbaf5 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> a29a4728 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9721a5b2 (.)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
>>>>>>> f3086887 (rebase 210)
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
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
>>>>>>> 138485550 (.)
=======
=======
>>>>>>> 23cbbaf5 (.)
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> c7a4727b (.)
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9721a5b2 (.)
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 1442e291 (rebase 210)
>>>>>>> f957fb24b (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> fcaebc79 (rebase 210)
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
            ->subject('Notifica da SaluteOra')
>>>>>>> 9d3810d0 (rebase 210)
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
            ->greeting('Ciao ' . $this->record->name)
            ->line('Contenuto della notifica...')
            ->action('Visualizza', url('/'))
            ->line('Grazie per utilizzare la nostra applicazione!');
    }
}
```

## Utilizzo di SpatieEmail con Notifiche

Per utilizzare la classe SpatieEmail all'interno di una notifica, implementa il metodo `toMail()` come segue:

```php
/**
 * Get the mail representation of the notification.
 */
public function toMail(object $notifiable): \Illuminate\Mail\Mailable
{
    $email = new SpatieEmail($this->record, $this->templateSlug);
    
    // Aggiungi eventuali allegati
    if ($this->attachments) {
        $email->addAttachments($this->attachments);
    }
    
    return $email;
}
```

## Invio Corretto delle Notifiche

### 1. Invio di una Notifica a un Modello

```php
// Invio a un utente (che implementa Notifiable)
$user->notify(new RecordNotification($record, 'template-slug'));
```

### 2. Invio di una Notifica ad un Indirizzo Email (On-Demand)

```php
// Invio on-demand a un indirizzo email
Notification::route('mail', 'destinatario@example.com')
    ->notify(new RecordNotification($record, 'template-slug'));
```

### 3. Invio con Allegati

```php
$attachments = [
    [
        'path' => '/path/to/file.pdf',
        'as' => 'documento.pdf',
        'mime' => 'application/pdf',
    ],
];

// Crea la notifica con allegati
$notification = new RecordNotification($record, 'template-slug');
$notification->withAttachments($attachments);

// Invia la notifica
$user->notify($notification);
```

## Errori Comuni e Soluzioni

### Errore: "An email must have a 'To', 'Cc', or 'Bcc' header"

**Causa**: La notifica non ha specificato correttamente il destinatario dell'email.

**Soluzioni**:

1. Assicurarsi che il metodo `toMail()` restituisca un'istanza di `MailMessage` o una mailabile correttamente configurata.

2. Verificare che l'oggetto `$notifiable` contenga un indirizzo email valido o che sia stato specificato tramite `Notification::route('mail', 'email@example.com')`.

3. Se si restituisce una mailabile personalizzata (come `SpatieEmail`), assicurarsi che questa accetti l'oggetto `$notifiable` come destinatario o che il destinatario sia specificato in altro modo.

```php
// Esempio di correzione in toMail()
public function toMail(object $notifiable): \Illuminate\Mail\Mailable
{
    $email = new SpatieEmail($this->record, $this->templateSlug);
    
    // Imposta esplicitamente il destinatario
    // Questo non è necessario se si usa $notifiable->routeNotificationFor('mail')
    // ma è una buona pratica per la chiarezza
    $email->to($notifiable->email);
    
    return $email;
}
```

### Errore: "Notification must implement interface X"

**Causa**: La classe di notifica non implementa tutte le interfacce richieste.

**Soluzione**: Assicurarsi che la classe estenda `Illuminate\Notifications\Notification` e implementi eventuali altre interfacce richieste come `ShouldQueue` se si desidera accodare le notifiche.

## Best Practices

1. **Utilizzare le Code**: Implementare `ShouldQueue` per evitare di bloccare l'applicazione durante l'invio di email.

2. **Testare con Notifiable Mock**: Creare mock di test che implementano l'interfaccia `Notifiable` per testare facilmente le notifiche.

3. **Utilizzare il Locale**: Impostare il locale per la notifica utilizzando `->locale('it')` prima di `->notify()`.

4. **Gestire gli Errori**: Implementare una gestione degli errori per catturare eventuali problemi durante l'invio delle notifiche.

## Collegamenti alla Documentazione Correlata

- [ATTACHMENTS_USAGE.md](../email-sending/ATTACHMENTS_USAGE.md)
- [EMAIL_LAYOUTS_BEST_PRACTICES.md](../mail-templates/EMAIL_LAYOUTS_BEST_PRACTICES.md)
- [EMAIL_TROUBLESHOOTING.md](../email-sending/EMAIL_TROUBLESHOOTING.md)
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
