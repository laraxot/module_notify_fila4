<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Notifications\GenericNotification;
use Spatie\QueueableAction\QueueableAction;

/**
 * Action per l'invio di notifiche multi-canale.
 * Supporta l'invio via email, SMS e notifiche in-app.
 */
class SendNotificationAction
{
    use QueueableAction;

    /**
     * Invia una notifica utilizzando un template.
     *
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array  $options  Opzioni aggiuntive per l'invio
     *
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return bool
>>>>>>> 99ff506 (.)
     * @throws Exception Se il template non esiste o non è attivo
     */
    public function execute(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
>>>>>>> 99ff506 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 99ff506 (.)
=======
        /** @var array<string, mixed> $typedData */
        $typedData = $data;
        if (! $template->shouldSend($typedData)) {
>>>>>>> 05bc3ad (.)
            return false;
        }

        // Compila il template
        $compiled = $template->compile($typedData);

        // Determina i canali da utilizzare
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            if (! is_string($channel)) {
                continue;
            }
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
<<<<<<< HEAD
                Log::error("Errore invio notifica via {$channel}: ".$e->getMessage());

=======
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
>>>>>>> 99ff506 (.)
                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
<<<<<<< HEAD
=======
     *
     * @param Model $recipient
     * @param string $channel
     * @param array $compiled
     * @param array $options
     * @return void
>>>>>>> 99ff506 (.)
     */
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
        switch ($channel) {
            case 'mail':
                $this->sendMail($recipient, $compiled, $options);
                break;
            case 'database':
                $this->sendDatabase($recipient, $compiled, $options);
                break;
            case 'sms':
                $this->sendSms($recipient, $compiled, $options);
                break;
            default:
                throw new Exception("Canale {$channel} non supportato");
        }
    }

    /**
     * Invia una notifica via email.
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
<<<<<<< HEAD
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
        if (! $email) {
=======
        if (!$email) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            throw new Exception('Email destinatario non disponibile');
        }

        // Usa il sistema di notifiche di Laravel
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : 'Notifica';
        $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $message = $bodyHtml ?: $bodyText;

        /** @var array<string, mixed> $notifyOptions */
        $notifyOptions = array_merge($options, [
            'text_view' => $bodyText,
        ]);

        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $subject,
                $message,
                ['mail'],
                $notifyOptions,
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $subject,
                $message,
                ['mail'],
                $notifyOptions,
            ));
        }
    }

    /**
     * Invia una notifica nel database.
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : 'Notifica';
        $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $message = $bodyText ?: strip_tags($bodyHtml);

        /** @var array<string, mixed> $typedOptions */
        $typedOptions = $options;

        Notification::send($recipient, new GenericNotification(
            $subject,
            $message,
            ['database'],
            $typedOptions,
        ));
    }

    /**
     * Invia una notifica via SMS.
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
<<<<<<< HEAD
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
        if (! $phone) {
=======
        if (!$phone) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
        $bodyText = $compiled['body_text'] ?? null;
        $bodyHtml = $compiled['body_html'] ?? null;

        if (is_string($bodyText)) {
            $message = $bodyText;
        } elseif (is_string($bodyHtml)) {
            $message = strip_tags($bodyHtml);
        } else {
            $message = '';
        }

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
<<<<<<< HEAD
            $message = mb_substr($message, 0, 317).'...';
=======
            $message = mb_substr($message, 0, 317) . '...';
>>>>>>> 99ff506 (.)
        }

        $subject = $compiled['subject'] ?? '';
        $subjectStr = is_string($subject) ? $subject : '';

        /** @var array<string, mixed> $optionsArray */
        $optionsArray = $options;

        Notification::send($recipient, new GenericNotification($subjectStr, $message, ['sms'], $optionsArray));
    }
}
