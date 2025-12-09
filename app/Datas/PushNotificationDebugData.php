<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;
use Kreait\Firebase\Messaging\MulticastSendReport;
use Kreait\Firebase\Messaging\SendReport;
use Modules\Notify\Contracts\CanReceivePushNotifications;
use Modules\Notify\Contracts\MobilePushNotification;
use Spatie\LaravelData\Data;

final class PushNotificationDebugData extends Data implements Arrayable
{
    public function __construct(
        private readonly CanReceivePushNotifications $notifiable,
        private readonly MobilePushNotification $notification,
        private readonly MulticastSendReport $sendReport,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
    ) {}
=======
    ) {
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    ) {}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    ) {}
>>>>>>> 9777d1b3 (.)
=======
    ) {}
=======
=======
    ) {}
=======
>>>>>>> d09cb759 (.)
=======
    ) {}
=======
>>>>>>> d09cb759 (.)
=======
    ) {}
=======
>>>>>>> 4689a827 (.)
=======
    ) {}
=======
>>>>>>> 7325acf3 (.)
=======
    ) {}
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    ) {}
=======
    ) {
    }
>>>>>>> a12f125f4a (.)
=======
    ) {}
>>>>>>> b93ef594b4 (.)
=======
    ) {
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
    ) {}
>>>>>>> 3f537838 (.)
=======
    ) {}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    ) {}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    ) {}
>>>>>>> 3f537838 (.)
=======
    ) {}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    ) {}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    ) {}
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    ) {}
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    ) {}
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
    ) {}
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
    ) {}
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
    ) {}
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
    ) {}
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    ) {}
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)

    public static function make(
        CanReceivePushNotifications $notifiable,
        MobilePushNotification $notification,
        MulticastSendReport $sendReport,
    ): self {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
        return new self($notifiable, $notification, $sendReport);
=======
=======
        return new self($notifiable, $notification, $sendReport);
=======
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 4689a827 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 7325acf3 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new self($notifiable, $notification, $sendReport);
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
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 9cdf6146 (.)
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        return new self(
            $notifiable,
            $notification,
            $sendReport,
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 9777d1b3 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======
        return new self($notifiable, $notification, $sendReport);
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
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 3f537838 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 3f537838 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
    }

    public function toArray(): array
    {
        return [
            'notifiable' => $this->notifiable->getKey(),
            'notifiable_type' => Str::of($this->notifiable::class)->classBasename(),
            'tokens' => $this->notifiable->getMobileDeviceTokens()->toArray(),
            'notification_payload' => $this->notification->toArray(null),
            'response' => [
                'total' => $this->sendReport->count(),
                'successes' => $this->sendReport->successes()->count(),
                'failures' => $this->sendReport->failures()->count(),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
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
                'successes_tokens' => $this->sendReport
                    ->successes()
<<<<<<< HEAD
                    ->map(static fn (SendReport $report): array => [
=======
                    ->map(static fn(SendReport $report): array => [
>>>>>>> 99ff506 (.)
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'failure_tokens' => $this->sendReport
                    ->failures()
<<<<<<< HEAD
                    ->map(static fn (SendReport $report): array => [
=======
                    ->map(static fn(SendReport $report): array => [
>>>>>>> 99ff506 (.)
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
                'unknown_tokens' => $this->sendReport
<<<<<<< HEAD
                    ->filter(static fn (SendReport $report): bool => $report->messageWasSentToUnknownToken())
                    ->map(static fn (SendReport $report): array => [
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'results' => $this->sendReport->map(static fn (SendReport $report): array => [
=======
                    ->filter(static fn(SendReport $report): bool => $report->messageWasSentToUnknownToken())
                    ->map(static fn(SendReport $report): array => [
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'results' => $this->sendReport->map(static fn(SendReport $report): array => [
>>>>>>> 99ff506 (.)
                    'target' => $report->target()->value(),
                    'result' => $report->result(),
                ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
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
=======
>>>>>>> 82ae73be (.)
=======
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
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
                'successes_tokens' => $this->sendReport->successes()
                    ->map(
                        static fn (SendReport $report): array => [
                            'type' => $report->target()->type(),
                            'value' => $report->target()->value(),
                        ]
                    ),
                'failure_tokens' => $this->sendReport->failures()
                    ->map(
                        static fn (SendReport $report): array => [
                            'type' => $report->target()->type(),
                            'value' => $report->target()->value(),
                        ]
                    ),
                'unknown_tokens' => $this->sendReport
                    ->filter(static fn (SendReport $report): bool => $report->messageWasSentToUnknownToken())
                    ->map(
                        static fn (SendReport $report): array => [
                            'type' => $report->target()->type(),
                            'value' => $report->target()->value(),
                        ]
                    ),
                'results' => $this->sendReport
                    ->map(
                        static fn (SendReport $report): array => [
                            'target' => $report->target()->value(),
                            'result' => $report->result(),
                        ]
                    ),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======
                'unknown_tokens' => $this->sendReport
                    ->filter(static fn(SendReport $report): bool => $report->messageWasSentToUnknownToken())
                    ->map(static fn(SendReport $report): array => [
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'results' => $this->sendReport->map(static fn(SendReport $report): array => [
                    'target' => $report->target()->value(),
                    'result' => $report->result(),
                ]),
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
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
            ],
        ];
    }
}
