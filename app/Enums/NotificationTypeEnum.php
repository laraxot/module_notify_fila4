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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return match ($this) {
=======
        return match($this) {
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return match ($this) {
=======
        return match($this) {
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return match ($this) {
=======
        return match($this) {
>>>>>>> b19cd40 (.)
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
            self::EMAIL => 'success',
            self::SMS => 'warning',
            self::PUSH => 'info',
        };
    }
}
