<?php

declare(strict_types=1);

namespace Modules\Notify\Enums;

enum NotificationTypeEnum: string
{
    case EMAIL = 'email';
    case SMS = 'sms';
    case PUSH = 'push';

    public function label(): string
    {
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
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
        return match ($this) {
=======
        return match($this) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
        return match ($this) {
=======
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return match ($this) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        return match ($this) {
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        return match ($this) {
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return match ($this) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return match ($this) {
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        return match ($this) {
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
            self::EMAIL => __('notify::enums.notification_type.email'),
            self::SMS => __('notify::enums.notification_type.sms'),
            self::PUSH => __('notify::enums.notification_type.push'),
        };
    }

    public function icon(): string
    {
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
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
        return match ($this) {
=======
        return match($this) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
        return match ($this) {
=======
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return match ($this) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        return match ($this) {
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        return match ($this) {
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return match ($this) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return match ($this) {
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        return match ($this) {
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
            self::EMAIL => 'heroicon-o-envelope',
            self::SMS => 'heroicon-o-device-phone-mobile',
            self::PUSH => 'heroicon-o-bell',
        };
    }

    public function color(): string
    {
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
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
        return match ($this) {
=======
        return match($this) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
        return match ($this) {
=======
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return match ($this) {
=======
        return match($this) {
>>>>>>> a12f125f4a (.)
=======
        return match ($this) {
>>>>>>> b93ef594b4 (.)
=======
        return match($this) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
        return match ($this) {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return match ($this) {
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return match ($this) {
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return match ($this) {
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return match ($this) {
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        return match ($this) {
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        return match ($this) {
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        return match ($this) {
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return match ($this) {
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return match ($this) {
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return match ($this) {
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        return match ($this) {
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
            self::EMAIL => 'success',
            self::SMS => 'warning',
            self::PUSH => 'info',
        };
    }
}
