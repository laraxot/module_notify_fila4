<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 99ff506 (.)

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
 *
=======
>>>>>>> 99ff506 (.)
=======
=======
<<<<<<< HEAD
>>>>>>> d284d65 (.)
>>>>>>> f813254 (.)
=======
>>>>>>> f5f1cb1 (.)
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
 *
=======
>>>>>>> 99ff506 (.)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
<<<<<<< HEAD
 *
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
<<<<<<< HEAD
<<<<<<< HEAD
 *
<<<<<<< HEAD
=======
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
>>>>>>> 99ff506 (.)
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
=======
>>>>>>> f5f1cb1 (.)
 * @mixin IdeHelperNotifyThemeable
=======
>>>>>>> 05bc3ad (.)
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
