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
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
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
>>>>>>> 36321fcb (.)
=======
>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 36321fcb (.)
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
=======
>>>>>>> 9c45d9bd (rebase 210)
>>>>>>> ce1853afd (.)
=======
>>>>>>> 7a142b4f5 (.)
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

>>>>>>> 36321fcb (.)
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
>>>>>>> fbed41ac (.)
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

>>>>>>> 36321fcb (.)
=======

>>>>>>> 712617d3 (.)
>>>>>>> laraxot/develop
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
- [Testing Guide](../../../docs/testing-guide.md)
- [CI/CD Pipeline](../../../docs/ci-cd.md)

## Vedi Anche
- [Laravel Testing](https://laravel.com/docs/testing)
- [PHPUnit Documentation](https://phpunit.de/documentation.html)
<<<<<<< HEAD
- [Pest PHP](https://pestphp.com/docs) 
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
=======
>>>>>>> ce89c8bb (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> cb85c538 (rebase 210)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 030c9674 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 9d67cabd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4f19d70d2 (.)
=======
=======
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 49639b815 (.)
=======
=======
>>>>>>> e0d9c9be (.)
>>>>>>> 968ed47cd (.)
=======
>>>>>>> e0836b102 (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
=======
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
=======
>>>>>>> db6bec044 (.)
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 49639b815 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> e0836b102 (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> db6bec044 (.)
>>>>>>> 75179b85 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 75179b85 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 161887a2 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> ee18dd92 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d3a8af4d5 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 888799d0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 503981fd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36321fcb (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7a2f131f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> fdb24863 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5d49e093a (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> bb00ab64 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36ac4fc1 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> c8b1c8bf (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 58816034 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 9cf0dc90 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 75179b85 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 9777d1b3 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> ba564870 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 503981fd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36321fcb (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7a2f131f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 712617d3 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13655a7ed (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 51182e3c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 1c0eb9c7 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3e757cee2 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 903e3e2cd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a0788fa28 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> efb0f8d9 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 52cd5f85 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> c5c038f2 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> bb00ab64 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 8c8937e7 (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36ac4fc1 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> c8b1c8bf (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 58816034 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 9cf0dc90 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 75179b85 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 161887a2 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> e7a9a2bf (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
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
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> c6c33175 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a115e2aad (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> db0bc148f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 503981fd (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 36321fcb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9cb55171f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2641c2944 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 7a2f131f (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
>>>>>>> 712617d3 (.)
=======
- [Pest PHP](https://pestphp.com/docs) 
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 301ad8b44 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> d3a8af4d5 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 9d67cabd (.)
>>>>>>> 4f19d70d2 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> db0bc148f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
>>>>>>> 49639b815 (.)
=======
>>>>>>> 70175d0c4 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 13655a7ed (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> cb85c538 (rebase 210)
>>>>>>> e0836b102 (.)
=======
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 5d49e093a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 17f6b8617 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 030c9674 (rebase 210)
>>>>>>> db6bec044 (.)
