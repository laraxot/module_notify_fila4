<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

use Override;
use Modules\Xot\Contracts\UserContract;
use Modules\User\Models\Policies\UserBasePolicy;

abstract class NotifyBasePolicy extends UserBasePolicy
{
    public function viewAny(UserContract $user): bool
    {
        return false;
    }
}
