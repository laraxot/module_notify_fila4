<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Datas;

use Spatie\LaravelData\Data;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email as MimeEmail;
use Webmozart\Assert\Assert;

class EmailData extends Data
{
    public string $to;

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
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
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
    public null|string $from = null;

    public null|string $from_email = null;
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
=======
>>>>>>> 58816034 (.)
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 207ac35 (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 23f115647 (.)
    public null|string $from = null;

    public null|string $from_email = null;
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
    public ?string $from = null;

    public ?string $from_email = null;
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
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
    public null|string $from = null;

    public null|string $from_email = null;
=======
    public ?string $from = null;

    public ?string $from_email = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 23f115647 (.)
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
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
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
    public null|string $from = null;

    public null|string $from_email = null;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
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
<<<<<<< HEAD
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
=======
>>>>>>> 23f115647 (.)
>>>>>>> b93ef594b4 (.)
=======
    public ?string $from = null;

    public ?string $from_email = null;
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 98d837b9 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 985c7bda (.)
=======
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
    public null|string $from = null;

    public null|string $from_email = null;
=======
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 2fc60436 (.)
    public ?string $from = null;

    public ?string $from_email = null;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 11b43e822 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 2941b0bd (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 98d837b9 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 2941b0bd (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c19c8df2 (.)
=======
    public null|string $from = null;

    public null|string $from_email = null;
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
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
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)

    public string $subject;

    public string $body_html;

<<<<<<< HEAD
    public string $body = '';
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
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
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
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
    public string $body = '';
=======
    public string $body='';
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
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
    public string $body = '';
=======
=======
    public string $body = '';
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
    public string $body = '';
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
=======
>>>>>>> f2e64178 (.)
=======
    public string $body = '';
=======
>>>>>>> 2effe245 (.)
=======
    public string $body = '';
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
=======
>>>>>>> f2e64178 (.)
=======
    public string $body = '';
=======
>>>>>>> 2effe245 (.)
=======
    public string $body = '';
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public string $body = '';
=======
    public string $body='';
>>>>>>> a12f125f4a (.)
=======
    public string $body = '';
>>>>>>> b93ef594b4 (.)
=======
    public string $body='';
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public string $body = '';
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    public string $body = '';
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public string $body = '';
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
    public string $body = '';
>>>>>>> 58816034 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public string $body = '';
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    public string $body = '';
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
    public string $body = '';
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
    public string $body = '';
>>>>>>> 58816034 (.)
=======
    public string $body = '';
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
    public string $body = '';
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public string $body = '';
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public string $body = '';
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
    public string $body = '';
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public string $body = '';
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
    public string $body = '';
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    public string $body = '';
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    public string $body = '';
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
    public string $body = '';
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
    public string $body = '';
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
    public string $body = '';
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)

    public array $attachments = [];

    public function __construct(
        string $to,
        string $subject,
        string $body_html,
        array $attachments = [],
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
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
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
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
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
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (!is_string($from_email)) {
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
=======
>>>>>>> 3f39ac8b (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
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
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
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
>>>>>>> f87b41c3b (.)
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
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
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> b93ef594b4 (.)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
>>>>>>> a12f125f4a (.)
=======
        if (!is_string($from_email)) {
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 23f115647 (.)
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 23f115647 (.)
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> 5fd545e4 (.)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
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
        if (!is_string($from_email)) {
>>>>>>> 5fd545e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> 54220b28 (rebase 210)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
        if (!is_string($from_email)) {
>>>>>>> 54220b28 (rebase 210)
=======
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> 5fd545e4 (.)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (!is_string($from_email)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> 54220b28 (rebase 210)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
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
        if (!is_string($from_email)) {
>>>>>>> 5fd545e4 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
        if (!is_string($from_email)) {
>>>>>>> 54220b28 (rebase 210)
=======
=======
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
>>>>>>> 5fd545e4 (.)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
<<<<<<< HEAD
        if (! is_string($from_email)) {
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        null|string $from = null,
        null|string $from_email = null,
        null|string $body = null,
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (!is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (!is_string($from_email)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
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
>>>>>>> 82ae73be (.)
=======
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
        ?string $from = null,
        ?string $from_email = null,
        ?string $body = null
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
    ) {
        Assert::email($to, 'Invalid "to" email format');
        $this->to = $to;
        if (! is_string($from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
        }
        $this->from = $from;
        if (! is_string($from_email)) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
=======
        if (!is_string($from_email)) {
>>>>>>> 5fd545e4 (.)
=======
=======
>>>>>>> 23f115647 (.)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
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
<<<<<<< HEAD
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
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
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
        }
        $this->from_email = $from_email;

        Assert::email($this->from_email, 'Invalid "from" email format');

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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
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
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
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
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 23f115647 (.)
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
        $this->subject = strip_tags($subject);  // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html);  // Default to plain-text version of HTML body
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
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> b207a9b1a (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> bf5d31b0f (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 4d2eb53e (.)
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
=======
        $this->subject = strip_tags($subject);  // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html);  // Default to plain-text version of HTML body
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 23f115647 (.)
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
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
=======
>>>>>>> bf5d31b0f (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 2f135ef98 (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
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
<<<<<<< HEAD
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
=======
>>>>>>> 23f115647 (.)
>>>>>>> b93ef594b4 (.)
=======
        $this->subject = strip_tags($subject);  // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html);  // Default to plain-text version of HTML body
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> d09cb759 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 58816034 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 11b43e822 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 58816034 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c19c8df2 (.)
=======
        $this->subject = strip_tags($subject); // Sanitize the subject
        $this->body_html = $body_html;
        $this->body = $body ?? strip_tags($body_html); // Default to plain-text version of HTML body
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
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
>>>>>>> 11b43e822 (.)
=======
>>>>>>> de02998b (.)
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
        $this->attachments = $attachments;
    }

    public function getFrom(): Address
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
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        if (! isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (! isset($this->from_email)) {
=======
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
>>>>>>> 5fd545e4 (.)
=======
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
        if (!isset($this->from)) {
            Assert::string($from = config('mail.from.name', 'Default Sender'));
            $this->from = $from;
        }
        if (!isset($this->from_email)) {
>>>>>>> 5fd545e4 (.)
>>>>>>> laraxot/develop
            Assert::string($from_email = config('mail.from.address', 'default@example.com'));
            $this->from_email = $from_email;
        }

        return new Address($this->from_email, $this->from);
    }

    public function getMimeEmail(): MimeEmail
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
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
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
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
<<<<<<< HEAD
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
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
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 677a6ab7 (.)
        $email = (new MimeEmail())
=======
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
=======
>>>>>>> 53d9bada0 (.)
=======
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> bf251cdf0 (.)
        $email = new MimeEmail()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 6ba141fc (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
>>>>>>> 2effe245 (.)
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
        $email = (new MimeEmail)
=======
=======
>>>>>>> 207ac35 (.)
        $email = new MimeEmail()
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

        $email = new MimeEmail()
<<<<<<< HEAD
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
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
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
>>>>>>> 2effe245 (.)
=======
        $email = (new MimeEmail)
=======
        $email = new MimeEmail()
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> origin/develop
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
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

        $email = new MimeEmail()
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> f963d2c0 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> ee18dd92 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 2a97406c (.)
=======
=======
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> d13ead25 (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> f963d2c (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
=======
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 011072e4 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
=======
<<<<<<< HEAD
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> ee18dd92 (.)
=======
>>>>>>> bf5d31b0f (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 4d2eb53e (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
>>>>>>> 2a97406c (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> f963d2c0 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 998e6866b (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
<<<<<<< HEAD
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
>>>>>>> 677a6ab7 (.)
        $email = (new MimeEmail())
=======
=======
>>>>>>> 7bac387 (.)
>>>>>>> 9ed014c (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)
        $email = new MimeEmail()
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

<<<<<<< HEAD
        $email = new MimeEmail()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
        $email = (new MimeEmail())
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
        $email = (new MimeEmail())
=======
<<<<<<< HEAD
        $email = new MimeEmail()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
=======
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 985c7bda (.)
        if ($this->body === '') {
            $this->body = strip_tags($this->body_html);
        }

<<<<<<< HEAD
        $email = new MimeEmail()
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 98d837b9 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 367c6ceb (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0db165c (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======
=======
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c (.)
=======
>>>>>>> 75179b85 (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
        $email = new MimeEmail()
=======
>>>>>>> 10292b60a (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> d13ead25 (.)
=======
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> f963d2c (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
<<<<<<< HEAD
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
=======
=======
>>>>>>> 9cf0dc90 (.)
=======
=======
>>>>>>> 1fd232c (.)
>>>>>>> d298dd9c2 (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 518c702 (.)
>>>>>>> 7bac387 (.)
>>>>>>> 36ac4fc1 (.)
=======
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
=======
        $email = (new MimeEmail())
>>>>>>> 5e14ac3 (.)
=======
        $email = (new MimeEmail())
=======
<<<<<<< HEAD
        $email = new MimeEmail()
>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 13aa25113 (.)
=======
=======
>>>>>>> bf251cdf0 (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 518c702 (.)
>>>>>>> 9cf0dc90 (.)
=======
>>>>>>> d298dd9c2 (.)
=======
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
>>>>>>> 75179b85 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 011072e4 (.)
>>>>>>> 1619767d8 (.)
        $email = new MimeEmail()
=======
        if ( $this->body=='') {
            $this->body = strip_tags($this->body_html);
        }

        $email = (new MimeEmail())
>>>>>>> b19cd40 (.)
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
>>>>>>> 75179b855 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> f963d2c0 (.)
=======
>>>>>>> 1fd232c7 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> ee18dd92 (.)
=======
>>>>>>> 0f81dc21 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> fd497554 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 2a97406c (.)
=======
>>>>>>> fd497554 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
=======
=======
=======
>>>>>>> 1fd232c7 (.)
>>>>>>> 6d2af2b31 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 12a7e2462 (.)
=======
>>>>>>> 6d2af2b31 (.)
=======
=======
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> ee18dd92 (.)
>>>>>>> 4bec160e6 (.)
=======
=======
>>>>>>> 01af324fe (.)
=======
=======
>>>>>>> 2d4267d82 (.)
        $email = new MimeEmail();
        $email = $email->from($this->getFrom());
        $email = $email->to($this->to);
        $email = $email->subject(strip_tags($this->subject))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> bf479cc (.)
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1619767d8 (.)
=======
=======
=======
>>>>>>> 0f81dc21 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 4bec160e6 (.)
=======
>>>>>>> ce64082e3 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2f135ef98 (.)
=======
=======
=======
>>>>>>> fd497554 (.)
        $email = new MimeEmail()
            ->from($this->getFrom())
            ->to($this->to)
            ->subject(strip_tags($this->subject))
<<<<<<< HEAD
>>>>>>> 518c702 (.)
>>>>>>> 998e6866b (.)
=======
>>>>>>> 53d9bada0 (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 13aa25113 (.)
=======
>>>>>>> fdad57c30 (.)
=======
>>>>>>> 0db165c (.)
>>>>>>> bf251cdf0 (.)
            ->html($this->body_html)
            ->text($this->body);

        foreach ($this->attachments as $attachment) {
<<<<<<< HEAD
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
=======
            Assert::string($attachment, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> 58816034 (.)
=======
            Assert::string($attachment, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
>>>>>>> ce89c8bb (.)
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
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 8c19c8df2 (.)
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
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
>>>>>>> 3f39ac8b (.)
=======
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
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($attachment);
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
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 2effe245 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 2effe245 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($attachment);
>>>>>>> a12f125f4a (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> b93ef594b4 (.)
=======
            Assert::string($attachment);
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f135ef98 (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 98d837b9 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 985c7bda (.)
=======
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
            Assert::string($attachment, __FILE__.':'.__LINE__.' - '.class_basename(self::class));
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
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
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
            Assert::string($attachment);
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
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 2941b0bd (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 98d837b9 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 985c7bda (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 2941b0bd (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
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
>>>>>>> a070a65a5 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
            Assert::string($attachment, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 98d837b9 (.)
>>>>>>> 8c19c8df2 (.)
            $email->attachFromPath($attachment); // string $path, ?string $name = null, ?string $contentType = null
        }

        return $email;
    }
}
=======
>>>>>>> 301ad8b44 (.)
