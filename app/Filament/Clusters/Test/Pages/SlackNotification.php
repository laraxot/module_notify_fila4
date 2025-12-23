<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

use BackedEnum;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Notify\Filament\Clusters\Test;

class SlackNotification extends XotBasePage
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-paper-airplane';

    protected string $view = 'notify::filament.clusters.test.pages.slack-notification';

    protected static ?string $cluster = Test::class;
}
