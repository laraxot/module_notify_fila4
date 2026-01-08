<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
# `RecordNotification`

This document describes the `RecordNotification` class, a Laravel Notification that acts as a **Bridge** between Laravel's notification system and the `SpatieEmail` mailable system. It delegates all template resolution, placeholder replacement, and layout logic to `SpatieEmail`, following the **Zen Delegation Pattern**.

## Location

`laravel/Modules/Notify/app/Notifications/RecordNotification.php`

## Purpose

To provide a thin wrapper that connects Laravel's Notification system to `SpatieEmail` for content generation. `RecordNotification` handles channel determination and notification orchestration, while delegating all content operations (template resolution, placeholder replacement, layout application) to the specialized `SpatieEmail` mailable.

## Key Features

*   **Zen Delegation Bridge**: Delegates all template/content logic to `SpatieEmail` mailable
*   **Channel Determination**: The `via()` method dynamically determines which channels are supported based on the notifiable's routing capabilities using `routeNotificationFor()`
*   **Content Generation**: `toMail()` and `toSms()` methods delegate completely to `SpatieEmail` for all content operations
*   **Protected Properties**: Uses `protected` properties (`$record`, `$slug`) to store notification data
*   **Custom Channel Integration**: Integrates with custom channels like `SmsChannel` (from `Modules\Notify\Channels\SmsChannel`)

## Constructor

```php
public function __construct(
    Model $record,
    string $slug
)
```
*   `$record`: The Eloquent model (e.g., `Client`) that is the recipient of the notification.
*   `$slug`: The logical identifier (string) of the notification type, used by `SpatieEmail` to resolve the `MailTemplate`.

**Zen Delegation Pattern**: The constructor stores only the record and slug. Template resolution happens later when `SpatieEmail` is instantiated in `toMail()` or `toSms()` methods. This ensures `RecordNotification` remains a pure bridge without duplicating template logic.

## Methods

### `via(object $notifiable): array<string|class-string>`

Determines the channels through which the notification should be sent. This method checks if the notifiable supports each channel using the `routeNotificationFor()` method.

*   **Returns:** An array of channel identifiers (strings or class names) that Laravel's Notification system will use.
*   **Mail Channel**: Added if `routeNotificationFor('mail')` returns a truthy value
*   **SMS Channel**: Added if `routeNotificationFor('sms')` returns a truthy value (uses `Modules\Notify\Channels\SmsChannel::class`)

**Implementation Details**:
- Checks if notifiable has `routeNotificationFor()` method
- Only adds channels that the notifiable can route to
- Returns empty array if notifiable doesn't support routing

### `toMail(object $notifiable): SpatieEmail`

Generates the email content for the notification by delegating completely to `SpatieEmail`.

**Implementation**:
1. Creates a new `SpatieEmail` instance with the record and slug (template resolution happens here)
2. Merges additional data using `mergeData()`
3. Adds attachments using `addAttachments()`
4. Sets recipient if available from `routeNotificationFor('mail')` for `envelope()` method
5. Returns the configured `SpatieEmail` instance

**Zen Delegation Pattern**: All template resolution, placeholder replacement, and layout logic (including seasonal layouts via `GetMailLayoutAction`) is handled by `SpatieEmail`. `RecordNotification` simply orchestrates and returns the configured mailable.

**Return Type**: Returns `SpatieEmail` directly (Laravel supports this pattern, as seen in `UserServiceProvider` with `ResetPassword::toMailUsing()`)

### `toSms(object $notifiable): ?SmsData`

Generates the SMS content for the notification by delegating to `SpatieEmail->buildSms()`.

**Implementation**:
1. Creates a new `SpatieEmail` instance with the record and slug
2. Merges additional data using `mergeData()`
3. Gets recipient phone number from `routeNotificationFor('sms')` or uses `config('sms.fallback_to')`
4. Builds SMS content using `SpatieEmail->buildSms()` method (which handles template resolution and Mustache placeholder replacement)
5. Wraps content in `SmsData` object and returns it, or returns `null` if no recipient found

