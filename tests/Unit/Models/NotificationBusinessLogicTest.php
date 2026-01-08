<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
>>>>>>> fb8e02b6b (.)
=======
use Modules\Notify\Models\Notification;
use Modules\Xot\Models\BaseModel;
=======
use Modules\Xot\Models\BaseModel;
use Modules\Notify\Models\Notification;
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)

<<<<<<< HEAD
describe('Notification Business Logic', function () {
    test('notification extends xot base model', function () {
<<<<<<< HEAD
=======
describe('Notification Business Logic', function (): void {
    test('notification extends xot base model', function (): void {
>>>>>>> 6b649e02c (.)
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
=======
<<<<<<< HEAD
        expect(Notification::class)->toBeSubclassOf(BaseModel::class);
=======
        expect(Notification::class)->toBeSubclassOf(\Modules\Xot\Models\BaseModel::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

<<<<<<< HEAD
    test('notification can store polymorphic notifiable relationships', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can store polymorphic notifiable relationships', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

<<<<<<< HEAD
    test('notification has notification type', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification has notification type', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
        $notification->type = 'App\\Notifications\\OrderConfirmation';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->type)->toBe('App\\Notifications\\OrderConfirmation');
    });

<<<<<<< HEAD
    test('notification can store data payload', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can store data payload', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

<<<<<<< HEAD
    test('notification can track read status', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can track read status', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
        $notification->read_at = '2023-01-01 12:00:00';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($notification->read_at)->toBe('2023-01-01 12:00:00');
    });

<<<<<<< HEAD
    test('notification can track tenant and user', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can track tenant and user', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

<<<<<<< HEAD
    test('notification can store polymorphic subject relationships', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can store polymorphic subject relationships', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

<<<<<<< HEAD
    test('notification can track multiple channels', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can track multiple channels', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

<<<<<<< HEAD
    test('notification can track status and sent time', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $reflection = new ReflectionClass(Notification::class);
        $notification = $reflection->newInstanceWithoutConstructor();
=======
=======
    test('notification can track status and sent time', function (): void {
>>>>>>> 6b649e02c (.)
        $notification = new Notification;
>>>>>>> fb8e02b6b (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> cf20697a6 (.)
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

    test('notification has factory for testing', function (): void {
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
