<?php

declare(strict_types=1);

namespace Modules\Notify\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Notify\Models\NotificationLog;
use Modules\Tenant\Services\TenantManager;

trait HasTenantNotifications
{
    /**
     * Ottiene tutte le notifiche per il tenant corrente.
     *
     * @return MorphMany
     *
     * @return MorphMany
     *
     * @return MorphMany
     */
    public function notifications(): MorphMany
    {
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
     *
     * @return MorphMany
     */
    public function notifications(): MorphMany
    {
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
     *
     * @return MorphMany
     *
     * @return MorphMany
     *
     * @return MorphMany
     */
    public function unreadNotifications(): MorphMany
    {
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()
            ->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()
            ->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
     *
     * @return MorphMany
     */
    public function unreadNotifications(): MorphMany
    {
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()
            ->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()
            ->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
        return $this->notifications()->whereNull('read_at');
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
     *
     * @return MorphMany
     *
     * @return MorphMany
     *
     * @return MorphMany
     */
    public function readNotifications(): MorphMany
    {
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()
            ->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()
            ->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
     *
     * @return MorphMany
     */
    public function readNotifications(): MorphMany
    {
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()
            ->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()
            ->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
        return $this->notifications()->whereNotNull('read_at');
    }

    /**
     * Scope per filtrare le notifiche per tenant.
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
     */
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
     */
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
     */
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
        return $query->where('tenant_id', $tenantId);
    }

    /**
     * Ottiene l'ID del tenant corrente.
     *
     * @return string|null
     */
    protected function getTenantId(): null|string
    protected function getTenantId(): ?string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): ?string
    protected function getTenantId(): ?string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): ?string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): null|string
    protected function getTenantId(): ?string
    protected function getTenantId(): ?string
    protected function getTenantId(): null|string
    protected function getTenantId(): ?string
    protected function getTenantId(): ?string
    protected function getTenantId(): null|string
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
        return $tenantManager->getTenantId();
    }

    /**
     * Verifica se il modello appartiene al tenant specificato.
     *
     * @param string $tenantId
     * @return bool
     * Verifica se il modello appartiene al tenant specificato.
     * Verifica se il modello appartiene al tenant specificato.
     * Ottiene l'ID del tenant corrente.
     *
     * @return string|null
     */
    protected function getTenantId(): null|string
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
        return $tenantManager->getTenantId();
    }

    /**
     * Verifica se il modello appartiene al tenant specificato.
     *
     * @param string $tenantId
     * @return bool
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
     *
     * @return bool
     *
     * @return bool
     *
     * @return bool
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
     *
     * @return void
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
            if (!isset($model->tenant_id)) {
            if (! isset($model->tenant_id)) {
            if (!isset($model->tenant_id)) {
     *
     * @return void
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
            if (!isset($model->tenant_id)) {
                $model->tenant_id = $model->getTenantId();
            }
        });

        static::addGlobalScope('tenant', function (Builder $builder) {
        static::addGlobalScope('tenant', function (Builder $builder): void {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
            $builder->where($model->getTable().'.tenant_id', $model->getTenantId());
        });
    }

    /**
     * Ottiene l'ID del tenant corrente.
     */
    protected function getTenantId(): ?string
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);

        return $tenantManager->getTenantId();
    }
        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
        static::creating(function (Model $model) {
        static::creating(function (Model $model): void {
        static::creating(function (Model $model) {
            if (! isset($model->tenant_id)) {
            if (!isset($model->tenant_id)) {
                $model->tenant_id = $model->getTenantId();
            }
        });

        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable().'.tenant_id', $model->getTenantId());
        });
    }
        });
    }
}
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
