<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use BackedEnum;
use Filament\Panel;
use Filament\Schemas\Schema;
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
use BackedEnum;
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
use Filament\Panel;
use Filament\Schemas\Schema;
=======
=======
=======
>>>>>>> c8b1c8bf (.)
use Override;
use Illuminate\Contracts\Support\Htmlable;
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Schemas\Schema;
use Filament\Panel;
>>>>>>> f1c9518b (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
use Filament\Schemas\Schema;
use Filament\Panel;
>>>>>>> f1c9518b (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> c8b1c8bf (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b855 (.)
=======
use Filament\Schemas\Schema;
use Filament\Panel;
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\KeyValue;
use Exception;
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
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
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\WhatsAppData;
=======
<<<<<<< HEAD
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
use Modules\Notify\Datas\WhatsAppData;
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
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
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
<<<<<<< HEAD
use Override;
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> d5c4b93 (.)
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
=======
>>>>>>> e5b598a (.)
=======
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
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
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
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
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> d5c4b93 (.)
<<<<<<< HEAD
>>>>>>> 6d08c01b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 2bcb149 (.)
<<<<<<< HEAD
>>>>>>> c6c33175 (.)
=======
=======
>>>>>>> 56b7aa1 (.)
<<<<<<< HEAD
>>>>>>> 3b4c9907 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
<<<<<<< HEAD
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 7392166 (.)
<<<<<<< HEAD
>>>>>>> 503981fd (.)
=======
=======
>>>>>>> e5b598a (.)
<<<<<<< HEAD
>>>>>>> 8e5817bc (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
<<<<<<< HEAD
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 1f13f40 (.)
>>>>>>> 7a2f131f (.)
=======
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 58816034 (.)
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\WhatsAppData;
use Modules\Notify\Enums\WhatsAppDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
use Override;
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> d5c4b93 (.)
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
=======
>>>>>>> e5b598a (.)
=======
>>>>>>> 806a0e3 (.)
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> d5c4b93 (.)
<<<<<<< HEAD
>>>>>>> 6d08c01b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 2bcb149 (.)
<<<<<<< HEAD
>>>>>>> c6c33175 (.)
=======
=======
>>>>>>> 56b7aa1 (.)
<<<<<<< HEAD
>>>>>>> 3b4c9907 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
<<<<<<< HEAD
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 7392166 (.)
<<<<<<< HEAD
>>>>>>> 503981fd (.)
=======
=======
>>>>>>> e5b598a (.)
<<<<<<< HEAD
>>>>>>> 8e5817bc (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 1f13f40 (.)
>>>>>>> 7a2f131f (.)
=======
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
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
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
use Override;
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 0f07e6d (.)
=======
>>>>>>> d5c4b93 (.)
=======
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 56b7aa1 (.)
=======
>>>>>>> 0875292 (.)
=======
>>>>>>> e5b598a (.)
=======
>>>>>>> 806a0e3 (.)
=======
use Modules\Notify\Enums\WhatsAppDriverEnum;

use Filament\Forms;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Modules\Notify\Datas\WhatsAppData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Filament\Forms\Concerns\InteractsWithForms;
use Modules\Notify\Notifications\WhatsAppNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
>>>>>>> d5c4b93 (.)
<<<<<<< HEAD
>>>>>>> 6d08c01b (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
<<<<<<< HEAD
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 2bcb149 (.)
<<<<<<< HEAD
>>>>>>> c6c33175 (.)
=======
=======
>>>>>>> 56b7aa1 (.)
<<<<<<< HEAD
>>>>>>> 3b4c9907 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
<<<<<<< HEAD
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 7392166 (.)
<<<<<<< HEAD
>>>>>>> 503981fd (.)
=======
=======
>>>>>>> e5b598a (.)
<<<<<<< HEAD
>>>>>>> 8e5817bc (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 1f13f40 (.)
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop

/**
 * @property \Filament\Schemas\Schema $whatsappForm
 */
class SendWhatsAppPage extends XotBasePage
{
<<<<<<< HEAD
    public null|array $whatsappData = [];
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;
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
    public null|array $whatsappData = [];
<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
>>>>>>> 75179b85 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
=======
>>>>>>> 161887a2 (.)
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
>>>>>>> 75179b85 (.)
=======
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
>>>>>>> 75179b85 (.)
=======
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
>>>>>>> 75179b85 (.)
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
    public ?array $whatsappData = [];

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected string $view = 'notify::filament.pages.send-whatsapp';

    protected static ?string $cluster = Test::class;
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
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1f13f40 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 2bcb149 (.)
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 7392166 (.)
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 1f13f40 (.)
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
=======
>>>>>>> 2bcb149 (.)
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
=======
>>>>>>> 7392166 (.)
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
=======
>>>>>>> 1f13f40 (.)
>>>>>>> 7a2f131f (.)
    public null|array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop

    /**
     * Get the slug of the page
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
    public ?array $whatsappData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected string $view = 'notify::filament.pages.send-whatsapp';
    protected static ?string $cluster = Test::class;
    
    /**
     * Get the slug of the page
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
     * This explicit definition ensures consistent URL generation for acronyms
     */
    public static function getSlug(?Panel $panel = null): string
    {
        return 'send-whatsapp-page';
    }

    public function mount(): void
    {
        $this->fillForms();
    }

    protected function getForms(): array
    {
        return [
            'whatsappForm',
        ];
    }

    protected function fillForms(): void
    {
        $this->whatsappForm->fill();
    }

    public function whatsappForm(Schema $schema): Schema
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
>>>>>>> laraxot/develop
        return $schema->schema($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\KeyValue|\Filament\Forms\Components\Select|\Filament\Forms\Components\TextInput>
     */
    public function getWhatsAppFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'to' => TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            'message' => TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            'driver' => Select::make('driver')
=======
            TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'driver' => Select::make('driver')
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
    public function whatsappForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 82ae73be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 82ae73be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> de02998b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 3f39ac8b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 6d08c01b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 3b4c9907 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> 8e5817bc (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
>>>>>>> d09cb759 (.)
        return $schema
            ->components($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> b93ef594b4 (.)
=======
    public function whatsappForm(Form $form): Form
    {
        return $form
            ->schema($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b85 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 161887a2 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 888799d0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 7a2f131f (.)
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
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        /** @var array<Htmlable|string> $components */
        $components = array_values($this->getWhatsAppFormSchema());

        return $schema->components($components)->model($this->getUser())->statePath('whatsappData');
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 207ac35 (.)
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
=======
=======
>>>>>>> 207ac35 (.)
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 82ae73be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> de02998b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 3f39ac8b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 6d08c01b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 3b4c9907 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 8e5817bc (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 2fc60436 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 82ae73be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 82ae73be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> de02998b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 3f39ac8b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 6d08c01b (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 3b4c9907 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 8e5817bc (.)
=======
        return $schema
            ->components($this->getWhatsAppFormSchema())
            ->model($this->getUser())
            ->statePath('whatsappData');
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
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73b (.)
>>>>>>> ce89c8bb (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 7a2f131f (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 82ae73b (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
        return $schema->components($this->getWhatsAppFormSchema())->model($this->getUser())->statePath('whatsappData');
>>>>>>> 7a2f131f (.)
    }

    public function getWhatsAppFormSchema(): array
    {
        return [
            TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Select::make('driver')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
            Forms\Components\TextInput::make('to')
                ->tel()
                ->required()
                ->helperText('Inserisci il numero di telefono con prefisso internazionale (es. +39)'),
            Forms\Components\TextInput::make('message')
                ->required()
                ->maxLength(4096)
                ->helperText('Il messaggio non può superare i 4096 caratteri'),
            Forms\Components\Select::make('driver')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Select::make('driver')
>>>>>>> 2cbbc069 (.)
=======
            Select::make('driver')
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
            Select::make('driver')
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Select::make('driver')
>>>>>>> 2cbbc069 (.)
=======
            Select::make('driver')
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
            Select::make('driver')
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Select::make('driver')
>>>>>>> 2cbbc069 (.)
>>>>>>> laraxot/develop
                ->options(WhatsAppDriverEnum::options())
                ->default(WhatsAppDriverEnum::getDefault()->value)
                ->required()
                ->helperText(__('notify::whatsapp.fields.driver.helper_text')),
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> laraxot/develop
            'template' => TextInput::make('template')->helperText('Nome del template (opzionale)'),
            'parameters' => KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            'media_url' => TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            'media_type' => Select::make('media_type')
<<<<<<< HEAD
=======
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
>>>>>>> de02998b (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> 75179b85 (.)
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> 75179b855 (.)
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
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
            Select::make('media_type')
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
=======
            TextInput::make('template')
                ->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')
                ->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
>>>>>>> a12f125f4a (.)
=======
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
>>>>>>> b93ef594b4 (.)
            Select::make('media_type')
=======
            Forms\Components\TextInput::make('template')
                ->helperText('Nome del template (opzionale)'),
            Forms\Components\KeyValue::make('parameters')
                ->helperText('Parametri per il template (opzionale)'),
            Forms\Components\TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
            Forms\Components\Select::make('media_type')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 82ae73be (.)
            TextInput::make('template')->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')->url()->helperText('URL del media (opzionale)'),
=======
            TextInput::make('template')
                ->helperText('Nome del template (opzionale)'),
            KeyValue::make('parameters')
                ->helperText('Parametri per il template (opzionale)'),
            TextInput::make('media_url')
                ->url()
                ->helperText('URL del media (opzionale)'),
>>>>>>> b19cd40 (.)
            Select::make('media_type')
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> a335025b (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 2cbbc069 (.)
>>>>>>> laraxot/develop
                ->options([
                    'image' => 'Immagine',
                    'video' => 'Video',
                    'document' => 'Documento',
                    'audio' => 'Audio',
                ])
                ->helperText('Tipo di media (opzionale)'),
        ];
    }

    public function sendWhatsApp(): void
    {
        try {
            $data = $this->whatsappForm->getState();
            $user = $this->getUser();

            $message = is_string($data['message']) ? $data['message'] : '';

<<<<<<< HEAD
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
            Notification::route('whatsapp', $data['to'])
                ->notify(new WhatsAppNotification($message, [
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
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
=======
            Notification::route('whatsapp', $data['to'])
                ->notify(new WhatsAppNotification($message, [
>>>>>>> a12f125f4a (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> b93ef594b4 (.)
=======
            Notification::route('whatsapp', $data['to'])
                ->notify(new WhatsAppNotification($message, [
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 58816034 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 58816034 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
            Notification::route('whatsapp', $data['to'])->notify(
                new WhatsAppNotification($message, [
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
                    'driver' => $data['driver'],
                    'template' => $data['template'] ?? null,
                    'parameters' => $data['parameters'] ?? null,
                    'media_url' => $data['media_url'] ?? null,
                    'media_type' => $data['media_type'] ?? null,
<<<<<<< HEAD
                ]),
            );
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
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
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
                ]),
            );
=======
                ]));
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
=======
                ]),
            );
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
                ]),
            );
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
                ]),
            );
=======
=======
                ]),
            );
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                ]),
            );
=======
                ]));
>>>>>>> a12f125f4a (.)
=======
                ]),
            );
>>>>>>> b93ef594b4 (.)
=======
                ]));
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
                ]),
            );
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
                ]),
            );
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
                ]),
            );
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
                ]),
            );
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
                ]),
            );
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
                ]),
            );
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
                ]),
            );
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
                ]),
            );
