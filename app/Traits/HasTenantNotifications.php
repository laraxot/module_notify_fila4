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
>>>>>>> 99ff506 (.)
     */
    public function notifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
>>>>>>> a12f125f4a (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> b93ef594b4 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
     */
    public function unreadNotifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->notifications()->whereNull('read_at');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->notifications()->whereNull('read_at');
=======
        return $this->notifications()
            ->whereNull('read_at');
>>>>>>> a12f125f4a (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> b93ef594b4 (.)
=======
        return $this->notifications()
            ->whereNull('read_at');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
     */
    public function readNotifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->notifications()->whereNotNull('read_at');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        return $this->notifications()->whereNotNull('read_at');
=======
        return $this->notifications()
            ->whereNotNull('read_at');
>>>>>>> a12f125f4a (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> b93ef594b4 (.)
=======
        return $this->notifications()
            ->whereNotNull('read_at');
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
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
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 99ff506 (.)
=======
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> f813254 (.)
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
=======
>>>>>>> e11621f (.)
=======
>>>>>>> b93ef594b4 (.)
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
        return $query->where('tenant_id', $tenantId);
    }

    /**
     * Ottiene l'ID del tenant corrente.
<<<<<<< HEAD
     */
    protected function getTenantId(): ?string
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);

=======
     *
     * @return string|null
     */
<<<<<<< HEAD
    protected function getTenantId(): null|string
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected function getTenantId(): null|string
=======
    protected function getTenantId(): ?string
>>>>>>> a12f125f4a (.)
=======
    protected function getTenantId(): null|string
>>>>>>> b93ef594b4 (.)
=======
    protected function getTenantId(): ?string
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
>>>>>>> 99ff506 (.)
        return $tenantManager->getTenantId();
    }

    /**
     * Verifica se il modello appartiene al tenant specificato.
<<<<<<< HEAD
=======
     *
     * @param string $tenantId
     * @return bool
>>>>>>> 99ff506 (.)
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
>>>>>>> 99ff506 (.)
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 99ff506 (.)
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
<<<<<<< HEAD
            if (! isset($model->tenant_id)) {
=======
            if (!isset($model->tenant_id)) {
>>>>>>> 99ff506 (.)
                $model->tenant_id = $model->getTenantId();
            }
        });

        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
<<<<<<< HEAD
            $builder->where($model->getTable().'.tenant_id', $model->getTenantId());
=======
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
>>>>>>> 99ff506 (.)
        });
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
