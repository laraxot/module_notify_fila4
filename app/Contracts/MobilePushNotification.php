<?php

declare(strict_types=1);

namespace Modules\Notify\Contracts;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 7148d73 (.)
}
