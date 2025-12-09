<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use BackedEnum;
=======
>>>>>>> 75179b85 (.)
use Filament\Pages\Page;
use Modules\Notify\Filament\Clusters\Test;

class SlackNotification extends Page
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
=======
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';
>>>>>>> 75179b85 (.)

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

    protected static null|string $cluster = Test::class;
}
