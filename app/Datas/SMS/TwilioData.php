<?php

declare(strict_types=1);

namespace Modules\Notify\Datas\SMS;

use Illuminate\Support\Arr;
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;
<<<<<<< HEAD
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
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.twilio', []);
             */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> c0f3d67cc (.)
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)

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
<<<<<<< HEAD
        if (! (self::$instance instanceof TwilioData)) {
=======
<<<<<<< HEAD
        if (! self::$instance instanceof TwilioData) {
=======
        if (! (self::$instance instanceof TwilioData)) {
=======
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
            /*
<<<<<<< HEAD
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.twilio', []);
             */
=======
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.twilio', []);
            */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
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
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->account_sid.':'.$this->auth_token),
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
=======
>>>>>>> cf20697a6 (.)
                    'Authorization' => 'Basic ' . base64_encode($this->account_sid . ':' . $this->auth_token),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 011072e4 (.)
=======
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->account_sid.':'.$this->auth_token),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->account_sid . ':' . $this->auth_token),
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> cf20697a6 (.)
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
                    'Content-Type' => 'application/x-www-form-urlencoded'
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 9777d1b3 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
>>>>>>> d09cb759 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 3f537838 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
                    'Content-Type' => 'application/x-www-form-urlencoded',
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
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
