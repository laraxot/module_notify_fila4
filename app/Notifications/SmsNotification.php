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
=======
=======
>>>>>>> 82ae73b (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
 * @package Modules\Notify\Notifications
>>>>>>> 75179b8 (.)
 */
class SmsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The SMS data.
<<<<<<< HEAD
=======
     *
     * @var SmsData
>>>>>>> 75179b8 (.)
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
     * @param  string|SmsData  $content  The content of the SMS or SmsData object
     * @param  array<string, mixed>  $config  Configuration options including provider
=======
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
>>>>>>> 75179b8 (.)
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
            $this->smsData = new SmsData;
=======
=======
=======
            
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
            $this->smsData = new SmsData();
>>>>>>> 75179b8 (.)
            $this->smsData->body = $content;
            /** @phpstan-ignore-next-line */
            $this->smsData->to = (string) $to;
            /** @phpstan-ignore-next-line */
            $this->smsData->from = (string) $from;
        }
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 82ae73b (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 75179b8 (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
=======
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
>>>>>>> b19cd40 (.)
    {
        // TODO: Implementare SmsChannel quando disponibile
        return ['sms'];
    }

    /**
     * Get the SMS representation of the notification.
<<<<<<< HEAD
=======
     *
     * @param mixed $notifiable
     * @return SmsData
>>>>>>> 75179b8 (.)
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
     */
    public function getProvider(): ?string
    {
        $provider = $this->config['provider'] ?? null;

=======
     *
     * @return string|null
     */
<<<<<<< HEAD
    public function getProvider(): null|string
=======
    public function getProvider(): ?string
>>>>>>> b19cd40 (.)
    {
        $provider = $this->config['provider'] ?? null;
>>>>>>> 75179b8 (.)
        return is_string($provider) ? $provider : null;
    }
}
