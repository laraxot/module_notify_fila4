<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

<<<<<<< HEAD
use Exception;
=======
<<<<<<< HEAD
use Exception;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Support\Arr;
<<<<<<< HEAD
use Modules\Tenant\Services\TenantService;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b8 (.)
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b85 (.)
=======
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b85 (.)
=======
use Modules\Tenant\Services\TenantService;
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Spatie\LaravelData\Data;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Webmozart\Assert\Assert;

/**
 * Class Modules\Notify\Datas\SmtpData.
 */
class SmtpData extends Data
{
    public string $transport = 'smtp';

<<<<<<< HEAD
    public null|string $url = null;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public ?string $url = null;
>>>>>>> 98d837b9 (.)
=======
    public ?string $url = null;
>>>>>>> f2e64178 (.)
=======
    public ?string $url = null;
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
    public ?string $url = null;
>>>>>>> 58816034 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
    public ?string $url = null;
>>>>>>> 98d837b9 (.)
=======
    public ?string $url = null;
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
    public ?string $url = null;
>>>>>>> 888799d0 (.)
=======
    public ?string $url = null;
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
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
>>>>>>> e53a56570 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
    public null|string $url = null;
=======
    public ?string $url = null;
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
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
    public null|string $url = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
    public null|string $url = null;
=======
=======
    public null|string $url = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
    public null|string $url = null;
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $url = null;
=======
>>>>>>> 4689a827 (.)
=======
    public ?string $url = null;
=======
<<<<<<< HEAD
    public null|string $url = null;
=======
>>>>>>> 2effe245 (.)
=======
    public null|string $url = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $url = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $url = null;
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $url = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $url = null;
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $url = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $url = null;
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 3f39ac8b (.)
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 3f39ac8b (.)
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $url = null;
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    public ?string $url = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    public null|string $url = null;
=======
=======
    public null|string $url = null;
=======
>>>>>>> d09cb759 (.)
=======
=======
    public null|string $url = null;
=======
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $url = null;
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $url = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $url = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public ?string $url = null;
>>>>>>> 985c7bda (.)
=======
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $url = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $url = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $url = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $url = null;
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> e53a56570 (.)
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $url = null;
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
    public ?string $url = null;
>>>>>>> 985c7bda (.)
=======
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $url = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $url = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
    public null|string $url = null;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $url = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $url = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
    public null|string $url = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public null|string $url = null;
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
    public null|string $url = null;
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
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
    public null|string $url = null;
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
    public null|string $url = null;
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> e53a56570 (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
=======
=======
    public null|string $url = null;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
>>>>>>> 2f135ef98 (.)
=======
=======
=======
    public null|string $url = null;
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
    public ?string $url = null;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
    public null|string $url = null;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public null|string $url = null;
=======
    public ?string $url = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $url = null;
>>>>>>> b93ef594b4 (.)
=======
    public ?string $url = null;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
>>>>>>> 23f115647 (.)
=======
=======
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
>>>>>>> 26d39e2eb (.)
=======
=======
    public ?string $url = null;
>>>>>>> 985c7bda (.)
=======
    public ?string $url = null;
=======
    public null|string $url = null;
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)

    public string $host = '127.0.0.1';

    public int $port = 2525;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
    public ?string $encryption = null; // 'tls';
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
    public ?string $encryption = null; // 'tls';
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public ?string $encryption = null; // 'tls';
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 26d39e2eb (.)
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
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
    public null|string $encryption = null; // 'tls';
>>>>>>> f813254 (.)

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
=======
    public null|string $local_domain = null;
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
>>>>>>> d09cb759 (.)
>>>>>>> 1487fe812 (.)
=======
=======
    public ?string $encryption = null; // 'tls';
=======
    public null|string $encryption = null; // 'tls';
>>>>>>> b93ef594b4 (.)

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public ?string $local_domain = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $local_domain = null;
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
    public null|string $local_domain = null;
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
    public null|string $local_domain = null;
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
    public null|string $local_domain = null;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 10292b60a (.)
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
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
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
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
    public null|string $encryption = null; // 'tls';

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

