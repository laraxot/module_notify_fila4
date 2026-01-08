<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 36321fcb (.)
# Test del Sistema di Gestione Email - il progetto

## Panoramica

Documentazione completa dei test per il sistema di gestione email basato su database di il progetto.

## Test Unitari

### 1. MailTemplateTest

```php
namespace Modules\Notify\Tests\Unit;

use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MailTemplateTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_mail_template()
    {
        $template = MailTemplate::factory()->create([
            'name' => 'Test Template',
            'mailable' => 'TestMail',
            'locale' => 'it',
        ]);

        $this->assertDatabaseHas('notify_mail_templates', [
            'name' => 'Test Template',
            'mailable' => 'TestMail',
        ]);
    }

    /** @test */
    public function it_can_render_a_template_with_variables()
    {
        $template = MailTemplate::factory()->create([
            'html_template' => '<h1>Hello {{ $user->name }}</h1>',
            'variables' => ['user' => 'App\Models\User'],
        ]);

        $user = User::factory()->create(['name' => 'Test User']);
        
        $rendered = app(MailTemplateManager::class)
            ->renderTemplate($template, ['user' => $user]);

        $this->assertStringContainsString('Hello Test User', $rendered);
    }

    /** @test */
    public function it_validates_required_variables()
    {
        $template = MailTemplate::factory()->create([
            'variables' => ['user' => 'required|App\Models\User'],
        ]);

        $this->expectException(InvalidVariableException::class);
        
        app(MailTemplateManager::class)
            ->renderTemplate($template, []);
    }
}
```

### 2. MailTemplateManagerTest

```php
namespace Modules\Notify\Tests\Unit;

class MailTemplateManagerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_template_by_mailable_and_locale()
    {
        $template = MailTemplate::factory()->create([
            'mailable' => 'WelcomeMail',
            'locale' => 'it',
        ]);

        $found = app(MailTemplateManager::class)
            ->getTemplate('WelcomeMail', 'it');

        $this->assertEquals($template->id, $found->id);
    }

    /** @test */
    public function it_falls_back_to_default_locale()
    {
        $template = MailTemplate::factory()->create([
            'mailable' => 'WelcomeMail',
            'locale' => 'en',
        ]);

        app()->setLocale('it');

        $found = app(MailTemplateManager::class)
            ->getTemplate('WelcomeMail');

        $this->assertEquals($template->id, $found->id);
    }
}
```

## Test di Feature

### 1. MailTemplateResourceTest

```php
namespace Modules\Notify\Tests\Feature;

class MailTemplateResourceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_templates()
    {
        $templates = MailTemplate::factory()->count(3)->create();

        $response = $this->get(route('filament.resources.mail-templates.index'));

        $response->assertSuccessful();
        $templates->each(function ($template) use ($response) {
            $response->assertSee($template->name);
        });
    }

    /** @test */
    public function it_can_create_template()
    {
        $response = $this->post(route('filament.resources.mail-templates.create'), [
            'name' => 'New Template',
            'mailable' => 'TestMail',
            'locale' => 'it',
            'html_template' => '<h1>Test</h1>',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('notify_mail_templates', [
            'name' => 'New Template',
        ]);
    }
}
```

### 2. SendMailTemplateTest

```php
namespace Modules\Notify\Tests\Feature;

class SendMailTemplateTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_mail_using_template()
    {
        Mail::fake();

        $template = MailTemplate::factory()->create([
            'mailable' => WelcomeEmail::class,
        ]);

        $user = User::factory()->create();

        Mail::to($user)->send(new WelcomeEmail($user));

        Mail::assertSent(WelcomeEmail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }

    /** @test */
    public function it_tracks_mail_statistics()
    {
        $template = MailTemplate::factory()->create();
        $user = User::factory()->create();

        Mail::to($user)->send(new WelcomeEmail($user));

        $this->assertDatabaseHas('notify_mail_stats', [
            'template_id' => $template->id,
            'email' => $user->email,
            'status' => 'sent',
        ]);
    }
}
```

## Test di Integrazione

### 1. MailWorkflowTest

```php
namespace Modules\Notify\Tests\Integration;

class MailWorkflowTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function complete_mail_workflow()
    {
        // 1. Crea template
        $template = MailTemplate::factory()->create([
            'mailable' => AppointmentReminder::class,
        ]);

        // 2. Crea appuntamento
        $appointment = Appointment::factory()->create();

        // 3. Invia reminder
        Mail::fake();
        
        $this->artisan('notify:send-appointment-reminders');

        // 4. Verifica
        Mail::assertSent(AppointmentReminder::class);
        
        $this->assertDatabaseHas('notify_mail_stats', [
            'template_id' => $template->id,
            'status' => 'sent',
        ]);
    }
}
```

