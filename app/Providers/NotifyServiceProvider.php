<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

// use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Override;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Arr;
use Webmozart\Assert\Assert;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    public function boot(): void
    {
        parent::boot();
        //if (! app()->environment('production')) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        $mail = TenantService::config('mail');
        Assert::isArray($mail);
        $fallback_to = Arr::get($mail, 'fallback_to', null);
        if (is_string($fallback_to)) {
            Mail::alwaysTo($fallback_to);
        }

        // }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
            $mail=TenantService::config('mail');
            Assert::isArray($mail);
            $fallback_to=Arr::get($mail,'fallback_to',null);
            if(is_string($fallback_to)){
                Mail::alwaysTo($fallback_to);
            }
       // }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }
}
