<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Support\Carbon;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Models\BaseMorphPivot;
=======
>>>>>>> 8bc2fc9f (first)
=======
use Modules\Xot\Models\BaseMorphPivot;
>>>>>>> 20a3d3b (.)

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
=======
>>>>>>> 8bc2fc9f (first)
=======
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
>>>>>>> 20a3d3b (.)
 *
 * @mixin IdeHelperNotifyThemeable
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
