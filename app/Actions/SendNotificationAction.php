<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 7148d73 (.)
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
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return bool
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
>>>>>>> 75179b8 (.)
=======
        if (!$template) {
>>>>>>> 7148d73 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b8 (.)
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 7148d73 (.)
            return false;
        }

        // Compila il template
<<<<<<< HEAD
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
=======
        /** @var array{subject: string, body_html: string|null, body_text: string|null} $compiled */
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
        /** @var array<int, string> $templateChannels */
        $templateChannels = $template->channels;
        /** @var array<int, string> $effectiveChannels */
        $effectiveChannels = $channels !== [] ? $channels : $templateChannels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            /** @var string $channel */
>>>>>>> 7148d73 (.)
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
     *
<<<<<<< HEAD
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
=======
     * @param Model $recipient
     * @param string $channel
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
     * @return void
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
=======
     *
     * @param Model $recipient
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
     * @return void
>>>>>>> 7148d73 (.)
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForMail')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
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
=======
        if (!$email) {
            throw new Exception('Email destinatario non disponibile');
        }

        /** @var string $body */
        $body = $compiled['body_html'] ?? $compiled['body_text'] ?? '';
        /** @var string|null $bodyText */
        $bodyText = $compiled['body_text'];

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $body,
                ['mail'],
                array_merge($options, [
                    'text_view' => $bodyText,
>>>>>>> 7148d73 (.)
                ]),
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $compiled['subject'],
<<<<<<< HEAD
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
=======
                $body,
                ['mail'],
                array_merge($options, [
                    'text_view' => $bodyText,
                ]),
>>>>>>> 7148d73 (.)
            ));
        }
    }

    /**
     * Invia una notifica nel database.
<<<<<<< HEAD
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
=======
     *
     * @param Model $recipient
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
     * @return void
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        /** @var string|null $bodyHtml */
        $bodyHtml = $compiled['body_html'];
        /** @var string $message */
        $message = $compiled['body_text'] ?? ($bodyHtml !== null ? strip_tags($bodyHtml) : '');

        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
>>>>>>> 7148d73 (.)
            ['database'],
            $options,
        ));
    }

    /**
     * Invia una notifica via SMS.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
=======
     *
     * @param Model $recipient
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
     * @return void
>>>>>>> 7148d73 (.)
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForSms')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
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
=======
        if (!$phone) {
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        /** @var string|null $bodyHtml */
        $bodyHtml = $compiled['body_html'];
        // Usa il testo plain o una versione senza HTML
        /** @var string $message */
        $message = $compiled['body_text'] ?? ($bodyHtml !== null ? strip_tags($bodyHtml) : '');
>>>>>>> 7148d73 (.)

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
<<<<<<< HEAD
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
=======
>>>>>>> 7148d73 (.)
    }
}
