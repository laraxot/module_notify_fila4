<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
=======
use Modules\Xot\Contracts\ProfileContract;
>>>>>>> f5f1cb1 (.)
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
=======
use Illuminate\Database\Eloquent\Builder;
>>>>>>> 92ecc28 (.)
use Illuminate\Support\Carbon;
=======
use Illuminate\Support\Carbon;
>>>>>>> 5e14ac3 (.)

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
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
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
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
<<<<<<< HEAD
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 6ba141fc (.)
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
>>>>>>> 82c6772 (.)
=======
>>>>>>> 92ecc28 (.)
=======
=======
>>>>>>> f5f1cb1 (.)
>>>>>>> b94a5f6 (.)
=======
>>>>>>> 23161eb (.)
 * @mixin IdeHelperNotifyThemeable
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
