<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;
use Modules\Notify\Enums\NotificationTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperNotificationTemplate
 * @mixin \Eloquent
 */
class NotificationTemplate extends BaseModel implements HasMedia
{
    use HasTranslations;
    use InteractsWithMedia;

    public array $translatable = [
        'subject',
        'body_text',
        'body_html',
    ];

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
}
