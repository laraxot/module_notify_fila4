<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

use Modules\Notify\Models\BaseModel;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Models\NotificationTemplateVersion;
use ReflectionClass;
use ReflectionMethod;

it('extends base model', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

<<<<<<< HEAD
    /** @test */
    public function it_extends_base_model(): void
    {
        $version = new NotificationTemplateVersion();
=======
    expect($version)->toBeInstanceOf(BaseModel::class);
});
>>>>>>> c8903a55c (.)

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
    /** @test */
    public function it_has_correct_fillable_attributes(): void
    {
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

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
        $version = new NotificationTemplateVersion();
        $casts = $version->getCasts();
=======
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

it('has restore method', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

    expect(method_exists($version, 'restore'))->toBeTrue();
});

it('restore method returns NotificationTemplate', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();
>>>>>>> c8903a55c (.)

    expect(method_exists($version, 'restore'))->toBeTrue();

<<<<<<< HEAD
    /** @test */
    public function it_has_template_relationship(): void
    {
        $version = new NotificationTemplateVersion();
=======
    $method = new ReflectionMethod($version, 'restore');
    $returnType = $method->getReturnType();
>>>>>>> c8903a55c (.)

    expect($returnType)->not->toBeNull();
    expect($returnType?->getName())->toBe(NotificationTemplate::class);
});

<<<<<<< HEAD
    /** @test */
    public function it_has_restore_method(): void
    {
        $version = new NotificationTemplateVersion();
=======
it('has expected table name', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();
>>>>>>> c8903a55c (.)

    expect($version->getTable())->toBe('notification_template_versions');
});

<<<<<<< HEAD
    /** @test */
    public function restore_method_returns_notification_template(): void
    {
        $version = new NotificationTemplateVersion();
=======
it('has expected primary key', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();
>>>>>>> c8903a55c (.)

    expect($version->getKeyName())->toBe('id');
});

it('uses timestamps', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $version = $reflection->newInstanceWithoutConstructor();

    expect($version->usesTimestamps())->toBeTrue();
});

<<<<<<< HEAD
    /** @test */
    public function it_has_table_name(): void
    {
        $version = new NotificationTemplateVersion();
=======
it('has uuids trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();
>>>>>>> c8903a55c (.)

    expect($traits)->toContain('Illuminate\\Database\\Eloquent\\Concerns\\HasUuids');
});

<<<<<<< HEAD
    /** @test */
    public function it_has_primary_key(): void
    {
        $version = new NotificationTemplateVersion();
=======
it('has factory trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();
>>>>>>> c8903a55c (.)

    expect($traits)->toContain('Modules\\Xot\\Traits\\HasFactory');
});

<<<<<<< HEAD
    /** @test */
    public function it_uses_timestamps(): void
    {
        $version = new NotificationTemplateVersion();
=======
it('has media trait', function (): void {
    $reflection = new ReflectionClass(NotificationTemplateVersion::class);
    $traits = $reflection->getTraitNames();
>>>>>>> c8903a55c (.)

    expect($traits)->toContain('Spatie\\MediaLibrary\\HasMedia');
});

it('has creator and updater relationships', function (): void {
    $version = new NotificationTemplateVersion();

    expect(method_exists($version, 'creator'))->toBeTrue();
    expect(method_exists($version, 'updater'))->toBeTrue();
});

it('has media relationship', function (): void {
    $version = new NotificationTemplateVersion();

<<<<<<< HEAD
        $this->assertContains('Modules\Xot\Traits\HasFactory', $traits);
    }

    /** @test */
    public function it_has_media_trait(): void
    {
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

        $this->assertContains('Spatie\MediaLibrary\HasMedia', $traits);
    }

    /** @test */
    public function it_has_creator_and_updater_relationships(): void
    {
        $version = new NotificationTemplateVersion();

        $this->assertTrue(method_exists($version, 'creator'));
        $this->assertTrue(method_exists($version, 'updater'));
    }

    /** @test */
    public function it_has_media_relationship(): void
    {
        $version = new NotificationTemplateVersion();

        $this->assertTrue(method_exists($version, 'media'));
    }
}
=======
    expect(method_exists($version, 'media'))->toBeTrue();
});
>>>>>>> c8903a55c (.)
