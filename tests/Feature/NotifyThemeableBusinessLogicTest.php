<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
=======
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> b19cd40 (.)

describe('Notify Themeable Business Logic', function (): void {
    it('can create notify themeable with basic information', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        $themeableData = [
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
<<<<<<< HEAD
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
=======
            'created_by' => 'admin@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
>>>>>>> 99ff506 (.)
        ];

        $themeable = NotifyThemeable::create($themeableData);

        expect('notify_themeables')->toBeInDatabase([
            'id' => $themeable->id,
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
<<<<<<< HEAD
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
=======
            'created_by' => 'admin@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
>>>>>>> 99ff506 (.)
        ]);

        expect($themeable->model_type)->toBe('App\Models\NotificationTemplate');
        expect($themeable->model_id)->toBe(123);
        expect($themeable->notify_theme_id)->toBe($theme->id);
    });

    it('can manage polymorphic relationships', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\EmailTemplate',
            'model_id' => 456,
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->model_type)->toBe('App\Models\EmailTemplate');
        expect($themeable->model_id)->toBe(456);

        expect($themeable->morphTo())->toBeInstanceOf(MorphTo::class);
    });

    it('can handle different model types', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        $modelTypes = [
            'App\Models\NotificationTemplate',
            'App\Models\EmailTemplate',
            'App\Models\SmsTemplate',
            'App\Models\PushTemplate',
            'App\Models\WhatsappTemplate',
        ];

        foreach ($modelTypes as $index => $modelType) {
            /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
                'model_type' => $modelType,
                'model_id' => $index + 1,
                'notify_theme_id' => $theme->id,
            ]);

            expect($themeable->model_type)->toBe($modelType);
            expect($themeable->model_id)->toBe($index + 1);
        }
    });

    it('can manage theme relationships', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
<<<<<<< HEAD
        $theme = NotifyTheme::factory()->create([
<<<<<<< HEAD
=======
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create([
>>>>>>> 6fb15fa (.)
            'name' => config('app.name', 'Platform').' Professional',
            'description' => 'Tema professionale per '.config('app.name', 'Platform'),
=======
            'name' => config('app.name', 'Platform') . ' Professional',
            'description' => 'Tema professionale per ' . config('app.name', 'Platform'),
>>>>>>> 99ff506 (.)
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->theme)->toBeInstanceOf(NotifyTheme::class);
        expect($themeable->theme->id)->toBe($theme->id);
<<<<<<< HEAD
        expect($themeable->theme->name)->toBe(config('app.name', 'Platform').' Professional');
=======
        expect($themeable->theme->name)->toBe(config('app.name', 'Platform') . ' Professional');
>>>>>>> 99ff506 (.)
    });

    it('can handle user tracking', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
<<<<<<< HEAD
            'created_by' => 'developer@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@'.config('app.domain', 'example.com'));
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
=======
            'created_by' => 'developer@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@' . config('app.domain', 'example.com'));
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
>>>>>>> 99ff506 (.)
        expect($themeable->created_at)->not->toBeNull();
        expect($themeable->updated_at)->not->toBeNull();
    });

    it('can manage multiple theme assignments', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme1 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 1']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme2 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 2']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme3 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 3']);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable1 = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme1->id,
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable2 = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme2->id,
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable3 = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme3->id,
        ]);

<<<<<<< HEAD
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')
            ->where('model_id', 123)
            ->get())->toHaveCount(3);
>>>>>>> b19cd40 (.)
    });

    it('can handle theme switching', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $oldTheme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema Vecchio']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $newTheme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema Nuovo']);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $oldTheme->id,
        ]);

        expect($themeable->notify_theme_id)->toBe($oldTheme->id);
        expect($themeable->theme->name)->toBe('Tema Vecchio');

        /** @phpstan-ignore-next-line method.nonObject */
        $themeable->update([
            'notify_theme_id' => $newTheme->id,
<<<<<<< HEAD
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
=======
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
>>>>>>> 99ff506 (.)
        ]);

        expect($themeable->notify_theme_id)->toBe($newTheme->id);
        expect($themeable->theme->name)->toBe('Tema Nuovo');
