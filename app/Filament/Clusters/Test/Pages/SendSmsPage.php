<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Filament\Clusters\Test\Pages;

<<<<<<< HEAD
use BackedEnum;
use Filament\Panel;
use Filament\Schemas\Schema;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
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
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 510809c6f (.)
use Filament\Panel;
use Filament\Schemas\Schema;
=======
=======
>>>>>>> c8b1c8bf (.)
use Override;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification as FilamentNotification;
use Filament\Panel;
use Filament\Schemas\Schema;
=======
use Filament\Panel;
use Filament\Schemas\Schema;
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b85 (.)
=======
use Filament\Panel;
use Filament\Schemas\Schema;
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Exception;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
use Override;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Notify\Datas\SmsData;
=======
<<<<<<< HEAD
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b85 (.)
=======
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b85 (.)
=======
use Modules\Notify\Datas\SmsData;
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Modules\Notify\Enums\SmsDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
use Webmozart\Assert\Assert;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Filament\Forms;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\SmsDriverEnum;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
=======
=======
use Filament\Forms;
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Notifications\Notification as FilamentNotification;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Modules\Notify\Datas\SmsData;
use Modules\Notify\Enums\SmsDriverEnum;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Xot\Filament\Pages\XotBasePage;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)

/**
 * @property \Filament\Schemas\Schema $smsForm
 */
class SendSmsPage extends XotBasePage
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
    public null|array $smsData = [];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 75179b85 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
    public ?array $smsData = [];

<<<<<<< HEAD
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-device-phone-mobile';
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
>>>>>>> 99ff506 (.)

>>>>>>> 510e6e8b (.)
    protected string $view = 'notify::filament.pages.send-sms';
<<<<<<< HEAD
    protected static null|string $cluster = Test::class;
=======

    protected static ?string $cluster = Test::class;
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $smsForm
 */
<<<<<<< HEAD
class SendSmsPage extends XotBasePage implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;
    public null|array $smsData = [];
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
=======
>>>>>>> 1487fe812 (.)
    protected string $view = 'notify::filament.pages.send-sms';
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
class SendSmsPage extends XotBasePage
{
    public null|array $smsData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected string $view = 'notify::filament.pages.send-sms';
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 510809c6f (.)
    public ?array $smsData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected string $view = 'notify::filament.pages.send-sms';
    protected static ?string $cluster = Test::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 510809c6f (.)
>>>>>>> a12f125f4a (.)
=======
    public null|array $smsData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected string $view = 'notify::filament.pages.send-sms';
    protected static null|string $cluster = Test::class;
>>>>>>> b93ef594b4 (.)
=======
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Webmozart\Assert\Assert;
use Filament\Facades\Filament;
use Modules\Notify\Datas\SmsData;
use Illuminate\Support\Facades\Log;
use Filament\Forms\ComponentContainer;
use Illuminate\Database\Eloquent\Model;
use Modules\Notify\Enums\SmsDriverEnum;
use Modules\Notify\Models\MailTemplate;
use Modules\Notify\Filament\Clusters\Test;
use Modules\Xot\Filament\Pages\XotBasePage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Auth\Authenticatable;
use Modules\Notify\Notifications\SmsNotification;
use Modules\Notify\Notifications\RecordNotification;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Filament\Notifications\Notification as FilamentNotification;

/**
 * @property ComponentContainer $smsForm
 */
class SendSmsPage extends XotBasePage
{
    public ?array $smsData = [];
    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static string $view = 'notify::filament.pages.send-sms';
    protected static ?string $cluster = Test::class;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
use Modules\Xot\Filament\Traits\NavigationLabelTrait;
use Webmozart\Assert\Assert;

/**
 * @property \Filament\Schemas\Schema $smsForm
 */
class SendSmsPage extends XotBasePage
{
    public null|array $smsData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected string $view = 'notify::filament.pages.send-sms';
    protected static null|string $cluster = Test::class;
<<<<<<< HEAD
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
=======
>>>>>>> 10292b60a (.)
    public ?array $smsData = [];
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected string $view = 'notify::filament.pages.send-sms';
    protected static ?string $cluster = Test::class;
>>>>>>> b19cd40 (.)
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
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)

