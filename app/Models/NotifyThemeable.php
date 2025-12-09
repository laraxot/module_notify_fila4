<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Support\Carbon;
use Modules\Xot\Models\BaseMorphPivot;

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
 * @property Carbon|null $deleted_at
 * @property string|null $deleted_by
 *
 * @mixin IdeHelperNotifyThemeable
 * @mixin \Eloquent
 */
class NotifyThemeable extends BaseMorphPivot
{
    // ...
}
