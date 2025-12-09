<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
=======
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 82ae73be (.)
=======
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 9777d1b3 (.)

describe('Notify Themeable Business Logic', function () {
    it('can create notify themeable with basic information', function () {
        $theme = NotifyTheme::factory()->create();

        $themeableData = [
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
            'created_by' => 'admin@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ];

        $themeable = NotifyThemeable::create($themeableData);

        expect('notify_themeables')->toBeInDatabase([
            'id' => $themeable->id,
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
            'created_by' => 'admin@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->model_type)->toBe('App\Models\NotificationTemplate');
        expect($themeable->model_id)->toBe(123);
        expect($themeable->notify_theme_id)->toBe($theme->id);
    });

    it('can manage polymorphic relationships', function () {
        $theme = NotifyTheme::factory()->create();

        $themeable = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\EmailTemplate',
            'model_id' => 456,
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->model_type)->toBe('App\Models\EmailTemplate');
        expect($themeable->model_id)->toBe(456);

        expect($themeable->morphTo())->toBeInstanceOf(MorphTo::class);
    });

    it('can handle different model types', function () {
        $theme = NotifyTheme::factory()->create();

        $modelTypes = [
            'App\Models\NotificationTemplate',
            'App\Models\EmailTemplate',
            'App\Models\SmsTemplate',
            'App\Models\PushTemplate',
            'App\Models\WhatsappTemplate',
        ];

        foreach ($modelTypes as $index => $modelType) {
            $themeable = NotifyThemeable::factory()->create([
                'model_type' => $modelType,
                'model_id' => $index + 1,
                'notify_theme_id' => $theme->id,
            ]);

            expect($themeable->model_type)->toBe($modelType);
            expect($themeable->model_id)->toBe($index + 1);
        }
    });

    it('can manage theme relationships', function () {
        $theme = NotifyTheme::factory()->create([
            'name' => config('app.name', 'Platform') . ' Professional',
            'description' => 'Tema professionale per ' . config('app.name', 'Platform'),
        ]);

        $themeable = NotifyThemeable::factory()->create([
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->theme)->toBeInstanceOf(NotifyTheme::class);
        expect($themeable->theme->id)->toBe($theme->id);
        expect($themeable->theme->name)->toBe(config('app.name', 'Platform') . ' Professional');
    });

    it('can handle user tracking', function () {
        $theme = NotifyTheme::factory()->create();

        $themeable = NotifyThemeable::factory()->create([
            'notify_theme_id' => $theme->id,
            'created_by' => 'developer@' . config('app.domain', 'example.com'),
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@' . config('app.domain', 'example.com'));
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
        expect($themeable->created_at)->not->toBeNull();
        expect($themeable->updated_at)->not->toBeNull();
    });

    it('can manage multiple theme assignments', function () {
        $theme1 = NotifyTheme::factory()->create(['name' => 'Tema 1']);
        $theme2 = NotifyTheme::factory()->create(['name' => 'Tema 2']);
        $theme3 = NotifyTheme::factory()->create(['name' => 'Tema 3']);

        $themeable1 = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme1->id,
        ]);

        $themeable2 = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme2->id,
        ]);

        $themeable3 = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme3->id,
        ]);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')
            ->where('model_id', 123)
            ->get())->toHaveCount(3);
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 9777d1b3 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')
            ->where('model_id', 123)
            ->get())->toHaveCount(3);
>>>>>>> a12f125f4a (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> b93ef594b4 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')
            ->where('model_id', 123)
            ->get())->toHaveCount(3);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 3f537838 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 3f537838 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 9777d1b3 (.)
    });

    it('can handle theme switching', function () {
        $oldTheme = NotifyTheme::factory()->create(['name' => 'Tema Vecchio']);
        $newTheme = NotifyTheme::factory()->create(['name' => 'Tema Nuovo']);

        $themeable = NotifyThemeable::factory()->create([
            'notify_theme_id' => $oldTheme->id,
        ]);

        expect($themeable->notify_theme_id)->toBe($oldTheme->id);
        expect($themeable->theme->name)->toBe('Tema Vecchio');

        $themeable->update([
            'notify_theme_id' => $newTheme->id,
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBe($newTheme->id);
        expect($themeable->theme->name)->toBe('Tema Nuovo');
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
    });

    it('can handle empty or null values gracefully', function () {
        $theme = NotifyTheme::factory()->create();

        $themeable = NotifyThemeable::factory()->create([
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

    it('can validate model type consistency', function () {
        $theme = NotifyTheme::factory()->create();

        $validModelTypes = [
            'App\Models\NotificationTemplate',
            'App\Models\EmailTemplate',
            'App\Models\SmsTemplate',
            'App\Models\PushNotification',
            'App\Models\WhatsappMessage',
            'App\Models\InAppNotification',
        ];

        foreach ($validModelTypes as $modelType) {
            $themeable = NotifyThemeable::factory()->create([
                'model_type' => $modelType,
                'model_id' => rand(1, 1000),
                'notify_theme_id' => $theme->id,
            ]);

            expect($themeable->model_type)->toBe($modelType);
            expect($validModelTypes)->toContain($modelType);
        }
    });

    it('can manage theme inheritance', function () {
        $parentTheme = NotifyTheme::factory()->create([
            'name' => 'Tema Base',
            'description' => 'Tema base per tutte le notifiche',
        ]);

        $childTheme = NotifyTheme::factory()->create([
            'name' => 'Tema Specializzato',
            'description' => 'Tema specializzato per appuntamenti',
        ]);

        $baseThemeable = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $parentTheme->id,
        ]);

        $specializedThemeable = NotifyThemeable::factory()->create([
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $childTheme->id,
        ]);

        expect($baseThemeable->theme->name)->toBe('Tema Base');
        expect($specializedThemeable->theme->name)->toBe('Tema Specializzato');

        expect($baseThemeable->model_type)->toBe($specializedThemeable->model_type);
        expect($baseThemeable->model_id)->toBe($specializedThemeable->model_id);
    });

    it('can handle theme removal', function () {
        $theme = NotifyTheme::factory()->create();

        $themeable = NotifyThemeable::factory()->create([
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->notify_theme_id)->not->toBeNull();
        expect($themeable->notify_theme_id)->toBe($theme->id);

        $themeable->update([
            'notify_theme_id' => null,
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBeNull();
        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
    });

    it('can manage audit trail', function () {
        $theme = NotifyTheme::factory()->create();

        $themeable = NotifyThemeable::factory()->create([
            'notify_theme_id' => $theme->id,
            'created_by' => 'developer@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@' . config('app.domain', 'example.com'));
        expect($themeable->created_at)->not->toBeNull();

        $themeable->update([
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);

        expect($themeable->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
        expect($themeable->updated_at)->not->toBeNull();

        expect($themeable->created_at->lte($themeable->updated_at))->toBeTrue();
    });

    it('can handle bulk theme operations', function () {
        $theme1 = NotifyTheme::factory()->create(['name' => 'Tema 1']);
        $theme2 = NotifyTheme::factory()->create(['name' => 'Tema 2']);
        $theme3 = NotifyTheme::factory()->create(['name' => 'Tema 3']);

        $modelIds = [101, 102, 103, 104, 105];

        foreach ($modelIds as $modelId) {
            NotifyThemeable::factory()->create([
                'model_type' => 'App\Models\NotificationTemplate',
                'model_id' => $modelId,
                'notify_theme_id' => $theme1->id,
            ]);
        }

        $theme1Assignments = NotifyThemeable::where('notify_theme_id', $theme1->id)->get();
        expect($theme1Assignments)->toHaveCount(5);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
        NotifyThemeable::where('notify_theme_id', $theme1->id)->update([
            'notify_theme_id' => $theme2->id,
            'updated_by' => 'admin@' . config('app.domain', 'example.com'),
        ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
        NotifyThemeable::where('notify_theme_id', $theme1->id)
            ->update([
                'notify_theme_id' => $theme2->id,
                'updated_by' => 'admin@' . config('app.domain', 'example.com'),
            ]);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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

        $theme2Assignments = NotifyThemeable::where('notify_theme_id', $theme2->id)->get();
        expect($theme2Assignments)->toHaveCount(5);

        foreach ($theme2Assignments as $assignment) {
            expect($assignment->updated_by)->toBe('admin@' . config('app.domain', 'example.com'));
        }
    });
});
