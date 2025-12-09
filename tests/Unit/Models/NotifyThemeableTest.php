<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
use Tests\TestCase;
use Modules\Notify\Models\NotifyThemeable;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
=======
use Tests\TestCase;
use Modules\Notify\Models\NotifyThemeable;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> b93ef594b4 (.)
=======
use Tests\TestCase;
use Modules\Notify\Models\NotifyThemeable;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 58816034 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)

class NotifyThemeableTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /** @test */
    public function it_can_create_notify_themeable(): void
    {
        $themeable = NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
        ]);

        $this->assertDatabaseHas('notify_themeables', [
            'id' => $themeable->id,
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
        ]);

        $this->assertInstanceOf(NotifyThemeable::class, $themeable);
    }

    /** @test */
    public function it_can_create_with_created_by_and_updated_by(): void
    {
        $themeable = NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
            'created_by' => 'user_123',
            'updated_by' => 'user_123',
        ]);

        $this->assertDatabaseHas('notify_themeables', [
            'id' => $themeable->id,
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
            'created_by' => 'user_123',
            'updated_by' => 'user_123',
        ]);

        $this->assertEquals('user_123', $themeable->created_by);
        $this->assertEquals('user_123', $themeable->updated_by);
    }

    /** @test */
    public function it_can_update_notify_themeable(): void
    {
        $themeable = NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
        ]);

        $themeable->update([
            'notify_theme_id' => 789,
            'updated_by' => 'user_456',
        ]);

        $this->assertDatabaseHas('notify_themeables', [
            'id' => $themeable->id,
            'notify_theme_id' => 789,
            'updated_by' => 'user_456',
        ]);

        $this->assertEquals(789, $themeable->fresh()->notify_theme_id);
        $this->assertEquals('user_456', $themeable->fresh()->updated_by);
    }

    /** @test */
    public function it_can_find_by_model_type_and_id(): void
    {
        $themeable = NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
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
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')
            ->where('model_id', 123)
            ->first();
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 9777d1b3 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> d09cb759 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> d09cb759 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 4689a827 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 7325acf3 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> f2e64178 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> c4bdacbf (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> dceba960 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> bd804d67 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 229a065a (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 22baa66d (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 2effe245 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> e790eb33 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> 3ee54c5d (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')
            ->where('model_id', 123)
            ->first();
>>>>>>> a12f125f4a (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> b93ef594b4 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')
            ->where('model_id', 123)
            ->first();
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
>>>>>>> d09cb759 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 3f537838 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 3f537838 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 2941b0bd (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4c323e61 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 116df547 (.)
=======
>>>>>>> 51182e3c (rebase 210)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> c5c038f2 (rebase 210)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 58816034 (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $found = NotifyThemeable::where('model_type', 'App\Models\User')->where('model_id', 123)->first();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)

        $this->assertNotNull($found);
        $this->assertEquals($themeable->id, $found->id);
        $this->assertEquals('App\Models\User', $found->model_type);
        $this->assertEquals(123, $found->model_id);
        $this->assertEquals(456, $found->notify_theme_id);
    }

    /** @test */
    public function it_can_find_by_notify_theme_id(): void
    {
        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 456,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Order',
            'model_id' => 101,
            'notify_theme_id' => 789,
        ]);

        $theme456Themeables = NotifyThemeable::where('notify_theme_id', 456)->get();
        $theme789Themeables = NotifyThemeable::where('notify_theme_id', 789)->get();

        $this->assertCount(2, $theme456Themeables);
        $this->assertCount(1, $theme789Themeables);
        $this->assertEquals(456, $theme456Themeables[0]->notify_theme_id);
        $this->assertEquals(456, $theme456Themeables[1]->notify_theme_id);
        $this->assertEquals(789, $theme789Themeables[0]->notify_theme_id);
    }

    /** @test */
    public function it_can_find_by_model_type(): void
    {
        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 456,
            'notify_theme_id' => 789,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
        ]);

        $userThemeables = NotifyThemeable::where('model_type', 'App\Models\User')->get();
        $companyThemeables = NotifyThemeable::where('model_type', 'App\Models\Company')->get();

        $this->assertCount(2, $userThemeables);
        $this->assertCount(1, $companyThemeables);
        $this->assertEquals('App\Models\User', $userThemeables[0]->model_type);
        $this->assertEquals('App\Models\User', $userThemeables[1]->model_type);
        $this->assertEquals('App\Models\Company', $companyThemeables[0]->model_type);
    }

    /** @test */
    public function it_can_find_by_created_by(): void
    {
        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
            'created_by' => 'user_123',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
            'created_by' => 'user_456',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Order',
            'model_id' => 101,
            'notify_theme_id' => 789,
            'created_by' => 'user_123',
        ]);

        $user123Themeables = NotifyThemeable::where('created_by', 'user_123')->get();
        $user456Themeables = NotifyThemeable::where('created_by', 'user_456')->get();

        $this->assertCount(2, $user123Themeables);
        $this->assertCount(1, $user456Themeables);
        $this->assertEquals('user_123', $user123Themeables[0]->created_by);
        $this->assertEquals('user_123', $user123Themeables[1]->created_by);
        $this->assertEquals('user_456', $user456Themeables[0]->created_by);
    }

    /** @test */
    public function it_can_find_by_updated_by(): void
    {
        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
            'updated_by' => 'user_123',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
            'updated_by' => 'user_456',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Order',
            'model_id' => 101,
            'notify_theme_id' => 789,
            'updated_by' => 'user_123',
        ]);

        $user123Themeables = NotifyThemeable::where('updated_by', 'user_123')->get();
        $user456Themeables = NotifyThemeable::where('updated_by', 'user_456')->get();

        $this->assertCount(2, $user123Themeables);
        $this->assertCount(1, $user456Themeables);
        $this->assertEquals('user_123', $user123Themeables[0]->updated_by);
        $this->assertEquals('user_123', $user123Themeables[1]->updated_by);
        $this->assertEquals('user_456', $user456Themeables[0]->updated_by);
    }

    /** @test */
    public function it_can_find_by_multiple_criteria(): void
    {
        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 123,
            'notify_theme_id' => 456,
            'created_by' => 'user_123',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 456,
            'notify_theme_id' => 789,
            'created_by' => 'user_456',
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 789,
            'notify_theme_id' => 101,
            'created_by' => 'user_123',
        ]);

        $user123Themeables = NotifyThemeable::where('model_type', 'App\Models\User')
            ->where('created_by', 'user_123')
            ->get();

        $this->assertCount(1, $user123Themeables);
        $this->assertEquals('App\Models\User', $user123Themeables[0]->model_type);
        $this->assertEquals(123, $user123Themeables[0]->model_id);
        $this->assertEquals(456, $user123Themeables[0]->notify_theme_id);
        $this->assertEquals('user_123', $user123Themeables[0]->created_by);
    }

    /** @test */
    public function it_can_handle_null_values(): void
    {
        $themeable = NotifyThemeable::create([
            'model_type' => null,
            'model_id' => null,
            'notify_theme_id' => null,
            'created_by' => null,
            'updated_by' => null,
        ]);

        $this->assertNull($themeable->model_type);
        $this->assertNull($themeable->model_id);
        $this->assertNull($themeable->notify_theme_id);
        $this->assertNull($themeable->created_by);
        $this->assertNull($themeable->updated_by);
    }

    /** @test */
    public function it_can_create_multiple_themeables(): void
    {
        $themeables = [
            [
                'model_type' => 'App\Models\User',
                'model_id' => 1,
                'notify_theme_id' => 101,
                'created_by' => 'user_1',
            ],
            [
                'model_type' => 'App\Models\User',
                'model_id' => 2,
                'notify_theme_id' => 102,
                'created_by' => 'user_2',
            ],
            [
                'model_type' => 'App\Models\Company',
                'model_id' => 1,
                'notify_theme_id' => 201,
                'created_by' => 'user_1',
            ],
            [
                'model_type' => 'App\Models\Company',
                'model_id' => 2,
                'notify_theme_id' => 202,
                'created_by' => 'user_2',
            ],
            [
                'model_type' => 'App\Models\Order',
                'model_id' => 1,
                'notify_theme_id' => 301,
                'created_by' => 'user_1',
            ],
        ];

        foreach ($themeables as $themeableData) {
            NotifyThemeable::create($themeableData);
        }

        $this->assertDatabaseCount('notify_themeables', 5);

        $userThemeables = NotifyThemeable::where('model_type', 'App\Models\User')->get();
        $companyThemeables = NotifyThemeable::where('model_type', 'App\Models\Company')->get();
        $orderThemeables = NotifyThemeable::where('model_type', 'App\Models\Order')->get();

        $this->assertCount(2, $userThemeables);
        $this->assertCount(2, $companyThemeables);
        $this->assertCount(1, $orderThemeables);

        $user1Themeables = NotifyThemeable::where('created_by', 'user_1')->get();
        $this->assertCount(3, $user1Themeables);
    }

    /** @test */
    public function it_can_find_by_date_range(): void
    {
        $yesterday = now()->subDay();
        $today = now();
        $tomorrow = now()->addDay();

        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 1,
            'notify_theme_id' => 101,
            'created_at' => $yesterday,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\User',
            'model_id' => 2,
            'notify_theme_id' => 102,
            'created_at' => $today,
        ]);

        NotifyThemeable::create([
            'model_type' => 'App\Models\Company',
            'model_id' => 1,
            'notify_theme_id' => 201,
            'created_at' => $tomorrow,
        ]);

        $todayThemeables = NotifyThemeable::whereDate('created_at', $today->toDateString())->get();
        $recentThemeables = NotifyThemeable::where('created_at', '>=', $yesterday)->get();

        $this->assertCount(1, $todayThemeables);
        $this->assertCount(2, $recentThemeables); // yesterday and today
        $this->assertEquals('App\Models\User', $todayThemeables[0]->model_type);
        $this->assertEquals(2, $todayThemeables[0]->model_id);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 7325acf3 (.)
=======
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> c4bdacbf (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> bd804d67 (.)
=======
=======
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
=======
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
=======
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> e790eb33 (.)
=======
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 3ee54c5d (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)







<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 4c323e61 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 9d84f153 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 116df547 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 1c0eb9c7 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> bb00ab64 (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 77edd94a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> f81a620f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 4b544042 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
