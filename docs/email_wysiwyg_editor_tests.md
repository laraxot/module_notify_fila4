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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> laraxot/develop
# Test Editor WYSIWYG Email - il progetto

## Test Unitari

### 1. EmailEditor Component

```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Filament\Forms\Components\EmailEditor;

class EmailEditorTest extends TestCase
{
    /** @test */
    public function it_sanitizes_html_input()
    {
        $editor = new EmailEditor('html_template');
        
        $dirtyHtml = '<script>alert("xss")</script><p>Test</p>';
        $cleanHtml = $editor->sanitizeHtml($dirtyHtml);
        
        $this->assertStringNotContainsString('<script>', $cleanHtml);
        $this->assertStringContainsString('<p>Test</p>', $cleanHtml);
    }

    /** @test */
    public function it_handles_state_hydration()
    {
        $editor = new EmailEditor('html_template');
        $state = '<p>Test</p>';
        
        $editor->state($state);
        
        $this->assertEquals($state, $editor->getState());
    }
}
```

### 2. Block Components

```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Filament\Forms\Components\Blocks\ButtonBlock;
use Modules\Notify\Filament\Forms\Components\Blocks\ImageBlock;

class BlockComponentsTest extends TestCase
{
    /** @test */
    public function button_block_validates_required_fields()
    {
        $block = ButtonBlock::make();
        
        $this->assertTrue($block->getSchema()->get('text')->isRequired());
        $this->assertTrue($block->getSchema()->get('url')->isRequired());
    }

    /** @test */
    public function image_block_validates_file_upload()
    {
        $block = ImageBlock::make();
        
        $this->assertTrue($block->getSchema()->get('image')->isRequired());
        $this->assertTrue($block->getSchema()->get('image')->isImage());
    }
}
```

## Test Feature

### 1. Editor Integration

```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Modules\Notify\Filament\Resources\MailTemplateResource;

class EditorIntegrationTest extends TestCase
{
    /** @test */
    public function it_updates_preview_on_content_change()
    {
        Livewire::test(MailTemplateResource::class)
            ->set('html_template', '<p>Test</p>')
            ->assertSet('preview', function ($preview) {
                return str_contains($preview, '<p>Test</p>');
            });
    }

    /** @test */
    public function it_validates_template_structure()
    {
        Livewire::test(MailTemplateResource::class)
            ->set('html_template', '<invalid>')
            ->call('save')
            ->assertHasErrors(['html_template']);
    }
}
```

### 2. Component Actions

```php
namespace Modules\Notify\Tests\Feature;

use Tests\TestCase;
use Livewire\Livewire;
use Modules\Notify\Models\MailTemplate;

class ComponentActionsTest extends TestCase
{
    /** @test */
    public function it_sends_test_email()
    {
        $template = MailTemplate::factory()->create();
        
        Livewire::test(MailTemplateResource::class)
            ->call('test', [
                'email' => 'test@example.com',
                'template_id' => $template->id
            ])
            ->assertEmitted('test-email-sent');
    }

    /** @test */
    public function it_duplicates_template()
    {
        $template = MailTemplate::factory()->create();
        
        Livewire::test(MailTemplateResource::class)
            ->call('duplicate', $template->id)
            ->assertEmitted('template-duplicated');
            
        $this->assertDatabaseCount('mail_templates', 2);
    }
}
```

## Test Browser

### 1. Editor UI

```php
namespace Modules\Notify\Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class EditorUITest extends DuskTestCase
{
    /** @test */
    public function it_renders_editor_interface()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/mail-templates/create')
                ->assertSee('Editor')
                ->assertSee('Preview')
                ->assertSee('Components');
        });
    }

    /** @test */
    public function it_handles_drag_and_drop()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/mail-templates/create')
                ->drag('.component-button', '.editor-content')
                ->assertSee('Button Component');
        });
    }
}
```

### 2. Preview Functionality

