<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
=======
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

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
     * @var array<int, string> I canali da utilizzare per la notifica
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
     * @param array<int, string> $channels I canali da utilizzare ('mail', 'sms', 'database')
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param mixed $_notifiable L'entità da notificare (oggetto che riceverà la notifica)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via($notifiable): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * @param mixed $_notifiable L'entità da notificare (oggetto che riceverà la notifica)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
        $mail = new MailMessage()
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mail = new MailMessage()
=======
        $mail = (new MailMessage())
>>>>>>> a12f125f4a (.)
=======
        $mail = new MailMessage()
>>>>>>> b93ef594b4 (.)
=======
        $mail = (new MailMessage())
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            ->subject($this->title)
            ->greeting('Gentile ' . $this->getRecipientName($notifiable))
            ->line($this->message);

        // Aggiungi eventuali azioni se specificate nei dati
<<<<<<< HEAD
        if (isset($this->data['action_text'], $this->data['action_url'])) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (isset($this->data['action_text'], $this->data['action_url'])) {
=======
        if (isset($this->data['action_text']) && isset($this->data['action_url'])) {
>>>>>>> a12f125f4a (.)
=======
        if (isset($this->data['action_text'], $this->data['action_url'])) {
>>>>>>> b93ef594b4 (.)
=======
        if (isset($this->data['action_text']) && isset($this->data['action_url'])) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
=======
        return $mail->salutation('Cordiali saluti,')
            ->line('Team il progetto');
>>>>>>> a12f125f4a (.)
=======
        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
>>>>>>> b93ef594b4 (.)
=======
        return $mail->salutation('Cordiali saluti,')
            ->line('Team il progetto');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($content) > 320) {
            $content = mb_substr($content, 0, 317) . '...';
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        // TODO: Implementare TwilioSmsMessage quando disponibile
        $to = '';
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForTwilio')) {
            $routeResult = $notifiable->routeNotificationForTwilio($this);
            $to = (string) ($routeResult ?? '');
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
            /** @var string $fullName */
            $fullName = $notifiable->getFullName();
            return $fullName;
=======
            return $notifiable->getFullName();
>>>>>>> 75179b85 (.)
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        if (is_object($notifiable) && $notifiable instanceof Model) {
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'full_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'full_name', 'Utente');
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }

<<<<<<< HEAD
=======
=======
=======
        
        if (is_object($notifiable) && $notifiable instanceof \Illuminate\Database\Eloquent\Model) {
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'full_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'full_name', 'Utente');
            }
>>>>>>> origin/develop
            
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }
            
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'name')) {
                return SafeAttributeCastAction::getString($notifiable, 'name', 'Utente');
            }
        }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        return 'Utente';
    }
}
