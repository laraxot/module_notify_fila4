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

class GammuData extends Data
{
    public ?string $path;

    public ?string $config;

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof GammuData)) {
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.gammu', []);
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

class GammuData extends Data
{
    public null|string $path;
    public null|string $config;
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof GammuData)) {
            /*
<<<<<<< HEAD
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.gammu', []);
            */
>>>>>>> a12f125f4a (.)
=======
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.gammu', []);
             */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;

class GammuData extends Data
{
    public ?string $path;
    public ?string $config;
    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! self::$instance instanceof GammuData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.gammu', []);
            */
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $data = Config::array('sms.drivers.gammu');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

    public function getPath(): string
    {
        return $this->path ?? '/usr/bin/gammu';
    }

    public function getConfig(): string
    {
        return $this->config ?? '/etc/gammurc';
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }
}
