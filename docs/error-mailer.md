<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# Error Mailer System

## Panoramica

Sistema integrato per la gestione e notifica degli errori dell'applicazione che combina:
- Notifiche email immediate
- Notifiche Discord/Slack
- Interfaccia di gestione Filament
- Logging dettagliato
- Dashboard di monitoraggio
- Sistema di rate limiting
- Cleanup automatico

## Architettura

### Models

```php
class ErrorLog extends Model
{
    protected $fillable = [
        'message',
        'code',
        'file',
        'line',
        'trace',
        'request_method',
        'request_url',
        'request_data',
        'user_id',
        'user_type',
        'environment',
        'server_data',
        'status',
        'notified_at',
        'resolved_at',
        'resolution_notes'
    ];

    protected $casts = [
        'trace' => 'array',
        'request_data' => 'array',
        'server_data' => 'array',
        'notified_at' => 'datetime',
        'resolved_at' => 'datetime'
    ];

    public function user(): MorphTo
    {
        return $this->morphTo();
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(ErrorNotification::class);
    }
}

class ErrorNotification extends Model
{
    protected $fillable = [
        'error_log_id',
        'type', // email, discord, slack
        'recipient',
        'status',
        'error',
        'sent_at'
    ];

    protected $casts = [
        'sent_at' => 'datetime'
    ];

    public function errorLog(): BelongsTo
    {
        return $this->belongsTo(ErrorLog::class);
    }
}
```

### Services

```php
class ErrorMailerService
{
    public function __construct(
        private ErrorLogRepository $repository,
        private NotificationService $notifier,
        private RateLimiter $limiter
    ) {}

    public function handle(\Throwable $exception): void
    {
        // Crea il log dell'errore
        $errorLog = $this->repository->create([
            'message' => $exception->getMessage(),
            'code' => $exception->getCode(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'trace' => $exception->getTraceAsString(),
            'request_method' => request()->method(),
            'request_url' => request()->fullUrl(),
            'request_data' => request()->all(),
            'user_id' => auth()->id(),
            'user_type' => auth()->user()?->getMorphClass(),
            'environment' => app()->environment(),
            'server_data' => request()->server(),
            'status' => 'new'
        ]);

        // Verifica rate limiting
        if ($this->limiter->tooManyAttempts($errorLog->signature, 10)) {
            return;
        }

        // Invia notifiche
        $this->notifier->sendNotifications($errorLog);
    }
}

class NotificationService
{
    public function sendNotifications(ErrorLog $error): void
    {
        // Email
        if ($this->shouldSendEmail($error)) {
            $this->sendEmailNotification($error);
        }

        // Discord
        if ($this->shouldSendDiscord($error)) {
            $this->sendDiscordNotification($error);
        }

        // Slack
        if ($this->shouldSendSlack($error)) {
            $this->sendSlackNotification($error);
        }
    }

    private function shouldSendEmail(ErrorLog $error): bool
    {
        return config('error-mailer.notifications.email.enabled') &&
            !$this->isDuplicate($error, 'email');
    }

    private function sendEmailNotification(ErrorLog $error): void
    {
        $notification = new ErrorEmailNotification($error);
        
        foreach (config('error-mailer.notifications.email.recipients') as $recipient) {
            Mail::to($recipient)->queue($notification);
        }

        $error->notifications()->create([
            'type' => 'email',
            'recipient' => implode(',', config('error-mailer.notifications.email.recipients')),
            'status' => 'sent',
            'sent_at' => now()
        ]);
    }
}
```

### Filament Resources

```php
class ErrorLogResource extends Resource
{
    protected static ?string $model = ErrorLog::class;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 31f5d28f (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 31f5d28f (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 31f5d28f (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 6608a1a0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
=======
    public static function form(Form $form): Form
>>>>>>> 23cbbaf5 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 2a97406c (.)
=======
    public static function form(Form $form): Form
>>>>>>> 909e45af (.)
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
=======
    public static function form(Form $form): Form
>>>>>>> bb7e77c2 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 36321fcb (.)
=======
    public static function form(Form $form): Form
>>>>>>> b99af5a8 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 712617d3 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f3086887 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 3d462363 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 9c45d9bd (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 54ad93c4 (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 6e12a84b (rebase 210)
    {
        return $form->schema([
            Card::make()->schema([
                TextInput::make('message')
                    ->label('Messaggio Errore')
                    ->disabled(),
                    
                TextInput::make('file')
                    ->label('File')
                    ->disabled(),
                    
                TextInput::make('line')
                    ->label('Linea')
                    ->disabled(),
                    
                CodeEditor::make('trace')
                    ->label('Stack Trace')
                    ->language('json')
                    ->disabled()
                    ->columnSpanFull(),
                    
                TextInput::make('request_url')
                    ->label('URL Richiesta')
                    ->disabled(),
                    
                TextInput::make('request_method')
                    ->label('Metodo Richiesta')
                    ->disabled(),
                    
                CodeEditor::make('request_data')
                    ->label('Dati Richiesta')
                    ->language('json')
                    ->disabled()
                    ->columnSpanFull(),
                    
                Select::make('status')
                    ->label('Stato')
                    ->options([
                        'new' => 'Nuovo',
                        'in_progress' => 'In Lavorazione',
                        'resolved' => 'Risolto',
                        'ignored' => 'Ignorato'
                    ])
                    ->required(),
                    
                Textarea::make('resolution_notes')
                    ->label('Note Risoluzione')
                    ->visible(fn ($record) => $record->status === 'resolved'),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('message')
                    ->label('Messaggio')
                    ->searchable()
                    ->limit(50),
                    
                TextColumn::make('file')
                    ->label('File')
                    ->searchable(),
                    
                TextColumn::make('line')
                    ->label('Linea'),
                    
                TextColumn::make('environment')
                    ->label('Ambiente'),
                    
                BadgeColumn::make('status')
                    ->label('Stato')
                    ->colors([
                        'danger' => 'new',
                        'warning' => 'in_progress',
                        'success' => 'resolved',
                        'secondary' => 'ignored',
                    ]),
                    
                TextColumn::make('created_at')
                    ->label('Data')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'new' => 'Nuovo',
                        'in_progress' => 'In Lavorazione',
                        'resolved' => 'Risolto',
                        'ignored' => 'Ignorato'
                    ]),
                    
                SelectFilter::make('environment')
                    ->options([
                        'local' => 'Local',
                        'staging' => 'Staging',
                        'production' => 'Production'
                    ])
            ])
            ->actions([
                Action::make('resolve')
                    ->label('Risolvi')
                    ->icon('heroicon-o-check')
                    ->action(fn ($record) => $record->update([
                        'status' => 'resolved',
                        'resolved_at' => now()
                    ]))
                    ->requiresConfirmation(),
                    
                Action::make('ignore')
                    ->label('Ignora')
                    ->icon('heroicon-o-x-mark')
                    ->action(fn ($record) => $record->update([
                        'status' => 'ignored'
                    ]))
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                BulkAction::make('resolve')
                    ->label('Risolvi Selezionati')
                    ->action(fn ($records) => $records->each->update([
                        'status' => 'resolved',
                        'resolved_at' => now()
                    ]))
                    ->requiresConfirmation(),
                    
                BulkAction::make('ignore')
                    ->label('Ignora Selezionati')
                    ->action(fn ($records) => $records->each->update([
                        'status' => 'ignored'
                    ]))
                    ->requiresConfirmation(),
            ]);
    }
}
```

