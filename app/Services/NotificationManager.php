<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
>>>>>>> 99ff506 (.)
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationTemplate;

class NotificationManager
{
    /**
     * Invia una notifica a un destinatario.
     *
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> b19cd40 (.)
=======
     *
>>>>>>> 4e2ebfb (.)
     * @return array
>>>>>>> 99ff506 (.)
     */
    public function send(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
<<<<<<< HEAD
        array $options = [],
=======
        array $options = []
>>>>>>> b19cd40 (.)
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
    ): array {
        $template = $this->getTemplate($templateCode);

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
>>>>>>> 99ff506 (.)
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);

        return [];
    }

    /**
     * Invia una notifica a più destinatari.
     *
<<<<<<< HEAD
     * @param  array  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
     * @param array $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
     * @return array<array>
     */
    public function sendMultiple(
        array $recipients,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
<<<<<<< HEAD
        array $options = [],
=======
        array $options = []
>>>>>>> b19cd40 (.)
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
    ): array {
        $logs = [];

        foreach ($recipients as $recipient) {
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
        }

        return $logs;
    }

    /**
     * Recupera un template per codice.
     *
<<<<<<< HEAD
     * @param  string  $code  Il codice del template
     */
    public function getTemplate(string $code): ?NotificationTemplate
=======
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTemplate(string $code): null|NotificationTemplate
>>>>>>> 99ff506 (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
=======
    public function getTemplate(string $code): ?NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)
            ->where('is_active', true)
            ->first();
>>>>>>> b19cd40 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Recupera i template per categoria.
     *
<<<<<<< HEAD
     * @param  string  $category  La categoria dei template
=======
     * @param string $category La categoria dei template
>>>>>>> 99ff506 (.)
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
>>>>>>> b19cd40 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Recupera i template per canale.
     *
<<<<<<< HEAD
     * @param  string  $channel  Il canale di notifica
=======
     * @param string $channel Il canale di notifica
>>>>>>> 99ff506 (.)
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
>>>>>>> b19cd40 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Recupera le statistiche di invio per un template.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> 99ff506 (.)
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
        // return [
        //     'total' => $logs->count(),
        //     'sent' => $logs->where('status', NotificationLog::STATUS_SENT)->count(),
        //     'delivered' => $logs->where('status', NotificationLog::STATUS_DELIVERED)->count(),
        //     'failed' => $logs->where('status', NotificationLog::STATUS_FAILED)->count(),
        //     'opened' => $logs->where('status', NotificationLog::STATUS_OPENED)->count(),
        //     'clicked' => $logs->where('status', NotificationLog::STATUS_CLICKED)->count(),
        // ];

        return [
            'total' => 0,
            'sent' => 0,
            'delivered' => 0,
            'failed' => 0,
            'opened' => 0,
            'clicked' => 0,
        ];
    }

    /**
     * Recupera le statistiche di invio per un destinatario.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $_recipient  Il destinatario
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
     * @param Model $_recipient Il destinatario
>>>>>>> 99ff506 (.)
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
        // return [
        //     'total' => $logs->count(),
        //     'sent' => $logs->where('status', NotificationLog::STATUS_SENT)->count(),
        //     'delivered' => $logs->where('status', NotificationLog::STATUS_DELIVERED)->count(),
        //     'failed' => $logs->where('status', NotificationLog::STATUS_FAILED)->count(),
        //     'opened' => $logs->where('status', NotificationLog::STATUS_OPENED)->count(),
        //     'clicked' => $logs->where('status', NotificationLog::STATUS_CLICKED)->count(),
        // ];

        return [
            'total' => 0,
            'sent' => 0,
            'delivered' => 0,
            'failed' => 0,
            'opened' => 0,
            'clicked' => 0,
        ];
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> b19cd40 (.)
=======
}
>>>>>>> 4e2ebfb (.)
