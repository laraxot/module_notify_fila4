<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 9777d1b3 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;
>>>>>>> a12f125f4a (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 3f537838 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 3f537838 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)

class SlackNotificationPage extends XotBasePage
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b3 (.)
=======
    protected static null|string $cluster = Test::class;
=======
=======
    protected static null|string $cluster = Test::class;
=======
>>>>>>> d09cb759 (.)
=======
    protected static null|string $cluster = Test::class;
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> a12f125f4a (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> b93ef594b4 (.)
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;

class SlackNotificationPage extends XotBasePage
{
    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static string $view = 'notify::filament.clusters.test.pages.slack-notification';

    protected static ?string $cluster = Test::class;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 3f537838 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 3f537838 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
}