**Zen Delegation Pattern**: SMS content generation is completely handled by `SpatieEmail->buildSms()`. `RecordNotification` only orchestrates recipient resolution and wraps the result in `SmsData`.

**Return Type**: Returns `?SmsData` for `Modules\Notify\Channels\SmsChannel` which expects `SmsData` instance.

### `mergeData(array $data): self`

Merges additional data that will be passed to `SpatieEmail` for placeholder replacement. This allows adding extra data that can be used in template placeholders beyond the record's own attributes.

**Parameters**:
- `$data`: Array of key-value pairs to merge

**Returns:** `$this` for method chaining

**Example:**
```php
$notification = new RecordNotification($record, 'notification-slug');
$notification->mergeData([
    'custom_field' => 'Custom Value',
    'timestamp' => now()->format('Y-m-d H:i:s'),
]);
// Data is passed to SpatieEmail->mergeData() when toMail() or toSms() is called
```

### `addAttachments(array $attachments): self`

Adds file attachments to the notification. These will be processed by `SpatieEmail` when the mail channel is used.

**Parameters**:
- `$attachments`: Array of attachment arrays, each containing at least `path`, optionally `as` (filename), and `mime`

**Returns:** `$this` for method chaining

**Example:**
```php
$notification->addAttachments([
    ['path' => storage_path('app/invoice.pdf'), 'as' => 'invoice.pdf', 'mime' => 'application/pdf'],
]);
// Attachments are passed to SpatieEmail->addAttachments() when toMail() is called
```

## Usage

This notification is typically instantiated and dispatched by an Action (e.g., `SendRecordNotificationAction`) that determines the specific recipient and template slug. The notification acts as a bridge that delegates all content operations to `SpatieEmail`.

**Example:**
```php
// ✅ CORRETTO: Pass record and slug - content generation delegated to SpatieEmail
$notification = new RecordNotification($client, 'welcome-customer');
$notification->mergeData(['custom_field' => 'value']);
$notification->addAttachments([...]);
$client->notify($notification);

// SpatieEmail handles:
// - Template resolution (firstOrCreate)
// - Placeholder replacement (Mustache)
// - Layout application (GetMailLayoutAction)
// - Seasonal layouts (via GetThemeContextAction)
```

**Zen Delegation Pattern**: `RecordNotification` serves as a bridge between Laravel's notification system and the `SpatieEmail` mailable system. All template resolution, placeholder replacement, and content generation is handled by `SpatieEmail`, maintaining absolute separation of concerns and DRY principle.

## Adherence to Laraxot Principles

