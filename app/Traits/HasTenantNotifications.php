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
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
     */
    public function notifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
>>>>>>> b19cd40 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
     */
    public function unreadNotifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->notifications()->whereNull('read_at');
=======
        return $this->notifications()
            ->whereNull('read_at');
>>>>>>> b19cd40 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
     */
    public function readNotifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->notifications()->whereNotNull('read_at');
=======
        return $this->notifications()
            ->whereNotNull('read_at');
>>>>>>> b19cd40 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
    }

    /**
     * Scope per filtrare le notifiche per tenant.
<<<<<<< HEAD
     */
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

=======
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35 (.)
        return $query->where('tenant_id', $tenantId);
    }

    /**
<<<<<<< HEAD
     * Verifica se il modello appartiene al tenant specificato.
=======
     * Ottiene l'ID del tenant corrente.
     *
     * @return string|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getTenantId(): null|string
=======
    protected function getTenantId(): ?string
>>>>>>> b19cd40 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 4e2ebfb (.)
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
>>>>>>> 75179b8 (.)
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
<<<<<<< HEAD
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model): void {
            if (! isset($model->tenant_id)) {
=======
     *
     * @return void
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
            if (!isset($model->tenant_id)) {
>>>>>>> 75179b8 (.)
                $model->tenant_id = $model->getTenantId();
            }
        });

<<<<<<< HEAD
        static::addGlobalScope('tenant', function (Builder $builder): void {
            /** @var Model $model */
            $model = $builder->getModel();
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
=======
        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
        });
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
}
=======
} 
>>>>>>> b19cd40 (.)
=======
}
>>>>>>> 4e2ebfb (.)