<<<<<<< HEAD
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
=======
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
>>>>>>> 99ff506 (.)
    });

    it('can handle empty or null values gracefully', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
            'model_type' => null,
            'model_id' => null,
            'created_by' => null,
            'updated_by' => null,
        ]);

        expect($themeable->model_type)->toBeNull();
        expect($themeable->model_id)->toBeNull();
        expect($themeable->created_by)->toBeNull();
        expect($themeable->updated_by)->toBeNull();
        expect($themeable->notify_theme_id)->not->toBeNull();
    });

    it('can validate model type consistency', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        $validModelTypes = [
            'App\Models\NotificationTemplate',
            'App\Models\EmailTemplate',
            'App\Models\SmsTemplate',
            'App\Models\PushNotification',
            'App\Models\WhatsappMessage',
            'App\Models\InAppNotification',
        ];

        foreach ($validModelTypes as $modelType) {
            /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
                'model_type' => $modelType,
                'model_id' => rand(1, 1000),
                'notify_theme_id' => $theme->id,
            ]);

            expect($themeable->model_type)->toBe($modelType);
            expect($validModelTypes)->toContain($modelType);
        }
    });

    it('can manage theme inheritance', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $parentTheme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Tema Base',
            'description' => 'Tema base per tutte le notifiche',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $childTheme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Tema Specializzato',
            'description' => 'Tema specializzato per appuntamenti',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $baseThemeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $parentTheme->id,
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $specializedThemeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $childTheme->id,
        ]);

        expect($baseThemeable->theme->name)->toBe('Tema Base');
        expect($specializedThemeable->theme->name)->toBe('Tema Specializzato');

        expect($baseThemeable->model_type)->toBe($specializedThemeable->model_type);
        expect($baseThemeable->model_id)->toBe($specializedThemeable->model_id);
    });

    it('can handle theme removal', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->notify_theme_id)->not->toBeNull();
        expect($themeable->notify_theme_id)->toBe($theme->id);

        /** @phpstan-ignore-next-line method.nonObject */
        $themeable->update([
            'notify_theme_id' => null,
<<<<<<< HEAD
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBeNull();
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
=======
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBeNull();
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
>>>>>>> 99ff506 (.)
    });

    it('can manage audit trail', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
<<<<<<< HEAD
            'created_by' => 'developer@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@'.config('app.domain', 'example.com'));
        expect($themeable->created_at)->not->toBeNull();

        /** @phpstan-ignore-next-line method.nonObject */
        $themeable->update([
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
=======
            'created_by' => 'developer@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@' . config('app.domain', 'example.com'));
        expect($themeable->created_at)->not->toBeNull();

        $themeable->update([
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
>>>>>>> 99ff506 (.)
        expect($themeable->updated_at)->not->toBeNull();

        expect($themeable->created_at->lte($themeable->updated_at))->toBeTrue();
    });

    it('can handle bulk theme operations', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme1 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 1']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme2 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 2']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme3 = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create(['name' => 'Tema 3']);

        $modelIds = [101, 102, 103, 104, 105];

        foreach ($modelIds as $modelId) {
            NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
                'model_type' => 'App\Models\NotificationTemplate',
                'model_id' => $modelId,
                'notify_theme_id' => $theme1->id,
            ]);
        }

        $theme1Assignments = NotifyThemeable::where('notify_theme_id', $theme1->id)->get();
        expect($theme1Assignments)->toHaveCount(5);

<<<<<<< HEAD
        NotifyThemeable::where('notify_theme_id', $theme1->id)->update([
            'notify_theme_id' => $theme2->id,
<<<<<<< HEAD
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
=======
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
>>>>>>> 99ff506 (.)
        ]);
=======
        NotifyThemeable::where('notify_theme_id', $theme1->id)
            ->update([
                'notify_theme_id' => $theme2->id,
                'updated_by' => 'admin@' . config('app.domain', 'example.com'),
            ]);
>>>>>>> b19cd40 (.)

        $theme2Assignments = NotifyThemeable::where('notify_theme_id', $theme2->id)->get();
        expect($theme2Assignments)->toHaveCount(5);

        foreach ($theme2Assignments as $assignment) {
<<<<<<< HEAD
            expect($assignment->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
=======
            expect($assignment->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
>>>>>>> 99ff506 (.)
        }
    });
});
