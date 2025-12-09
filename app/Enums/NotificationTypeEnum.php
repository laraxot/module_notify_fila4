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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
            self::EMAIL => 'success',
            self::SMS => 'warning',
            self::PUSH => 'info',
        };
    }
}
