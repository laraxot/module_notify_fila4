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
<<<<<<< HEAD
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> e11621f (.)
=======
    public function toArray(null|object $notifiable): array;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> a12f125f4a (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> b93ef594b4 (.)
=======
    public function toArray(?object $notifiable): array;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
}
