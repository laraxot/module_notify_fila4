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
use Tests\TestCase;
use Illuminate\Support\Facades\File;
uses(TestCase::class);
test('html template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/html.blade.php');
    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file html.blade.php non esiste');
    // Leggo il contenuto del file
    $content = File::get($filePath);
    // Verifico che contiene la funzione optional per subject
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)

=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
uses(TestCase::class);
test('html template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/html.blade.php');
    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file html.blade.php non esiste');
    // Leggo il contenuto del file
    $content = File::get($filePath);
    // Verifico che contiene la funzione optional per subject
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
=======
=======
>>>>>>> 1fd232c7 (.)

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;

uses(TestCase::class);
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Facades\File;

uses(Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

test('html template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/html.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file html.blade.php non esiste');

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per subject
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
        ->toContain(
            'optional($email_data)->body_html',
            'Il template html.blade.php non utilizza optional() per body_html',
        );
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
});

=======
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 9777d1b3 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    expect($content)
=======
>>>>>>> 9777d1b3 (.)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
});
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
        ->toContain(
            'optional($email_data)->body_html',
            'Il template html.blade.php non utilizza optional() per body_html',
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
=======
>>>>>>> f963d2c0 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
});

test('sunny template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
        );
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
});

test('ark template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> a12f125f4a (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b93ef594b4 (.)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
});
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
