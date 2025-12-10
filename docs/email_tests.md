<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
# Test Sistema Email - il progetto

## Panoramica

Test suite per il sistema di email in il progetto.

## Test Unitari

### 1. Test Template

```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;

class MailTemplateTest extends TestCase
{
    /** @test */
    public function it_can_create_template()
    {
        $template = MailTemplate::factory()->create([
            'name' => 'Test Template',
            'type' => 'test',
            'content' => 'Hello {{name}}',
        ]);

        $this->assertEquals('Test Template', $template->name);
        $this->assertEquals('test', $template->type);
        $this->assertEquals('Hello {{name}}', $template->content);
    }

    /** @test */
    public function it_can_get_placeholders()
    {
        $template = MailTemplate::factory()->create([
            'content' => 'Hello {{name}}, your appointment is on {{date}}',
        ]);

        $placeholders = $template->getPlaceholders();

        $this->assertCount(2, $placeholders);
        $this->assertContains('name', $placeholders);
        $this->assertContains('date', $placeholders);
    }

    /** @test */
    public function it_can_validate_placeholders()
    {
        $template = MailTemplate::factory()->create([
            'content' => 'Hello {{name}}',
        ]);

        $this->assertTrue($template->validatePlaceholders(['name' => 'John']));
        $this->assertFalse($template->validatePlaceholders([]));
    }
}
```

### 2. Test Notifiche

```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Notifications\GenericNotification;
use Modules\Notify\Models\MailTemplate;

class NotificationTest extends TestCase
{
    /** @test */
    public function it_can_create_notification()
    {
        $template = MailTemplate::factory()->create();
        $data = ['name' => 'John'];

        $notification = new GenericNotification($template, $data);

        $this->assertEquals($template, $notification->getTemplate());
        $this->assertEquals($data, $notification->getData());
    }

    /** @test */
    public function it_can_send_notification()
    {
        $template = MailTemplate::factory()->create();
        $data = ['name' => 'John'];
        $notification = new GenericNotification($template, $data);

        $user = User::factory()->create();

        Notification::fake();
        $user->notify($notification);

        Notification::assertSentTo(
            $user,
            GenericNotification::class,
            function ($notification) use ($template, $data) {
                return $notification->getTemplate()->id === $template->id
                    && $notification->getData() === $data;
            }
        );
    }
}
```

## Test Feature

### 1. Test Editor

```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Modules\Notify\Livewire\EmailEditor;

class EmailEditorTest extends TestCase
{
    /** @test */
    public function it_can_render_editor()
    {
        Livewire::test(EmailEditor::class)
            ->assertSee('Editor')
            ->assertSee('Preview');
    }

    /** @test */
    public function it_can_update_content()
    {
        Livewire::test(EmailEditor::class)
            ->set('content', 'Hello {{name}}')
            ->assertSet('content', 'Hello {{name}}')
            ->assertSee('Hello {{name}}');
    }

    /** @test */
    public function it_can_validate_content()
    {
        Livewire::test(EmailEditor::class)
            ->set('content', 'Hello {{name}}')
            ->call('validate')
            ->assertHasNoErrors();

        Livewire::test(EmailEditor::class)
            ->set('content', 'Hello {{invalid}}')
            ->call('validate')
            ->assertHasErrors(['content']);
    }
}
```

### 2. Test Resource

```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Modules\Notify\Filament\Resources\MailTemplateResource;

class MailTemplateResourceTest extends TestCase
{
    /** @test */
    public function it_can_list_templates()
    {
        $this->get(route('filament.resources.mail-templates.index'))
            ->assertSuccessful()
            ->assertSee('Templates');
    }

    /** @test */
    public function it_can_create_template()
    {
        $this->post(route('filament.resources.mail-templates.create'), [
            'name' => 'Test Template',
            'type' => 'test',
            'content' => 'Hello {{name}}',
        ])->assertSuccessful();

        $this->assertDatabaseHas('mail_templates', [
            'name' => 'Test Template',
            'type' => 'test',
        ]);
    }

    /** @test */
    public function it_can_edit_template()
    {
        $template = MailTemplate::factory()->create();

        $this->put(route('filament.resources.mail-templates.edit', $template), [
            'name' => 'Updated Template',
            'content' => 'Hello {{name}}',
        ])->assertSuccessful();

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'name' => 'Updated Template',
        ]);
    }
}
```

## Test Browser

### 1. Test UI

