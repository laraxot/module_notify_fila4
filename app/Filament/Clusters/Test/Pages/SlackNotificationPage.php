<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
=======
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;
>>>>>>> b19cd40 (.)
=======
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
>>>>>>> 4e2ebfb (.)

class SlackNotificationPage extends XotBasePage
{
<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

    protected static ?string $cluster = Test::class;
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

<<<<<<< HEAD
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
    protected static null|string $cluster = Test::class;
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
}
