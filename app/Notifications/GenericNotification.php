<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;

>>>>>>> b19cd40 (.)
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
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
=======
>>>>>>> b19cd40 (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
>>>>>>> 9777d1b3 (.)

/**
 * Notifica generica configurabile per il sistema il progetto.
 * Supporta l'invio tramite email, SMS (Twilio) e database.
 */
class GenericNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * @var string Il titolo della notifica
     */
    protected string $title;

    /**
     * @var string Il contenuto della notifica
     */
    protected string $message;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<int, string> I canali da utilizzare per la notifica
=======
     * @var array<string> I canali da utilizzare per la notifica
>>>>>>> 75179b85 (.)
=======
     * @var array<string> I canali da utilizzare per la notifica
>>>>>>> 75179b85 (.)
     */
    protected array $channels;

    /**
     * @var array<string, mixed> Dati aggiuntivi per la notifica
     */
    protected array $data;

    /**
     * Crea una nuova istanza della notifica.
     *
     * @param string $title Il titolo della notifica
     * @param string $message Il contenuto della notifica
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int, string> $channels I canali da utilizzare ('mail', 'sms', 'database')
=======
     * @param array<string> $channels I canali da utilizzare ('mail', 'sms', 'database')
>>>>>>> 75179b85 (.)
=======
     * @param array<string> $channels I canali da utilizzare ('mail', 'sms', 'database')
>>>>>>> 75179b85 (.)
     * @param array<string, mixed> $data Dati aggiuntivi per la notifica
     */
    public function __construct(string $title, string $message, array $channels = ['mail'], array $data = [])
    {
        $this->title = $title;
        $this->message = $message;
        $this->channels = $channels;
        $this->data = $data;
    }

    /**
     * Ottiene i canali di consegna della notifica.
     *
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
     * @param mixed $_notifiable L'entità da notificare (oggetto che riceverà la notifica)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via($notifiable): array
>>>>>>> b19cd40 (.)
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
    {
        return $this->channels;
    }

    /**
     * Ottiene la rappresentazione mail della notifica.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        $mail = new MailMessage()
=======
        $mail = (new MailMessage())
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        $mail = new MailMessage()
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            ->subject($this->title)
            ->greeting('Gentile ' . $this->getRecipientName($notifiable))
            ->line($this->message);

        // Aggiungi eventuali azioni se specificate nei dati
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        if (isset($this->data['action_text'], $this->data['action_url'])) {
=======
        if (isset($this->data['action_text']) && isset($this->data['action_url'])) {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (isset($this->data['action_text'], $this->data['action_url'])) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> 9777d1b3 (.)
        $mail = new MailMessage();
        $mail = $mail->subject($this->title);
        $mail = $mail->greeting('Gentile ' . $this->getRecipientName($notifiable));
        $mail = $mail->line($this->message);

        // Aggiungi eventuali azioni se specificate nei dati
        if (isset($this->data['action_text'], $this->data['action_url'])) {
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            /** @phpstan-ignore-next-line */
            $mail->action((string) $this->data['action_text'], (string) $this->data['action_url']);
        }

        // Aggiungi eventuali linee aggiuntive
        if (isset($this->data['additional_lines']) && is_array($this->data['additional_lines'])) {
            foreach ($this->data['additional_lines'] as $line) {
                $mail->line($line);
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
=======
        return $mail->salutation('Cordiali saluti,')
            ->line('Team il progetto');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
>>>>>>> 9777d1b3 (.)
    }

    /**
     * Ottiene la rappresentazione SMS della notifica.
     *
     * @param mixed $notifiable
     * @return array<string, mixed>
     */
    public function toTwilio($notifiable): array
    {
        $content = "il progetto: {$this->title}\n{$this->message}";
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($content) > 320) {
            $content = mb_substr($content, 0, 317) . '...';
        }
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)

=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
=======

>>>>>>> 9777d1b3 (.)
        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($content) > 320) {
            $content = mb_substr($content, 0, 317) . '...';
        }

<<<<<<< HEAD
=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
        // TODO: Implementare TwilioSmsMessage quando disponibile
        $to = '';
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForTwilio')) {
            $routeResult = $notifiable->routeNotificationForTwilio($this);
            $to = (string) ($routeResult ?? '');
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
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
        return [
            'content' => $content,
            'to' => $to,
        ];
    }

    /**
     * Ottiene la rappresentazione database della notifica.
     *
     * @param mixed $notifiable
     * @return array<string, mixed>
     */
    public function toDatabase($notifiable): array
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'data' => $this->data,
            'created_at' => now()->toIso8601String(),
        ];
    }

    /**
     * Ottiene il nome del destinatario per il saluto personalizzato.
     *
     * @param mixed $notifiable
     * @return string
     */
    protected function getRecipientName($notifiable): string
    {
        // Tenta di ottenere il nome dal destinatario in vari modi
        if (is_object($notifiable) && method_exists($notifiable, 'getFullName')) {
<<<<<<< HEAD
<<<<<<< HEAD
            /** @var string $fullName */
            $fullName = $notifiable->getFullName();
            return $fullName;
=======
            return $notifiable->getFullName();
>>>>>>> 75179b85 (.)
        }

<<<<<<< HEAD
=======
        
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
            return $notifiable->getFullName();
        }
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
        if (is_object($notifiable) && $notifiable instanceof Model) {
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'full_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'full_name', 'Utente');
            }
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

            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }
            
>>>>>>> b19cd40 (.)
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
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'name')) {
                return SafeAttributeCastAction::getString($notifiable, 'name', 'Utente');
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)

=======
        
>>>>>>> b19cd40 (.)
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
        return 'Utente';
    }
}
