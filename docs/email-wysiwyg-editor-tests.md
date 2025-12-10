<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
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
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
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
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
>>>>>>> 12a7e2462 (.)
=======
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
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
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 66453ace (.)
=======
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 53eef8d8d (.)
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
- [Laravel Testing Documentation](https://laravel.com/project_docs/testing)
- [Dusk Documentation](https://laravel.com/project_docs/dusk)
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36321fcb (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fdb24863 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36ac4fc1 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> fbed41ac (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9cf0dc90 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> ee18dd92 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 66453ace (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> 47bbf2b1c (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36321fcb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fdb24863 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36ac4fc1 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
>>>>>>> fbed41ac (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 9cf0dc90 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f963d2c0 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 31f5d28f (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> ee18dd92 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 66453ace (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> 74eb2e964 (.)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 909e45af (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 4f042b88 (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 36321fcb (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> b99af5a8 (.)
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 998e6866b (.)
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> 909e45af (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> bb7e77c2 (.)
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 70175d0c4 (.)
=======
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> f3086887 (rebase 210)
>>>>>>> 74eb2e964 (.)
=======
=======
- [Laravel Testing Documentation](https://laravel.com/docs/testing)
- [Dusk Documentation](https://laravel.com/docs/dusk)
- [PHPUnit Documentation](https://phpunit.de/documentation.html) 
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 43dd68f4b (.)
