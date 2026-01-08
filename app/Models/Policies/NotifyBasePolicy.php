<?php

declare(strict_types=1);

namespace Modules\Notify\Models\Policies;

<<<<<<< HEAD
use Override;
use Modules\Xot\Contracts\UserContract;
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Modules\User\Models\Policies\UserBasePolicy;

<<<<<<< HEAD
<<<<<<< HEAD
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
=======
abstract class NotifyBasePolicy extends UserBasePolicy {}
>>>>>>> a12f125f4a (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Support\Str;
use Modules\Xot\Datas\XotData;
use Modules\User\Models\Permission;
use Modules\Xot\Contracts\UserContract;
use Illuminate\Auth\Access\HandlesAuthorization;
>>>>>>> d284d65 (.)
>>>>>>> c0f3d67cc (.)
use Modules\User\Models\Policies\UserBasePolicy;

<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
>>>>>>> 75cb51873 (.)
abstract class NotifyBasePolicy extends UserBasePolicy
{
<<<<<<< HEAD
    public function viewAny(UserContract $user): bool
    {
        return false;
    }
=======
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
}
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
abstract class NotifyBasePolicy extends UserBasePolicy {}
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
    
}
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
=======
abstract class NotifyBasePolicy extends UserBasePolicy {}
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
=======
abstract class NotifyBasePolicy extends UserBasePolicy {}
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 011072e4 (.)
=======
abstract class NotifyBasePolicy extends UserBasePolicy
{
}
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
