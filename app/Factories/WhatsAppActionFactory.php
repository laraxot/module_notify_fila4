<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Factories;

<<<<<<< HEAD
use Exception;
use Illuminate\Support\Facades\Config;
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
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6608a1a0 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)

=======
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 31f5d28f (.)
>>>>>>> e2f1a4045 (.)
use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
use Exception;
use Illuminate\Support\Facades\Config;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 31f5d28f (.)
use Exception;
use Illuminate\Support\Facades\Config;
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 6608a1a0 (.)
use Exception;
use Illuminate\Support\Facades\Config;
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
use Modules\Notify\Actions\WhatsApp\Send360dialogWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendFacebookWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendTwilioWhatsAppAction;
use Modules\Notify\Actions\WhatsApp\SendVonageWhatsAppAction;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> e53a56570 (.)
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f87b41c3b (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
>>>>>>> 54220b28 (rebase 210)

=======
>>>>>>> b19cd40 (.)
=======

<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======

>>>>>>> 9777d1b3 (.)
=======

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======

>>>>>>> 3f537838 (.)
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> a29a4728 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)

/**
 * Factory per la creazione di azioni WhatsApp.
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
 *
=======
 * 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
 *
>>>>>>> 9777d1b3 (.)
=======
 *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
 *
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
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
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)

=======
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
=======

=======
=======

=======
>>>>>>> 8dc1f2ed6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)

<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)

>>>>>>> a070a65a5 (.)
=======

=======
>>>>>>> b19cd40 (.)
>>>>>>> f87b41c3b (.)
use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> 01af324fe (.)
=======
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======

use function Safe\preg_replace;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 909e45af (.)
=======
<<<<<<< HEAD
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
>>>>>>> 01af324fe (.)
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
<<<<<<< HEAD
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 69fa7d37 (.)
=======
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
>>>>>>> 75179b85 (.)
=======
use Modules\Notify\Contracts\WhatsAppProviderActionInterface;

use function Safe\preg_replace;
>>>>>>> 75179b855 (.)
=======
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 62b0c9c (.)
=======
>>>>>>> bf479cc (.)
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 8d298d6 (.)
>>>>>>> a29a4728 (.)
>>>>>>> laraxot/develop
=======

use function Safe\preg_replace;
>>>>>>> 75179b85 (.)
>>>>>>> 1487fe812 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)

/**
 * Factory per la creazione di azioni WhatsApp.
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
 *
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
>>>>>>> 75179b85 (.)
=======
=======
 * 
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
=======
>>>>>>> 1619767d8 (.)
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
 *
=======
 * 
>>>>>>> a12f125f4a (.)
=======
 *
>>>>>>> b93ef594b4 (.)
=======
 * 
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
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 8dc1f2ed6 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
=======
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
 *
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
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
<<<<<<< HEAD
=======
=======
 *
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
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
 *
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
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
 *
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
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
 *
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
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
 *
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
>>>>>>> 75179b855 (.)
=======
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
 *
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> b207a9b1a (.)
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1619767d8 (.)
=======
=======
 *
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
=======
 * 
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
 *
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
>>>>>>> f87b41c3b (.)
 * Questa factory centralizza la logica di selezione del driver WhatsApp
 * e la creazione dell'azione corrispondente, seguendo il pattern Factory.
 */
