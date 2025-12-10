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
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
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
=======
>>>>>>> 2a97406c (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 36136dcfa (.)
=======
=======
>>>>>>> 712617d3 (.)
>>>>>>> 731b801a8 (.)
=======
>>>>>>> b85076e48 (.)
=======
=======
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> fea359347 (.)
=======
=======
>>>>>>> fd1fcc4c (.)
>>>>>>> d9e649ac3 (.)
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
    public static function form(Form $form): Form
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
=======
    public static function form(Form $form): Form
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
    public static function form(Form $form): Form
>>>>>>> 4f3927d7 (.)
=======
    public static function form(Form $form): Form
>>>>>>> c8b1c8bf (.)
=======
    public static function form(Form $form): Form
>>>>>>> 9cf0dc90 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b85 (.)
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
=======
    public static function form(Form $form): Form
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 66453ace (.)
>>>>>>> 138485550 (.)
=======
>>>>>>> 998e6866b (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 4f042b88 (.)
>>>>>>> 36136dcfa (.)
=======
>>>>>>> 731b801a8 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> fdb24863 (rebase 210)
<<<<<<< HEAD
>>>>>>> b85076e48 (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 4fc21b78 (rebase 210)
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> eb62d6cf (rebase 210)
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> c31e900eb (.)
=======
=======
    public static function form(Form $form): Form
>>>>>>> 36ac4fc1 (.)
>>>>>>> fea359347 (.)
=======
>>>>>>> d9e649ac3 (.)
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
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
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
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 229a065a (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 22baa66d (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 909e45af (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 7325acf3 (.)
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
=======
>>>>>>> b99af5a8 (.)
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
=======
>>>>>>> 229a065a (rebase 210)
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
=======
>>>>>>> 9f8e680a (rebase 210)
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
=======
>>>>>>> 22baa66d (rebase 210)
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> 69fa7d37 (.)
>>>>>>> c7d5eaf96 (.)
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> c7d5eaf96 (.)
>>>>>>> 75179b85 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 12a7e2462 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 01af324fe (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4c323e61 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c19c8df2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 13aa25113 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a29a4728 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4e4a7796 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> c7a4727b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47bbf2b1c (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b215d516b (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9721a5b2 (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 116df547 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 229a065a (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 84082535 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 0a5473e16 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 252fa579e (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> fcaebc79 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4fc21b78 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9f8e680a (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6ad5224fb (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 21a6fa9bc (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9d3810d0 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 5aedc39c (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 82e5ee2d (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 610b999f1 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> d38aa9d2 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c31e900eb (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 8c8937e7 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 22baa66d (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 5b50927d (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9e7ba5b6 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 36ac4fc1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f15c41e60 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> cb5f23b0 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4b544042 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> cccb594f (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e2f1a4045 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> ee18dd92 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 2941b0bd (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 138485550 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 66453ace (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 7325acf3 (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4c323e61 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> febe79e3 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2a97406c (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 98d837b9 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a29a4728 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 36136dcfa (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f042b88 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> c4bdacbf (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4e4a7796 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> c7a4727b (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 712617d3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ec4cda261 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 116df547 (.)
<<<<<<< HEAD
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 1442e291 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 229a065a (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 84082535 (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> fcaebc79 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4fc21b78 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce1853afd (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9c45d9bd (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 7ffa94fc (rebase 210)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9d3810d0 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> eb62d6cf (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e312314fa (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> d38aa9d2 (rebase 210)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 22baa66d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e028c03d (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 5b50927d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ad905ce9c (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ff78f10a5 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9e7ba5b6 (rebase 210)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2effe245 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> d45a0226 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d9e649ac3 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fd1fcc4c (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> e790eb33 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> cb5f23b0 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> f9ec4f86 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 3ee54c5d (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4b544042 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> cccb594f (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> c8b1c8bf (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 9cf0dc90 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b85 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Laravel Exceptions](https://laravel.com/project_docs/errors)
- [Filament Forms](https://filamentphp.com/project_docs/forms)
- [Discord Webhooks](https://discord.com/developers/project_docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 75179b855 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f963d2c0 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> d09cb759 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 3f537838 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4bec160e6 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> ee18dd92 (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4689a827 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 2941b0bd (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> ca10d6ad (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 66453ace (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 7325acf3 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4c323e61 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 53eef8d8d (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 753ea7aca (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> febe79e3 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> f2e64178 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 98d837b9 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> a29a4728 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 4f042b88 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 09f5337a8 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7aae79847 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
<<<<<<< HEAD
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> c7a4727b (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 9721a5b2 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> 712617d3 (.)
=======
>>>>>>> d284d65 (.)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bd804d67 (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 116df547 (.)
=======
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f957fb24b (.)
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
>>>>>>> 1442e291 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 138485550 (.)
=======
>>>>>>> 2e9bd58c3 (.)
=======
>>>>>>> 37beb5238 (.)
=======
>>>>>>> 53eef8d8d (.)
=======
>>>>>>> 753ea7aca (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 36136dcfa (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> 7aae79847 (.)
=======
>>>>>>> 275b7ad99 (.)
=======
>>>>>>> 47bbf2b1c (.)
=======
>>>>>>> b215d516b (.)
=======
>>>>>>> 731b801a8 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 74eb2e964 (.)
=======
>>>>>>> f957fb24b (.)
=======
=======
- [Laravel Exceptions](https://laravel.com/docs/errors)
- [Filament Forms](https://filamentphp.com/docs/forms)
- [Discord Webhooks](https://discord.com/developers/docs/resources/webhook)
- [Slack Webhooks](https://api.slack.com/messaging/webhooks) 
>>>>>>> fdb24863 (rebase 210)
>>>>>>> b85076e48 (.)
=======
>>>>>>> 3e757cee2 (.)
=======
>>>>>>> a75783374 (.)
=======
>>>>>>> 0a5473e16 (.)
=======
>>>>>>> 252fa579e (.)
=======
>>>>>>> 43dd68f4b (.)
=======
>>>>>>> ce1853afd (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
>>>>>>> 6ad5224fb (.)
=======
>>>>>>> 21a6fa9bc (.)
=======
>>>>>>> 7a142b4f5 (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> e312314fa (.)
=======
>>>>>>> 1c96b91fe (.)
=======
>>>>>>> 610b999f1 (.)
=======
>>>>>>> c31e900eb (.)
=======
>>>>>>> 01750b107 (.)
=======
>>>>>>> 5e028c03d (.)
=======
>>>>>>> ad905ce9c (.)
=======
>>>>>>> ff78f10a5 (.)
=======
>>>>>>> fea359347 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> c7d5eaf96 (.)
=======
>>>>>>> d9e649ac3 (.)
