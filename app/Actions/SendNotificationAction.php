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
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> f5f1cb1 (.)
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
<<<<<<< HEAD
        $templateChannels = $template->getAttribute('channels') ?? [];
        $effectiveChannels = $channels ?: $templateChannels;

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
=======
        $effectiveChannels = $channels ?: $template->channels;
>>>>>>> 6ba141fc (.)

        // Assicurati che i canali siano stringhe valide
        /** @var array<int, string> $effectiveChannels */
        $effectiveChannels = array_filter(
            array_map(fn ($channel) => is_string($channel) ? $channel : null, $effectiveChannels),
            fn ($channel) => $channel !== null
        );

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
<<<<<<< HEAD
            $stringChannel = $channel;
=======
            $stringChannel = is_string($channel) ? $channel : (string) $channel;
>>>>>>> 6ba141fc (.)
            try {
<<<<<<< HEAD
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
=======
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
>>>>>>> f5f1cb1 (.)
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$stringChannel}: ".$e->getMessage());

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
<<<<<<< HEAD
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> f5f1cb1 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
        if (! $email) {
=======
        if (!$email) {
>>>>>>> f5f1cb1 (.)
            throw new Exception('Email destinatario non disponibile');
        }

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
            $body = $bodyHtml ?: $bodyText;

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

            $recipient->notify(new GenericNotification(
                $subject,
                $body,
                ['mail'],
<<<<<<< HEAD
                $mergedOptions,
=======
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
>>>>>>> f5f1cb1 (.)
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
            $body = $bodyHtml ?: $bodyText;

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

            Notification::send($recipient, new GenericNotification(
                $subject,
                $body,
                ['mail'],
<<<<<<< HEAD
                $mergedOptions,
=======
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
>>>>>>> f5f1cb1 (.)
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
        $message = $bodyText ?: strip_tags($bodyHtml);

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
<<<<<<< HEAD
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> f5f1cb1 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
        if (! $phone) {
=======
        if (!$phone) {
>>>>>>> f5f1cb1 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
        $bodyTextRaw = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtmlRaw = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = $bodyTextRaw ?: strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($bodyText) > 320) {
            $bodyText = mb_substr($bodyText, 0, 317).'...';
        }

<<<<<<< HEAD
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');

        Notification::send($recipient, new GenericNotification(
            $subject,
            $bodyText,
            ['sms'],
            $options
        ));
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> f5f1cb1 (.)
    }
}
