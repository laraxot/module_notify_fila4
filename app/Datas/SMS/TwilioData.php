<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

use Illuminate\Support\Arr;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;

class TwilioData extends Data
{
    public ?string $account_sid;

    public ?string $auth_token;

    public ?string $base_url;

    public string $auth_type = 'basic';

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof TwilioData)) {
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.twilio', []);
             */
<<<<<<< HEAD
=======
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class TwilioData extends Data
{
    public null|string $account_sid;
    public null|string $auth_token;
    public null|string $base_url;
    public string $auth_type = 'basic';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof TwilioData)) {
            /*
<<<<<<< HEAD
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.twilio', []);
            */
>>>>>>> a12f125f4a (.)
=======
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.twilio', []);
             */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;

class TwilioData extends Data
{
    public ?string $account_sid;
    public ?string $auth_token;
    public ?string $base_url;
    public string $auth_type = 'basic';
    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance instanceof TwilioData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.twilio', []);
            */
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $data = Config::array('sms.drivers.twilio');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getAuthHeaders(): array
    {
        switch ($this->auth_type) {
            case 'basic':
            default:
                return [
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->account_sid.':'.$this->auth_token),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->account_sid . ':' . $this->auth_token),
<<<<<<< HEAD
>>>>>>> f813254 (.)
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
                    'Content-Type' => 'application/x-www-form-urlencoded'
>>>>>>> a12f125f4a (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> b93ef594b4 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ];
        }
    }

    public function getBaseUrl(): string
    {
        return $this->base_url ?? 'https://api.twilio.com';
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
