<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
     * @param  array<string, mixed>  $data  I dati per compilare il template
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<int, string>  $channels  I canali da utilizzare
     * @param  array<string, mixed>  $options  Opzioni aggiuntive
=======
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
>>>>>>> 8bc2fc9f (first)
=======
     * @param  array<int, string>  $channels  I canali da utilizzare
     * @param  array<string, mixed>  $options  Opzioni aggiuntive
>>>>>>> 20a3d3b (.)
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
        if (! $template->shouldSend($data)) {
            return false;
        }

        // Compila il template
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
        $templateChannels = $template->getAttribute('channels') ?? [];
<<<<<<< HEAD
<<<<<<< HEAD
        $effectiveChannels = $channels ? $channels : $templateChannels;
=======
        $effectiveChannels = $channels ?: $templateChannels;
>>>>>>> 8bc2fc9f (first)
=======
        $effectiveChannels = $channels ? $channels : $templateChannels;
>>>>>>> 20a3d3b (.)

        // Assicurati che i canali siano stringhe valide
        $filteredChannels = [];
        if (is_array($effectiveChannels)) {
            foreach ($effectiveChannels as $channel) {
                if (is_string($channel)) {
                    $filteredChannels[] = $channel;
                }
            }
        }
        $effectiveChannels = $filteredChannels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            $stringChannel = $channel;
            try {
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
<<<<<<< HEAD
<<<<<<< HEAD
=======
                Log::error("Errore invio notifica via {$stringChannel}: ".$e->getMessage());
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)

                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
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
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
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
        if (method_exists($recipient, 'notify')) {
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
<<<<<<< HEAD
<<<<<<< HEAD
            $body = $bodyHtml ? $bodyHtml : $bodyText;
=======
            $body = $bodyHtml ?: $bodyText;
>>>>>>> 8bc2fc9f (first)
=======
            $body = $bodyHtml ? $bodyHtml : $bodyText;
>>>>>>> 20a3d3b (.)

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

            $recipient->notify(new GenericNotification(
                $subject,
                $body,
                ['mail'],
                $mergedOptions,
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
<<<<<<< HEAD
<<<<<<< HEAD
            $body = $bodyHtml ? $bodyHtml : $bodyText;
=======
            $body = $bodyHtml ?: $bodyText;
>>>>>>> 8bc2fc9f (first)
=======
            $body = $bodyHtml ? $bodyHtml : $bodyText;
>>>>>>> 20a3d3b (.)

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

            Notification::send($recipient, new GenericNotification(
                $subject,
                $body,
                ['mail'],
                $mergedOptions,
            ));
        }
    }

    /**
     * Invia una notifica nel database.
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
        $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
<<<<<<< HEAD
<<<<<<< HEAD
        $message = $bodyText ? $bodyText : strip_tags($bodyHtml);
=======
        $message = $bodyText ?: strip_tags($bodyHtml);
>>>>>>> 8bc2fc9f (first)
=======
        $message = $bodyText ? $bodyText : strip_tags($bodyHtml);
>>>>>>> 20a3d3b (.)

        Notification::send($recipient, new GenericNotification(
            $subject,
            $message,
            ['database'],
            $options,
        ));
    }

    /**
     * Invia una notifica via SMS.
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
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
        $bodyTextRaw = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtmlRaw = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
<<<<<<< HEAD
<<<<<<< HEAD
        $bodyText = $bodyTextRaw ? $bodyTextRaw : strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS (tipicamente 160 caratteri)
        $maxLength = 160;
        if (mb_strlen($bodyText) > $maxLength) {
            $bodyText = mb_substr($bodyText, 0, $maxLength - 3).'...';
=======
        $bodyText = $bodyTextRaw ?: strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($bodyText) > 320) {
            $bodyText = mb_substr($bodyText, 0, 317).'...';
>>>>>>> 8bc2fc9f (first)
=======
        $bodyText = $bodyTextRaw ? $bodyTextRaw : strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS (tipicamente 160 caratteri)
        $maxLength = 160;
        if (mb_strlen($bodyText) > $maxLength) {
            $bodyText = mb_substr($bodyText, 0, $maxLength - 3).'...';
>>>>>>> 20a3d3b (.)
        }

        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');

        Notification::send($recipient, new GenericNotification(
            $subject,
            $bodyText,
            ['sms'],
            $options
        ));
    }
}
