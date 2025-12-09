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
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
<<<<<<< HEAD
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
     *
     * @return bool
     * @throws Exception Se il template non esiste o non è attivo
     */
    public function execute(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();
<<<<<<< HEAD
=======
        array $options = []
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)
            ->where('is_active', true)
            ->first();
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
>>>>>>> 75179b85 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
            return false;
        }

        // Compila il template
<<<<<<< HEAD
        /** @var array{subject: string, body_html: string|null, body_text: string|null} $compiled */
        $compiled = $template->compile($data);

        // Usa i canali specificati o quelli del template
        /** @var array<int, string> $templateChannels */
        $templateChannels = $template->channels;
        /** @var array<int, string> $channelsToUse */
        $channelsToUse = ! empty($channels) ? $channels : $templateChannels;

        // Invia tramite ogni canale
        foreach ($channelsToUse as $channel) {
            if (!is_string($channel)) {
                continue;
            }
=======
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
>>>>>>> 75179b85 (.)
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
     *
     * @param Model $recipient
     * @param string $channel
<<<<<<< HEAD
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
=======
     * @param array $compiled
     * @param array $options
>>>>>>> 75179b85 (.)
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
        array $options
    ): void {
>>>>>>> b19cd40 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 75179b85 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
        if (! $email) {
            throw new Exception('Email destinatario non disponibile');
        }

        /** @var string|null $bodyHtml */
        $bodyHtml = $compiled['body_html'];
        /** @var string $body */
        $body = $bodyHtml ?? $compiled['body_text'] ?? '';
        /** @var string|null $bodyText */
        $bodyText = $compiled['body_text'];

        /** @var string $subject */
        $subject = $compiled['subject'];
        /** @var array<string, mixed> $notificationData */
        $notificationData = array_merge($options, [
            'text_view' => $bodyText,
        ]);

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $subject,
                $body,
                ['mail'],
                $notificationData,
=======
        if (!$email) {
            throw new Exception('Email destinatario non disponibile');
        }

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
<<<<<<< HEAD
                $subject,
                $body,
                ['mail'],
                $notificationData,
=======
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
            ));
        }
    }

    /**
     * Invia una notifica nel database.
<<<<<<< HEAD
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
        /** @var string $subject */
        $subject = $compiled['subject'];
        /** @var array<string, mixed> $notificationOptions */
        $notificationOptions = $options;

        Notification::send($recipient, new GenericNotification(
            $subject,
            $message,
            ['database'],
            $notificationOptions,
=======
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
            ['database'],
<<<<<<< HEAD
<<<<<<< HEAD
            $options,
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
            $options
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
>>>>>>> 75179b85 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
        if (! $phone) {
=======
        if (!$phone) {
>>>>>>> 75179b85 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
<<<<<<< HEAD
        /** @var string|null $bodyHtml */
        $bodyHtml = $compiled['body_html'];
        /** @var string $message */
        $message = $compiled['body_text'] ?? ($bodyHtml !== null ? strip_tags($bodyHtml) : '');
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);
>>>>>>> 75179b85 (.)

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string $subject */
        $subject = $compiled['subject'];
        /** @var array<string, mixed> $notificationOptions */
        $notificationOptions = $options;

        Notification::send($recipient, new GenericNotification(
            $subject,
            $message,
            ['sms'],
            $notificationOptions,
        ));
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    }
}
