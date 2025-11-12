<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateFactory;
use Modules\Notify\Enums\NotificationTypeEnum;
use Modules\User\Models\Profile;
use Override;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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
use Illuminate\Support\Facades\Blade;
<<<<<<< HEAD
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
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
>>>>>>> 99ff506 (.)
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
 * @property-read Profile|null $creator
 * @property-read int|null $logs_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read Profile|null $updater
 * @property-read int|null $versions_count
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
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
 *
=======
>>>>>>> 99ff506 (.)
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
>>>>>>> f813254 (.)
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
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
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
>>>>>>> d284d65 (.)
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
=======
=======
=======
>>>>>>> origin/develop
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
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
=======
=======
>>>>>>> origin/develop
     
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
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    /**
     * Compile the template with the given data.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data  The data to compile the template with
=======
     * @param array<string, mixed> $data The data to compile the template with
>>>>>>> 99ff506 (.)
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
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
    protected function compileString(?string $template, array $data): ?string
    {
        if (! $template) {
=======
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
    {
        if (!$template) {
>>>>>>> 99ff506 (.)
            return null;
        }

        return Blade::render($template, $data);
    }

    /**
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
        $mergedData = array_merge($previewData, $data);

        return $this->compile($mergedData);
    }

    /**
     * Scope a query to only include active templates.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
     * @param Builder $query
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
     * @param Builder $query
     * @param string $channel
>>>>>>> 99ff506 (.)
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
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
     * @param Builder $query
     * @param string $category
>>>>>>> 99ff506 (.)
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
=======
     *
     * @return string
>>>>>>> 99ff506 (.)
     */
    public function getChannelsLabelAttribute(): string
    {
<<<<<<< HEAD
        return collect($this->channels)
<<<<<<< HEAD
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
=======
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 99ff506 (.)
            ->implode(', ');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> a12f125f4a (.)
=======
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
            ->implode(', ');
>>>>>>> b93ef594b4 (.)
=======
        return collect($this->channels)->map(function ($channel) {
            return __('notify::template.fields.channel.options.' . $channel . '.label');
        })->implode(', ');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Get the GrapesJS data.
     *
     * @return array<string, mixed>
     */
    public function getGrapesJSData(): array
    {
        return $this->grapesjs_data ?? [];
    }

    /**
     * Set the GrapesJS data.
     *
<<<<<<< HEAD
     * @param  array<string, mixed>  $data
=======
     * @param array<string, mixed> $data
     * @return self
>>>>>>> 99ff506 (.)
     */
    public function setGrapesJSData(array $data): self
    {
        $this->grapesjs_data = $data;
<<<<<<< HEAD

=======
>>>>>>> 99ff506 (.)
        return $this;
    }

    public function getPreviewData(): array
    {
        return $this->preview_data ?? [];
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
}
