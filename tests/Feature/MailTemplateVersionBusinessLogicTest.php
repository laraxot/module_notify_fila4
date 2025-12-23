<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Models\MailTemplateVersion;
use RuntimeException;
use Tests\TestCase;

class MailTemplateVersionBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_mail_template_version_with_basic_information(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $versionData = [
            'template_id' => $template->id,
            'mailable' => 'AppointmentConfirmation',
            'subject' => 'Conferma Appuntamento - Versione 2.0',
            'html_template' => '<!DOCTYPE html><html><body><h1>Conferma Appuntamento</h1><p>Gentile {{patient_name}}, il suo appuntamento è confermato per il {{appointment_date}}.</p></body></html>',
            'text_template' => 'Conferma Appuntamento\n\nGentile {{patient_name}}, il suo appuntamento è confermato per il {{appointment_date}}.',
            'version' => '2.0',
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'change_notes' => 'Aggiornamento design email e aggiunta variabile appointment_date',
        ];

        $version = MailTemplateVersion::create($versionData);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('mail_template_versions', [
            'id' => $version->id,
            'template_id' => $template->id,
            'mailable' => 'AppointmentConfirmation',
            'subject' => 'Conferma Appuntamento - Versione 2.0',
            'version' => '2.0',
            'created_by' => 'admin@'.config('app.domain', 'example.com'),
            'change_notes' => 'Aggiornamento design email e aggiunta variabile appointment_date',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('2.0', $version->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('AppointmentConfirmation', $version->mailable);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{patient_name}}', $version->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{appointment_date}}', $version->text_template);
    }

    /** @test */
    public function it_can_manage_mail_template_version_relationships(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertInstanceOf(MailTemplate::class, $version->template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($template->id, $version->template->id);
    }

    /** @test */
    public function it_can_restore_mail_template_from_version(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create([
            'subject' => 'Versione Corrente',
            'html_template' => '<p>Template corrente</p>',
            'text_template' => 'Template corrente',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'subject' => 'Versione Precedente',
            'html_template' => '<p>Template versione precedente</p>',
            'text_template' => 'Template versione precedente',
        ]);

        // Aggiorna il template corrente
        /** @phpstan-ignore-next-line method.nonObject */
        $template->update([
            'subject' => 'Versione Aggiornata',
            'html_template' => '<p>Template aggiornato</p>',
            'text_template' => 'Template aggiornato',
        ]);

        // Restaura dalla versione
        /** @phpstan-ignore-next-line method.nonObject */
        $restoredTemplate = $version->restore();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Versione Precedente', $restoredTemplate->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('<p>Template versione precedente</p>', $restoredTemplate->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Template versione precedente', $restoredTemplate->text_template);
    }

    /** @test */
    public function it_throws_exception_when_restoring_without_template(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => 99999, // Template inesistente
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectException(RuntimeException::class);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->expectExceptionMessage('Template non trovato per questa versione');

        /** @phpstan-ignore-next-line method.nonObject */
        $version->restore();
    }

    /** @test */
    public function it_can_manage_version_metadata_and_tracking(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.5.2',
            'created_by' => 'developer@'.config('app.domain', 'example.com'),
            'change_notes' => 'Correzione bug nella formattazione HTML e ottimizzazione per mobile',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('1.5.2', $version->version);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('developer@'.config('app.domain', 'example.com'), $version->created_by);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(
            'Correzione bug nella formattazione HTML e ottimizzazione per mobile',
            $version->change_notes,
        );
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->created_at);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->updated_at);
    }

    /** @test */
    public function it_can_handle_complex_html_templates(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $complexHtmlTemplate = '
        <!DOCTYPE html>
        <html lang="it">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{{subject}}</title>
            <style>
                .header { background-color: #001F3F; color: white; padding: 20px; }
                .content { padding: 20px; }
                .footer { background-color: #f8f9fa; padding: 15px; text-align: center; }
            </style>
        </head>
        <body>
            <div class="header">
                <h1>{{clinic_name}}</h1>
            </div>
            <div class="content">
                <h2>{{subject}}</h2>
                <p>Gentile {{patient_name}},</p>
                <p>{{message}}</p>
                <ul>
                    <li><strong>Data:</strong> {{appointment_date}}</li>
                    <li><strong>Ora:</strong> {{appointment_time}}</li>
                    <li><strong>Dottore:</strong> {{doctor_name}}</li>
                </ul>
            </div>
            <div class="footer">
                <p>&copy; {{current_year}} {{clinic_name}}. Tutti i diritti riservati.</p>
            </div>
        </body>
        </html>';

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'html_template' => $complexHtmlTemplate,
            'version' => '3.0',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{clinic_name}}', $version->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{patient_name}}', $version->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{appointment_date}}', $version->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{doctor_name}}', $version->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('background-color: #001F3F', $version->html_template);
    }

    /** @test */
    public function it_can_handle_text_template_variants(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $textTemplate = '
        CONFERMA APPUNTAMENTO
        =====================
        
        Gentile {{patient_name}},
        
        Il suo appuntamento è confermato per:
        
        Data: {{appointment_date}}
        Ora: {{appointment_time}}
        Dottore: {{doctor_name}}
        Studio: {{clinic_name}}
        Indirizzo: {{clinic_address}}
        
        IMPORTANTE:
        - Arrivare 15 minuti prima dell\'appuntamento
        - Portare documenti di identità
        - In caso di cancellazione, avvisare almeno 24h prima
        
        Per modifiche o cancellazioni:
        Telefono: {{clinic_phone}}
        Email: {{clinic_email}}
        
        Cordiali saluti,
        {{clinic_name}}
        ';

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'text_template' => $textTemplate,
            'version' => '2.1',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{patient_name}}', $version->text_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{appointment_date}}', $version->text_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{doctor_name}}', $version->text_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('{{clinic_name}}', $version->text_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertStringContainsString('Arrivare 15 minuti prima', $version->text_template);
    }

    /** @test */
    public function it_can_manage_version_history_and_rollback(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create([
            'subject' => 'Versione Corrente',
            'html_template' => '<p>Template corrente</p>',
            'text_template' => 'Template corrente',
        ]);

        // Crea multiple versioni
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version1 = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.0',
            'subject' => 'Versione Iniziale',
            'html_template' => '<p>Template iniziale</p>',
            'text_template' => 'Template iniziale',
            'change_notes' => 'Prima versione del template',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version2 = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '1.1',
            'subject' => 'Versione 1.1',
            'html_template' => '<p>Template versione 1.1</p>',
            'text_template' => 'Template versione 1.1',
            'change_notes' => 'Aggiunta variabile clinic_address',
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version3 = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'version' => '2.0',
            'subject' => 'Versione 2.0',
            'html_template' => '<p>Template versione 2.0</p>',
            'text_template' => 'Template versione 2.0',
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

        // Test rollback alla versione 1.1
        /** @phpstan-ignore-next-line method.nonObject */
        $restoredTemplate = $version2->restore();
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Versione 1.1', $restoredTemplate->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('<p>Template versione 1.1</p>', $restoredTemplate->html_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Template versione 1.1', $restoredTemplate->text_template);
    }

    /** @test */
    public function it_can_handle_mailable_class_management(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $mailableClasses = [
            'AppointmentConfirmation',
            'AppointmentReminder',
            'AppointmentCancellation',
            'PatientRegistration',
            'PasswordReset',
            'NewsletterSubscription',
        ];

        foreach ($mailableClasses as $index => $mailableClass) {
            /** @var \Illuminate\Database\Eloquent\Collection */
            $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
                'template_id' => $template->id,
                'mailable' => $mailableClass,
                'version' => '1.'.$index,
                'subject' => 'Template per '.$mailableClass,
                'html_template' => '<p>Template per '.$mailableClass.'</p>',
            ]);

            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertEquals($mailableClass, $version->mailable);
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertEquals('Template per '.$mailableClass, $version->subject);
        }
    }

    /** @test */
    public function it_can_manage_soft_deletes(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
        ]);

        // Verifica che il modello supporti soft delete
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($version->trashed() === false);

        // Soft delete
        /** @phpstan-ignore-next-line method.nonObject */
        $version->delete();

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($version->trashed());
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('mail_template_versions', [
            'id' => $version->id,
            'deleted_at' => $version->deleted_at,
        ]);

        // Restore
        /** @phpstan-ignore-next-line method.nonObject */
        $version->restore();
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($version->trashed());
    }

    /** @test */
    public function it_can_handle_empty_or_null_values_gracefully(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'subject' => null,
            'text_template' => null,
            'change_notes' => null,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->subject);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->text_template);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($version->change_notes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->html_template); // Campo obbligatorio
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($version->version); // Campo obbligatorio
    }

    /** @test */
    public function it_can_validate_template_variable_consistency(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $htmlTemplate = '<p>Gentile {{patient_name}}, il suo appuntamento è confermato per il {{appointment_date}} con il dottore {{doctor_name}}.</p>';
        $textTemplate = 'Gentile {{patient_name}}, il suo appuntamento è confermato per il {{appointment_date}} con il dottore {{doctor_name}}.';

        /** @var \Illuminate\Database\Eloquent\Collection */
        $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
            'template_id' => $template->id,
            'html_template' => $htmlTemplate,
            'text_template' => $textTemplate,
            'version' => '1.0',
        ]);

        // Verifica che le variabili siano consistenti tra HTML e testo
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $htmlVariables = $this->extractVariables($htmlTemplate);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $textVariables = $this->extractVariables($textTemplate);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($htmlVariables, $textVariables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('patient_name', $htmlVariables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('appointment_date', $htmlVariables);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('doctor_name', $htmlVariables);
    }

    /** @test */
    public function it_can_manage_version_numbering_schemes(): void
    {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $template = MailTemplate/** @phpstan-ignore-line */ ::factory()->create();

        $versionSchemes = [
            '1.0' => 'Versione iniziale',
            '1.1' => 'Correzione bug minori',
            '1.2.1' => 'Hotfix critico',
            '2.0' => 'Rifattorizzazione completa',
            '2.1.3' => 'Aggiornamento sicurezza',
            '3.0.0' => 'Nuova versione major',
        ];

        foreach ($versionSchemes as $versionNumber => $description) {
            /** @var \Illuminate\Database\Eloquent\Collection */
            $version = MailTemplateVersion/** @phpstan-ignore-line */ ::factory()->create([
                'template_id' => $template->id,
                'version' => $versionNumber,
                'change_notes' => $description,
            ]);

            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertEquals($versionNumber, $version->version);
            /** @phpstan-ignore-next-line property.notFound, method.nonObject */
            $this->assertEquals($description, $version->change_notes);
        }
    }

    /**
     * Estrae le variabili da un template (metodo helper per i test)
     */
    private function extractVariables(string $template): array
    {
        preg_match_all('/\{\{([^}]+)\}\}/', $template, $matches);

        /** @phpstan-ignore-next-line offsetAccess.nonOffsetAccessible */
        return array_unique($matches[1] ?? []);
    }
}
