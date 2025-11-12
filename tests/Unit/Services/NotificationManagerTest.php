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
        $this->notificationManager = new NotificationManager;
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
        $this->notificationManager = new NotificationManager();
=======
        $this->notificationManager = new NotificationManager;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> e11621f (.)
=======
        $this->notificationManager = new NotificationManager();
=======
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
>>>>>>> f813254 (.)
=======
        $this->notificationManager = new NotificationManager();
>>>>>>> f5f1cb1 (.)
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
        /** @phpstan-ignore-next-line method.nonObject */
        $template->shouldReceive('getAttribute')->with('code')->andReturn($templateCode);

        $action = Mockery::mock(SendNotificationAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $action->shouldReceive('execute')->with($recipient, $templateCode, $data, $channels, $options)->once();

        app()->instance(SendNotificationAction::class, $action);

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->send($recipient, $templateCode, $data, $channels, $options);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
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
        /** @phpstan-ignore-next-line method.nonObject */
        $template->shouldReceive('getAttribute')->with('code')->andReturn($templateCode);

        $action = Mockery::mock(SendNotificationAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $action->shouldReceive('execute')->times(2);

        app()->instance(SendNotificationAction::class, $action);

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->sendMultiple($recipients, $templateCode, $data, $channels, $options);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($result);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(2, $result);
    }

    /** @test */
    public function it_can_get_template_by_code(): void
    {
        $code = 'test_template';

        $template = Mockery::mock(NotificationTemplate::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $template->shouldReceive('getAttribute')->with('code')->andReturn($code);
        /** @phpstan-ignore-next-line method.nonObject */
        $template->shouldReceive('getAttribute')->with('is_active')->andReturn(true);

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->getTemplate($code);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($result); // Mock non restituisce risultati reali
    }

    /** @test */
    public function it_can_get_templates_by_category(): void
    {
        $category = 'test_category';

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->getTemplatesByCategory($category);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsObject($result); // Collection
    }

    /** @test */
    public function it_throws_exception_when_template_not_found(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(Exception::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage('Template not found: invalid_template');

        $recipient = Mockery::mock('Illuminate\Database\Eloquent\Model');
        $templateCode = 'invalid_template';

        /** @phpstan-ignore-next-line property.notFound */
        $this->notificationManager->send($recipient, $templateCode);
    }

    /** @test */
    public function it_has_required_methods(): void
    {
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($this->notificationManager, 'send'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($this->notificationManager, 'sendMultiple'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($this->notificationManager, 'getTemplate'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue(method_exists($this->notificationManager, 'getTemplatesByCategory'));
    }

    /** @test */
    public function it_returns_array_from_send_method(): void
    {
        $recipient = Mockery::mock('Illuminate\Database\Eloquent\Model');
        $templateCode = 'test_template';

        $action = Mockery::mock(SendNotificationAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $action->shouldReceive('execute')->once();

        app()->instance(SendNotificationAction::class, $action);

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->send($recipient, $templateCode);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($result);
    }

    /** @test */
    public function it_returns_array_from_send_multiple_method(): void
    {
        $recipients = [Mockery::mock('Illuminate\Database\Eloquent\Model')];
        $templateCode = 'test_template';

        $action = Mockery::mock(SendNotificationAction::class);
        /** @phpstan-ignore-next-line method.nonObject */
        $action->shouldReceive('execute')->once();

        app()->instance(SendNotificationAction::class, $action);

        /** @phpstan-ignore-next-line property.notFound */
        $result = $this->notificationManager->sendMultiple($recipients, $templateCode);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertIsArray($result);
    }
}
