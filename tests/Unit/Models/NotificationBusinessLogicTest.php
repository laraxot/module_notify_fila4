<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
use ReflectionClass;

describe('Notification Business Logic', function () {
    test('notification extends xot base model', function () {
<<<<<<< HEAD
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
=======
<<<<<<< HEAD
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
=======
        expect(Notification::class)->toBeSubclassOf(\Modules\Xot\Models\BaseModel::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('notification can store polymorphic notifiable relationships', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->notifiable_type = 'App\\Models\\User';
        $notification->notifiable_id = 1;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->notifiable_type)->toBe('App\\Models\\User');
        expect($notification->notifiable_id)->toBe(1);
    });

    test('notification has notification type', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->type = 'App\\Notifications\\OrderConfirmation';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->type)->toBe('App\\Notifications\\OrderConfirmation');
    });

    test('notification can store data payload', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->data = ['title' => 'Test', 'message' => 'Hello World'];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->data)->toBeArray();
        expect($notification->data['title'])->toBe('Test');
    });

    test('notification can track read status', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->read_at = '2023-01-01 12:00:00';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->read_at)->toBe('2023-01-01 12:00:00');
    });

    test('notification can track tenant and user', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->tenant_id = 1;
        $notification->user_id = 5;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->tenant_id)->toBe(1);
        expect($notification->user_id)->toBe(5);
    });

    test('notification can store polymorphic subject relationships', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->subject_type = 'App\\Models\\Order';
        $notification->subject_id = 123;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->subject_type)->toBe('App\\Models\\Order');
        expect($notification->subject_id)->toBe(123);
    });

    test('notification can track multiple channels', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->channels = ['mail', 'sms', 'database'];
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->channels)->toBeArray();
        expect($notification->channels)->toContain('mail');
        expect($notification->channels)->toContain('sms');
    });

    test('notification can track status and sent time', function () {
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
        $notification->status = 'sent';
        $notification->sent_at = '2023-01-01 14:00:00';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->status)->toBe('sent');
        expect($notification->sent_at)->toBe('2023-01-01 14:00:00');
    });

    test('notification has factory for testing', function () {
        expect(method_exists(Notification::class, 'factory'))->toBeTrue();
    });
<<<<<<< HEAD
});
=======
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
