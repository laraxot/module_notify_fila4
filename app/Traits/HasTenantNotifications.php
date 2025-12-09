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
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function notifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 9777d1b3 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
>>>>>>> d09cb759 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
>>>>>>> d09cb759 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 3f537838 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 3f537838 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
<<<<<<< HEAD
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function unreadNotifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
        return $this->notifications()->whereNull('read_at');
=======
        return $this->notifications()
            ->whereNull('read_at');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
        return $this->notifications()->whereNull('read_at');
=======
=======
        return $this->notifications()->whereNull('read_at');
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNull('read_at');
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNull('read_at');
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 3f537838 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 3f537838 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
<<<<<<< HEAD
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function readNotifications(): MorphMany
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
        return $this->notifications()->whereNotNull('read_at');
=======
        return $this->notifications()
            ->whereNotNull('read_at');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
=======
=======
        return $this->notifications()->whereNotNull('read_at');
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 3f537838 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 3f537838 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
    }

    /**
     * Scope per filtrare le notifiche per tenant.
<<<<<<< HEAD
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4689a827 (.)
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 207ac35e (.)
=======
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 4689a827 (.)
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 4689a827 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
>>>>>>> b93ef594b4 (.)
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 3f537838 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 3f537838 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 2941b0bd (.)
=======

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
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> b19cd40 (.)
>>>>>>> 95531e1 (.)
>>>>>>> 3f39ac8b (.)
        return $query->where('tenant_id', $tenantId);
    }

    /**
     * Ottiene l'ID del tenant corrente.
<<<<<<< HEAD
     *
     * @return string|null
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
    protected function getTenantId(): null|string
=======
    protected function getTenantId(): ?string
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function getTenantId(): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function getTenantId(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 9777d1b3 (.)
=======
    protected function getTenantId(): null|string
=======
=======
    protected function getTenantId(): null|string
=======
>>>>>>> d09cb759 (.)
=======
    protected function getTenantId(): null|string
=======
>>>>>>> d09cb759 (.)
=======
    protected function getTenantId(): null|string
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 3f537838 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function getTenantId(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 3f537838 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
    protected function getTenantId(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
    protected function getTenantId(): null|string
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
    protected function getTenantId(): null|string
>>>>>>> 2941b0bd (.)
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
<<<<<<< HEAD
=======

=======
     *
     * @return string|null
     */
<<<<<<< HEAD
    protected function getTenantId(): null|string
=======
    protected function getTenantId(): ?string
>>>>>>> b19cd40 (.)
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        return $tenantManager->getTenantId();
    }

    /**
     * Verifica se il modello appartiene al tenant specificato.
<<<<<<< HEAD
     *
     * @param string $tenantId
     * @return bool
=======
<<<<<<< HEAD
=======
     *
     * @param string $tenantId
     * @return bool
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
<<<<<<< HEAD
     *
     * @return bool
=======
<<<<<<< HEAD
=======
     *
     * @return bool
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
<<<<<<< HEAD
     *
     * @return void
=======
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
<<<<<<< HEAD
            if (!isset($model->tenant_id)) {
=======
<<<<<<< HEAD
            if (! isset($model->tenant_id)) {
=======
            if (!isset($model->tenant_id)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
                $model->tenant_id = $model->getTenantId();
            }
        });

        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
<<<<<<< HEAD
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
=======
<<<<<<< HEAD
            $builder->where($model->getTable().'.tenant_id', $model->getTenantId());
=======
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
        });
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 3f39ac8b (.)
}
=======
} 
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
}
=======
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> d09cb759 (.)
=======
}
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
}
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
}
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
}
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
}
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
}
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
