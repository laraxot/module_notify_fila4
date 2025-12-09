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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
=======
>>>>>>> 3ee54c5d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return match ($this) {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        return match ($this) {
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        return match ($this) {
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
        return match ($this) {
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
        return match ($this) {
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
        return match ($this) {
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
        return match ($this) {
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
        return match ($this) {
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        return match ($this) {
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return match ($this) {
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
=======
>>>>>>> 3ee54c5d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return match ($this) {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        return match ($this) {
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        return match ($this) {
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
        return match ($this) {
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
        return match ($this) {
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
        return match ($this) {
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
        return match ($this) {
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
        return match ($this) {
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        return match ($this) {
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return match ($this) {
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
=======
>>>>>>> 3ee54c5d (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        return match ($this) {
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        return match ($this) {
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return match ($this) {
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        return match ($this) {
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        return match ($this) {
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        return match ($this) {
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        return match ($this) {
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
        return match ($this) {
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        return match ($this) {
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
        return match ($this) {
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        return match ($this) {
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
        return match ($this) {
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        return match ($this) {
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        return match ($this) {
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
        return match ($this) {
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        return match ($this) {
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
        return match ($this) {
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        return match ($this) {
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return match ($this) {
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return match ($this) {
>>>>>>> 58816034 (.)
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
            self::EMAIL => 'success',
            self::SMS => 'warning',
            self::PUSH => 'info',
        };
    }
}
