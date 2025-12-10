<<<<<<< HEAD
<?php

declare(strict_types=1);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1f80445 (.)
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
=======
>>>>>>> 7d765981 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f5f1cb1 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> f15c41e60 (.)
use Modules\Notify\Models\MailTemplate;
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
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
=======
>>>>>>> c8b1c8bf (.)
=======

>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======

>>>>>>> 75179b855 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
>>>>>>> laraxot/develop
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
use Spatie\Sluggable\HasSlug;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Models\MailTemplate;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

<<<<<<< HEAD
describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
=======
use function Safe\class_uses;

describe('MailTemplate Business Logic', function (): void {
    test('mail template extends spatie mail template', function (): void {
>>>>>>> 7d765981 (.)
=======
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)

describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
>>>>>>> 75179b85 (.)
=======

describe('MailTemplate Business Logic', function () {
    test('mail template extends spatie mail template', function () {
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
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
        $mailTemplate = new MailTemplate();
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
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
        $mailTemplate = new MailTemplate();
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
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
        $mailTemplate = new MailTemplate();
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
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
        $mailTemplate = new MailTemplate();
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
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
        $mailTemplate = new MailTemplate();
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
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $mailTemplate = new MailTemplate;
=======
        $mailTemplate = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 301ad8b44 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
=======
        
        expect($mailTemplate->created_by)->toBe('user-1');
        expect($mailTemplate->updated_by)->toBe('user-2');
    });
});
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
