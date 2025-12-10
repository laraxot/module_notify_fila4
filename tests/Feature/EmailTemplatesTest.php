<<<<<<< HEAD
<?php

declare(strict_types=1);
<<<<<<< HEAD
=======
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
>>>>>>> 08fd62df (.)
=======
>>>>>>> 7d903672 (.)

<<<<<<< HEAD
>>>>>>> 7d903672 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 53d9bada0 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> bf251cdf0 (.)
=======
>>>>>>> 7aeb7d968 (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 66d7d1293 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
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
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> bce3ff15 (.)

<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
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
<<<<<<< HEAD
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
<<<<<<< HEAD
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
=======
=======
>>>>>>> 1fd232c7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 48830c88 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> fd497554 (.)
>>>>>>> 53d9bada0 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
>>>>>>> fdad57c30 (.)
=======
>>>>>>> bf251cdf0 (.)
=======
=======
>>>>>>> 3d542a31 (.)
>>>>>>> 7aeb7d968 (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 48830c88 (rebase 210)
>>>>>>> 66d7d1293 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)

=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 998e6866b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 177d64d (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f52aaf6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f016534 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
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
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)

<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
    expect($content)
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
=======
>>>>>>> 177d64d (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD

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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
<<<<<<< HEAD
    expect($content)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 4ad63a5 (.)
<<<<<<< HEAD

=======
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;

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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
    expect($content)
<<<<<<< HEAD
>>>>>>> a29a4728 (.)
=======
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> d5d0864 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c2 (.)
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
    expect($content)
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
=======
=======
>>>>>>> 48830c88 (rebase 210)
=======
=======
>>>>>>> f016534 (.)
>>>>>>> 6e12a84b (rebase 210)
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
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 15d84ee (.)
=======
>>>>>>> 08fd62d (.)
>>>>>>> 4cb1607 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
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
>>>>>>> 518c702 (.)
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 48830c88 (rebase 210)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 9d7ed71 (.)
=======
>>>>>>> 492a42b (.)
<<<<<<< HEAD

use Tests\TestCase;
use Illuminate\Support\Facades\File;
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

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
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
    expect($content)
<<<<<<< HEAD
>>>>>>> d38aa9d2 (rebase 210)
=======
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> 5f5c315 (.)
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

<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> 098285fb (rebase 210)
=======
    expect($content)
>>>>>>> e42e3233 (rebase 210)
=======
=======

=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
=======
>>>>>>> 9cf0dc90 (.)
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
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
<<<<<<< HEAD
>>>>>>> 518c702 (.)
<<<<<<< HEAD
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 985c7bda (.)
=======
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
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 7d903672 (.)

<<<<<<< HEAD
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)

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
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
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
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 75179b855 (.)

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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)

