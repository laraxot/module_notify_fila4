<?php

declare(strict_types=1);

use Filament\Facades\Filament;
use LaraZeus\SpatieTranslatable\SpatieTranslatablePlugin;
use Livewire\Livewire;
use Modules\Notify\Filament\Resources\MailTemplateResource\Pages\ListMailTemplates;
use Modules\Notify\Models\MailTemplate;
use Modules\Xot\Datas\XotData;

use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = XotData::make()->getUserClass()::factory()->create();
    $this->user->assignRole('notify::admin');
<<<<<<< HEAD
<<<<<<< HEAD

    actingAs($this->user);

=======
    
    actingAs($this->user);
    
>>>>>>> 8bc2fc9f (first)
=======

    actingAs($this->user);

>>>>>>> 20a3d3b (.)
    // Set panel corrente
    Filament::setCurrentPanel(
        Filament::getPanel('notify::admin')
    );
});

test('spatie-translatable plugin is registered in notify::admin panel', function () {
    $panel = Filament::getPanel('notify::admin');
<<<<<<< HEAD
<<<<<<< HEAD

    $plugin = $panel->getPlugin('spatie-translatable');

=======
    
    $plugin = $panel->getPlugin('spatie-translatable');
    
>>>>>>> 8bc2fc9f (first)
=======

    $plugin = $panel->getPlugin('spatie-translatable');

>>>>>>> 20a3d3b (.)
    expect($plugin)
        ->toBeInstanceOf(SpatieTranslatablePlugin::class)
        ->and($plugin->getDefaultLocales())
        ->toContain('it', 'en');
});

test('locale switcher action exists in ListMailTemplates', function () {
    MailTemplate::factory()->count(3)->create();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8bc2fc9f (first)
=======

>>>>>>> 20a3d3b (.)
    Livewire::test(ListMailTemplates::class)
        ->assertActionExists('locale_switcher');
});

test('ListMailTemplates renders without plugin registration error', function () {
    MailTemplate::factory()->count(3)->create();
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> 8bc2fc9f (first)
=======

>>>>>>> 20a3d3b (.)
    Livewire::test(ListMailTemplates::class)
        ->assertSuccessful()
        ->assertCanSeeTableRecords(MailTemplate::all());
});
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
