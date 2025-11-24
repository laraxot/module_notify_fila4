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
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
=======
     *
     * @return MorphMany
>>>>>>> 7148d73 (.)
     */
    public function notifications(): MorphMany
    {
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
=======
     *
     * @return MorphMany
>>>>>>> 7148d73 (.)
     */
    public function unreadNotifications(): MorphMany
    {
        return $this->notifications()->whereNull('read_at');
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
=======
     *
     * @return MorphMany
>>>>>>> 7148d73 (.)
     */
    public function readNotifications(): MorphMany
    {
        return $this->notifications()->whereNotNull('read_at');
    }

    /**
     * Scope per filtrare le notifiche per tenant.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

=======
=======
>>>>>>> 7148d73 (.)
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
     */
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
        return $query->where('tenant_id', $tenantId);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Verifica se il modello appartiene al tenant specificato.
=======
=======
>>>>>>> 7148d73 (.)
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
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
=======
     *
     * @return bool
>>>>>>> 7148d73 (.)
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model): void {
            if (! isset($model->tenant_id)) {
=======
=======
>>>>>>> 7148d73 (.)
     *
     * @return void
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
            if (!isset($model->tenant_id)) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
                $model->tenant_id = $model->getTenantId();
            }
        });

<<<<<<< HEAD
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
=======
>>>>>>> 7148d73 (.)
        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
        });
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
=======
>>>>>>> 9777d1b (.)
=======
>>>>>>> 7148d73 (.)
}
