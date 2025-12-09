<?php

declare(strict_types=1);

namespace Modules\Notify\Actions;

use Exception;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Log;
=======
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Illuminate\Support\Facades\Log;
>>>>>>> 75179b85 (.)
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
     * @param array<int, string> $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array<string, mixed> $options Opzioni aggiuntive per l'invio
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
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
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     *
     * @return bool
=======
<<<<<<< HEAD
     * @param  Model  $recipient  Il destinatario della notifica
     * @param  string  $templateCode  Il codice del template da utilizzare
     * @param  array  $data  I dati per compilare il template
     * @param  array  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array  $options  Opzioni aggiuntive per l'invio
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
     * @param  array<int, string>  $channels  I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param  array<string, mixed>  $options  Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
=======
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
     *
=======
=======
>>>>>>> 75179b85 (.)
     * @param Model $recipient Il destinatario della notifica
     * @param string $templateCode Il codice del template da utilizzare
     * @param array $data I dati per compilare il template
     * @param array $channels I canali da utilizzare (opzionale, usa quelli del template se non specificati)
     * @param array $options Opzioni aggiuntive per l'invio
     *
     * @return bool
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
     * @throws Exception Se il template non esiste o non è attivo
     */
    public function execute(
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
        array $options = [],
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)->where('is_active', true)->first();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        array $options = []
    ): bool {
        // Recupera il template
        $template = NotificationTemplate::where('code', $templateCode)
            ->where('is_active', true)
            ->first();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)

