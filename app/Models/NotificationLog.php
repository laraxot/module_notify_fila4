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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
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
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
>>>>>>> 99ff506 (.)
use Modules\Notify\Enums\NotificationLogStatusEnum;

/**
 * Modello per il logging delle notifiche.
 *
 * @property int $id
 * @property int|null $template_id
 * @property string $recipient_type
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

    /**
     * Ottiene il template associato a questo log.
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class);
    }

    /**
     * Ottiene il notifiable associato a questo log.
<<<<<<< HEAD
=======
=======
use Illuminate\Support\Carbon;
use Modules\Predict\Models\Profile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
=======
>>>>>>> b93ef594b4 (.)
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Notify\Enums\NotificationLogStatusEnum;

/**
 * Modello per il logging delle notifiche.
 *
 * @property int $id
 * @property int|null $template_id
 * @property string $recipient_type
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

    /**
     * Ottiene il template associato a questo log.
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(NotificationTemplate::class);
    }

    /**
<<<<<<< HEAD
     * Get the notifiable entity.
>>>>>>> a12f125f4a (.)
=======
     * Ottiene il notifiable associato a questo log.
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
     */
    public function notifiable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
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
<<<<<<< HEAD
=======
=======
     * Get the notification template.
     *
     * @return BelongsTo<NotificationTemplate, \Modules\Notify\Models\NotificationLog>
=======
     * Scope per filtrare i log per notifiable.
>>>>>>> b93ef594b4 (.)
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
<<<<<<< HEAD
    public function scopeWithStatus($query, string $status)
    {
>>>>>>> a12f125f4a (.)
=======
    public function scopeWithStatus(
        Builder $query,
        NotificationLogStatusEnum $status,
    ): Builder {
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
        return $query->where('status', $status);
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d284d65 (.)
     * Scope per filtrare i log per template.
     */
    public function scopeForTemplate(
        Builder $query,
        int $templateId,
    ): Builder {
        return $query->where('template_id', $templateId);
<<<<<<< HEAD
=======
=======
     * Scope to filter by channel.
     *
     * @param Builder<static> $query
     * @return Builder<static>
     */
    public function scopeForChannel($query, string $channel)
    {
        return $query->where('channel', $channel);
    }

    /**
     * Scope to filter by notifiable entity.
     *
     * @param Builder<static> $query
     * @return Builder<static>
     */
    public function scopeForNotifiable($query, Model $notifiable)
    {
        return $query->where('notifiable_type', get_class($notifiable))
            ->where('notifiable_id', $notifiable->getKey());
    }

    /**
     * Mark the notification as sent.
     */
    public function markAsSent(): self
    {
        $this->update([
            'status' => self::STATUS_SENT,
            'sent_at' => now(),
        ]);

        return $this;
    }

    /**
     * Mark the notification as delivered.
     */
    public function markAsDelivered(): self
    {
        $this->update([
            'status' => self::STATUS_DELIVERED,
            'delivered_at' => now(),
        ]);

        return $this;
    }

    /**
     * Mark the notification as failed.
     */
    public function markAsFailed(?string $message = null): self
    {
        $this->update([
            'status' => self::STATUS_FAILED,
            'status_message' => $message,
            'failed_at' => now(),
        ]);

        return $this;
    }

    /**
     * Mark the notification as opened.
     */
    public function markAsOpened(): self
    {
        $this->update([
            'status' => self::STATUS_OPENED,
            'opened_at' => now(),
        ]);

        return $this;
    }

    /**
     * Mark the notification as clicked.
     */
    public function markAsClicked(): self
    {
        $this->update([
            'status' => self::STATUS_CLICKED,
            'clicked_at' => now(),
        ]);

        return $this;
    }

    /**
     * Get the status label attribute.
     */
    public function getStatusLabelAttribute(): string
    {
        return (string) __('notify::notification.fields.status.'.$this->status);
    }

    /**
     * Get the channel label attribute.
     */
    public function getChannelLabelAttribute(): string
    {
        return (string) __('notify::notification.fields.channel.options.'.$this->channel.'.label');
>>>>>>> a12f125f4a (.)
=======
     * Scope per filtrare i log per template.
     */
    public function scopeForTemplate(
        Builder $query,
        int $templateId,
    ): Builder {
        return $query->where('template_id', $templateId);
>>>>>>> b93ef594b4 (.)
>>>>>>> d284d65 (.)
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
    }
}
