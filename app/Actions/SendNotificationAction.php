<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 75179b8 (.)
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
     * @param  array<int, string>  $channels  I canali da utilizzare
     * @param  array<string, mixed>  $options  Opzioni aggiuntive
     *
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return bool
>>>>>>> 75179b8 (.)
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
>>>>>>> 75179b8 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b8 (.)
            return false;
        }

        // Compila il template
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
<<<<<<< HEAD
        $templateChannels = $template->getAttribute('channels') ?? [];
        $effectiveChannels = $channels ? $channels : $templateChannels;

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

=======
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
>>>>>>> 75179b8 (.)
                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
=======
     * @param Model $recipient
     * @param string $channel
     * @param array $compiled
     * @param array $options
     * @return void
>>>>>>> 75179b8 (.)
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
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> 75179b8 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
        if (! $email) {
=======
        if (!$email) {
>>>>>>> 75179b8 (.)
            throw new Exception('Email destinatario non disponibile');
        }

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
<<<<<<< HEAD
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
            $body = $bodyHtml ? $bodyHtml : $bodyText;

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
            $body = $bodyHtml ? $bodyHtml : $bodyText;

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

            Notification::send($recipient, new GenericNotification(
                $subject,
                $body,
                ['mail'],
                $mergedOptions,
=======
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            ));
        }
    }

    /**
     * Invia una notifica nel database.
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
        $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $message = $bodyText ? $bodyText : strip_tags($bodyHtml);

        Notification::send($recipient, new GenericNotification(
            $subject,
            $message,
=======
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
>>>>>>> 75179b8 (.)
            ['database'],
            $options,
        ));
    }

    /**
     * Invia una notifica via SMS.
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> 75179b8 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
        if (! $phone) {
=======
        if (!$phone) {
>>>>>>> 75179b8 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
<<<<<<< HEAD
        $bodyTextRaw = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtmlRaw = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = $bodyTextRaw ? $bodyTextRaw : strip_tags($bodyHtmlRaw);

        // Limita la lunghezza del messaggio SMS (tipicamente 160 caratteri)
        $maxLength = 160;
        if (mb_strlen($bodyText) > $maxLength) {
            $bodyText = mb_substr($bodyText, 0, $maxLength - 3).'...';
        }

        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');

        Notification::send($recipient, new GenericNotification(
            $subject,
            $bodyText,
            ['sms'],
            $options
        ));
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
    }
}