>>>>>>> 58816034 (.)
=======
                ]),
            );
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
                ]),
            );
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
                ]),
            );
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
                ]),
            );
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
                ]),
            );
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
                ]),
            );
>>>>>>> 7a2f131f (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
                ]),
            );
>>>>>>> 58816034 (.)
=======
                ]),
            );
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
                ]),
            );
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
                ]),
            );
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
                ]),
            );
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
                ]),
            );
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
                ]),
            );
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
                ]),
            );
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
                ]),
            );
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
                ]),
            );
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop

            FilamentNotification::make()
                ->success()
                ->title('Messaggio WhatsApp inviato con successo')
                ->send();
<<<<<<< HEAD
        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> e0d9c9be (.)
=======

>>>>>>> b19cd40 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
        } catch (Exception $e) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======

>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
>>>>>>> f1c9518b (.)
=======
            Log::error('Errore nell\'invio WhatsApp: '.$e->getMessage());
=======
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
        } catch (Exception $e) {
            Log::error('Errore nell\'invio WhatsApp: ' . $e->getMessage());
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop

            FilamentNotification::make()
                ->danger()
                ->title('Errore nell\'invio WhatsApp')
                ->body($e->getMessage())
                ->send();
        }
    }

    protected function getWhatsAppFormActions(): array
    {
        return [
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
            Action::make('whatsappFormActions')->submit('whatsappFormActions'),
        ];
    }

    #[Override]
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
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
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
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 8e5817bc (.)
            Action::make('whatsappFormActions')
                ->submit('whatsappFormActions'),
        ];
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
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> a12f125f4a (.)
=======
            Action::make('whatsappFormActions')->submit('whatsappFormActions'),
        ];
    }

    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

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
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
        if (!($user instanceof Model)) {
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
        if (!($user instanceof Model)) {
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
        if (! ($user instanceof Model)) {
=======
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> d5c4b93 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 2e67a2a (.)
=======
>>>>>>> 2bcb149 (.)
=======
>>>>>>> 56b7aa1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0875292 (.)
=======
>>>>>>> 7392166 (.)
=======
>>>>>>> e5b598a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 806a0e3 (.)
=======
>>>>>>> 1f13f40 (.)
        if (!($user instanceof Model)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 6d08c01b (.)
=======
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 8e5817bc (.)
=======
>>>>>>> e0d9c9be (.)
=======
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
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
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 161887a2 (.)
>>>>>>> laraxot/develop
        if (!($user instanceof Model)) {
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
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
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
=======
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        if (! $user instanceof Model) {
            throw new \Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
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
=======
>>>>>>> 3f537838 (.)
=======
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
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> 6d08c01b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 6b6b9e41 (.)
=======
>>>>>>> c6c33175 (.)
=======
>>>>>>> 3b4c9907 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 5fe4f466 (.)
=======
>>>>>>> 503981fd (.)
=======
>>>>>>> 8e5817bc (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> e0d9c9be (.)
=======
>>>>>>> 7a2f131f (.)
>>>>>>> laraxot/develop
        }

        return $user;
    }
}
