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
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\MorphTo;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
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
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> de02998b (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> e7a9a2bf (.)
=======
use Modules\Notify\Models\NotifyThemeable;
use Modules\Notify\Models\NotifyTheme;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
use Modules\Notify\Models\NotifyTheme;
use Modules\Notify\Models\NotifyThemeable;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)

describe('Notify Themeable Business Logic', function (): void {
    it('can create notify themeable with basic information', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        $themeableData = [
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ];

        $themeable = NotifyThemeable::create($themeableData);

        expect('notify_themeables')->toBeInDatabase([
            'id' => $themeable->id,
            'model_type' => 'App\Models\NotificationTemplate',
            'model_id' => 123,
            'notify_theme_id' => $theme->id,
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
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
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create([
            'name' => config('app.name', 'Platform').' Professional',
            'description' => 'Tema professionale per '.config('app.name', 'Platform'),
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
        ]);

        expect($themeable->theme)->toBeInstanceOf(NotifyTheme::class);
        expect($themeable->theme->id)->toBe($theme->id);
        expect($themeable->theme->name)->toBe(config('app.name', 'Platform').' Professional');
    });

    it('can handle user tracking', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
            'created_by' => 'developer@'.config('app.domain', 'example.com'),
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@'.config('app.domain', 'example.com'));
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> e7a9a2bf (.)
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
>>>>>>> 011072e4 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
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
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
>>>>>>> d09cb759 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        expect(NotifyThemeable::where('model_type', 'App\Models\NotificationTemplate')->where('model_id', 123)->get())
            ->toHaveCount(3);
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
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
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBe($newTheme->id);
        expect($themeable->theme->name)->toBe('Tema Nuovo');
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
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
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->notify_theme_id)->toBeNull();
        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
    });

    it('can manage audit trail', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $theme = NotifyTheme/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $themeable = NotifyThemeable/** @phpstan-ignore-line */ ::factory()->create([
            'notify_theme_id' => $theme->id,
            'created_by' => 'developer@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->created_by)->toBe('developer@'.config('app.domain', 'example.com'));
        expect($themeable->created_at)->not->toBeNull();

        /** @phpstan-ignore-next-line method.nonObject */
        $themeable->update([
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
        ]);

        expect($themeable->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
        NotifyThemeable::where('notify_theme_id', $theme1->id)->update([
            'notify_theme_id' => $theme2->id,
            'updated_by' => 'admin@'.config('app.domain', 'example.com'),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> e7a9a2bf (.)
        NotifyThemeable::where('notify_theme_id', $theme1->id)
            ->update([
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
>>>>>>> b19cd40 (.)
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
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)

        $theme2Assignments = NotifyThemeable::where('notify_theme_id', $theme2->id)->get();
        expect($theme2Assignments)->toHaveCount(5);

        foreach ($theme2Assignments as $assignment) {
            expect($assignment->updated_by)->toBe('admin@'.config('app.domain', 'example.com'));
        }
    });
});