*   **DRY (Don't Repeat Yourself):** Zero duplication - delegates content generation to `SpatieEmail`, avoiding duplicate template logic.
*   **KISS (Keep It Simple, Stupid):** Provides a clear interface that delegates complexity to the appropriate component (`SpatieEmail`). Thin wrapper, not God Object.
*   **Separation of Concerns:** `RecordNotification` focuses on channel determination and notification orchestration, while `SpatieEmail` handles all content operations.
*   **Zen Delegation:** Follows the bridge pattern where `RecordNotification` acts as a pure bridge between Laravel notifications and `SpatieEmail` mailables.
*   **Single Responsibility Principle (SRP):** `RecordNotification` = Bridge, `SpatieEmail` = Content Generation.

## Architecture Pattern

### The Bridge Pattern

```
Laravel Notification System
         ↓
RecordNotification (Bridge)
    - via() → Channel determination
    - toMail() → Returns SpatieEmail
    - toSms() → Uses SpatieEmail->buildSms()
         ↓
SpatieEmail (Specialized Agent)
    - Template resolution (firstOrCreate)
    - Placeholder replacement (Mustache)
    - Layout application (GetMailLayoutAction)
    - Seasonal layouts (GetThemeContextAction)
```

### Why This Is Better

1. **Single Source of Truth**: All template/content logic in `SpatieEmail`
2. **DRY**: Zero duplication - if you change placeholder logic, change only `SpatieEmail`
3. **Testability**: Test `SpatieEmail` separately, `RecordNotification` becomes thin wrapper
4. **Maintainability**: Changes to template system affect only `SpatieEmail`
5. **Consistency**: Same system (`SpatieEmail`) used for direct email sending and notifications

## Quality Assurance

### Static Analysis Results
*   **PHPStan Level 10**: ✅ Pass - No errors detected
*   **Type Safety**: ✅ All methods properly typed
*   **Autoloader**: ✅ Properly registered

### Key Quality Patterns
*   **Zen Delegation**: Properly delegates all content operations to `SpatieEmail`
*   **Type Safety**: Strong typing with `declare(strict_types=1)` declaration
*   **Method Chaining**: Consistent fluent interface for `mergeData()` and `addAttachments()`
*   **Null Safety**: Proper null checks for recipient resolution in `toSms()`

### Performance Considerations
*   **Lazy Instantiation**: `SpatieEmail` created only when `toMail()` or `toSms()` is called
*   **Channel Optimization**: Channel selection based on notifiable capabilities via `routeNotificationFor()`
*   **Memory Efficiency**: No unnecessary object creation - `SpatieEmail` created on-demand

## Related Documentation

*   [`ChannelEnum` Documentation](../enums/channel-enum.md)
*   [`SpatieEmail` Documentation](../emails/spatie-email.md)
*   [`SendRecordNotificationAction` Documentation](../actions/send-record-notification-action.md)
*   [`SmsChannel` Documentation](./channels/sms-channel.md) - Note: Uses `Modules\Notify\Channels\SmsChannel` (expects `SmsData`)
*   [`SmsData` Documentation](../datas/sms-data.md)
*   [Zen Delegation Strategy](../refactoring/record-notification-zen-delegation.md)
=======
=======
>>>>>>> 022fa8f1c (.)
=======
>>>>>>> 125a2c2b8 (.)
# RecordNotification Documentation

## Overview
The `RecordNotification` class is a Laravel notification that handles sending notifications for model records via multiple channels (email and SMS). It supports dynamic data merging and file attachments, making it suitable for complex notification scenarios.

## Location
`/laravel/Modules/Notify/app/Notifications/RecordNotification.php`

## Class Structure

### Namespace
```php
namespace Modules\Notify\Notifications;
```

### Inheritance
Extends `Illuminate\Notifications\Notification`

### Dependencies
- `Illuminate\Support\Str` - String manipulation utilities
- `Modules\Notify\Datas\SmsData` - SMS data structure
- `Modules\Notify\Emails\SpatieEmail` - Email handling class
- `Illuminate\Database\Eloquent\Model` - Base model class
- `Modules\Notify\Channels\SmsChannel` - Custom SMS notification channel
- `Modules\Notify\Models\MailTemplate` - Mail template model
- `Illuminate\Notifications\Notification` - Base notification class

## Properties

### Protected Properties
- `protected Model $record` - The model record associated with the notification
- `protected string $slug` - Slugified identifier for the notification type

### Public Properties
- `public array $data = []` - Additional data to merge into the notification
- `public array $attachments = []` - File attachments for the notification

## Methods

### __construct()
Initializes the notification with a model record and slug identifier.

#### Parameters
- `Model $record` - The model record to notify about
- `string $slug` - Notification type identifier (will be slugified)

#### Implementation
```php
public function __construct(Model $record, string $slug)
{
    $this->record = $record;
    $this->slug = Str::slug($slug);
}
```

### via()
Determines which notification channels to use based on the notifiable's routing configuration.

#### Parameters
- `object $notifiable` - The entity being notified

#### Return Type
`array<string|class-string>` - Array of notification channels

#### Logic Flow
1. Checks if notifiable has `routeNotificationFor` method
2. Returns empty array if method doesn't exist
3. Adds 'mail' channel if email routing is configured
4. Adds `SmsChannel::class` if SMS routing is configured

#### Implementation
```php
public function via($notifiable): array
{
    $channels = [];
    if (!method_exists($notifiable, 'routeNotificationFor')){
        return $channels;
    }
    if($notifiable->routeNotificationFor('mail')) {
        $channels[] = 'mail';
    }
    if($notifiable->routeNotificationFor('sms')) {
        $channels[] = SmsChannel::class;
    }
    return $channels;
}
```

### toMail()
Generates the email representation of the notification.

#### Parameters
- `object $notifiable` - The entity being notified

#### Return Type
`SpatieEmail` - Configured email object

#### Process Flow
1. Creates new `SpatieEmail` instance with record and slug
2. Merges additional data using `mergeData()`
3. Adds attachments using `addAttachments()`
4. Configures recipient if notifiable has email routing
5. Sets recipient address for email delivery

#### Implementation
```php
public function toMail($notifiable): SpatieEmail
{
    $email = new SpatieEmail($this->record, $this->slug);
    $email = $email->mergeData($this->data);
    $email = $email->addAttachments($this->attachments);

    // Ensure there's always a recipient
    if (method_exists($notifiable, 'routeNotificationFor')) {
        $to = $notifiable->routeNotificationFor('mail');
        $email->to($to);
        if ($to) {
            $email->setRecipient($to);
        }
    }

    return $email;
}
```

### toSms()
Generates the SMS representation of the notification.

#### Parameters
- `object $notifiable` - The entity being notified

#### Return Type
`?SmsData` - SMS data object or null if no SMS routing

#### Process Flow
1. Creates `SpatieEmail` instance to generate SMS content
2. Merges additional data
3. Extracts SMS routing information from notifiable
4. Returns null if no SMS routing configured
5. Creates and returns `SmsData` object with SMS content

#### Implementation
```php
public function toSms(object $notifiable): ?SmsData
{
    $email = new SpatieEmail($this->record, $this->slug);
    $email = $email->mergeData($this->data);
   
    $to = null;
    if (method_exists($notifiable, 'routeNotificationFor')) {
        $to = $notifiable->routeNotificationFor('sms');
    }
    if($to == null){
        return null;
    }

    $smsData = SmsData::from([
        'from' => 'Xot',
        'to' => $to,
        'body' => $email->buildSms(),
    ]);

    return $smsData;
}
```

### mergeData()
Merges additional data into the notification's data array.

#### Parameters
- `array $data` - Data to merge

#### Return Type
`self` - Returns the notification instance for method chaining

#### Implementation
```php
public function mergeData(array $data): self
{
    $this->data = array_merge($this->data, $data);
    return $this;
}
```

### addAttachments()
Adds file attachments to the notification.

#### Parameters
- `array $attachments` - Array of attachment data

#### Return Type
`self` - Returns the notification instance for method chaining

#### Implementation
```php
public function addAttachments(array $attachments): self
{
    $this->attachments = array_merge($this->attachments, $attachments);
    return $this;
}
```

## Usage Examples

### Basic Notification
```php
$notification = new RecordNotification($appointment, 'appointment-confirmed');
$user->notify($notification);
```

### With Additional Data
```php
$notification = new RecordNotification($appointment, 'appointment-confirmed');
$notification->mergeData([
    'doctor_name' => $appointment->doctor->name,
    'appointment_time' => $appointment->starts_at->format('Y-m-d H:i')
]);
$user->notify($notification);
```

### With Attachments
```php
$notification = new RecordNotification($appointment, 'report-completed');
$notification->addAttachments([
    [
        'as' => 'report.pdf',
        'data' => $pdfContent,
    ]
]);
$user->notify($notification);
```

### Method Chaining
```php
$user->notify(
    (new RecordNotification($appointment, 'appointment-reminder'))
        ->mergeData(['reminder_time' => '1 hour'])
        ->addAttachments($reportAttachments)
);
```

## Integration Points

### With SpatieEmail
The notification creates `SpatieEmail` instances for both email and SMS content generation. The email class handles:
- Template rendering
- Data merging
- Attachment processing
- Content formatting

### With State Transitions
Used by state transition classes to send notifications with attachments:

```php
// In BaseTransition
$notification = new RecordNotification($this->record, $this->getNotificationSlug());
$notification->mergeData($this->getNotificationData());
$notification->addAttachments($this->getNotificationAttachments());
$notifiable->notify($notification);
```

### With Notification Channels
- **Mail Channel**: Uses Laravel's built-in mail channel with `SpatieEmail`
- **SMS Channel**: Uses custom `SmsChannel` with `SmsData`

## Attachment Structure

### Expected Format
```php
[
    [
        'as' => 'filename.pdf',        // Display name for attachment
        'data' => $binaryContent,      // Raw file content
    ],
    [
        'path' => '/path/to/file.pdf', // File system path
        'as' => 'custom-name.pdf',     // Optional custom name
    ]
]
```

### Processing
Attachments are processed by the `SpatieEmail` class which:
1. Converts data/path arrays to Laravel `Attachment` objects
2. Validates file existence for path-based attachments
3. Handles both raw data and file path attachments

## Error Handling

### Potential Issues
1. **Missing Routing Methods**: If notifiable doesn't implement `routeNotificationFor`
2. **Invalid Attachments**: If attachment data is malformed
3. **Template Errors**: If email template rendering fails
4. **SMS Routing**: If SMS routing returns invalid phone number

### Defensive Programming
The class includes several defensive checks:
- Method existence validation before calling `routeNotificationFor`
- Null checks for routing results
- Empty array returns for missing routing methods

## Best Practices

### Data Management
1. **Sanitize Data**: Ensure merged data is properly sanitized
2. **Validate Attachments**: Verify attachment data before adding
3. **Memory Management**: Be mindful of large attachments in memory

### Error Handling
1. **Log Failures**: Implement logging for notification failures
2. **Graceful Degradation**: Handle missing routing gracefully
3. **Validation**: Validate notifiable objects before processing

### Performance
1. **Lazy Loading**: Consider lazy loading for large attachments
2. **Queue Processing**: Use queued notifications for heavy processing
3. **Caching**: Cache template rendering where appropriate

## Configuration Requirements

### Notifiable Classes
Must implement `routeNotificationFor` method:
```php
public function routeNotificationFor($channel)
{
    switch ($channel) {
        case 'mail':
            return $this->email;
        case 'sms':
            return $this->phone;
        default:
            return null;
    }
}
```

### Channel Configuration
- Mail channel: Standard Laravel mail configuration
- SMS channel: Custom channel implementation required

## Related Files
- `SpatieEmail.php` - Email handling and template rendering
- `SmsData.php` - SMS data structure
- `SmsChannel.php` - Custom SMS notification channel
- `BaseTransition.php` - State transition notification integration
- `MailTemplate.php` - Email template model

## Testing Considerations

### Test Scenarios
1. **Channel Selection**: Test via() method with different notifiable configurations
2. **Email Generation**: Test toMail() with various data and attachments
3. **SMS Generation**: Test toSms() with valid/invalid routing
4. **Data Merging**: Test mergeData() with various data structures
5. **Attachment Handling**: Test addAttachments() with different formats

### Mock Requirements
- Mock notifiable objects with routing methods
- Mock SpatieEmail for email testing
- Mock SmsData for SMS testing
- Mock attachment data for file handling tests

## Future Improvements

### Recommended Enhancements
1. **Validation**: Add validation for attachment data structure
2. **Error Handling**: Improve error handling and logging
3. **Performance**: Implement attachment streaming for large files
4. **Flexibility**: Add support for additional notification channels
5. **Templates**: Support for dynamic template selection based on record type
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bb96c993b (.)
=======
>>>>>>> 022fa8f1c (.)
=======
>>>>>>> ddee9d751 (.)
=======
>>>>>>> 125a2c2b8 (.)
