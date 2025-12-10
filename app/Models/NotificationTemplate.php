<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

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
>>>>>>> 4689a827 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> 4689a827 (.)
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
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
=======
>>>>>>> f1c9518b (.)
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
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> f1c9518b (.)
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
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> f1c9518b (.)
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
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
>>>>>>> fbed41ac (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
>>>>>>> fbed41ac (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> bf5d31b0f (.)
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
>>>>>>> b93ef594b4 (.)
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
>>>>>>> b93ef594b4 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
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
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
>>>>>>> 985c7bda (.)
=======
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
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
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
=======
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
use Illuminate\Database\Eloquent\Builder;
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> c8b1c8bf (.)
=======
use Illuminate\Database\Eloquent\Builder;
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Modules\Media\Models\Media;
use Illuminate\Database\Eloquent\Builder;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> f1c9518b (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
use Illuminate\Support\Facades\Blade;
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
use Spatie\Translatable\HasTranslations;

/**
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
use Spatie\Translatable\HasTranslations;

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> c8b1c8bf (.)
=======
use Spatie\Translatable\HasTranslations;

/**
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
use Spatie\Translatable\HasTranslations;

/**
>>>>>>> 75179b85 (.)
=======
use Spatie\Translatable\HasTranslations;

/**
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
 * Class NotificationTemplate.
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string|null $description
 * @property string $subject
 * @property string|null $body_html
 * @property string|null $body_text
 * @property array $channels
 * @property array $variables
 * @property array|null $conditions
 * @property array|null $preview_data
 * @property array|null $metadata
 * @property string|null $category
 * @property bool $is_active
 * @property int $version
 * @property int|null $tenant_id
 * @property array|null $grapesjs_data
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 * @property-read string $channels_label
 * @property NotificationTypeEnum $type
 * @property-read Profile|null $creator
 * @property-read int|null $logs_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read Profile|null $updater
 * @property-read int|null $versions_count
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
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
 * @method static Builder<static>|NotificationTemplate active()
 * @method static NotificationTemplateFactory factory($count = null, $state = [])
 * @method static Builder<static>|NotificationTemplate forCategory(string $category)
 * @method static Builder<static>|NotificationTemplate forChannel(string $channel)
 * @method static Builder<static>|NotificationTemplate newModelQuery()
 * @method static Builder<static>|NotificationTemplate newQuery()
 * @method static Builder<static>|NotificationTemplate query()
 * @method static Builder<static>|NotificationTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|NotificationTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|NotificationTemplate whereLocale(string $column, string $locale)
 * @method static Builder<static>|NotificationTemplate whereLocales(string $column, array $locales)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read string $channels_label
 * @property NotificationTypeEnum $type
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read int|null $logs_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read \Modules\User\Models\Profile|null $updater
 * @property-read int|null $versions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate active()
 * @method static \Modules\Notify\Database\Factories\NotificationTemplateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate forCategory(string $category)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate forChannel(string $channel)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereLocales(string $column, array $locales)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> 510809c6f (.)
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
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
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
 *
=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
=======
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 98d837b9 (.)
 *
=======
>>>>>>> 99ff506 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> 4689a827 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
=======
=======
=======
>>>>>>> f2e64178 (.)
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read string $channels_label
 * @property NotificationTypeEnum $type
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read int|null $logs_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read \Modules\User\Models\Profile|null $updater
 * @property-read int|null $versions_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate active()
 * @method static \Modules\Notify\Database\Factories\NotificationTemplateFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate forCategory(string $category)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate forChannel(string $channel)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplate whereLocales(string $column, array $locales)
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
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> 23161eb (.)
=======
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> f813254 (.)
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
=======
>>>>>>> e00d798d (.)
=======
>>>>>>> e00d798d (.)
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
>>>>>>> 2cbbc069 (.)
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> e00d798d (.)
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
>>>>>>> 2cbbc069 (.)
 * @property-read string $channels_label
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 7c1c276f (rebase 210)
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> e00d798d (.)
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 2cbbc069 (.)
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 7c1c276f (rebase 210)
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> e00d798d (.)
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> 2cbbc069 (.)
 * @method static Builder<static>|NotificationTemplate active()
 * @method static \Modules\Notify\Database\Factories\NotificationTemplateFactory factory($count = null, $state = [])
 * @method static Builder<static>|NotificationTemplate forCategory(string $category)
 * @method static Builder<static>|NotificationTemplate forChannel(string $channel)
 * @method static Builder<static>|NotificationTemplate newModelQuery()
 * @method static Builder<static>|NotificationTemplate newQuery()
 * @method static Builder<static>|NotificationTemplate query()
 * @method static Builder<static>|NotificationTemplate whereJsonContainsLocale(string $column, string $locale, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|NotificationTemplate whereJsonContainsLocales(string $column, array $locales, ?mixed $value, string $operand = '=')
 * @method static Builder<static>|NotificationTemplate whereLocale(string $column, string $locale)
 * @method static Builder<static>|NotificationTemplate whereLocales(string $column, array $locales)
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 6e550ff (.)
>>>>>>> e00d798d (.)
=======
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
>>>>>>> 75179b85 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 6e550ff (.)
>>>>>>> e00d798d (.)
=======
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
>>>>>>> 75179b85 (.)
=======
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
>>>>>>> 75179b855 (.)
=======
>>>>>>> 2cbbc069 (.)
>>>>>>> laraxot/develop
class NotificationTemplate extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

=======
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
    protected $fillable = [
        'name',
        'code',
        'description',
        'subject',
        'body_html',
        'body_text',
        'channels',
        'variables',
        'conditions',
        'preview_data',
        'metadata',
        'category',
        'is_active',
        'version',
        'tenant_id',
        'grapesjs_data',
        'type',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
>>>>>>> 1487fe812 (.)
    #[Override]
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
    #[Override]
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> fbed41ac (.)
<<<<<<< HEAD
    #[\Override]
=======
<<<<<<< HEAD
    #[Override]
=======
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
=======
>>>>>>> f2e64178 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
    #[Override]
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
    #[\Override]
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    #[Override]
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
<<<<<<< HEAD
>>>>>>> 75179b855 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
>>>>>>> 2941b0bd (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    #[Override]
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    #[Override]
>>>>>>> 98d837b9 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
    protected function casts(): array
    {
        return [
            'type' => NotificationTypeEnum::class,
            'preview_data' => 'array',
            'body_html' => 'string',
            'body_text' => 'string',
            'channels' => 'array',
            'variables' => 'array',
            'conditions' => 'array',
            'metadata' => 'array',
            'is_active' => 'boolean',
            'grapesjs_data' => 'array',
        ];
    }

    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')->singleFile();
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
    /*
     * public function versions(): HasMany
     * {
     * return $this->hasMany(NotificationTemplateVersion::class, 'template_id')
     * ->orderByDesc('version');
     * }
     *
     * public function logs(): HasMany
     * {
     * return $this->hasMany(NotificationLog::class, 'template_id');
     * }
     */
    /*
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
     *
     * public function createNewVersion(string $createdBy, ?string $notes = null): self
     * {
     * $this->versions()->create([
     * 'subject' => $this->subject,
     * 'body_html' => $this->body_html,
     * 'body_text' => $this->body_text,
     * 'channels' => $this->channels,
     * 'variables' => $this->variables,
     * 'conditions' => $this->conditions,
     * 'version' => $this->version,
     * 'created_by' => $createdBy,
     * 'change_notes' => $notes,
     * ]);
     *
     * $this->increment('version');
     * return $this;
     * }
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
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
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
     
    public function createNewVersion(string $createdBy, ?string $notes = null): self
    {
        $this->versions()->create([
            'subject' => $this->subject,
            'body_html' => $this->body_html,
            'body_text' => $this->body_text,
            'channels' => $this->channels,
            'variables' => $this->variables,
            'conditions' => $this->conditions,
            'version' => $this->version,
            'created_by' => $createdBy,
            'change_notes' => $notes,
        ]);

        $this->increment('version');
        return $this;
    }
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
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
<<<<<<< HEAD
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
    /**
     * Compile the template with the given data.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to compile the template with
=======
     * @param array<string, mixed> $data The data to compile the template with
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function compile(array $data = []): array
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
        $subjectTranslation = $this->getTranslation('subject', app()->getLocale());
        $subject = is_string($subjectTranslation) ? $subjectTranslation : null;

        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;

        $bodyTextTranslation = $this->getTranslation('body_text', app()->getLocale());
        $bodyText = is_string($bodyTextTranslation) ? $bodyTextTranslation : null;

        $subjectResult = $this->compileString($subject, $data);
        $bodyHtmlResult = $this->compileString($bodyHtml, $data);
        $bodyTextResult = $this->compileString($bodyText, $data);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $subject = $this->compileString($this->subject, $data);
        $bodyHtml = $this->compileString($this->body_html, $data);
        $bodyText = $this->compileString($this->body_text, $data);
>>>>>>> 6ba141fc (.)
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)

        return [
            'subject' => $subjectResult ?? '',
            'body_html' => $bodyHtmlResult,
            'body_text' => $bodyTextResult,
        ];
    }

    /**
     * Check if the notification should be sent based on conditions.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to check conditions against
     */
    public function shouldSend(array $data = []): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
=======
        if (! $this->conditions) {
=======
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            return true;
        }

        if (! is_array($conditions)) {
            return true;
        }

        foreach ($conditions as $path => $value) {
<<<<<<< HEAD
=======
=======
        if (! $this->conditions) {
            return true;
        }

        foreach ($this->conditions as $path => $value) {
>>>>>>> 6ba141fc (.)
=======
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
            return true;
        }

        if (! is_array($conditions)) {
            return true;
        }

        foreach ($conditions as $path => $value) {
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
            $actual = data_get($data, $path);
            if ($actual !== $value) {
                return false;
            }
        }

        return true;
    }

    /**
<<<<<<< HEAD
=======
     * Compile a string template with the given data.
     *
<<<<<<< HEAD
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
<<<<<<< HEAD
    protected function compileString(?string $template, array $data): ?string
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> f5f1cb1 (.)
    {
        if (! $template) {
=======
     * @param string|null $template The template to compile
     * @param array<string, mixed> $data The data to compile with
     * @return string|null
     */
    protected function compileString(null|string $template, array $data): null|string
    {
        if (!$template) {
>>>>>>> 99ff506 (.)
            return null;
        }

        return Blade::render($template, $data);
    }

    /**
>>>>>>> f1c9518b (.)
     * Preview the template with the given data.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  Additional data to merge with preview data
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> 99ff506 (.)
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function preview(array $data = []): array
    {
        $previewData = $this->preview_data ?? [];
        if (! is_array($previewData)) {
            $previewData = [];
        }

        /** @var array<string, mixed> $safePreviewData */
        $safePreviewData = $previewData;
        /** @var array<string, mixed> $mergedData */
        $mergedData = array_merge($safePreviewData, $data);

        return $this->compile($mergedData);
    }

    /**
     * Scope a query to only include active templates.
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Builder $query
>>>>>>> 99ff506 (.)
     * @return Builder
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
     * @param  Builder  $query
=======
     * @param Builder $query
>>>>>>> f5f1cb1 (.)
     * @return Builder
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
     * @param Builder $query
>>>>>>> 99ff506 (.)
     * @return Builder
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
     * @param Builder $query
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include templates for a specific channel.
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
     * @param Builder $query
     * @param string $channel
>>>>>>> 99ff506 (.)
     * @return Builder
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> f5f1cb1 (.)
     * @return Builder
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $channel
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $channel
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     */
    public function scopeForChannel(Builder $query, string $channel): Builder
    {
        return $query->whereJsonContains('channels', $channel);
    }

    /**
     * Scope a query to only include templates for a specific category.
<<<<<<< HEAD
=======
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
     * @param Builder $query
     * @param string $category
>>>>>>> 99ff506 (.)
     * @return Builder
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $category
>>>>>>> f5f1cb1 (.)
     * @return Builder
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
>>>>>>> f2e64178 (.)
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $category
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
     */
    public function scopeForCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    /**
     * Get the channels label attribute.
<<<<<<< HEAD
=======
     *
     * @return string
>>>>>>> 99ff506 (.)
     */
    public function getChannelsLabelAttribute(): string
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
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
        $channels = $this->getAttribute('channels');
        if (! is_array($channels)) {
            $channels = [];
        }

        return collect($channels)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
        return collect($this->channels)
>>>>>>> 6ba141fc (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.(is_string($channel) ? $channel : (string) $channel).'.label'))
=======
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
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
        return collect($this->channels)
<<<<<<< HEAD
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
=======
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            ->implode(', ');
    }

    /**
     * Get the GrapesJS data.
     *
     * @return array<string, mixed>
     */
    public function getGrapesJSData(): array
    {
        $data = $this->getAttribute('grapesjs_data') ?? [];
        if (! is_array($data)) {
            return [];
        }

        /** @var array<string, mixed> $data */
        return $data;
    }

    /**
     * Set the GrapesJS data.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
     * @return self
>>>>>>> 99ff506 (.)
     */
    public function setGrapesJSData(array $data): self
    {
<<<<<<< HEAD
        $this->setAttribute('grapesjs_data', $data);
=======
        $this->grapesjs_data = $data;
<<<<<<< HEAD
>>>>>>> f1c9518b (.)

=======
>>>>>>> 99ff506 (.)
        return $this;
    }

    public function getPreviewData(): array
    {
        $previewData = $this->getAttribute('preview_data') ?? [];
        if (! is_array($previewData)) {
            return [];
        }

        return $previewData;
    }

    public function getPreviewSubject(): string
    {
        $result = $this->getTranslation('subject', app()->getLocale());
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyText(): string
    {
        $result = $this->getTranslation('body_text', app()->getLocale());
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyHtml(): string
    {
        $result = $this->getTranslation('body_html', app()->getLocale());
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return is_string($result) ? $result : '';
    }

=======
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
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
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
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
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
    #[Override]
=======
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
    #[Override]
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
=======
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> fbed41ac (.)
    #[\Override]
=======
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 2effe245 (.)
=======
    #[Override]
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
>>>>>>> 2941b0bd (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
    #[Override]
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
    #[Override]
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
    #[Override]
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
    #[\Override]
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
=======
    #[Override]
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
    #[Override]
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
    #[Override]
>>>>>>> 75179b85 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    #[Override]
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    #[Override]
>>>>>>> 3f537838 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    #[Override]
>>>>>>> 2941b0bd (.)
=======
=======
    #[Override]
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
    protected function casts(): array
    {
        return [
            'type' => NotificationTypeEnum::class,
            'preview_data' => 'array',
            'body_html' => 'string',
            'body_text' => 'string',
            'channels' => 'array',
            'variables' => 'array',
            'conditions' => 'array',
            'metadata' => 'array',
            'is_active' => 'boolean',
            'grapesjs_data' => 'array',
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

    public function registerMediaCollections(): void
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
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
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
        $this->addMediaCollection('attachments')->singleFile();
    }

    /*
     * public function versions(): HasMany
     * {
     * return $this->hasMany(NotificationTemplateVersion::class, 'template_id')
     * ->orderByDesc('version');
     * }
     *
     * public function logs(): HasMany
     * {
     * return $this->hasMany(NotificationLog::class, 'template_id');
     * }
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 510809c6f (.)
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
        $this->addMediaCollection('attachments')
            ->singleFile();
    }
/*
    public function versions(): HasMany
    {
        return $this->hasMany(NotificationTemplateVersion::class, 'template_id')
            ->orderByDesc('version');
    }

    public function logs(): HasMany
    {
        return $this->hasMany(NotificationLog::class, 'template_id');
    }
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
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> a12f125f4a (.)
=======
        $this->addMediaCollection('attachments')->singleFile();
    }

    /*
     * public function versions(): HasMany
     * {
     * return $this->hasMany(NotificationTemplateVersion::class, 'template_id')
     * ->orderByDesc('version');
     * }
     *
     * public function logs(): HasMany
     * {
     * return $this->hasMany(NotificationLog::class, 'template_id');
     * }
     */
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
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
    /*
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 510809c6f (.)
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
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
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
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
>>>>>>> 10292b60a (.)
=======
>>>>>>> bf5d31b0f (.)
=======
>>>>>>> 510809c6f (.)
     *
     * public function createNewVersion(string $createdBy, ?string $notes = null): self
     * {
     * $this->versions()->create([
     * 'subject' => $this->subject,
     * 'body_html' => $this->body_html,
     * 'body_text' => $this->body_text,
     * 'channels' => $this->channels,
     * 'variables' => $this->variables,
     * 'conditions' => $this->conditions,
     * 'version' => $this->version,
     * 'created_by' => $createdBy,
     * 'change_notes' => $notes,
     * ]);
     *
     * $this->increment('version');
     * return $this;
     * }
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 510809c6f (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 1487fe812 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> 207ac35e (.)
>>>>>>> bf5d31b0f (.)
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
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 510809c6f (.)
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
=======
=======
>>>>>>> 3f39ac8b (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 10292b60a (.)
=======
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
     
    public function createNewVersion(string $createdBy, ?string $notes = null): self
    {
        $this->versions()->create([
            'subject' => $this->subject,
            'body_html' => $this->body_html,
            'body_text' => $this->body_text,
            'channels' => $this->channels,
            'variables' => $this->variables,
            'conditions' => $this->conditions,
            'version' => $this->version,
            'created_by' => $createdBy,
            'change_notes' => $notes,
        ]);

        $this->increment('version');
        return $this;
    }
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
=======
>>>>>>> 10292b60a (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> b19cd40 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
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
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> 985c7bda (.)
    /**
     * Compile the template with the given data.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $data The data to compile the template with
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to compile the template with
=======
     * @param array<string, mixed> $data The data to compile the template with
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function compile(array $data = []): array
    {
<<<<<<< HEAD
        $subject = $this->compileString($this->subject, $data);
        $bodyHtml = $this->compileString($this->body_html, $data);
        $bodyText = $this->compileString($this->body_text, $data);
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5e14ac3 (.)
        $subjectTranslation = $this->getTranslation('subject', app()->getLocale());
        $subject = is_string($subjectTranslation) ? $subjectTranslation : null;
        
        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;
        
        $bodyTextTranslation = $this->getTranslation('body_text', app()->getLocale());
        $bodyText = is_string($bodyTextTranslation) ? $bodyTextTranslation : null;

        $subjectResult = $this->compileString($subject, $data);
        $bodyHtmlResult = $this->compileString($bodyHtml, $data);
        $bodyTextResult = $this->compileString($bodyText, $data);
<<<<<<< HEAD
=======
        $subject = $this->compileString($this->subject, $data);
        $bodyHtml = $this->compileString($this->body_html, $data);
        $bodyText = $this->compileString($this->body_text, $data);
>>>>>>> 6ba141fc (.)
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)

        return [
            'subject' => $subject ?? '',
            'body_html' => $bodyHtml,
            'body_text' => $bodyText,
        ];
    }

    /**
     * Check if the notification should be sent based on conditions.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to check conditions against
     */
    public function shouldSend(array $data = []): bool
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
            return true;
        }

        if (! is_array($conditions)) {
            return true;
        }

        foreach ($conditions as $path => $value) {
=======
>>>>>>> fbed41ac (.)
        if (! $this->conditions) {
=======
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            return true;
        }

        foreach ($this->conditions as $path => $value) {
<<<<<<< HEAD
=======
>>>>>>> 6ba141fc (.)
=======
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
            return true;
        }

        if (! is_array($conditions)) {
            return true;
        }

        foreach ($conditions as $path => $value) {
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
            $actual = data_get($data, $path);
            if ($actual !== $value) {
                return false;
            }
        }

        return true;
    }

=======
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> c8b1c8bf (.)
    /**
     * Compile a string template with the given data.
     *
<<<<<<< HEAD
     * @param string|null $template The template to compile
     * @param array<string, mixed> $data The data to compile with
     * @return string|null
=======
<<<<<<< HEAD
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
>>>>>>> f1c9518b (.)
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
    protected function compileString(null|string $template, array $data): null|string
=======
    protected function compileString(?string $template, array $data): ?string
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
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
=======
=======
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> 4689a827 (.)
=======
    protected function compileString(?string $template, array $data): ?string
=======
<<<<<<< HEAD
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> 2effe245 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function compileString(null|string $template, array $data): null|string
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> a12f125f4a (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 3f537838 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 3f537838 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 2941b0bd (.)
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> 985c7bda (.)
=======
    protected function compileString(?string $template, array $data): ?string
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
    {
<<<<<<< HEAD
        if (!$template) {
=======
        if (! $template) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')->singleFile();
    }

<<<<<<< HEAD
=======
    /*
     * public function versions(): HasMany
     * {
     * return $this->hasMany(NotificationTemplateVersion::class, 'template_id')
     * ->orderByDesc('version');
     * }
     *
     * public function logs(): HasMany
     * {
     * return $this->hasMany(NotificationLog::class, 'template_id');
     * }
     */
    /*
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
     *
     * public function createNewVersion(string $createdBy, ?string $notes = null): self
     * {
     * $this->versions()->create([
     * 'subject' => $this->subject,
     * 'body_html' => $this->body_html,
     * 'body_text' => $this->body_text,
     * 'channels' => $this->channels,
     * 'variables' => $this->variables,
     * 'conditions' => $this->conditions,
     * 'version' => $this->version,
     * 'created_by' => $createdBy,
     * 'change_notes' => $notes,
     * ]);
     *
     * $this->increment('version');
     * return $this;
     * }
     */
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
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
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
>>>>>>> laraxot/develop
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
    /**
     * Compile the template with the given data.
     *
     * @param array<string, mixed> $data The data to compile the template with
<<<<<<< HEAD
=======
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function compile(array $data = []): array
    {
        $subject = $this->compileString($this->subject, $data);
        $bodyHtml = $this->compileString($this->body_html, $data);
        $bodyText = $this->compileString($this->body_text, $data);

        return [
            'subject' => $subject ?? '',
            'body_html' => $bodyHtml,
            'body_text' => $bodyText,
        ];
    }

    /**
     * Check if the notification should be sent based on conditions.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> laraxot/develop
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to check conditions against
     */
    public function shouldSend(array $data = []): bool
    {
        if (! $this->conditions) {
=======
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
            return true;
        }

        foreach ($this->conditions as $path => $value) {
            $actual = data_get($data, $path);
            if ($actual !== $value) {
                return false;
            }
        }

        return true;
    }

    /**
     * Compile a string template with the given data.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
     * @param string|null $template The template to compile
     * @param array<string, mixed> $data The data to compile with
     * @return string|null
=======
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
>>>>>>> f1c9518b (.)
     */
    protected function compileString(null|string $template, array $data): null|string
    {
<<<<<<< HEAD
        if (!$template) {
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
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
        if (! $template) {
=======
>>>>>>> laraxot/develop
     * @param string|null $template The template to compile
     * @param array<string, mixed> $data The data to compile with
     * @return string|null
     */
<<<<<<< HEAD
    protected function compileString(null|string $template, array $data): null|string
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
    protected function compileString(null|string $template, array $data): null|string
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
=======
=======
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function compileString(null|string $template, array $data): null|string
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> a12f125f4a (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 3f537838 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 3f537838 (.)
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
>>>>>>> 1487fe812 (.)
=======
=======
>>>>>>> 82ae73be (.)
<<<<<<< HEAD
>>>>>>> 10292b60a (.)
=======
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
>>>>>>> bf5d31b0f (.)
=======
=======
    protected function compileString(null|string $template, array $data): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
>>>>>>> 510809c6f (.)
    {
        if (!$template) {
<<<<<<< HEAD
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
            return null;
        }

        return Blade::render($template, $data);
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop

    /**
     * Preview the template with the given data.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $data Additional data to merge with preview data
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $data Additional data to merge with preview data
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
     * @param  array<string, mixed>  $data  Additional data to merge with preview data
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> 75179b85 (.)
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> c8b1c8bf (.)
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> 75179b85 (.)
=======
     * @param array<string, mixed> $data Additional data to merge with preview data
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function preview(array $data = []): array
    {
<<<<<<< HEAD
        /** @var array<string, mixed> $previewData */
        $previewData = $this->preview_data ?? [];
        /** @var array<string, mixed> $mergedData */
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
        /** @var array<string, mixed> $previewData */
        $previewData = $this->preview_data ?? [];
        /** @var array<string, mixed> $mergedData */
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        $previewData = $this->preview_data ?? [];
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
        $mergedData = array_merge($previewData, $data);

        return $this->compile($mergedData);
    }

    /**
     * Scope a query to only include active templates.
     *
<<<<<<< HEAD
     * @param Builder $query
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param Builder $query
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Builder $query
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  Builder  $query
>>>>>>> 985c7bda (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
     * @param Builder $query
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
>>>>>>> 75179b855 (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return Builder
=======
<<<<<<< HEAD
     * @param Builder $query
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include templates for a specific channel.
     *
<<<<<<< HEAD
     * @param Builder $query
     * @param string $channel
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param Builder $query
     * @param string $channel
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Builder $query
     * @param string $channel
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $channel
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  Builder  $query
>>>>>>> 985c7bda (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> 75179b855 (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $channel
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return Builder
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $channel
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $channel
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function scopeForChannel($query, string $channel)
    {
        return $query->whereJsonContains('channels', $channel);
    }

    /**
     * Scope a query to only include templates for a specific category.
     *
<<<<<<< HEAD
     * @param Builder $query
     * @param string $category
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
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
     * @param Builder $query
     * @param string $category
=======
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Builder $query
     * @param string $category
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $category
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
     * @param  Builder  $query
>>>>>>> 985c7bda (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $category
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
     * @param Builder $query
     * @param string $category
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
     * @param string $category
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
     * @param string $category
>>>>>>> c8b1c8bf (.)
=======
     * @param Builder $query
     * @param string $category
>>>>>>> 75179b85 (.)
=======
     * @param Builder $query
     * @param string $category
>>>>>>> 75179b855 (.)
=======
     * @param  Builder  $query
=======
     * @param Builder $query
     * @param string $category
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
     * @return Builder
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $category
     * @return Builder
=======
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $category
     * @return \Illuminate\Database\Eloquent\Builder
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
     */
    public function scopeForCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Get the channels label attribute.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getChannelsLabelAttribute(): string
    {
        /** @var array<int, string> $channels */
        $channels = $this->channels;
        return collect($channels)
            ->map(fn(string $channel): string => (string) __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return string
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
     *
     * @return string
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
     */
    public function getChannelsLabelAttribute(): string
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<int, string> $channels */
        $channels = $this->channels;
=======
=======
>>>>>>> 985c7bda (.)
=======
=======
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
        $channels = $this->getAttribute('channels');
        if (! is_array($channels)) {
            $channels = [];
        }

>>>>>>> 2effe245 (.)
        return collect($channels)
<<<<<<< HEAD
            ->map(fn(string $channel): string => (string) __('notify::template.fields.channel.options.' . $channel . '.label'))
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
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
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
>>>>>>> bf5d31b0f (.)
        return collect($this->channels)
<<<<<<< HEAD
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 75179b85 (.)
=======
<<<<<<< HEAD
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
=======
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3f39ac8b (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 4d2eb53e (.)
=======
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
=======
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
        return collect($this->channels)
<<<<<<< HEAD
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
=======
>>>>>>> 6ba141fc (.)
=======
>>>>>>> 5e14ac3 (.)
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.(is_string($channel) ? $channel : (string) $channel).'.label'))
>>>>>>> fbed41ac (.)
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf5d31b0f (.)
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 510809c6f (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 82ae73be (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 82ae73be (.)
=======
<<<<<<< HEAD
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> de02998b (.)
=======
=======
>>>>>>> 10292b60a (.)
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 10292b60a (.)
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> d09cb759 (.)
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 510809c6f (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4689a827 (.)
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> b93ef594b4 (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 510809c6f (.)
>>>>>>> d09cb759 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 3f537838 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 75179b85 (.)
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
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 3f537838 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
<<<<<<< HEAD
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
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
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
     *
     * @return string
=======
>>>>>>> f1c9518b (.)
     */
    public function getChannelsLabelAttribute(): string
    {
        return collect($this->channels)
<<<<<<< HEAD
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
=======
<<<<<<< HEAD
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
=======
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
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
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
<<<<<<< HEAD
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
>>>>>>> 2fc60436 (.)
=======
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
>>>>>>> ce89c8bb (.)
=======
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
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
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
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> b19cd40 (.)
>>>>>>> 2fc60436 (.)
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
<<<<<<< HEAD
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
>>>>>>> laraxot/develop
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
    }

    /**
     * Get the GrapesJS data.
     *
     * @return array<string, mixed>
     */
    public function getGrapesJSData(): array
    {
<<<<<<< HEAD
        /** @var array<string, mixed> $data */
        $data = $this->grapesjs_data ?? [];
        return $data;
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
        /** @var array<string, mixed> $data */
        $data = $this->grapesjs_data ?? [];
        return $data;
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
        $data = $this->getAttribute('grapesjs_data') ?? [];
=======
        $data = $this->grapesjs_data ?? [];
>>>>>>> 6ba141fc (.)
=======
        $data = $this->getAttribute('grapesjs_data') ?? [];
>>>>>>> 5e14ac3 (.)
        if (! is_array($data)) {
            return [];
        }

        /** @var array<string, mixed> $safeData */
        $safeData = $data;

        return $safeData;
>>>>>>> fbed41ac (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->grapesjs_data ?? [];
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
=======
>>>>>>> 1487fe812 (.)
    }

    /**
     * Set the GrapesJS data.
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
     * @param array<string, mixed> $data
     * @return self
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
     * @return self
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> f1c9518b (.)
     */
    public function setGrapesJSData(array $data): self
    {
<<<<<<< HEAD
        $this->grapesjs_data = $data;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        $this->setAttribute('grapesjs_data', $data);
>>>>>>> fbed41ac (.)

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
     * @param array<string, mixed> $data
     * @return self
     */
    public function setGrapesJSData(array $data): self
    {
<<<<<<< HEAD
        $this->grapesjs_data = $data;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->grapesjs_data = $data;
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
        $this->setAttribute('grapesjs_data', $data);

>>>>>>> fbed41ac (.)
=======
        $this->grapesjs_data = $data;
>>>>>>> c8b1c8bf (.)
=======
        $this->grapesjs_data = $data;
>>>>>>> 75179b85 (.)
=======
        $this->grapesjs_data = $data;
>>>>>>> 75179b855 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        return $this;
    }

    public function getPreviewData(): array
    {
<<<<<<< HEAD
        return $this->preview_data ?? [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->preview_data ?? [];
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> fbed41ac (.)
=======
>>>>>>> 5e14ac3 (.)
        $previewData = $this->getAttribute('preview_data') ?? [];
        if (! is_array($previewData)) {
            return [];
        }

        return $previewData;
<<<<<<< HEAD
=======
        return $this->preview_data ?? [];
>>>>>>> 6ba141fc (.)
=======
>>>>>>> 5e14ac3 (.)
<<<<<<< HEAD
>>>>>>> fbed41ac (.)
=======
        return $this->preview_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        return $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
>>>>>>> fbed41ac (.)
=======
        return $this->preview_data ?? [];
>>>>>>> c8b1c8bf (.)
=======
        return $this->preview_data ?? [];
>>>>>>> 75179b85 (.)
=======
        return $this->preview_data ?? [];
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
    }

    public function getPreviewSubject(): string
    {
        $result = $this->getTranslation('subject', app()->getLocale());
<<<<<<< HEAD
=======
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyText(): string
    {
        $result = $this->getTranslation('body_text', app()->getLocale());
<<<<<<< HEAD
=======
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
>>>>>>> laraxot/develop
        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyHtml(): string
    {
        $result = $this->getTranslation('body_html', app()->getLocale());
<<<<<<< HEAD
        return is_string($result) ? $result : '';
    }
=======
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
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======

=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        return is_string($result) ? $result : '';
    }
=======
        return is_string($result) ? $result : '';
    }
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        return is_string($result) ? $result : '';
    }
>>>>>>> 75179b85 (.)
=======
        return is_string($result) ? $result : '';
    }
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
        return is_string($result) ? $result : '';
    }
>>>>>>> 75179b85 (.)
=======
        return is_string($result) ? $result : '';
    }
>>>>>>> 75179b855 (.)
>>>>>>> laraxot/develop
}
=======
>>>>>>> 301ad8b44 (.)
