<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Spatie\LaravelData\Data;

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
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Arr;
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.plivo', []);
             */
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
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->auth_id.':'.$this->auth_token),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->auth_id . ':' . $this->auth_token),
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
                    'Authorization' => 'Basic ' . base64_encode($this->auth_id . ':' . $this->auth_token),
>>>>>>> 7148d73 (.)
                    'Content-Type' => 'application/json',
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
