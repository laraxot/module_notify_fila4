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
<<<<<<< HEAD
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();
=======
        array $options = []
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)
            ->where('is_active', true)
            ->first();
>>>>>>> b19cd40 (.)

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
>>>>>>> 99ff506 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 99ff506 (.)
            return false;
        }

        // Compila il template
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
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
        if (method_exists($recipient, 'notify')) {
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
            ));
        }
    }

    /**
     * Invia una notifica nel database.
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
            ['database'],
<<<<<<< HEAD
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
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
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
<<<<<<< HEAD
            $message = mb_substr($message, 0, 317).'...';
=======
            $message = mb_substr($message, 0, 317) . '...';
>>>>>>> 99ff506 (.)
        }

<<<<<<< HEAD
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
>>>>>>> b19cd40 (.)
    }
}