<<<<<<< HEAD
        if (! $template) {
=======
        if (!$template) {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
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
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)

        if (!$template) {
>>>>>>> 75179b85 (.)
=======

        if (!$template) {
>>>>>>> 75179b85 (.)
=======

        if (!$template) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======

        if (!$template) {
>>>>>>> 75179b85 (.)
            throw new Exception("Template {$templateCode} non trovato o non attivo");
        }

        // Verifica condizioni di invio
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
=======
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
        if (! $template->shouldSend($data)) {
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (!$template->shouldSend($data)) {
>>>>>>> 75179b85 (.)
            return false;
        }

        // Compila il template
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array{subject: string, body_html: string|null, body_text: string|null} $compiled */
        $compiled = $template->compile($data);

<<<<<<< HEAD
        // Usa i canali specificati o quelli del template
        /** @var array<int, string> $templateChannels */
        $templateChannels = $template->channels;
        /** @var array<int, string> $channelsToUse */
        $channelsToUse = ! empty($channels) ? $channels : $templateChannels;

        // Invia tramite ogni canale
        foreach ($channelsToUse as $channel) {
            if (!is_string($channel)) {
=======
        // Determina i canali da utilizzare
        /* @phpstan-ignore-next-line property.notFound */
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($effectiveChannels as $channel) {
            if (! is_string($channel)) {
>>>>>>> 7c1c276f (rebase 210)
                continue;
            }
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
<<<<<<< HEAD
<<<<<<< HEAD
        /* @phpstan-ignore-next-line property.notFound */
        $effectiveChannels = $channels ?: $template->channels;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
=======
        $templateChannels = $template->getAttribute('channels') ?? [];
        $effectiveChannels = $channels ?: $templateChannels;
>>>>>>> 5e14ac3 (.)

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
>>>>>>> fbed41ac (.)

        // Processa ogni canale
        /* @phpstan-ignore-next-line foreach.nonIterable */
        foreach ($effectiveChannels as $channel) {
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
>>>>>>> 75179b85 (.)
=======
            $stringChannel = $channel;
=======
            $stringChannel = is_string($channel) ? $channel : (string) $channel;
>>>>>>> 6ba141fc (.)
=======
            $stringChannel = $channel;
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
            try {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
=======
<<<<<<< HEAD
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
=======
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
<<<<<<< HEAD
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
>>>>>>> 985c7bda (.)
=======
                $this->sendViaChannel($recipient, $stringChannel, $compiled, $options);
=======
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
<<<<<<< HEAD
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
=======
<<<<<<< HEAD
                Log::error("Errore invio notifica via {$channel}: ".$e->getMessage());

=======
<<<<<<< HEAD
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
        $compiled = $template->compile($data);

        // Determina i canali da utilizzare
>>>>>>> 75179b85 (.)
        $effectiveChannels = $channels ?: $template->channels;

        // Processa ogni canale
        foreach ($effectiveChannels as $channel) {
            try {
                $this->sendViaChannel($recipient, $channel, $compiled, $options);
            } catch (Exception $e) {
                // Log dell'errore ma continua con altri canali
                Log::error("Errore invio notifica via {$channel}: " . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
                continue;
            }
        }

        return true;
    }

    /**
     * Invia la notifica attraverso un canale specifico.
<<<<<<< HEAD
<<<<<<< HEAD
     *
<<<<<<< HEAD
     * @param Model $recipient
     * @param string $channel
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array{subject: string, body_html: string|null, body_text: string|null} $compiled
     * @param array<string, mixed> $options
=======
     * @param array $compiled
     * @param array $options
>>>>>>> 75179b85 (.)
     * @return void
=======
<<<<<<< HEAD
=======
     *
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
=======
>>>>>>> c8b1c8bf (.)
=======
     *
>>>>>>> 75179b85 (.)
     * @param Model $recipient
     * @param string $channel
     * @param array $compiled
     * @param array $options
     * @return void
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 3f39ac8b (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 6d08c01b (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 3b4c9907 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 8e5817bc (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 2fc60436 (.)
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
        array $options
    ): void {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
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
>>>>>>> 75179b85 (.)
     * @param array $compiled
     * @param array $options
     * @return void
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
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> d09cb759 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4689a827 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> f2e64178 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
        array $options
    ): void {
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> a12f125f4a (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
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
>>>>>>> 3f537838 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
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
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 3f537838 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2effe245 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 58816034 (.)
=======
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
    protected function sendViaChannel(
        Model $recipient,
        string $channel,
        array $compiled,
        array $options
    ): void {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function sendViaChannel(Model $recipient, string $channel, array $compiled, array $options): void
    {
>>>>>>> 9777d1b3 (.)
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
=======
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
>>>>>>> c8b1c8bf (.)
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
<<<<<<< HEAD
        if (!method_exists($recipient, 'routeNotificationForMail')) {
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
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
            throw new Exception('Il destinatario non supporta le notifiche email');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        if (! method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> 985c7bda (.)
=======
        if (! method_exists($recipient, 'routeNotificationForMail')) {
=======
        if (!method_exists($recipient, 'routeNotificationForMail')) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 75179b85 (.)
     */
    protected function sendMail(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForMail')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
            throw new Exception('Il destinatario non supporta le notifiche email');
        }

        $email = $recipient->routeNotificationForMail();
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
        if (! $email) {
=======
        if (!$email) {
<<<<<<< HEAD
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
        if (!$email) {
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        if (! $email) {
>>>>>>> 985c7bda (.)
=======
        if (! $email) {
=======
        if (!$email) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        if (! $email) {
=======
        if (!$email) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (!$email) {
>>>>>>> 75179b85 (.)
            throw new Exception('Email destinatario non disponibile');
        }

        // Usa il sistema di notifiche di Laravel
        if (method_exists($recipient, 'notify')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
            $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
            $bodyHtml = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
            $bodyText = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
            $body = $bodyHtml ? $bodyHtml : $bodyText;

            /** @var array<string, mixed> $mergedOptions */
            $mergedOptions = array_merge($options, [
                'text_view' => $bodyText,
            ]);

>>>>>>> c8b1c8bf (.)
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b3 (.)
=======
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 4689a827 (.)
=======
                ]),
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
                $mergedOptions,
=======
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
                ]),
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
                ]),
>>>>>>> 2941b0bd (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
                ]),
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
                ]),
>>>>>>> 98d837b9 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
                ]),
>>>>>>> c6c33175 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
                ]),
>>>>>>> 503981fd (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
                ]),
>>>>>>> 7a2f131f (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
                $mergedOptions,
>>>>>>> 985c7bda (.)
=======
                ]),
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $subject,
                $body,
                ['mail'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $notificationData,
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b3 (.)
=======
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 4689a827 (.)
=======
                ]),
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d45a0226 (.)
                $mergedOptions,
=======
<<<<<<< HEAD
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
>>>>>>> 75179b85 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                ]),
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
>>>>>>> 3f537838 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
                ]),
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
                ]),
>>>>>>> 2941b0bd (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
                ]),
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
                ]),
>>>>>>> 98d837b9 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
                ]),
>>>>>>> c6c33175 (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
                ]),
>>>>>>> 503981fd (.)
=======
                ]),
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
                ]),
