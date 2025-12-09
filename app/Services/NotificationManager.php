<?php

declare(strict_types=1);

namespace Modules\Notify\Services;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
=======
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
=======
use Modules\Notify\Actions\SendNotificationAction;
=======
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationLog;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
use Modules\Notify\Models\NotificationTemplate;

class NotificationManager
{
    /**
     * Invia una notifica a un destinatario.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<string, mixed>
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
>>>>>>> f1c9518b (.)
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
     *
=======
     * 
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
     * @return array
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     * @return array
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
     *
     * @return array
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
     *
=======
     * 
>>>>>>> b19cd40 (.)
=======
     *
>>>>>>> 4e2ebfb (.)
     * @return array
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     */
    public function send(
        Model $recipient,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
        array $options = [],
=======
        array $options = []
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        array $options = [],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        array $options = [],
>>>>>>> 9777d1b3 (.)
=======
        array $options = [],
=======
=======
        array $options = [],
=======
>>>>>>> d09cb759 (.)
=======
        array $options = [],
=======
>>>>>>> d09cb759 (.)
=======
        array $options = [],
=======
>>>>>>> 4689a827 (.)
=======
        array $options = [],
=======
>>>>>>> f2e64178 (.)
=======
        array $options = [],
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        array $options = [],
>>>>>>> 3f537838 (.)
=======
        array $options = [],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        array $options = [],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        array $options = [],
>>>>>>> 3f537838 (.)
=======
        array $options = [],
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        array $options = [],
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        array $options = [],
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        array $options = [],
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        array $options = [],
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        array $options = [],
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        array $options = [],
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        array $options = [],
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
    ): array {
        $template = $this->getTemplate($templateCode);

<<<<<<< HEAD
<<<<<<< HEAD
        if (!$template) {
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
        if (! $template) {
=======
        if (!$template) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
            throw new Exception("Template not found: {$templateCode}");
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
        if (!$template) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
<<<<<<< HEAD
        $action->execute($recipient, $templateCode, $data, $channels, $options);
=======
        $action->execute($recipient, $templateCode, $safeData, $safeChannels, $safeOptions);
=======
        if (!$template) {
            throw new Exception("Template not found: {$templateCode}");
        }

        $action = app(SendNotificationAction::class);
        $action->execute($recipient, $templateCode, $data, $channels, $options);
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

        return [];
    }

    /**
     * Invia una notifica a più destinatari.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<int, Model> $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array<string, mixed> $data I dati per compilare il template
     * @param array<int, string> $channels I canali da utilizzare (opzionale)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
     *
     * @return array<int, array<string, mixed>>
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
     * @param  array  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale)
     * @param  array  $options  Opzioni aggiuntive per l'invio
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
     * @param  array<Model>  $recipients  I destinatari delle notifiche
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array<string, mixed>  $data  I dati per compilare il template
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
     * @param array $recipients I destinatari delle notifiche
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     *
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
=======
     *
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
     *
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
     *
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
     * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
     *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
     * @return array<array>
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
     *
=======
     * 
>>>>>>> b19cd40 (.)
     * @return array<array>
>>>>>>> 75179b85 (.)
=======
     *
     * @return array<array>
>>>>>>> 75179b85 (.)
=======
     *
     * @return array<array>
>>>>>>> 75179b85 (.)
     */
    public function sendMultiple(
        array $recipients,
        string $templateCode,
        array $data = [],
        array $channels = [],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        array $options = [],
=======
        array $options = []
>>>>>>> b19cd40 (.)
    ): array {
<<<<<<< HEAD
        /** @var array<int, array<string, mixed>> $logs */
        $logs = [];

        foreach ($recipients as $recipient) {
            if (!($recipient instanceof Model)) {
                continue;
            }
=======
        $logs = [];

        foreach ($recipients as $recipient) {
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
=======
            if ($recipient instanceof Model) {
                $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
            }
=======
            $logs[] = $this->send($recipient, $templateCode, $data, $channels, $options);
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
        }

        return $logs;
    }

    /**
     * Recupera un template per codice.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
    public function getTemplate(string $code): null|NotificationTemplate
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param  string  $code  Il codice del template
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTemplate(string $code): ?NotificationTemplate
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
     * @param string $code Il codice del template
     * @return NotificationTemplate|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getTemplate(string $code): null|NotificationTemplate
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
    public function getTemplate(string $code): null|NotificationTemplate
>>>>>>> f813254 (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
    public function getTemplate(string $code): ?NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)
            ->where('is_active', true)
            ->first();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> ce89c8bb (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 3f537838 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 3f537838 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function getTemplate(string $code): null|NotificationTemplate
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
    public function getTemplate(string $code): ?NotificationTemplate
=======
    public function getTemplate(string $code): null|NotificationTemplate
>>>>>>> f5f1cb1 (.)
    {
        return NotificationTemplate::where('code', $code)->where('is_active', true)->first();
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
    }

    /**
     * Recupera i template per categoria.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $category La categoria dei template
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
     * @param  string  $category  La categoria dei template
=======
     * @param string $category La categoria dei template
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
     * @param  string  $category  La categoria dei template
>>>>>>> 985c7bda (.)
=======
     * @param  string  $category  La categoria dei template
=======
     * @param string $category La categoria dei template
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
     * @return Collection<NotificationTemplate>
     */
<<<<<<< HEAD
    public function getTemplatesByCategory(string $category)
=======
    public function getTemplatesByCategory(string $category): Collection
=======
     * @param string $category La categoria dei template
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByCategory(string $category)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
        return NotificationTemplate::where('category', $category)
            ->where('is_active', true)
            ->get();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
>>>>>>> 4689a827 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
>>>>>>> f2e64178 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return NotificationTemplate::where('category', $category)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
    }

    /**
     * Recupera i template per canale.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $channel Il canale di notifica
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
     * @param  string  $channel  Il canale di notifica
=======
     * @param string $channel Il canale di notifica
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
     * @param  string  $channel  Il canale di notifica
>>>>>>> 985c7bda (.)
=======
     * @param  string  $channel  Il canale di notifica
=======
     * @param string $channel Il canale di notifica
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
     * @return Collection<NotificationTemplate>
     */
<<<<<<< HEAD
    public function getTemplatesByChannel(string $channel)
=======
    public function getTemplatesByChannel(string $channel): Collection
=======
     * @param string $channel Il canale di notifica
     * @return Collection<NotificationTemplate>
     */
    public function getTemplatesByChannel(string $channel)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
        return NotificationTemplate::forChannel($channel)
            ->where('is_active', true)
            ->get();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
>>>>>>> 4689a827 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
>>>>>>> f2e64178 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return NotificationTemplate::forChannel($channel)->where('is_active', true)->get();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
    }

    /**
     * Recupera le statistiche di invio per un template.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param NotificationTemplate $_template Template delle notifiche Il template
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
>>>>>>> 985c7bda (.)
=======
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
=======
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
     * @param  NotificationTemplate  $_template  Template delle notifiche Il template
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
     * @param NotificationTemplate $_template Template delle notifiche Il template
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $_template): array
    {
        // $logs = $template->logs();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
=======
     * @param NotificationTemplate $template Il template
     * @return array<string, mixed>
     */
    public function getTemplateStats(NotificationTemplate $template): array
    {
        // $logs = $template->logs();
        //
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

=======
        
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param Model $_recipient Il destinatario
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
     * @param  Model  $_recipient  Il destinatario
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Model $_recipient Il destinatario
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param Model $_recipient Il destinatario
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  Model  $_recipient  Il destinatario
>>>>>>> 985c7bda (.)
=======
     * @param  Model  $_recipient  Il destinatario
=======
     * @param Model $_recipient Il destinatario
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
     * @param  Model  $_recipient  Il destinatario
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
     * @param Model $_recipient Il destinatario
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $_recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
=======
     * @param Model $recipient Il destinatario
     * @return array<string, mixed>
     */
    public function getRecipientStats(Model $recipient): array
    {
        // $logs = NotificationLog::forNotifiable($recipient)->get();
        //
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======

=======
        
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======

=======
        
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
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
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
}
=======
} 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
}
=======
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> 4689a827 (.)
=======
}
=======
>>>>>>> f2e64178 (.)
=======
}
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
}
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
}
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
}
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
}
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
}
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
