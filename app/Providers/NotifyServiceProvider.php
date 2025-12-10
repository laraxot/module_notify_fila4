<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Override;
// use Illuminate\Support\Facades\Notification;
use Override;
// use Illuminate\Support\Facades\Notification;
use Override;
// use Illuminate\Support\Facades\Notification;
use Override;
use Override;
use Override;
use Override;
// use Illuminate\Support\Facades\Notification;
use Override;
use Override;
use Override;
use Override;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Override;
use Override;
use Override;
use Override;
use Webmozart\Assert\Assert;
use Override;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Webmozart\Assert\Assert;
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;
use Webmozart\Assert\Assert;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[\Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    #[Override]
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
        // if (! app()->environment('production')) {
        //if (! app()->environment('production')) {
    #[Override]
    #[Override]
    public function boot(): void
    {
        parent::boot();
        // if (! app()->environment('production')) {
        //if (! app()->environment('production')) {
    #[\Override]
    public function boot(): void
    {
        parent::boot();
        // if (! app()->environment('production')) {
    #[Override]
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
    #[Override]
    public function boot(): void
    {
        parent::boot();
        // if (! app()->environment('production')) {
        //if (! app()->environment('production')) {
    #[\Override]
    public function boot(): void
    {
        parent::boot();
        // if (! app()->environment('production')) {
    #[Override]
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
        $mail = TenantService::config('mail');
        Assert::isArray($mail);

        $fallbackTo = Arr::get($mail, 'fallback_to');

        if (is_string($fallbackTo)) {
            Mail::alwaysTo($fallbackTo);
        }

        // }
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
        //if (! app()->environment('production')) {
        $mail = TenantService::config('mail');
        Assert::isArray($mail);

        $fallbackTo = Arr::get($mail, 'fallback_to');

        if (is_string($fallbackTo)) {
            Mail::alwaysTo($fallbackTo);
        }

        // }
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
    }
}
