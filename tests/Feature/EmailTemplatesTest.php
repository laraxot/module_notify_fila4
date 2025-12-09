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
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)

<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)

=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
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
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 48830c88 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> bce3ff15 (.)

=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7bac387 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)

=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> e11621f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
=======
=======
>>>>>>> 177d64d (.)
=======
>>>>>>> 2fdda20 (.)
=======
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)

=======
>>>>>>> 7ddfa00 (.)
=======
>>>>>>> cd8d5ff (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
=======
=======
>>>>>>> f52aaf6 (.)
=======
>>>>>>> f016534 (.)
=======
>>>>>>> 9d7ed71 (.)
=======
>>>>>>> 492a42b (.)
=======
>>>>>>> 5f5c315 (.)
=======
>>>>>>> 69fa7d37 (.)

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 92ecc28 (.)
=======
=======
use Tests\TestCase;
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
use Illuminate\Support\Facades\File;
>>>>>>> 82c6772 (.)
=======
=======

>>>>>>> 4cb1607 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
=======
=======
=======
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 9777d1b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 15d84ee (.)
=======
>>>>>>> 08fd62d (.)
>>>>>>> 4cb1607 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
<<<<<<< HEAD
    expect($content)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> bce3ff15 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
=======
=======
>>>>>>> 08fd62d (.)
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 58816034 (.)
=======
=======
=======
>>>>>>> 1fd232c (.)
=======
>>>>>>> 75179b85 (.)

=======
>>>>>>> 9777d1b3 (.)
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
<<<<<<< HEAD
    expect($content)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
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
>>>>>>> 161887a2 (.)
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
<<<<<<< HEAD
    expect($content)
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
>>>>>>> 161887a2 (.)
=======

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
    expect($content)
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
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
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 08fd62df (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 9777d1b3 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 161887a2 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 888799d0 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
=======
>>>>>>> 52cd5f85 (rebase 210)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 161887a2 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
<<<<<<< HEAD
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
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
>>>>>>> 161887a2 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
});

=======
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 888799d0 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> 2a97406c (.)
=======
=======
=======
>>>>>>> 48830c88 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
=======
});

test('sunny template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
>>>>>>> ee18dd92 (.)

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
    expect($content)
=======
>>>>>>> 888799d0 (.)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> ce26f84e (.)
=======
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
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> ee18dd92 (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
});

=======
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 52cd5f85 (rebase 210)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
});

=======
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 9777d1b3 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
});

=======
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 161887a2 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> f963d2c0 (.)
=======
});

test('ark template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
>>>>>>> ee18dd92 (.)

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
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
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
    expect($content)
=======
>>>>>>> 52cd5f85 (rebase 210)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
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
>>>>>>> 2effe245 (.)
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> d13ead25 (.)
=======
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
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
    expect($content)
=======
>>>>>>> 9777d1b3 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 48830c88 (rebase 210)
=======
=======
>>>>>>> 098285fb (rebase 210)
=======
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
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 0db165c (.)
>>>>>>> 098285fb (rebase 210)
=======
>>>>>>> e42e3233 (rebase 210)
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 58816034 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
=======
>>>>>>> cca10a64 (.)
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
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> cca10a64 (.)
=======
=======
>>>>>>> 08fd62d (.)
>>>>>>> bce3ff15 (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
    expect($content)
=======
>>>>>>> 161887a2 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
});
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
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
>>>>>>> 161887a2 (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
});
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
