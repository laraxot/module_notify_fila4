<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Messaging\Message;

/**
 * phpstan-require-extends Model
 * Interface Modules\Notify\Contracts\MobilePushNotification requires
 * implementing class to extend Illuminate\Database\Eloquent\Model,
 * but Modules\Notify\Notifications\FirebaseAndroidNotification does not.
 */
interface MobilePushNotification
{
    /**
     * Retrieves the payload to be sent to FCM service,
     * properly encapsulated as Message instance.
     */
    public function toCloudMessage(): Message;

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
}
