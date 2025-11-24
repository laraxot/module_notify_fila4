<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Xot\Models\BaseMorphPivot;
=======
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 75179b8 (.)
=======
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Support\Carbon;
>>>>>>> 7148d73 (.)

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
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
=======
=======
>>>>>>> 7148d73 (.)
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
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @method static Builder<static>|NotifyThemeable whereDeletedAt($value)
 * @method static Builder<static>|NotifyThemeable whereDeletedBy($value)
<<<<<<< HEAD
>>>>>>> 75179b8 (.)
=======
>>>>>>> 7148d73 (.)
 * @mixin IdeHelperNotifyThemeable
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
