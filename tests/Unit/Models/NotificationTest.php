<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Tests\Unit\Models;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 26d39e2eb (.)
=======
=======
>>>>>>> 77edd94a (.)
>>>>>>> 2e1ac1f20 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 2e1ac1f20 (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 2e1ac1f20 (.)
use Tests\TestCase;
use Modules\Notify\Models\Notification;
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
>>>>>>> 2e1ac1f20 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> eea68ec9 (.)
<<<<<<< HEAD
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
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 6dad70a87 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
=======
use Tests\TestCase;
use Modules\Notify\Models\Notification;
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
=======
>>>>>>> 26d39e2eb (.)
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
=======
>>>>>>> 6dad70a87 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> eea68ec9 (.)
=======
>>>>>>> 6dad70a87 (.)
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
=======
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 6dad70a87 (.)
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
<<<<<<< HEAD
>>>>>>> cd5474106 (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
>>>>>>> b93ef594b4 (.)
=======
use Tests\TestCase;
use Modules\Notify\Models\Notification;
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
=======
>>>>>>> 26d39e2eb (.)
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 4e4a7796 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 4d253d2c (rebase 210)
=======
>>>>>>> 9fe1b60e (rebase 210)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 8a8a8e2f (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e312314fa (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 82e5ee2d (rebase 210)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 58816034 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 7c39b1fe (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 503981fd (.)
=======
>>>>>>> dceba960 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 9d84f153 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> efb0f8d9 (rebase 210)
=======
>>>>>>> 9f8e680a (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 52cd5f85 (rebase 210)
=======
>>>>>>> 5aedc39c (rebase 210)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 82e5ee2d (rebase 210)
=======
>>>>>>> 2effe245 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 985c7bda (.)
=======
>>>>>>> 77edd94a (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 59916c8f (.)
=======
>>>>>>> e790eb33 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> cb5f23b0 (.)
=======
>>>>>>> f81a620f (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 06e3078e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 70e8274e (.)
=======
>>>>>>> 3ee54c5d (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 4b544042 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 58816034 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 3f537838 (.)
=======
<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 9cdf6146 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 80f054e0 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> c6c33175 (.)
=======
>>>>>>> c4bdacbf (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
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
use Modules\Notify\Models\Notification;
use Tests\TestCase;
>>>>>>> 7a2f131f (.)
=======
>>>>>>> bd804d67 (.)
=======
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Notify\Models\Notification;
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
=======
>>>>>>> e312314fa (.)
=======
=======
>>>>>>> 2effe245 (.)
>>>>>>> 26d39e2eb (.)
=======
>>>>>>> 2e1ac1f20 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> eea68ec9 (.)
>>>>>>> 6dad70a87 (.)

class NotificationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /** @test */
    public function it_can_create_notification(): void
    {
        $notification = Notification::create([
            'message' => 'Test notification message',
            'type' => 'info',
            'tenant_id' => 1,
            'user_id' => 123,
            'subject_type' => 'App\Models\User',
            'subject_id' => 456,
            'channels' => ['mail', 'database'],
            'status' => 'pending',
            'sent_at' => now(),
            'data' => [
                'title' => 'Test Title',
                'body' => 'Test Body',
                'action_url' => 'https://example.com',
                'priority' => 'high',
            ],
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'message' => 'Test notification message',
            'type' => 'info',
            'tenant_id' => 1,
            'user_id' => 123,
            'subject_type' => 'App\Models\User',
            'subject_id' => 456,
            'status' => 'pending',
        ]);

        $this->assertInstanceOf(Notification::class, $notification);
    }

    /** @test */
    public function it_has_correct_fillable_fields(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification();
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
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $expectedFillable = [
            'message',
            'type',
            'read_at',
            'tenant_id',
            'user_id',
            'subject_type',
            'subject_id',
            'channels',
            'status',
            'sent_at',
            'data',
        ];

        $this->assertEquals($expectedFillable, $notification->getFillable());
    }

    /** @test */
    public function it_has_correct_casts(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $notification = new Notification();
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
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        $notification = new Notification();
>>>>>>> 75179b85 (.)
=======
        $notification = new Notification();
>>>>>>> 75179b855 (.)
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
        $notification = new Notification;
=======
        $notification = new Notification();
>>>>>>> 99ff506 (.)
>>>>>>> e53a56570 (.)

        $expectedCasts = [
            'read_at' => 'datetime',
            'sent_at' => 'datetime',
            'data' => 'array',
            'channels' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];

        $this->assertEquals($expectedCasts, $notification->casts());
    }

    /** @test */
    public function it_can_store_json_data(): void
    {
        $data = [
            'title' => 'Welcome to our platform',
            'body' => 'Thank you for joining us!',
            'action_url' => 'https://example.com/welcome',
            'priority' => 'high',
            'category' => 'welcome',
            'metadata' => [
                'source' => 'registration',
                'campaign' => 'new_users_2024',
                'tags' => ['welcome', 'onboarding'],
            ],
        ];

        $notification = Notification::create([
            'message' => 'Welcome notification',
            'type' => 'welcome',
            'data' => $data,
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'data' => json_encode($data),
        ]);

        $this->assertIsArray($notification->data);
        $this->assertEquals('Welcome to our platform', $notification->data['title']);
        $this->assertEquals('Thank you for joining us!', $notification->data['body']);
        $this->assertEquals('high', $notification->data['priority']);
        $this->assertEquals('registration', $notification->data['metadata']['source']);
        $this->assertEquals(['welcome', 'onboarding'], $notification->data['metadata']['tags']);
    }

    /** @test */
    public function it_can_store_channels_array(): void
    {
        $channels = ['mail', 'database', 'sms', 'push'];

        $notification = Notification::create([
            'message' => 'Multi-channel notification',
            'type' => 'alert',
            'channels' => $channels,
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'channels' => json_encode($channels),
        ]);

        $this->assertIsArray($notification->channels);
        $this->assertCount(4, $notification->channels);
        $this->assertContains('mail', $notification->channels);
        $this->assertContains('database', $notification->channels);
        $this->assertContains('sms', $notification->channels);
        $this->assertContains('push', $notification->channels);
    }

    /** @test */
    public function it_can_mark_as_read(): void
    {
        $notification = Notification::create([
            'message' => 'Unread notification',
            'type' => 'info',
        ]);

        $this->assertNull($notification->read_at);

        $notification->update(['read_at' => now()]);

        $this->assertNotNull($notification->fresh()->read_at);
        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'read_at' => $notification->fresh()->read_at,
        ]);
    }

    /** @test */
    public function it_can_mark_as_sent(): void
    {
        $notification = Notification::create([
            'message' => 'Pending notification',
            'type' => 'info',
            'status' => 'pending',
        ]);

        $this->assertNull($notification->sent_at);

        $notification->update([
            'sent_at' => now(),
            'status' => 'sent',
        ]);

        $this->assertNotNull($notification->fresh()->sent_at);
        $this->assertEquals('sent', $notification->fresh()->status);
        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'sent_at' => $notification->fresh()->sent_at,
            'status' => 'sent',
        ]);
    }

    /** @test */
    public function it_can_update_notification(): void
    {
        $notification = Notification::create([
            'message' => 'Original message',
            'type' => 'info',
            'status' => 'pending',
        ]);

        $notification->update([
            'message' => 'Updated message',
            'type' => 'warning',
            'status' => 'sent',
            'data' => ['updated' => true],
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'message' => 'Updated message',
            'type' => 'warning',
            'status' => 'sent',
        ]);

        $this->assertEquals('Updated message', $notification->fresh()->message);
        $this->assertEquals('warning', $notification->fresh()->type);
        $this->assertEquals('sent', $notification->fresh()->status);
        $this->assertEquals(['updated' => true], $notification->fresh()->data);
    }

    /** @test */
    public function it_can_find_by_type(): void
    {
        Notification::create([
            'message' => 'Info notification',
            'type' => 'info',
        ]);

        Notification::create([
            'message' => 'Warning notification',
            'type' => 'warning',
        ]);

        Notification::create([
            'message' => 'Error notification',
            'type' => 'error',
        ]);

        $infoNotifications = Notification::where('type', 'info')->get();
        $warningNotifications = Notification::where('type', 'warning')->get();
        $errorNotifications = Notification::where('type', 'error')->get();

        $this->assertCount(1, $infoNotifications);
        $this->assertCount(1, $warningNotifications);
        $this->assertCount(1, $errorNotifications);
        $this->assertEquals('info', $infoNotifications[0]->type);
        $this->assertEquals('warning', $warningNotifications[0]->type);
        $this->assertEquals('error', $errorNotifications[0]->type);
    }

    /** @test */
    public function it_can_find_by_status(): void
    {
        Notification::create([
            'message' => 'Pending notification',
            'type' => 'info',
            'status' => 'pending',
        ]);

        Notification::create([
            'message' => 'Sent notification',
            'type' => 'info',
            'status' => 'sent',
        ]);

        Notification::create([
            'message' => 'Failed notification',
            'type' => 'info',
            'status' => 'failed',
        ]);

        $pendingNotifications = Notification::where('status', 'pending')->get();
        $sentNotifications = Notification::where('status', 'sent')->get();
        $failedNotifications = Notification::where('status', 'failed')->get();

        $this->assertCount(1, $pendingNotifications);
        $this->assertCount(1, $sentNotifications);
        $this->assertCount(1, $failedNotifications);
        $this->assertEquals('pending', $pendingNotifications[0]->status);
        $this->assertEquals('sent', $sentNotifications[0]->status);
        $this->assertEquals('failed', $failedNotifications[0]->status);
    }

    /** @test */
    public function it_can_find_by_tenant_id(): void
    {
        Notification::create([
            'message' => 'Tenant 1 notification',
            'type' => 'info',
            'tenant_id' => 1,
        ]);

        Notification::create([
            'message' => 'Tenant 2 notification',
            'type' => 'info',
            'tenant_id' => 2,
        ]);

        Notification::create([
            'message' => 'Tenant 1 another notification',
            'type' => 'warning',
            'tenant_id' => 1,
        ]);

        $tenant1Notifications = Notification::where('tenant_id', 1)->get();
        $tenant2Notifications = Notification::where('tenant_id', 2)->get();

        $this->assertCount(2, $tenant1Notifications);
        $this->assertCount(1, $tenant2Notifications);
        $this->assertEquals(1, $tenant1Notifications[0]->tenant_id);
        $this->assertEquals(1, $tenant1Notifications[1]->tenant_id);
        $this->assertEquals(2, $tenant2Notifications[0]->tenant_id);
    }

    /** @test */
    public function it_can_find_by_user_id(): void
    {
        Notification::create([
            'message' => 'User 123 notification',
            'type' => 'info',
            'user_id' => 123,
        ]);

        Notification::create([
            'message' => 'User 456 notification',
            'type' => 'info',
            'user_id' => 456,
        ]);

        Notification::create([
            'message' => 'User 123 another notification',
            'type' => 'warning',
            'user_id' => 123,
        ]);

        $user123Notifications = Notification::where('user_id', 123)->get();
        $user456Notifications = Notification::where('user_id', 456)->get();

        $this->assertCount(2, $user123Notifications);
        $this->assertCount(1, $user456Notifications);
        $this->assertEquals(123, $user123Notifications[0]->user_id);
        $this->assertEquals(123, $user123Notifications[1]->user_id);
        $this->assertEquals(456, $user456Notifications[0]->user_id);
    }

    /** @test */
    public function it_can_find_by_subject(): void
    {
        Notification::create([
            'message' => 'User subject notification',
            'type' => 'info',
            'subject_type' => 'App\Models\User',
            'subject_id' => 123,
        ]);

        Notification::create([
            'message' => 'Company subject notification',
            'type' => 'info',
            'subject_type' => 'App\Models\Company',
            'subject_id' => 456,
        ]);

        Notification::create([
            'message' => 'User subject another notification',
            'type' => 'warning',
            'subject_type' => 'App\Models\User',
            'subject_id' => 789,
        ]);

        $userSubjectNotifications = Notification::where('subject_type', 'App\Models\User')->get();
        $companySubjectNotifications = Notification::where('subject_type', 'App\Models\Company')->get();

        $this->assertCount(2, $userSubjectNotifications);
        $this->assertCount(1, $companySubjectNotifications);
        $this->assertEquals('App\Models\User', $userSubjectNotifications[0]->subject_type);
        $this->assertEquals('App\Models\User', $userSubjectNotifications[1]->subject_type);
        $this->assertEquals('App\Models\Company', $companySubjectNotifications[0]->subject_type);
    }

    /** @test */
    public function it_can_find_by_channel(): void
    {
        Notification::create([
            'message' => 'Mail notification',
            'type' => 'info',
            'channels' => ['mail'],
        ]);

        Notification::create([
            'message' => 'SMS notification',
            'type' => 'info',
            'channels' => ['sms'],
        ]);

        Notification::create([
            'message' => 'Multi-channel notification',
            'type' => 'info',
            'channels' => ['mail', 'database', 'sms'],
        ]);

        $mailNotifications = Notification::whereJsonContains('channels', 'mail')->get();
        $smsNotifications = Notification::whereJsonContains('channels', 'sms')->get();
        $databaseNotifications = Notification::whereJsonContains('channels', 'database')->get();

        $this->assertCount(2, $mailNotifications);
        $this->assertCount(2, $smsNotifications);
        $this->assertCount(1, $databaseNotifications);
    }

    /** @test */
    public function it_can_find_by_data_pattern(): void
    {
        Notification::create([
            'message' => 'High priority notification',
            'type' => 'alert',
            'data' => [
                'priority' => 'high',
                'category' => 'security',
            ],
        ]);

        Notification::create([
            'message' => 'Low priority notification',
            'type' => 'info',
            'data' => [
                'priority' => 'low',
                'category' => 'general',
            ],
        ]);

        Notification::create([
            'message' => 'Medium priority notification',
            'type' => 'warning',
            'data' => [
                'priority' => 'medium',
                'category' => 'maintenance',
            ],
        ]);

        $highPriorityNotifications = Notification::whereJsonPath('data.priority', 'high')->get();
        $securityNotifications = Notification::whereJsonPath('data.category', 'security')->get();

        $this->assertCount(1, $highPriorityNotifications);
        $this->assertCount(1, $securityNotifications);
        $this->assertEquals('high', $highPriorityNotifications[0]->data['priority']);
        $this->assertEquals('security', $securityNotifications[0]->data['category']);
    }

    /** @test */
    public function it_can_find_by_read_status(): void
    {
        Notification::create([
            'message' => 'Unread notification',
            'type' => 'info',
            'read_at' => null,
        ]);

        Notification::create([
            'message' => 'Read notification',
            'type' => 'info',
            'read_at' => now(),
        ]);

        Notification::create([
            'message' => 'Another unread notification',
            'type' => 'warning',
            'read_at' => null,
        ]);

        $unreadNotifications = Notification::whereNull('read_at')->get();
        $readNotifications = Notification::whereNotNull('read_at')->get();

        $this->assertCount(2, $unreadNotifications);
        $this->assertCount(1, $readNotifications);
        $this->assertNull($unreadNotifications[0]->read_at);
        $this->assertNull($unreadNotifications[1]->read_at);
        $this->assertNotNull($readNotifications[0]->read_at);
    }

    /** @test */
    public function it_can_find_by_sent_status(): void
    {
        Notification::create([
            'message' => 'Unsent notification',
            'type' => 'info',
            'sent_at' => null,
        ]);

        Notification::create([
            'message' => 'Sent notification',
            'type' => 'info',
            'sent_at' => now(),
        ]);

        Notification::create([
            'message' => 'Another unsent notification',
            'type' => 'warning',
            'sent_at' => null,
        ]);

        $unsentNotifications = Notification::whereNull('sent_at')->get();
        $sentNotifications = Notification::whereNotNull('sent_at')->get();

        $this->assertCount(2, $unsentNotifications);
        $this->assertCount(1, $sentNotifications);
        $this->assertNull($unsentNotifications[0]->sent_at);
        $this->assertNull($unsentNotifications[1]->sent_at);
        $this->assertNotNull($sentNotifications[0]->sent_at);
    }

    /** @test */
    public function it_can_find_by_date_range(): void
    {
        $yesterday = now()->subDay();
        $today = now();
        $tomorrow = now()->addDay();

        Notification::create([
            'message' => 'Yesterday notification',
            'type' => 'info',
            'created_at' => $yesterday,
        ]);

        Notification::create([
            'message' => 'Today notification',
            'type' => 'info',
            'created_at' => $today,
        ]);

        Notification::create([
            'message' => 'Tomorrow notification',
            'type' => 'info',
            'created_at' => $tomorrow,
        ]);

        $todayNotifications = Notification::whereDate('created_at', $today->toDateString())->get();
        $recentNotifications = Notification::where('created_at', '>=', $yesterday)->get();

        $this->assertCount(1, $todayNotifications);
        $this->assertCount(2, $recentNotifications); // yesterday and today
        $this->assertEquals('Today notification', $todayNotifications[0]->message);
    }

    /** @test */
    public function it_can_find_by_multiple_criteria(): void
    {
        Notification::create([
            'message' => 'High priority security alert',
            'type' => 'alert',
            'status' => 'pending',
            'tenant_id' => 1,
            'data' => [
                'priority' => 'high',
                'category' => 'security',
            ],
        ]);

        Notification::create([
            'message' => 'Low priority general info',
            'type' => 'info',
            'status' => 'sent',
            'tenant_id' => 1,
            'data' => [
                'priority' => 'low',
                'category' => 'general',
            ],
        ]);

        Notification::create([
            'message' => 'Medium priority maintenance warning',
            'type' => 'warning',
            'status' => 'pending',
            'tenant_id' => 2,
            'data' => [
                'priority' => 'medium',
                'category' => 'maintenance',
            ],
        ]);

        $pendingHighPriorityTenant1 = Notification::where('status', 'pending')
            ->where('tenant_id', 1)
            ->whereJsonPath('data.priority', 'high')
            ->get();

        $this->assertCount(1, $pendingHighPriorityTenant1);
        $this->assertEquals('High priority security alert', $pendingHighPriorityTenant1[0]->message);
        $this->assertEquals('pending', $pendingHighPriorityTenant1[0]->status);
        $this->assertEquals(1, $pendingHighPriorityTenant1[0]->tenant_id);
        $this->assertEquals('high', $pendingHighPriorityTenant1[0]->data['priority']);
    }

    /** @test */
    public function it_can_handle_empty_data(): void
    {
        $notification = Notification::create([
            'message' => 'Empty data notification',
            'type' => 'info',
            'data' => [],
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'data' => json_encode([]),
        ]);

        $this->assertIsArray($notification->data);
        $this->assertEmpty($notification->data);
    }

    /** @test */
    public function it_can_handle_empty_channels(): void
    {
        $notification = Notification::create([
            'message' => 'No channels notification',
            'type' => 'info',
            'channels' => [],
        ]);

        $this->assertDatabaseHas('notifications', [
            'id' => $notification->id,
            'channels' => json_encode([]),
        ]);

        $this->assertIsArray($notification->channels);
        $this->assertEmpty($notification->channels);
    }

    /** @test */
    public function it_can_handle_null_values(): void
    {
        $notification = Notification::create([
            'message' => 'Null values notification',
            'type' => 'info',
            'tenant_id' => null,
            'user_id' => null,
            'subject_type' => null,
            'subject_id' => null,
            'channels' => null,
            'status' => null,
            'sent_at' => null,
            'data' => null,
        ]);

        $this->assertNull($notification->tenant_id);
        $this->assertNull($notification->user_id);
        $this->assertNull($notification->subject_type);
        $this->assertNull($notification->subject_id);
        $this->assertNull($notification->channels);
        $this->assertNull($notification->status);
        $this->assertNull($notification->sent_at);
        $this->assertNull($notification->data);
    }
}
=======
>>>>>>> 301ad8b44 (.)
