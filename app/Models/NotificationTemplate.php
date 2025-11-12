<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
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
=======
>>>>>>> f5f1cb1 (.)
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
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
>>>>>>> 99ff506 (.)
use Spatie\Translatable\HasTranslations;

/**
<<<<<<< HEAD
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
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> 6a92a74 (.)
 * @mixin IdeHelperNotificationTemplate
=======
>>>>>>> 05bc3ad (.)
 * @mixin \Eloquent
 */
/**
 * @property NotificationTypeEnum $type
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property-read string $channels_label
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read mixed $translations
 * @property-read \Modules\Xot\Contracts\ProfileContract|null $updater
 *
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
 *
=======
 * @mixin IdeHelperNotificationTemplate
>>>>>>> ab15d0e (.)
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
    #[\Override]
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
        $this->addMediaCollection('attachments')->singleFile();
    }

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
        $subjectTranslation = $this->getTranslation('subject', app()->getLocale());
        $subject = is_string($subjectTranslation) ? $subjectTranslation : null;
        
        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;
        
        $bodyTextTranslation = $this->getTranslation('body_text', app()->getLocale());
        $bodyText = is_string($bodyTextTranslation) ? $bodyTextTranslation : null;

        $subjectResult = $this->compileString($subject, $data);
        $bodyHtmlResult = $this->compileString($bodyHtml, $data);
        $bodyTextResult = $this->compileString($bodyText, $data);

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
<<<<<<< HEAD
        if (! $this->conditions) {
=======
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
>>>>>>> 99ff506 (.)
=======
        /** @var array|null $conditions */
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
>>>>>>> ffb0ad3 (.)
=======
        if (! $this->conditions) {
>>>>>>> ab15d0e (.)
=======
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
>>>>>>> 6a92a74 (.)
            return true;
        }

        if (! is_array($conditions)) {
            return true;
        }

        foreach ($conditions as $path => $value) {
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
    protected function compileString(null|string $template, array $data): null|string
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
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Builder  $query
=======
=======
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
     * @param Builder $query
>>>>>>> 99ff506 (.)
     * @return Builder
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
     * @return Builder
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
     * @return Builder
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
<<<<<<< HEAD
<<<<<<< HEAD
        return collect($this->channels)
<<<<<<< HEAD
<<<<<<< HEAD
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
=======
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 99ff506 (.)
=======
=======
        /** @var array $channels */
=======
>>>>>>> 6a92a74 (.)
        $channels = $this->getAttribute('channels');
        if (! is_array($channels)) {
            $channels = [];
        }

        return collect($channels)
<<<<<<< HEAD
>>>>>>> ffb0ad3 (.)
            ->map(function ($channel): string {
                $channelStr = is_string($channel) ? $channel : (string) $channel;

                return (string) __('notify::template.fields.channel.options.'.$channelStr.'.label');
            })
>>>>>>> 05bc3ad (.)
=======
        return collect($this->channels)
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.$channel.'.label'))
>>>>>>> ab15d0e (.)
=======
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.(is_string($channel) ? $channel : (string) $channel).'.label'))
>>>>>>> 6a92a74 (.)
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

        /** @var array<string, mixed> $safeData */
        $safeData = $data;

        return $safeData;
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->grapesjs_data = $data;
<<<<<<< HEAD
=======
        $this->setAttribute('grapesjs_data', $data);
>>>>>>> ffb0ad3 (.)
=======
        $this->grapesjs_data = $data;
>>>>>>> ab15d0e (.)
=======
        $this->setAttribute('grapesjs_data', $data);
>>>>>>> 6a92a74 (.)

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
}
