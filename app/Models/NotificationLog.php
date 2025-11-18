<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Arr;
use Modules\Notify\Enums\NotificationLogStatusEnum;
use Modules\Xot\Models\BaseModel;

/**
 * Modello per il logging delle notifiche inviate.
=======
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Modules\Notify\Enums\NotificationLogStatusEnum;

/**
 * Modello per il logging delle notifiche.
>>>>>>> 8bc2fc9f (first)
 *
 * @property int $id
 * @property int|null $template_id
 * @property string $recipient_type
<<<<<<< HEAD
 * @property int|string $recipient_id
 * @property array<string, mixed>|null $data
 * @property array<int, string>|null $channels
 * @property NotificationLogStatusEnum|string $status
 */
class NotificationLog extends BaseModel
{
    /** @var list<string> */
=======
 * @property int $recipient_id
 * @property string $content
 * @property array $data
 * @property array $channels
 * @property NotificationLogStatusEnum $status
 * @property Carbon|null $sent_at
 * @property Carbon|null $delivered_at
 * @property Carbon|null $opened_at
 * @property Carbon|null $clicked_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read NotificationTemplate|null $template
 */
final class NotificationLog extends BaseModel
{
>>>>>>> 8bc2fc9f (first)
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

<<<<<<< HEAD
=======
    /**
     * Ottiene il template associato a questo log.
     */
>>>>>>> 8bc2fc9f (first)
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class);
    }

<<<<<<< HEAD
=======
    /**
     * Ottiene il notifiable associato a questo log.
     */
>>>>>>> 8bc2fc9f (first)
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

<<<<<<< HEAD
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
=======
    /**
     * Scope per filtrare i log per notifiable.
     */
    public function scopeForNotifiable(
        Builder $query,
        Model $notifiable,
    ): Builder {
        return $query->where('recipient_type', $notifiable->getMorphClass())->where(
            'recipient_id',
            $notifiable->getKey(),
        );
    }

    /**
     * Scope per filtrare i log per stato.
     */
    public function scopeWithStatus(
        Builder $query,
        NotificationLogStatusEnum $status,
    ): Builder {
        return $query->where('status', $status);
    }

    /**
     * Scope per filtrare i log per template.
     */
    public function scopeForTemplate(
        Builder $query,
        int $templateId,
    ): Builder {
        return $query->where('template_id', $templateId);
    }

    /**
     * Marca il log come aperto.
     */
    public function markAsOpened(): void
    {
        $this->update([
            'status' => NotificationLogStatusEnum::OPENED,
            'opened_at' => now(),
        ]);
    }

    /**
     * Marca il log come cliccato.
     */
    public function markAsClicked(): void
    {
        $this->update([
            'status' => NotificationLogStatusEnum::CLICKED,
            'clicked_at' => now(),
        ]);
>>>>>>> 8bc2fc9f (first)
    }
}
