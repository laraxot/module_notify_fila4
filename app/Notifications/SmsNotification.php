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
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
=======
 *
>>>>>>> 4e2ebfb (.)
 * @package Modules\Notify\Notifications
>>>>>>> 99ff506 (.)
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
>>>>>>> 99ff506 (.)
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
>>>>>>> 99ff506 (.)
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
>>>>>>> 95531e1 (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
            $this->smsData = new SmsData();
>>>>>>> 99ff506 (.)
            $this->smsData->body = $content;
            /** @phpstan-ignore-next-line */
            $this->smsData->to = (string) $to;
            /** @phpstan-ignore-next-line */
            $this->smsData->from = (string) $from;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 99ff506 (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
<<<<<<< HEAD
=======
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
    public function getProvider(): null|string
=======
    public function getProvider(): ?string
>>>>>>> b19cd40 (.)
=======
    public function getProvider(): null|string
>>>>>>> 4e2ebfb (.)
    {
        $provider = $this->config['provider'] ?? null;
>>>>>>> 99ff506 (.)
        return is_string($provider) ? $provider : null;
    }
}
