<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Sistema Notifiche Email - il progetto

## Panoramica

Sistema di notifiche per eventi e azioni in il progetto.

## Struttura Notifiche

### 1. Notifiche Base

```php
namespace Modules\Notify\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Notify\Mail\TemplatedMail;

class GenericNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $template;
    protected $data;

    public function __construct(MailTemplate $template, array $data = [])
    {
        $this->template = $template;
        $this->data = $data;
    }

    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable): TemplatedMail
    {
        return (new TemplatedMail($this->template, $this->data))
            ->to($notifiable->email);
    }

    public function toArray($notifiable): array
    {
        return [
            'template_id' => $this->template->id,
            'data' => $this->data,
        ];
    }
}
```

### 2. Notifiche Specifiche

```php
namespace Modules\Notify\Notifications;

class AppointmentNotification extends GenericNotification
{
    public function __construct(Appointment $appointment)
    {
        $template = MailTemplate::where('type', 'appointment')->first();
        
        $data = [
            'appointment' => $appointment,
            'patient' => $appointment->patient,
            'doctor' => $appointment->doctor,
            'date' => $appointment->date->format('d/m/Y'),
            'time' => $appointment->time->format('H:i'),
        ];

        parent::__construct($template, $data);
    }
}

class PaymentNotification extends GenericNotification
{
    public function __construct(Payment $payment)
    {
        $template = MailTemplate::where('type', 'payment')->first();
        
        $data = [
            'payment' => $payment,
            'amount' => $payment->amount,
            'date' => $payment->date->format('d/m/Y'),
            'method' => $payment->method,
        ];

        parent::__construct($template, $data);
    }
}
```

## Eventi

### 1. Event Listeners

```php
namespace Modules\Notify\Listeners;

class SendAppointmentNotification
{
    public function handle(AppointmentCreated $event): void
    {
        $appointment = $event->appointment;
        
        // Notifica paziente
        $appointment->patient->notify(new AppointmentNotification($appointment));
        
        // Notifica medico
        $appointment->doctor->notify(new AppointmentNotification($appointment));
    }
}

class SendPaymentNotification
{
    public function handle(PaymentReceived $event): void
    {
        $payment = $event->payment;
        
        // Notifica paziente
        $payment->patient->notify(new PaymentNotification($payment));
        
        // Notifica amministrazione
        User::where('role', 'admin')->get()
            ->each->notify(new PaymentNotification($payment));
    }
}
```

### 2. Event Service Provider

```php
namespace Modules\Notify\Providers;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        AppointmentCreated::class => [
            SendAppointmentNotification::class,
        ],
        PaymentReceived::class => [
            SendPaymentNotification::class,
        ],
    ];

    public function boot(): void
    {
        parent::boot();

        // Registra eventi
        Event::listen('appointment.*', function ($event, $payload) {
            // Log evento
            Log::info('Appointment event', [
                'event' => $event,
                'payload' => $payload,
            ]);
        });
    }
}
```

## Integrazione con Filament

### 1. Notifications Resource

```php
namespace Modules\Notify\Filament\Resources;

class NotificationResource extends XotBaseResource
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public static function form(\Filament\Schemas\Schema $form): \Filament\Schemas\Schema
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
=======
    public static function form(Form $form): Form
>>>>>>> fd1fcc4c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
    {
        return $form->schema([
            Card::make()->schema([
                // Template
                Select::make('template')
                    ->options(MailTemplate::pluck('name', 'id'))
                    ->required()
                    ->label('Template'),
                    
                // Dati
                KeyValue::make('data')
                    ->label('Dati')
                    ->keyLabel('Chiave')
                    ->valueLabel('Valore'),
                    
                // Destinatari
                Select::make('recipients')
                    ->multiple()
                    ->options([
                        'patient' => 'Paziente',
                        'doctor' => 'Medico',
                        'admin' => 'Amministrazione',
                    ])
                    ->required()
                    ->label('Destinatari'),
                    
                // Programma
                DateTimePicker::make('scheduled_at')
                    ->label('Programma')
                    ->nullable(),
            ])
        ]);
    }
}
```

