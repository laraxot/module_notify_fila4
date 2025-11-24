<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Actions\SendNotificationAction;
=======
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Modules\Notify\Models\NotificationTemplate;

class NotificationManager
{
    /**
     * Invia una notifica a un destinatario.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return array
>>>>>>> 75179b8 (.)
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<string, mixed>
>>>>>>> 7148d73 (.)
     */
    public function send(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = [],
    ): array {
        $template = $this->getTemplate($templateCode);

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $template) {
            throw new Exception("Template not found: {$templateCode}");
        }

        /** @var array<string, mixed> $safeData */
        $safeData = $data;
        /** @var array<int, string> $safeChannels */
        $safeChannels = array_values($channels);
        /** @var array<string, mixed> $safeOptions */
        $safeOptions = $options;

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $safeData, $safeChannels, $safeOptions);
=======
=======
>>>>>>> 7148d73 (.)
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)

        return [];
    }

    /**
     * Invia una notifica a più destinatari.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<Model>  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
=======
     * @param array $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @return array<array>
=======
     * @param array<int, Model> $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<int, array<string, mixed>>
>>>>>>> 7148d73 (.)
     */
    public function sendMultiple(
        array $recipients,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = [],
    ): array {
<<<<<<< HEAD
        $logs = [];

        foreach ($recipients as $recipient) {
<<<<<<< HEAD
            if ($recipient instanceof Model) {
                $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            }
=======
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
>>>>>>> 75179b8 (.)
=======
        /** @var array<int, array<string, mixed>> $logs */
        $logs = [];

        foreach ($recipients as $recipient) {
            if (!($recipient instanceof Model)) {
                continue;
            }
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
>>>>>>> 7148d73 (.)
        }

        return $logs;
    }

    /**
     * Recupera un template per codice.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $code  Il codice del template
     */
    public function getTemplate(string $code): ?NotificationTemplate
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
    public function getTemplate(string $code): null|NotificationTemplate
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    }

    /**
     * Recupera i template per categoria.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $category  La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category): Collection
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $category La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    {
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
    }

    /**
     * Recupera i template per canale.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $channel  Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel): Collection
=======
=======
>>>>>>> 7148d73 (.)
     * @param string $channel Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
    {
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
    }

    /**
     * Recupera le statistiche di invio per un template.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> 75179b8 (.)
=======
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> 7148d73 (.)
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
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
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
        
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Model  $_recipient  Il destinatario
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @param Model $_recipient Il destinatario
>>>>>>> 75179b8 (.)
=======
     * @param Model $_recipient Il destinatario
>>>>>>> 7148d73 (.)
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
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
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
        
>>>>>>> 7148d73 (.)
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
}
