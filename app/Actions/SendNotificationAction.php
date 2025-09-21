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
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
     *
     * @return bool
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

        if (!$template) {
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
        if (!$template->shouldSend($data)) {
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
<<<<<<< HEAD
            } catch (Exception $e) {
=======
<<<<<<< HEAD
            } catch (Exception $e) {
=======
            } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
     * @param array $compiled
     * @param array $options
     * @return void
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
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForMail')) {
<<<<<<< HEAD
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
        if (!$email) {
<<<<<<< HEAD
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
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
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
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForSms')) {
<<<<<<< HEAD
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
        if (!$phone) {
<<<<<<< HEAD
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
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

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
    }
}
