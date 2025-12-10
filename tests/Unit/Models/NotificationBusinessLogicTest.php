<<<<<<< HEAD
<?php

declare(strict_types=1);

use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
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
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Modules\Xot\Models\BaseModel;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
use Modules\Xot\Models\BaseModel;
>>>>>>> 3f537838 (.)
=======
use Modules\Xot\Models\BaseModel;
>>>>>>> 3f537838 (.)
=======
use Modules\Xot\Models\BaseModel;
>>>>>>> 2941b0bd (.)
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
=======
>>>>>>> d09cb759 (.)
use Modules\Xot\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Models\Notification;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> d09cb759 (.)
use Modules\Xot\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Models\Notification;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 4689a827 (.)
use Modules\Xot\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Xot\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Models\Notification;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
=======
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 75179b85 (.)
=======
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop

describe('Notification Business Logic', function () {
    test('notification extends xot base model', function () {
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
    });

    test('notification can store polymorphic notifiable relationships', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->notifiable_type = 'App\\Models\\User';
        $notification->notifiable_id = 1;

        expect($notification->notifiable_type)->toBe('App\\Models\\User');
        expect($notification->notifiable_id)->toBe(1);
    });

    test('notification has notification type', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->type = 'App\\Notifications\\OrderConfirmation';

        expect($notification->type)->toBe('App\\Notifications\\OrderConfirmation');
    });

    test('notification can store data payload', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->data = ['title' => 'Test', 'message' => 'Hello World'];

        expect($notification->data)->toBeArray();
        expect($notification->data['title'])->toBe('Test');
    });

    test('notification can track read status', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->read_at = '2023-01-01 12:00:00';

        expect($notification->read_at)->toBe('2023-01-01 12:00:00');
    });

    test('notification can track tenant and user', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->tenant_id = 1;
        $notification->user_id = 5;

        expect($notification->tenant_id)->toBe(1);
        expect($notification->user_id)->toBe(5);
    });

    test('notification can store polymorphic subject relationships', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->subject_type = 'App\\Models\\Order';
        $notification->subject_id = 123;

        expect($notification->subject_type)->toBe('App\\Models\\Order');
        expect($notification->subject_id)->toBe(123);
    });

    test('notification can track multiple channels', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->channels = ['mail', 'sms', 'database'];

        expect($notification->channels)->toBeArray();
        expect($notification->channels)->toContain('mail');
        expect($notification->channels)->toContain('sms');
    });

    test('notification can track status and sent time', function () {
<<<<<<< HEAD
        $notification = new Notification();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        $notification->status = 'sent';
        $notification->sent_at = '2023-01-01 14:00:00';

        expect($notification->status)->toBe('sent');
        expect($notification->sent_at)->toBe('2023-01-01 14:00:00');
    });

    test('notification has factory for testing', function () {
        expect(method_exists(Notification::class, 'factory'))->toBeTrue();
    });
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