    public null|string $local_domain = null;
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
    public null|string $encryption = null; // 'tls';
>>>>>>> f813254 (.)

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
=======
    public null|string $local_domain = null;
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
    public ?string $encryption = null; // 'tls';
=======
    public null|string $encryption = null; // 'tls';
>>>>>>> b93ef594b4 (.)

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $local_domain = null;
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 26d39e2eb (.)
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
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
=======
    public ?string $encryption = null; // 'tls';
=======
    public null|string $encryption = null; // 'tls';
>>>>>>> b93ef594b4 (.)

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $local_domain = null;
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
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
=======
>>>>>>> 2941b0bd (.)
=======
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 8c19c8df2 (.)
=======
=======
=======
>>>>>>> d45a0226 (.)
>>>>>>> f15c41e60 (.)
    public null|string $encryption = null; // 'tls';

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

    public null|string $local_domain = null;
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> f15c41e60 (.)
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
=======
    public ?string $encryption = null; // 'tls';
=======
    public null|string $encryption = null; // 'tls';
>>>>>>> b93ef594b4 (.)

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $local_domain = null;
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
=======
    public ?string $encryption = null; // 'tls';
=======
    public null|string $encryption = null; // 'tls';
>>>>>>> b93ef594b4 (.)

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

<<<<<<< HEAD
    public ?string $local_domain = null;
>>>>>>> a12f125f4a (.)
=======
    public null|string $local_domain = null;
>>>>>>> b93ef594b4 (.)
>>>>>>> f813254 (.)
=======
=======
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
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
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> bf5d31b0f (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
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
=======
>>>>>>> 2941b0bd (.)
=======
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
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
=======
>>>>>>> 95531e1 (.)
=======
>>>>>>> 2f135ef98 (.)
    public null|string $encryption = null; // 'tls';

    public null|bool $tls = null;

    public null|string $username = null;

    public null|string $password = null;

    public null|string $timeout = null;

    public null|string $local_domain = null;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
=======
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 23f115647 (.)
    public ?string $encryption = null; // 'tls';

    public ?bool $tls = null;

    public ?string $username = null;

    public ?string $password = null;

    public ?string $timeout = null;

    public ?string $local_domain = null;
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
>>>>>>> 2f135ef98 (.)
=======
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)

    private static array $instance = [];

