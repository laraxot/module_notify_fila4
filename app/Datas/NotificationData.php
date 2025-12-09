<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Illuminate\Notifications\Notification;
use Modules\Notify\Models\Notification as NotificationModel;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class NotificationData extends Data
{
    // public string $mobile_phone;
    // public string $token;
    // public int $q;
    public string $from;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    public null|string $from_email = null;

    public string $to;

    public null|string $subject = null;

    public null|string $body_html = null;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
    public ?string $from_email = null;

    public string $to;

    public ?string $subject = null;

    public ?string $body_html = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

    public string $body;

    public array $channels = [];

    /**
     * @var DataCollection<AttachmentData>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
    public null|DataCollection $attachments = null;

=======
    public ?DataCollection $attachments = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
    public null|DataCollection $attachments = null;

>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    // public ?array $attachment_paths = [];

    /**
     * Get the notification routing information for the given driver.
     */
    public function routeNotificationFor(string $driver, Notification $notification): string|NotificationModel
    {
        // dddx(['driver'=>$driver,'a'=>$a]);
        // return $this->routes[$driver] ?? null;
        if ($driver === 'database') {
            return app(NotificationModel::class);
        }

        return $this->to;
    }

    public function getSmsData(): SmsData
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        return SmsData::from(
            [
                'from' => $this->from,
                'to' => $this->to,
                'body' => $this->body,
            ]
        );
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
    }
}
