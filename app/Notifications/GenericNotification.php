<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> 8bc2fc9f (first)
=======
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 20a3d3b (.)
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Modules\Xot\Actions\Cast\SafeAttributeCastAction;

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
     * @var array<string> I canali da utilizzare per la notifica
     */
    protected array $channels;

    /**
     * @var array<string, mixed> Dati aggiuntivi per la notifica
     */
    protected array $data;

    /**
     * Crea una nuova istanza della notifica.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20a3d3b (.)
     * @param string               $title    Il titolo della notifica
     * @param string               $message  Il contenuto della notifica
     * @param array<string>        $channels I canali da utilizzare ('mail', 'sms', 'database')
     * @param array<string, mixed> $data     Dati aggiuntivi per la notifica
<<<<<<< HEAD
=======
     * @param string $title Il titolo della notifica
     * @param string $message Il contenuto della notifica
     * @param array<string> $channels I canali da utilizzare ('mail', 'sms', 'database')
     * @param array<string, mixed> $data Dati aggiuntivi per la notifica
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
     * @param mixed $_notifiable L'entità da notificare (oggetto che riceverà la notifica)
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
>>>>>>> 8bc2fc9f (first)
=======
     *
>>>>>>> 20a3d3b (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
    {
        /** @var array<int, string> $channels */
        $channels = array_values($this->channels);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 8bc2fc9f (first)
=======

>>>>>>> 20a3d3b (.)
        return $channels;
    }

    /**
     * Ottiene la rappresentazione mail della notifica.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function toMail(mixed $notifiable): MailMessage
    {
        $mail = new MailMessage();
        $mail = $mail->subject($this->title);
        $mail = $mail->greeting('Gentile '.$this->getRecipientName($notifiable));
        $mail = $mail->line($this->message);
=======
     *
     * @param mixed $notifiable
     * @return MailMessage
=======
>>>>>>> 20a3d3b (.)
     */
    public function toMail(mixed $notifiable): MailMessage
    {
<<<<<<< HEAD
        $mail = (new MailMessage())
            ->subject($this->title)
            ->greeting('Gentile ' . $this->getRecipientName($notifiable))
            ->line($this->message);
>>>>>>> 8bc2fc9f (first)
=======
        $mail = new MailMessage();
        $mail = $mail->subject($this->title);
        $mail = $mail->greeting('Gentile '.$this->getRecipientName($notifiable));
        $mail = $mail->line($this->message);
>>>>>>> 20a3d3b (.)

        // Aggiungi eventuali azioni se specificate nei dati
        if (isset($this->data['action_text'], $this->data['action_url'])) {
            /** @phpstan-ignore-next-line */
<<<<<<< HEAD
<<<<<<< HEAD
            $mail = $mail->action((string) $this->data['action_text'], (string) $this->data['action_url']);
        }

        // Aggiungi eventuali linee aggiuntive
        if (isset($this->data['additional_lines']) && \is_array($this->data['additional_lines'])) {
=======
            $mail->action((string) $this->data['action_text'], (string) $this->data['action_url']);
        }

        // Aggiungi eventuali linee aggiuntive
        if (isset($this->data['additional_lines']) && is_array($this->data['additional_lines'])) {
>>>>>>> 8bc2fc9f (first)
=======
            $mail = $mail->action((string) $this->data['action_text'], (string) $this->data['action_url']);
        }

        // Aggiungi eventuali linee aggiuntive
        if (isset($this->data['additional_lines']) && \is_array($this->data['additional_lines'])) {
>>>>>>> 20a3d3b (.)
            foreach ($this->data['additional_lines'] as $line) {
                $mail->line($line);
            }
        }

        return $mail->salutation('Cordiali saluti,')->line('Team il progetto');
    }

    /**
     * Ottiene la rappresentazione SMS della notifica.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function toTwilio(mixed $notifiable): array
=======
     * @param mixed $notifiable
     * @return array<string, mixed>
     */
    public function toTwilio($notifiable): array
>>>>>>> 8bc2fc9f (first)
=======
     * @return array<string, mixed>
     */
    public function toTwilio(mixed $notifiable): array
>>>>>>> 20a3d3b (.)
    {
        $content = "il progetto: {$this->title}\n{$this->message}";

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($content) > 320) {
<<<<<<< HEAD
<<<<<<< HEAD
            $content = mb_substr($content, 0, 317).'...';
=======
            $content = mb_substr($content, 0, 317) . '...';
>>>>>>> 8bc2fc9f (first)
=======
            $content = mb_substr($content, 0, 317).'...';
>>>>>>> 20a3d3b (.)
        }

        // TODO: Implementare TwilioSmsMessage quando disponibile
        $to = '';
<<<<<<< HEAD
<<<<<<< HEAD
        if (\is_object($notifiable) && method_exists($notifiable, 'routeNotificationForTwilio')) {
=======
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForTwilio')) {
>>>>>>> 8bc2fc9f (first)
=======
        if (\is_object($notifiable) && method_exists($notifiable, 'routeNotificationForTwilio')) {
>>>>>>> 20a3d3b (.)
            $routeResult = $notifiable->routeNotificationForTwilio($this);
            $to = (string) ($routeResult ?? '');
        }

        return [
            'content' => $content,
            'to' => $to,
        ];
    }

    /**
     * Ottiene la rappresentazione database della notifica.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function toDatabase(mixed $notifiable): array
=======
     * @param mixed $notifiable
     * @return array<string, mixed>
     */
    public function toDatabase($notifiable): array
>>>>>>> 8bc2fc9f (first)
=======
     * @return array<string, mixed>
     */
    public function toDatabase(mixed $notifiable): array
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     */
    protected function getRecipientName(mixed $notifiable): string
    {
        // Tenta di ottenere il nome dal destinatario in vari modi
        if (\is_object($notifiable) && method_exists($notifiable, 'getFullName')) {
            $name = $notifiable->getFullName();

            return \is_string($name) ? $name : (string) $name;
        }

        if (\is_object($notifiable) && $notifiable instanceof Model) {
=======
     *
     * @param mixed $notifiable
     * @return string
=======
>>>>>>> 20a3d3b (.)
     */
    protected function getRecipientName(mixed $notifiable): string
    {
        // Tenta di ottenere il nome dal destinatario in vari modi
        if (\is_object($notifiable) && method_exists($notifiable, 'getFullName')) {
            $name = $notifiable->getFullName();

            return \is_string($name) ? $name : (string) $name;
        }

<<<<<<< HEAD
        if (is_object($notifiable) && $notifiable instanceof Model) {
>>>>>>> 8bc2fc9f (first)
=======
        if (\is_object($notifiable) && $notifiable instanceof Model) {
>>>>>>> 20a3d3b (.)
            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'full_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'full_name', 'Utente');
            }

            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'first_name')) {
                return SafeAttributeCastAction::getString($notifiable, 'first_name', 'Utente');
            }

            if (SafeAttributeCastAction::hasNonEmpty($notifiable, 'name')) {
                return SafeAttributeCastAction::getString($notifiable, 'name', 'Utente');
            }
        }

        return 'Utente';
    }
}
