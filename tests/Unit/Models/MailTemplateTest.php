<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use function Safe\json_encode;

<<<<<<< HEAD
>>>>>>> 7d765981 (.)
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
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6d08c01b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> 7d765981 (.)
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
>>>>>>> 9cdf6146 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> bd804d67 (.)
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
>>>>>>> c22b35d1e (.)
=======
=======
>>>>>>> 3f39ac8b (.)
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> db0bc148f (.)
=======
=======
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 2641c2944 (.)
=======
=======
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 9fe1b60e (rebase 210)
>>>>>>> a0788fa28 (.)
=======
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
>>>>>>> 5d49e093a (.)
=======
>>>>>>> cd5474106 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
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
=======
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> db0bc148f (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 903e3e2cd (.)
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
>>>>>>> c22b35d1e (.)
=======
>>>>>>> a0788fa28 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 5d49e093a (.)
=======
>>>>>>> cd5474106 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 3b4c9907 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> b207a9b1a (.)
=======
=======
>>>>>>> 9cdf6146 (.)
>>>>>>> c22b35d1e (.)
=======
>>>>>>> f87b41c3b (.)
=======
=======
>>>>>>> 6d08c01b (.)
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> db0bc148f (.)
=======
=======
>>>>>>> 8e5817bc (.)
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
>>>>>>> 5d49e093a (.)
use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c22b35d1e (.)
=======
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> db0bc148f (.)
=======
>>>>>>> 2641c2944 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
>>>>>>> a0788fa28 (.)
=======
>>>>>>> 5d49e093a (.)
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 3ee54c5d (.)
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> 3ee54c5d (.)
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 80f054e0 (.)
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
=======
>>>>>>> f2e64178 (.)
>>>>>>> 23f115647 (.)
=======
>>>>>>> be45a0b8d (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 49639b815 (.)
=======
=======
>>>>>>> dceba960 (.)
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 848f79b79 (.)
=======
=======
>>>>>>> 460b8f5b (rebase 210)
<<<<<<< HEAD
>>>>>>> 47a873f13 (.)
=======
=======
>>>>>>> 8a8a8e2f (rebase 210)
<<<<<<< HEAD
>>>>>>> 69f695548 (.)
=======
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 1375c94d (rebase 210)
>>>>>>> 7a9167faf (.)
=======
>>>>>>> cd5474106 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
=======
use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Foundation\Testing\RefreshDatabase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> 49639b815 (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> 7a9167faf (.)
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 3ee54c5d (.)
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
>>>>>>> 80f054e0 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 1375c94d (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> e790eb33 (.)
=======
>>>>>>> 06e3078e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8f2456941 (.)
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
>>>>>>> 80f054e0 (.)
=======
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> bd804d67 (.)
=======
<<<<<<< HEAD
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
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> c4bdacbf (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 49639b815 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> dceba960 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> bd804d67 (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 460b8f5b (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 8a8a8e2f (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 69f695548 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 9f8e680a (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 1375c94d (rebase 210)
=======
<<<<<<< HEAD
>>>>>>> 7a9167faf (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> cd5474106 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 8f2456941 (.)
=======
>>>>>>> 2f135ef98 (.)
=======
>>>>>>> 23f115647 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 49639b815 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 47a873f13 (.)
=======
>>>>>>> 69f695548 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> cd5474106 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
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
<<<<<<< HEAD
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bd804d67 (.)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> e790eb33 (.)
=======
>>>>>>> 3ee54c5d (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> c4bdacbf (.)
=======
>>>>>>> dceba960 (.)
=======
>>>>>>> bd804d67 (.)
=======
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 23f115647 (.)
=======
=======
>>>>>>> c4bdacbf (.)
>>>>>>> a115e2aad (.)
=======
>>>>>>> 9cb55171f (.)
=======
=======
>>>>>>> bd804d67 (.)
>>>>>>> 848f79b79 (.)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
>>>>>>> c188e2a18 (.)
=======
=======
>>>>>>> 5aedc39c (rebase 210)
>>>>>>> cd5474106 (.)
>>>>>>> b93ef594b4 (.)
=======
use Tests\TestCase;
use Modules\Notify\Models\MailTemplate;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> cd5474106 (.)
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
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
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a070a65a5 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8c19c8df2 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ec4cda261 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 116df547 (.)
<<<<<<< HEAD
=======
>>>>>>> a9bf0423 (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f3c06ccdd (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7ffa94fc (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 58816034 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 11b43e822 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 09f5337a8 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4e4a7796 (.)
<<<<<<< HEAD
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 116df547 (.)
=======
>>>>>>> a9bf0423 (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7ffa94fc (rebase 210)
=======
>>>>>>> b4f93b3a (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 1375c94d (rebase 210)
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 58816034 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bc2faa05b (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 9d84f153 (.)
<<<<<<< HEAD
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\MailTemplate;
use Tests\TestCase;
>>>>>>> 116df547 (.)
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
>>>>>>> 9cdf6146 (.)
>>>>>>> c22b35d1e (.)
=======
>>>>>>> 8f2456941 (.)
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
=======
=======
>>>>>>> 6d08c01b (.)
>>>>>>> 138fcd4b0 (.)
=======
>>>>>>> be45a0b8d (.)
=======
>>>>>>> a115e2aad (.)
=======
>>>>>>> 09f5337a8 (.)
=======
>>>>>>> db0bc148f (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
>>>>>>> 49639b815 (.)
=======
>>>>>>> 9cb55171f (.)
=======
>>>>>>> bc2faa05b (.)
=======
>>>>>>> 2641c2944 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
>>>>>>> 968ed47cd (.)
=======
>>>>>>> 848f79b79 (.)
=======
>>>>>>> ec4cda261 (.)
=======
>>>>>>> 903e3e2cd (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 460b8f5b (rebase 210)
>>>>>>> 47a873f13 (.)
=======
>>>>>>> a0788fa28 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
>>>>>>> 69f695548 (.)
=======
>>>>>>> c188e2a18 (.)
=======
>>>>>>> f3c06ccdd (.)
=======
=======
>>>>>>> b4f93b3a (rebase 210)
>>>>>>> 5d49e093a (.)
=======
>>>>>>> 7a9167faf (.)
=======
>>>>>>> cd5474106 (.)

class MailTemplateTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /** @test */
    public function it_can_create_mail_template(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\WelcomeMail',
            'name' => 'Welcome Email Template',
            'subject' => 'Benvenuto {{name}}!',
            'html_template' => '<h1>Benvenuto {{name}}!</h1><p>Grazie per esserti registrato.</p>',
            'text_template' => 'Benvenuto {{name}}! Grazie per esserti registrato.',
            'sms_template' => [
                'message' => 'Benvenuto {{name}}! Grazie per esserti registrato.',
                'variables' => ['name'],
            ],
            'params' => ['name', 'email'],
            'counter' => 0,
        ]);

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'mailable' => 'App\Mail\WelcomeMail',
            'name' => 'Welcome Email Template',
            'subject' => 'Benvenuto {{name}}!',
            'html_template' => '<h1>Benvenuto {{name}}!</h1><p>Grazie per esserti registrato.</p>',
            'text_template' => 'Benvenuto {{name}}! Grazie per esserti registrato.',
            'params' => json_encode(['name', 'email']),
            'counter' => 0,
        ]);

        $this->assertInstanceOf(MailTemplate::class, $template);
    }

    /** @test */
    public function it_has_correct_fillable_fields(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $template = new MailTemplate();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $expectedFillable = [
            'mailable',
            'name',
            'slug',
            'subject',
            'html_template',
            'text_template',
            'sms_template',
            'params',
            'counter',
        ];

        $this->assertEquals($expectedFillable, $template->getFillable());
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $template = new MailTemplate();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $expectedCasts = [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];

        $this->assertEquals($expectedCasts, $template->casts());
    }

    /** @test */
    public function it_has_translatable_fields(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $template = new MailTemplate();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $expectedTranslatable = [
            'subject',
            'html_template',
            'text_template',
            'sms_template',
        ];

        $this->assertEquals($expectedTranslatable, $template->translatable);
    }

    /** @test */
    public function it_uses_notify_connection(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $template = new MailTemplate();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b85 (.)
=======
        $template = new MailTemplate();
>>>>>>> 75179b855 (.)
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $template = new MailTemplate;
=======
        $template = new MailTemplate();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $this->assertEquals('notify', $template->getConnectionName());
    }

    /** @test */
    public function it_generates_slug_from_name(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\TestMail',
            'name' => 'Test Email Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $this->assertEquals('test-email-template', $template->slug);
        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'slug' => 'test-email-template',
        ]);
    }

    /** @test */
    public function it_can_store_json_params(): void
    {
        $params = ['name', 'email', 'company', 'role'];

        $template = MailTemplate::create([
            'mailable' => 'App\Mail\ComplexMail',
            'name' => 'Complex Email Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => $params,
            'counter' => 0,
        ]);

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'params' => json_encode($params),
        ]);

        $this->assertIsArray($template->params);
        $this->assertCount(4, $template->params);
        $this->assertContains('name', $template->params);
        $this->assertContains('email', $template->params);
        $this->assertContains('company', $template->params);
        $this->assertContains('role', $template->params);
    }

    /** @test */
    public function it_can_store_json_sms_template(): void
    {
        $smsTemplate = [
            'message' => 'Benvenuto {{name}}! La tua email è {{email}}',
            'variables' => ['name', 'email'],
            'max_length' => 160,
            'encoding' => 'GSM7',
        ];

        $template = MailTemplate::create([
            'mailable' => 'App\Mail\SmsMail',
            'name' => 'SMS Email Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'sms_template' => $smsTemplate,
            'params' => ['test'],
            'counter' => 0,
        ]);

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'sms_template' => json_encode($smsTemplate),
        ]);

        $this->assertIsArray($template->sms_template);
        $this->assertEquals('Benvenuto {{name}}! La tua email è {{email}}', $template->sms_template['message']);
        $this->assertEquals(['name', 'email'], $template->sms_template['variables']);
        $this->assertEquals(160, $template->sms_template['max_length']);
        $this->assertEquals('GSM7', $template->sms_template['encoding']);
    }

    /** @test */
    public function it_can_increment_counter(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\CounterMail',
            'name' => 'Counter Email Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $this->assertEquals(0, $template->counter);

        $template->increment('counter');
        $this->assertEquals(1, $template->fresh()->counter);

        $template->increment('counter', 5);
        $this->assertEquals(6, $template->fresh()->counter);
    }

    /** @test */
    public function it_can_update_template(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\UpdateMail',
            'name' => 'Original Name',
            'subject' => 'Original Subject',
            'html_template' => '<p>Original content</p>',
            'params' => ['original'],
            'counter' => 0,
        ]);

        $template->update([
            'name' => 'Updated Name',
            'subject' => 'Updated Subject',
            'html_template' => '<p>Updated content</p>',
            'params' => ['updated'],
        ]);

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'name' => 'Updated Name',
            'subject' => 'Updated Subject',
            'html_template' => '<p>Updated content</p>',
            'params' => json_encode(['updated']),
        ]);

        $this->assertEquals('updated-name', $template->fresh()->slug);
    }

    /** @test */
    public function it_can_find_by_mailable_and_slug(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\FindMail',
            'name' => 'Find Test Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $foundTemplate = MailTemplate::where('mailable', 'App\Mail\FindMail')
            ->where('slug', 'find-test-template')
            ->first();

        $this->assertNotNull($foundTemplate);
        $this->assertEquals($template->id, $foundTemplate->id);
        $this->assertEquals('App\Mail\FindMail', $foundTemplate->mailable);
        $this->assertEquals('find-test-template', $foundTemplate->slug);
    }

    /** @test */
    public function it_can_find_by_name(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\NameMail',
            'name' => 'Name Search Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $foundTemplate = MailTemplate::where('name', 'Name Search Template')->first();

        $this->assertNotNull($foundTemplate);
        $this->assertEquals($template->id, $foundTemplate->id);
        $this->assertEquals('Name Search Template', $foundTemplate->name);
    }

    /** @test */
    public function it_can_find_by_subject_pattern(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\PatternMail',
            'name' => 'Pattern Template',
            'subject' => 'Welcome to our platform',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $foundTemplates = MailTemplate::where('subject', 'like', '%Welcome%')->get();

        $this->assertCount(1, $foundTemplates);
        $this->assertEquals('Welcome to our platform', $foundTemplates[0]->subject);
    }

    /** @test */
    public function it_can_find_by_params(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\ParamsMail',
            'name' => 'Params Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['name', 'email', 'company'],
            'counter' => 0,
        ]);

        $foundTemplates = MailTemplate::whereJsonContains('params', 'name')->get();

        $this->assertCount(1, $foundTemplates);
        $this->assertEquals($template->id, $foundTemplates[0]->id);
        $this->assertContains('name', $foundTemplates[0]->params);
    }

    /** @test */
    public function it_can_find_by_counter_range(): void
    {
        MailTemplate::create([
            'mailable' => 'App\Mail\LowCounterMail',
            'name' => 'Low Counter Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 5,
        ]);

        MailTemplate::create([
            'mailable' => 'App\Mail\HighCounterMail',
            'name' => 'High Counter Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 50,
        ]);

        $lowCounterTemplates = MailTemplate::where('counter', '<=', 10)->get();
        $highCounterTemplates = MailTemplate::where('counter', '>=', 25)->get();

        $this->assertCount(1, $lowCounterTemplates);
        $this->assertCount(1, $highCounterTemplates);
        $this->assertEquals(5, $lowCounterTemplates[0]->counter);
        $this->assertEquals(50, $highCounterTemplates[0]->counter);
    }

    /** @test */
    public function it_can_handle_empty_params(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\EmptyParamsMail',
            'name' => 'Empty Params Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => [],
            'counter' => 0,
        ]);

        $this->assertIsArray($template->params);
        $this->assertEmpty($template->params);
    }

    /** @test */
    public function it_can_handle_empty_sms_template(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\EmptySmsMail',
            'name' => 'Empty SMS Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'sms_template' => [],
            'params' => ['test'],
            'counter' => 0,
        ]);

        $this->assertIsArray($template->sms_template);
        $this->assertEmpty($template->sms_template);
    }

    /** @test */
    public function it_can_store_complex_sms_template(): void
    {
        $complexSmsTemplate = [
            'message' => 'Benvenuto {{name}}!',
            'variables' => ['name', 'email'],
            'max_length' => 160,
            'encoding' => 'GSM7',
            'fallback' => [
                'enabled' => true,
                'message' => 'Welcome {{name}}!',
                'language' => 'en',
            ],
            'delivery_options' => [
                'priority' => 'high',
                'retry_count' => 3,
                'timeout' => 30,
            ],
        ];

        $template = MailTemplate::create([
            'mailable' => 'App\Mail\ComplexSmsMail',
            'name' => 'Complex SMS Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'sms_template' => $complexSmsTemplate,
            'params' => ['test'],
            'counter' => 0,
        ]);

        $this->assertDatabaseHas('mail_templates', [
            'id' => $template->id,
            'sms_template' => json_encode($complexSmsTemplate),
        ]);

        $this->assertEquals('Benvenuto {{name}}!', $template->sms_template['message']);
        $this->assertEquals(['name', 'email'], $template->sms_template['variables']);
        $this->assertEquals(160, $template->sms_template['max_length']);
        $this->assertTrue($template->sms_template['fallback']['enabled']);
        $this->assertEquals('high', $template->sms_template['delivery_options']['priority']);
    }

    /** @test */
    public function it_can_find_templates_by_multiple_criteria(): void
    {
        MailTemplate::create([
            'mailable' => 'App\Mail\MultiCriteriaMail',
            'name' => 'Multi Criteria Template',
            'subject' => 'Welcome to our platform',
            'html_template' => '<p>Test content</p>',
            'params' => ['name', 'email'],
            'counter' => 10,
        ]);

        MailTemplate::create([
            'mailable' => 'App\Mail\AnotherMultiCriteriaMail',
            'name' => 'Another Multi Criteria Template',
            'subject' => 'Welcome to our platform',
            'html_template' => '<p>Test content</p>',
            'params' => ['name', 'email'],
            'counter' => 20,
        ]);

        $foundTemplates = MailTemplate::where('subject', 'like', '%Welcome%')
            ->whereJsonContains('params', 'name')
            ->where('counter', '>=', 15)
            ->get();

        $this->assertCount(1, $foundTemplates);
        $this->assertEquals('Another Multi Criteria Template', $foundTemplates[0]->name);
        $this->assertEquals(20, $foundTemplates[0]->counter);
    }

    /** @test */
    public function it_can_handle_null_values(): void
    {
        $template = MailTemplate::create([
            'mailable' => 'App\Mail\NullValuesMail',
            'name' => 'Null Values Template',
            'subject' => null,
            'html_template' => '<p>Test content</p>',
            'text_template' => null,
            'sms_template' => null,
            'params' => null,
            'counter' => 0,
        ]);

        $this->assertNull($template->subject);
        $this->assertNull($template->text_template);
        $this->assertNull($template->sms_template);
        $this->assertNull($template->params);
    }

    /** @test */
    public function it_can_generate_unique_slugs(): void
    {
        MailTemplate::create([
            'mailable' => 'App\Mail\UniqueSlugMail1',
            'name' => 'Test Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        MailTemplate::create([
            'mailable' => 'App\Mail\UniqueSlugMail2',
            'name' => 'Test Template',
            'subject' => 'Test Subject',
            'html_template' => '<p>Test content</p>',
            'params' => ['test'],
            'counter' => 0,
        ]);

        $templates = MailTemplate::where('name', 'Test Template')->get();

        $this->assertCount(2, $templates);
        $this->assertEquals('test-template', $templates[0]->slug);
        $this->assertEquals('test-template-1', $templates[1]->slug);
    }
}
=======
>>>>>>> 301ad8b44 (.)
