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
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
use Tests\TestCase;
use Modules\Notify\Models\NotifyThemeable;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> b19cd40 (.)
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
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
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotifyThemeable;
use Tests\TestCase;
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
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
use Tests\TestCase;
use Modules\Notify\Models\NotifyThemeable;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> 4689a827 (.)
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
=======
>>>>>>> 011072e4 (.)
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)







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
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
