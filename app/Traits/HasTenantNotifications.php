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
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
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
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
>>>>>>> f2e64178 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
=======
>>>>>>> 2effe245 (.)
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
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 58816034 (.)
=======
     *
     * @return MorphMany
=======
>>>>>>> f1c9518b (.)
     */
    public function notifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')
            ->where('tenant_id', $this->getTenantId());
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $this->morphMany(NotificationLog::class, 'notifiable')->where('tenant_id', $this->getTenantId());
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    }

    /**
     * Ottiene le notifiche non lette per il tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
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
=======
        return $this->notifications()->whereNull('read_at');
=======
>>>>>>> f2e64178 (.)
=======
        return $this->notifications()->whereNull('read_at');
=======
>>>>>>> 2effe245 (.)
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
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 58816034 (.)
=======
     *
     * @return MorphMany
=======
>>>>>>> f1c9518b (.)
     */
    public function unreadNotifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->notifications()->whereNull('read_at');
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
        return $this->notifications()
            ->whereNull('read_at');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $this->notifications()->whereNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    }

    /**
     * Ottiene le notifiche lette per il tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return MorphMany
=======
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
=======
     *
     * @return MorphMany
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
     *
     * @return MorphMany
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
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
=======
>>>>>>> 4d2eb53e (.)
=======
>>>>>>> 2fc60436 (.)
=======
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 4d2eb53e (.)
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
=======
        return $this->notifications()->whereNotNull('read_at');
=======
>>>>>>> f2e64178 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
=======
>>>>>>> 2effe245 (.)
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
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 58816034 (.)
=======
     *
     * @return MorphMany
=======
>>>>>>> f1c9518b (.)
     */
    public function readNotifications(): MorphMany
    {
<<<<<<< HEAD
        return $this->notifications()->whereNotNull('read_at');
<<<<<<< HEAD
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
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 3f39ac8b (.)
=======
        return $this->notifications()
            ->whereNotNull('read_at');
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73be (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
=======
>>>>>>> 4689a827 (.)
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
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 3f39ac8b (.)
=======
=======
        return $this->notifications()->whereNotNull('read_at');
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
    }

    /**
     * Scope per filtrare le notifiche per tenant.
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @param Builder $query
     * @param string|null $tenantId
     * @return Builder
=======
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
>>>>>>> c8b1c8bf (.)
=======
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
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
=======
=======
<<<<<<< HEAD
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f813254 (.)
=======
>>>>>>> 2effe245 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 4689a827 (.)
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
>>>>>>> a12f125f4a (.)
>>>>>>> f813254 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> 2effe245 (.)
=======
>>>>>>> a12f125f4a (.)
>>>>>>> d09cb759 (.)
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
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
<<<<<<< HEAD
>>>>>>> 4d2eb53e (.)
=======
=======
>>>>>>> e11621f (.)
<<<<<<< HEAD
>>>>>>> 888799d0 (.)
=======
=======
=======
>>>>>>> 2effe245 (.)
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
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> d45a0226 (.)
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
=======
=======
>>>>>>> f1c9518b (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> de02998b (.)
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 011072e4 (.)
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 4e2ebfb (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
=======
=======
>>>>>>> 9777d1b (.)
>>>>>>> 58816034 (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 82ae73be (.)
=======
>>>>>>> 207ac35e (.)
=======
>>>>>>> 9777d1b3 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> de02998b (.)
=======
>>>>>>> 011072e4 (.)
=======
>>>>>>> 161887a2 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
>>>>>>> 99ff506 (.)
=======
=======
    public function scopeForTenant(Builder $query, ?string $tenantId = null): Builder
    {
        $tenantId = $tenantId ?? $this->getTenantId();
>>>>>>> b19cd40 (.)
<<<<<<< HEAD
>>>>>>> 95531e1 (.)
<<<<<<< HEAD
>>>>>>> 3f39ac8b (.)
=======
=======
=======
    public function scopeForTenant(Builder $query, null|string $tenantId = null): Builder
    {
        $tenantId ??= $this->getTenantId();
>>>>>>> 4e2ebfb (.)
>>>>>>> 0f07e6d (.)
>>>>>>> 4d2eb53e (.)
        return $query->where('tenant_id', $tenantId);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    protected function getTenantId(): ?string
=======
<<<<<<< HEAD
    protected function getTenantId(): null|string
=======
>>>>>>> 2effe245 (.)
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
=======
>>>>>>> f813254 (.)
>>>>>>> 2effe245 (.)
=======
    protected function getTenantId(): ?string
>>>>>>> 985c7bda (.)
=======
    protected function getTenantId(): ?string
=======
    protected function getTenantId(): null|string
>>>>>>> f5f1cb1 (.)
>>>>>>> d45a0226 (.)
    {
        /** @var TenantManager */
        $tenantManager = app(TenantManager::class);
<<<<<<< HEAD
=======

=======
     *
     * @return string|null
     */
    protected function getTenantId(): null|string
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
=======
<<<<<<< HEAD
     * Verifica se il modello appartiene al tenant specificato.
=======
=======
>>>>>>> 75179b85 (.)
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
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
     */
    public function belongsToTenant(string $tenantId): bool
    {
        return $this->tenant_id === $tenantId;
    }

    /**
     * Verifica se il modello appartiene al tenant corrente.
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
     *
     * @return bool
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
     *
     * @return bool
>>>>>>> 75179b85 (.)
     */
    public function belongsToCurrentTenant(): bool
    {
        return $this->belongsToTenant($this->getTenantId());
    }

    /**
     * Boot del trait.
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> c8b1c8bf (.)
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
<<<<<<< HEAD
            if (!isset($model->tenant_id)) {
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 75179b85 (.)
     *
     * @return void
     */
    public static function bootHasTenantNotifications(): void
    {
        static::creating(function (Model $model) {
            if (!isset($model->tenant_id)) {
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
                $model->tenant_id = $model->getTenantId();
            }
        });

<<<<<<< HEAD
<<<<<<< HEAD
        static::addGlobalScope('tenant', function (Builder $builder) {
=======
<<<<<<< HEAD
        static::addGlobalScope('tenant', function (Builder $builder): void {
>>>>>>> c8b1c8bf (.)
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
=======
>>>>>>> 4d2eb53e (.)
=======

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
>>>>>>> 99ff506 (.)
        return $tenantManager->getTenantId();
    }
<<<<<<< HEAD
=======
=======
>>>>>>> 75179b85 (.)
        static::addGlobalScope('tenant', function (Builder $builder) {
            /** @var Model $model */
            $model = $builder->getModel();
            $builder->where($model->getTable() . '.tenant_id', $model->getTenantId());
=======

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
>>>>>>> 75179b8 (.)
<<<<<<< HEAD
>>>>>>> c8b1c8bf (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 82ae73b (.)
<<<<<<< HEAD
>>>>>>> 2fc60436 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> 207ac35 (.)
<<<<<<< HEAD
>>>>>>> ce89c8bb (.)
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
=======
>>>>>>> 4d2eb53e (.)
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
>>>>>>> 58816034 (.)
=======
>>>>>>> 9777d1b (.)
}
<<<<<<< HEAD
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
=======
}
=======
>>>>>>> f2e64178 (.)
=======
}
=======
>>>>>>> 2effe245 (.)
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
<<<<<<< HEAD
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
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
=======
}
>>>>>>> 888799d0 (.)
=======
>>>>>>> f2e64178 (.)
=======
}
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 2effe245 (.)
=======
}
>>>>>>> 985c7bda (.)
=======
>>>>>>> 2fc60436 (.)
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> ce89c8bb (.)
=======
>>>>>>> 58816034 (.)
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
=======
=======
}
>>>>>>> 4e2ebfb (.)
>>>>>>> 4d2eb53e (.)
