<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\NotificationTemplate;
use Modules\Notify\Models\NotificationTemplateVersion;
use RuntimeException;
use Tests\TestCase;

class NotificationTemplateVersionBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_template_version_with_basic_information(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $versionData = [
            'template_id' => $template->id,
            'subject' => 'Versione 2.0 - Conferma Appuntamento',
            'body_html' => '<h1>Conferma Appuntamento</h1><p>Gentile {{patient_name}}, il suo appuntamento è confermato.</p>',
            'body_text' => 'Conferma Appuntamento\n\nGentile {{patient_name}}, il suo appuntamento è confermato.',
            'channels' => ['email', 'sms'],
            'variables' => ['patient_name', 'appointment_date', 'doctor_name'],
            'conditions' => ['is_confirmed' => true],
            'version' => '2.0',
            'change_notes' => 'Aggiornamento design e aggiunta variabile doctor_name',
        ];

        $version = NotificationTemplateVersion::create($versionData);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('notification_template_versions', [
            'id' => $version->id,
            'template_id' => $template->id,
            'subject' => 'Versione 2.0 - Conferma Appuntamento',
            'version' => '2.0',
            'change_notes' => 'Aggiornamento design e aggiunta variabile doctor_name',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('2.0', $version->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['email', 'sms'], $version->channels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['patient_name', 'appointment_date', 'doctor_name'], $version->variables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['is_confirmed' => true], $version->conditions);
    }

    /** @test */
    public function it_can_manage_template_version_relationships(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(NotificationTemplate::class, $version->template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($template->id, $version->template->id);
    }

    /** @test */
    public function it_can_restore_template_from_version(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create([
            'subject' => 'Versione Originale',
            'body_html' => '<p>Contenuto originale</p>',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'subject' => 'Versione Precedente',
            'body_html' => '<p>Contenuto versione precedente</p>',
            'body_text' => 'Contenuto versione precedente',
            'channels' => ['email'],
            'variables' => ['patient_name'],
            'conditions' => ['is_active' => true],
        ]);

        // Aggiorna il template corrente
        /** @phpstan-ignore-next-line method.nonObject */
        $template->update([
            'subject' => 'Versione Corrente',
            'body_html' => '<p>Contenuto corrente</p>',
        ]);

        // Restaura dalla versione
        /** @phpstan-ignore-next-line method.nonObject */
        $restoredTemplate = $version->restore();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Versione Precedente', $restoredTemplate->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('<p>Contenuto versione precedente</p>', $restoredTemplate->body_html);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Contenuto versione precedente', $restoredTemplate->body_text);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['email'], $restoredTemplate->channels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['patient_name'], $restoredTemplate->variables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['is_active' => true], $restoredTemplate->conditions);
    }

    /** @test */
    public function it_throws_exception_when_restoring_without_template(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => 99999, // Template inesistente
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(RuntimeException::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage('Template not found for version '.$version->id);

        /** @phpstan-ignore-next-line method.nonObject */
        $version->restore();
    }

    /** @test */
    public function it_can_manage_version_metadata(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.5',
            'change_notes' => 'Correzione bug nella formattazione email',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.5', $version->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Correzione bug nella formattazione email', $version->change_notes);
    }

    /** @test */
    public function it_can_handle_complex_channel_configurations(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $complexChannels = [
            'email' => [
                'enabled' => true,
                'priority' => 'high',
                'template' => 'email.confirmation',
            ],
            'sms' => [
                'enabled' => true,
                'priority' => 'normal',
                'max_length' => 160,
            ],
            'push' => [
                'enabled' => false,
                'priority' => 'low',
            ],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'channels' => $complexChannels,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($complexChannels, $version->channels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($version->channels['email']['enabled']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($version->channels['push']['enabled']);
    }

    /** @test */
    public function it_can_manage_conditional_logic(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $conditions = [
            'user_type' => ['patient', 'doctor'],
            'appointment_status' => 'confirmed',
            'notification_preference' => 'all',
            'time_zone' => 'Europe/Rome',
            'language' => ['it', 'en'],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'conditions' => $conditions,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($conditions, $version->conditions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('patient', $version->conditions['user_type']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('confirmed', $version->conditions['appointment_status']);
    }

    /** @test */
    public function it_can_handle_template_variables_validation(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $variables = [
            'required' => ['patient_name', 'appointment_date', 'doctor_name'],
            'optional' => ['clinic_address', 'phone_number'],
            'conditional' => ['emergency_contact', 'insurance_info'],
            'formatting' => [
                'date_format' => 'd/m/Y H:i',
                'currency' => 'EUR',
                'timezone' => 'Europe/Rome',
            ],
        ];

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'variables' => $variables,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($variables, $version->variables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('patient_name', $version->variables['required']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('d/m/Y H:i', $version->variables['formatting']['date_format']);
    }

    /** @test */
    public function it_can_manage_version_history(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        // Crea multiple versioni
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version1 = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.0',
            'change_notes' => 'Versione iniziale',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version2 = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.1',
            'change_notes' => 'Aggiunta variabile clinic_address',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version3 = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '2.0',
            'change_notes' => 'Rifattorizzazione completa del template',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $template->versions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.0', $version1->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.1', $version2->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('2.0', $version3->version);
    }

    /** @test */
    public function it_can_handle_version_rollback_scenarios(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create([
            'subject' => 'Versione Corrente',
            'body_html' => '<p>Contenuto corrente</p>',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $stableVersion = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.0',
            'subject' => 'Versione Stabile',
            'body_html' => '<p>Contenuto stabile</p>',
            'body_text' => 'Contenuto stabile',
            'channels' => ['email'],
            'variables' => ['patient_name'],
            'conditions' => ['is_active' => true],
        ]);

        // Simula un aggiornamento problematico
        /** @phpstan-ignore-next-line method.nonObject */
        $template->update([
            'subject' => 'Versione Problematica',
            'body_html' => '<p>Contenuto con bug</p>',
        ]);

        // Rollback alla versione stabile
        /** @phpstan-ignore-next-line method.nonObject */
        $restoredTemplate = $stableVersion->restore();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Versione Stabile', $restoredTemplate->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('<p>Contenuto stabile</p>', $restoredTemplate->body_html);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Contenuto stabile', $restoredTemplate->body_text);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['email'], $restoredTemplate->channels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['patient_name'], $restoredTemplate->variables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(['is_active' => true], $restoredTemplate->conditions);
    }

    /** @test */
    public function it_can_manage_version_metadata_and_tracking(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.2.3',
            'change_notes' => 'Hotfix per problema di formattazione SMS',
        ]);

        // Verifica che i metadati siano preservati
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.2.3', $version->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Hotfix per problema di formattazione SMS', $version->change_notes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->created_at);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->updated_at);
    }

    /** @test */
    public function it_can_handle_empty_or_null_values_gracefully(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = NotificationTemplate/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = NotificationTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'subject' => null,
            'body_html' => null,
            'body_text' => null,
            'channels' => null,
            'variables' => null,
            'conditions' => null,
            'change_notes' => null,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->body_html);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->body_text);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->channels);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->variables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->conditions);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->change_notes);
    }
}
