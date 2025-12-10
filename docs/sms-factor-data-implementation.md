<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
# SmsFactorData Implementation Summary

## Overview

This document summarizes the implementation of the `SmsFactorData` class and the refactoring of `SendSmsFactorSMSAction` to follow the same pattern as `AgiletelecomData`.

## Changes Made

### 1. Created SmsFactorData Class

**File**: `/Modules/Notify/app/Datas/SMS/SmsFactorData.php`

- **Purpose**: Centralized configuration management for SMSFactor SMS provider
- **Pattern**: Follows the same structure as `AgiletelecomData`
- **Features**:
  - Singleton pattern implementation
  - Configuration loading from `config('sms.drivers.smsfactor')`
  - Authentication header generation
  - Helper methods for common operations

**Key Properties**:
- `$token`: SMSFactor API token
- `$base_url`: API endpoint URL (default: https://api.smsfactor.com)
- `$auth_type`: Authentication type (default: 'bearer')
- `$timeout`: HTTP request timeout (default: 30 seconds)

**Key Methods**:
- `make()`: Singleton factory method
- `getAuthHeaders()`: Returns Bearer authentication headers
- `getBaseUrl()`: Returns configured base URL
- `getTimeout()`: Returns configured timeout

### 2. Refactored SendSmsFactorSMSAction

**File**: `/Modules/Notify/app/Actions/SMS/SendSmsFactorSMSAction.php`

**Changes**:
- Replaced manual configuration handling with `SmsFactorData` usage
- Removed redundant properties (`$token`, `$baseUrl`, `$timeout`)
- Simplified constructor logic
- Updated `execute()` method to use data class methods

**Before**:
```php
private string $token;
private string $baseUrl;
private int $timeout;

public function __construct()
{
    $config = config('sms.drivers.smsfactor');
    $this->token = $config['token'] ?? null;
    $this->baseUrl = $config['base_url'] ?? 'https://api.smsfactor.com';
    $this->timeout = (int) config('sms.timeout', 30);
}
```

**After**:
```php
private SmsFactorData $smsFactorData;

public function __construct()
{
    $this->smsFactorData = SmsFactorData::make();
    
    if (!$this->smsFactorData->token) {
        throw new Exception('Token SMSFactor non configurato in sms.php');
    }
}
```

### 3. Updated Documentation

**Files Created/Updated**:
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> fd1fcc4c (.)
=======
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- `/Modules/Notify/project_docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/project_docs/sms_implementation.md`: Updated to include data class information
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
- `/Modules/Notify/docs/sms/drivers/smsfactor/data-class.md`: Comprehensive documentation for `SmsFactorData`
- `/Modules/Notify/docs/sms_implementation.md`: Updated to include data class information

**Documentation Includes**:
- Complete class structure and properties
- Method descriptions and usage examples
- Configuration requirements
- Environment variable setup
- Usage patterns and best practices
- Migration guide from direct configuration access

## Benefits of This Implementation

### 1. Consistency
- Follows the same pattern as `AgiletelecomData`
- Standardized approach across SMS providers
- Consistent method naming and structure

### 2. Type Safety
- Leverages Spatie Laravel Data for type safety
- Explicit property types and method signatures
- Better IDE support and autocompletion

### 3. Centralized Configuration
- Single point of configuration management
- Singleton pattern prevents multiple configuration loads
- Easy to extend with additional properties

### 4. Maintainability
- Cleaner action classes with reduced complexity
- Separation of concerns between configuration and business logic
- Easier testing with mockable data objects

### 5. Reusability
- Data class can be used by other SMS-related classes
- Helper methods reduce code duplication
- Standardized authentication header generation

## Configuration Requirements

### Environment Variables
```env
SMSFACTOR_TOKEN=your_smsfactor_api_token
SMSFACTOR_BASE_URL=https://api.smsfactor.com
```

### SMS Configuration
```php
// config/sms.php
'drivers' => [
    'smsfactor' => [
        'token' => env('SMSFACTOR_TOKEN'),
        'base_url' => env('SMSFACTOR_BASE_URL', 'https://api.smsfactor.com'),
    ],
],
```

## Usage Example

```php
use Modules\Notify\Datas\SMS\SmsFactorData;
use Modules\Notify\Actions\SMS\SendSmsFactorSMSAction;

// Get configuration data
$smsFactorData = SmsFactorData::make();

// Use in action
$action = new SendSmsFactorSMSAction();
$result = $action->execute($smsData);

// Direct usage of data class
$headers = $smsFactorData->getAuthHeaders();
$baseUrl = $smsFactorData->getBaseUrl();
```

## Testing Considerations

The new implementation makes testing easier by allowing mock data objects:

```php
// Create test data
$testData = SmsFactorData::from([
    'token' => 'test_token',
    'base_url' => 'https://test.smsfactor.com',
    'timeout' => 10
]);

// Use in tests
$headers = $testData->getAuthHeaders();
$this->assertEquals('Bearer test_token', $headers['Authorization']);
```

## Future Enhancements

1. **Additional Providers**: The same pattern can be applied to other SMS providers
2. **Configuration Validation**: Add validation rules to the data class
3. **Caching**: Implement configuration caching for better performance
4. **Monitoring**: Add logging and monitoring capabilities to the data class

## Related Files

- `/Modules/Notify/app/Datas/SMS/AgiletelecomData.php`: Similar implementation for Agiletelecom
- `/Modules/Notify/app/Actions/SMS/SendSmsFactorSMSAction.php`: Refactored action class
- `/Modules/Notify/config/sms.php`: SMS configuration file
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 66453ace (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 23cbbaf5 (.)
=======
>>>>>>> febe79e3 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 4f042b88 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> bb7e77c2 (.)
=======
>>>>>>> c7a4727b (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> b99af5a8 (.)
=======
>>>>>>> 9721a5b2 (.)
=======
>>>>>>> 712617d3 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> f3086887 (rebase 210)
=======
>>>>>>> 1442e291 (rebase 210)
=======
>>>>>>> fdb24863 (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 3d462363 (rebase 210)
=======
>>>>>>> fcaebc79 (rebase 210)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 4fc21b78 (rebase 210)
=======
>>>>>>> 9c45d9bd (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 54ad93c4 (rebase 210)
=======
>>>>>>> 9d3810d0 (rebase 210)
=======
>>>>>>> eb62d6cf (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 6e12a84b (rebase 210)
=======
>>>>>>> d38aa9d2 (rebase 210)
=======
>>>>>>> 8c8937e7 (rebase 210)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 545977c8 (rebase 210)
=======
>>>>>>> 9e7ba5b6 (rebase 210)
=======
>>>>>>> 36ac4fc1 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> fd1fcc4c (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> eb71492d (.)
=======
>>>>>>> f9ec4f86 (.)
=======
>>>>>>> 4f3927d7 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 0ebb7b01 (.)
=======
>>>>>>> cccb594f (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> 75179b855 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
- `/Modules/Notify/project_docs/sms_implementation.md`: General SMS implementation documentation
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
- `/Modules/Notify/docs/sms_implementation.md`: General SMS implementation documentation

## Conclusion

The implementation of `SmsFactorData` and the refactoring of `SendSmsFactorSMSAction` successfully follows the established pattern and provides a more maintainable, type-safe, and consistent approach to SMS provider configuration management. This change aligns with the project's architecture principles and makes the codebase more robust and easier to extend.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 66453ace (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 2a97406c (.)
=======
>>>>>>> 4f042b88 (.)
=======
>>>>>>> 712617d3 (.)
=======
>>>>>>> fdb24863 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)
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
