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
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> a070a65a5 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b8 (.)
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
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
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

uses(TestCase::class);
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
=======
>>>>>>> 3f537838 (.)
use Tests\TestCase;
>>>>>>> f813254 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Tests\TestCase;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Support\Facades\File;
use Tests\TestCase;
=======
use Tests\TestCase;
use Illuminate\Support\Facades\File;
>>>>>>> 75179b8 (.)

uses(TestCase::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
use Illuminate\Support\Facades\File;

uses(Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
use Tests\TestCase;
use Illuminate\Support\Facades\File;

uses(TestCase::class);
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
use Illuminate\Support\Facades\File;

uses(Tests\TestCase::class);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
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
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b85 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b85 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 75179b855 (.)
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: '.json_last_error_msg());
=======
    expect($json)->not->toBeNull('Il file _components.json non contiene JSON valido: ' . json_last_error_msg());
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

    // Verifico che ci sono 2 componenti
    expect($json)->toHaveCount(2, 'Il file _components.json non contiene i 2 componenti attesi');

    // Verifico che ci sono i componenti SendMailCommand e TelegramWebhook
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
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
=======
>>>>>>> 6a44db8a (.)
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 7d765981 (.)
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
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
=======
>>>>>>> e53a56570 (.)
    expect($json[0])->toHaveKey('name', 'Il primo componente non ha una chiave "name"');
    expect($json[0])->toHaveKey('class', 'Il primo componente non ha una chiave "class"');
    expect($json[0])->toHaveKey('ns', 'Il primo componente non ha una chiave "ns"');

    expect($json[1])->toHaveKey('name', 'Il secondo componente non ha una chiave "name"');
    expect($json[1])->toHaveKey('class', 'Il secondo componente non ha una chiave "class"');
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2effe245 (.)
=======
>>>>>>> 6a44db8a (.)
=======
    /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
>>>>>>> 7d765981 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)
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
=======
>>>>>>> 301ad8b44 (.)
