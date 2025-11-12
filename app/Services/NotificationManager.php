<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Collection;
=======
<<<<<<< HEAD
use Exception;
use Illuminate\Database\Eloquent\Collection;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @return array
>>>>>>> 99ff506 (.)
     */
    public function send(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
        array $options = [],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        array $options = [],
=======
        array $options = []
>>>>>>> a12f125f4a (.)
=======
        array $options = [],
>>>>>>> b93ef594b4 (.)
=======
        array $options = []
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    ): array {
        $template = $this->getTemplate($templateCode);

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
            throw new Exception("Template not found: {$templateCode}");
=======
<<<<<<< HEAD
            throw new Exception("Template not found: {$templateCode}");
=======
            throw new \Exception("Template not found: {$templateCode}");
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
     *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
     * @return array<array>
     */
    public function sendMultiple(
        array $recipients,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
        array $options = [],
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        array $options = [],
=======
        array $options = []
>>>>>>> a12f125f4a (.)
=======
        array $options = [],
>>>>>>> b93ef594b4 (.)
=======
        array $options = []
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
    public function getTemplate(string $code): null|NotificationTemplate
>>>>>>> 99ff506 (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
=======
=======
>>>>>>> origin/develop
    public function getTemplate(string $code): ?NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)
            ->where('is_active', true)
            ->first();
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Recupera i template per categoria.
     *
<<<<<<< HEAD
     * @param  string  $category  La categoria dei template
=======
     * @param string $category La categoria dei template
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
    {
<<<<<<< HEAD
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
>>>>>>> a12f125f4a (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> b93ef594b4 (.)
=======
     * @return \Illuminate\Database\Eloquent\Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
    {
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Recupera i template per canale.
     *
<<<<<<< HEAD
     * @param  string  $channel  Il canale di notifica
=======
     * @param string $channel Il canale di notifica
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
    {
<<<<<<< HEAD
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
>>>>>>> a12f125f4a (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> b93ef594b4 (.)
=======
     * @return \Illuminate\Database\Eloquent\Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
    {
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
     * @param NotificationTemplate $template Il template
=======
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> b93ef594b4 (.)
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
<<<<<<< HEAD
        //
>>>>>>> a12f125f4a (.)
=======
        
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
     * @param Model $recipient Il destinatario
=======
     * @param Model $_recipient Il destinatario
>>>>>>> b93ef594b4 (.)
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
<<<<<<< HEAD
        //
>>>>>>> a12f125f4a (.)
=======
        
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
