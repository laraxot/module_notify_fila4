<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
<<<<<<< HEAD
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
=======
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Xot\Actions\Cast\SafeStringCastAction;

/**
 * Class WhatsAppNotification
 *
 * Notification class for sending WhatsApp messages through various providers.
<<<<<<< HEAD
=======
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
 * @package Modules\Notify\Notifications
>>>>>>> f813254 (.)
 */
class WhatsAppNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The WhatsApp data.
     */
    protected WhatsAppData $whatsappData;

    /**
     * Additional configuration options.
     *
     * @var array<string, mixed>
     */
    protected array $config;

    /**
     * Create a new notification instance.
     *
     * @param  string|WhatsAppData  $content  The content of the WhatsApp message or WhatsAppData object
     * @param  array<string, mixed>  $config  Configuration options including provider
     */
    public function __construct(string|WhatsAppData $content, array $config = [])
    {
        if ($content instanceof WhatsAppData) {
            $this->whatsappData = $content;
        } else {
            $to = $config['to'] ?? '';
            $from = $config['from'] ?? null;
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            /** @phpstan-ignore-next-line */
            $this->whatsappData = new WhatsAppData(
                to: SafeStringCastAction::cast($to),
                body: $content,
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                from: $from !== null ? SafeStringCastAction::cast($from) : null,
            );
        }

<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                from: $from !== null ? SafeStringCastAction::cast($from) : null
            );
        }
        
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
                from: $from !== null ? SafeStringCastAction::cast($from) : null,
            );
        }

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
     * @param  mixed  $_notifiable  L'entità da notificare
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * @param mixed $_notifiable L'entità da notificare
>>>>>>> f813254 (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
     * @param mixed $_notifiable L'entità da notificare
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        // TODO: Implementare WhatsAppChannel quando disponibile
        return ['whatsapp'];
    }

    /**
     * Get the WhatsApp representation of the notification.
     */
    public function toWhatsApp(mixed $notifiable): WhatsAppData
    {
        // If the notifiable entity has a routeNotificationForWhatsApp method,
        // we'll use that to get the destination phone number
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForWhatsApp')) {
            $routeResult = $notifiable->routeNotificationForWhatsApp($this);
<<<<<<< HEAD
            $this->whatsappData->to = app(SafeStringCastAction::class)->execute($routeResult);
=======
<<<<<<< HEAD
            $this->whatsappData->to = app(SafeStringCastAction::class)->execute($routeResult);
=======
            $this->whatsappData->to = app(\Modules\Xot\Actions\Cast\SafeStringCastAction::class)->execute($routeResult);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        }

        return $this->whatsappData;
    }

    /**
     * Get the provider configuration for this notification.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Get the provider to use for sending the WhatsApp message.
     */
<<<<<<< HEAD
    public function getProvider(): ?string
=======
<<<<<<< HEAD
    public function getProvider(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getProvider(): null|string
=======
    public function getProvider(): ?string
>>>>>>> a12f125f4a (.)
=======
    public function getProvider(): null|string
>>>>>>> b93ef594b4 (.)
=======
    public function getProvider(): ?string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
    {
        $provider = $this->config['provider'] ?? null;

        return is_string($provider) ? $provider : null;
    }
}
