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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
>>>>>>> 75cb51873 (.)
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
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
use Carbon\Carbon;
use Modules\User\Models\Profile;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> 75cb51873 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
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
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
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
>>>>>>> c0f3d67cc (.)
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\Xot\Contracts\ProfileContract;
use Override;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\Translatable\HasTranslations;

/**
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
 * @property-read ProfileContract|null $creator
 * @property-read int|null $logs_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read ProfileContract|null $updater
 * @property-read int|null $versions_count
 *
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
 *
=======
<<<<<<< HEAD
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
>>>>>>> c0f3d67cc (.)
 * @mixin IdeHelperNotificationTemplate
 *
 * @property-read ProfileContract|null $deleter
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
=======
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read string $channels_label
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
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
>>>>>>> 2cbbc069 (.)
class NotificationTemplate extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
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
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 207ac35e (.)
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 4689a827 (.)
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
=======
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    #[Override]
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
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

    public function registerMediaCollections(): void
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
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
>>>>>>> c0f3d67cc (.)
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
>>>>>>> 4689a827 (.)
=======
=======
=======
>>>>>>> origin/develop
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
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
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
>>>>>>> b19cd40 (.)
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
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    /*
     * Create a new version of the template.
     *
     * @param string $createdBy The user who created the version
     * @param string|null $notes Optional notes about the changes
     * @return self
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
>>>>>>> 4689a827 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
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
>>>>>>> c0f3d67cc (.)
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
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
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
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
     
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
>>>>>>> b19cd40 (.)
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
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    /**
     * Compile the template with the given data.
     *
     * @param  array<string, mixed>  $data  The data to compile the template with
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
     * @param  array<string, mixed>  $data  The data to check conditions against
     */
    public function shouldSend(array $data = []): bool
    {
        if (! $this->conditions) {
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
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
<<<<<<< HEAD
    protected function compileString(?string $template, array $data): ?string
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
    protected function compileString(null|string $template, array $data): null|string
=======
    protected function compileString(?string $template, array $data): ?string
>>>>>>> b19cd40 (.)
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
>>>>>>> 4689a827 (.)
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
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
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
>>>>>>> c0f3d67cc (.)
    {
        if (! $template) {
            return null;
        }

        return Blade::render($template, $data);
    }

    /**
     * Preview the template with the given data.
     *
     * @param  array<string, mixed>  $data  Additional data to merge with preview data
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function preview(array $data = []): array
    {
        /** @var array<string, mixed> $previewData */
        $previewData = $this->preview_data ?? [];
        /** @var array<string, mixed> $mergedData */
        $mergedData = array_merge($previewData, $data);

        return $this->compile($mergedData);
    }

    /**
     * Scope a query to only include active templates.
     *
<<<<<<< HEAD
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
>>>>>>> c0f3d67cc (.)
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
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $channel
>>>>>>> c0f3d67cc (.)
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
     * @param  Builder  $query
=======
<<<<<<< HEAD
     * @param Builder $query
     * @param string $category
>>>>>>> c0f3d67cc (.)
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
     */
    public function getChannelsLabelAttribute(): string
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
>>>>>>> 75cb51873 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> c0f3d67cc (.)
        /** @var array<int, string> $channels */
        $channels = $this->channels;

        return collect($channels)
            ->map(fn (string $channel): string => (string) __('notify::template.fields.channel.options.'.$channel.'.label'))
            ->implode(', ');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> b19cd40 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 207ac35e (.)
=======
=======
=======
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
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> 82ae73be (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> de02998b (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
=======
>>>>>>> 4689a827 (.)
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> a12f125f4a (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
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
>>>>>>> b19cd40 (.)
>>>>>>> de02998b (.)
<<<<<<< HEAD
>>>>>>> 75cb51873 (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> c0f3d67cc (.)
    }

    /**
     * Get the GrapesJS data.
     *
     * @return array<string, mixed>
     */
    public function getGrapesJSData(): array
    {
        /** @var array<string, mixed> $data */
        $data = $this->grapesjs_data ?? [];

        return $data;
    }

    /**
     * Set the GrapesJS data.
     *
     * @param  array<string, mixed>  $data
     */
    public function setGrapesJSData(array $data): self
    {
        $this->grapesjs_data = $data;

        return $this;
    }

    public function getPreviewData(): array
    {
        return $this->preview_data ?? [];
    }

    public function getPreviewSubject(): string
    {
        $result = $this->getTranslation('subject', app()->getLocale());

        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyText(): string
    {
        $result = $this->getTranslation('body_text', app()->getLocale());

        return is_string($result) ? $result : '';
    }

    public function getPreviewBodyHtml(): string
    {
        $result = $this->getTranslation('body_html', app()->getLocale());

        return is_string($result) ? $result : '';
    }
}
