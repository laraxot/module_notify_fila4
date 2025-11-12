<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Xot\Models\BaseModel;

/**
 * @property int $id
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property string $title
 * @property string $content
 * @property array<int, string> $channels
 * @property array<string, mixed>|null $data
 * @property Carbon|null $sent_at
 * @property string $status
 * @property string|null $error
<<<<<<< HEAD
=======
 * @property-read \Modules\Quaeris\Models\Profile|null $creator
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
 * @property-read int|null $media_count
 * @property-read Model|\Eloquent $notifiable
 * @property-read \Modules\Quaeris\Models\Profile|null $updater
 *
 * @method static \Modules\Notify\Database\Factories\NotificationLogFactory factory($count = null, $state = [])
 * @method static Builder<static>|NotificationLog forNotifiable(\Illuminate\Database\Eloquent\Model $notifiable)
 * @method static Builder<static>|NotificationLog forTemplate(int $templateId)
 * @method static Builder<static>|NotificationLog newModelQuery()
 * @method static Builder<static>|NotificationLog newQuery()
 * @method static Builder<static>|NotificationLog query()
 * @method static Builder<static>|NotificationLog whereChannels($value)
 * @method static Builder<static>|NotificationLog whereContent($value)
 * @method static Builder<static>|NotificationLog whereCreatedAt($value)
 * @method static Builder<static>|NotificationLog whereData($value)
 * @method static Builder<static>|NotificationLog whereError($value)
 * @method static Builder<static>|NotificationLog whereId($value)
 * @method static Builder<static>|NotificationLog whereNotifiableId($value)
 * @method static Builder<static>|NotificationLog whereNotifiableType($value)
 * @method static Builder<static>|NotificationLog whereSentAt($value)
 * @method static Builder<static>|NotificationLog whereStatus($value)
 * @method static Builder<static>|NotificationLog whereTitle($value)
 * @method static Builder<static>|NotificationLog whereUpdatedAt($value)
 * @method static Builder<static>|NotificationLog withStatus(\Modules\Notify\Enums\NotificationLogStatusEnum $status)
 *
 * @mixin \Eloquent
>>>>>>> 6ba141fc (.)
 */
class NotificationLog extends BaseModel
{
    /**
     * @var list<string>
     */
    protected $fillable = [
        'notifiable_type',
        'notifiable_id',
        'title',
        'content',
        'channels',
        'data',
        'sent_at',
        'status',
        'error',
    ];

<<<<<<< HEAD
    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'channels' => 'array',
            'data' => 'array',
            'sent_at' => 'datetime',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
=======
    protected $casts = [
        'data' => 'array',
        'channels' => 'array',
        'sent_at' => 'datetime',
        'delivered_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
        'status' => NotificationLogStatusEnum::class,
    ];
>>>>>>> 6ba141fc (.)

    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeOlderThan(Builder $query, int $days): Builder
    {
        return $query->where('created_at', '<', now()->subDays($days));
    }

    public function scopeForNotifiable(Builder $query, string $type, int $id): Builder
    {
        return $query->where('notifiable_type', $type)->where('notifiable_id', $id);
    }

    public function markAsOpened(): void
    {
        $this->updateStatus(NotificationLogStatusEnum::OPENED);
    }

    public function markAsClicked(): void
    {
        $this->updateStatus(NotificationLogStatusEnum::CLICKED);
    }

    private function updateStatus(NotificationLogStatusEnum $status): void
    {
        $metadata = $this->data ?? [];
        if (! is_array($metadata)) {
            /** @var array<string, mixed> $metadata */
            $metadata = Arr::wrap($metadata);
        }

        $statusHistory = $metadata['status_history'] ?? [];
        if (! is_array($statusHistory)) {
            $statusHistory = [];
        }

        $statusHistory[] = [
            'status' => $status->value,
            'timestamp' => now()->toIso8601String(),
        ];

        $metadata['status_history'] = $statusHistory;

        $this->forceFill([
            'status' => $status->value,
            'data' => $metadata,
        ])->save();
    }
}
