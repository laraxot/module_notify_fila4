<?php

declare(strict_types=1);

namespace Modules\Notify\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Override;
use Webmozart\Assert\Assert;

class NotifyServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Notify';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    #[Override]
    public function boot(): void
    {
        parent::boot();

        $mail = TenantService::config('mail');
        Assert::isArray($mail);

        $fallbackTo = Arr::get($mail, 'fallback_to');

        if (is_string($fallbackTo)) {
            Mail::alwaysTo($fallbackTo);
        }
    }
}