### 2. Notifications Actions

```php
class NotificationActions
{
    public static function make(): array
    {
        return [
            // Invia ora
            Action::make('send_now')
                ->label('Invia Ora')
                ->icon('heroicon-o-paper-airplane')
                ->action(function (Notification $record) {
                    $record->send();
                }),
                
            // Programma
            Action::make('schedule')
                ->label('Programma')
                ->icon('heroicon-o-clock')
                ->form([
                    DateTimePicker::make('scheduled_at')
                        ->required()
                        ->label('Data e Ora'),
                ])
                ->action(function (array $data, Notification $record) {
                    $record->schedule($data['scheduled_at']);
                }),
                
            // Duplica
            Action::make('duplicate')
                ->label('Duplica')
                ->icon('heroicon-o-document-duplicate')
                ->action(function (Notification $record) {
                    $record->replicate()->save();
                }),
        ];
    }
}
```

## Best Practices

### 1. Gestione Template

```php
class NotificationTemplate
{
    public static function make(string $type, array $data = []): MailTemplate
    {
        $template = MailTemplate::where('type', $type)->first();
        
        if (!$template) {
            throw new \Exception("Template {$type} not found");
        }
        
        // Verifica placeholder
        $placeholders = $template->getPlaceholders();
        $missing = array_diff($placeholders, array_keys($data));
        
        if (!empty($missing)) {
            throw new \Exception("Missing placeholders: " . implode(', ', $missing));
        }
        
        return $template;
    }
}
```

### 2. Validazione Dati

```php
class NotificationValidator
{
    public function validate(array $data): array
    {
        $errors = [];

        // Verifica template
        if (!isset($data['template'])) {
            $errors[] = 'Template is required';
        }

        // Verifica destinatari
        if (empty($data['recipients'])) {
            $errors[] = 'Recipients are required';
        }

        // Verifica dati
        if (!$this->validateData($data['data'])) {
            $errors[] = 'Invalid data';
        }

        return $errors;
    }

    protected function validateData(array $data): bool
    {
        foreach ($data as $key => $value) {
            if (!is_string($key) || !is_string($value)) {
                return false;
            }
        }

        return true;
    }
}
```

## Troubleshooting

### 1. Problemi Comuni

1. **Notifiche non inviate**
   - Verifica template
   - Controlla destinatari
   - Debug eventi

2. **Dati mancanti**
   - Verifica placeholder
   - Controlla validazione
   - Debug payload

3. **Errori invio**
   - Verifica configurazione
   - Controlla log
   - Debug queue

### 2. Debug

```php
class NotificationDebugger
{
    public function debug(Notification $notification): array
    {
        return [
            'template' => [
                'id' => $notification->template->id,
                'type' => $notification->template->type,
                'placeholders' => $notification->template->getPlaceholders(),
            ],
            'data' => $notification->data,
            'recipients' => $notification->recipients,
            'scheduled' => $notification->scheduled_at,
            'status' => $notification->status,
            'error' => $notification->error,
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
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 3f537838 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> a404ea71 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 2941b0bd (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> ca10d6ad (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 7325acf3 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 4c323e61 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 98d837b9 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> a29a4728 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> c4bdacbf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> c7a4727b (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> bd804d67 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 116df547 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 84082535 (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 5b50927d (rebase 210)
=======
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> d45a0226 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> e790eb33 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 4b544042 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> cccb594f (.)
=======
- [Laravel Notifications](https://laravel.com/project_docs/notifications)
- [Laravel Events](https://laravel.com/project_docs/events)
- [Laravel Mail](https://laravel.com/project_docs/mail) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Notifications](https://laravel.com/docs/notifications)
- [Laravel Events](https://laravel.com/docs/events)
- [Laravel Mail](https://laravel.com/docs/mail) 
>>>>>>> 9cf0dc90 (.)
