<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
=======
=======
>>>>>>> 82ae73b (.)
=======
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
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
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
use Illuminate\Support\Facades\Blade;
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)
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
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
class NotificationTemplate extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

<<<<<<< HEAD
<<<<<<< HEAD
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')->singleFile();
    }

    /**
     * Compile the template with the given data.
     *
     * @param  array<string, mixed>  $data  The data to compile the template with
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
     * @param  array<string, mixed>  $data  The data to check conditions against
     */
    public function shouldSend(array $data = []): bool
    {
        $conditions = $this->getAttribute('conditions');
        if (! $conditions) {
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
     * Preview the template with the given data.
     *
     * @param  array<string, mixed>  $data  Additional data to merge with preview data
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
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include templates for a specific channel.
     */
    public function scopeForChannel(Builder $query, string $channel): Builder
    {
        return $query->whereJsonContains('channels', $channel);
    }

    /**
     * Scope a query to only include templates for a specific category.
     */
    public function scopeForCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    /**
     * Get the channels label attribute.
     */
    public function getChannelsLabelAttribute(): string
    {
        $channels = $this->getAttribute('channels');
        if (! is_array($channels)) {
            $channels = [];
        }

        return collect($channels)
            ->map(fn ($channel) => __('notify::template.fields.channel.options.'.(is_string($channel) ? $channel : (string) $channel).'.label'))
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
     * @param  array<string, mixed>  $data
     */
    public function setGrapesJSData(array $data): self
    {
        $this->setAttribute('grapesjs_data', $data);

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

=======
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
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
=======
    #[Override]
>>>>>>> 75179b8 (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
>>>>>>> 82ae73b (.)
=======
    #[Override]
=======
>>>>>>> b19cd40 (.)
=======
    #[Override]
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
=======
    #[Override]
>>>>>>> 9777d1b (.)
=======
    #[Override]
>>>>>>> 7148d73 (.)
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
    /**
     * Compile a string template with the given data.
     *
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
    protected function compileString(?string $template, array $data): ?string
    {
        if (! $template) {
=======
=======
>>>>>>> 7148d73 (.)
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

    public function registerMediaCollections(): void
    {
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
    /**
     * Compile the template with the given data.
     *
     * @param array<string, mixed> $data The data to compile the template with
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
     * @param array<string, mixed> $data The data to check conditions against
     * @return bool
     */
    public function shouldSend(array $data = []): bool
    {
        if (!$this->conditions) {
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
     * @param string|null $template The template to compile
     * @param array<string, mixed> $data The data to compile with
     * @return string|null
     */
    protected function compileString(null|string $template, array $data): null|string
    {
        if (!$template) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
            return null;
        }

        return Blade::render($template, $data);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7148d73 (.)

    /**
     * Preview the template with the given data.
     *
     * @param array<string, mixed> $data Additional data to merge with preview data
     * @return array{subject: string, body_html: string|null, body_text: string|null}
     */
    public function preview(array $data = []): array
    {
<<<<<<< HEAD
        $previewData = $this->preview_data ?? [];
=======
        /** @var array<string, mixed> $previewData */
        $previewData = $this->preview_data ?? [];
        /** @var array<string, mixed> $mergedData */
>>>>>>> 7148d73 (.)
        $mergedData = array_merge($previewData, $data);

        return $this->compile($mergedData);
    }

    /**
     * Scope a query to only include active templates.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include templates for a specific channel.
     *
     * @param Builder $query
     * @param string $channel
     * @return Builder
     */
    public function scopeForChannel($query, string $channel)
    {
        return $query->whereJsonContains('channels', $channel);
    }

    /**
     * Scope a query to only include templates for a specific category.
     *
     * @param Builder $query
     * @param string $category
     * @return Builder
     */
    public function scopeForCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Get the channels label attribute.
     *
     * @return string
     */
    public function getChannelsLabelAttribute(): string
    {
<<<<<<< HEAD
        return collect($this->channels)
            ->map(fn($channel) => __('notify::template.fields.channel.options.' . $channel . '.label'))
=======
        /** @var array<int, string> $channels */
        $channels = $this->channels;
        return collect($channels)
            ->map(fn(string $channel): string => (string) __('notify::template.fields.channel.options.' . $channel . '.label'))
>>>>>>> 7148d73 (.)
            ->implode(', ');
    }

    /**
     * Get the GrapesJS data.
     *
     * @return array<string, mixed>
     */
    public function getGrapesJSData(): array
    {
<<<<<<< HEAD
        return $this->grapesjs_data ?? [];
=======
        /** @var array<string, mixed> $data */
        $data = $this->grapesjs_data ?? [];
        return $data;
>>>>>>> 7148d73 (.)
    }

    /**
     * Set the GrapesJS data.
     *
     * @param array<string, mixed> $data
     * @return self
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
}
