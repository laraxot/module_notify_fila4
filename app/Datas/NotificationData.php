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
    public ?string $from_email = null;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public null|string $from_email = null;
>>>>>>> f813254 (.)

    public string $to;

    public ?string $subject = null;

<<<<<<< HEAD
    public ?string $body_html = null;
=======
    public null|string $body_html = null;
<<<<<<< HEAD
=======
=======
    public ?string $from_email = null;
=======
    public null|string $from_email = null;
>>>>>>> b93ef594b4 (.)

    public string $to;

    public null|string $subject = null;

<<<<<<< HEAD
    public ?string $body_html = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $body_html = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from_email = null;

    public string $to;

    public ?string $subject = null;

    public ?string $body_html = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)

    public string $body;

    public array $channels = [];

    /**
     * @var DataCollection<AttachmentData>
     */
<<<<<<< HEAD
    public ?DataCollection $attachments = null;
=======
<<<<<<< HEAD
    public null|DataCollection $attachments = null;
>>>>>>> f813254 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|DataCollection $attachments = null;

=======
    public ?DataCollection $attachments = null;
>>>>>>> a12f125f4a (.)
=======
    public null|DataCollection $attachments = null;

>>>>>>> b93ef594b4 (.)
=======
    public ?DataCollection $attachments = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        return SmsData::from([
            'from' => $this->from,
            'to' => $this->to,
            'body' => $this->body,
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
        return SmsData::from(
            [
                'from' => $this->from,
                'to' => $this->to,
                'body' => $this->body,
            ]
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
