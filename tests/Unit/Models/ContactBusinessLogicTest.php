<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Notify\Models\BaseModel;
=======
<<<<<<< HEAD
use Modules\Notify\Models\BaseModel;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Models\Contact;

describe('Contact Business Logic', function () {
    test('contact extends base model', function () {
<<<<<<< HEAD
        expect(Contact::class)->toBeSubclassOf(BaseModel::class);
=======
<<<<<<< HEAD
        expect(Contact::class)->toBeSubclassOf(BaseModel::class);
=======
        expect(Contact::class)->toBeSubclassOf(\Modules\Notify\Models\BaseModel::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('contact can store polymorphic model relationships', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->model_type = 'App\\Models\\User';
        $contact->model_id = '1';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->model_type)->toBe('App\\Models\\User');
        expect($contact->model_id)->toBe('1');
    });

    test('contact can store contact information with type', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->contact_type = 'email';
        $contact->value = 'test@example.com';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->contact_type)->toBe('email');
        expect($contact->value)->toBe('test@example.com');
    });

    test('contact can track sms communication', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->sms_count = 5;
        $contact->sms_status_code = '200';
        $contact->sms_status_txt = 'Success';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->sms_count)->toBe(5);
        expect($contact->sms_status_code)->toBe('200');
        expect($contact->sms_status_txt)->toBe('Success');
    });

    test('contact can track email communication', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->mail_count = 3;
        $contact->mail_sent_at = '2023-01-01 10:00:00';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->mail_count)->toBe(3);
        expect($contact->mail_sent_at)->toBe('2023-01-01 10:00:00');
    });

    test('contact can store personal information', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->first_name = 'Mario';
        $contact->last_name = 'Rossi';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->first_name)->toBe('Mario');
        expect($contact->last_name)->toBe('Rossi');
    });

    test('contact has verification tracking', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->token = 'abc123';
        $contact->verified_at = '2023-01-01 12:00:00';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->token)->toBe('abc123');
        expect($contact->verified_at)->toBe('2023-01-01 12:00:00');
    });

    test('contact has flexible attribute storage', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->attribute_1 = 'value1';
        $contact->attribute_2 = 'value2';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->attribute_1)->toBe('value1');
        expect($contact->attribute_2)->toBe('value2');
    });

    test('contact can track duplicate count', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->duplicate_count = 2;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($contact->duplicate_count)->toBe(2);
    });

    test('contact has order column for sorting', function () {
<<<<<<< HEAD
        $contact = new Contact;
        $contact = new Contact();
        $contact = new Contact;
        $contact = new Contact();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
=======
        $contact = new Contact;
=======
        $contact = new Contact();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
>>>>>>> 7624f916 (.)
=======
=======
        $contact = new Contact();
>>>>>>> 75179b85 (.)
>>>>>>> c5a0a4b2 (.)
        $contact->order_column = 1;
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        expect($contact->order_column)->toBe(1);
    });
});
<<<<<<< HEAD
=======
=======
        
        expect($contact->order_column)->toBe(1);
    });
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