use Illuminate\Support\Facades\File;
use Tests\TestCase;

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
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 888799d0 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
    expect($content)
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
=======
>>>>>>> 177d64d (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop

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
=======
>>>>>>> 4e2ebfb (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 4ad63a5 (.)
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
    expect($content)
<<<<<<< HEAD
>>>>>>> a29a4728 (.)
=======
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> d5d0864 (.)

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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
    expect($content)
>>>>>>> 3d542a31 (.)
>>>>>>> laraxot/develop
=======
=======
=======
>>>>>>> 6d2af2b31 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> f016534 (.)
>>>>>>> 1c96b91fe (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
    expect($content)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 08fd62df (.)

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
=======
>>>>>>> 4e2ebfb (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> 2ba4e5540 (.)
=======
    expect($content)
>>>>>>> 08ae27d78 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> ca10d6ad (.)

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
>>>>>>> 01af324fe (.)
=======
    expect($content)
>>>>>>> 8c6d84fe6 (.)
=======
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
>>>>>>> 0db165c (.)
>>>>>>> 2d4267d82 (.)
=======
    expect($content)
>>>>>>> 21e1a74cb (.)
=======
=======
=======
>>>>>>> 177d64d (.)
>>>>>>> 53d9bada0 (.)

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
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 53d9bada0 (.)
=======
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 8d298d6 (.)
=======
>>>>>>> 4ad63a5 (.)
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
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 13aa25113 (.)
=======
    expect($content)
<<<<<<< HEAD
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> 7aeb7d968 (.)
=======
>>>>>>> d5d0864 (.)

use Illuminate\Support\Facades\File;
use Tests\TestCase;

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
=======
>>>>>>> 4e2ebfb (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> bf251cdf0 (.)
=======
    expect($content)
>>>>>>> 7aeb7d968 (.)
=======
=======
=======
>>>>>>> f52aaf6 (.)
>>>>>>> 66d7d1293 (.)

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
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 66d7d1293 (.)
=======
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> 9d7ed71 (.)

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
>>>>>>> 1c96b91fe (.)
=======
    expect($content)
>>>>>>> 610b999f1 (.)
        ->toContain(
            'optional($email_data)->body_html',
            'Il template html.blade.php non utilizza optional() per body_html',
        );
<<<<<<< HEAD
=======
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
>>>>>>> ce89c8bb (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 53d9bada0 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> bf251cdf0 (.)
=======
>>>>>>> 7aeb7d968 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> a0788fa28 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 66d7d1293 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
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
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> e42e3233 (rebase 210)
=======
>>>>>>> b1f2dd4c (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 3d542a31 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> cd5474106 (.)
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> cd5474106 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> cd5474106 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 5d49e093a (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
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
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
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
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 58816034 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 1619767d8 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
>>>>>>> a12f125f4a (.)
=======
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
>>>>>>> a12f125f4a (.)
=======
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
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> a0788fa28 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
>>>>>>> 10292b60a (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> a0788fa28 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
    expect($content)
        ->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');

    // Verifico che contiene la funzione optional per body_html
    expect($content)
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
>>>>>>> cca10a64 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> cd5474106 (.)
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
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 7a9167faf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
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
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 7a142b4f5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
<<<<<<< HEAD
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
        );
<<<<<<< HEAD
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
});

>>>>>>> 10292b60a (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
=======

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
<<<<<<< HEAD
<<<<<<< HEAD
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 161887a2 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
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
=======
=======
=======
>>>>>>> 0f81dc21 (.)
<<<<<<< HEAD
>>>>>>> ce64082e3 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
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
<<<<<<< HEAD
>>>>>>> 4bec160e6 (.)
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce26f84e (.)
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
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d298dd9c2 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 9777d1b3 (.)
    expect($content)->toContain('optional($email_data)->subject', 'Il template html.blade.php non utilizza optional() per subject');
    expect($content)->toContain('optional($email_data)->body_html', 'Il template html.blade.php non utilizza optional() per body_html');
<<<<<<< HEAD
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
>>>>>>> 75179b855 (.)
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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 367c6ceb (.)
=======
<<<<<<< HEAD
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
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ce26f84e (.)
=======
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8f2456941 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
});
test('sunny template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d13ead25 (.)
=======
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 7d903672 (.)
<<<<<<< HEAD
>>>>>>> 21e1a74cb (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
>>>>>>> d3a8af4d5 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> d13ead25 (.)
>>>>>>> bf251cdf0 (.)
=======
>>>>>>> 3d542a31 (.)
<<<<<<< HEAD
>>>>>>> 7aeb7d968 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
>>>>>>> 138fcd4b0 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
>>>>>>> 903e3e2cd (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
<<<<<<< HEAD
>>>>>>> 47a873f13 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
>>>>>>> a0788fa28 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
<<<<<<< HEAD
>>>>>>> 69f695548 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
>>>>>>> 5d49e093a (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
});

test('sunny template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
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
});

test('sunny template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)

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
=======
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
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> a0788fa28 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
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
<<<<<<< HEAD
=======
>>>>>>> 9cdf6146 (.)
=======
<<<<<<< HEAD
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4f19d70d2 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
>>>>>>> 8f2456941 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
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

test('ark template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
});

test('sunny template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/sunny.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file sunny.blade.php non esiste');
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Verifico che contiene la funzione optional per cssInLine
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
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d3a8af4d5 (.)
=======
=======
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4f19d70d2 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
>>>>>>> 8f2456941 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
=======
>>>>>>> cd5474106 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
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
>>>>>>> 2a97406c (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
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
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
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
>>>>>>> 2a97406c (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> 6d08c01b (.)
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
>>>>>>> a0788fa28 (.)
=======
>>>>>>> 69f695548 (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
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
=======
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
>>>>>>> a0788fa28 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 7a9167faf (.)
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
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
=======
=======
>>>>>>> cd5474106 (.)
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
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
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
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 888799d0 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 7a9167faf (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2a97406c (.)
=======
=======
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
>>>>>>> 75179b855 (.)
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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
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
    // Verifico che contiene la funzione optional per cssInLine
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> 888799d0 (.)
test('ark template contains optional function', function (): void {
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
>>>>>>> laraxot/develop
=======
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
=======
>>>>>>> 5d49e093a (.)
=======
=======
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
});

test('ark template contains optional function', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/resources/views/emails/templates/ark.blade.php');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file ark.blade.php non esiste');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
>>>>>>> laraxot/develop
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)

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
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
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
});
=======
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
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> 4d2eb53e (.)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 2effe245 (.)
});
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 888799d0 (.)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
    expect($content)
=======
>>>>>>> 52cd5f85 (rebase 210)
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
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 6608a1a0 (.)
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
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
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
<<<<<<< HEAD
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
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> cca10a64 (.)
=======
>>>>>>> b19cd40 (.)
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
>>>>>>> 888799d0 (.)
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
>>>>>>> d298dd9c2 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 9777d1b3 (.)
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
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
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
>>>>>>> 75179b855 (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
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
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 6608a1a0 (.)
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
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
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
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
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
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> 367c6ceb (.)
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> ce26f84e (.)
>>>>>>> 2d4267d82 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
    expect($content)
        ->toContain(
            'optional($_theme)->cssInLine',
            'Il template sunny.blade.php non utilizza optional() per cssInLine',
        );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    expect($content)->toContain('optional($_theme)->cssInLine', 'Il template sunny.blade.php non utilizza optional() per cssInLine');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 998e6866b (.)
=======
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
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
>>>>>>> 1fd232c7 (.)
<<<<<<< HEAD
>>>>>>> 6d2af2b31 (.)
=======
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
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
<<<<<<< HEAD
>>>>>>> 2ba4e5540 (.)
=======
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)
=======
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 0f81dc21 (.)
<<<<<<< HEAD
>>>>>>> ce64082e3 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
>>>>>>> 8c6d84fe6 (.)
=======
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
>>>>>>> 998e6866b (.)
=======
=======
>>>>>>> fd497554 (.)
<<<<<<< HEAD
>>>>>>> 53d9bada0 (.)
=======
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
<<<<<<< HEAD
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
>>>>>>> fdad57c30 (.)
=======
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
>>>>>>> bf251cdf0 (.)
=======
>>>>>>> 7aeb7d968 (.)
=======
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
    expect($content)
        ->toContain('optional($_theme)->cssInLine', 'Il template ark.blade.php non utilizza optional() per cssInLine');
});
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
>>>>>>> 7a142b4f5 (.)
=======
=======
>>>>>>> 48830c88 (rebase 210)
<<<<<<< HEAD
>>>>>>> 66d7d1293 (.)
=======
=======
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
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
>>>>>>> 1c96b91fe (.)
=======
=======
>>>>>>> d38aa9d2 (rebase 210)
>>>>>>> 610b999f1 (.)