```php
namespace Modules\Notify\Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class PreviewTest extends DuskTestCase
{
    /** @test */
    public function it_updates_preview_in_real_time()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/mail-templates/create')
                ->type('@editor', '<p>Test</p>')
                ->assertSeeIn('@preview', 'Test');
        });
    }

    /** @test */
    public function it_shows_mobile_preview()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/mail-templates/create')
                ->click('@mobile-preview')
                ->assertSee('Mobile Preview');
        });
    }
}
```

## Test Performance

### 1. Editor Performance

```php
namespace Modules\Notify\Tests\Performance;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class EditorPerformanceTest extends TestCase
{
    /** @test */
    public function it_handles_large_templates()
    {
        $start = microtime(true);
        
        $editor = new EmailEditor('html_template');
        $editor->state($this->getLargeTemplate());
        
        $time = microtime(true) - $start;
        
        $this->assertLessThan(1.0, $time);
    }

    /** @test */
    public function it_optimizes_image_uploads()
    {
        $start = microtime(true);
        
        $manager = new EmailAssetManager();
        $manager->uploadImage($this->getLargeImage());
        
        $time = microtime(true) - $start;
        
        $this->assertLessThan(2.0, $time);
    }
}
```

### 2. Preview Performance

```php
namespace Modules\Notify\Tests\Performance;

use Tests\TestCase;
use Illuminate\Support\Facades\Cache;

class PreviewPerformanceTest extends TestCase
{
    /** @test */
    public function it_caches_preview_rendering()
    {
        $start = microtime(true);
        
        $preview = new EmailPreview('preview');
        $preview->renderPreview($this->getTemplate());
        
        $time = microtime(true) - $start;
        
        $this->assertLessThan(0.5, $time);
        $this->assertTrue(Cache::has('preview_' . md5($this->getTemplate())));
    }
}
```

## Test Security

### 1. XSS Prevention

```php
namespace Modules\Notify\Tests\Security;

use Tests\TestCase;

class XSSPreventionTest extends TestCase
{
    /** @test */
    public function it_prevents_xss_attacks()
    {
        $editor = new EmailEditor('html_template');
        
        $maliciousInput = [
            '<script>alert("xss")</script>',
            '<img src="x" onerror="alert(\'xss\')">',
            '<a href="javascript:alert(\'xss\')">Click</a>'
        ];
        
        foreach ($maliciousInput as $input) {
            $clean = $editor->sanitizeHtml($input);
            $this->assertStringNotContainsString('script', $clean);
            $this->assertStringNotContainsString('javascript:', $clean);
        }
    }
}
```

### 2. File Upload Security

```php
namespace Modules\Notify\Tests\Security;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class FileUploadSecurityTest extends TestCase
{
    /** @test */
    public function it_validates_uploaded_files()
    {
        $manager = new EmailAssetManager();
        
        $invalidFiles = [
            UploadedFile::fake()->create('test.exe', 100),
            UploadedFile::fake()->create('test.php', 100),
            UploadedFile::fake()->image('test.jpg')->size(10000)
        ];
        
        foreach ($invalidFiles as $file) {
            $this->expectException(\Exception::class);
            $manager->uploadImage($file);
        }
    }
}
```

## Collegamenti
- [Editor WYSIWYG](email-wysiwyg-editor.md)
- [Database Mail System](database-mail-system.md)
- [Email Plugins Analysis](email-plugins-analysis.md)

## Vedi Anche
<<<<<<< HEAD
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 84082535 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 5b50927d (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2effe245 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> d45a0226 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> cb5f23b0 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4b544042 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> cccb594f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 84082535 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 5b50927d (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2effe245 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> d45a0226 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> cb5f23b0 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4b544042 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> cccb594f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 3f537838 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a404ea71 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 2941b0bd (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4c323e61 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 98d837b9 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> a29a4728 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 4e4a7796 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> c7a4727b (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 116df547 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> 1442e291 (rebase 210)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
