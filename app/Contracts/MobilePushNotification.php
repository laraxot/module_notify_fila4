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
>>>>>>> 75179b85 (.)
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
    public function toArray(?object $notifiable): array;
>>>>>>> 98d837b9 (.)
=======
    public function toArray(?object $notifiable): array;
>>>>>>> f2e64178 (.)
=======
    public function toArray(?object $notifiable): array;
>>>>>>> 888799d0 (.)
=======
    public function toArray(?object $notifiable): array;
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
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
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b3 (.)
=======
    public function toArray(null|object $notifiable): array;
=======
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> 4689a827 (.)
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> 4689a827 (.)
=======
    public function toArray(?object $notifiable): array;
=======
<<<<<<< HEAD
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 3f537838 (.)
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
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 3f537838 (.)
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
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 3f39ac8b (.)
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    public function toArray(?object $notifiable): array;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    public function toArray(null|object $notifiable): array;
=======
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> d09cb759 (.)
=======
=======
    public function toArray(null|object $notifiable): array;
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public function toArray(?object $notifiable): array;
>>>>>>> 985c7bda (.)
=======
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
    public function toArray(null|object $notifiable): array;
=======
    public function toArray(?object $notifiable): array;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
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
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 2941b0bd (.)
=======
    public function toArray(?object $notifiable): array;
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
    public function toArray(null|object $notifiable): array;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
}
