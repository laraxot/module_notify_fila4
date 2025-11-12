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
=======
        if (! $template->shouldSend($data)) {
>>>>>>> ab15d0e (.)
            return false;
        }

        // Compila il template
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
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

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            $stringChannel = $channel;
            try {
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
<<<<<<< HEAD
<<<<<<< HEAD
                Log::error("Errore invio notifica via {$channel}: ".$e->getMessage());
=======
                Log::error("Errore invio notifica via {$stringChannel}: ".$e->getMessage());
>>>>>>> 6a92a74 (.)

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
<<<<<<< HEAD
=======
     *
     * @param Model $recipient
     * @param string $channel
     * @param array $compiled
     * @param array $options
     * @return void
>>>>>>> 99ff506 (.)
=======
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
>>>>>>> 6a92a74 (.)
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
                $mergedOptions,
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
        $bodyTextRaw = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtmlRaw = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = $bodyTextRaw ?: strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS
<<<<<<< HEAD
        if (mb_strlen($message) > 320) {
<<<<<<< HEAD
            $message = mb_substr($message, 0, 317).'...';
=======
            $message = mb_substr($message, 0, 317) . '...';
>>>>>>> 99ff506 (.)
=======
        if (mb_strlen($bodyText) > 320) {
            $bodyText = mb_substr($bodyText, 0, 317).'...';
>>>>>>> 6a92a74 (.)
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
