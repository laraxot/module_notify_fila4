<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Modules\Notify\Helpers\ConfigHelper;
>>>>>>> 99ff506 (.)
use Modules\Notify\Models\NotificationType;

describe('Notification Type Business Logic', function (): void {
    it('can create notification type with basic information', function (): void {
        $typeData = [
            'name' => 'Appointment Reminder',
            'slug' => 'appointment-reminder',
            'description' => 'Promemoria per appuntamenti',
            'category' => 'healthcare',
            'is_active' => true,
        ];

        $type = NotificationType::create($typeData);

        expect($type->name)
            ->toBe('Appointment Reminder')
            ->and($type->slug)
            ->toBe('appointment-reminder')
            ->and($type->description)
            ->toBe('Promemoria per appuntamenti')
            ->and($type->category)
            ->toBe('healthcare')
            ->and($type->is_active)
            ->toBeTrue();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'name' => 'Appointment Reminder',
            'slug' => 'appointment-reminder',
            'description' => 'Promemoria per appuntamenti',
            'category' => 'healthcare',
            'is_active' => true,
        ]);
    });

    it('can manage notification type channels', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $channels = [
            'email' => [
                'enabled' => true,
                'priority' => 'high',
                'template' => 'email.appointment-reminder',
                'subject' => 'Promemoria Appuntamento',
            ],
            'sms' => [
                'enabled' => true,
                'priority' => 'medium',
                'template' => 'sms.appointment-reminder',
                'max_length' => 160,
            ],
            'push' => [
                'enabled' => false,
                'priority' => 'low',
                'template' => 'push.appointment-reminder',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['channels' => $channels]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'channels' => json_encode($channels),
        ]);

        expect($type->fresh()->channels['email']['enabled'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->channels['email']['priority'])
            ->toBe('high')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->channels['email']['template'])
            ->toBe('email.appointment-reminder')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->channels['sms']['enabled'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->channels['sms']['max_length'])
            ->toBe(160)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->channels['push']['enabled'])
            ->toBeFalse();
    });

    it('can manage notification type settings', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $settings = [
            'retry_attempts' => 3,
            'retry_delay' => 300, // 5 minutes
            'expiration_time' => 86400, // 24 hours
            'batch_size' => 100,
            'throttle_limit' => 10,
            'throttle_window' => 3600, // 1 hour
            'timezone_aware' => true,
            'localization_support' => true,
            'audit_logging' => true,
            'encryption_required' => false,
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['settings' => $settings]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'settings' => json_encode($settings),
        ]);

        expect($type->fresh()->settings['retry_attempts'])
            ->toBe(3)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['retry_delay'])
            ->toBe(300)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['expiration_time'])
            ->toBe(86400)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['batch_size'])
            ->toBe(100)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['throttle_limit'])
            ->toBe(10)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['timezone_aware'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['localization_support'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['audit_logging'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->settings['encryption_required'])
            ->toBeFalse();
    });

    it('can manage notification type templates', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $templates = [
            'email' => [
                'subject' => 'Promemoria Appuntamento - {{appointment_date}}',
                'body' => 'Gentile {{patient_name}}, le ricordiamo l\'appuntamento per il {{appointment_date}} alle {{appointment_time}}.',
                'variables' => ['patient_name', 'appointment_date', 'appointment_time'],
                'html_template' => 'emails.appointment-reminder',
                'text_template' => 'emails.appointment-reminder-text',
            ],
            'sms' => [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'message' => 'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. '.
                        config('app.name', 'Our Platform'),
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
                'message' =>

                        'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' .
                        config('app.name', 'Our Platform')
                    ,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
                'message' => 'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' . config('app.name', 'Our Platform'),
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
=======
=======
                'message' => 'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' . config('app.name', 'Our Platform'),
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
=======
                'message' => 'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' . config('app.name', 'Our Platform'),
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                'message' => 'Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' . config('app.name', 'Our Platform'),
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
                'variables' => ['appointment_date', 'appointment_time'],
                'max_length' => 160,
            ],
            'push' => [
                'title' => 'Promemoria Appuntamento',
                'body' => 'Appuntamento domani alle {{appointment_time}}',
                'variables' => ['appointment_time'],
                'action_url' => '/appointments/{{appointment_id}}',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['templates' => $templates]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'templates' => json_encode($templates),
        ]);

        expect($type->fresh()->templates['email']['subject'])
            ->toBe('Promemoria Appuntamento - {{appointment_date}}')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->templates['email']['variables'])
            ->toContain('patient_name')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->templates['email']['html_template'])
            ->toBe('emails.appointment-reminder')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->templates['sms']['message'])
