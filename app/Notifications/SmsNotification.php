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
>>>>>>> de02998b (.)
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
 *
=======
=======
 *
=======
>>>>>>> d09cb759 (.)
=======
 *
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
 *
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
 * @package Modules\Notify\Notifications
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
 *
 * @package Modules\Notify\Notifications
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
 */
class SmsNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The SMS data.
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * @var SmsData
=======
<<<<<<< HEAD
=======
     *
     * @var SmsData
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
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
<<<<<<< HEAD
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
=======
<<<<<<< HEAD
     * @param  string|SmsData  $content  The content of the SMS or SmsData object
     * @param  array<string, mixed>  $config  Configuration options including provider
=======
     * @param string|SmsData $content The content of the SMS or SmsData object
     * @param array<string, mixed> $config Configuration options including provider
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     */
    public function __construct(string|SmsData $content, array $config = [])
    {
        if ($content instanceof SmsData) {
            $this->smsData = $content;
        } else {
            $recipient = $config['recipient'] ?? ($config['to'] ?? '');
            $from = $config['from'] ?? '';
<<<<<<< HEAD

            $this->smsData = SmsData::from([
                'body' => $content,
                'recipient' => (string) $recipient,
                'from' => (string) $from,
            ]);
        }

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
>>>>>>> de02998b (.)

<<<<<<< HEAD
=======
            
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

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
            $this->smsData = new SmsData();
=======
<<<<<<< HEAD
            $this->smsData = new SmsData;
=======
            $this->smsData = new SmsData();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            $this->smsData->body = $content;
            /** @phpstan-ignore-next-line */
            $this->smsData->to = (string) $to;
            /** @phpstan-ignore-next-line */
            $this->smsData->from = (string) $from;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
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

=======
=======

=======
>>>>>>> d09cb759 (.)
=======

=======
>>>>>>> 4689a827 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======

>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $this->config = $config;
    }

    /**
     * Get the notification's delivery channels.
     *
<<<<<<< HEAD
     * @param  mixed  $notifiable  The entity to be notified (l'entità da notificare)
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
=======
     * @param  mixed  $_notifiable  The entity to be notified (l'entità da notificare)
=======
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
     * @param mixed $notifiable
     * @return array<int, string>
     */
    public function via(mixed $notifiable): array
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
     * @param mixed $_notifiable The entity to be notified (l'entità da notificare)
     * @return array<int, string>
     */
    public function via(mixed $_notifiable): array
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    {
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationFor')) {
            return ['sms'];
        }

        return ['sms'];
    }

    /**
     * Get the SMS representation of the notification.
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * @param mixed $notifiable
     * @return SmsData
=======
<<<<<<< HEAD
=======
     *
     * @param mixed $notifiable
     * @return SmsData
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     */
    public function toSms(mixed $notifiable): SmsData
    {
        // If the notifiable entity has a routeNotificationForSms method,
        // we'll use that to get the destination phone number
        if (is_object($notifiable) && method_exists($notifiable, 'routeNotificationForSms')) {
            $routeResult = $notifiable->routeNotificationForSms($this);
            $this->smsData->recipient = (string) ($routeResult ?? '');
        }

        return $this->smsData;
    }

    /**
     * Get the provider configuration for this notification.
     *
     * @return array<int, string>
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Get the provider to use for sending the SMS.
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * @return string|null
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
     */
<<<<<<< HEAD
    public function getProvider(): ?string
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
>>>>>>> de02998b (.)
    public function getProvider(): null|string
=======
    public function getProvider(): ?string
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function getProvider(): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function getProvider(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getProvider(): null|string
>>>>>>> 9777d1b3 (.)
=======
    public function getProvider(): null|string
=======
=======
    public function getProvider(): null|string
=======
>>>>>>> d09cb759 (.)
=======
    public function getProvider(): null|string
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function getProvider(): null|string
>>>>>>> 3f537838 (.)
=======
    public function getProvider(): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function getProvider(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function getProvider(): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function getProvider(): null|string
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
    public function getProvider(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function getProvider(): null|string
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    {
        $provider = $this->config['provider'] ?? null;
<<<<<<< HEAD

=======
<<<<<<< HEAD
=======

=======
     *
     * @return string|null
     */
    public function getProvider(): null|string
    {
        $provider = $this->config['provider'] ?? null;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
        return is_string($provider) ? $provider : null;
    }
}
