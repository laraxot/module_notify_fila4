<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Exception;
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
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
use Illuminate\Database\Eloquent\Model;
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> f87b41c3b (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 58816034 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
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
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Illuminate\Database\Eloquent\Model;
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
use Illuminate\Database\Eloquent\Model;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 58816034 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
use Illuminate\Database\Eloquent\Model;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
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
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
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
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> origin/develop
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Contracts\UserContract;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Actions\SMS\NormalizePhoneNumberAction;
use Modules\Xot\Contracts\UserContract;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)

class RecordNotificationData extends Data
{
    public UserContract $record;
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
=======
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
=======

=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======

=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> e53a56570 (.)
    public string $channel;

    public function getChannel(): string
    {
        return $this->channel;
    }

    public function getRoute(): string
    {
<<<<<<< HEAD
        switch ($this->channel) {
            case 'mail':
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
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
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
        switch ($this->channel) {
            case 'mail':
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
=======
>>>>>>> c8b1c8bf (.)
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> c8b1c8bf (.)

>>>>>>> f1c9518b (.)
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
<<<<<<< HEAD
        throw new Exception('Channel [' . $this->channel . '] not supported');
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
=======
=======
>>>>>>> e53a56570 (.)
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
<<<<<<< HEAD
                Assert::string($email = $this->record->email, __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));

>>>>>>> f1c9518b (.)
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
    }
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
        switch($this->channel){
=======
        switch ($this->channel) {
>>>>>>> b93ef594b4 (.)
            case 'mail':
<<<<<<< HEAD
=======
        switch ($this->channel) {
            case 'mail':
>>>>>>> 75179b85 (.)
=======
>>>>>>> 2effe245 (.)
=======
        switch ($this->channel) {
            case 'mail':
>>>>>>> 75179b85 (.)
=======
        switch ($this->channel) {
            case 'mail':
>>>>>>> 75179b855 (.)
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
    }
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
>>>>>>> 2effe245 (.)


>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
        switch($this->channel){
            case 'mail':
                Assert::string($email=$this->record->email);
                return $email;
            case 'sms':
                Assert::string($phone=$this->record->phone);
                $phone=app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
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
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
        throw new Exception('Channel ['.$this->channel.'] not supported');
=======
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
    }
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


>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2effe245 (.)
        throw new \Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
=======
=======
        switch($this->channel){
=======
        switch ($this->channel) {
>>>>>>> b93ef594b4 (.)
            case 'mail':
>>>>>>> laraxot/develop
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
    }
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


>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
        switch($this->channel){
            case 'mail':
                Assert::string($email=$this->record->email);
                return $email;
            case 'sms':
                Assert::string($phone=$this->record->phone);
                $phone=app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        throw new Exception('Channel ['.$this->channel.'] not supported');
=======
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
>>>>>>> 75179b8 (.)
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD


>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
        switch($this->channel){
=======
        switch ($this->channel) {
>>>>>>> b93ef594b4 (.)
            case 'mail':
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
    }
<<<<<<< HEAD


>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
        switch($this->channel){
            case 'mail':
                Assert::string($email=$this->record->email);
                return $email;
            case 'sms':
                Assert::string($phone=$this->record->phone);
                $phone=app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
        throw new \Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
        throw new Exception('Channel ['.$this->channel.'] not supported');
=======
                Assert::string($email = $this->record->email, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                return $email;
            case 'sms':
                Assert::string($phone = $this->record->phone, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
                $phone = app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel [' . $this->channel . '] not supported');
>>>>>>> 99ff506 (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> 3f39ac8b (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> 2fc60436 (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> 82ae73be (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> 82ae73be (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> de02998b (.)
=======
        throw new Exception('Channel ['.$this->channel.'] not supported');
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> e53a56570 (.)
    }
<<<<<<< HEAD


>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
        throw new \Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 10292b60a (.)
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
>>>>>>> 2fc60436 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
=======
        switch($this->channel){
            case 'mail':
                Assert::string($email=$this->record->email);
                return $email;
            case 'sms':
                Assert::string($phone=$this->record->phone);
                $phone=app(NormalizePhoneNumberAction::class)->execute($phone);
                return $phone;
        }
        throw new Exception('Channel ['.$this->channel.'] not supported');
    }


>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
}
=======
>>>>>>> 301ad8b44 (.)
