<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

use Illuminate\Database\Eloquent\Builder;

/**
 * @method static Builder<static>|NotificationType newModelQuery()
 * @method static Builder<static>|NotificationType newQuery()
 * @method static Builder<static>|NotificationType query()
 * @mixin \Eloquent
 */
class NotificationType extends BaseModel
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
