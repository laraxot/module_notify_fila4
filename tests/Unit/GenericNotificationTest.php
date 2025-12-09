<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
namespace Modules\Notify\Tests\Unit;

>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Notifications\GenericNotification;

// Basic unit tests focusing on business logic of recipient name resolution

describe('GenericNotification getRecipientName', function (): void {
    it('prefers getFullName() when available', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        $notifiable = new class {
=======
        $notifiable = new class
        {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        $notifiable = new class {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            public function getFullName(): string
            {
                return 'John Doe';
            }
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $notifiable))->toBe('John Doe');
    });

    it('uses Eloquent model full_name when present and non-empty', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
        $model = new class extends Model {
=======
        $model = new class extends Model
        {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
        $model = new class extends Model {
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            protected $attributes = [
                'full_name' => 'Jane Roe',
            ];
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model))->toBe('Jane Roe');
    });

    it('falls back to first_name then name then default', function (): void {
        $notification = new GenericNotification('Title', 'Message');

        // first_name present
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
        $model1 = new class extends Model {
            protected $attributes = ['first_name' => 'Alice'];
        };
        // name present
        $model2 = new class extends Model {
            protected $attributes = ['name' => 'Bob'];
        };
        // none present
        $model3 = new class extends Model {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
        $model1 = new class extends Model
        {
            protected $attributes = ['first_name' => 'Alice'];
        };
        // name present
        $model2 = new class extends Model
        {
            protected $attributes = ['name' => 'Bob'];
        };
        // none present
        $model3 = new class extends Model
        {
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
            protected $attributes = [];
        };

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model1))->toBe('Alice');
        expect($method->invoke($notification, $model2))->toBe('Bob');
        expect($method->invoke($notification, $model3))->toBe('Utente');
    });
});
