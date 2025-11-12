<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
>>>>>>> f813254 (.)
     *
     * @throws Exception Se il template non esiste o non è attivo
=======
<<<<<<< HEAD
     *
     * @return bool
     * @throws Exception Se il template non esiste o non è attivo
=======
     * 
     * @return bool
     * @throws \Exception Se il template non esiste o non è attivo
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function execute(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();
<<<<<<< HEAD

        if (! $template) {
            throw new Exception("Template {$templateCode} non trovato o non attivo");
=======
=======
=======
>>>>>>> origin/develop
        array $options = []
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)
            ->where('is_active', true)
            ->first();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();
>>>>>>> b93ef594b4 (.)

        if (!$template) {
            throw new Exception("Template {$templateCode} non trovato o non attivo");
=======

        if (!$template) {
            throw new \Exception("Template {$templateCode} non trovato o non attivo");
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
>>>>>>> f813254 (.)
            } catch (Exception $e) {
=======
<<<<<<< HEAD
            } catch (Exception $e) {
=======
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
=======
>>>>>>> origin/develop
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
        array $options
    ): void {
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
                throw new Exception("Canale {$channel} non supportato");
=======
<<<<<<< HEAD
                throw new Exception("Canale {$channel} non supportato");
=======
                throw new \Exception("Canale {$channel} non supportato");
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> f813254 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
=======
<<<<<<< HEAD
            throw new Exception('Il destinatario non supporta le notifiche email');
=======
            throw new \Exception('Il destinatario non supporta le notifiche email');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
        if (! $email) {
=======
        if (!$email) {
<<<<<<< HEAD
>>>>>>> f813254 (.)
            throw new Exception('Email destinatario non disponibile');
=======
<<<<<<< HEAD
            throw new Exception('Email destinatario non disponibile');
=======
            throw new \Exception('Email destinatario non disponibile');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
                ]),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
=======
                ])
>>>>>>> a12f125f4a (.)
=======
                ]),
>>>>>>> b93ef594b4 (.)
=======
                ])
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
                ]),
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
=======
                ])
>>>>>>> a12f125f4a (.)
=======
                ]),
>>>>>>> b93ef594b4 (.)
=======
                ])
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
            $options,
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $options,
=======
            $options
>>>>>>> a12f125f4a (.)
=======
            $options,
>>>>>>> b93ef594b4 (.)
=======
            $options
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> f813254 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
=======
<<<<<<< HEAD
            throw new Exception('Il destinatario non supporta le notifiche SMS');
=======
            throw new \Exception('Il destinatario non supporta le notifiche SMS');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
        if (! $phone) {
=======
        if (!$phone) {
<<<<<<< HEAD
>>>>>>> f813254 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
=======
<<<<<<< HEAD
            throw new Exception('Numero di telefono destinatario non disponibile');
=======
            throw new \Exception('Numero di telefono destinatario non disponibile');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
=======
>>>>>>> origin/develop
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    }
}
