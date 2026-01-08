<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Modules\Notify\Models\BaseModel;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Models\NotificationTemplateVersion;
<<<<<<< HEAD
use ReflectionClass;
use ReflectionMethod;
=======
use PHPUnit\Framework\TestCase;
<<<<<<< HEAD
=======
=======
use Modules\Notify\Models\NotificationTemplateVersion;
use Modules\Notify\Models\NotificationTemplate;
use PHPUnit\Framework\TestCase;
use Mockery;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)

it('extends base model', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

<<<<<<< HEAD
    expect($version)->toBeInstanceOf(BaseModel::class);
});
=======
    /** @test */
    public function it_extends_base_model(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)

it('uses updater trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();

    expect($traits)->toContain('Modules\\Xot\\Traits\\Updater');
});

it('has correct fillable attributes', function (): void {
    $expectedFillable = [
        'template_id',
        'subject',
        'body_html',
        'body_text',
        'channels',
        'variables',
        'conditions',
        'version',
        'created_by',
        'change_notes',
    ];

<<<<<<< HEAD
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $instance = $reflection->newInstanceWithoutConstructor();
    $fillableProperty = $reflection->getProperty('fillable');
    $fillableProperty->setAccessible(true);
    $fillable = $fillableProperty->getValue($instance);

    expect($fillable)->toBe($expectedFillable);
});

it('has correct casts', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $instance = $reflection->newInstanceWithoutConstructor();
    $castsMethod = $reflection->getMethod('casts');
    $castsMethod->setAccessible(true);
    $casts = $castsMethod->invoke($instance);

    expect($casts)->toBeArray();
    expect($casts['channels'] ?? null)->toBe('array');
    expect($casts['variables'] ?? null)->toBe('array');
    expect($casts['conditions'] ?? null)->toBe('array');
});

it('has template relationship method', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

    expect(method_exists($version, 'template'))->toBeTrue();
});
=======
<<<<<<< HEAD
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)

        $this->assertInstanceOf(BaseModel::class, $version);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

        $this->assertInstanceOf(BaseModel::class, $version);
=======
        $version = new NotificationTemplateVersion();
        
        $this->assertInstanceOf(\Modules\Notify\Models\BaseModel::class, $version);
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /** @test */
    public function it_uses_updater_trait(): void
    {
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertContains('Modules\Xot\Traits\Updater', $traits);
    }