### Widgets

```php
class ErrorStatsWidget extends Widget
{
    protected static string $view = 'notify::widgets.error-stats';
    
    protected int|string|array $columnSpan = 2;

    public function getStats(): array
    {
        return [
            'total' => ErrorLog::count(),
            'unresolved' => ErrorLog::whereNotIn('status', ['resolved', 'ignored'])->count(),
            'today' => ErrorLog::whereDate('created_at', today())->count(),
            'this_week' => ErrorLog::whereBetween('created_at', [
                now()->startOfWeek(),
                now()->endOfWeek()
            ])->count(),
        ];
    }
}

class ErrorChartWidget extends Widget
{
    protected static string $view = 'notify::widgets.error-chart';
    
    protected int|string|array $columnSpan = 'full';

    public function getData(): array
    {
        return ErrorLog::query()
            ->whereBetween('created_at', [
                now()->subDays(30),
                now()
            ])
            ->groupBy('date')
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->get()
            ->pluck('count', 'date')
            ->toArray();
    }
}
```

## Configurazione

```php
return [
    'notifications' => [
        'email' => [
            'enabled' => env('ERROR_MAILER_EMAIL_ENABLED', true),
            'recipients' => explode(',', env('ERROR_MAILER_EMAIL_RECIPIENTS')),
            'cooldown' => env('ERROR_MAILER_EMAIL_COOLDOWN', 10), // minuti
        ],
        
        'discord' => [
            'enabled' => env('ERROR_MAILER_DISCORD_ENABLED', false),
            'webhook' => env('ERROR_MAILER_DISCORD_WEBHOOK'),
            'cooldown' => env('ERROR_MAILER_DISCORD_COOLDOWN', 10),
        ],
        
        'slack' => [
            'enabled' => env('ERROR_MAILER_SLACK_ENABLED', false),
            'webhook' => env('ERROR_MAILER_SLACK_WEBHOOK'),
            'cooldown' => env('ERROR_MAILER_SLACK_COOLDOWN', 10),
        ]
    ],
    
    'environments' => [
        'enabled' => explode(',', env('ERROR_MAILER_ENVIRONMENTS', 'production')),
    ],
    
    'cleanup' => [
        'enabled' => env('ERROR_MAILER_CLEANUP_ENABLED', true),
        'older_than_days' => env('ERROR_MAILER_CLEANUP_DAYS', 30),
    ],
    
    'rate_limiting' => [
        'enabled' => env('ERROR_MAILER_RATE_LIMITING_ENABLED', true),
        'max_attempts' => env('ERROR_MAILER_RATE_LIMITING_MAX_ATTEMPTS', 10),
        'decay_minutes' => env('ERROR_MAILER_RATE_LIMITING_DECAY_MINUTES', 1),
    ],
];
```

## Miglioramenti

1. **Dashboard Avanzata**
   - Widget statistiche errori
   - Grafici trend errori
   - Filtri avanzati
   - Export dati

2. **Notifiche Multiple**
   - Email
   - Discord
   - Slack
   - Webhook personalizzati

3. **Rate Limiting**
   - Cooldown per tipo di errore
   - Raggruppamento errori simili
   - Prevenzione spam

4. **Gestione Errori**
   - Workflow di risoluzione
   - Note e commenti
   - Assegnazione a sviluppatori
   - Tracking tempo risoluzione

5. **Cleanup Automatico**
   - Pulizia errori vecchi
   - Archivio errori risolti
   - Backup automatico

6. **Integrazione IDE**
   - Link diretti al codice
   - Stack trace interattivo
   - Suggerimenti risoluzione

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
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> ee18dd92 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 66453ace (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
>>>>>>> 23cbbaf5 (.)
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> bb7e77c2 (.)
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
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 909e45af (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f042b88 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 36321fcb (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> b99af5a8 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 712617d3 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fdb24863 (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9c45d9bd (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> eb62d6cf (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 6e12a84b (rebase 210)