>>>>>>> 7a2f131f (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
                $mergedOptions,
>>>>>>> 985c7bda (.)
=======
                ]),
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 75179b85 (.)
            $recipient->notify(new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
            ));
        } else {
            // Fallback per modelli che non implementano Notifiable
            Notification::send($recipient, new GenericNotification(
                $compiled['subject'],
                $compiled['body_html'] ?? $compiled['body_text'],
                ['mail'],
                array_merge($options, [
                    'text_view' => $compiled['body_text'],
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
                ])
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
                ])
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
                ]),
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
            ));
        }
    }

    /**
     * Invia una notifica nel database.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
=======
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
>>>>>>> 75179b8 (.)
            ['database'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $notificationOptions,
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
     */
    protected function sendDatabase(Model $recipient, array $compiled, array $options): void
    {
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $compiled['body_text'] ?? strip_tags($compiled['body_html']),
            ['database'],
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $options,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b3 (.)
=======
=======
            $options,
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> 4689a827 (.)
=======
            $options,
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
            $options,
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
            $options,
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
            $options,
=======
            $options
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
>>>>>>> 82ae73be (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $options,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> 3f537838 (.)
=======
            $options,
>>>>>>> 75179b85 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $options,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> 3f537838 (.)
=======
            $options,
>>>>>>> 75179b85 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $options,
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            $options,
>>>>>>> 3f537838 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            $options,
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            $options,
>>>>>>> 2941b0bd (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            $options,
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            $options,
>>>>>>> 98d837b9 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
            $options,
>>>>>>> c6c33175 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
            $options,
>>>>>>> 503981fd (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
            $options,
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2effe245 (.)
=======
            $options,
>>>>>>> 985c7bda (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
            $options,
>>>>>>> 58816034 (.)
=======
            $options,
>>>>>>> 75179b85 (.)
=======
            $options,
=======
            $options
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            $options,
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            $options,
>>>>>>> 9777d1b3 (.)
        ));
    }

    /**
     * Invia una notifica via SMS.
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * @param  array<string, mixed>  $compiled
     * @param  array<string, mixed>  $options
>>>>>>> c8b1c8bf (.)
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
<<<<<<< HEAD
        if (!method_exists($recipient, 'routeNotificationForSms')) {
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
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
            throw new Exception('Il destinatario non supporta le notifiche SMS');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        if (! method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> 985c7bda (.)
=======
        if (! method_exists($recipient, 'routeNotificationForSms')) {
=======
        if (!method_exists($recipient, 'routeNotificationForSms')) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 75179b85 (.)
     */
    protected function sendSms(Model $recipient, array $compiled, array $options): void
    {
        if (!method_exists($recipient, 'routeNotificationForSms')) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
            throw new Exception('Il destinatario non supporta le notifiche SMS');
        }

        $phone = $recipient->routeNotificationForSms();
<<<<<<< HEAD
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
>>>>>>> 2effe245 (.)
        if (! $phone) {
=======
        if (!$phone) {
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!$phone) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!$phone) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        if (!$phone) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
        if (! $phone) {
=======
        if (!$phone) {
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
            throw new Exception('Numero di telefono destinatario non disponibile');
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        if (! $phone) {
>>>>>>> 985c7bda (.)
=======
        if (! $phone) {
=======
        if (!$phone) {
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        if (! $phone) {
=======
        if (!$phone) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        if (!$phone) {
>>>>>>> 75179b85 (.)
            throw new Exception('Numero di telefono destinatario non disponibile');
        }

        // Usa il testo plain o una versione senza HTML
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string|null $bodyHtml */
        $bodyHtml = $compiled['body_html'];
        /** @var string $message */
        $message = $compiled['body_text'] ?? ($bodyHtml !== null ? strip_tags($bodyHtml) : '');
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);
>>>>>>> 75179b85 (.)
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);
>>>>>>> 75179b85 (.)
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);
>>>>>>> 75179b85 (.)
=======
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);
>>>>>>> 75179b85 (.)
=======
        $bodyTextRaw = is_string($compiled['body_text'] ?? null) ? $compiled['body_text'] : '';
        $bodyHtmlRaw = is_string($compiled['body_html'] ?? null) ? $compiled['body_html'] : '';
        $bodyText = $bodyTextRaw ? $bodyTextRaw : strip_tags($bodyHtmlRaw);
>>>>>>> c8b1c8bf (.)

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
<<<<<<< HEAD
            $message = mb_substr($message, 0, 317) . '...';
=======
<<<<<<< HEAD
            $message = mb_substr($message, 0, 317).'...';
=======
            $message = mb_substr($message, 0, 317) . '...';
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var string $subject */
        $subject = $compiled['subject'];
        /** @var array<string, mixed> $notificationOptions */
        $notificationOptions = $options;
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
        $subject = is_string($compiled['subject'] ?? null) ? $compiled['subject'] : (string) ($compiled['subject'] ?? '');
>>>>>>> 2effe245 (.)

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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4689a827 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
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
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> de02998b (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 6d08c01b (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 3b4c9907 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
=======
>>>>>>> 8e5817bc (.)
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
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
>>>>>>> 2effe245 (.)
>>>>>>> a12f125f4a (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 3f537838 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 3f537838 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 7a2f131f (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
=======
>>>>>>> 75179b85 (.)
        $message = $compiled['body_text'] ?? strip_tags($compiled['body_html']);

        // Limita la lunghezza del messaggio SMS
        if (mb_strlen($message) > 320) {
            $message = mb_substr($message, 0, 317) . '...';
        }

        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 82ae73be (.)
=======
        Notification::send($recipient, new GenericNotification(
            $compiled['subject'],
            $message,
            ['sms'],
            $options
        ));
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        Notification::send($recipient, new GenericNotification($compiled['subject'], $message, ['sms'], $options));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
    }
}
