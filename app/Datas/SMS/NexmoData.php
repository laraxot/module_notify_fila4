<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Spatie\LaravelData\Data;

class NexmoData extends Data
{
    public ?string $key;

    public ?string $secret;

    public ?string $base_url;

    public string $auth_type = 'api_key';

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof NexmoData)) {
=======
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class NexmoData extends Data
{
    public null|string $key;
    public null|string $secret;
    public null|string $base_url;
    public string $auth_type = 'api_key';
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof NexmoData)) {
>>>>>>> 75179b8 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.nexmo', []);
             */
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;

class NexmoData extends Data
{
    public ?string $key;
    public ?string $secret;
    public ?string $base_url;
    public string $auth_type = 'api_key';
    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance instanceof NexmoData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.nexmo', []);
            */
>>>>>>> b19cd40 (.)
            $data = Config::array('sms.drivers.nexmo');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getAuthHeaders(): array
    {
        switch ($this->auth_type) {
            case 'api_key':
            default:
                return [
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->key.':'.$this->secret),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->key . ':' . $this->secret),
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
                    'Content-Type' => 'application/json',
=======
                    'Content-Type' => 'application/json'
>>>>>>> b19cd40 (.)
                ];
        }
    }

    public function getBaseUrl(): string
    {
        return $this->base_url ?? 'https://rest.nexmo.com';
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
