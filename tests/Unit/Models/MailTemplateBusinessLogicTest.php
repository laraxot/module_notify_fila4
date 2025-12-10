<?php

declare(strict_types=1);
use function Safe\class_uses;

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
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
=======
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
>>>>>>> f5f1cb1 (.)
use Modules\Notify\Models\MailTemplate;
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)

describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
        expect(MailTemplate::class)->toBeSubclassOf(\Spatie\MailTemplates\Models\MailTemplate::class);
    });

    test('mail template has slug trait for url-friendly names', function () {
        $traits = class_uses(MailTemplate::class);

        expect($traits)->toHaveKey(HasSlug::class);
    });

    test('mail template has translations trait', function () {
        $traits = class_uses(MailTemplate::class);

        expect($traits)->toHaveKey(HasTranslations::class);
    });

    test('mail template has soft deletes trait', function () {
        $traits = class_uses(MailTemplate::class);

        expect($traits)->toHaveKey(SoftDeletes::class);
    });

    test('mail template can store template content', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $mailTemplate->name = 'Welcome Email';
        $mailTemplate->subject = 'Welcome to our platform';
        $mailTemplate->html_template = '<h1>Welcome!</h1>';

        expect($mailTemplate->name)->toBe('Welcome Email');
        expect($mailTemplate->subject)->toBe('Welcome to our platform');
        expect($mailTemplate->html_template)->toBe('<h1>Welcome!</h1>');
    });

    test('mail template can link to mailable class', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $mailTemplate->mailable = 'App\\Mail\\WelcomeMail';

        expect($mailTemplate->mailable)->toBe('App\\Mail\\WelcomeMail');
    });

    test('mail template has version tracking', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $mailTemplate->version = 2;

        expect($mailTemplate->version)->toBe(2);
    });

    test('mail template can store optional text template', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $mailTemplate->text_template = 'Welcome! This is plain text.';

        expect($mailTemplate->text_template)->toBe('Welcome! This is plain text.');
    });

    test('mail template can be queried by mailable', function () {
        $mailable = Mockery::mock(Mailable::class);
        $query = MailTemplate::forMailable($mailable);

        expect($query)->toBeInstanceOf(Builder::class);
    });

    test('mail template has creator and updater tracking', function () {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        $mailTemplate->created_by = 'user-1';
        $mailTemplate->updated_by = 'user-2';

        expect($mailTemplate->created_by)->toBe('user-1');
        expect($mailTemplate->updated_by)->toBe('user-2');
    });
});
