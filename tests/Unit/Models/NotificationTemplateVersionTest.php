<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
>>>>>>> 1487fe812 (.)
=======
>>>>>>> bf5d31b0f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6d2af2b31 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
<<<<<<< HEAD
>>>>>>> 2ba4e5540 (.)
=======
<<<<<<< HEAD
>>>>>>> 08ae27d78 (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
<<<<<<< HEAD
>>>>>>> 4bec160e6 (.)
=======
<<<<<<< HEAD
>>>>>>> ce64082e3 (.)
=======
<<<<<<< HEAD
>>>>>>> 01af324fe (.)
=======
<<<<<<< HEAD
>>>>>>> 8c6d84fe6 (.)
=======
<<<<<<< HEAD
>>>>>>> 2d4267d82 (.)
=======
<<<<<<< HEAD
>>>>>>> 21e1a74cb (.)
=======
<<<<<<< HEAD
>>>>>>> 2f135ef98 (.)
=======
<<<<<<< HEAD
>>>>>>> 998e6866b (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
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
>>>>>>> ce89c8bb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
        ];

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2f135ef98 (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 207ac35e (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
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
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
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
=======
>>>>>>> 69fa7d37 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 2fc60436 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 6608a1a0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> e2f1a4045 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 01af324fe (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
>>>>>>> 31f5d28f (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> a404ea71 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
<<<<<<< HEAD
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 367c6ceb (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> d13ead25 (.)
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
=======
>>>>>>> 2ba4e5540 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> ce26f84e (.)
=======
>>>>>>> 2d4267d82 (.)
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 0db165c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 2d4267d82 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 367c6ceb (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 08fd62df (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b207a9b1a (.)
=======
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion)->getFillable());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
>>>>>>> 6ba141fc (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 36ac4fc1 (.)
=======
=======
>>>>>>> 2effe245 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 677a6ab7 (.)
        $this->assertEquals($expectedFillable, (new NotificationTemplateVersion())->getFillable());
=======
<<<<<<< HEAD
>>>>>>> 7cf73d1 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 677a6ab7 (.)
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 677a6ab7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
<<<<<<< HEAD
>>>>>>> 677a6ab7 (.)
=======
=======
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 58816034 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
>>>>>>> 9777d1b (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
=======
        $model = new NotificationTemplateVersion();
        $this->assertEquals($expectedFillable, $model->getFillable());
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 518c702 (.)
>>>>>>> f963d2c (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
>>>>>>> d13ead25 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 3d542a31 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
>>>>>>> 985c7bda (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31bdf6b (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 677a6ab7 (.)
=======
=======
>>>>>>> 75179b8 (.)
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
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c2 (.)
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
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 0f81dc21 (.)
=======
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce26f84e (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 7d903672 (.)
<<<<<<< HEAD
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
=======
>>>>>>> d13ead25 (.)
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 3d542a31 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 12a7e2462 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 1fd232c7 (.)
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
=======
>>>>>>> 367c6ceb (.)
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
        $this->assertEquals($expectedFillable, new NotificationTemplateVersion()->getFillable());
>>>>>>> 0f81dc21 (.)
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
>>>>>>> ce26f84e (.)
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertTrue(method_exists($version, 'template'));
    }

    /** @test */
    public function it_has_restore_method(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertTrue(method_exists($version, 'restore'));
    }

    /** @test */
    public function restore_method_returns_notification_template(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
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
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

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
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertEquals('notification_template_versions', $version->getTable());
    }

    /** @test */
    public function it_has_primary_key(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertEquals('id', $version->getKeyName());
    }

    /** @test */
    public function it_uses_timestamps(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

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
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertTrue(method_exists($version, 'creator'));
        $this->assertTrue(method_exists($version, 'updater'));
    }

    /** @test */
    public function it_has_media_relationship(): void
    {
<<<<<<< HEAD
        $version = new NotificationTemplateVersion();
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
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
        $version = new NotificationTemplateVersion();
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $version = new NotificationTemplateVersion();
>>>>>>> 888799d0 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)

        $this->assertTrue(method_exists($version, 'media'));
    }
}
=======
>>>>>>> 301ad8b44 (.)