>>>>>>> c0f3d67cc (.)
    /** @test */
    public function it_has_correct_fillable_attributes(): void
    {
        $expectedFillable = [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
            'template_id',
            'subject',
            'body_html',
            'body_text',
            'channels',
            'variables',
            'conditions',
            'version',
            'created_by',
            'change_notes',
<<<<<<< HEAD
        ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 022fa8f1c (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
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
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
        ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
=======
>>>>>>> origin/develop
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
            'template_id', 'subject', 'body_html', 'body_text', 'channels',
            'variables', 'conditions', 'version', 'created_by', 'change_notes',
        ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 9777d1b3 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 1fd232c7 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> a12f125f4a (.)
=======
        ];

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> a404ea71 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 367c6ceb (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 0db165c (.)
<<<<<<< HEAD
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 08fd62df (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 75179b85 (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 9777d1b3 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 08fd62df (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 161887a2 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
>>>>>>> 022fa8f1c (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 7d903672 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
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
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
=======
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)
        $casts = $version->getCasts();
>>>>>>> 75cb51873 (.)

it('has restore method', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

<<<<<<< HEAD
    expect(method_exists($version, 'restore'))->toBeTrue();
});
=======
    /** @test */
    public function it_has_template_relationship(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

<<<<<<< HEAD
it('restore method returns NotificationTemplate', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertTrue(method_exists($version, 'template'));
    }
>>>>>>> c0f3d67cc (.)

<<<<<<< HEAD
    expect(method_exists($version, 'restore'))->toBeTrue();
=======
    /** @test */
    public function it_has_restore_method(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

<<<<<<< HEAD
    $method = new ReflectionMethod($version, 'restore');
    $returnType = $method->getReturnType();
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertTrue(method_exists($version, 'restore'));
    }
>>>>>>> c0f3d67cc (.)

<<<<<<< HEAD
    expect($returnType)->not->toBeNull();
    expect($returnType?->getName())->toBe(NotificationTemplate::class);
});
=======
    /** @test */
    public function restore_method_returns_notification_template(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
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
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
=======
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)

it('has expected table name', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

    expect($version->getTable())->toBe('notification_template_versions');
});

it('has expected primary key', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

<<<<<<< HEAD
    expect($version->getKeyName())->toBe('id');
});
=======
<<<<<<< HEAD
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

        $this->assertTrue(method_exists($version, 'restore'));

        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new ReflectionMethod($version, 'restore');
        $returnType = $reflection->getReturnType();

<<<<<<< HEAD
=======
=======
        $version = new NotificationTemplateVersion();
        
        $this->assertTrue(method_exists($version, 'restore'));
        
        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new \ReflectionMethod($version, 'restore');
        $returnType = $reflection->getReturnType();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertEquals(NotificationTemplate::class, $returnType->getName());
    }

>>>>>>> c0f3d67cc (.)
    /** @test */
    public function it_has_table_name(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

<<<<<<< HEAD
it('uses timestamps', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertEquals('notification_template_versions', $version->getTable());
    }
>>>>>>> c0f3d67cc (.)

<<<<<<< HEAD
    expect($version->usesTimestamps())->toBeTrue();
});
=======
    /** @test */
    public function it_has_primary_key(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

<<<<<<< HEAD
it('has uuids trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertEquals('id', $version->getKeyName());
    }
>>>>>>> c0f3d67cc (.)

<<<<<<< HEAD
    expect($traits)->toContain('Illuminate\\Database\\Eloquent\\Concerns\\HasUuids');
});
=======
    /** @test */
    public function it_uses_timestamps(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> 75cb51873 (.)

it('has factory trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();

    expect($traits)->toContain('Modules\\Xot\\Traits\\HasFactory');
});

it('has media trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();

    expect($traits)->toContain('Spatie\\MediaLibrary\\HasMedia');
});

it('has creator and updater relationships', function (): void {
    $version = new NotificationTemplateVersion;

    expect(method_exists($version, 'creator'))->toBeTrue();
    expect(method_exists($version, 'updater'))->toBeTrue();
});

it('has media relationship', function (): void {
    $version = new NotificationTemplateVersion;

<<<<<<< HEAD
    expect(method_exists($version, 'media'))->toBeTrue();
});
=======
<<<<<<< HEAD
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertTrue($version->usesTimestamps());
    }

    /** @test */
    public function it_has_soft_deletes(): void
    {
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertContains('Illuminate\Database\Eloquent\Concerns\HasUuids', $traits);
    }

    /** @test */
    public function it_has_factory_trait(): void
    {
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertContains('Modules\Xot\Traits\HasFactory', $traits);
    }

    /** @test */
    public function it_has_media_trait(): void
    {
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
<<<<<<< HEAD
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

=======
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertContains('Spatie\MediaLibrary\HasMedia', $traits);
    }

>>>>>>> c0f3d67cc (.)
    /** @test */
    public function it_has_creator_and_updater_relationships(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertTrue(method_exists($version, 'creator'));
        $this->assertTrue(method_exists($version, 'updater'));
    }

    /** @test */
    public function it_has_media_relationship(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
=======
<<<<<<< HEAD
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
>>>>>>> ddee9d751 (.)

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> a12f125f4a (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> b93ef594b4 (.)

=======
        $version = new NotificationTemplateVersion();
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $this->assertTrue(method_exists($version, 'media'));
    }
}
>>>>>>> 75cb51873 (.)
