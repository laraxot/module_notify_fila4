<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 99ff506 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f5f1cb1 (.)
use Modules\Notify\Models\NotificationType;

describe('NotificationType Business Logic', function () {
    test('notification type extends eloquent model', function () {
        expect(NotificationType::class)->toBeSubclassOf(Model::class);
    });

    test('notification type has expected fillable fields', function () {
<<<<<<< HEAD
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 99ff506 (.)
        $expectedFillable = [
            'name',
            'description',
            'template',
        ];

        expect($notificationType->getFillable())->toEqual($expectedFillable);
    });

    test('notification type can store basic information', function () {
<<<<<<< HEAD
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 99ff506 (.)
        $notificationType->name = 'Email Verification';
        $notificationType->description = 'Email verification notification type';
        $notificationType->template = 'email-verification-template';

        expect($notificationType->name)->toBe('Email Verification');
        expect($notificationType->description)->toBe('Email verification notification type');
        expect($notificationType->template)->toBe('email-verification-template');
    });

    test('notification type model can be instantiated without errors', function () {
<<<<<<< HEAD
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)

        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(Model::class);
    });

    test('notification type can be queried', function () {
        $query = NotificationType::query();

        expect($query)->toBeInstanceOf(Builder::class);
    });
});
