<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

use Modules\Notify\Models\BaseModel;
use ReflectionClass;
use ReflectionMethod;
use Mockery;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Models\NotificationTemplateVersion;
use PHPUnit\Framework\TestCase;

class NotificationTemplateVersionTest extends TestCase
{
    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertInstanceOf(BaseModel::class, $version);
    }

    /** @test */
    public function it_uses_updater_trait(): void
    {
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

        $this->assertContains('Modules\Xot\Traits\Updater', $traits);
    }

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
        ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
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
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
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
        $casts = $version->getCasts();

        $this->assertIsArray($casts);
        $this->assertEquals('array', $casts['channels']);
        $this->assertEquals('array', $casts['variables']);
        $this->assertEquals('array', $casts['conditions']);
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertTrue(method_exists($version, 'template'));
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertTrue(method_exists($version, 'restore'));
    }

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
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
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

        $this->assertTrue(method_exists($version, 'restore'));

        // Verifica che il metodo restituisca NotificationTemplate
        $reflection = new ReflectionMethod($version, 'restore');
        $returnType = $reflection->getReturnType();

        $this->assertEquals(NotificationTemplate::class, $returnType->getName());
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertEquals('notification_template_versions', $version->getTable());
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertEquals('id', $version->getKeyName());
    }

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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertTrue($version->usesTimestamps());
    }

    /** @test */
    public function it_has_soft_deletes(): void
    {
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

        $this->assertContains('Illuminate\Database\Eloquent\Concerns\HasUuids', $traits);
    }

    /** @test */
    public function it_has_factory_trait(): void
    {
        $reflection = new ReflectionClass(NotificationTemplateVersion::class);
        $traits = $reflection->getTraitNames();

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
        $version = new NotificationTemplateVersion();
=======
        $version = new NotificationTemplateVersion;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
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

        $this->assertTrue(method_exists($version, 'media'));
    }
}