    /**
     * Get the slug of the page
     *
     * This explicit definition ensures consistent URL generation for acronyms
     */
<<<<<<< HEAD
    public static function getSlug(?Panel $panel = null): string
=======
<<<<<<< HEAD
    public static function getSlug(?Panel $panel = null): string
=======
    public static function getSlug(): string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        return 'send-sms-page';
    }

    public function mount(): void
    {
        $this->fillForms();
    }

    protected function getForms(): array
    {
        return [
            'smsForm',
        ];
    }

    protected function fillForms(): void
    {
        $this->smsForm->fill();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function smsForm(Schema $schema): Schema
    {
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
=======
>>>>>>> 510809c6f (.)
    public function smsForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
        return $schema->schema($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

    /**
     * @return array<string, \Filament\Forms\Components\TextInput|\Filament\Forms\Components\Select>
     */
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
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function smsForm(Schema $schema): Schema
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
=======
>>>>>>> 510809c6f (.)
        return $schema
            ->components($this->getSmsFormSchema())
            ->model($this->getUser())
            ->statePath('smsData');
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
>>>>>>> 4e2ebfb (.)
=======
>>>>>>> a12f125f4a (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
>>>>>>> b93ef594b4 (.)
=======
    public function smsForm(Form $form): Form
    {
        return $form
            ->schema($this->getSmsFormSchema())
            ->model($this->getUser())
            ->statePath('smsData');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
    }

>>>>>>> 75179b85 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
=======
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
>>>>>>> 5fd545e4 (.)
=======
>>>>>>> 54220b28 (rebase 210)
=======
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
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
    public function smsForm(Schema $schema): Schema
    {
        return $schema->components($this->getSmsFormSchema())->model($this->getUser())->statePath('smsData');
    }

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
    public function getSmsFormSchema(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
            'to' => TextInput::make('to')
                ->tel()
                ->required()
                ->helperText(__('notify::sms.fields.to.helper_text')),
            'message' => TextInput::make('message')
                ->required()
                ->maxLength(160)
                ->helperText(__('notify::sms.fields.message.helper_text')),
            'driver' => Select::make('driver')
                ->options(SmsDriverEnum::class)
                ->default(config('sms.default'))
                ->required()
                ->helperText(__('notify::sms.fields.driver.helper_text')),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'template_slug' => Select::make('template_slug')
=======
            'template_slug'=> Select::make('template_slug')
>>>>>>> b19cd40 (.)
=======
            'template_slug' => Select::make('template_slug')
>>>>>>> 4e2ebfb (.)
=======
            'template_slug' => Select::make('template_slug')
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'template_slug' => Select::make('template_slug')
=======
            'template_slug'=> Select::make('template_slug')
>>>>>>> a12f125f4a (.)
=======
            'template_slug' => Select::make('template_slug')
>>>>>>> b93ef594b4 (.)
=======
            'to' => Forms\Components\TextInput::make('to')
                ->tel()
                ->required()
                ->helperText(__('notify::sms.fields.to.helper_text')),
            'message' => Forms\Components\TextInput::make('message')
                ->required()
                ->maxLength(160)
                ->helperText(__('notify::sms.fields.message.helper_text')),
            'driver' => Forms\Components\Select::make('driver')
                ->options(\Modules\Notify\Enums\SmsDriverEnum::class)
                ->default(config('sms.default'))
                ->required()
                ->helperText(__('notify::sms.fields.driver.helper_text')),
            'template_slug'=> Forms\Components\Select::make('template_slug')
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
                ->options(MailTemplate::all()->pluck('slug', 'slug'))
                ->required(),
        ];
    }

    public function sendSMS(): void
    {
        try {
            $data = $this->smsForm->getState();
            $user = $this->getUser();
            /*
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
             * Notification::route('sms', $data['to'])
             * ->notify(new SmsNotification($data['message'], [
             * 'driver' => $data['driver']
             * ]));
             */
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
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
            $template_slug = $data['template_slug'];
            Assert::string($template_slug, __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $recordNotification = new RecordNotification($user, $template_slug);
            $notify = $recordNotification->mergeData($data);
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)

            Notification::route('sms', $data['to'])
=======
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
=======
>>>>>>> c8b1c8bf (.)
            Assert::string($template_slug = $data['template_slug'], __FILE__.':'.__LINE__.' - '.class_basename(__CLASS__));
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
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
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 1487fe812 (.)

            Notification::route('sms', $data['to'])
<<<<<<< HEAD
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
=======
>>>>>>> c8b1c8bf (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b85 (.)
=======
            Assert::string($template_slug = $data['template_slug'], __FILE__ . ':' . __LINE__ . ' - ' . class_basename(__CLASS__));
>>>>>>> 75179b855 (.)
            $notify = new RecordNotification($user, $template_slug);
            $notify->mergeData($data);

            Notification::route('sms', $data['to'])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
                //->locale('it')
                //->notify(new RecordNotification($user,'due'))
                ->notify($notify);
<<<<<<< HEAD
=======
            Notification::route('sms', $data['to'])
                ->notify(new SmsNotification($data['message'], [
                    'driver' => $data['driver']
                ]));
            */
            Assert::string($template_slug=$data['template_slug']);
            $notify=(new RecordNotification($user,$template_slug))->mergeData($data);

            
            Notification::route('sms', $data['to'])
                //->locale('it')
                //->notify(new RecordNotification($user,'due'))
                ->notify($notify);;

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)

            

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c8b1c8bf (.)
<<<<<<< HEAD
                // ->locale('it')
                // ->notify(new RecordNotification($user,'due'))
                ->notify($notify);

=======
                //->locale('it')
                //->notify(new RecordNotification($user,'due'))
                ->notify($notify);
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
            Notification::route('sms', $data['to'])
                ->notify(new SmsNotification($data['message'], [
                    'driver' => $data['driver']
                ]));
            */
            Assert::string($template_slug=$data['template_slug']);
            $notify=(new RecordNotification($user,$template_slug))->mergeData($data);
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)

            Notification::route('sms', $data['to'])
                //->locale('it')
                //->notify(new RecordNotification($user,'due'))
<<<<<<< HEAD
                ->notify($notify);;

>>>>>>> a12f125f4a (.)
=======
                ->notify($notify);
>>>>>>> b93ef594b4 (.)
=======

            
            Notification::route('sms', $data['to'])
                //->locale('it')
                //->notify(new RecordNotification($user,'due'))
                ->notify($notify);;

>>>>>>> origin/develop
>>>>>>> d284d65 (.)

            

>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
            FilamentNotification::make()
                ->success()
                ->title('SMS inviato con successo')
                ->send();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
        } catch (Exception $e) {
<<<<<<< HEAD
=======
        } catch (Exception $e) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======

        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
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
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
        } catch (Exception $e) {
=======

        } catch (\Exception $e) {
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
            // Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
=======
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
>>>>>>> 75179b85 (.)
=======
            //Log::error('Errore nell\'invio SMS: ' . $e->getMessage());
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop

            FilamentNotification::make()
                ->danger()
                ->title('Errore nell\'invio SMS')
                ->body($e->getMessage())
                ->persistent()
                ->send();
        }
    }

<<<<<<< HEAD
    protected function getFormActions(): array
    {
        return $this->getSmsFormActions();
    }

=======
>>>>>>> laraxot/develop
    /**
     * Get the form actions for the SMS form.
     *
     * @return array<Action>
     */
    protected function getSmsFormActions(): array
    {
        return [
            Action::make('send')
                ->label(__('notify::sms.actions.send'))
                ->icon('heroicon-o-paper-airplane')
                ->color('primary')
                ->action('sendSMS'),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
=======
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
    protected function getUser(): Authenticatable&Model
    {
        $user = Filament::auth()->user();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4e2ebfb (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
        if (!($user instanceof Model)) {
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
=======
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
        if (!($user instanceof Model)) {
=======
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
<<<<<<< HEAD
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
        if (!($user instanceof Model)) {
>>>>>>> 75179b85 (.)
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
        if (!($user instanceof Model)) {
>>>>>>> 75179b85 (.)
=======
        if (!($user instanceof Model)) {
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
            throw new Exception(
                'The authenticated user object must be an Eloquent model to allow the profile page to update it.',
            );
<<<<<<< HEAD
=======
<<<<<<< HEAD
        if (! $user instanceof Model) {
            throw new Exception('The authenticated user object must be an Eloquent model to allow the profile page to update it.');
>>>>>>> b19cd40 (.)
=======
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 510809c6f (.)
        }

        return $user;
    }
}
=======
>>>>>>> 301ad8b44 (.)
