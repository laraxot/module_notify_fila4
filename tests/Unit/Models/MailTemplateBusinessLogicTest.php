<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Notify\Models\MailTemplate;
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
=======
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)

describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
        expect(MailTemplate::class)->toBeSubclassOf(\Spatie\MailTemplates\Models\MailTemplate::class);
    });

    test('mail template has slug trait for url-friendly names', function () {
        $traits = class_uses(MailTemplate::class);
<<<<<<< HEAD

        expect($traits)->toHaveKey(HasSlug::class);
=======
<<<<<<< HEAD

        expect($traits)->toHaveKey(HasSlug::class);
=======
        
        expect($traits)->toHaveKey(\Spatie\Sluggable\HasSlug::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('mail template has translations trait', function () {
        $traits = class_uses(MailTemplate::class);
<<<<<<< HEAD

        expect($traits)->toHaveKey(HasTranslations::class);
=======
<<<<<<< HEAD

        expect($traits)->toHaveKey(HasTranslations::class);
=======
        
        expect($traits)->toHaveKey(\Spatie\Translatable\HasTranslations::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('mail template has soft deletes trait', function () {
        $traits = class_uses(MailTemplate::class);
<<<<<<< HEAD

        expect($traits)->toHaveKey(SoftDeletes::class);
=======
<<<<<<< HEAD

        expect($traits)->toHaveKey(SoftDeletes::class);
=======
        
        expect($traits)->toHaveKey(\Illuminate\Database\Eloquent\SoftDeletes::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('mail template can store template content', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
        $mailTemplate->name = 'Welcome Email';
        $mailTemplate->subject = 'Welcome to our platform';
        $mailTemplate->html_template = '<h1>Welcome!</h1>';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($mailTemplate->name)->toBe('Welcome Email');
        expect($mailTemplate->subject)->toBe('Welcome to our platform');
        expect($mailTemplate->html_template)->toBe('<h1>Welcome!</h1>');
    });

    test('mail template can link to mailable class', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
        $mailTemplate->mailable = 'App\\Mail\\WelcomeMail';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($mailTemplate->mailable)->toBe('App\\Mail\\WelcomeMail');
    });

    test('mail template has version tracking', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
        $mailTemplate->version = 2;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($mailTemplate->version)->toBe(2);
    });

    test('mail template can store optional text template', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
        $mailTemplate->text_template = 'Welcome! This is plain text.';
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        expect($mailTemplate->text_template)->toBe('Welcome! This is plain text.');
    });

    test('mail template can be queried by mailable', function () {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
        $mailable = Mockery::mock(Mailable::class);
        $query = MailTemplate::forMailable($mailable);

        expect($query)->toBeInstanceOf(Builder::class);
<<<<<<< HEAD
=======
=======
        $mailable = \Mockery::mock(\Illuminate\Contracts\Mail\Mailable::class);
        $query = MailTemplate::forMailable($mailable);
        
        expect($query)->toBeInstanceOf(\Illuminate\Database\Eloquent\Builder::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    });

    test('mail template has creator and updater tracking', function () {
<<<<<<< HEAD
<<<<<<< HEAD
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
        $mailTemplate->created_by = 'user-1';
        $mailTemplate->updated_by = 'user-2';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        expect($mailTemplate->created_by)->toBe('user-1');
        expect($mailTemplate->updated_by)->toBe('user-2');
    });
});
<<<<<<< HEAD
=======
=======
        
        expect($mailTemplate->created_by)->toBe('user-1');
        expect($mailTemplate->updated_by)->toBe('user-2');
    });
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
