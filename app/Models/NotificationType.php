<?php

declare(strict_types=1);

namespace Modules\Notify\Models;

<<<<<<< HEAD
/**
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
class NotificationType extends BaseModel
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static Builder<static>|NotificationType newModelQuery()
 * @method static Builder<static>|NotificationType newQuery()
 * @method static Builder<static>|NotificationType query()
 * @mixin IdeHelperNotificationType
 * @mixin \Eloquent
 */
class NotificationType extends Model
>>>>>>> 75179b8 (.)
{
    protected $fillable = [
        'name',
        'description',
        'template',
    ];
}
