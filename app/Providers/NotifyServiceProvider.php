<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
// use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
use Override;
>>>>>>> 75179b85 (.)
=======
// use Illuminate\Support\Facades\Notification;
use Override;
>>>>>>> 75179b85 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 75179b85 (.)
use Webmozart\Assert\Assert;
=======
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> b19cd40 (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> 75179b85 (.)

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        $mail = TenantService::config('mail');
        Assert::isArray($mail);
        $fallback_to = Arr::get($mail, 'fallback_to', null);
        if (is_string($fallback_to)) {
            Mail::alwaysTo($fallback_to);
        }

        // }
<<<<<<< HEAD
=======
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
>>>>>>> b19cd40 (.)
=======
>>>>>>> 75179b85 (.)
    }
}