<<<<<<< HEAD
            ->toBe('Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. '.
=======
            ->toBe('Promemoria: appuntamento {{appointment_date}} alle {{appointment_time}}. ' .
>>>>>>> 99ff506 (.)
                config('app.name', 'Our Platform'))
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->templates['sms']['max_length'])
            ->toBe(160)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->templates['push']['title'])
            ->toBe('Promemoria Appuntamento');
    });

    it('can manage notification type rules', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $rules = [
            'frequency' => [
                'max_per_day' => 3,
                'max_per_week' => 10,
                'max_per_month' => 30,
                'quiet_hours' => [
                    'start' => '22:00',
                    'end' => '08:00',
                ],
            ],
            'conditions' => [
                'require_consent' => true,
                'min_advance_notice' => 3600, // 1 hour
                'max_advance_notice' => 604800, // 1 week
                'user_preferences_override' => true,
            ],
            'validation' => [
                'required_fields' => ['patient_name', 'appointment_date', 'appointment_time'],
                'optional_fields' => ['notes', 'location'],
                'field_formats' => [
                    'appointment_date' => 'Y-m-d',
                    'appointment_time' => 'H:i',
                ],
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['rules' => $rules]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'rules' => json_encode($rules),
        ]);

        expect($type->fresh()->rules['frequency']['max_per_day'])
            ->toBe(3)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['frequency']['max_per_week'])
            ->toBe(10)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['frequency']['quiet_hours']['start'])
            ->toBe('22:00')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['frequency']['quiet_hours']['end'])
            ->toBe('08:00')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['conditions']['require_consent'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['conditions']['min_advance_notice'])
            ->toBe(3600)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['validation']['required_fields'])
            ->toContain('patient_name')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->rules['validation']['field_formats']['appointment_date'])
            ->toBe('Y-m-d');
    });

    it('can manage notification type permissions', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $permissions = [
            'roles' => ['admin', 'doctor', 'nurse'],
            'permissions' => ['notifications.create', 'notifications.send'],
            'user_groups' => ['active_patients', 'premium_members'],
            'restrictions' => [
                'max_recipients' => 1000,
                'geographic_limits' => ['IT', 'EU'],
                'time_restrictions' => ['business_hours_only'],
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['permissions' => $permissions]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'permissions' => json_encode($permissions),
        ]);

        expect($type->fresh()->permissions['roles'])
            ->toContain('admin')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['roles'])
            ->toContain('doctor')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['permissions'])
            ->toContain('notifications.create')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['user_groups'])
            ->toContain('active_patients')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['restrictions']['max_recipients'])
            ->toBe(1000)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['restrictions']['geographic_limits'])
            ->toContain('IT')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->permissions['restrictions']['time_restrictions'])
            ->toContain('business_hours_only');
    });

    it('can manage notification type metrics', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $metrics = [
            'delivery_rate' => 98.5,
            'open_rate' => 45.2,
            'click_rate' => 12.8,
            'bounce_rate' => 1.5,
            'spam_complaints' => 0.1,
            'unsubscribe_rate' => 2.3,
            'total_sent' => 15000,
            'total_delivered' => 14775,
            'total_opened' => 6683,
            'total_clicked' => 1891,
            'last_sent' => now()->subHours(2),
            'average_response_time' => 2.5, // minutes
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['metrics' => $metrics]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'metrics' => json_encode($metrics),
        ]);

        expect($type->fresh()->metrics['delivery_rate'])
            ->toBe(98.5)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['open_rate'])
            ->toBe(45.2)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['click_rate'])
            ->toBe(12.8)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['bounce_rate'])
            ->toBe(1.5)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['total_sent'])
            ->toBe(15000)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['total_delivered'])
            ->toBe(14775)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['total_opened'])
            ->toBe(6683)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['total_clicked'])
            ->toBe(1891)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->metrics['average_response_time'])
            ->toBe(2.5);
    });

    it('can manage notification type scheduling', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $scheduling = [
            'scheduling_enabled' => true,
            'timezone_aware' => true,
            'default_timezone' => 'Europe/Rome',
            'business_hours' => [
                'monday' => ['09:00', '18:00'],
                'tuesday' => ['09:00', '18:00'],
                'wednesday' => ['09:00', '18:00'],
                'thursday' => ['09:00', '18:00'],
                'friday' => ['09:00', '17:00'],
                'saturday' => ['09:00', '12:00'],
                'sunday' => ['closed'],
            ],
            'holidays' => [
                '2024-12-25' => 'Natale',
                '2024-12-26' => 'Santo Stefano',
                '2025-01-01' => 'Capodanno',
            ],
            'advance_notice' => [
                'min_hours' => 1,
                'max_days' => 7,
                'preferred_time' => '09:00',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['scheduling' => $scheduling]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'scheduling' => json_encode($scheduling),
        ]);

        expect($type->fresh()->scheduling['scheduling_enabled'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['timezone_aware'])
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['default_timezone'])
            ->toBe('Europe/Rome')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['business_hours']['monday'])
            ->toBe(['09:00', '18:00'])
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['business_hours']['sunday'])
            ->toBe(['closed'])
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['holidays']['2024-12-25'])
            ->toBe('Natale')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['advance_notice']['min_hours'])
            ->toBe(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['advance_notice']['max_days'])
            ->toBe(7)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->scheduling['advance_notice']['preferred_time'])
            ->toBe('09:00');
    });

    it('can manage notification type integrations', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create();
        $integrations = [
            'external_services' => [
                'email_provider' => 'SendGrid',
                'sms_provider' => 'Twilio',
                'push_provider' => 'Firebase',
            ],
            'webhooks' => [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                'delivery_webhook' => 'https://api.'.config('app.domain', 'example.com').'/webhooks/notification-delivered',
                'bounce_webhook' => 'https://api.'.config('app.domain', 'example.com').'/webhooks/notification-bounced',
                'click_webhook' => 'https://api.'.config('app.domain', 'example.com').'/webhooks/notification-clicked',
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
                'delivery_webhook' =>
                    'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-delivered',
                'bounce_webhook' =>
                    'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-bounced',
                'click_webhook' =>
                    'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-clicked',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
                'delivery_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-delivered',
                'bounce_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-bounced',
                'click_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-clicked',
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
                'delivery_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-delivered',
                'bounce_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-bounced',
                'click_webhook' => 'https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-clicked',
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
            ],
            'api_endpoints' => [
                'send' => 'POST /api/v1/notifications/send',
                'status' => 'GET /api/v1/notifications/{id}/status',
                'cancel' => 'DELETE /api/v1/notifications/{id}',
            ],
            'third_party' => [
                'crm_integration' => 'Salesforce',
                'analytics' => 'Google Analytics',
                'monitoring' => 'Sentry',
            ],
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update(['integrations' => $integrations]);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'integrations' => json_encode($integrations),
        ]);

        expect($type->fresh()->integrations['external_services']['email_provider'])
            ->toBe('SendGrid')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->integrations['external_services']['sms_provider'])
            ->toBe('Twilio')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->integrations['external_services']['push_provider'])
            ->toBe('Firebase')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->integrations['webhooks']['delivery_webhook'])
