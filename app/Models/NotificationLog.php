<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Arr;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Xot\Models\BaseModel;

/**
 * Modello per il logging delle notifiche inviate.
 *
 * @property int $id
 * @property int|null $template_id
 * @property string $recipient_type
 * @property int|string $recipient_id
 * @property array<string, mixed>|null $data
 * @property array<int, string>|null $channels
 * @property NotificationLogStatusEnum|string $status
 */
class NotificationLog extends BaseModel
{
    /** @var list<string> */
    protected $fillable = [
        'template_id',
        'recipient_id',
        'recipient_type',
        'content',
        'data',
        'channels',
        'status',
        'sent_at',
        'delivered_at',
        'opened_at',
        'clicked_at',
    ];

    protected $casts = [
        'data' => 'array',
        'channels' => 'array',
        'sent_at' => 'datetime',
        'delivered_at' => 'datetime',
        'opened_at' => 'datetime',
        'clicked_at' => 'datetime',
        'status' => NotificationLogStatusEnum::class,
    ];

    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class);
    }

    public function notifiable(): MorphTo
    {
        return $this->morphTo();
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
