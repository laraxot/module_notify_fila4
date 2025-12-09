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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
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
>>>>>>> ce89c8bb (.)
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
        ];

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
=======
>>>>>>> origin/develop
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 3f39ac8b (.)
            'template_id', 'subject', 'body_html', 'body_text', 'channels',
            'variables', 'conditions', 'version', 'created_by', 'change_notes',
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
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
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
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 677a6ab7 (.)
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
>>>>>>> 69fa7d37 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 2fc60436 (.)
        ];

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 6608a1a0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 909e45af (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 6608a1a0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 909e45af (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> ce26f84e (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> d13ead25 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> ce26f84e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 0db165c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 4689a827 (.)
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
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 888799d0 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> fd497554 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 3d542a31 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
        ];

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
=======
>>>>>>> origin/develop
            'template_id', 'subject', 'body_html', 'body_text', 'channels',
            'variables', 'conditions', 'version', 'created_by', 'change_notes',
        ];

<<<<<<< HEAD
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> a12f125f4a (.)
=======
        ];

        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> b93ef594b4 (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
=======
<<<<<<< HEAD
>>>>>>> 7cf73d1 (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 31bdf6b (.)
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 23161eb (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
=======
=======
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 9777d1b (.)
<<<<<<< HEAD
>>>>>>> 58816034 (.)
=======
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
<<<<<<< HEAD
>>>>>>> 9cf0dc90 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
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
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 888799d0 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> fd497554 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 909e45af (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> a29a4728 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 2effe245 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 98d837b9 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 2effe245 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> d09cb759 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> 4689a827 (.)
=======
        $version = new NotificationTemplateVersion();
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 98d837b9 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 98d837b9 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 58816034 (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)

        $this->assertTrue(method_exists($version, 'media'));
    }
}
