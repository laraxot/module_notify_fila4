<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

=======
=======
declare(strict_types=1);

>>>>>>> 75179b85 (.)

namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Actions;
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;
use Modules\Notify\Filament\Resources\MailTemplateResource;
=======
namespace Modules\Notify\Filament\Resources\MailTemplateResource\Pages;

use Filament\Actions;
use Modules\Notify\Filament\Resources\MailTemplateResource;
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;
>>>>>>> b19cd40 (.)
=======
use Modules\Lang\Filament\Resources\Pages\LangBaseCreateRecord;
use Modules\Notify\Filament\Resources\MailTemplateResource;
>>>>>>> 75179b85 (.)

class CreateMailTemplate extends LangBaseCreateRecord
{
    protected static string $resource = MailTemplateResource::class;
}
