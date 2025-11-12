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

class PlivoData extends Data
{
    public ?string $auth_id;

    public ?string $auth_token;

    public ?string $base_url;

    public string $auth_type = 'basic';

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof PlivoData)) {
=======
use Webmozart\Assert\Assert;

class PlivoData extends Data
{
    public null|string $auth_id;
    public null|string $auth_token;
    public null|string $base_url;
    public string $auth_type = 'basic';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof PlivoData)) {
>>>>>>> 99ff506 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.plivo', []);
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

class PlivoData extends Data
{
    public null|string $auth_id;
    public null|string $auth_token;
    public null|string $base_url;
    public string $auth_type = 'basic';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof PlivoData)) {
            /*
<<<<<<< HEAD
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.plivo', []);
            */
>>>>>>> a12f125f4a (.)
=======
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.plivo', []);
             */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;

class PlivoData extends Data
{
    public ?string $auth_id;
    public ?string $auth_token;
    public ?string $base_url;
    public string $auth_type = 'basic';
    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance instanceof PlivoData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.plivo', []);
            */
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $data = Config::array('sms.drivers.plivo');
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
                    'Authorization' => 'Basic '.base64_encode($this->auth_id.':'.$this->auth_token),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->auth_id . ':' . $this->auth_token),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
<<<<<<< HEAD
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> f813254 (.)
                    'Content-Type' => 'application/json',
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    'Content-Type' => 'application/json',
=======
                    'Content-Type' => 'application/json'
>>>>>>> a12f125f4a (.)
=======
                    'Content-Type' => 'application/json',
>>>>>>> b93ef594b4 (.)
=======
                    'Content-Type' => 'application/json'
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
                ];
        }
    }

    public function getBaseUrl(): string
    {
        return $this->base_url ?? 'https://api.plivo.com';
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
