<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
=======
<<<<<<< HEAD
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
use Modules\Notify\Models\NotificationType;

describe('NotificationType Business Logic', function () {
    test('notification type extends eloquent model', function () {
<<<<<<< HEAD
        expect(NotificationType::class)->toBeSubclassOf(Model::class);
=======
<<<<<<< HEAD
        expect(NotificationType::class)->toBeSubclassOf(Model::class);
=======
        expect(NotificationType::class)->toBeSubclassOf(\Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('notification type has expected fillable fields', function () {
        $notificationType = new NotificationType;
        $expectedFillable = [
            'name',
            'description',
            'template',
        ];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notificationType->getFillable())->toEqual($expectedFillable);
    });

    test('notification type can store basic information', function () {
        $notificationType = new NotificationType;
        $notificationType->name = 'Email Verification';
        $notificationType->description = 'Email verification notification type';
        $notificationType->template = 'email-verification-template';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> f813254 (.)

        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(Model::class);
=======
<<<<<<< HEAD

        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(Model::class);
=======
        
        expect($notificationType)->toBeInstanceOf(NotificationType::class);
        expect($notificationType)->toBeInstanceOf(\Illuminate\Database\Eloquent\Model::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('notification type can be queried', function () {
        $query = NotificationType::query();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        expect($query)->toBeInstanceOf(Builder::class);
    });
});
<<<<<<< HEAD
=======
=======
        
        expect($query)->toBeInstanceOf(\Illuminate\Database\Eloquent\Builder::class);
    });
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
