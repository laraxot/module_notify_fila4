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

class AgiletelecomData extends Data
{
    public ?string $username;

    public ?string $password;

    public ?string $sender;

    public ?string $endpoint;

    public ?string $enable_delivery;

    public ?string $simulation;

    public string $auth_type = 'basic';

    public ?string $api_key;

    public ?string $oauth_token;

    public int $timeout = 30;

    private static ?self $instance = null;

    public static function make(): self
    {
        if (! (self::$instance instanceof AgiletelecomData)) {
=======
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email as MimeEmail;
use Webmozart\Assert\Assert;

class AgiletelecomData extends Data
{
    public null|string $username;
    public null|string $password;
    public null|string $sender;
    public null|string $endpoint;
    public null|string $enable_delivery;
    public null|string $simulation;
    public string $auth_type = 'basic';
    public null|string $api_key;
    public null|string $oauth_token;
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof AgiletelecomData)) {
>>>>>>> 99ff506 (.)
            /*
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.agiletelecom', []);
             */
<<<<<<< HEAD
=======
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Symfony\Component\Mime\Address;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Spatie\LaravelData\Data;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email as MimeEmail;
use Webmozart\Assert\Assert;

class AgiletelecomData extends Data
{
    public null|string $username;
    public null|string $password;
    public null|string $sender;
    public null|string $endpoint;
    public null|string $enable_delivery;
    public null|string $simulation;
    public string $auth_type = 'basic';
    public null|string $api_key;
    public null|string $oauth_token;
    public int $timeout = 30;

    private static null|self $instance = null;

    public static function make(): self
    {
        if (!(self::$instance instanceof AgiletelecomData)) {
            /*
<<<<<<< HEAD
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.agiletelecom', []);
            */
>>>>>>> a12f125f4a (.)
=======
             * $data = TenantService::getConfig('sms');
             * $data = Arr::get($data, 'drivers.agiletelecom', []);
             */
>>>>>>> b93ef594b4 (.)
=======
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Symfony\Component\Mime\Address;
use Illuminate\Support\Facades\Config;
use Modules\Tenant\Services\TenantService;
use Symfony\Component\Mime\Email as MimeEmail;

class AgiletelecomData extends Data
{
    public ?string $username;
    public ?string $password;
    public ?string $sender;
    public ?string $endpoint;
    public ?string $enable_delivery;
    public ?string $simulation;
    public string $auth_type='basic';
    public ?string $api_key;
    public ?string $oauth_token;
    public int $timeout=30;

    private static ?self $instance = null;


    public static function make(): self
    {
        if (! self::$instance instanceof AgiletelecomData) {
            /*
            $data = TenantService::getConfig('sms');
            $data = Arr::get($data, 'drivers.agiletelecom', []);
            */
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            $data = Config::array('sms.drivers.agiletelecom');
            self::$instance = self::from($data);
        }

        return self::$instance;
    }

<<<<<<< HEAD
    public function getAuthHeaders(): array
    {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function getAuthHeaders(): array
    {
=======
=======
>>>>>>> origin/develop

    public function getAuthHeaders(): array
    {
                
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    public function getAuthHeaders(): array
    {
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        switch ($this->auth_type) {
            case 'api_key':
                return [
<<<<<<< HEAD
                    'Authorization' => 'Api-Key '.$this->api_key,
=======
                    'Authorization' => 'Api-Key ' . $this->api_key,
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
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
                    'Content-Type' => 'application/json',
                ];

            case 'oauth':
                return [
<<<<<<< HEAD
                    'Authorization' => 'OAuth '.$this->oauth_token,
=======
                    'Authorization' => 'OAuth ' . $this->oauth_token,
>>>>>>> 99ff506 (.)
                    'Content-Type' => 'application/json',
                ];

<<<<<<< HEAD
=======
=======
                    'Content-Type' => 'application/json'
=======
                    'Content-Type' => 'application/json',
>>>>>>> b93ef594b4 (.)
                ];

            case 'oauth':
                return [
                    'Authorization' => 'OAuth ' . $this->oauth_token,
                    'Content-Type' => 'application/json',
                ];
<<<<<<< HEAD
            
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
                    'Content-Type' => 'application/json'
                ];
            
            case 'oauth':
                return [
                    'Authorization' => 'OAuth ' . $this->oauth_token,
                    'Content-Type' => 'application/json'
                ];
            
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
            case 'basic':
            default:
                return [
<<<<<<< HEAD
                    'Authorization' => 'Basic '.base64_encode($this->username.':'.$this->password),
=======
                    'Authorization' => 'Basic ' . base64_encode($this->username . ':' . $this->password),
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
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
                    'Content-Type' => 'application/json',
                ];
        }
    }
}
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
                    'Content-Type' => 'application/json'
                ];
        }
    }
    
<<<<<<< HEAD
}
>>>>>>> a12f125f4a (.)
=======
                    'Content-Type' => 'application/json',
                ];
        }
    }
}
>>>>>>> b93ef594b4 (.)
=======
}
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
