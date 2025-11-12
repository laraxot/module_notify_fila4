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
            self::EMAIL => __('notify::enums.notification_type.email'),
            self::SMS => __('notify::enums.notification_type.sms'),
            self::PUSH => __('notify::enums.notification_type.push'),
        };
    }

    public function icon(): string
    {
<<<<<<< HEAD
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
            self::EMAIL => 'heroicon-o-envelope',
            self::SMS => 'heroicon-o-device-phone-mobile',
            self::PUSH => 'heroicon-o-bell',
        };
    }

    public function color(): string
    {
<<<<<<< HEAD
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
            self::EMAIL => 'success',
            self::SMS => 'warning',
            self::PUSH => 'info',
        };
    }
}
