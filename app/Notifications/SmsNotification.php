<?php

declare(strict_types=1);

namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Modules\Notify\Datas\SmsData;

/**
 * Class SmsNotification
 *
 * Notification class for sending SMS messages through various providers.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
 *
 * @package Modules\Notify\Notifications
>>>>>>> 75179b8 (.)
=======
 *
 * @package Modules\Notify\Notifications
>>>>>>> 7148d73 (.)
 */
class SmsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The SMS data.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @var SmsData
>>>>>>> 75179b8 (.)
=======
     *
     * @var SmsData
>>>>>>> 7148d73 (.)
     */
    protected SmsData $smsData;

    /**
     * Additional configuration options.
     *
     * @var array<string, mixed>
     */
    protected array $config;

    /**
     * Create a new notification instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|SmsData  $content  The content of the SMS or SmsData object
     * @param  array<string, mixed>  $config  Configuration options including provider
=======
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
>>>>>>> 75179b8 (.)
=======
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
>>>>>>> 7148d73 (.)
     */
    public function __construct(string|SmsData $content, array $config = [])
    {
        if ($content instanceof SmsData) {
            $this->smsData = $content;
        } else {
            $to = $config['to'] ?? '';
            $from = $config['from'] ?? '';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $this->smsData = new SmsData;
=======
=======
=======
            
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
            $this->smsData = new SmsData();
>>>>>>> 75179b8 (.)
=======
            $this->smsData = new SmsData();
>>>>>>> 7148d73 (.)
            $this->smsData->body = $content;
            /** @phpstan-ignore-next-line */
            $this->smsData->to = (string) $to;
            /** @phpstan-ignore-next-line */
            $this->smsData->from = (string) $from;
        }

        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 75179b8 (.)
=======
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 7148d73 (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
    {
        // TODO: Implementare SmsChannel quando disponibile
        return ['sms'];
    }

    /**
     * Get the SMS representation of the notification.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @param mixed $notifiable
     * @return SmsData
>>>>>>> 75179b8 (.)
=======
     *
     * @param mixed $notifiable
     * @return SmsData
>>>>>>> 7148d73 (.)
     */
    public function toSms(mixed $notifiable): SmsData
    {
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForSms')) {
            $routeResult = $notifiable->routeNotificationForSms($this);
            $this->smsData->to = (string) ($routeResult ?? '');
        }

        return $this->smsData;
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
     * Get the provider to use for sending the SMS.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function getProvider(): ?string
    {
        $provider = $this->config['provider'] ?? null;

=======
=======
>>>>>>> 7148d73 (.)
     *
     * @return string|null
     */
    public function getProvider(): null|string
    {
        $provider = $this->config['provider'] ?? null;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
        return is_string($provider) ? $provider : null;
    }
}
