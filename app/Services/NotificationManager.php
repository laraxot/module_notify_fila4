<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Actions\SendNotificationAction;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
use Modules\Notify\Models\NotificationTemplate;

class NotificationManager
{
    /**
     * Invia una notifica a un destinatario.
     *
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<string, mixed>
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return array
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     *
     * @return array
     *
     * 
     * @return array
     *
     * @return array
     *
     * @return array
     *
     * @return array
     *
     * @return array
     *
     * @return array
     */
    public function send(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = [],
        array $options = []
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = []
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
        array $options = [],
    ): array {
        $template = $this->getTemplate($templateCode);

        if (!$template) {
        if (! $template) {
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
        array $options = [],
    ): array {
        $template = $this->getTemplate($templateCode);

        if (! $template) {
        if (!$template) {
        if (! $template) {
        if (!$template) {
        if (! $template) {
        if (! $template) {
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);
        if (!$template) {
        if (! $template) {
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);
        $action->execute($recipient, $templateCode, $safeData, $safeChannels, $safeOptions);
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);

        return [];
    }

    /**
     * Invia una notifica a più destinatari.
     *
     * @param array<int, Model> $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<int, array<string, mixed>>
     * @param  array  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
     * @param  array<Model>  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
     * @param array $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     *
     * 
     *
     *
     *
     *
     *
     * 
     *
     *
     * 
     *
     *
     * 
     *
     *
     *
     * 
     *
     * @return array<array>
     *
     * @return array<array>
     *
     * 
     * @return array<array>
     *
     * @return array<array>
     *
     * @return array<array>
     */
    public function sendMultiple(
        array $recipients,
        string $templateCode,
        array $data = [],
        array $channels = [],
        array $options = [],
    ): array {
        /** @var array<int, array<string, mixed>> $logs */
        $logs = [];

        foreach ($recipients as $recipient) {
            if (!($recipient instanceof Model)) {
                continue;
            }
        array $options = [],
    ): array {
        $logs = [];

        foreach ($recipients as $recipient) {
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            if ($recipient instanceof Model) {
                $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            }
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
        }

        return $logs;
    }

    /**
     * Recupera un template per codice.
     *
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
    public function getTemplate(string $code): null|NotificationTemplate
     * @param  string  $code  Il codice del template
     */
    public function getTemplate(string $code): ?NotificationTemplate
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): ?NotificationTemplate
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): ?NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)
            ->where('is_active', true)
            ->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): ?NotificationTemplate
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    public function getTemplate(string $code): ?NotificationTemplate
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
    }

    /**
     * Recupera i template per categoria.
     *
     * @param string $category La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param string $category La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param string $category La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
     * @param string $category La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param string $category La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param  string  $category  La categoria dei template
     * @param string $category La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
     * @param string $category La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
    {
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
     * @return \Illuminate\Database\Eloquent\Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
    {
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
    {
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
    }

    /**
     * Recupera i template per canale.
     *
     * @param string $channel Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param string $channel Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param string $channel Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
     * @param string $channel Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param string $channel Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param  string  $channel  Il canale di notifica
     * @param string $channel Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
     * @param string $channel Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
    {
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
     * @return \Illuminate\Database\Eloquent\Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
    {
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
    {
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
    }

    /**
     * Recupera le statistiche di invio per un template.
     *
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
        
     * @param NotificationTemplate $template Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
        //
        
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //

        
     * @param NotificationTemplate $template Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
        //
        
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //


        

        
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
        

        
     * @param NotificationTemplate $template Il template
     * @param NotificationTemplate $_template Template delle notifiche Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
        //
        
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //


        

        
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
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
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @param  Model  $_recipient  Il destinatario
     * @param Model $_recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        
     * @param Model $recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
        
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //

        
     * @param Model $recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
        
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //


        

        
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
        

        
     * @param Model $recipient Il destinatario
     * @param Model $_recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
        
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //


        

        
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
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
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
