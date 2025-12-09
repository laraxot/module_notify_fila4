<?php

declare(strict_types=1);

use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;

describe('Notification Business Logic', function (): void {
    test('notification extends xot base model', function (): void {
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
    });

    test('notification can store polymorphic notifiable relationships', function (): void {
        $notification = new Notification;
        $notification->notifiable_type = 'App\\Models\\User';
        $notification->notifiable_id = 1;

        expect($notification->notifiable_type)->toBe('App\\Models\\User');
        expect($notification->notifiable_id)->toBe(1);
    });

    test('notification has notification type', function (): void {
        $notification = new Notification;
        $notification->type = 'App\\Notifications\\OrderConfirmation';

        expect($notification->type)->toBe('App\\Notifications\\OrderConfirmation');
    });

    test('notification can store data payload', function (): void {
        $notification = new Notification;
        $notification->data = ['title' => 'Test', 'message' => 'Hello World'];

        expect($notification->data)->toBeArray();
        expect($notification->data['title'])->toBe('Test');
    });

    test('notification can track read status', function (): void {
        $notification = new Notification;
        $notification->read_at = '2023-01-01 12:00:00';

        expect($notification->read_at)->toBe('2023-01-01 12:00:00');
    });

    test('notification can track tenant and user', function (): void {
        $notification = new Notification;
        $notification->tenant_id = 1;
        $notification->user_id = 5;

        expect($notification->tenant_id)->toBe(1);
        expect($notification->user_id)->toBe(5);
    });

    test('notification can store polymorphic subject relationships', function (): void {
        $notification = new Notification;
        $notification->subject_type = 'App\\Models\\Order';
        $notification->subject_id = 123;

        expect($notification->subject_type)->toBe('App\\Models\\Order');
        expect($notification->subject_id)->toBe(123);
    });

    test('notification can track multiple channels', function (): void {
        $notification = new Notification;
        $notification->channels = ['mail', 'sms', 'database'];

        expect($notification->channels)->toBeArray();
        expect($notification->channels)->toContain('mail');
        expect($notification->channels)->toContain('sms');
    });

    test('notification can track status and sent time', function (): void {
        $notification = new Notification;
        $notification->status = 'sent';
        $notification->sent_at = '2023-01-01 14:00:00';

        expect($notification->status)->toBe('sent');
        expect($notification->sent_at)->toBe('2023-01-01 14:00:00');
    });

    test('notification has factory for testing', function (): void {
        expect(method_exists(Notification::class, 'factory'))->toBeTrue();
    });
});
