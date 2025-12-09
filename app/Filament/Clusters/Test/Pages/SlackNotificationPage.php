<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)

class SlackNotificationPage extends XotBasePage
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
    protected static null|string $cluster = Test::class;
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
}
