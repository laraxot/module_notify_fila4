<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
=======
use Carbon\Carbon;
=======
>>>>>>> 20a3d3b (.)
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
<<<<<<< HEAD
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
class NotificationTemplate extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20a3d3b (.)
    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

<<<<<<< HEAD
=======
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
=======
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

>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments')->singleFile();
    }

<<<<<<< HEAD
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
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD

        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;

=======
        
        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;
        
>>>>>>> 8bc2fc9f (first)
=======

        $bodyHtmlTranslation = $this->getTranslation('body_html', app()->getLocale());
        $bodyHtml = is_string($bodyHtmlTranslation) ? $bodyHtmlTranslation : null;

>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * Compile a string template with the given data.
     *
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
    protected function compileString(?string $template, array $data): ?string
    {
        if (! $template) {
            return null;
        }

        return Blade::render($template, $data);
    }

    /**
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function scopeActive(Builder $query): Builder
=======
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeActive($query)
>>>>>>> 8bc2fc9f (first)
=======
     */
    public function scopeActive(Builder $query): Builder
>>>>>>> 20a3d3b (.)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include templates for a specific channel.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function scopeForChannel(Builder $query, string $channel): Builder
=======
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeForChannel($query, string $channel)
>>>>>>> 8bc2fc9f (first)
=======
     */
    public function scopeForChannel(Builder $query, string $channel): Builder
>>>>>>> 20a3d3b (.)
    {
        return $query->whereJsonContains('channels', $channel);
    }

    /**
     * Scope a query to only include templates for a specific category.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function scopeForCategory(Builder $query, string $category): Builder
=======
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeForCategory($query, string $category)
>>>>>>> 8bc2fc9f (first)
=======
     */
    public function scopeForCategory(Builder $query, string $category): Builder
>>>>>>> 20a3d3b (.)
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

<<<<<<< HEAD
<<<<<<< HEAD
        /** @var array<string, mixed> $data */
        return $data;
=======
        /** @var array<string, mixed> $safeData */
        $safeData = $data;

        return $safeData;
>>>>>>> 8bc2fc9f (first)
=======
        /** @var array<string, mixed> $data */
        return $data;
>>>>>>> 20a3d3b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 20a3d3b (.)

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
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

    /**
     * Compile a string template with the given data.
     *
     * @param  string|null  $template  The template to compile
     * @param  array<string, mixed>  $data  The data to compile with
     */
    protected function compileString(?string $template, array $data): ?string
    {
        if (! $template) {
            return null;
        }

        return Blade::render($template, $data);
    }
<<<<<<< HEAD
=======
>>>>>>> 8bc2fc9f (first)
=======
>>>>>>> 20a3d3b (.)
}
