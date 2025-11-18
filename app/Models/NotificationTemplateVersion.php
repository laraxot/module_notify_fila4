<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Media\Models\Media;
use Modules\User\Models\Profile;
use Modules\Xot\Traits\Updater;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateVersionFactory;
use Modules\User\Models\Profile;
use Modules\Xot\Traits\Updater;
use RuntimeException;
>>>>>>> 8bc2fc9f (first)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

// BaseModel in same namespace provides common behaviors
/**
<<<<<<< HEAD
 * @property Profile|null                $creator
 * @property MediaCollection<int, Media> $media
 * @property int|null                    $media_count
 * @property NotificationTemplate|null   $template
 * @property Profile|null                $updater
=======
 * @property-read Profile|null $creator
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read NotificationTemplate|null $template
 * @property-read Profile|null $updater
 *
 * @method static NotificationTemplateVersionFactory factory($count = null, $state = [])
 * @method static Builder<static>|NotificationTemplateVersion newModelQuery()
 * @method static Builder<static>|NotificationTemplateVersion newQuery()
 * @method static Builder<static>|NotificationTemplateVersion query()
>>>>>>> 8bc2fc9f (first)
 *
 * @mixin IdeHelperNotificationTemplateVersion
 * @mixin \Eloquent
 */
class NotificationTemplateVersion extends BaseModel
{
    use Updater;

    protected $fillable = [
        'template_id',
        'subject',
        'body_html',
        'body_text',
        'channels',
        'variables',
        'conditions',
        'version',
        'created_by',
        'change_notes',
    ];

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
            'channels' => 'array',
            'variables' => 'array',
            'conditions' => 'array',
        ];
    }

>>>>>>> 8bc2fc9f (first)
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }

<<<<<<< HEAD
    public function restore(): bool
=======
    public function restore(): NotificationTemplate
>>>>>>> 8bc2fc9f (first)
    {
        $template = $this->template;

        if (! $template) {
<<<<<<< HEAD
            throw new \RuntimeException('Template not found for version '.$this->id);
=======
            throw new RuntimeException('Template not found for version '.$this->id);
>>>>>>> 8bc2fc9f (first)
        }

        $template->update([
            'subject' => $this->subject ?? null,
            'body_html' => $this->body_html ?? null,
            'body_text' => $this->body_text ?? null,
            'channels' => $this->channels ?? null,
            'variables' => $this->variables ?? null,
            'conditions' => $this->conditions ?? null,
        ]);

<<<<<<< HEAD
        return parent::restore();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'channels' => 'array',
            'variables' => 'array',
            'conditions' => 'array',
        ];
=======
        return $template;
>>>>>>> 8bc2fc9f (first)
    }
}
