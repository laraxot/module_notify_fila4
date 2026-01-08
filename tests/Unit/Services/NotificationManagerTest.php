<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Services;

use Exception;
use Mockery;
use Modules\Notify\Actions\SendNotificationAction;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Services\NotificationManager;
use PHPUnit\Framework\TestCase;

class NotificationManagerTest extends TestCase
{
    private NotificationManager $notificationManager;

    protected function setUp(): void
    {
        parent::setUp();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        $this->notificationManager = new NotificationManager();
=======
        $this->notificationManager = new NotificationManager;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 9777d1b3 (.)
=======
        $this->notificationManager = new NotificationManager();
=======
=======
        $this->notificationManager = new NotificationManager();
=======
>>>>>>> d09cb759 (.)
=======
        $this->notificationManager = new NotificationManager();
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->notificationManager = new NotificationManager();
=======
        $this->notificationManager = new NotificationManager;
>>>>>>> a12f125f4a (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> b93ef594b4 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 3f537838 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 2941b0bd (.)
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    /** @test */
    public function it_can_send_notification_to_single_recipient(): void
    {
        $recipient = Mockery::mock('Illuminate\Database\Eloquent\Model');
        $templateCode = 'test_template';
        $data = ['key' => 'value'];
        $channels = ['email'];
        $options = ['priority' => 'high'];

        $template = Mockery::mock(NotificationTemplate::class);
        $template->shouldReceive('getAttribute')->with('code')->andReturn($templateCode);

        $action = Mockery::mock(SendNotificationAction::class);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 5fd545e4 (.)
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
=======
        $action->shouldReceive('execute')
            ->with($recipient, $templateCode, $data, $channels, $options)
            ->once();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 9777d1b3 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
=======
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
=======
>>>>>>> d09cb759 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
=======
        $action->shouldReceive('execute')
            ->with($recipient, $templateCode, $data, $channels, $options)
            ->once();
>>>>>>> a12f125f4a (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> b93ef594b4 (.)
=======
        $action->shouldReceive('execute')
            ->with($recipient, $templateCode, $data, $channels, $options)
            ->once();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 3f537838 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();
>>>>>>> 2941b0bd (.)

        app()->instance(SendNotificationAction::class, $action);

        $result = $this->notificationManager->send($recipient, $templateCode, $data, $channels, $options);

        $this->assertIsArray($result);
    }

    /** @test */
    public function it_can_send_notification_to_multiple_recipients(): void
    {
        $recipients = [
            Mockery::mock('Illuminate\Database\Eloquent\Model'),
            Mockery::mock('Illuminate\Database\Eloquent\Model'),
        ];
        $templateCode = 'test_template';
        $data = ['key' => 'value'];
        $channels = ['email'];
        $options = ['priority' => 'high'];

        $template = Mockery::mock(NotificationTemplate::class);
        $template->shouldReceive('getAttribute')->with('code')->andReturn($templateCode);

        $action = Mockery::mock(SendNotificationAction::class);
        $action->shouldReceive('execute')->times(2);

        app()->instance(SendNotificationAction::class, $action);

        $result = $this->notificationManager->sendMultiple($recipients, $templateCode, $data, $channels, $options);

        $this->assertIsArray($result);
        $this->assertCount(2, $result);
    }

    /** @test */
    public function it_can_get_template_by_code(): void
    {
        $code = 'test_template';

        $template = Mockery::mock(NotificationTemplate::class);
        $template->shouldReceive('getAttribute')->with('code')->andReturn($code);
        $template->shouldReceive('getAttribute')->with('is_active')->andReturn(true);

        $result = $this->notificationManager->getTemplate($code);

        $this->assertNull($result); // Mock non restituisce risultati reali
    }

    /** @test */
    public function it_can_get_templates_by_category(): void
    {
        $category = 'test_category';

        $result = $this->notificationManager->getTemplatesByCategory($category);

        $this->assertIsObject($result); // Collection
    }

    /** @test */
    public function it_throws_exception_when_template_not_found(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Template not found: invalid_template');

        $recipient = Mockery::mock('Illuminate\Database\Eloquent\Model');
        $templateCode = 'invalid_template';

        $this->notificationManager->send($recipient, $templateCode);
    }

    /** @test */
    public function it_has_required_methods(): void
    {
        $this->assertTrue(method_exists($this->notificationManager, 'send'));
        $this->assertTrue(method_exists($this->notificationManager, 'sendMultiple'));
        $this->assertTrue(method_exists($this->notificationManager, 'getTemplate'));
        $this->assertTrue(method_exists($this->notificationManager, 'getTemplatesByCategory'));
    }

    /** @test */
    public function it_returns_array_from_send_method(): void
    {
        $recipient = Mockery::mock('Illuminate\Database\Eloquent\Model');
        $templateCode = 'test_template';

        $action = Mockery::mock(SendNotificationAction::class);
        $action->shouldReceive('execute')->once();

        app()->instance(SendNotificationAction::class, $action);

        $result = $this->notificationManager->send($recipient, $templateCode);

        $this->assertIsArray($result);
    }

    /** @test */
    public function it_returns_array_from_send_multiple_method(): void
    {
        $recipients = [Mockery::mock('Illuminate\Database\Eloquent\Model')];
        $templateCode = 'test_template';

        $action = Mockery::mock(SendNotificationAction::class);
        $action->shouldReceive('execute')->once();

        app()->instance(SendNotificationAction::class, $action);

        $result = $this->notificationManager->sendMultiple($recipients, $templateCode);

        $this->assertIsArray($result);
    }
}
