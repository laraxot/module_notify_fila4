<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> f2e64178 (.)
=======
>>>>>>> 98d837b9 (.)
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
<<<<<<< HEAD
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> fbed41ac (.)
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> f5f1cb1 (.)
=======
>>>>>>> c8b1c8bf (.)
use Illuminate\Support\Carbon;
>>>>>>> b94a5f6 (.)
use Modules\Xot\Contracts\ProfileContract;
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
=======
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 92ecc28 (.)
>>>>>>> 985c7bda (.)
use Illuminate\Support\Carbon;
<<<<<<< HEAD
use Modules\Xot\Models\BaseMorphPivot;
=======
<<<<<<< HEAD
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
>>>>>>> 75179b8 (.)
=======
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> f1c9518b (.)
=======
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
use Illuminate\Support\Carbon;
>>>>>>> 5e14ac3 (.)
>>>>>>> fbed41ac (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 75179b85 (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 75179b855 (.)
=======
>>>>>>> f1c9518b (.)

/**
 * Modules\Notify\Models\NotifyThemeable.
 *
 * @property int $id
 * @property string|null $model_type
 * @property int|null $model_id
 * @property Carbon|null $created_at
 * @property string|null $created_by
 * @property Carbon|null $updated_at
 * @property string|null $updated_by
 * @property int|null $notify_theme_id
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> c8b1c8bf (.)
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
=======
<<<<<<< HEAD
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2cbbc069 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 7c1c276f (rebase 210)
 *
=======
>>>>>>> 99ff506 (.)
=======
=======
<<<<<<< HEAD
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
=======
>>>>>>> fbed41ac (.)
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
<<<<<<< HEAD
>>>>>>> 98d837b9 (.)
=======
=======
>>>>>>> a80c61f (.)
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
>>>>>>> d45a0226 (.)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 75179b855 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
>>>>>>> 2cbbc069 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
 * @method static Builder|NotifyThemeable newModelQuery()
 * @method static Builder|NotifyThemeable newQuery()
 * @method static Builder|NotifyThemeable query()
 * @method static Builder|NotifyThemeable whereCreatedAt($value)
 * @method static Builder|NotifyThemeable whereCreatedBy($value)
 * @method static Builder|NotifyThemeable whereId($value)
 * @method static Builder|NotifyThemeable whereModelId($value)
 * @method static Builder|NotifyThemeable whereModelType($value)
 * @method static Builder|NotifyThemeable whereNotifyThemeId($value)
 * @method static Builder|NotifyThemeable whereUpdatedAt($value)
 * @method static Builder|NotifyThemeable whereUpdatedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 7c1c276f (rebase 210)
<<<<<<< HEAD
 *
=======
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> a80c61f (.)
>>>>>>> 7c1c276f (rebase 210)
=======
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> 75179b85 (.)
=======
>>>>>>> 75179b855 (.)
=======
>>>>>>> 2cbbc069 (.)
=======
 *
=======
>>>>>>> 99ff506 (.)
>>>>>>> f1c9518b (.)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 75179b85 (.)
=======
=======
>>>>>>> 4689a827 (.)
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereNotifyThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedBy($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
<<<<<<< HEAD
>>>>>>> d09cb759 (.)
=======
>>>>>>> 3f537838 (.)
=======
>>>>>>> 4689a827 (.)
=======
>>>>>>> 2941b0bd (.)
=======
=======
>>>>>>> 7c1c276f (rebase 210)
<<<<<<< HEAD
=======
>>>>>>> f1c9518b (.)
 *
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> 99ff506 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f1c9518b (.)
=======
=======
>>>>>>> 985c7bda (.)
=======
>>>>>>> d45a0226 (.)
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
>>>>>>> 2effe245 (.)
=======
=======
<<<<<<< HEAD
=======
=======
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable query()
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereNotifyThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NotifyThemeable whereUpdatedBy($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> origin/develop
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> f2e64178 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> 98d837b9 (.)
=======
>>>>>>> 82c6772 (.)
<<<<<<< HEAD
>>>>>>> 2effe245 (.)
=======
=======
>>>>>>> 92ecc28 (.)
<<<<<<< HEAD
>>>>>>> 985c7bda (.)
=======
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
>>>>>>> d45a0226 (.)
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> 75179b8 (.)
>>>>>>> c8b1c8bf (.)
=======
>>>>>>> f1c9518b (.)
 * @mixin IdeHelperNotifyThemeable
=======
<<<<<<< HEAD
>>>>>>> 2cbbc069 (.)
=======
>>>>>>> 05bc3ad (.)
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> a80c61f (.)
>>>>>>> 7c1c276f (rebase 210)
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
 * @mixin IdeHelperNotifyThemeable
>>>>>>> 75179b85 (.)
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
 * @mixin IdeHelperNotifyThemeable
>>>>>>> 75179b855 (.)
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> 2cbbc069 (.)
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
