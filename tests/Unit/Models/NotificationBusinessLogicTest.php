<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 75179b8 (.)
=======
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 75179b85 (.)

describe('Notification Business Logic', function () {
    test('notification extends xot base model', function () {
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
    });

    test('notification can store polymorphic notifiable relationships', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->notifiable_type = 'App\\Models\\User';
        $notification->notifiable_id = 1;

        expect($notification->notifiable_type)->toBe('App\\Models\\User');
        expect($notification->notifiable_id)->toBe(1);
    });

    test('notification has notification type', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->type = 'App\\Notifications\\OrderConfirmation';

        expect($notification->type)->toBe('App\\Notifications\\OrderConfirmation');
    });

    test('notification can store data payload', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->data = ['title' => 'Test', 'message' => 'Hello World'];

        expect($notification->data)->toBeArray();
        expect($notification->data['title'])->toBe('Test');
    });

    test('notification can track read status', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->read_at = '2023-01-01 12:00:00';

        expect($notification->read_at)->toBe('2023-01-01 12:00:00');
    });

    test('notification can track tenant and user', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->tenant_id = 1;
        $notification->user_id = 5;

        expect($notification->tenant_id)->toBe(1);
        expect($notification->user_id)->toBe(5);
    });

    test('notification can store polymorphic subject relationships', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->subject_type = 'App\\Models\\Order';
        $notification->subject_id = 123;

        expect($notification->subject_type)->toBe('App\\Models\\Order');
        expect($notification->subject_id)->toBe(123);
    });

    test('notification can track multiple channels', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->channels = ['mail', 'sms', 'database'];

        expect($notification->channels)->toBeArray();
        expect($notification->channels)->toContain('mail');
        expect($notification->channels)->toContain('sms');
    });

    test('notification can track status and sent time', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
        $notification->status = 'sent';
        $notification->sent_at = '2023-01-01 14:00:00';

        expect($notification->status)->toBe('sent');
        expect($notification->sent_at)->toBe('2023-01-01 14:00:00');
    });

    test('notification has factory for testing', function () {
        expect(method_exists(Notification::class, 'factory'))->toBeTrue();
    });
});
