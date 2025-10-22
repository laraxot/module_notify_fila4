<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Contact;
use Modules\Notify\Models\ContactGroup;
use Tests\TestCase;

use function Safe\json_encode;

class ContactManagementBusinessLogicTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_contact_with_basic_information(): void
    {
        // Arrange
        $contactData = [
            'name' => 'Mario Rossi',
            'email' => 'mario.rossi@example.com',
            'phone' => '+39 123 456 7890',
            'company' => 'Studio Dentistico Milano',
            'is_active' => true,
        ];

        // Act
        $contact = Contact::create($contactData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'name' => 'Mario Rossi',
            'email' => 'mario.rossi@example.com',
            'phone' => '+39 123 456 7890',
            'company' => 'Studio Dentistico Milano',
            'is_active' => true,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Mario Rossi', $contact->name);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('mario.rossi@example.com', $contact->email);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->is_active);
    }

    /** @test */
    public function it_can_create_contact_group(): void
    {
        // Arrange
        $groupData = [
            'name' => 'Dottori Specialisti',
            'description' => 'Gruppo per dottori specialisti',
            'is_active' => true,
        ];

        // Act
        $group = ContactGroup::create($groupData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contact_groups', [
            'id' => $group->id,
            'name' => 'Dottori Specialisti',
            'description' => 'Gruppo per dottori specialisti',
            'is_active' => true,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Dottori Specialisti', $group->name);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Gruppo per dottori specialisti', $group->description);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($group->is_active);
    }

    /** @test */
    public function it_can_manage_contact_notification_preferences(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $preferences = [
            'email' => true,
            'sms' => false,
            'push' => true,
            'frequency' => 'daily',
            'quiet_hours' => [
                'start' => '22:00',
                'end' => '08:00',
            ],
            'timezone' => 'Europe/Rome',
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['preferences' => $preferences]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'preferences' => json_encode($preferences),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->preferences['email']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($contact->fresh()->preferences['sms']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->preferences['push']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('daily', $contact->fresh()->preferences['frequency']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('22:00', $contact->fresh()->preferences['quiet_hours']['start']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('08:00', $contact->fresh()->preferences['quiet_hours']['end']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Europe/Rome', $contact->fresh()->preferences['timezone']);
    }

    /** @test */
    public function it_can_manage_contact_demographics(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $demographics = [
            'age' => 35,
            'gender' => 'M',
            'location' => 'Milano, Italia',
            'language' => 'it',
            'interests' => ['dentistry', 'healthcare', 'technology'],
            'profession' => 'Dentist',
            'experience_years' => 8,
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['demographics' => $demographics]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'demographics' => json_encode($demographics),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(35, $contact->fresh()->demographics['age']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('M', $contact->fresh()->demographics['gender']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Milano, Italia', $contact->fresh()->demographics['location']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('it', $contact->fresh()->demographics['language']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('dentistry', $contact->fresh()->demographics['interests']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Dentist', $contact->fresh()->demographics['profession']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(8, $contact->fresh()->demographics['experience_years']);
    }

    /** @test */
    public function it_can_manage_contact_communication_history(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $communicationHistory = [
            [
                'type' => 'email',
                'subject' => 'Benvenuto su '.config('app.name', 'Our Platform'),
                'sent_at' => now()->subDays(5)->toISOString(),
                'status' => 'delivered',
                'opened' => true,
                'clicked' => false,
            ],
            [
                'type' => 'sms',
                'message' => 'Promemoria appuntamento domani',
                'sent_at' => now()->subDays(2)->toISOString(),
                'status' => 'delivered',
                'opened' => true,
                'clicked' => true,
            ],
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['communication_history' => $communicationHistory]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'communication_history' => json_encode($communicationHistory),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(2, $contact->fresh()->communication_history);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('email', $contact->fresh()->communication_history[0]['type']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(
            'Benvenuto su '.config('app.name', 'Our Platform'),
            /** @phpstan-ignore-next-line method.nonObject */
            $contact->fresh()->communication_history[0]['subject'],
        );
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('sms', $contact->fresh()->communication_history[1]['type']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->communication_history[1]['clicked']);
    }

    /** @test */
    public function it_can_manage_contact_tags(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $tags = [
            'vip' => 'Cliente VIP',
            'new' => 'Nuovo cliente',
            'premium' => 'Piano premium',
            'active' => 'Cliente attivo',
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['tags' => $tags]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'tags' => json_encode($tags),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(4, $contact->fresh()->tags);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Cliente VIP', $contact->fresh()->tags['vip']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Nuovo cliente', $contact->fresh()->tags['new']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Piano premium', $contact->fresh()->tags['premium']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Cliente attivo', $contact->fresh()->tags['active']);
    }

    /** @test */
    public function it_can_manage_contact_custom_fields(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $customFields = [
            'specialization' => 'Ortodonzia',
            'university' => 'Università di Milano',
            'certifications' => ['Invisalign', 'Lingual'],
            'preferred_contact_time' => 'mattina',
            'emergency_contact' => '+39 987 654 3210',
            'notes' => 'Cliente molto soddisfatto del servizio',
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['custom_fields' => $customFields]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'custom_fields' => json_encode($customFields),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Ortodonzia', $contact->fresh()->custom_fields['specialization']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Università di Milano', $contact->fresh()->custom_fields['university']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('Invisalign', $contact->fresh()->custom_fields['certifications']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('mattina', $contact->fresh()->custom_fields['preferred_contact_time']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('+39 987 654 3210', $contact->fresh()->custom_fields['emergency_contact']);
    }

    /** @test */
    public function it_can_manage_contact_subscription_status(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $subscriptionData = [
            'subscribed' => true,
            'subscription_date' => now()->subMonths(3),
            'unsubscribe_date' => null,
            'unsubscribe_reason' => null,
            'subscription_source' => 'website_form',
            'double_optin' => true,
            'last_activity' => now()->subDays(1),
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update($subscriptionData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'subscribed' => true,
            'subscription_source' => 'website_form',
            'double_optin' => true,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->subscribed);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('website_form', $contact->fresh()->subscription_source);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->double_optin);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($contact->fresh()->subscription_date);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNull($contact->fresh()->unsubscribe_date);

        // Act - Unsubscribe
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update([
            'subscribed' => false,
            'unsubscribe_date' => now(),
            'unsubscribe_reason' => 'Troppe email',
        ]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($contact->fresh()->subscribed);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($contact->fresh()->unsubscribe_date);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Troppe email', $contact->fresh()->unsubscribe_reason);
    }

    /** @test */
    public function it_can_manage_contact_engagement_score(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $engagementData = [
            'engagement_score' => 85,
            'last_interaction' => now()->subDays(2),
            'interaction_count' => 15,
            'response_rate' => 78.5,
            'preferred_channel' => 'email',
            'engagement_level' => 'high',
            'lifetime_value' => 2500.00,
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update($engagementData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'engagement_score' => 85,
            'interaction_count' => 15,
            'response_rate' => 78.5,
            'preferred_channel' => 'email',
            'engagement_level' => 'high',
            'lifetime_value' => 2500.00,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(85, $contact->fresh()->engagement_score);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(15, $contact->fresh()->interaction_count);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(78.5, $contact->fresh()->response_rate);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('email', $contact->fresh()->preferred_channel);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('high', $contact->fresh()->engagement_level);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(2500.00, $contact->fresh()->lifetime_value);
    }

    /** @test */
    public function it_can_manage_contact_privacy_settings(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $privacySettings = [
            'gdpr_consent' => true,
            'consent_date' => now()->subMonths(6),
            'data_processing_consent' => true,
            'marketing_consent' => true,
            'third_party_sharing' => false,
            'data_retention_preference' => '5_years',
            'right_to_be_forgotten' => false,
            'data_portability' => true,
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['privacy_settings' => $privacySettings]);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'privacy_settings' => json_encode($privacySettings),
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->privacy_settings['gdpr_consent']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->privacy_settings['data_processing_consent']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->privacy_settings['marketing_consent']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertFalse($contact->fresh()->privacy_settings['third_party_sharing']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('5_years', $contact->fresh()->privacy_settings['data_retention_preference']);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contact->fresh()->privacy_settings['data_portability']);
    }

    /** @test */
    public function it_can_search_contacts_by_preferences(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $emailContact = Contact/** @phpstan-ignore-line */ ::factory()->create([
            'preferences' => ['email' => true, 'sms' => false],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $smsContact = Contact/** @phpstan-ignore-line */ ::factory()->create([
            'preferences' => ['email' => false, 'sms' => true],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $bothContact = Contact/** @phpstan-ignore-line */ ::factory()->create([
            'preferences' => ['email' => true, 'sms' => true],
        ]);

        // Act
        $emailOnlyContacts = Contact::whereJsonContains('preferences->email', true)
            ->whereJsonContains('preferences->sms', false)
            ->get();

        $smsOnlyContacts = Contact::whereJsonContains('preferences->sms', true)
            ->whereJsonContains('preferences->email', false)
            ->get();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $emailOnlyContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $smsOnlyContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($emailOnlyContacts->contains($emailContact));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($smsOnlyContacts->contains($smsContact));
    }

    /** @test */
    public function it_can_search_contacts_by_tags(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $vipContact = Contact/** @phpstan-ignore-line */ ::factory()->create([
            'tags' => ['vip' => 'Cliente VIP', 'premium' => 'Piano premium'],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $newContact = Contact/** @phpstan-ignore-line */ ::factory()->create([
            'tags' => ['new' => 'Nuovo cliente', 'active' => 'Cliente attivo'],
        ]);

        // Act
        $vipContacts = Contact::whereJsonContains('tags->vip', 'Cliente VIP')->get();
        $newContacts = Contact::whereJsonContains('tags->new', 'Nuovo cliente')->get();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $vipContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $newContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($vipContacts->contains($vipContact));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($newContacts->contains($newContact));
    }

    /** @test */
    public function it_can_search_contacts_by_engagement_level(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $highEngagementContact = Contact/** @phpstan-ignore-line */ ::factory()->create(['engagement_level' => 'high']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $mediumEngagementContact = Contact/** @phpstan-ignore-line */ ::factory()->create(['engagement_level' => 'medium']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $lowEngagementContact = Contact/** @phpstan-ignore-line */ ::factory()->create(['engagement_level' => 'low']);

        // Act
        $highEngagementContacts = Contact::where('engagement_level', 'high')->get();
        $mediumEngagementContacts = Contact::where('engagement_level', 'medium')->get();

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $highEngagementContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $mediumEngagementContacts);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($highEngagementContacts->contains($highEngagementContact));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($mediumEngagementContacts->contains($mediumEngagementContact));
    }

    /** @test */
    public function it_can_get_contacts_with_related_data(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        /** @var \Illuminate\Database\Eloquent\Collection */
        $group = ContactGroup/** @phpstan-ignore-line */ ::factory()->create();

        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update(['group_id' => $group->id]);

        // Act
        $contactWithGroup = Contact::with('group')->find($contact->id);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertNotNull($contactWithGroup);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertTrue($contactWithGroup->relationLoaded('group'));
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals($group->id, $contactWithGroup->group->id);
    }

    /** @test */
    public function it_can_manage_contact_import_export(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $importData = [
            'import_source' => 'csv_upload',
            'import_date' => now()->subDays(10),
            'import_batch_id' => 'batch_001',
            'import_notes' => 'Importazione da sistema legacy',
            'export_history' => [
                [
                    'export_date' => now()->subDays(5)->toISOString(),
                    'export_format' => 'csv',
                    'export_reason' => 'Backup mensile',
                    'exported_by' => 'admin_user',
                ],
            ],
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update($importData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'import_source' => 'csv_upload',
            'import_batch_id' => 'batch_001',
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('csv_upload', $contact->fresh()->import_source);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('batch_001', $contact->fresh()->import_batch_id);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('Importazione da sistema legacy', $contact->fresh()->import_notes);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(1, $contact->fresh()->export_history);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals('csv', $contact->fresh()->export_history[0]['export_format']);
    }

    /** @test */
    public function it_can_manage_contact_activity_tracking(): void
    {
        // Arrange
        /** @var \Illuminate\Database\Eloquent\Collection */
        $contact = Contact/** @phpstan-ignore-line */ ::factory()->create();
        $activityData = [
            'last_activity' => now()->subHours(2),
            'activity_count' => 25,
            'activity_types' => ['email_open', 'link_click', 'form_submit'],
            'favorite_pages' => ['/dashboard', '/appointments', '/profile'],
            'session_duration' => 1800, // 30 minutes
            'bounce_rate' => 15.5,
            'conversion_rate' => 8.2,
        ];

        // Act
        /** @phpstan-ignore-next-line method.nonObject */
        $contact->update($activityData);

        // Assert
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertDatabaseHas('contacts', [
            'id' => $contact->id,
            'activity_count' => 25,
            'session_duration' => 1800,
            'bounce_rate' => 15.5,
            'conversion_rate' => 8.2,
        ]);

        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(25, $contact->fresh()->activity_count);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertCount(3, $contact->fresh()->activity_types);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('email_open', $contact->fresh()->activity_types);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertContains('/dashboard', $contact->fresh()->favorite_pages);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(1800, $contact->fresh()->session_duration);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(15.5, $contact->fresh()->bounce_rate);
        /** @phpstan-ignore-next-line property.notFound, method.nonObject */
        $this->assertEquals(8.2, $contact->fresh()->conversion_rate);
    }
}
