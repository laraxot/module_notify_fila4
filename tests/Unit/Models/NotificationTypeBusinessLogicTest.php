<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 75179b85 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 4689a827 (.)
=======
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)
use Modules\Notify\Models\NotificationType;

describe('NotificationType Business Logic', function () {
    test('notification type extends eloquent model', function () {
        expect(NotificationType::class)->toBeSubclassOf(Model::class);
    });

    test('notification type has expected fillable fields', function () {
<<<<<<< HEAD
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
=======
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
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
        $notificationType = new NotificationType();
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
=======
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
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
        $notificationType = new NotificationType();
        $notificationType = new NotificationType();
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
        $notificationType = new NotificationType;
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
        $notificationType = new NotificationType;
        $notificationType = new NotificationType();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
        $notificationType = new NotificationType;
>>>>>>> 985c7bda (.)
=======
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
        $notificationType = new NotificationType;
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $notificationType = new NotificationType();
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> c5a0a4b2 (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 5fae858e (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> a4383006 (.)

        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(Model::class);
    });

    test('notification type can be queried', function () {
        $query = NotificationType::query();

        expect($query)->toBeInstanceOf(Builder::class);
    });
});
