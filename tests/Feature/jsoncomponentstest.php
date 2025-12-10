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
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Tests\TestCase;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
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
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b8 (.)
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b85 (.)
=======
use Illuminate\Support\Facades\File;
use Tests\TestCase;
>>>>>>> 2cbbc069 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 2ceb139 (.)
=======
>>>>>>> 1c9a755 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
use Illuminate\Support\Facades\File;
use Tests\TestCase;
>>>>>>> a80c61f (.)
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> c650db4 (.)
>>>>>>> 4fc21b78 (rebase 210)

uses(TestCase::class);
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Facades\File;

uses(Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
=======
=======
>>>>>>> e00d798d (.)
use Illuminate\Support\Facades\File;
use Tests\TestCase;

uses(TestCase::class);
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
>>>>>>> e00d798d (.)

test('components json is valid and contains expected components', function (): void {
    // Percorso del file
    $filePath = base_path('Modules/Notify/app/Console/Commands/_components.json');

    // Verifico che il file esiste
    expect(File::exists($filePath))->toBeTrue('Il file _components.json non esiste');

    // Leggo il contenuto del file
    $content = File::get($filePath);

    // Decodifico il JSON
    $json = json_decode($content, true);

    // Verifico che il JSON è valido
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b8 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b85 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
>>>>>>> 2cbbc069 (.)
=======
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
>>>>>>> a80c61f (.)
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> c650db4 (.)
>>>>>>> 4fc21b78 (rebase 210)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
>>>>>>> d45a0226 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
>>>>>>> e00d798d (.)

    // Verifico che ci sono 2 componenti
    expect($json)->toHaveCount(2, 'Il file _components.json non contiene i 2 componenti attesi');

    // Verifico che ci sono i componenti SendMailCommand e TelegramWebhook
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
=======
>>>>>>> 6a92a74 (.)
=======
>>>>>>> c650db4 (.)
>>>>>>> 4fc21b78 (rebase 210)
    expect($json[0])->toHaveKey('name', 'Il primo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('class', 'Il primo componente non ha una chiave "class"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('ns', 'Il primo componente non ha una chiave "ns"');

    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('name', 'Il secondo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('class', 'Il secondo componente non ha una chiave "class"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 5fd545e4 (.)
    expect($json[0])->toHaveKey('name', 'Il primo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('class', 'Il primo componente non ha una chiave "class"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('ns', 'Il primo componente non ha una chiave "ns"');

    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('name', 'Il secondo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('class', 'Il secondo componente non ha una chiave "class"');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 5fd545e4 (.)
=======
=======
=======
>>>>>>> a80c61f (.)
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> e6c7fb3 (.)
>>>>>>> 54220b28 (rebase 210)
    expect($json[0])->toHaveKey('name', 'Il primo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('class', 'Il primo componente non ha una chiave "class"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('ns', 'Il primo componente non ha una chiave "ns"');

    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('name', 'Il secondo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('class', 'Il secondo componente non ha una chiave "class"');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> a80c61f (.)
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> e6c7fb3 (.)
<<<<<<< HEAD
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 6a92a74 (.)
=======
>>>>>>> c650db4 (.)
>>>>>>> 4fc21b78 (rebase 210)
=======
=======
>>>>>>> e00d798d (.)
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 6a44db8a (.)
    expect($json[0])->toHaveKey('name', 'Il primo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('class', 'Il primo componente non ha una chiave "class"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[0])->toHaveKey('ns', 'Il primo componente non ha una chiave "ns"');

    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('name', 'Il secondo componente non ha una chiave "name"');
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
    expect($json[1])->toHaveKey('class', 'Il secondo componente non ha una chiave "class"');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
>>>>>>> e00d798d (.)
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 6a44db8a (.)
    expect($json[1])->toHaveKey('ns', 'Il secondo componente non ha una chiave "ns"');

    // Verifico i nomi specifici dei componenti
    $names = array_column($json, 'name');
    expect($names)->toContain('send-mail-command', 'Componente "send-mail-command" non trovato');
    expect($names)->toContain('telegram-webhook', 'Componente "telegram-webhook" non trovato');

    // Verifico le classi specifiche dei componenti
    $classes = array_column($json, 'class');
    expect($classes)->toContain('SendMailCommand', 'Classe "SendMailCommand" non trovata');
    expect($classes)->toContain('TelegramWebhook', 'Classe "TelegramWebhook" non trovata');
});
