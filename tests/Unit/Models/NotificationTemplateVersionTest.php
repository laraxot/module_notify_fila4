<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

use Modules\Notify\Models\BaseModel;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Models\NotificationTemplateVersion;
use PHPUnit\Framework\TestCase;

class NotificationTemplateVersionTest extends TestCase
{
    protected function tearDown(): void
    {
        \Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function it_extends_base_model(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(BaseModel::class, $version);
    }

    /** @test */
    public function it_uses_updater_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $traits = $reflection->getTraitNames();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Modules\Xot\Traits\Updater', $traits);
    }

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

        $model = new NotificationTemplateVersion;
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($expectedFillable, $model->getFillable());
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
        $version = new NotificationTemplateVersion;
        /** @phpstan-ignore-next-line method.nonObject */
        $casts = $version->getCasts();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($casts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('array', $casts['channels']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('array', $casts['variables']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject, offsetAccess.nonOffsetAccessible */
        $this->assertEquals('array', $casts['conditions']);
    }

    /** @test */
    public function it_has_template_relationship(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'template'));
    }

    /** @test */
    public function it_has_restore_method(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'restore'));
    }

    /** @test */
    public function restore_method_returns_notification_template(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'restore'));

        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new \ReflectionMethod($version, 'restore');
        /** @phpstan-ignore-next-line method.nonObject */
        $returnType = $reflection->getReturnType();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(NotificationTemplate::class, $returnType->getName());
    }

    /** @test */
    public function it_has_table_name(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('notification_template_versions', $version->getTable());
    }

    /** @test */
    public function it_has_primary_key(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('id', $version->getKeyName());
    }

    /** @test */
    public function it_uses_timestamps(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($version->usesTimestamps());
    }

    /** @test */
    public function it_has_soft_deletes(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $traits = $reflection->getTraitNames();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Illuminate\Database\Eloquent\Concerns\HasUuids', $traits);
    }

    /** @test */
    public function it_has_factory_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $traits = $reflection->getTraitNames();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Modules\Xot\Traits\HasFactory', $traits);
    }

    /** @test */
    public function it_has_media_trait(): void
    {
        $reflection = new \ReflectionClass(NotificationTemplateVersion::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $traits = $reflection->getTraitNames();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Spatie\MediaLibrary\HasMedia', $traits);
    }

    /** @test */
    public function it_has_creator_and_updater_relationships(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'creator'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'updater'));
    }

    /** @test */
    public function it_has_media_relationship(): void
    {
        $version = new NotificationTemplateVersion;

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($version, 'media'));
    }
}
