<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use RuntimeException;
use Modules\User\Models\Profile;
<<<<<<< HEAD
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateVersionFactory;
>>>>>>> f813254 (.)
use Illuminate\Database\Eloquent\Builder;
=======
=======
use RuntimeException;
use Modules\User\Models\Profile;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
>>>>>>> a12f125f4a (.)
=======
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Override;
use RuntimeException;
use Modules\User\Models\Profile;
>>>>>>> b93ef594b4 (.)
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateVersionFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Media\Models\Media;
use Modules\Notify\Database\Factories\NotificationTemplateVersionFactory;
use Modules\User\Models\Profile;
use Modules\Xot\Traits\Updater;
use RuntimeException;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;

// BaseModel in same namespace provides common behaviors
/**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
 *
=======
<<<<<<< HEAD
=======
=======
 * @property-read \Modules\User\Models\Profile|null $creator
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read \Modules\Notify\Models\NotificationTemplate|null $template
 * @property-read \Modules\User\Models\Profile|null $updater
 * @method static \Modules\Notify\Database\Factories\NotificationTemplateVersionFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplateVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplateVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotificationTemplateVersion query()
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
<<<<<<< HEAD
    #[\Override]
=======
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
>>>>>>> 82c6772 (.)
    protected function casts(): array
    {
        return [
            'channels' => 'array',
            'variables' => 'array',
            'conditions' => 'array',
        ];
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class, 'template_id');
    }

    public function restore(): NotificationTemplate
    {
        $template = $this->template;
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)

        if (! $template) {
            throw new RuntimeException('Template not found for version '.$this->id);
        }

<<<<<<< HEAD
=======
=======
        
        if (!$template) {
            throw new RuntimeException('Template not found for version ' . $this->id);
        }
        
>>>>>>> a12f125f4a (.)
=======

        if (!$template) {
            throw new RuntimeException('Template not found for version ' . $this->id);
        }

>>>>>>> b93ef594b4 (.)
=======
        
        if (!$template) {
            throw new \RuntimeException('Template not found for version ' . $this->id);
        }
        
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
        $template->update([
            'subject' => $this->subject ?? null,
            'body_html' => $this->body_html ?? null,
            'body_text' => $this->body_text ?? null,
            'channels' => $this->channels ?? null,
            'variables' => $this->variables ?? null,
            'conditions' => $this->conditions ?? null,
        ]);

        return $template;
    }
<<<<<<< HEAD
}
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> a12f125f4a (.)
=======
}
>>>>>>> b93ef594b4 (.)
=======
} 
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
