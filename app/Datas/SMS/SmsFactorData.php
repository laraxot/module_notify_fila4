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
<<<<<<< HEAD

class SmsFactorData extends Data
{
    public ?string $token;

    public ?string $base_url;

    public string $auth_type = 'bearer';

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof SmsFactorData)) {
=======
use Webmozart\Assert\Assert;

class SmsFactorData extends Data
{
    public null|string $token;
    public null|string $base_url;
    public string $auth_type = 'bearer';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof SmsFactorData)) {
>>>>>>> 99ff506 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.smsfactor', []);
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

class SmsFactorData extends Data
{
    public null|string $token;
    public null|string $base_url;
    public string $auth_type = 'bearer';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof SmsFactorData)) {
            /*
<<<<<<< HEAD
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.smsfactor', []);
            */
>>>>>>> a12f125f4a (.)
=======
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.smsfactor', []);
             */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;

class SmsFactorData extends Data
{
    public ?string $token;
    public ?string $base_url;
    public string $auth_type = 'bearer';
    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance instanceof SmsFactorData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.smsfactor', []);
            */
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $data = Config::array('sms.drivers.smsfactor');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getAuthHeaders(): array
    {
        switch ($this->auth_type) {
            case 'bearer':
            default:
                return [
<<<<<<< HEAD
                    'Authorization' => 'Bearer '.$this->token,
=======
                    'Authorization' => 'Bearer ' . $this->token,
>>>>>>> 99ff506 (.)
                    'Content-Type' => 'application/json',
<<<<<<< HEAD
                    'Cache-Control' => 'no-cache',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'Cache-Control' => 'no-cache',
=======
                    'Cache-Control' => 'no-cache'
>>>>>>> a12f125f4a (.)
=======
                    'Cache-Control' => 'no-cache',
>>>>>>> b93ef594b4 (.)
=======
                    'Cache-Control' => 'no-cache'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ];
        }
    }

    public function getBaseUrl(): string
    {
        return $this->base_url ?? 'https://api.smsfactor.com';
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
