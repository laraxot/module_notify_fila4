<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

<<<<<<< HEAD
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
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Arr;
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.nexmo', []);
             */
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
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->key.':'.$this->secret),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->key . ':' . $this->secret),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
                    'Authorization' => 'Basic ' . base64_encode($this->key . ':' . $this->secret),
>>>>>>> 7148d73 (.)
                    'Content-Type' => 'application/json',
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
