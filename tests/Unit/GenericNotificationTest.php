<?php

declare(strict_types=1);

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Notifications\GenericNotification;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
namespace Modules\Notify\Tests\Unit;

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Notifications\GenericNotification;
=======
use Modules\Notify\Notifications\GenericNotification;
use Illuminate\Database\Eloquent\Model;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

// Basic unit tests focusing on business logic of recipient name resolution

describe('GenericNotification getRecipientName', function (): void {
    it('prefers getFullName() when available', function (): void {
        $notification = new GenericNotification('Title', 'Message');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $notifiable = new class
        {
=======
        $notifiable = new class {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
        $notifiable = new class {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        $notifiable = new class {
=======
        $notifiable = new class
        {
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $notifiable = new class {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $notifiable = new class {
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        $notifiable = new class {
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
            public function getFullName(): string
            {
                return 'John Doe';
            }
<<<<<<< HEAD
=======
=======
        $notifiable = new class {
            public function getFullName(): string { return 'John Doe'; }
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
        $model = new class extends Model
        {
=======
        $model = new class extends Model {
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
        $model = new class extends Model {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
        $model = new class extends Model {
=======
        $model = new class extends Model
        {
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $model = new class extends Model {
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $model = new class extends Model {
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
        $model = new class extends Model {
>>>>>>> b93ef594b4 (.)
=======
        $model = new class extends Model {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
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
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
            protected $attributes = [];
        };
=======
=======
        $model1 = new class extends Model
        {
=======
        $model1 = new class extends Model {
>>>>>>> b93ef594b4 (.)
            protected $attributes = ['first_name' => 'Alice'];
        };
        // name present
        $model2 = new class extends Model {
            protected $attributes = ['name' => 'Bob'];
        };
        // none present
<<<<<<< HEAD
        $model3 = new class extends Model
        {
>>>>>>> a12f125f4a (.)
=======
        $model3 = new class extends Model {
>>>>>>> b93ef594b4 (.)
            protected $attributes = [];
        };
=======
        $model1 = new class extends Model { protected $attributes = ['first_name' => 'Alice']; };
        // name present
        $model2 = new class extends Model { protected $attributes = ['name' => 'Bob']; };
        // none present
        $model3 = new class extends Model { protected $attributes = []; };
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

        $ref = new ReflectionClass(GenericNotification::class);
        $method = $ref->getMethod('getRecipientName');
        $method->setAccessible(true);

        expect($method->invoke($notification, $model1))->toBe('Alice');
        expect($method->invoke($notification, $model2))->toBe('Bob');
        expect($method->invoke($notification, $model3))->toBe('Utente');
    });
});