## Test di Performance

### 1. MailTemplatePerformanceTest

```php
namespace Modules\Notify\Tests\Performance;

class MailTemplatePerformanceTest extends TestCase
{
    /** @test */
    public function template_rendering_performance()
    {
        $template = MailTemplate::factory()->create([
            'html_template' => $this->getLargeTemplate(),
        ]);

        $start = microtime(true);

        for ($i = 0; $i < 100; $i++) {
            app(MailTemplateManager::class)->renderTemplate($template, [
                'user' => User::factory()->create(),
            ]);
        }

        $time = microtime(true) - $start;
        
        // Dovrebbe renderizzare 100 template in meno di 1 secondo
        $this->assertLessThan(1.0, $time);
    }

    /** @test */
    public function concurrent_mail_sending()
    {
        $template = MailTemplate::factory()->create();
        $users = User::factory()->count(50)->create();

        $start = microtime(true);

        // Invia 50 email concorrentemente
        $users->each(function ($user) {
            Mail::to($user)->queue(new WelcomeEmail($user));
        });

        $time = microtime(true) - $start;
        
        // L'accodamento dovrebbe essere rapido
        $this->assertLessThan(0.5, $time);
    }
}
```

## Test di Sicurezza

### 1. MailTemplateSecurity

```php
namespace Modules\Notify\Tests\Security;

class MailTemplateSecurityTest extends TestCase
{
    /** @test */
    public function it_prevents_xss_in_templates()
    {
        $template = MailTemplate::factory()->create([
            'html_template' => '<script>alert("xss")</script>{{ $name }}',
        ]);

        $rendered = app(MailTemplateManager::class)
            ->renderTemplate($template, ['name' => 'Test']);

        $this->assertStringNotContainsString('<script>', $rendered);
    }

    /** @test */
    public function it_validates_template_permissions()
    {
        $user = User::factory()->create();
        $template = MailTemplate::factory()->create();

        $response = $this->actingAs($user)
            ->put(route('filament.resources.mail-templates.edit', $template), [
                'html_template' => 'New content',
            ]);

        $response->assertForbidden();
    }
}
```

## Best Practices per i Test

1. **Isolamento**
   - Usa `RefreshDatabase` per test puliti
   - Evita dipendenze esterne
   - Usa factory per i dati di test

2. **Organizzazione**
   - Raggruppa test correlati
   - Usa descrizioni chiare
   - Segui convenzioni di naming

3. **Performance**
   - Minimizza query database
   - Usa transazioni quando possibile
   - Monitora tempi di esecuzione

4. **Manutenibilità**
   - DRY nei test helper
   - Documenta casi edge
   - Aggiorna con nuove feature

## Comandi per i Test

```bash
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======

>>>>>>> b19cd40 (.)
=======
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
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
=======
=======

>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
# Esegui tutti i test
php artisan test --filter=MailTemplate

# Test specifici
php artisan test --filter=MailTemplateTest
php artisan test --filter=MailTemplateManagerTest

# Con coverage
php artisan test --coverage --filter=MailTemplate
```

## Troubleshooting Test

1. **Test Falliti**
   - Verifica stato database
   - Controlla configurazione mail
   - Log dettagliati con `--verbose`

2. **Performance Lenta**
   - Usa `php artisan test --parallel`
   - Ottimizza factory
   - Riduci setup non necessario

3. **Errori Intermittenti**
   - Verifica race condition
   - Controlla timeout
   - Isola test problematici

## Collegamenti
- [Database Mail System](database-mail-system.md)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
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
>>>>>>> f963d2c0 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 36321fcb (.)
- [Testing Guide](../../../docs/testing-guide.md)
- [CI/CD Pipeline](../../../docs/ci-cd.md)

## Vedi Anche
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit Documentation](https://phpunit.de/documentation.html)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Pest PHP](https://pestphp.com/docs) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 9d67cabd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
- [Testing Guide](../../../project_docs/testing-guide.md)
- [CI/CD Pipeline](../../../project_docs/ci-cd.md)

## Vedi Anche
- [Laravel Testing](https://laravel.com/project_docs/testing)
- [PHPUnit Documentation](https://phpunit.de/documentation.html)
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
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> f963d2c0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> ee18dd92 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> e7a9a2bf (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
>>>>>>> ba564870 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 66453ace (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 2a97406c (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4f042b88 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36321fcb (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