<<<<<<< HEAD
            ->toBe('https://api.'.config('app.domain', 'example.com').'/webhooks/notification-delivered')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->toBe('https://api.' . config('app.domain', 'example.com') . '/webhooks/notification-delivered')
>>>>>>> 99ff506 (.)
=======
            /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> 05bc3ad (.)
=======
>>>>>>> ab15d0e (.)
=======
            /** @phpstan-ignore-next-line method.nonObject */
>>>>>>> c42c734 (.)
            ->and($type->fresh()->integrations['api_endpoints']['send'])
            ->toBe('POST /api/v1/notifications/send')
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->integrations['third_party']['crm_integration'])
            ->toBe('Salesforce');
    });

    it('can search notification types by category', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $healthcareType = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['category' => 'healthcare']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $marketingType = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['category' => 'marketing']);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $systemType = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['category' => 'system']);

        $healthcareTypes = NotificationType::where('category', 'healthcare')->get();
        $marketingTypes = NotificationType::where('category', 'marketing')->get();

        expect($healthcareTypes)
            ->toHaveCount(1)
            ->and($marketingTypes)
            ->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($healthcareTypes->contains($healthcareType))
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($marketingTypes->contains($marketingType))
            ->toBeTrue();
    });

    it('can search notification types by status', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $activeType = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['is_active' => true]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $inactiveType = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['is_active' => false]);

        $activeTypes = NotificationType::where('is_active', true)->get();
        $inactiveTypes = NotificationType::where('is_active', false)->get();

        expect($activeTypes)
            ->toHaveCount(1)
            ->and($inactiveTypes)
            ->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($activeTypes->contains($activeType))
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($inactiveTypes->contains($inactiveType))
            ->toBeTrue();
    });

    it('can search notification types by channel enabled', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $emailType = NotificationType/** @phpstan-ignore-line */ ::factory()->create([
            'channels' => ['email' => ['enabled' => true], 'sms' => ['enabled' => false]],
        ]);
        /** @var \Illuminate\Database\Eloquent\Collection */
        $smsType = NotificationType/** @phpstan-ignore-line */ ::factory()->create([
            'channels' => ['email' => ['enabled' => false], 'sms' => ['enabled' => true]],
        ]);

        $emailTypes = NotificationType::whereJsonContains('channels->email->enabled', true)->get();
        $smsTypes = NotificationType::whereJsonContains('channels->sms->enabled', true)->get();

        expect($emailTypes)
            ->toHaveCount(1)
            ->and($smsTypes)
            ->toHaveCount(1)
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($emailTypes->contains($emailType))
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($smsTypes->contains($smsType))
            ->toBeTrue();
    });

    it('can manage notification type archiving', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $type = NotificationType/** @phpstan-ignore-line */ ::factory()->create(['is_active' => true]);
        $archiveData = [
            'is_active' => false,
            'archived_at' => now(),
            'archive_reason' => 'Sostituito da nuovo tipo',
            'replacement_type_id' => 15,
        ];

        /** @phpstan-ignore-next-line method.nonObject */
        $type->update($archiveData);

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $type->id,
            'is_active' => false,
            'archived_at' => $type->archived_at,
            'archive_reason' => 'Sostituito da nuovo tipo',
            'replacement_type_id' => 15,
        ]);

        expect($type->fresh()->is_active)
            ->toBeFalse()
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($type->fresh()->archived_at)
            /** @phpstan-ignore-next-line method.nonObject */
            ->not->toBeNull()->and($type->fresh()->archive_reason)->toBe(
                'Sostituito da nuovo tipo',
                /** @phpstan-ignore-next-line method.nonObject */
            )->and($type->fresh()->replacement_type_id)->toBe(15);
    });

    it('can manage notification type duplication', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $originalType = NotificationType/** @phpstan-ignore-line */ ::factory()->create([
            'name' => 'Original Type',
            'slug' => 'original-type',
            'version' => '1.0.0',
        ]);

        /** @phpstan-ignore-next-line method.nonObject */
        $duplicateType = $originalType->replicate();
        $duplicateType->name = 'Duplicate Type';
        $duplicateType->slug = 'duplicate-type';
        $duplicateType->version = '1.0.1';
        /** @phpstan-ignore-next-line method.nonObject */
        $duplicateType->save();

        /** @phpstan-ignore-next-line property.notFound */
        $this->assertDatabaseHas('notification_types', [
            'id' => $duplicateType->id,
            'name' => 'Duplicate Type',
            'slug' => 'duplicate-type',
            'version' => '1.0.1',
        ]);

        expect($originalType->id)
            ->not
            ->toBe($duplicateType->id)
            ->and($duplicateType->name)
            ->toBe('Duplicate Type')
            ->and($duplicateType->slug)
            ->toBe('duplicate-type')
            ->and($duplicateType->version)
            ->toBe('1.0.1');
    });
});