    public static function make(string $name = 'smtp'): self
    {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
        if (! isset(self::$instance[$name]) || ! (self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
>>>>>>> 98d837b9 (.)
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
>>>>>>> e53a56570 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
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
=======
>>>>>>> 2941b0bd (.)
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
=======
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
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> f15c41e60 (.)
        if (! isset(self::$instance[$name]) || ! (self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
>>>>>>> f15c41e60 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> 26d39e2eb (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
=======
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
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
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> a070a65a5 (.)
        if (!isset(self::$instance[$name]) || !(self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.' . $name);
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 99ff506 (.)
>>>>>>> f2e64178 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
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
=======
>>>>>>> f2e64178 (.)
=======
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
>>>>>>> d09cb759 (.)
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f813254 (.)
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
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
        if (!isset(self::$instance[$name]) || ! self::$instance[$name] instanceof self) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> a12f125f4a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
        if (! isset(self::$instance[$name]) || ! (self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
=======
>>>>>>> e11621f (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> f2e64178 (.)
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
        if (!isset(self::$instance[$name]) || !(self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.' . $name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
        if (!isset(self::$instance[$name]) || ! self::$instance[$name] instanceof self) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
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
>>>>>>> 23f115647 (.)
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf5d31b0f (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> d45a0226 (.)
=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> a12f125f4a (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> f15c41e60 (.)
        if (!isset(self::$instance[$name]) || !(self::$instance[$name] instanceof self)) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.' . $name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> f15c41e60 (.)
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
        if (!isset(self::$instance[$name]) || ! self::$instance[$name] instanceof self) {
            // $data = TenantService::getConfig('mail');
            Assert::isArray($data = config('mail'));
            $data_name = Arr::get($data, 'mailers.'.$name);
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
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
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
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> b19cd40 (.)
=======
>>>>>>> 2f135ef98 (.)
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
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
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
            self::$instance[$name] = self::from($data_name);
        }

        return self::$instance[$name];
    }

    public function toArray(): array
    {
        return [
            'transport' => $this->transport,
            'host' => $this->host,
            'port' => $this->port,
            'encryption' => $this->encryption,
            'username' => $this->username,
            'password' => $this->password,
            'timeout' => $this->timeout,
            'local_domain' => $this->local_domain,
        ];
    }

    public function getTransport(): EsmtpTransport
    {
        $transport = new EsmtpTransport($this->host, $this->port, $this->tls);
        if ($this->username !== null && $this->password !== null) {
            $transport->setUsername($this->username);
            $transport->setPassword($this->password);
        }

        return $transport;
    }

    public function getMailer(): Mailer
    {
        $transport = $this->getTransport();
        try {
            $transport->start();
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 98d837b9 (.)
>>>>>>> 99ff506 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 4d2eb53e (.)
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 9777d1b3 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            throw new \Exception('Errore durante la connessione SMTP: '.$e->getMessage());
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
<<<<<<< HEAD
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 888799d0 (.)
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
>>>>>>> 888799d0 (.)
=======
=======
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 2effe245 (.)
=======
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            throw new \Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
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
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> 985c7bda (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
        }

        return new Mailer($transport);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 3f39ac8b (.)
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> 985c7bda (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9777d1b (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 10292b60a (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
>>>>>>> b207a9b1a (.)
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
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
>>>>>>> a070a65a5 (.)
=======
>>>>>>> e53a56570 (.)
=======
=======
=======
=======
>>>>>>> 0f07e6d (.)
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
=======
            throw new Exception('Errore durante la connessione SMTP: '.$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
=======
=======
            throw new Exception('Errore durante la connessione SMTP: ' . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
        }
        $mailer = new Mailer($transport);

        return $mailer;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
    }

    public function send(EmailData $emailData): void
    {
        $mailer = $this->getMailer();
        $mimeEmail = $emailData->getMimeEmail();
        try {
            $mailer->send($mimeEmail);
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 98d837b9 (.)
>>>>>>> 99ff506 (.)
=======
=======
>>>>>>> 0f07e6d (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 4d2eb53e (.)
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            throw new \Exception("Errore durante l'invio dell'email: ".$e->getMessage());
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35 (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 0f07e6d (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> de02998b (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 888799d0 (.)
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
>>>>>>> 888799d0 (.)
=======
=======
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 2effe245 (.)
=======
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
>>>>>>> 2effe245 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
<<<<<<< HEAD
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> a12f125f4a (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> b93ef594b4 (.)
=======
        } catch (\Exception $e) {
            throw new \Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
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
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> 985c7bda (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 2fc60436 (.)
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
=======
>>>>>>> 2fc60436 (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 3f39ac8b (.)
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
=======
>>>>>>> 3f39ac8b (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> 985c7bda (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
<<<<<<< HEAD
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
>>>>>>> b207a9b1a (.)
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
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
>>>>>>> e53a56570 (.)
=======
=======
=======
=======
>>>>>>> 0f07e6d (.)
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
=======
            throw new Exception("Errore durante l'invio dell'email: ".$e->getMessage());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
=======
=======
=======
            throw new Exception("Errore durante l'invio dell'email: " . $e->getMessage());
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> f15c41e60 (.)
        }
    }
}
=======
>>>>>>> 301ad8b44 (.)
