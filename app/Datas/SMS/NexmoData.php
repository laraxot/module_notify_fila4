<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

use Illuminate\Support\Arr;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.nexmo', []);
             */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
                    'Authorization' => 'Basic ' . base64_encode($this->key . ':' . $this->secret),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
                    'Content-Type' => 'application/json',
=======
                    'Content-Type' => 'application/json'
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    'Content-Type' => 'application/json',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                    'Content-Type' => 'application/json',
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