```php
namespace Modules\Notify\Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class EmailEditorTest extends DuskTestCase
{
    /** @test */
    public function it_can_use_editor()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/mail-templates/create')
                ->type('name', 'Test Template')
                ->type('content', 'Hello {{name}}')
                ->click('@save-button')
                ->assertSee('Template created');
        });
    }

    /** @test */
    public function it_can_preview_template()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/mail-templates/1')
                ->click('@preview-button')
                ->assertSee('Preview')
                ->assertSee('Hello John');
        });
    }

    /** @test */
    public function it_can_send_test_email()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/mail-templates/1')
                ->click('@test-button')
                ->type('email', 'test@example.com')
                ->click('@send-button')
                ->assertSee('Test email sent');
        });
    }
}
```

## Test Performance

### 1. Test Caricamento

```php
namespace Modules\Notify\Tests\Performance;

use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;

class EmailPerformanceTest extends TestCase
{
    /** @test */
    public function it_can_handle_large_templates()
    {
        $template = MailTemplate::factory()->create([
            'content' => str_repeat('Hello {{name}}', 1000),
        ]);

        $start = microtime(true);
        $template->render(['name' => 'John']);
        $end = microtime(true);

        $this->assertLessThan(1, $end - $start);
    }

    /** @test */
    public function it_can_handle_concurrent_requests()
    {
        $template = MailTemplate::factory()->create();

        $start = microtime(true);
        
        $promises = [];
        for ($i = 0; $i < 100; $i++) {
            $promises[] = async(function () use ($template) {
                return $template->render(['name' => 'John']);
            });
        }
        
        await($promises);
        
        $end = microtime(true);

        $this->assertLessThan(5, $end - $start);
    }
}
```

## Test Security

### 1. Test XSS

```php
namespace Modules\Notify\Tests\Security;

use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;

class EmailSecurityTest extends TestCase
{
    /** @test */
    public function it_prevents_xss()
    {
        $template = MailTemplate::factory()->create([
            'content' => 'Hello {{name}}',
        ]);

        $content = $template->render([
            'name' => '<script>alert("xss")</script>',
        ]);

        $this->assertStringNotContainsString('<script>', $content);
    }

    /** @test */
    public function it_validates_file_uploads()
    {
        $template = MailTemplate::factory()->create();

        $response = $this->post(route('mail-templates.upload'), [
            'file' => UploadedFile::fake()->image('test.jpg'),
        ]);

        $response->assertSuccessful();

        $response = $this->post(route('mail-templates.upload'), [
            'file' => UploadedFile::fake()->create('test.php'),
        ]);

        $response->assertStatus(422);
    }
}
```

## Best Practices

### 1. Test Coverage

```php
namespace Modules\Notify\Tests;

class TestCoverage
{
    public function getCoverage(): array
    {
        return [
            'models' => [
                'MailTemplate' => 100,
                'MailStat' => 100,
                'MailLink' => 100,
            ],
            'notifications' => [
                'GenericNotification' => 100,
                'AppointmentNotification' => 100,
                'PaymentNotification' => 100,
            ],
            'services' => [
                'MailTemplateManager' => 100,
                'MailTrackingService' => 100,
                'MailAnalyticsService' => 100,
            ],
        ];
    }
}
```

### 2. Test Data

```php
namespace Modules\Notify\Tests;

class TestData
{
    public static function getTemplates(): array
    {
        return [
            'appointment' => [
                'name' => 'Appointment Confirmation',
                'type' => 'appointment',
                'content' => 'Hello {{name}}, your appointment is on {{date}}',
            ],
            'payment' => [
                'name' => 'Payment Confirmation',
                'type' => 'payment',
                'content' => 'Hello {{name}}, payment of {{amount}} received',
            ],
        ];
    }

    public static function getTestData(): array
    {
        return [
            'appointment' => [
                'name' => 'John Doe',
                'date' => '2024-03-20',
            ],
            'payment' => [
                'name' => 'John Doe',
                'amount' => '100.00',
            ],
        ];
    }
}
```

## Collegamenti
- [Editor WYSIWYG](email-wysiwyg-editor.md)
- [Database Mail System](database-mail-system.md)
- [Email Plugins Analysis](email-plugins-analysis.md)

## Vedi Anche
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 31f5d28f (.)
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> cccb594f (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> cccb594f (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/project_docs/dusk) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit](https://phpunit.de/)
- [Laravel Dusk](https://laravel.com/docs/dusk) 
>>>>>>> a404ea71 (.)