final class WhatsAppActionFactory
{
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     *
<<<<<<< HEAD
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
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
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> e53a56570 (.)
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     *
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> e53a56570 (.)
>>>>>>> f1c9518b (.)
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
=======
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
     * @param  string|null  $driver  Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
>>>>>>> f1c9518b (.)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> e53a56570 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2941b0bd (.)
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
>>>>>>> b207a9b1a (.)
=======
>>>>>>> 1619767d8 (.)
=======
>>>>>>> 8dc1f2ed6 (.)
=======
=======
>>>>>>> 2941b0bd (.)
>>>>>>> a070a65a5 (.)
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
<<<<<<< HEAD
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> f813254 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
>>>>>>> 985c7bda (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
>>>>>>> 75179b85 (.)
=======
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
     * @throws Exception Se il driver specificato non è supportato
     */
    /**
     * Crea un'azione WhatsApp basata sul driver specificato o su quello predefinito.
     * Utilizza una formula per calcolare il nome della classe dell'azione.
     *
     * @param string|null $driver Driver WhatsApp da utilizzare (se null, viene utilizzato quello predefinito)
     * @return WhatsAppProviderActionInterface Azione WhatsApp corrispondente al driver
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> f1c9518b (.)
     * @throws Exception Se il driver specificato non è supportato o la classe non esiste
     */
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> 2effe245 (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
>>>>>>> 985c7bda (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
=======
>>>>>>> e53a56570 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
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
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
=======
>>>>>>> b1f2dd4c (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

=======
>>>>>>> 677a6ab7 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 11b43e822 (.)
=======
>>>>>>> e2f1a4045 (.)
=======
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> a29a4728 (.)
=======
>>>>>>> d13ead25 (.)
=======
>>>>>>> 3d542a31 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_string($normalizedDriver)) {
=======
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
        if (! is_string($normalizedDriver)) {
=======
        if (!is_string($normalizedDriver)) {
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
            $normalizedDriver = '';
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
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> e39a6f9 (.)
=======
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
>>>>>>> 677a6ab7 (.)
=======
>>>>>>> b1f2dd4c (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

>>>>>>> 69fa7d37 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
        if (! is_string($normalizedDriver)) {
=======
        if (!is_string($normalizedDriver)) {
>>>>>>> 99ff506 (.)
=======
        if (! is_string($normalizedDriver)) {
>>>>>>> 69fa7d37 (.)
            $normalizedDriver = '';
        }
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> e39a6f9 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 909e45af (.)
=======
>>>>>>> 69fa7d37 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> 909e45af (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 62b0c9c (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 75179b85 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 2fdda20 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 909e45af (.)
=======
=======
=======
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
>>>>>>> 2fdda20 (.)
>>>>>>> 909e45af (.)
=======
=======
=======
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

        if (!is_string($normalizedDriver)) {
            $normalizedDriver = '';
        }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8d298d6 (.)
<<<<<<< HEAD
>>>>>>> a29a4728 (.)
=======
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
<<<<<<< HEAD
>>>>>>> d13ead25 (.)
=======
=======
>>>>>>> d5d0864 (.)
>>>>>>> 3d542a31 (.)

        if (!is_string($normalizedDriver)) {
            $normalizedDriver = '';
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
>>>>>>> 8d298d6 (.)
<<<<<<< HEAD
>>>>>>> a29a4728 (.)
=======
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
<<<<<<< HEAD
>>>>>>> d13ead25 (.)
=======
=======
>>>>>>> d5d0864 (.)
>>>>>>> 3d542a31 (.)

=======
>>>>>>> 2fdda20 (.)
=======
=======
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)
=======
>>>>>>> a404ea71 (.)
=======
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> ca10d6ad (.)
=======
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> a404ea71 (.)
>>>>>>> c4282a934 (.)
=======
>>>>>>> 2ba4e5540 (.)
=======
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
=======
>>>>>>> ce26f84e (.)
>>>>>>> 2d4267d82 (.)
=======
>>>>>>> 21e1a74cb (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
        if (!is_string($normalizedDriver)) {
=======
<<<<<<< HEAD
        if (! is_string($normalizedDriver)) {
=======
        if (!is_string($normalizedDriver)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            $normalizedDriver = '';
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
>>>>>>> 8d298d6 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 4ad63a5 (.)
=======
>>>>>>> d5d0864 (.)

>>>>>>> 31bdf6b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 69fa7d37 (.)
=======
=======
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
=======
>>>>>>> 4b81568 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (!is_string($normalizedDriver)) {
=======
        if (! is_string($normalizedDriver)) {
>>>>>>> 0c46ff7 (.)
            $normalizedDriver = '';
        }

>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
=======
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
<<<<<<< HEAD
>>>>>>> 2ba4e5540 (.)
=======
<<<<<<< HEAD
>>>>>>> 08ae27d78 (.)
=======
<<<<<<< HEAD
>>>>>>> 8c6d84fe6 (.)
=======
<<<<<<< HEAD
>>>>>>> 2d4267d82 (.)
=======
<<<<<<< HEAD
>>>>>>> 21e1a74cb (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
=======
>>>>>>> 3f537838 (.)

>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 4b81568 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> 6608a1a0 (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 62b0c9c (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> bf479cc (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 3f537838 (.)
<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
>>>>>>> 31f5d28f (.)
<<<<<<< HEAD
>>>>>>> e2f1a4045 (.)
=======
=======
>>>>>>> a404ea71 (.)
<<<<<<< HEAD
>>>>>>> c4282a934 (.)
=======
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
<<<<<<< HEAD
>>>>>>> 2ba4e5540 (.)
=======
=======
>>>>>>> 08fd62df (.)
>>>>>>> 08ae27d78 (.)

<<<<<<< HEAD
<<<<<<< HEAD
=======
        if (!is_string($normalizedDriver)) {
=======
        if (! is_string($normalizedDriver)) {
>>>>>>> 0c46ff7 (.)
            $normalizedDriver = '';
        }

>>>>>>> 4ad63a5 (.)
>>>>>>> 7cf73d1 (.)
>>>>>>> 677a6ab7 (.)
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b85 (.)
                    ". Class {$className} not found.",
            );
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> b93ef594b4 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 510809c6f (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

=======
>>>>>>> 2fdda20 (.)

>>>>>>> 31bdf6b (.)
>>>>>>> 69fa7d37 (.)
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                    ". Class {$className} not found.",
            );
        }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
        
>>>>>>> a12f125f4a (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
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
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 75179b855 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
<<<<<<< HEAD
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2d4267d82 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7d903672 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
<<<<<<< HEAD
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                    ". Class {$className} not found.",
            );
        }
<<<<<<< HEAD
        
>>>>>>> a12f125f4a (.)
=======

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b93ef594b4 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> 75179b85 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
=======
>>>>>>> 3f537838 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower((string) $driver)));

        if (!is_string($normalizedDriver)) {
            $normalizedDriver = '';
        }
<<<<<<< HEAD
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 31f5d28f (.)
=======
>>>>>>> a404ea71 (.)
=======
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> 367c6ceb (.)
=======
>>>>>>> 08fd62df (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 6608a1a0 (.)
>>>>>>> 01af324fe (.)
=======
>>>>>>> 8c6d84fe6 (.)
=======
>>>>>>> 2d4267d82 (.)
=======
=======
>>>>>>> 7d903672 (.)
>>>>>>> 21e1a74cb (.)

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
<<<<<<< HEAD
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
=======
<<<<<<< HEAD
        if (! class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: '.
                (is_string($driver) ? $driver : '').
=======
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                    ". Class {$className} not found.",
            );
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
>>>>>>> b207a9b1a (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 1619767d8 (.)
=======
<<<<<<< HEAD
>>>>>>> f87b41c3b (.)
=======
<<<<<<< HEAD
>>>>>>> a070a65a5 (.)
=======
<<<<<<< HEAD
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> 6608a1a0 (.)
=======
>>>>>>> ca10d6ad (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
=======
    public function create(null|string $driver = null): WhatsAppProviderActionInterface
>>>>>>> b93ef594b4 (.)
    {
        $driver ??= Config::get('whatsapp.default', 'twilio');

        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> 0db165c (.)
>>>>>>> ce26f84e (.)
=======
>>>>>>> 7d903672 (.)
=======
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
>>>>>>> f2e64178 (.)
>>>>>>> laraxot/develop

        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";

        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception(
                'Unsupported WhatsApp driver: ' .
                (is_string($driver) ? $driver : '') .
                    ". Class {$className} not found.",
            );
        }
<<<<<<< HEAD

        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
            throw new Exception("Class {$className} does not implement WhatsAppProviderActionInterface.");
        }

        /** @var WhatsAppProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> 8dc1f2ed6 (.)
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
>>>>>>> 8dc1f2ed6 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> f2e64178 (.)
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
    public function create(?string $driver = null): WhatsAppProviderActionInterface
    {
        $driver = $driver ?? Config::get('whatsapp.default', 'twilio');
        
        // Gestione speciale per driver con caratteri non alfanumerici (es. 360dialog)
        $normalizedDriver = preg_replace('/[^a-zA-Z0-9]/', '', ucfirst(strtolower(is_string($driver) ? $driver : '')));
        
        // Costruisci il nome completo della classe
        $className = "\\Modules\\Notify\\Actions\\WhatsApp\\Send{$normalizedDriver}WhatsAppAction";
        
        // Verifica se la classe esiste
        if (!class_exists($className)) {
            throw new Exception("Unsupported WhatsApp driver: " . (is_string($driver) ? $driver : '') . ". Class {$className} not found.");
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
<<<<<<< HEAD
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> f87b41c3b (.)
        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
<<<<<<< HEAD
>>>>>>> e53a56570 (.)
        if (! is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e53a56570 (.)
>>>>>>> f1c9518b (.)
            throw new Exception("Class {$className} does not implement WhatsAppProviderActionInterface.");
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
>>>>>>> 985c7bda (.)

<<<<<<< HEAD
=======

<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======

>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
        $instance = app($className);

        if (! $instance instanceof WhatsAppProviderActionInterface) {
            throw new Exception("Failed to create instance of {$className}.");
        }

>>>>>>> 2effe245 (.)
        /** @var WhatsAppProviderActionInterface $instance */
        $instance = app($className);
        return $instance;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
        return app($className);
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
<<<<<<< HEAD
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
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)

=======
        
>>>>>>> b19cd40 (.)
=======

>>>>>>> 4e2ebfb (.)
=======

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
<<<<<<< HEAD

<<<<<<< HEAD
>>>>>>> 11b43e822 (.)
=======
=======
        
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> b207a9b1a (.)
=======
=======

>>>>>>> 4e2ebfb (.)
>>>>>>> 1619767d8 (.)
=======
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 8dc1f2ed6 (.)
=======

>>>>>>> a070a65a5 (.)
=======
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)

=======
        
>>>>>>> b19cd40 (.)
>>>>>>> f87b41c3b (.)
        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
=======

        return app($className);
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
        return app($className);
>>>>>>> 5fd545e4 (.)
=======
        return app($className);
>>>>>>> 54220b28 (rebase 210)
=======
        return app($className);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        return app($className);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
=======
        // Verifica se la classe implementa l'interfaccia richiesta
>>>>>>> 75179b85 (.)
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
>>>>>>> f1c9518b (.)
=======
=======
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> c8b1c8bf (.)
=======

        // Verifica se la classe implementa l'interfaccia richiesta
<<<<<<< HEAD
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> 75179b85 (.)
=======

        // Verifica se la classe implementa l'interfaccia richiesta
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> 75179b855 (.)
=======
<<<<<<< HEAD
        if (! is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
=======
        if (!is_subclass_of($className, WhatsAppProviderActionInterface::class)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            throw new Exception("Class {$className} does not implement WhatsAppProviderActionInterface.");
        }

        return app($className);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
        return app($className);
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
        return app($className);
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 5fd545e4 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
    }
}
=======
>>>>>>> 301ad8b44 (.)
