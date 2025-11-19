<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

// use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
=======
use Override;
>>>>>>> 75179b8 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Webmozart\Assert\Assert;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    public function boot(): void
    {
        parent::boot();
        // if (! app()->environment('production')) {
=======
    #[Override]
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
>>>>>>> 75179b8 (.)
        $mail = TenantService::config('mail');
        Assert::isArray($mail);
        $fallback_to = Arr::get($mail, 'fallback_to', null);
        if (is_string($fallback_to)) {
            Mail::alwaysTo($fallback_to);
        }

        // }
    }
}
