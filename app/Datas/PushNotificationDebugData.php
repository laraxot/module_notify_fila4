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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
        return new self($notifiable, $notification, $sendReport);
=======
=======
        return new self($notifiable, $notification, $sendReport);
=======
=======
        return new self($notifiable, $notification, $sendReport);
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return new self($notifiable, $notification, $sendReport);
=======
=======
>>>>>>> origin/develop
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
        return new self(
            $notifiable,
            $notification,
            $sendReport,
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
>>>>>>> a12f125f4a (.)
=======
        return new self($notifiable, $notification, $sendReport);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
                'successes_tokens' => $this->sendReport
                    ->successes()
                    ->map(static fn(SendReport $report): array => [
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
                'failure_tokens' => $this->sendReport
                    ->failures()
                    ->map(static fn(SendReport $report): array => [
                        'type' => $report->target()->type(),
                        'value' => $report->target()->value(),
                    ]),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
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
            ],
        ];
    }
}
