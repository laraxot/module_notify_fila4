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
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array  $options  Opzioni aggiuntive per l'invio
     *
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

        if (! $template) {
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
        /** @var array<string, mixed> $typedData */
        $typedData = $data;
        if (! $template->shouldSend($typedData)) {
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
                Log::error("Errore invio notifica via {$channel}: ".$e->getMessage());

                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
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
        if (! method_exists($recipient, 'routeNotificationForMail')) {
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
        if (! $email) {
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
        if (! method_exists($recipient, 'routeNotificationForSms')) {
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
        if (! $phone) {
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
            $message = mb_substr($message, 0, 317).'...';
        }

        $subject = $compiled['subject'] ?? '';
        $subjectStr = is_string($subject) ? $subject : '';

        /** @var array<string, mixed> $optionsArray */
        $optionsArray = $options;

        Notification::send($recipient, new GenericNotification($subjectStr, $message, ['sms'], $optionsArray));
    }
}
